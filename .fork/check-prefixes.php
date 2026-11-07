<?php
/**
 * Fails if the plugin, or the prefixed dependencies, still reference an
 * unprefixed copy of a dependency.
 *
 * Usage (from the plugin root, after `composer install`): php .fork/check-prefixes.php
 *
 * Why this exists: the test suite cannot catch these mistakes, because tests
 * load vendor/autoload.php, which also contains the unprefixed AWS SDK. A
 * missed reference would pass tests and then break on sites that only have
 * the release build, or quietly use another plugin's copy of the SDK.
 *
 * The prefixed root namespaces are read from vendor-prefixed/ itself, so a
 * dependency that upstream adds later is covered without editing this file.
 */

use PhpParser\Node;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\NodeVisitorAbstract;
use PhpParser\ParserFactory;

require __DIR__ . '/lib.php';

$root = dirname( __DIR__ );
chdir( $root );

if ( ! file_exists( 'vendor-prefixed/autoload.php' ) ) {
	fwrite( STDERR, "vendor-prefixed/autoload.php is missing. Run composer install first.\n" );
	exit( 1 );
}
require 'vendor/autoload.php';

$roots = prefixed_roots();
echo 'Prefixed root namespaces: ' . implode( ', ', $roots ) . "\n";

$violations = array_merge( check_plugin_code( $roots ), check_prefixed_vendor( $roots ) );

if ( $violations ) {
	fwrite( STDERR, "Unprefixed dependency references found:\n  " . implode( "\n  ", $violations ) . "\n" );
	fwrite( STDERR, "Fix the rewrite rules in .fork/apply-overlay.php (or the Strauss config) and re-run the sync.\n" );
	exit( 1 );
}

echo "OK: no unprefixed dependency references.\n";

/**
 * Resolves every name in the plugin's own code and flags any that lands on
 * an unprefixed dependency namespace.
 *
 * @return list<string>
 */
function check_plugin_code( array $roots ): array {
	$parser = method_exists( ParserFactory::class, 'createForHostVersion' )
		? ( new ParserFactory() )->createForHostVersion()
		: ( new ParserFactory() )->create( ParserFactory::PREFER_PHP7 );

	$root_re = '(?:' . implode( '|', array_map( 'preg_quote', $roots ) ) . ')';

	$visitor = new class( $root_re ) extends NodeVisitorAbstract {
		public array $found = [];
		public string $file = '';

		public function __construct( private string $root_re ) {}

		public function enterNode( Node $node ) {
			$line = $node->getStartLine();

			// Fully qualified names after resolution: imports, `new`, type hints, `\Aws\fn()`.
			if ( $node instanceof Node\Name\FullyQualified || $node instanceof Node\Stmt\UseUse || $node instanceof Node\UseItem ) {
				$name = $node instanceof Node\Name ? $node->toString() : $node->name->toString();
				if ( preg_match( '/^' . $this->root_re . '(\\\\|$)/', $name ) ) {
					$this->found[] = "{$this->file}:{$line} name {$name}";
				}
			}

			// Class names passed around as strings, e.g. class_exists( '\\Aws\\S3\\S3Client' ).
			if ( $node instanceof Node\Scalar\String_ && preg_match( '/^\\\\?' . $this->root_re . '\\\\[A-Za-z_]/', $node->value ) ) {
				$this->found[] = "{$this->file}:{$line} string '{$node->value}'";
			}

			// Fully qualified names in docblocks (relative ones resolve through imports, checked above).
			$doc = $node->getDocComment();
			if ( $doc && preg_match_all( '/(?<![\w\\\\])\\\\' . $this->root_re . '\\\\\w+/', $doc->getText(), $m ) ) {
				foreach ( $m[0] as $ref ) {
					$this->found[] = "{$this->file}:{$doc->getStartLine()} docblock {$ref}";
				}
			}
			return null;
		}
	};

	$traverser = new NodeTraverser();
	$traverser->addVisitor( new NameResolver() );
	$traverser->addVisitor( $visitor );

	$files = array_merge( [ 's3-uploads.php' ], glob( 'inc/*.php' ), glob( 'tests/*.php' ) );
	foreach ( $files as $file ) {
		$visitor->file = $file;
		$traverser->traverse( $parser->parse( (string) file_get_contents( $file ) ) );
	}

	return array_values( array_unique( $visitor->found ) );
}

/**
 * Catches references left unprefixed inside the dependencies themselves:
 * fully qualified names Strauss missed, and class names in strings that
 * patch-prefixed.php should have fixed.
 *
 * @return list<string>
 */
function check_prefixed_vendor( array $roots ): array {
	$found      = [];
	$fq_pattern = '/(?<![\\w\\\\])\\\\(?:' . implode( '|', array_map( 'preg_quote', $roots ) ) . ')\\\\[A-Za-z_]/';
	$str_pattern = unprefixed_string_pattern( $roots );

	foreach ( php_files( 'vendor-prefixed' ) as $file ) {
		foreach ( file( $file ) as $i => $line ) {
			if ( is_comment_line( $line ) ) {
				continue;
			}
			if ( preg_match( $fq_pattern, $line ) || preg_match( $str_pattern, $line ) ) {
				$found[] = $file . ':' . ( $i + 1 ) . ' ' . trim( $line );
			}
		}
	}
	return $found;
}

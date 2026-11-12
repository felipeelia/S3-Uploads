<?php
namespace Humanmade\S3_Uploads\Aws\Api\Parser;

use Humanmade\S3_Uploads\Aws\Api\Service;
use Humanmade\S3_Uploads\Aws\Api\StructureShape;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Aws\ResultInterface;
use Humanmade\S3_Uploads\Psr\Http\Message\ResponseInterface;
use Humanmade\S3_Uploads\Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \Humanmade\S3_Uploads\Aws\Api\Service Representation of the service API*/
    protected $api;

    /** @var callable */
    protected $parser;

    /**
     * @param Service $api Service description.
     */
    public function __construct(Service $api)
    {
        $this->api = $api;
    }

    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    abstract public function __invoke(
        CommandInterface $command,
        ResponseInterface $response
    );

    abstract public function parseMemberFromStream(
        StreamInterface $stream,
        StructureShape $member,
        $response
    );
}

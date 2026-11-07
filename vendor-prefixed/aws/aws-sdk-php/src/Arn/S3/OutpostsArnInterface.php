<?php
namespace Humanmade\S3_Uploads\Aws\Arn\S3;

use Humanmade\S3_Uploads\Aws\Arn\ArnInterface;

/**
 * @internal
 */
interface OutpostsArnInterface extends ArnInterface
{
    public function getOutpostId();
}

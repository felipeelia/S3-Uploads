<?php
namespace Humanmade\S3_Uploads\Aws\Arn\S3;

use Humanmade\S3_Uploads\Aws\Arn\ArnInterface;

/**
 * @internal
 */
interface BucketArnInterface extends ArnInterface
{
    public function getBucketName();
}

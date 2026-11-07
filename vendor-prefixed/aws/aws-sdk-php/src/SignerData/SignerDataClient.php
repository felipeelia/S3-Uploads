<?php
namespace Humanmade\S3_Uploads\Aws\SignerData;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Signer Data Plane** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getRevocationStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRevocationStatusAsync(array $args = [])
 */
class SignerDataClient extends AwsClient {}

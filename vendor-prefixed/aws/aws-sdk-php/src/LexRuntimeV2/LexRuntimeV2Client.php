<?php
namespace Humanmade\S3_Uploads\Aws\LexRuntimeV2;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Runtime V2** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result recognizeText(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise recognizeTextAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result recognizeUtterance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise recognizeUtteranceAsync(array $args = [])
 */
class LexRuntimeV2Client extends AwsClient {}

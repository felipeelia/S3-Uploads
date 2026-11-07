<?php
namespace Humanmade\S3_Uploads\Aws\BedrockDataAutomationRuntime;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Runtime for Amazon Bedrock Data Automation** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getDataAutomationStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDataAutomationStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeDataAutomation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeDataAutomationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeDataAutomationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeDataAutomationAsyncAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class BedrockDataAutomationRuntimeClient extends AwsClient {}

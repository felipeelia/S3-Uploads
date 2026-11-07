<?php
namespace Humanmade\S3_Uploads\Aws\MWAA;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonMWAA** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createCliToken(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCliTokenAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createWebLoginToken(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWebLoginTokenAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeRestApi(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeRestApiAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnvironments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result publishMetrics(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise publishMetricsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 */
class MWAAClient extends AwsClient {}

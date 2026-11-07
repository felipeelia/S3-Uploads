<?php
namespace Humanmade\S3_Uploads\Aws\NetworkMonitor;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Network Monitor** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createProbe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createProbeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteProbe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteProbeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProbe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProbeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listMonitors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listMonitorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateProbe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateProbeAsync(array $args = [])
 */
class NetworkMonitorClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\CloudWatchRUM;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **CloudWatch RUM** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchCreateRumMetricDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchCreateRumMetricDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchDeleteRumMetricDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchDeleteRumMetricDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetRumMetricDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetRumMetricDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createAppMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createAppMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteAppMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteAppMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRumMetricsDestination(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRumMetricsDestinationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAppMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAppMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAppMonitorData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAppMonitorDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAppMonitors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAppMonitorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRumMetricsDestinations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRumMetricsDestinationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRumEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRumEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putRumMetricsDestination(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putRumMetricsDestinationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAppMonitor(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateAppMonitorAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRumMetricDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRumMetricDefinitionAsync(array $args = [])
 */
class CloudWatchRUMClient extends AwsClient {}

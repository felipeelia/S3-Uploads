<?php
namespace Humanmade\S3_Uploads\Aws\SnowDeviceManagement;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Snow Device Management** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDeviceEc2Instances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDeviceEc2InstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDeviceResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDeviceResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDevices(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listExecutions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTasks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SnowDeviceManagementClient extends AwsClient {}

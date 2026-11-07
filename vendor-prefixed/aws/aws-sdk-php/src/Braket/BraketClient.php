<?php
namespace Humanmade\S3_Uploads\Aws\Braket;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Braket** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result cancelQuantumTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelQuantumTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createQuantumTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createQuantumTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createSpendingLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSpendingLimitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSpendingLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSpendingLimitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getQuantumTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getQuantumTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchDevices(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchDevicesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchQuantumTasks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchQuantumTasksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchSpendingLimits(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchSpendingLimitsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSpendingLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateSpendingLimitAsync(array $args = [])
 */
class BraketClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\IoTJobsDataPlane;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Jobs Data Plane** service.
 * @method \Humanmade\S3_Uploads\Aws\Result describeJobExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeJobExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPendingJobExecutions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPendingJobExecutionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startCommandExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startCommandExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startNextPendingJobExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startNextPendingJobExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateJobExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateJobExecutionAsync(array $args = [])
 */
class IoTJobsDataPlaneClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\SagemakerEdgeManager;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Sagemaker Edge Manager** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getDeployments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDeviceRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeviceRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendHeartbeat(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendHeartbeatAsync(array $args = [])
 */
class SagemakerEdgeManagerClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\CognitoSync;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Sync** service.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result bulkPublish(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise bulkPublishAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDataset(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDataset(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeIdentityPoolUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeIdentityPoolUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeIdentityUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeIdentityUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBulkPublishDetails(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBulkPublishDetailsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCognitoEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCognitoEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getIdentityPoolConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getIdentityPoolConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDatasets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listIdentityPoolUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listIdentityPoolUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRecords(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRecordsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerDevice(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerDeviceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result setCognitoEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise setCognitoEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result setIdentityPoolConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise setIdentityPoolConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result subscribeToDataset(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise subscribeToDatasetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result unsubscribeFromDataset(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise unsubscribeFromDatasetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRecords(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRecordsAsync(array $args = [])
 */
class CognitoSyncClient extends AwsClient {}

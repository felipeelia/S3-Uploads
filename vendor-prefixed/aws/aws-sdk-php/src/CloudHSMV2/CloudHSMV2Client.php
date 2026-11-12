<?php
namespace Humanmade\S3_Uploads\Aws\CloudHSMV2;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CloudHSM V2** service.
 * @method \Humanmade\S3_Uploads\Aws\Result copyBackupToRegion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyBackupToRegionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBackup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHsm(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeBackups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeClusters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result initializeCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise initializeClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyBackupAttributes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyBackupAttributesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result restoreBackup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreBackupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudHSMV2Client extends AwsClient {}

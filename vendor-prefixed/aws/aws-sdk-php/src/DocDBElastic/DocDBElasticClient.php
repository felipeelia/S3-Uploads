<?php
namespace Humanmade\S3_Uploads\Aws\DocDBElastic;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DocumentDB Elastic Clusters** service.
 * @method \Humanmade\S3_Uploads\Aws\Result applyPendingMaintenanceAction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result copyClusterSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyClusterSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createClusterSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createClusterSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteClusterSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getClusterSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClusterSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPendingMaintenanceAction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPendingMaintenanceActionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listClusterSnapshots(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listClusterSnapshotsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listClusters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listPendingMaintenanceActions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listPendingMaintenanceActionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result restoreClusterFromSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreClusterFromSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 */
class DocDBElasticClient extends AwsClient {}

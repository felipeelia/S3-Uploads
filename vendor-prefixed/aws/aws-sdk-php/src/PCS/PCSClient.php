<?php
namespace Humanmade\S3_Uploads\Aws\PCS;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Parallel Computing Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createComputeNodeGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createComputeNodeGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createQueue(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createQueueAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteComputeNodeGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteComputeNodeGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteQueue(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteQueueAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getComputeNodeGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getComputeNodeGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getQueue(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getQueueAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listClusters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listComputeNodeGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listComputeNodeGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listQueues(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listQueuesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerComputeNodeGroupInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerComputeNodeGroupInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateComputeNodeGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateComputeNodeGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateQueue(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateQueueAsync(array $args = [])
 */
class PCSClient extends AwsClient {}

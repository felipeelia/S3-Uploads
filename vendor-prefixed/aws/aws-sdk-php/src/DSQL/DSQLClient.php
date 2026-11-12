<?php
namespace Humanmade\S3_Uploads\Aws\DSQL;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Aurora DSQL** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteClusterPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteClusterPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getClusterPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getClusterPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getVpcEndpointServiceName(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getVpcEndpointServiceNameAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listClusters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putClusterPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putClusterPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 */
class DSQLClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\TimestreamInfluxDB;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Timestream InfluxDB** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createDbCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDbClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDbInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDbInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDbParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDbParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDbCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDbClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDbInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDbInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDbCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDbClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDbInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDbInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDbParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDbParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDbClusters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDbClustersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDbInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDbInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDbInstancesForCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDbInstancesForClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDbParameterGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDbParameterGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rebootDbCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rebootDbClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rebootDbInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rebootDbInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDbCluster(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDbClusterAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDbInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDbInstanceAsync(array $args = [])
 */
class TimestreamInfluxDBClient extends AwsClient {}

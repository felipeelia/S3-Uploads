<?php
namespace Humanmade\S3_Uploads\Aws\BCMDashboards;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Billing and Cost Management Dashboards** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createDashboard(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDashboardAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDashboard(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDashboardAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDashboard(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDashboardAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDashboards(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDashboard(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDashboardAsync(array $args = [])
 */
class BCMDashboardsClient extends AwsClient {}

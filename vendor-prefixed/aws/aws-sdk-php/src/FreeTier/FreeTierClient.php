<?php
namespace Humanmade\S3_Uploads\Aws\FreeTier;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Free Tier** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountActivity(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountActivityAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountPlanState(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountPlanStateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFreeTierUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFreeTierUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAccountActivities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAccountActivitiesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result upgradeAccountPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise upgradeAccountPlanAsync(array $args = [])
 */
class FreeTierClient extends AwsClient {}

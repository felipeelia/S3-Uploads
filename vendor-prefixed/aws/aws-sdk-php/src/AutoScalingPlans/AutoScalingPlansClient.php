<?php
namespace Humanmade\S3_Uploads\Aws\AutoScalingPlans;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createScalingPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createScalingPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteScalingPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScalingPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScalingPlanResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScalingPlans(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScalingPlansAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getScalingPlanResourceForecastData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getScalingPlanResourceForecastDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateScalingPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}

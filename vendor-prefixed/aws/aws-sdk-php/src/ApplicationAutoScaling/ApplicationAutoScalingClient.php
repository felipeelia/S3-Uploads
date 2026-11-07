<?php
namespace Humanmade\S3_Uploads\Aws\ApplicationAutoScaling;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Application Auto Scaling** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteScalingPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteScheduledAction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deregisterScalableTarget(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deregisterScalableTargetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScalableTargets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScalableTargetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScalingActivities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScalingPolicies(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScheduledActions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPredictiveScalingForecast(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPredictiveScalingForecastAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putScalingPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putScheduledAction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putScheduledActionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerScalableTarget(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerScalableTargetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class ApplicationAutoScalingClient extends AwsClient {}

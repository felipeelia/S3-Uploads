<?php
namespace Humanmade\S3_Uploads\Aws\CodeStarNotifications;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar Notifications** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createNotificationRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createNotificationRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteNotificationRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteNotificationRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTarget(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTargetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeNotificationRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeNotificationRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEventTypes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEventTypesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listNotificationRules(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listNotificationRulesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTargets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTargetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result subscribe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise subscribeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result unsubscribe(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise unsubscribeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateNotificationRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateNotificationRuleAsync(array $args = [])
 */
class CodeStarNotificationsClient extends AwsClient {}

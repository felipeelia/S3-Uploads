<?php
namespace Humanmade\S3_Uploads\Aws\LicenseManagerLinuxSubscriptions;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS License Manager Linux Subscriptions** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deregisterSubscriptionProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deregisterSubscriptionProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRegisteredSubscriptionProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRegisteredSubscriptionProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getServiceSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getServiceSettingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLinuxSubscriptionInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLinuxSubscriptionInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listLinuxSubscriptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listLinuxSubscriptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRegisteredSubscriptionProviders(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRegisteredSubscriptionProvidersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerSubscriptionProvider(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerSubscriptionProviderAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateServiceSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateServiceSettingsAsync(array $args = [])
 */
class LicenseManagerLinuxSubscriptionsClient extends AwsClient {}

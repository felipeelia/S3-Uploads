<?php
namespace Humanmade\S3_Uploads\Aws\ResourceGroupsTaggingAPI;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method \Humanmade\S3_Uploads\Aws\Result describeReportCreation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeReportCreationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getComplianceSummary(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getComplianceSummaryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTagKeys(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTagKeysAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTagValues(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTagValuesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRequiredTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRequiredTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startReportCreation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startReportCreationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}

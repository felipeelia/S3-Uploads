<?php
namespace Humanmade\S3_Uploads\Aws\AIOps;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS AI Ops** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createInvestigationGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createInvestigationGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteInvestigationGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteInvestigationGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteInvestigationGroupPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteInvestigationGroupPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getInvestigationGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getInvestigationGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getInvestigationGroupPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getInvestigationGroupPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listInvestigationGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listInvestigationGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putInvestigationGroupPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putInvestigationGroupPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateInvestigationGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateInvestigationGroupAsync(array $args = [])
 */
class AIOpsClient extends AwsClient {}

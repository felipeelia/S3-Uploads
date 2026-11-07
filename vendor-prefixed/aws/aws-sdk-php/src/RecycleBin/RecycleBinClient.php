<?php
namespace Humanmade\S3_Uploads\Aws\RecycleBin;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Recycle Bin** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRules(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result lockRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise lockRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result unlockRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise unlockRuleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 */
class RecycleBinClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\KendraRanking;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kendra Intelligent Ranking** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createRescoreExecutionPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createRescoreExecutionPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRescoreExecutionPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRescoreExecutionPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeRescoreExecutionPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeRescoreExecutionPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRescoreExecutionPlans(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRescoreExecutionPlansAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rescore(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rescoreAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateRescoreExecutionPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateRescoreExecutionPlanAsync(array $args = [])
 */
class KendraRankingClient extends AwsClient {}

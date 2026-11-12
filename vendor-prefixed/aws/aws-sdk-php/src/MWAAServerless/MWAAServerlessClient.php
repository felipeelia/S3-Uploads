<?php
namespace Humanmade\S3_Uploads\Aws\MWAAServerless;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonMWAAServerless** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createWorkflow(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWorkflowAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteWorkflow(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTaskInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTaskInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkflow(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkflowAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTaskInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTaskInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkflowRuns(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkflowRunsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkflowVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkflowVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkflows(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateWorkflow(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateWorkflowAsync(array $args = [])
 */
class MWAAServerlessClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\DataPipeline;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Data Pipeline** service.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result activatePipeline(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise activatePipelineAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result addTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createPipeline(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deactivatePipeline(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deactivatePipelineAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deletePipeline(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeObjects(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeObjectsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describePipelines(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describePipelinesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result evaluateExpression(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise evaluateExpressionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPipelineDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPipelineDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listPipelines(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result pollForTask(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise pollForTaskAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putPipelineDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putPipelineDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result queryObjects(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise queryObjectsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result reportTaskProgress(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise reportTaskProgressAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result reportTaskRunnerHeartbeat(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise reportTaskRunnerHeartbeatAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result setStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise setStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result setTaskStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise setTaskStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result validatePipelineDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise validatePipelineDefinitionAsync(array $args = [])
 */
class DataPipelineClient extends AwsClient {}

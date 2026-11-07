<?php
namespace Humanmade\S3_Uploads\Aws\NovaAct;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Nova Act Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createAct(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createActAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createWorkflowDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWorkflowDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteWorkflowDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteWorkflowDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkflowDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkflowDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkflowRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeActStep(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeActStepAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listActs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listActsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listModels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listModelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSessions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSessionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkflowDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkflowDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkflowRuns(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkflowRunsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAct(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateActAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateWorkflowRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateWorkflowRunAsync(array $args = [])
 */
class NovaActClient extends AwsClient {}

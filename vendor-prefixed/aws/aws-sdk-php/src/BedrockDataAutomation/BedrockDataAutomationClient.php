<?php
namespace Humanmade\S3_Uploads\Aws\BedrockDataAutomation;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Data Automation for Amazon Bedrock** service.
 * @method \Humanmade\S3_Uploads\Aws\Result copyBlueprintStage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyBlueprintStageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBlueprint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBlueprintAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBlueprintVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBlueprintVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDataAutomationProject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDataAutomationProjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBlueprint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBlueprintAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDataAutomationProject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDataAutomationProjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBlueprint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBlueprintAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBlueprintOptimizationStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBlueprintOptimizationStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDataAutomationProject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDataAutomationProjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result invokeBlueprintOptimizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise invokeBlueprintOptimizationAsyncAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBlueprints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBlueprintsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDataAutomationProjects(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDataAutomationProjectsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateBlueprint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateBlueprintAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDataAutomationProject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDataAutomationProjectAsync(array $args = [])
 */
class BedrockDataAutomationClient extends AwsClient {}

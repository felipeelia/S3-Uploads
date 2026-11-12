<?php
namespace Humanmade\S3_Uploads\Aws\IoTDeviceAdvisor;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Core Device Advisor** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createSuiteDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSuiteDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSuiteDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSuiteDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDeviceAdvisorEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeviceAdvisorEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSuiteDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSuiteDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSuiteRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSuiteRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSuiteRunReport(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSuiteRunReportAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSuiteDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSuiteDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSuiteRuns(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSuiteRunsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startSuiteRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startSuiteRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopSuiteRun(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopSuiteRunAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSuiteDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateSuiteDefinitionAsync(array $args = [])
 */
class IoTDeviceAdvisorClient extends AwsClient {}

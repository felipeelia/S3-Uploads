<?php
namespace Humanmade\S3_Uploads\Aws\CostandUsageReportService;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeReportDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeReportDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}

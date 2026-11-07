<?php
namespace Humanmade\S3_Uploads\Aws\ApplicationCostProfiler;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Application Cost Profiler** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result importApplicationUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise importApplicationUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listReportDefinitions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listReportDefinitionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateReportDefinition(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateReportDefinitionAsync(array $args = [])
 */
class ApplicationCostProfilerClient extends AwsClient {}

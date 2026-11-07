<?php
namespace Humanmade\S3_Uploads\Aws\BCMDataExports;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Billing and Cost Management Data Exports** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createExport(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createExportAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteExport(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteExportAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getExecution(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getExecutionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getExport(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTable(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listExecutions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listExports(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listExportsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTables(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateExport(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateExportAsync(array $args = [])
 */
class BCMDataExportsClient extends AwsClient {}

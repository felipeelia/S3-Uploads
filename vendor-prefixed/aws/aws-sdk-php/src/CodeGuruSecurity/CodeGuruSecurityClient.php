<?php
namespace Humanmade\S3_Uploads\Aws\CodeGuruSecurity;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CodeGuru Security** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetFindings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetFindingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createScan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createScanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createUploadUrl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createUploadUrlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getFindings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getMetricsSummary(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getMetricsSummaryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getScan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getScanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listFindingsMetrics(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listFindingsMetricsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listScans(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listScansAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAccountConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateAccountConfigurationAsync(array $args = [])
 */
class CodeGuruSecurityClient extends AwsClient {}

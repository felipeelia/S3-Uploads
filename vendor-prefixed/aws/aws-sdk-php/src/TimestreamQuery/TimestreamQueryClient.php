<?php
namespace Humanmade\S3_Uploads\Aws\TimestreamQuery;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Timestream Query** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createScheduledQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createScheduledQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteScheduledQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScheduledQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeAccountSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAccountSettingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEndpoints(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeScheduledQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeScheduledQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result executeScheduledQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise executeScheduledQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listScheduledQueries(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listScheduledQueriesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result prepareQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise prepareQueryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result query(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise queryAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAccountSettings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateScheduledQuery(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateScheduledQueryAsync(array $args = [])
 */
class TimestreamQueryClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\CostOptimizationHub;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Cost Optimization Hub** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getPreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPreferencesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRecommendation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRecommendationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEfficiencyMetrics(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEfficiencyMetricsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnrollmentStatuses(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnrollmentStatusesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRecommendationSummaries(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRecommendationSummariesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listRecommendations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateEnrollmentStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateEnrollmentStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updatePreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updatePreferencesAsync(array $args = [])
 */
class CostOptimizationHubClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\PersonalizeRuntime;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize Runtime** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getActionRecommendations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getActionRecommendationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPersonalizedRanking(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPersonalizedRankingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRecommendations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 */
class PersonalizeRuntimeClient extends AwsClient {}

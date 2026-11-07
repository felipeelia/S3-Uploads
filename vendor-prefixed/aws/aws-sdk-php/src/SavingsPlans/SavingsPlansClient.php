<?php
namespace Humanmade\S3_Uploads\Aws\SavingsPlans;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Savings Plans** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createSavingsPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSavingsPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteQueuedSavingsPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteQueuedSavingsPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSavingsPlanRates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSavingsPlanRatesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSavingsPlans(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSavingsPlansAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSavingsPlansOfferingRates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSavingsPlansOfferingRatesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSavingsPlansOfferings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSavingsPlansOfferingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result returnSavingsPlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise returnSavingsPlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SavingsPlansClient extends AwsClient {}

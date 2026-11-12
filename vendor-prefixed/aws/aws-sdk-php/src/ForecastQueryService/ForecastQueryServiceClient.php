<?php
namespace Humanmade\S3_Uploads\Aws\ForecastQueryService;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Forecast Query Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result queryForecast(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise queryForecastAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result queryWhatIfForecast(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise queryWhatIfForecastAsync(array $args = [])
 */
class ForecastQueryServiceClient extends AwsClient {}

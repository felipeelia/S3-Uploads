<?php
namespace Humanmade\S3_Uploads\Aws\MarketplaceMetering;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchMeterUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchMeterUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result meterUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise meterUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerUsage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerUsageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result resolveCustomer(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}

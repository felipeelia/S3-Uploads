<?php
namespace Humanmade\S3_Uploads\Aws\Pricing;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Price List Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result describeServices(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAttributeValues(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAttributeValuesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPriceListFileUrl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPriceListFileUrlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProducts(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProductsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listPriceLists(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listPriceListsAsync(array $args = [])
 */
class PricingClient extends AwsClient {}

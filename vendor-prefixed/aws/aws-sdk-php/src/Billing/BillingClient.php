<?php
namespace Humanmade\S3_Uploads\Aws\Billing;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Billing** service.
 * @method \Humanmade\S3_Uploads\Aws\Result associateSourceViews(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateSourceViewsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBillingView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBillingViewAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBillingView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBillingViewAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateSourceViews(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateSourceViewsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBillingView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBillingViewAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getResourcePolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBillingViews(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBillingViewsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSourceViewsForBillingView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSourceViewsForBillingViewAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateBillingView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateBillingViewAsync(array $args = [])
 */
class BillingClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\MarketplaceAgreement;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Marketplace Agreement Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result describeAgreement(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAgreementAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAgreementTerms(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAgreementTermsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result searchAgreements(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise searchAgreementsAsync(array $args = [])
 */
class MarketplaceAgreementClient extends AwsClient {}

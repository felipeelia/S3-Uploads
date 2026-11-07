<?php
namespace Humanmade\S3_Uploads\Aws\TaxSettings;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Tax Settings** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchDeleteTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchDeleteTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetTaxExemptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetTaxExemptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchPutTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchPutTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSupplementalTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteSupplementalTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTaxExemptionTypes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTaxExemptionTypesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTaxInheritance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTaxInheritanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTaxRegistrationDocument(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTaxRegistrationDocumentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSupplementalTaxRegistrations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSupplementalTaxRegistrationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTaxExemptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTaxExemptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTaxRegistrations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTaxRegistrationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putSupplementalTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putSupplementalTaxRegistrationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putTaxExemption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putTaxExemptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putTaxInheritance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putTaxInheritanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putTaxRegistration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putTaxRegistrationAsync(array $args = [])
 */
class TaxSettingsClient extends AwsClient {}

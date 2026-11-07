<?php
namespace Humanmade\S3_Uploads\Aws\Acm;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager** service.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addTagsToCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addTagsToCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result exportCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise exportCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result importCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCertificates(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putAccountConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putAccountConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeTagsFromCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeTagsFromCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result renewCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise renewCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result requestCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise requestCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result resendValidationEmail(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise resendValidationEmailAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result revokeCertificate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise revokeCertificateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateCertificateOptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateCertificateOptionsAsync(array $args = [])
 */
class AcmClient extends AwsClient {}

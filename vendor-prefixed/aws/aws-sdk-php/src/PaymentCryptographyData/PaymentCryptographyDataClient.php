<?php
namespace Humanmade\S3_Uploads\Aws\PaymentCryptographyData;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Payment Cryptography Data Plane** service.
 * @method \Humanmade\S3_Uploads\Aws\Result decryptData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise decryptDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result encryptData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise encryptDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result generateAs2805KekValidation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise generateAs2805KekValidationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result generateCardValidationData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise generateCardValidationDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result generateMac(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise generateMacAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result generateMacEmvPinChange(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise generateMacEmvPinChangeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result generatePinData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise generatePinDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result reEncryptData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise reEncryptDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result translateKeyMaterial(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise translateKeyMaterialAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result translatePinData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise translatePinDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result verifyAuthRequestCryptogram(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise verifyAuthRequestCryptogramAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result verifyCardValidationData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise verifyCardValidationDataAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result verifyMac(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise verifyMacAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result verifyPinData(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise verifyPinDataAsync(array $args = [])
 */
class PaymentCryptographyDataClient extends AwsClient {}

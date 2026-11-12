<?php
namespace Humanmade\S3_Uploads\Aws\Invoicing;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Invoicing** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchGetInvoiceProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchGetInvoiceProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createInvoiceUnit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createInvoiceUnitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createProcurementPortalPreference(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createProcurementPortalPreferenceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteInvoiceUnit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteInvoiceUnitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteProcurementPortalPreference(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteProcurementPortalPreferenceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getInvoicePDF(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getInvoicePDFAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getInvoiceUnit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getInvoiceUnitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProcurementPortalPreference(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProcurementPortalPreferenceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listInvoiceSummaries(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listInvoiceSummariesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listInvoiceUnits(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listInvoiceUnitsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProcurementPortalPreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProcurementPortalPreferencesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putProcurementPortalPreference(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putProcurementPortalPreferenceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateInvoiceUnit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateInvoiceUnitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateProcurementPortalPreferenceStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateProcurementPortalPreferenceStatusAsync(array $args = [])
 */
class InvoicingClient extends AwsClient {}

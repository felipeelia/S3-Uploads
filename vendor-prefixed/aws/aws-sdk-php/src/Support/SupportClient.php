<?php
namespace Humanmade\S3_Uploads\Aws\Support;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * AWS Support client.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addAttachmentsToSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addAttachmentsToSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result addCommunicationToCase(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addCommunicationToCaseAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCase(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCaseAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeAttachment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAttachmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeCases(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCasesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeCommunications(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCommunicationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeCreateCaseOptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCreateCaseOptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeServices(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSeverityLevels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSeverityLevelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSupportedLanguages(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSupportedLanguagesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTrustedAdvisorCheckRefreshStatuses(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckRefreshStatusesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTrustedAdvisorCheckResult(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckResultAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTrustedAdvisorCheckSummaries(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckSummariesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTrustedAdvisorChecks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTrustedAdvisorChecksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result refreshTrustedAdvisorCheck(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise refreshTrustedAdvisorCheckAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result resolveCase(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise resolveCaseAsync(array $args = [])
 */
class SupportClient extends AwsClient {}

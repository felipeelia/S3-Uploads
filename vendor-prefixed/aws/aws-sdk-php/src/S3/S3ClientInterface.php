<?php
namespace Humanmade\S3_Uploads\Aws\S3;

use Humanmade\S3_Uploads\Aws\AwsClientInterface;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Aws\ResultInterface;
use Humanmade\S3_Uploads\Aws\S3\Exception\S3Exception;
use Humanmade\S3_Uploads\GuzzleHttp\Promise\PromiseInterface;
use Humanmade\S3_Uploads\Psr\Http\Message\RequestInterface;

/**
 * **Amazon Simple Storage Service** client.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result abortMultipartUpload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise abortMultipartUploadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result completeMultipartUpload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise completeMultipartUploadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result copyObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBucketMetadataConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBucketMetadataConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBucketMetadataTableConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBucketMetadataTableConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createMultipartUpload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createMultipartUploadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createSession(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createSessionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketAnalyticsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketCors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketCorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketIntelligentTieringConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketInventoryConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketInventoryConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketLifecycle(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketLifecycleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketMetadataConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketMetadataConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketMetadataTableConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketMetadataTableConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketMetricsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketMetricsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketOwnershipControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketOwnershipControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketReplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketReplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBucketWebsite(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBucketWebsiteAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteObjectTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteObjectTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteObjects(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteObjectsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deletePublicAccessBlock(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deletePublicAccessBlockAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketAbac(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketAbacAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketAccelerateConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketAccelerateConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketAcl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketAclAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketAnalyticsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketCors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketCorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketIntelligentTieringConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketInventoryConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketInventoryConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketLifecycle(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketLifecycleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketLifecycleConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketLocation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketLocationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketLogging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketLoggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketMetadataConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketMetadataConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketMetadataTableConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketMetadataTableConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketMetricsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketMetricsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketNotification(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketNotificationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketNotificationConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketNotificationConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketOwnershipControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketOwnershipControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketPolicyStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketPolicyStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketReplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketReplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketRequestPayment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketRequestPaymentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketVersioning(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketVersioningAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBucketWebsite(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBucketWebsiteAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectAcl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectAclAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectAttributes(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectAttributesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectLegalHold(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectLegalHoldAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectLockConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectLockConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectRetention(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectRetentionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getObjectTorrent(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getObjectTorrentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getPublicAccessBlock(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getPublicAccessBlockAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result headBucket(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise headBucketAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result headObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise headObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBucketAnalyticsConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBucketAnalyticsConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBucketIntelligentTieringConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBucketIntelligentTieringConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBucketInventoryConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBucketInventoryConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBucketMetricsConfigurations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBucketMetricsConfigurationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listBuckets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listBucketsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDirectoryBuckets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDirectoryBucketsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listMultipartUploads(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listMultipartUploadsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listObjectVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listObjectVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listObjects(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listObjectsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listObjectsV2(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listObjectsV2Async(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listParts(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listPartsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketAbac(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketAbacAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketAccelerateConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketAccelerateConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketAcl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketAclAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketAnalyticsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketCors(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketCorsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketIntelligentTieringConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketInventoryConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketInventoryConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketLifecycle(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketLifecycleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketLifecycleConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketLogging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketLoggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketMetricsConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketMetricsConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketNotification(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketNotificationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketNotificationConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketNotificationConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketOwnershipControls(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketOwnershipControlsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketReplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketReplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketRequestPayment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketRequestPaymentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketVersioning(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketVersioningAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putBucketWebsite(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putBucketWebsiteAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObjectAcl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectAclAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObjectLegalHold(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectLegalHoldAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObjectLockConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectLockConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObjectRetention(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectRetentionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putObjectTagging(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putObjectTaggingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putPublicAccessBlock(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putPublicAccessBlockAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result renameObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise renameObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result restoreObject(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreObjectAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result selectObjectContent(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise selectObjectContentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateBucketMetadataInventoryTableConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateBucketMetadataInventoryTableConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateBucketMetadataJournalTableConfiguration(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateBucketMetadataJournalTableConfigurationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateObjectEncryption(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateObjectEncryptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result uploadPart(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise uploadPartAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result uploadPartCopy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise uploadPartCopyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result writeGetObjectResponse(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise writeGetObjectResponseAsync(array $args = [])
 */
interface S3ClientInterface extends AwsClientInterface
{
    /**
     * Create a pre-signed URL for the given S3 command object.
     *
     * @param CommandInterface              $command Command to create a pre-signed
     *                                               URL for.
     * @param int|string|\DateTimeInterface $expires The time at which the URL should
     *                                               expire. This can be a Unix
     *                                               timestamp, a PHP DateTime object,
     *                                               or a string that can be evaluated
     *                                               by strtotime().
     *
     * @return RequestInterface
     */
    public function createPresignedRequest(CommandInterface $command, $expires, array $options = []);

    /**
     * Returns the URL to an object identified by its bucket and key.
     *
     * The URL returned by this method is not signed nor does it ensure that the
     * bucket and key given to the method exist. If you need a signed URL, then
     * use the {@see \Humanmade\S3_Uploads\Aws\S3\S3Client::createPresignedRequest} method and get
     * the URI of the signed request.
     *
     * @param string $bucket  The name of the bucket where the object is located
     * @param string $key     The key of the object
     *
     * @return string The URL to the object
     */
    public function getObjectUrl($bucket, $key);

    /**
     * @deprecated Use doesBucketExistV2() instead
     *
     * Determines whether or not a bucket exists by name.
     *
     * @param string $bucket  The name of the bucket
     *
     * @return bool
     */
    public function doesBucketExist($bucket);

    /**
     * Determines whether or not a bucket exists by name. This method uses S3's
     * HeadBucket operation and requires the relevant bucket permissions in the
     * default case to prevent errors.
     *
     * @param string $bucket  The name of the bucket
     * @param bool $accept403 Set to true for this method to return true in the case of
     *                        invalid bucket-level permissions. Credentials MUST be valid
     *                        to avoid inaccuracies. Using the default value of false will
     *                        cause an exception to be thrown instead.
     *
     * @return bool
     * @throws S3Exception|\Exception if there is an unhandled exception
     */
    public function doesBucketExistV2($bucket, $accept403);

    /**
     * @deprecated Use doesObjectExistV2() instead
     *
     * Determines whether or not an object exists by name.
     *
     * @param string $bucket  The name of the bucket
     * @param string $key     The key of the object
     * @param array  $options Additional options available in the HeadObject
     *                        operation (e.g., VersionId).
     *
     * @return bool
     */
    public function doesObjectExist($bucket, $key, array $options = []);

    /**
     * Determines whether or not an object exists by name. This method uses S3's HeadObject
     * operation and requires the relevant bucket and object permissions to prevent errors.
     *
     * @param string $bucket The name of the bucket
     * @param string $key The key of the object
     * @param bool $includeDeleteMarkers Set to true to consider delete markers
     *                                   existing objects. Using the default value
     *                                   of false will ignore delete markers and
     *                                   return false.
     * @param array $options Additional options available in the HeadObject
     *                        operation (e.g., VersionId).
     *
     * @return bool
     * @throws S3Exception|\Exception if there is an unhandled exception
     */
    public function doesObjectExistV2($bucket, $key, $includeDeleteMarkers = false, array $options = []);

    /**
     * Register the Amazon S3 stream wrapper with this client instance.
     */
    public function registerStreamWrapper();

    /**
     * Registers the Amazon S3 stream wrapper with this client instance.
     *
     *This version uses doesObjectExistV2 and doesBucketExistV2 to check
     * resource existence.
     */
    public function registerStreamWrapperV2();

    /**
     * Deletes objects from Amazon S3 that match the result of a ListObjects
     * operation. For example, this allows you to do things like delete all
     * objects that match a specific key prefix.
     *
     * @param string $bucket  Bucket that contains the object keys
     * @param string $prefix  Optionally delete only objects under this key prefix
     * @param string $regex   Delete only objects that match this regex
     * @param array  $options Humanmade\S3_Uploads\Aws\S3\BatchDelete options array.
     *
     * @see Humanmade\S3_Uploads\Aws\S3\S3Client::listObjects
     * @throws \RuntimeException if no prefix and no regex is given
     */
    public function deleteMatchingObjects(
        $bucket,
        $prefix = '',
        $regex = '',
        array $options = []
    );

    /**
     * Deletes objects from Amazon S3 that match the result of a ListObjects
     * operation. For example, this allows you to do things like delete all
     * objects that match a specific key prefix.
     *
     * @param string $bucket  Bucket that contains the object keys
     * @param string $prefix  Optionally delete only objects under this key prefix
     * @param string $regex   Delete only objects that match this regex
     * @param array  $options Humanmade\S3_Uploads\Aws\S3\BatchDelete options array.
     *
     * @see Humanmade\S3_Uploads\Aws\S3\S3Client::listObjects
     *
     * @return PromiseInterface     A promise that is settled when matching
     *                              objects are deleted.
     */
    public function deleteMatchingObjectsAsync(
        $bucket,
        $prefix = '',
        $regex = '',
        array $options = []
    );

    /**
     * Upload a file, stream, or string to a bucket.
     *
     * If the upload size exceeds the specified threshold, the upload will be
     * performed using concurrent multipart uploads.
     *
     * The options array accepts the following options:
     *
     * - before_upload: (callable) Callback to invoke before any upload
     *   operations during the upload process. The callback should have a
     *   function signature like `function (Humanmade\S3_Uploads\Aws\Command $command) {...}`.
     * - concurrency: (int, default=int(3)) Maximum number of concurrent
     *   `UploadPart` operations allowed during a multipart upload.
     * - mup_threshold: (int, default=int(16777216)) The size, in bytes, allowed
     *   before the upload must be sent via a multipart upload. Default: 16 MB.
     * - params: (array, default=array([])) Custom parameters to use with the
     *   upload. For single uploads, they must correspond to those used for the
     *   `PutObject` operation. For multipart uploads, they correspond to the
     *   parameters of the `CreateMultipartUpload` operation.
     * - part_size: (int) Part size to use when doing a multipart upload.
     *
     * @param string $bucket  Bucket to upload the object.
     * @param string $key     Key of the object.
     * @param mixed  $body    Object data to upload. Can be a
     *                        StreamInterface, PHP stream resource, or a
     *                        string of data to upload.
     * @param string $acl     ACL to apply to the object (default: private).
     * @param array  $options Options used to configure the upload process.
     *
     * @see Humanmade\S3_Uploads\Aws\S3\MultipartUploader for more info about multipart uploads.
     * @return ResultInterface Returns the result of the upload.
     */
    public function upload(
        $bucket,
        $key,
        $body,
        $acl = 'private',
        array $options = []
    );

    /**
     * Upload a file, stream, or string to a bucket asynchronously.
     *
     * @param string $bucket  Bucket to upload the object.
     * @param string $key     Key of the object.
     * @param mixed  $body    Object data to upload. Can be a
     *                        StreamInterface, PHP stream resource, or a
     *                        string of data to upload.
     * @param string $acl     ACL to apply to the object (default: private).
     * @param array  $options Options used to configure the upload process.
     *
     * @see self::upload
     * @return PromiseInterface     Returns a promise that will be fulfilled
     *                              with the result of the upload.
     */
    public function uploadAsync(
        $bucket,
        $key,
        $body,
        $acl = 'private',
        array $options = []
    );

    /**
     * Copy an object of any size to a different location.
     *
     * If the upload size exceeds the maximum allowable size for direct S3
     * copying, a multipart copy will be used.
     *
     * The options array accepts the following options:
     *
     * - before_upload: (callable) Callback to invoke before any upload
     *   operations during the upload process. The callback should have a
     *   function signature like `function (Humanmade\S3_Uploads\Aws\Command $command) {...}`.
     * - concurrency: (int, default=int(5)) Maximum number of concurrent
     *   `UploadPart` operations allowed during a multipart upload.
     * - params: (array, default=array([])) Custom parameters to use with the
     *   upload. For single uploads, they must correspond to those used for the
     *   `CopyObject` operation. For multipart uploads, they correspond to the
     *   parameters of the `CreateMultipartUpload` operation.
     * - part_size: (int) Part size to use when doing a multipart upload.
     *
     * @param string $fromBucket    Bucket where the copy source resides.
     * @param string $fromKey       Key of the copy source.
     * @param string $destBucket    Bucket to which to copy the object.
     * @param string $destKey       Key to which to copy the object.
     * @param string $acl           ACL to apply to the copy (default: private).
     * @param array  $options       Options used to configure the upload process.
     *
     * @see Humanmade\S3_Uploads\Aws\S3\MultipartCopy for more info about multipart uploads.
     * @return ResultInterface Returns the result of the copy.
     */
    public function copy(
        $fromBucket,
        $fromKey,
        $destBucket,
        $destKey,
        $acl = 'private',
        array $options = []
    );

    /**
     * Copy an object of any size to a different location asynchronously.
     *
     * @param string $fromBucket    Bucket where the copy source resides.
     * @param string $fromKey       Key of the copy source.
     * @param string $destBucket    Bucket to which to copy the object.
     * @param string $destKey       Key to which to copy the object.
     * @param string $acl           ACL to apply to the copy (default: private).
     * @param array  $options       Options used to configure the upload process.
     *
     * @see self::copy for more info about the parameters above.
     * @return PromiseInterface     Returns a promise that will be fulfilled
     *                              with the result of the copy.
     */
    public function copyAsync(
        $fromBucket,
        $fromKey,
        $destBucket,
        $destKey,
        $acl = 'private',
        array $options = []
    );

    /**
     * Recursively uploads all files in a given directory to a given bucket.
     *
     * @param string $directory Full path to a directory to upload
     * @param string $bucket    Name of the bucket
     * @param string $keyPrefix Virtual directory key prefix to add to each upload
     * @param array  $options   Options available in Humanmade\S3_Uploads\Aws\S3\Transfer::__construct
     *
     * @see Humanmade\S3_Uploads\Aws\S3\Transfer for more options and customization
     */
    public function uploadDirectory(
        $directory,
        $bucket,
        $keyPrefix = null,
        array $options = []
    );

    /**
     * Recursively uploads all files in a given directory to a given bucket.
     *
     * @param string $directory Full path to a directory to upload
     * @param string $bucket    Name of the bucket
     * @param string $keyPrefix Virtual directory key prefix to add to each upload
     * @param array  $options   Options available in Humanmade\S3_Uploads\Aws\S3\Transfer::__construct
     *
     * @see Humanmade\S3_Uploads\Aws\S3\Transfer for more options and customization
     *
     * @return PromiseInterface A promise that is settled when the upload is
     *                          complete.
     */
    public function uploadDirectoryAsync(
        $directory,
        $bucket,
        $keyPrefix = null,
        array $options = []
    );

    /**
     * Downloads a bucket to the local filesystem
     *
     * @param string $directory Directory to download to
     * @param string $bucket    Bucket to download from
     * @param string $keyPrefix Only download objects that use this key prefix
     * @param array  $options   Options available in Humanmade\S3_Uploads\Aws\S3\Transfer::__construct
     */
    public function downloadBucket(
        $directory,
        $bucket,
        $keyPrefix = '',
        array $options = []
    );

    /**
     * Downloads a bucket to the local filesystem
     *
     * @param string $directory Directory to download to
     * @param string $bucket    Bucket to download from
     * @param string $keyPrefix Only download objects that use this key prefix
     * @param array  $options   Options available in Humanmade\S3_Uploads\Aws\S3\Transfer::__construct
     *
     * @return PromiseInterface A promise that is settled when the download is
     *                          complete.
     */
    public function downloadBucketAsync(
        $directory,
        $bucket,
        $keyPrefix = '',
        array $options = []
    );

    /**
     * Returns the region in which a given bucket is located.
     *
     * @param string $bucketName
     *
     * @return string
     */
    public function determineBucketRegion($bucketName);

    /**
     * Returns a promise fulfilled with the region in which a given bucket is
     * located.
     *
     * @param string $bucketName
     *
     * @return PromiseInterface
     */
    public function determineBucketRegionAsync($bucketName);
}

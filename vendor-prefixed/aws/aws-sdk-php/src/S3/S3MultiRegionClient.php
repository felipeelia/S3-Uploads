<?php
namespace Humanmade\S3_Uploads\Aws\S3;

use Humanmade\S3_Uploads\Aws\CacheInterface;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Aws\LruArrayCache;
use Humanmade\S3_Uploads\Aws\MultiRegionClient as BaseClient;
use Humanmade\S3_Uploads\Aws\Exception\AwsException;
use Humanmade\S3_Uploads\Aws\S3\Exception\PermanentRedirectException;
use Humanmade\S3_Uploads\GuzzleHttp\Promise;

/**
 * **Amazon Simple Storage Service** multi-region client.
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
class S3MultiRegionClient extends BaseClient implements S3ClientInterface
{
    use S3ClientTrait;

    /** @var CacheInterface */
    private $cache;

    public static function getArguments()
    {
        $args = parent::getArguments();
        $regionDef = $args['region'] + ['default' => function (array &$args) {
            $availableRegions = array_keys($args['partition']['regions']);
            return end($availableRegions);
        }];
        unset($args['region']);

        return $args + [
            'bucket_region_cache' => [
                'type' => 'config',
                'valid' => [CacheInterface::class],
                'doc' => 'Cache of regions in which given buckets are located.',
                'default' => function () { return new LruArrayCache; },
            ],
            'region' => $regionDef,
        ];
    }

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->cache = $this->getConfig('bucket_region_cache');

        $this->getHandlerList()->prependInit(
            $this->determineRegionMiddleware(),
            'determine_region'
        );
    }

    private function determineRegionMiddleware()
    {
        return function (callable $handler) {
            return function (CommandInterface $command) use ($handler) {
                $cacheKey = $this->getCacheKey($command['Bucket']);
                if (
                    empty($command['@region']) &&
                    $region = $this->cache->get($cacheKey)
                ) {
                    $command['@region'] = $region;
                }

                return Promise\Coroutine::of(function () use (
                    $handler,
                    $command,
                    $cacheKey
                ) {
                    try {
                        yield $handler($command);
                    } catch (PermanentRedirectException $e) {
                        if (empty($command['Bucket'])) {
                            throw $e;
                        }
                        $result = $e->getResult();
                        $region = null;
                        if (isset($result['@metadata']['headers']['x-amz-bucket-region'])) {
                            $region = $result['@metadata']['headers']['x-amz-bucket-region'];
                            $this->cache->set($cacheKey, $region);
                        } else {
                            $region = (yield $this->determineBucketRegionAsync(
                                $command['Bucket']
                            ));
                        }

                        $command['@region'] = $region;
                        yield $handler($command);
                    } catch (AwsException $e) {
                        if ($e->getAwsErrorCode() === 'AuthorizationHeaderMalformed') {
                            $region = $this->determineBucketRegionFromExceptionBody(
                                $e->getResponse()
                            );
                            if (!empty($region)) {
                                $this->cache->set($cacheKey, $region);

                                $command['@region'] = $region;
                                yield $handler($command);
                            } else {
                                throw $e;
                            }
                        } else {
                            throw $e;
                        }
                    }
                });
            };
        };
    }

    public function createPresignedRequest(CommandInterface $command, $expires, array $options = [])
    {
        if (empty($command['Bucket'])) {
            throw new \InvalidArgumentException('The S3\\MultiRegionClient'
                . ' cannot create presigned requests for commands without a'
                . ' specified bucket.');
        }

        /** @var S3ClientInterface $client */
        $client = $this->getClientFromPool(
            $this->determineBucketRegion($command['Bucket'])
        );
        return $client->createPresignedRequest(
            $client->getCommand($command->getName(), $command->toArray()),
            $expires,
            $options
        );
    }

    public function getObjectUrl($bucket, $key)
    {
        /** @var S3Client $regionalClient */
        $regionalClient = $this->getClientFromPool(
            $this->determineBucketRegion($bucket)
        );

        return $regionalClient->getObjectUrl($bucket, $key);
    }

    public function determineBucketRegionAsync($bucketName)
    {
        $cacheKey = $this->getCacheKey($bucketName);
        if ($cached = $this->cache->get($cacheKey)) {
            return Promise\Create::promiseFor($cached);
        }

        /** @var S3ClientInterface $regionalClient */
        $regionalClient = $this->getClientFromPool();
        return $regionalClient->determineBucketRegionAsync($bucketName)
            ->then(
                function ($region) use ($cacheKey) {
                    $this->cache->set($cacheKey, $region);

                    return $region;
                }
            );
    }

    private function getCacheKey($bucketName)
    {
        return "aws:s3:{$bucketName}:location";
    }
}

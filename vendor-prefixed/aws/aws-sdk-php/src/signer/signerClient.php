<?php
namespace Humanmade\S3_Uploads\Aws\signer;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Signer** service.
 * @method \Humanmade\S3_Uploads\Aws\Result addProfilePermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addProfilePermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result cancelSigningProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelSigningProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeSigningJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSigningJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getRevocationStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRevocationStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSigningPlatform(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSigningPlatformAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSigningProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getSigningProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProfilePermissions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProfilePermissionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSigningJobs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSigningJobsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSigningPlatforms(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSigningPlatformsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSigningProfiles(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSigningProfilesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putSigningProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putSigningProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeProfilePermission(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeProfilePermissionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result revokeSignature(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise revokeSignatureAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result revokeSigningProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise revokeSigningProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result signPayload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise signPayloadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startSigningJob(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startSigningJobAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class signerClient extends AwsClient {}

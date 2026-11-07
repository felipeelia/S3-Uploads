<?php
namespace Humanmade\S3_Uploads\Aws\Route53Profiles;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Route 53 Profiles** service.
 * @method \Humanmade\S3_Uploads\Aws\Result associateProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result associateResourceToProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateResourceToProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateResourceFromProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateResourceFromProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProfile(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProfileAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProfileAssociation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProfileAssociationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getProfileResourceAssociation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getProfileResourceAssociationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProfileAssociations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProfileAssociationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProfileResourceAssociations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProfileResourceAssociationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listProfiles(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listProfilesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateProfileResourceAssociation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateProfileResourceAssociationAsync(array $args = [])
 */
class Route53ProfilesClient extends AwsClient {}

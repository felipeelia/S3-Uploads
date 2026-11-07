<?php
namespace Humanmade\S3_Uploads\Aws\EKSAuth;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon EKS Auth** service.
 * @method \Humanmade\S3_Uploads\Aws\Result assumeRoleForPodIdentity(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise assumeRoleForPodIdentityAsync(array $args = [])
 */
class EKSAuthClient extends AwsClient {}

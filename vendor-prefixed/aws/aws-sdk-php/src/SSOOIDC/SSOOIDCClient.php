<?php
namespace Humanmade\S3_Uploads\Aws\SSOOIDC;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SSO OIDC** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createToken(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createTokenWithIAM(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTokenWithIAMAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result registerClient(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerClientAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startDeviceAuthorization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDeviceAuthorizationAsync(array $args = [])
 */
class SSOOIDCClient extends AwsClient {}

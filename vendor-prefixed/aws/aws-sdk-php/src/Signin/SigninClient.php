<?php
namespace Humanmade\S3_Uploads\Aws\Signin;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Sign-In Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createOAuth2Token(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createOAuth2TokenAsync(array $args = [])
 */
class SigninClient extends AwsClient {}

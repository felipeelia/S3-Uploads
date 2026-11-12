<?php
namespace Humanmade\S3_Uploads\Aws\SSO;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Single Sign-On** service.
 * @method \Humanmade\S3_Uploads\Aws\Result getRoleCredentials(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getRoleCredentialsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAccountRoles(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAccountRolesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAccounts(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result logout(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise logoutAsync(array $args = [])
 */
class SSOClient extends AwsClient {}

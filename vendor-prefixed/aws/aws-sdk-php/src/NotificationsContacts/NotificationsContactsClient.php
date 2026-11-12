<?php
namespace Humanmade\S3_Uploads\Aws\NotificationsContacts;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS User Notifications Contacts** service.
 * @method \Humanmade\S3_Uploads\Aws\Result activateEmailContact(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise activateEmailContactAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEmailContact(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEmailContactAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEmailContact(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEmailContactAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEmailContact(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEmailContactAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEmailContacts(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEmailContactsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendActivationCode(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendActivationCodeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class NotificationsContactsClient extends AwsClient {}

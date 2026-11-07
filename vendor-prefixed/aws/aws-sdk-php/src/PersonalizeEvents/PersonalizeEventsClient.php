<?php
namespace Humanmade\S3_Uploads\Aws\PersonalizeEvents;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize Events** service.
 * @method \Humanmade\S3_Uploads\Aws\Result putActionInteractions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putActionInteractionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putActions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putActionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putItems(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putItemsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putUsers(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putUsersAsync(array $args = [])
 */
class PersonalizeEventsClient extends AwsClient {}

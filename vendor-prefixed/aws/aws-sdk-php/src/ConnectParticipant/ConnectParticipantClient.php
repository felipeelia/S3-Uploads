<?php
namespace Humanmade\S3_Uploads\Aws\ConnectParticipant;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Participant Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result cancelParticipantAuthentication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelParticipantAuthenticationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result completeAttachmentUpload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise completeAttachmentUploadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createParticipantConnection(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createParticipantConnectionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeView(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeViewAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disconnectParticipant(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disconnectParticipantAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAttachment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAttachmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAuthenticationUrl(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAuthenticationUrlAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTranscript(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTranscriptAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendEvent(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendEventAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendMessage(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendMessageAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startAttachmentUpload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startAttachmentUploadAsync(array $args = [])
 */
class ConnectParticipantClient extends AwsClient {}

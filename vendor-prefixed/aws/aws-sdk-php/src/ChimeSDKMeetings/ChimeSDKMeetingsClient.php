<?php
namespace Humanmade\S3_Uploads\Aws\ChimeSDKMeetings;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime SDK Meetings** service.
 * @method \Humanmade\S3_Uploads\Aws\Result batchCreateAttendee(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchCreateAttendeeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result batchUpdateAttendeeCapabilitiesExcept(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise batchUpdateAttendeeCapabilitiesExceptAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createAttendee(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createAttendeeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createMeeting(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createMeetingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createMeetingWithAttendees(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createMeetingWithAttendeesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteAttendee(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteAttendeeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteMeeting(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteMeetingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAttendee(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAttendeeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getMeeting(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getMeetingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listAttendees(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listAttendeesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result startMeetingTranscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startMeetingTranscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result stopMeetingTranscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopMeetingTranscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateAttendeeCapabilities(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateAttendeeCapabilitiesAsync(array $args = [])
 */
class ChimeSDKMeetingsClient extends AwsClient {}

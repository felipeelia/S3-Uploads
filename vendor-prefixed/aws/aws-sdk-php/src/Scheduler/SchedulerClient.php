<?php
namespace Humanmade\S3_Uploads\Aws\Scheduler;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon EventBridge Scheduler** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createSchedule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createScheduleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createScheduleGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createScheduleGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteSchedule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScheduleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteScheduleGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteScheduleGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getSchedule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getScheduleAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getScheduleGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getScheduleGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listScheduleGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listScheduleGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listSchedules(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listSchedulesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateSchedule(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateScheduleAsync(array $args = [])
 */
class SchedulerClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\SSMGuiConnect;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SSM-GUIConnect** service.
 * @method \Humanmade\S3_Uploads\Aws\Result deleteConnectionRecordingPreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteConnectionRecordingPreferencesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getConnectionRecordingPreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getConnectionRecordingPreferencesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateConnectionRecordingPreferences(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateConnectionRecordingPreferencesAsync(array $args = [])
 */
class SSMGuiConnectClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\EC2InstanceConnect;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method \Humanmade\S3_Uploads\Aws\Result sendSSHPublicKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendSSHPublicKeyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}

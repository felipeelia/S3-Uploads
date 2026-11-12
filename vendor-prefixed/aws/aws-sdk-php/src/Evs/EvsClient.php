<?php
namespace Humanmade\S3_Uploads\Aws\Evs;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic VMware Service** service.
 * @method \Humanmade\S3_Uploads\Aws\Result associateEipToVlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateEipToVlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEnvironmentHost(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEnvironmentHostAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEnvironmentHost(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEnvironmentHostAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateEipFromVlan(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateEipFromVlanAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEnvironment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnvironmentHosts(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnvironmentHostsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnvironmentVlans(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnvironmentVlansAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listEnvironments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class EvsClient extends AwsClient {}

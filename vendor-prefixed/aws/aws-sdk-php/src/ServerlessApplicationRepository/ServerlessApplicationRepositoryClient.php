<?php
namespace Humanmade\S3_Uploads\Aws\ServerlessApplicationRepository;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWSServerlessApplicationRepository** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createApplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createApplicationVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createApplicationVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCloudFormationChangeSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCloudFormationChangeSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCloudFormationTemplate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCloudFormationTemplateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteApplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getApplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getApplicationPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getApplicationPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCloudFormationTemplate(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCloudFormationTemplateAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listApplicationDependencies(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listApplicationDependenciesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listApplicationVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listApplicationVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listApplications(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result putApplicationPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise putApplicationPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result unshareApplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise unshareApplicationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateApplication(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ServerlessApplicationRepositoryClient extends AwsClient {}

<?php
namespace Humanmade\S3_Uploads\Aws\LaunchWizard;

use Humanmade\S3_Uploads\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Launch Wizard** service.
 * @method \Humanmade\S3_Uploads\Aws\Result createDeployment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDeployment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDeployment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDeploymentPatternVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDeploymentPatternVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkload(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkloadAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getWorkloadDeploymentPattern(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getWorkloadDeploymentPatternAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDeploymentEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDeploymentEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDeploymentPatternVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDeploymentPatternVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listDeployments(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkloadDeploymentPatterns(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkloadDeploymentPatternsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listWorkloads(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listWorkloadsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result tagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result untagResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDeployment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 */
class LaunchWizardClient extends AwsClient {}

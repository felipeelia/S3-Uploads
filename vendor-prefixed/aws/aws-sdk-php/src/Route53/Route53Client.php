<?php
namespace Humanmade\S3_Uploads\Aws\Route53;

use Humanmade\S3_Uploads\Aws\AwsClient;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result activateKeySigningKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise activateKeySigningKeyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result associateVPCWithHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise associateVPCWithHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result changeCidrCollection(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise changeCidrCollectionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result changeResourceRecordSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise changeResourceRecordSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result changeTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise changeTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createCidrCollection(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCidrCollectionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHealthCheck(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHealthCheckAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createKeySigningKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createKeySigningKeyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createQueryLoggingConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createQueryLoggingConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createReusableDelegationSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createReusableDelegationSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createTrafficPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTrafficPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createTrafficPolicyInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTrafficPolicyInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createTrafficPolicyVersion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTrafficPolicyVersionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createVPCAssociationAuthorization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createVPCAssociationAuthorizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deactivateKeySigningKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deactivateKeySigningKeyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCidrCollection(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCidrCollectionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHealthCheck(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHealthCheckAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteKeySigningKey(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteKeySigningKeyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteQueryLoggingConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteQueryLoggingConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteReusableDelegationSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteReusableDelegationSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTrafficPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTrafficPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTrafficPolicyInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTrafficPolicyInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteVPCAssociationAuthorization(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteVPCAssociationAuthorizationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disableHostedZoneDNSSEC(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disableHostedZoneDNSSECAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result disassociateVPCFromHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disassociateVPCFromHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result enableHostedZoneDNSSEC(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise enableHostedZoneDNSSECAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getAccountLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getAccountLimitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getChange(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getChangeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getCheckerIpRanges(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getCheckerIpRangesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDNSSEC(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDNSSECAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getGeoLocation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getGeoLocationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHealthCheck(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHealthCheckAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHealthCheckCount(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHealthCheckCountAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHealthCheckLastFailureReason(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHealthCheckLastFailureReasonAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHealthCheckStatus(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHealthCheckStatusAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHostedZoneCount(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHostedZoneCountAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getHostedZoneLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getHostedZoneLimitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getQueryLoggingConfig(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getQueryLoggingConfigAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getReusableDelegationSet(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getReusableDelegationSetAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getReusableDelegationSetLimit(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getReusableDelegationSetLimitAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTrafficPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTrafficPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTrafficPolicyInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTrafficPolicyInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getTrafficPolicyInstanceCount(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getTrafficPolicyInstanceCountAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCidrBlocks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCidrBlocksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCidrCollections(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCidrCollectionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listCidrLocations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listCidrLocationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listGeoLocations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listGeoLocationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHealthChecks(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHealthChecksAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHostedZones(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHostedZonesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHostedZonesByName(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHostedZonesByNameAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listHostedZonesByVPC(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listHostedZonesByVPCAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listQueryLoggingConfigs(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listQueryLoggingConfigsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listResourceRecordSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listResourceRecordSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listReusableDelegationSets(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listReusableDelegationSetsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTrafficPolicies(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTrafficPoliciesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTrafficPolicyInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTrafficPolicyInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTrafficPolicyInstancesByHostedZone(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByHostedZoneAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTrafficPolicyInstancesByPolicy(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByPolicyAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTrafficPolicyVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTrafficPolicyVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listVPCAssociationAuthorizations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listVPCAssociationAuthorizationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result testDNSAnswer(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise testDNSAnswerAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateHealthCheck(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateHealthCheckAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateHostedZoneComment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateHostedZoneCommentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateHostedZoneFeatures(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateHostedZoneFeaturesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateTrafficPolicyComment(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateTrafficPolicyCommentAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateTrafficPolicyInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateTrafficPolicyInstanceAsync(array $args = [])
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getHandlerList()->appendInit($this->cleanIdFn(), 'route53.clean_id');
    }

    private function cleanIdFn()
    {
        return function (callable $handler) {
            return function (CommandInterface $c, ?RequestInterface $r = null) use ($handler) {
                foreach (['Id', 'HostedZoneId', 'DelegationSetId'] as $clean) {
                    if ($c->hasParam($clean)) {
                        $c[$clean] = $this->cleanId($c[$clean]);
                    }
                }
                return $handler($c, $r);
            };
        };
    }

    private function cleanId($id)
    {
        static $toClean = ['/hostedzone/', '/change/', '/delegationset/'];

        return str_replace($toClean, '', $id);
    }
}

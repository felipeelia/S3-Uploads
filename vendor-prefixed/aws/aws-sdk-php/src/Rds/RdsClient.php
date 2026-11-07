<?php
namespace Humanmade\S3_Uploads\Aws\Rds;

use Humanmade\S3_Uploads\Aws\AwsClient;
use Humanmade\S3_Uploads\Aws\Api\Service;
use Humanmade\S3_Uploads\Aws\Api\DocModel;
use Humanmade\S3_Uploads\Aws\Api\ApiProvider;
use Humanmade\S3_Uploads\Aws\PresignUrlMiddleware;

/**
 * This client is used to interact with the **Amazon Relational Database Service (Amazon RDS)**.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addSourceIdentifierToSubscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result addTagsToResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result authorizeDBSecurityGroupIngress(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise authorizeDBSecurityGroupIngressAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result copyDBParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyDBParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result copyDBSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyDBSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result copyOptionGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyOptionGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBInstanceReadReplica(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBInstanceReadReplicaAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBSecurityGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBSecurityGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDBSubnetGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBSubnetGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEventSubscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createOptionGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createOptionGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBSecurityGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBSecurityGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBSubnetGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEventSubscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteOptionGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteOptionGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBEngineVersions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBEngineVersionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBLogFiles(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBLogFilesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBParameterGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBParameterGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBParameters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBParametersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBSecurityGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBSecurityGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBSnapshots(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBSnapshotsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBSubnetGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEngineDefaultParameters(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventCategories(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEventSubscriptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEvents(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeOptionGroupOptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeOptionGroupOptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeOptionGroups(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeOptionGroupsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeOrderableDBInstanceOptions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeReservedDBInstances(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeReservedDBInstancesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeReservedDBInstancesOfferings(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeReservedDBInstancesOfferingsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result downloadDBLogFilePortion(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise downloadDBLogFilePortionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result listTagsForResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBSubnetGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyEventSubscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result modifyOptionGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyOptionGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result promoteReadReplica(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise promoteReadReplicaAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result purchaseReservedDBInstancesOffering(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise purchaseReservedDBInstancesOfferingAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result rebootDBInstance(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rebootDBInstanceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result removeTagsFromResource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result resetDBParameterGroup(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise resetDBParameterGroupAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBInstanceFromDBSnapshot(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBInstanceFromDBSnapshotAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBInstanceToPointInTime(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBInstanceToPointInTimeAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result revokeDBSecurityGroupIngress(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise revokeDBSecurityGroupIngressAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result addRoleToDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addRoleToDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result addRoleToDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addRoleToDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result applyPendingMaintenanceAction(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result backtrackDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise backtrackDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result cancelExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result copyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result copyDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise copyDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result createTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBClusterAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBClusterAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBInstanceAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBInstanceAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result deregisterDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deregisterDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeAccountAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeBlueGreenDeployments(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeBlueGreenDeploymentsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterBacktracks(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterBacktracksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterParameterGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterParameterGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusterSnapshots(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClusterSnapshotsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBClusters(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBInstanceAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBInstanceAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBMajorEngineVersions(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBMajorEngineVersionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBProxies(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBProxiesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBProxyEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBProxyEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBProxyTargetGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBProxyTargetGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBRecommendations(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBRecommendationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBShardGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBShardGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeDBSnapshotTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDBSnapshotTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeEngineDefaultClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEngineDefaultClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeExportTasks(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeGlobalClusters(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeGlobalClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeIntegrations(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeIntegrationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describePendingMaintenanceActions(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describePendingMaintenanceActionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeSourceRegions(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeSourceRegionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result describeValidDBInstanceModifications(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeValidDBInstanceModificationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result disableHttpEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise disableHttpEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result enableHttpEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise enableHttpEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result failoverDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise failoverDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result failoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise failoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyCurrentDBClusterCapacity(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyCurrentDBClusterCapacityAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBClusterSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBClusterSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBProxyTargetGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBProxyTargetGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBRecommendation(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBRecommendationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyDBSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyDBSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result modifyTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise modifyTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result promoteReadReplicaDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise promoteReadReplicaDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result rebootDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rebootDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result rebootDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise rebootDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result registerDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise registerDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result removeFromGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeFromGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result removeRoleFromDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeRoleFromDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result removeRoleFromDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise removeRoleFromDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result resetDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise resetDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBClusterFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBClusterFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBClusterFromSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBClusterFromSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBClusterToPointInTime(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBClusterToPointInTimeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result restoreDBInstanceFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise restoreDBInstanceFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result startActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result startDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result startDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result startDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result startExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result stopActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result stopDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result stopDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result stopDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise stopDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result switchoverBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise switchoverBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result switchoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise switchoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\Aws\Result switchoverReadReplica(array $args = []) (supported in versions 2014-10-31)
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise switchoverReadReplicaAsync(array $args = []) (supported in versions 2014-10-31)
 */
class RdsClient extends AwsClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBSnapshot',
                            'CreateDBInstanceReadReplica',
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster',
                            'StartDBInstanceAutomatedBackupsReplication'
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                        'require_different_region' => true,
                        'extra_query_params' => [
                            'CopyDBSnapshot' => ['DestinationRegion'],
                            'CreateDBInstanceReadReplica' => ['DestinationRegion'],
                            'CopyDBClusterSnapshot' => ['DestinationRegion'],
                            'CreateDBCluster' => ['DestinationRegion'],
                            'StartDBInstanceAutomatedBackupsReplication' => ['DestinationRegion']
                        ]
                    ]
                ),
                'rds.presigner'
            );
        };

        parent::__construct($args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Add the SourceRegion parameter
        $docs['shapes']['SourceRegion']['base'] = 'A required parameter that indicates '
            . 'the region that the DB snapshot will be copied from.';
        $api['shapes']['SourceRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

        // Add the DestinationRegion parameter
        $docs['shapes']['DestinationRegion']['base']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';
        $api['shapes']['DestinationRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        if ($api['metadata']['apiVersion'] != '2014-09-01') {
            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';
        }

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}

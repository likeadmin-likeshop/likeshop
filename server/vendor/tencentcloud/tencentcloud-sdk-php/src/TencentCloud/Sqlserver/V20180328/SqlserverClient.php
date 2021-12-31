<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Sqlserver\V20180328;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sqlserver\V20180328\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口(AssociateSecurityGroups)用于安全组批量绑定实例。
 * @method Models\CloneDBResponse CloneDB(Models\CloneDBRequest $req) 本接口（CloneDB）用于克隆数据库，只支持克隆到本实例，克隆时必须指定新库名称。
 * @method Models\CompleteExpansionResponse CompleteExpansion(Models\CompleteExpansionRequest $req) 本接口（CompleteExpansion）在实例发起扩容后，实例状态处于“升级待切换”时，可立即完成实例升级切换操作，无需等待可维护时间窗。本接口需要在实例低峰时调用，在完全切换成功前，存在部分库不可访问的风险。
 * @method Models\CompleteMigrationResponse CompleteMigration(Models\CompleteMigrationRequest $req) 本接口（CompleteMigration）作用是完成一个迁移任务
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 本接口（CreateAccount）用于创建实例账号
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 本接口(CreateBackup)用于创建备份。
 * @method Models\CreateBackupMigrationResponse CreateBackupMigration(Models\CreateBackupMigrationRequest $req) 本接口（CreateBackupMigration）用于创建备份导入任务。
 * @method Models\CreateBasicDBInstancesResponse CreateBasicDBInstances(Models\CreateBasicDBInstancesRequest $req) 本接口（CreateBasicDBInstances）用于创建SQL server基础版实例。
 * @method Models\CreateDBResponse CreateDB(Models\CreateDBRequest $req) 本接口（CreateDB）用于创建数据库。
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) 本接口（CreateDBInstances）用于创建实例。
 * @method Models\CreateIncrementalMigrationResponse CreateIncrementalMigration(Models\CreateIncrementalMigrationRequest $req) 本接口（CreateIncrementalMigration）用于创建增量备份导入任务。
 * @method Models\CreateMigrationResponse CreateMigration(Models\CreateMigrationRequest $req) 本接口（CreateMigration）作用是创建一个迁移任务
 * @method Models\CreatePublishSubscribeResponse CreatePublishSubscribe(Models\CreatePublishSubscribeRequest $req) 本接口（CreatePublishSubscribe）用于创建两个数据库之间的发布订阅关系。作为订阅者，不能再充当发布者，作为发布者可以有多个订阅者实例。
 * @method Models\CreateReadOnlyDBInstancesResponse CreateReadOnlyDBInstances(Models\CreateReadOnlyDBInstancesRequest $req) 本接口（CreateReadOnlyDBInstances）用于添加只读副本实例。
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 本接口（DeleteAccount）用于删除实例账号。
 * @method Models\DeleteBackupMigrationResponse DeleteBackupMigration(Models\DeleteBackupMigrationRequest $req) 本接口（DeleteBackupMigration）用于删除备份导入任务。
 * @method Models\DeleteDBResponse DeleteDB(Models\DeleteDBRequest $req) 本接口(DeleteDB)用于删除数据库。
 * @method Models\DeleteDBInstanceResponse DeleteDBInstance(Models\DeleteDBInstanceRequest $req) 本接口（DeleteDBInstance）用于释放回收站中的SQL server实例。释放后的实例将保存一段时间后物理销毁。其发布订阅将自动解除，其ro副本将自动释放。
 * @method Models\DeleteIncrementalMigrationResponse DeleteIncrementalMigration(Models\DeleteIncrementalMigrationRequest $req) 本接口（DeleteIncrementalMigration）用于删除增量备份导入任务。
 * @method Models\DeleteMigrationResponse DeleteMigration(Models\DeleteMigrationRequest $req) 本接口（DeleteMigration）用于删除迁移任务
 * @method Models\DeletePublishSubscribeResponse DeletePublishSubscribe(Models\DeletePublishSubscribeRequest $req) 本接口（DeletePublishSubscribe）用于删除两个数据库间的发布订阅关系。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于拉取实例账户列表。
 * @method Models\DescribeBackupByFlowIdResponse DescribeBackupByFlowId(Models\DescribeBackupByFlowIdRequest $req) 本接口(DescribeBackupByFlowId)用于通过备份创建流程的ID查询创建的备份详情，流程ID可从接口CreateBackup中获得。
 * @method Models\DescribeBackupCommandResponse DescribeBackupCommand(Models\DescribeBackupCommandRequest $req) 本接口（DescribeBackupCommand）用于查询以规范的格式创建备份的命令。
 * @method Models\DescribeBackupMigrationResponse DescribeBackupMigration(Models\DescribeBackupMigrationRequest $req) 本接口（DescribeBackupMigration）用于创建增量备份导入任务。
 * @method Models\DescribeBackupUploadSizeResponse DescribeBackupUploadSize(Models\DescribeBackupUploadSizeRequest $req) 本接口（DescribeBackupUploadSize）用于查询上传的备份文件大小。在备份上传类型是COS_UPLOAD(备份放在业务的对象存储上)时有效。
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) 本接口(DescribeBackups)用于查询备份列表。
 * @method Models\DescribeCrossRegionZoneResponse DescribeCrossRegionZone(Models\DescribeCrossRegionZoneRequest $req) 本接口(DescribeCrossRegionZone)根据主实例查询备机的容灾地域和可用区。
 * @method Models\DescribeDBCharsetsResponse DescribeDBCharsets(Models\DescribeDBCharsetsRequest $req) 本接口（DescribeDBCharsets）用于查询实例支持的数据库字符集。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口(DescribeDBInstances)用于查询实例列表。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
 * @method Models\DescribeDBsResponse DescribeDBs(Models\DescribeDBsRequest $req) 本接口（DescribeDBs）用于查询数据库列表。
 * @method Models\DescribeFlowStatusResponse DescribeFlowStatus(Models\DescribeFlowStatusRequest $req) 本接口(DescribeFlowStatus)用于查询流程状态。
 * @method Models\DescribeIncrementalMigrationResponse DescribeIncrementalMigration(Models\DescribeIncrementalMigrationRequest $req) 本接口（DescribeIncrementalMigration）用于查询增量备份导入任务。
 * @method Models\DescribeMaintenanceSpanResponse DescribeMaintenanceSpan(Models\DescribeMaintenanceSpanRequest $req) 本接口（DescribeMaintenanceSpan）根据实例ID查询该实例的可维护时间窗。
 * @method Models\DescribeMigrationDatabasesResponse DescribeMigrationDatabases(Models\DescribeMigrationDatabasesRequest $req) 本接口（DescribeMigrationDatabases）的作用是查询待迁移数据库列表
 * @method Models\DescribeMigrationDetailResponse DescribeMigrationDetail(Models\DescribeMigrationDetailRequest $req) 本接口（DescribeMigrationDetail）用于查询迁移任务的详细情况
 * @method Models\DescribeMigrationsResponse DescribeMigrations(Models\DescribeMigrationsRequest $req) 本接口（DescribeMigrations）根据输入的限定条件，查询符合条件的迁移任务列表
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于查询订单信息
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) 本接口 (DescribeProductConfig) 用于查询售卖规格配置。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
 * @method Models\DescribePublishSubscribeResponse DescribePublishSubscribe(Models\DescribePublishSubscribeRequest $req) 本接口（DescribePublishSubscribe）用于查询发布订阅关系列表。
 * @method Models\DescribeReadOnlyGroupByReadOnlyInstanceResponse DescribeReadOnlyGroupByReadOnlyInstance(Models\DescribeReadOnlyGroupByReadOnlyInstanceRequest $req) 本接口（DescribeReadOnlyGroupByReadOnlyInstance）用于通过只读副本实例ID查询其所在的只读组。
 * @method Models\DescribeReadOnlyGroupDetailsResponse DescribeReadOnlyGroupDetails(Models\DescribeReadOnlyGroupDetailsRequest $req) 本接口（DescribeReadOnlyGroupDetails）用于查询只读组详情。
 * @method Models\DescribeReadOnlyGroupListResponse DescribeReadOnlyGroupList(Models\DescribeReadOnlyGroupListRequest $req) 本接口（DescribeReadOnlyGroupList）用于查询只读组列表。
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口 (DescribeRegions) 用于查询售卖地域信息。
 * @method Models\DescribeRollbackTimeResponse DescribeRollbackTime(Models\DescribeRollbackTimeRequest $req) 本接口（DescribeRollbackTime）用于查询实例可回档时间范围
 * @method Models\DescribeSlowlogsResponse DescribeSlowlogs(Models\DescribeSlowlogsRequest $req) 本接口（DescribeSlowlogs）用于获取慢查询日志文件信息
 * @method Models\DescribeUploadBackupInfoResponse DescribeUploadBackupInfo(Models\DescribeUploadBackupInfoRequest $req) 本接口（DescribeUploadBackupInfo）用于查询备份上传权限。
 * @method Models\DescribeUploadIncrementalInfoResponse DescribeUploadIncrementalInfo(Models\DescribeUploadIncrementalInfoRequest $req) 本接口（DescribeUploadIncrementalInfo）用于查询增量备份上传权限。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 本接口 (DescribeZones) 用于查询当前可售卖的可用区信息。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) 本接口（InquiryPriceCreateDBInstances）用于查询申请实例价格。
 * @method Models\InquiryPriceRenewDBInstanceResponse InquiryPriceRenewDBInstance(Models\InquiryPriceRenewDBInstanceRequest $req) 本接口（InquiryPriceRenewDBInstance）用于查询续费实例的价格。
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) 本接口（InquiryPriceUpgradeDBInstance）用于查询升级实例的价格。
 * @method Models\ModifyAccountPrivilegeResponse ModifyAccountPrivilege(Models\ModifyAccountPrivilegeRequest $req) 本接口（ModifyAccountPrivilege）用于修改实例账户权限。
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) 本接口（ModifyAccountRemark）用于修改账户备注。
 * @method Models\ModifyBackupMigrationResponse ModifyBackupMigration(Models\ModifyBackupMigrationRequest $req) 本接口（ModifyBackupMigration）用于修改备份导入任务。
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) 本接口(ModifyBackupName)用于修改备份名称。
 * @method Models\ModifyBackupStrategyResponse ModifyBackupStrategy(Models\ModifyBackupStrategyRequest $req) 本接口（ModifyBackupStrategy）用于修改备份策略
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口（ModifyDBInstanceName）用于修改实例名字。
 * @method Models\ModifyDBInstanceNetworkResponse ModifyDBInstanceNetwork(Models\ModifyDBInstanceNetworkRequest $req) 本接口（ModifyDBInstanceNetwork）用于修改运行中实例的网络，仅支持从VPC网络到VPC网络的转换
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) 本接口（ModifyDBInstanceProject）用于修改数据库实例所属项目。
 * @method Models\ModifyDBInstanceRenewFlagResponse ModifyDBInstanceRenewFlag(Models\ModifyDBInstanceRenewFlagRequest $req) 本接口（ModifyDBInstanceRenewFlag）用于修改实例续费标记
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyDBNameResponse ModifyDBName(Models\ModifyDBNameRequest $req) 本接口（ModifyDBName）用于更新数据库名。
 * @method Models\ModifyDBRemarkResponse ModifyDBRemark(Models\ModifyDBRemarkRequest $req) 本接口（ModifyDBRemark）用于修改数据库备注。
 * @method Models\ModifyIncrementalMigrationResponse ModifyIncrementalMigration(Models\ModifyIncrementalMigrationRequest $req) 本接口（ModifyIncrementalMigration）用于修改增量备份导入任务。
 * @method Models\ModifyMaintenanceSpanResponse ModifyMaintenanceSpan(Models\ModifyMaintenanceSpanRequest $req) 本接口（ModifyMaintenanceSpan）用于修改实例的可维护时间窗
 * @method Models\ModifyMigrationResponse ModifyMigration(Models\ModifyMigrationRequest $req) 本接口（ModifyMigration）可以修改已有的迁移任务信息
 * @method Models\ModifyPublishSubscribeNameResponse ModifyPublishSubscribeName(Models\ModifyPublishSubscribeNameRequest $req) 本接口（ModifyPublishSubscribeName）修改发布订阅的名称。
 * @method Models\ModifyReadOnlyGroupDetailsResponse ModifyReadOnlyGroupDetails(Models\ModifyReadOnlyGroupDetailsRequest $req) 本接口（ModifyReadOnlyGroupDetails）用于修改只读组详情。
 * @method Models\QueryMigrationCheckProcessResponse QueryMigrationCheckProcess(Models\QueryMigrationCheckProcessRequest $req) 本接口（QueryMigrationCheckProcess）的作用是查询迁移检查任务的进度，适用于迁移源的类型为TencentDB for SQLServer 的迁移方式
 * @method Models\RecycleDBInstanceResponse RecycleDBInstance(Models\RecycleDBInstanceRequest $req) 本接口（RecycleDBInstance）用于主动回收已下线的SQLSERVER实例
 * @method Models\RecycleReadOnlyGroupResponse RecycleReadOnlyGroup(Models\RecycleReadOnlyGroupRequest $req) 本接口（RecycleReadOnlyGroup）立即回收只读组的资源，只读组占用的vip等资源将立即释放且不可找回。
 * @method Models\RemoveBackupsResponse RemoveBackups(Models\RemoveBackupsRequest $req) 本接口（RemoveBackups）可以删除用户手动创建的备份文件。待删除的备份策略可以是实例备份，也可以是多库备份。
 * @method Models\RenewDBInstanceResponse RenewDBInstance(Models\RenewDBInstanceRequest $req) 本接口（RenewDBInstance）用于续费实例。
 * @method Models\RenewPostpaidDBInstanceResponse RenewPostpaidDBInstance(Models\RenewPostpaidDBInstanceRequest $req) 本接口（RenewPostpaidDBInstance）用于将通过接口TerminateDBInstance手动隔离的按量计费实例从回收站中恢复。
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于重置实例的账户密码。
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) 本接口（RestartDBInstance）用于重启数据库实例。
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) 本接口（RestoreInstance）用于根据备份文件恢复实例。
 * @method Models\RollbackInstanceResponse RollbackInstance(Models\RollbackInstanceRequest $req) 本接口（RollbackInstance）用于回档实例
 * @method Models\RunMigrationResponse RunMigration(Models\RunMigrationRequest $req) 本接口（RunMigration）用于启动迁移任务，开始迁移
 * @method Models\StartBackupMigrationResponse StartBackupMigration(Models\StartBackupMigrationRequest $req) 本接口（StartBackupMigration）用于启动备份导入任务。
 * @method Models\StartIncrementalMigrationResponse StartIncrementalMigration(Models\StartIncrementalMigrationRequest $req) 本接口（StartIncrementalMigration）用于启动增量备份导入任务。
 * @method Models\StartMigrationCheckResponse StartMigrationCheck(Models\StartMigrationCheckRequest $req) 本接口（StartMigrationCheck）的作用是启动一个迁移前的校验任务，适用于迁移源的类型为TencentDB for SQLServer 的迁移方式
 * @method Models\StopMigrationResponse StopMigration(Models\StopMigrationRequest $req) 本接口（StopMigration）作用是中止一个迁移任务
 * @method Models\TerminateDBInstanceResponse TerminateDBInstance(Models\TerminateDBInstanceRequest $req) 本接口(TerminateDBInstance)用于主动隔离实例，使得实例进入回收站。
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口（UpgradeDBInstance）用于升级实例
 */

class SqlserverClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "sqlserver.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "sqlserver";

    /**
     * @var string
     */
    protected $version = "2018-03-28";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("sqlserver")."\\"."V20180328\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

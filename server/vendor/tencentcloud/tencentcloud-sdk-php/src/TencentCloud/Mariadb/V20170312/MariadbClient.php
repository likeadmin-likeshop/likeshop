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

namespace TencentCloud\Mariadb\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mariadb\V20170312\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于安全组批量绑定云资源。
 * @method Models\CloneAccountResponse CloneAccount(Models\CloneAccountRequest $req) 本接口（CloneAccount）用于克隆实例账户。
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) 本接口(CloseDBExtranetAccess)用于关闭云数据库实例的外网访问。关闭外网访问后，外网地址将不可访问，查询实例列表接口将不返回对应实例的外网域名和端口信息。
 * @method Models\CopyAccountPrivilegesResponse CopyAccountPrivileges(Models\CopyAccountPrivilegesRequest $req) 本接口（CopyAccountPrivileges）用于复制云数据库账号的权限。
注意：相同用户名，不同Host是不同的账号，Readonly属性相同的账号之间才能复制权限。
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 本接口（CreateAccount）用于创建云数据库账号。一个实例可以创建多个不同的账号，相同的用户名+不同的host是不同的账号。
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口（CreateDBInstance）用于创建包年包月的云数据库实例，可通过传入实例规格、数据库版本号、购买时长和数量等信息创建云数据库实例。
 * @method Models\CreateTmpInstancesResponse CreateTmpInstances(Models\CreateTmpInstancesRequest $req) 本接口（CreateTmpInstances）用于创建临时实例。
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 本接口（DeleteAccount）用于删除云数据库账号。用户名+host唯一确定一个账号。
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口（DescribeAccountPrivileges）用于查询云数据库账号权限。
注意：注意：相同用户名，不同Host是不同的账号。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于查询指定云数据库实例的账号列表。
 * @method Models\DescribeBackupTimeResponse DescribeBackupTime(Models\DescribeBackupTimeRequest $req) 本接口（DescribeBackupTime）用于获取云数据库的备份时间。后台系统将根据此配置定期进行实例备份。
 * @method Models\DescribeDBInstanceSpecsResponse DescribeDBInstanceSpecs(Models\DescribeDBInstanceSpecsRequest $req) 本接口(DescribeDBInstanceSpecs)用于查询可创建的云数据库可售卖的规格配置。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口（DescribeDBInstances）用于查询云数据库实例列表，支持通过项目ID、实例ID、内网地址、实例名称等来筛选实例。
如果不指定任何筛选条件，则默认返回20条实例记录，单次请求最多支持返回100条实例记录。
 * @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) 本接口(DescribeDBLogFiles)用于获取数据库的各种日志列表，包括冷备、binlog、errlog和slowlog。
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) 本接口(DescribeDBParameters)用于获取数据库的当前参数设置。
 * @method Models\DescribeDBPerformanceResponse DescribeDBPerformance(Models\DescribeDBPerformanceRequest $req) 本接口(DescribeDBPerformance)用于查看数据库实例当前性能数据。
 * @method Models\DescribeDBPerformanceDetailsResponse DescribeDBPerformanceDetails(Models\DescribeDBPerformanceDetailsRequest $req) 本接口(DescribeDBPerformanceDetails)用于查看实例性能数据详情。
 * @method Models\DescribeDBResourceUsageResponse DescribeDBResourceUsage(Models\DescribeDBResourceUsageRequest $req) 本接口(DescribeDBResourceUsage)用于查看数据库实例资源的使用情况。
 * @method Models\DescribeDBResourceUsageDetailsResponse DescribeDBResourceUsageDetails(Models\DescribeDBResourceUsageDetailsRequest $req) 本接口(DescribeDBResourceUsageDetails)用于查看数据库实例当前性能数据。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例安全组信息
 * @method Models\DescribeDBSlowLogsResponse DescribeDBSlowLogs(Models\DescribeDBSlowLogsRequest $req) 本接口(DescribeDBSlowLogs)用于查询慢查询日志列表。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口（DescribeDatabases）用于查询云数据库实例的数据库列表。
 * @method Models\DescribeDcnDetailResponse DescribeDcnDetail(Models\DescribeDcnDetailRequest $req) 获取实例灾备详情
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) 本接口（DescribeFlow）用于查询流程状态。
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) 本接口（DescribeInstanceNodeInfo）用于获取数据库实例主备节点信息
 * @method Models\DescribeLogFileRetentionPeriodResponse DescribeLogFileRetentionPeriod(Models\DescribeLogFileRetentionPeriodRequest $req) 本接口(DescribeLogFileRetentionPeriod)用于查看数据库备份日志的备份天数的设置情况。
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于查询云数据库订单信息。传入订单ID来查询订单关联的云数据库实例，和对应的任务流程ID。
 * @method Models\DescribePriceResponse DescribePrice(Models\DescribePriceRequest $req) 本接口（DescribePrice）用于在购买实例前，查询实例的价格。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口（DescribeProjectSecurityGroups）用于查询项目安全组信息
 * @method Models\DescribeRenewalPriceResponse DescribeRenewalPrice(Models\DescribeRenewalPriceRequest $req) 本接口（DescribeRenewalPrice）用于在续费云数据库实例时，查询续费的价格。
 * @method Models\DescribeSaleInfoResponse DescribeSaleInfo(Models\DescribeSaleInfoRequest $req) 本接口(DescribeSaleInfo)用于查询云数据库可售卖的地域和可用区信息。
 * @method Models\DescribeSqlLogsResponse DescribeSqlLogs(Models\DescribeSqlLogsRequest $req) 本接口（DescribeSqlLogs）用于获取实例SQL日志。
 * @method Models\DescribeUpgradePriceResponse DescribeUpgradePrice(Models\DescribeUpgradePriceRequest $req) 本接口（DescribeUpgradePrice）用于在扩容云数据库实例时，查询扩容的价格。
 * @method Models\DestroyHourDBInstanceResponse DestroyHourDBInstance(Models\DestroyHourDBInstanceRequest $req) 本接口（DestroyHourDBInstance）用于销毁按量计费实例。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\FlushBinlogResponse FlushBinlog(Models\FlushBinlogRequest $req) 相当于在mysqld中执行flush logs，完成切分的binlog将展示在实例控制台binlog列表里。
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) 本接口（GrantAccountPrivileges）用于给云数据库账号赋权。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) 本接口(InitDBInstances)用于初始化云数据库实例，包括设置默认字符集、表名大小写敏感等。
 * @method Models\KillSessionResponse KillSession(Models\KillSessionRequest $req) 本接口（KillSession）用于杀死指定会话。
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口（ModifyAccountDescription）用于修改云数据库账号备注。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 本接口(ModifyAccountPrivileges)用于修改云数据库的账户的权限信息。

**注意**
- 系统保留库："mysql"，只开放["SELECT"]权限
- 只读账号授予读写权限会报错
- 不传该参数表示保留现有权限，如需清除，请在复杂类型Privileges字段传空数组
 * @method Models\ModifyBackupTimeResponse ModifyBackupTime(Models\ModifyBackupTimeRequest $req) 本接口（ModifyBackupTime）用于设置云数据库实例的备份时间。后台系统将根据此配置定期进行实例备份。
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口（ModifyDBInstanceName）用于修改云数据库实例的名称。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改云数据库安全组
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) 本接口（ModifyDBInstancesProject）用于修改云数据库实例所属项目。
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) 本接口(ModifyDBParameters)用于修改数据库参数。
 * @method Models\ModifyLogFileRetentionPeriodResponse ModifyLogFileRetentionPeriod(Models\ModifyLogFileRetentionPeriodRequest $req) 本接口(ModifyLogFileRetentionPeriod)用于修改数据库备份日志保存天数。
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) 本接口（OpenDBExtranetAccess）用于开通云数据库实例的外网访问。开通外网访问后，您可通过外网域名和端口访问实例，可使用查询实例列表接口获取外网域名和端口信息。
 * @method Models\RenewDBInstanceResponse RenewDBInstance(Models\RenewDBInstanceRequest $req) 本接口（RenewDBInstance）用于续费云数据库实例。
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于重置云数据库账号的密码。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) 本接口（RestartDBInstances）用于重启数据库实例
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口(UpgradeDBInstance)用于扩容云数据库实例。本接口完成下单和支付两个动作，如果发生支付失败的错误，调用用户账户相关接口中的支付订单接口（PayDeals）重新支付即可。
 */

class MariadbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mariadb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mariadb";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("mariadb")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

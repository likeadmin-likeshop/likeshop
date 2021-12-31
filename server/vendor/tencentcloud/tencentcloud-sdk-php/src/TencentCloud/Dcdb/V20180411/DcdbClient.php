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

namespace TencentCloud\Dcdb\V20180411;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dcdb\V20180411\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于安全组批量绑定云资源。
 * @method Models\CloneAccountResponse CloneAccount(Models\CloneAccountRequest $req) 本接口（CloneAccount）用于克隆实例账户。
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) 本接口(CloseDBExtranetAccess)用于关闭云数据库实例的外网访问。关闭外网访问后，外网地址将不可访问，查询实例列表接口将不返回对应实例的外网域名和端口信息。
 * @method Models\CopyAccountPrivilegesResponse CopyAccountPrivileges(Models\CopyAccountPrivilegesRequest $req) 本接口（CopyAccountPrivileges）用于复制云数据库账号的权限。
注意：相同用户名，不同Host是不同的账号，Readonly属性相同的账号之间才能复制权限。
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 本接口（CreateAccount）用于创建云数据库账号。一个实例可以创建多个不同的账号，相同的用户名+不同的host是不同的账号。
 * @method Models\CreateDCDBInstanceResponse CreateDCDBInstance(Models\CreateDCDBInstanceRequest $req) 本接口（CreateDCDBInstance）用于创建包年包月的云数据库实例，可通过传入实例规格、数据库版本号、购买时长等信息创建云数据库实例。
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 本接口（DeleteAccount）用于删除云数据库账号。用户名+host唯一确定一个账号。
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口（DescribeAccountPrivileges）用于查询云数据库账号权限。
注意：注意：相同用户名，不同Host是不同的账号。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于查询指定云数据库实例的账号列表。
 * @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) 本接口(DescribeDBLogFiles)用于获取数据库的各种日志列表，包括冷备、binlog、errlog和slowlog。
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) 本接口(DescribeDBParameters)用于获取数据库的当前参数设置。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例安全组信息
 * @method Models\DescribeDBSyncModeResponse DescribeDBSyncMode(Models\DescribeDBSyncModeRequest $req) 本接口（DescribeDBSyncMode）用于查询云数据库实例的同步模式。
 * @method Models\DescribeDCDBInstanceNodeInfoResponse DescribeDCDBInstanceNodeInfo(Models\DescribeDCDBInstanceNodeInfoRequest $req) 本接口（DescribeDCDBInstanceNodeInfo）用于获取实例节点信息
 * @method Models\DescribeDCDBInstancesResponse DescribeDCDBInstances(Models\DescribeDCDBInstancesRequest $req) 查询云数据库实例列表，支持通过项目ID、实例ID、内网地址、实例名称等来筛选实例。
如果不指定任何筛选条件，则默认返回10条实例记录，单次请求最多支持返回100条实例记录。
 * @method Models\DescribeDCDBPriceResponse DescribeDCDBPrice(Models\DescribeDCDBPriceRequest $req) 本接口（DescribeDCDBPrice）用于在购买实例前，查询实例的价格。
 * @method Models\DescribeDCDBRenewalPriceResponse DescribeDCDBRenewalPrice(Models\DescribeDCDBRenewalPriceRequest $req) 本接口（DescribeDCDBRenewalPrice）用于在续费分布式数据库实例时，查询续费的价格。
 * @method Models\DescribeDCDBSaleInfoResponse DescribeDCDBSaleInfo(Models\DescribeDCDBSaleInfoRequest $req) 本接口(DescribeDCDBSaleInfo)用于查询分布式数据库可售卖的地域和可用区信息。
 * @method Models\DescribeDCDBShardsResponse DescribeDCDBShards(Models\DescribeDCDBShardsRequest $req) 本接口（DescribeDCDBShards）用于查询云数据库实例的分片信息。
 * @method Models\DescribeDCDBUpgradePriceResponse DescribeDCDBUpgradePrice(Models\DescribeDCDBUpgradePriceRequest $req) 本接口（DescribeDCDBUpgradePrice）用于查询升级分布式数据库实例价格。
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) 本接口（DescribeDatabaseObjects）用于查询云数据库实例的数据库中的对象列表，包含表、存储过程、视图和函数。
 * @method Models\DescribeDatabaseTableResponse DescribeDatabaseTable(Models\DescribeDatabaseTableRequest $req) 本接口（DescribeDatabaseTable）用于查询云数据库实例的表信息。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口（DescribeDatabases）用于查询云数据库实例的数据库列表。
 * @method Models\DescribeDcnDetailResponse DescribeDcnDetail(Models\DescribeDcnDetailRequest $req) 获取实例灾备详情
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) 本接口（DescribeFlow）用于查询流程状态
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于查询分布式数据库订单信息。传入订单ID来查询订单关联的分布式数据库实例，和对应的任务流程ID。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口（DescribeProjectSecurityGroups）用于查询项目安全组信息
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 本接口（DescribeProjects）用于查询项目列表
 * @method Models\DescribeShardSpecResponse DescribeShardSpec(Models\DescribeShardSpecRequest $req) 查询可创建的分布式数据库可售卖的分片规格配置。
 * @method Models\DescribeSqlLogsResponse DescribeSqlLogs(Models\DescribeSqlLogsRequest $req) 本接口（DescribeSqlLogs）用于获取实例SQL日志。
 * @method Models\DescribeUserTasksResponse DescribeUserTasks(Models\DescribeUserTasksRequest $req) 本接口（DescribeUserTasks）用于拉取用户任务列表
 * @method Models\DestroyDCDBInstanceResponse DestroyDCDBInstance(Models\DestroyDCDBInstanceRequest $req) 本接口(DestroyDCDBInstance)用于销毁已隔离的包年包月实例。
 * @method Models\DestroyHourDCDBInstanceResponse DestroyHourDCDBInstance(Models\DestroyHourDCDBInstanceRequest $req) 本接口（DestroyHourDCDBInstance）用于销毁按量计费实例。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\FlushBinlogResponse FlushBinlog(Models\FlushBinlogRequest $req) 相当于在所有分片的mysqld中执行flush logs，完成切分的binlog将展示在各个分片控制台binlog列表里。
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) 本接口（GrantAccountPrivileges）用于给云数据库账号赋权。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\InitDCDBInstancesResponse InitDCDBInstances(Models\InitDCDBInstancesRequest $req) 本接口(InitDCDBInstances)用于初始化云数据库实例，包括设置默认字符集、表名大小写敏感等。
 * @method Models\KillSessionResponse KillSession(Models\KillSessionRequest $req) 本接口（KillSession）用于杀死指定会话。
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口（ModifyAccountDescription）用于修改云数据库账号备注。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改云数据库安全组
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) 本接口（ModifyDBInstancesProject）用于修改云数据库实例所属项目。
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) 本接口(ModifyDBParameters)用于修改数据库参数。
 * @method Models\ModifyDBSyncModeResponse ModifyDBSyncMode(Models\ModifyDBSyncModeRequest $req) 本接口（ModifyDBSyncMode）用于修改云数据库实例的同步模式。
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) 本接口（OpenDBExtranetAccess）用于开通云数据库实例的外网访问。开通外网访问后，您可通过外网域名和端口访问实例，可使用查询实例列表接口获取外网域名和端口信息。
 * @method Models\RenewDCDBInstanceResponse RenewDCDBInstance(Models\RenewDCDBInstanceRequest $req) 本接口（RenewDCDBInstance）用于续费分布式数据库实例。
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于重置云数据库账号的密码。
注意：相同用户名，不同Host是不同的账号。
 * @method Models\UpgradeDCDBInstanceResponse UpgradeDCDBInstance(Models\UpgradeDCDBInstanceRequest $req) 本接口（UpgradeDCDBInstance）用于升级分布式数据库实例。本接口完成下单和支付两个动作，如果发生支付失败的错误，调用用户账户相关接口中的支付订单接口（PayDeals）重新支付即可。
 */

class DcdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dcdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dcdb";

    /**
     * @var string
     */
    protected $version = "2018-04-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("dcdb")."\\"."V20180411\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

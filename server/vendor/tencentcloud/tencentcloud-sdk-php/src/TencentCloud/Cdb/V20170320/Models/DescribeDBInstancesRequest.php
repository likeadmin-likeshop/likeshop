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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method integer getProjectId() 获取项目 ID，可使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口查询项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，可使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口查询项目 ID。
 * @method array getInstanceTypes() 获取实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。
 * @method array getVips() 获取实例的内网 IP 地址。
 * @method void setVips(array $Vips) 设置实例的内网 IP 地址。
 * @method array getStatus() 获取实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 隔离中（可在回收站恢复开机）
 * @method void setStatus(array $Status) 设置实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 隔离中（可在回收站恢复开机）
 * @method integer getOffset() 获取偏移量，默认值为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为 0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为 20，最大值为 2000。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为 20，最大值为 2000。
 * @method string getSecurityGroupId() 获取安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。
 * @method array getPayTypes() 获取付费类型，可取值：0 - 包年包月，1 - 小时计费。
 * @method void setPayTypes(array $PayTypes) 设置付费类型，可取值：0 - 包年包月，1 - 小时计费。
 * @method array getInstanceNames() 获取实例名称。
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称。
 * @method array getTaskStatus() 获取实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行
 * @method void setTaskStatus(array $TaskStatus) 设置实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行
 * @method array getEngineVersions() 获取实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。
 * @method void setEngineVersions(array $EngineVersions) 设置实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。
 * @method array getVpcIds() 获取私有网络的 ID。
 * @method void setVpcIds(array $VpcIds) 设置私有网络的 ID。
 * @method array getZoneIds() 获取可用区的 ID。
 * @method void setZoneIds(array $ZoneIds) 设置可用区的 ID。
 * @method array getSubnetIds() 获取子网 ID。
 * @method void setSubnetIds(array $SubnetIds) 设置子网 ID。
 * @method array getCdbErrors() 获取是否锁定标记。
 * @method void setCdbErrors(array $CdbErrors) 设置是否锁定标记。
 * @method string getOrderBy() 获取返回结果集排序的字段，目前支持："InstanceId"，"InstanceName"，"CreateTime"，"DeadlineTime"。
 * @method void setOrderBy(string $OrderBy) 设置返回结果集排序的字段，目前支持："InstanceId"，"InstanceName"，"CreateTime"，"DeadlineTime"。
 * @method string getOrderDirection() 获取返回结果集排序方式，目前支持："ASC" 或者 "DESC"。
 * @method void setOrderDirection(string $OrderDirection) 设置返回结果集排序方式，目前支持："ASC" 或者 "DESC"。
 * @method integer getWithSecurityGroup() 获取是否以安全组 ID 为过滤条件。
 * @method void setWithSecurityGroup(integer $WithSecurityGroup) 设置是否以安全组 ID 为过滤条件。
 * @method integer getWithExCluster() 获取是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。
 * @method void setWithExCluster(integer $WithExCluster) 设置是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。
 * @method string getExClusterId() 获取独享集群 ID。
 * @method void setExClusterId(string $ExClusterId) 设置独享集群 ID。
 * @method array getInstanceIds() 获取实例 ID。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID。
 * @method integer getInitFlag() 获取初始化标记，可取值：0 - 未初始化，1 - 初始化。
 * @method void setInitFlag(integer $InitFlag) 设置初始化标记，可取值：0 - 未初始化，1 - 初始化。
 * @method integer getWithDr() 获取是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。
 * @method void setWithDr(integer $WithDr) 设置是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。
 * @method integer getWithRo() 获取是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
 * @method void setWithRo(integer $WithRo) 设置是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
 * @method integer getWithMaster() 获取是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
 * @method void setWithMaster(integer $WithMaster) 设置是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
 * @method array getDeployGroupIds() 获取置放群组ID列表。
 * @method void setDeployGroupIds(array $DeployGroupIds) 设置置放群组ID列表。
 * @method array getTagKeysForSearch() 获取是否以标签键为过滤条件。
 * @method void setTagKeysForSearch(array $TagKeysForSearch) 设置是否以标签键为过滤条件。
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer 项目 ID，可使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口查询项目 ID。
     */
    public $ProjectId;

    /**
     * @var array 实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。
     */
    public $InstanceTypes;

    /**
     * @var array 实例的内网 IP 地址。
     */
    public $Vips;

    /**
     * @var array 实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 隔离中（可在回收站恢复开机）
     */
    public $Status;

    /**
     * @var integer 偏移量，默认值为 0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为 20，最大值为 2000。
     */
    public $Limit;

    /**
     * @var string 安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。
     */
    public $SecurityGroupId;

    /**
     * @var array 付费类型，可取值：0 - 包年包月，1 - 小时计费。
     */
    public $PayTypes;

    /**
     * @var array 实例名称。
     */
    public $InstanceNames;

    /**
     * @var array 实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行
     */
    public $TaskStatus;

    /**
     * @var array 实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。
     */
    public $EngineVersions;

    /**
     * @var array 私有网络的 ID。
     */
    public $VpcIds;

    /**
     * @var array 可用区的 ID。
     */
    public $ZoneIds;

    /**
     * @var array 子网 ID。
     */
    public $SubnetIds;

    /**
     * @var array 是否锁定标记。
     */
    public $CdbErrors;

    /**
     * @var string 返回结果集排序的字段，目前支持："InstanceId"，"InstanceName"，"CreateTime"，"DeadlineTime"。
     */
    public $OrderBy;

    /**
     * @var string 返回结果集排序方式，目前支持："ASC" 或者 "DESC"。
     */
    public $OrderDirection;

    /**
     * @var integer 是否以安全组 ID 为过滤条件。
     */
    public $WithSecurityGroup;

    /**
     * @var integer 是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。
     */
    public $WithExCluster;

    /**
     * @var string 独享集群 ID。
     */
    public $ExClusterId;

    /**
     * @var array 实例 ID。
     */
    public $InstanceIds;

    /**
     * @var integer 初始化标记，可取值：0 - 未初始化，1 - 初始化。
     */
    public $InitFlag;

    /**
     * @var integer 是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。
     */
    public $WithDr;

    /**
     * @var integer 是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
     */
    public $WithRo;

    /**
     * @var integer 是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
     */
    public $WithMaster;

    /**
     * @var array 置放群组ID列表。
     */
    public $DeployGroupIds;

    /**
     * @var array 是否以标签键为过滤条件。
     */
    public $TagKeysForSearch;

    /**
     * @param integer $ProjectId 项目 ID，可使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口查询项目 ID。
     * @param array $InstanceTypes 实例类型，可取值：1 - 主实例，2 - 灾备实例，3 - 只读实例。
     * @param array $Vips 实例的内网 IP 地址。
     * @param array $Status 实例状态，可取值：<br>0 - 创建中<br>1 - 运行中<br>4 - 正在进行隔离操作<br>5 - 隔离中（可在回收站恢复开机）
     * @param integer $Offset 偏移量，默认值为 0。
     * @param integer $Limit 单次请求返回的数量，默认值为 20，最大值为 2000。
     * @param string $SecurityGroupId 安全组 ID。当使用安全组 ID 为过滤条件时，需指定 WithSecurityGroup 参数为 1。
     * @param array $PayTypes 付费类型，可取值：0 - 包年包月，1 - 小时计费。
     * @param array $InstanceNames 实例名称。
     * @param array $TaskStatus 实例任务状态，可能取值：<br>0 - 没有任务<br>1 - 升级中<br>2 - 数据导入中<br>3 - 开放Slave中<br>4 - 外网访问开通中<br>5 - 批量操作执行中<br>6 - 回档中<br>7 - 外网访问关闭中<br>8 - 密码修改中<br>9 - 实例名修改中<br>10 - 重启中<br>12 - 自建迁移中<br>13 - 删除库表中<br>14 - 灾备实例创建同步中<br>15 - 升级待切换<br>16 - 升级切换中<br>17 - 升级切换完成<br>19 - 参数设置待执行
     * @param array $EngineVersions 实例数据库引擎版本，可能取值：5.1、5.5、5.6 和 5.7。
     * @param array $VpcIds 私有网络的 ID。
     * @param array $ZoneIds 可用区的 ID。
     * @param array $SubnetIds 子网 ID。
     * @param array $CdbErrors 是否锁定标记。
     * @param string $OrderBy 返回结果集排序的字段，目前支持："InstanceId"，"InstanceName"，"CreateTime"，"DeadlineTime"。
     * @param string $OrderDirection 返回结果集排序方式，目前支持："ASC" 或者 "DESC"。
     * @param integer $WithSecurityGroup 是否以安全组 ID 为过滤条件。
     * @param integer $WithExCluster 是否包含独享集群详细信息，可取值：0 - 不包含，1 - 包含。
     * @param string $ExClusterId 独享集群 ID。
     * @param array $InstanceIds 实例 ID。
     * @param integer $InitFlag 初始化标记，可取值：0 - 未初始化，1 - 初始化。
     * @param integer $WithDr 是否包含灾备关系对应的实例，可取值：0 - 不包含，1 - 包含。默认取值为1。如果拉取主实例，则灾备关系的数据在DrInfo字段中， 如果拉取灾备实例， 则灾备关系的数据在MasterInfo字段中。灾备关系中只包含部分基本的数据，详细的数据需要自行调接口拉取。
     * @param integer $WithRo 是否包含只读实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
     * @param integer $WithMaster 是否包含主实例，可取值：0 - 不包含，1 - 包含。默认取值为1。
     * @param array $DeployGroupIds 置放群组ID列表。
     * @param array $TagKeysForSearch 是否以标签键为过滤条件。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("PayTypes",$param) and $param["PayTypes"] !== null) {
            $this->PayTypes = $param["PayTypes"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("CdbErrors",$param) and $param["CdbErrors"] !== null) {
            $this->CdbErrors = $param["CdbErrors"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("WithSecurityGroup",$param) and $param["WithSecurityGroup"] !== null) {
            $this->WithSecurityGroup = $param["WithSecurityGroup"];
        }

        if (array_key_exists("WithExCluster",$param) and $param["WithExCluster"] !== null) {
            $this->WithExCluster = $param["WithExCluster"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("WithDr",$param) and $param["WithDr"] !== null) {
            $this->WithDr = $param["WithDr"];
        }

        if (array_key_exists("WithRo",$param) and $param["WithRo"] !== null) {
            $this->WithRo = $param["WithRo"];
        }

        if (array_key_exists("WithMaster",$param) and $param["WithMaster"] !== null) {
            $this->WithMaster = $param["WithMaster"];
        }

        if (array_key_exists("DeployGroupIds",$param) and $param["DeployGroupIds"] !== null) {
            $this->DeployGroupIds = $param["DeployGroupIds"];
        }

        if (array_key_exists("TagKeysForSearch",$param) and $param["TagKeysForSearch"] !== null) {
            $this->TagKeysForSearch = $param["TagKeysForSearch"];
        }
    }
}

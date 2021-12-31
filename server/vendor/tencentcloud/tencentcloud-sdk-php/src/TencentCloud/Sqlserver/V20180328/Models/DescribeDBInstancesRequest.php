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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getStatus() 获取实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
 * @method void setStatus(integer $Status) 设置实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method array getInstanceIdSet() 获取一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
 * @method integer getPayMode() 获取付费类型检索 1-包年包月，0-按量计费
 * @method void setPayMode(integer $PayMode) 设置付费类型检索 1-包年包月，0-按量计费
 * @method string getVpcId() 获取实例所属VPC的唯一字符串ID，格式如：vpc-xxx，传空字符串(“”)则按照基础网络筛选。
 * @method void setVpcId(string $VpcId) 设置实例所属VPC的唯一字符串ID，格式如：vpc-xxx，传空字符串(“”)则按照基础网络筛选。
 * @method string getSubnetId() 获取实例所属子网的唯一字符串ID，格式如： subnet-xxx，传空字符串(“”)则按照基础网络筛选。
 * @method void setSubnetId(string $SubnetId) 设置实例所属子网的唯一字符串ID，格式如： subnet-xxx，传空字符串(“”)则按照基础网络筛选。
 * @method array getVipSet() 获取实例内网地址列表，格式如：172.1.0.12
 * @method void setVipSet(array $VipSet) 设置实例内网地址列表，格式如：172.1.0.12
 * @method array getInstanceNameSet() 获取实例名称列表，模糊查询
 * @method void setInstanceNameSet(array $InstanceNameSet) 设置实例名称列表，模糊查询
 * @method array getVersionSet() 获取实例版本代号列表，格式如：2008R2，2012SP3等
 * @method void setVersionSet(array $VersionSet) 设置实例版本代号列表，格式如：2008R2，2012SP3等
 * @method string getZone() 获取实例可用区，格式如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置实例可用区，格式如：ap-guangzhou-2
 * @method array getTagKeys() 获取实例标签列表
 * @method void setTagKeys(array $TagKeys) 设置实例标签列表
 * @method string getSearchKey() 获取模糊查询关键字，支持实例id、实例名、内网ip
 * @method void setSearchKey(string $SearchKey) 设置模糊查询关键字，支持实例id、实例名、内网ip
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
     */
    public $Status;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为100
     */
    public $Limit;

    /**
     * @var array 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
     */
    public $InstanceIdSet;

    /**
     * @var integer 付费类型检索 1-包年包月，0-按量计费
     */
    public $PayMode;

    /**
     * @var string 实例所属VPC的唯一字符串ID，格式如：vpc-xxx，传空字符串(“”)则按照基础网络筛选。
     */
    public $VpcId;

    /**
     * @var string 实例所属子网的唯一字符串ID，格式如： subnet-xxx，传空字符串(“”)则按照基础网络筛选。
     */
    public $SubnetId;

    /**
     * @var array 实例内网地址列表，格式如：172.1.0.12
     */
    public $VipSet;

    /**
     * @var array 实例名称列表，模糊查询
     */
    public $InstanceNameSet;

    /**
     * @var array 实例版本代号列表，格式如：2008R2，2012SP3等
     */
    public $VersionSet;

    /**
     * @var string 实例可用区，格式如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var array 实例标签列表
     */
    public $TagKeys;

    /**
     * @var string 模糊查询关键字，支持实例id、实例名、内网ip
     */
    public $SearchKey;

    /**
     * @param integer $ProjectId 项目ID
     * @param integer $Status 实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为100
     * @param array $InstanceIdSet 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
     * @param integer $PayMode 付费类型检索 1-包年包月，0-按量计费
     * @param string $VpcId 实例所属VPC的唯一字符串ID，格式如：vpc-xxx，传空字符串(“”)则按照基础网络筛选。
     * @param string $SubnetId 实例所属子网的唯一字符串ID，格式如： subnet-xxx，传空字符串(“”)则按照基础网络筛选。
     * @param array $VipSet 实例内网地址列表，格式如：172.1.0.12
     * @param array $InstanceNameSet 实例名称列表，模糊查询
     * @param array $VersionSet 实例版本代号列表，格式如：2008R2，2012SP3等
     * @param string $Zone 实例可用区，格式如：ap-guangzhou-2
     * @param array $TagKeys 实例标签列表
     * @param string $SearchKey 模糊查询关键字，支持实例id、实例名、内网ip
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VipSet",$param) and $param["VipSet"] !== null) {
            $this->VipSet = $param["VipSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("VersionSet",$param) and $param["VersionSet"] !== null) {
            $this->VersionSet = $param["VersionSet"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}

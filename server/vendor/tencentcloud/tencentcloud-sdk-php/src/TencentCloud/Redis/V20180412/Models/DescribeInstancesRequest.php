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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取实例列表的大小，参数默认值20
 * @method void setLimit(integer $Limit) 设置实例列表的大小，参数默认值20
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method string getInstanceId() 获取实例Id，如：crs-6ubhgouj
 * @method void setInstanceId(string $InstanceId) 设置实例Id，如：crs-6ubhgouj
 * @method string getOrderBy() 获取枚举范围： projectId,createtime,instancename,type,curDeadline
 * @method void setOrderBy(string $OrderBy) 设置枚举范围： projectId,createtime,instancename,type,curDeadline
 * @method integer getOrderType() 获取1倒序，0顺序，默认倒序
 * @method void setOrderType(integer $OrderType) 设置1倒序，0顺序，默认倒序
 * @method array getVpcIds() 获取私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：47525
 * @method void setVpcIds(array $VpcIds) 设置私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：47525
 * @method array getSubnetIds() 获取子网ID数组，数组下标从0开始，如：56854
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID数组，数组下标从0开始，如：56854
 * @method array getProjectIds() 获取项目ID 组成的数组，数组下标从0开始
 * @method void setProjectIds(array $ProjectIds) 设置项目ID 组成的数组，数组下标从0开始
 * @method string getSearchKey() 获取查找实例的ID。
 * @method void setSearchKey(string $SearchKey) 设置查找实例的ID。
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getUniqVpcIds() 获取私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method array getUniqSubnetIds() 获取子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method array getRegionIds() 获取地域ID，已经弃用，可通过公共参数Region查询对应地域
 * @method void setRegionIds(array $RegionIds) 设置地域ID，已经弃用，可通过公共参数Region查询对应地域
 * @method array getStatus() 获取实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
 * @method void setStatus(array $Status) 设置实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
 * @method integer getTypeVersion() 获取类型版本：1-单机版,2-主从版,3-集群版
 * @method void setTypeVersion(integer $TypeVersion) 设置类型版本：1-单机版,2-主从版,3-集群版
 * @method string getEngineName() 获取引擎信息：Redis-2.8，Redis-4.0，CKV
 * @method void setEngineName(string $EngineName) 设置引擎信息：Redis-2.8，Redis-4.0，CKV
 * @method array getAutoRenew() 获取续费模式：0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
 * @method void setAutoRenew(array $AutoRenew) 设置续费模式：0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
 * @method string getBillingMode() 获取计费模式：postpaid-按量计费；prepaid-包年包月
 * @method void setBillingMode(string $BillingMode) 设置计费模式：postpaid-按量计费；prepaid-包年包月
 * @method integer getType() 获取实例类型：1-Redis老集群版；2-Redis 2.8主从版；3-CKV主从版；4-CKV集群版；5-Redis 2.8单机版；6-Redis 4.0主从版；7-Redis 4.0集群版；8 – Redis5.0主从版，9 – Redis5.0集群版，
 * @method void setType(integer $Type) 设置实例类型：1-Redis老集群版；2-Redis 2.8主从版；3-CKV主从版；4-CKV集群版；5-Redis 2.8单机版；6-Redis 4.0主从版；7-Redis 4.0集群版；8 – Redis5.0主从版，9 – Redis5.0集群版，
 * @method array getSearchKeys() 获取搜索关键词：支持实例Id、实例名称、完整IP
 * @method void setSearchKeys(array $SearchKeys) 设置搜索关键词：支持实例Id、实例名称、完整IP
 * @method array getTypeList() 获取内部参数，用户可忽略
 * @method void setTypeList(array $TypeList) 设置内部参数，用户可忽略
 * @method string getMonitorVersion() 获取内部参数，用户可忽略
 * @method void setMonitorVersion(string $MonitorVersion) 设置内部参数，用户可忽略
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 实例列表的大小，参数默认值20
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var string 实例Id，如：crs-6ubhgouj
     */
    public $InstanceId;

    /**
     * @var string 枚举范围： projectId,createtime,instancename,type,curDeadline
     */
    public $OrderBy;

    /**
     * @var integer 1倒序，0顺序，默认倒序
     */
    public $OrderType;

    /**
     * @var array 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：47525
     */
    public $VpcIds;

    /**
     * @var array 子网ID数组，数组下标从0开始，如：56854
     */
    public $SubnetIds;

    /**
     * @var array 项目ID 组成的数组，数组下标从0开始
     */
    public $ProjectIds;

    /**
     * @var string 查找实例的ID。
     */
    public $SearchKey;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     */
    public $UniqVpcIds;

    /**
     * @var array 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     */
    public $UniqSubnetIds;

    /**
     * @var array 地域ID，已经弃用，可通过公共参数Region查询对应地域
     */
    public $RegionIds;

    /**
     * @var array 实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
     */
    public $Status;

    /**
     * @var integer 类型版本：1-单机版,2-主从版,3-集群版
     */
    public $TypeVersion;

    /**
     * @var string 引擎信息：Redis-2.8，Redis-4.0，CKV
     */
    public $EngineName;

    /**
     * @var array 续费模式：0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
     */
    public $AutoRenew;

    /**
     * @var string 计费模式：postpaid-按量计费；prepaid-包年包月
     */
    public $BillingMode;

    /**
     * @var integer 实例类型：1-Redis老集群版；2-Redis 2.8主从版；3-CKV主从版；4-CKV集群版；5-Redis 2.8单机版；6-Redis 4.0主从版；7-Redis 4.0集群版；8 – Redis5.0主从版，9 – Redis5.0集群版，
     */
    public $Type;

    /**
     * @var array 搜索关键词：支持实例Id、实例名称、完整IP
     */
    public $SearchKeys;

    /**
     * @var array 内部参数，用户可忽略
     */
    public $TypeList;

    /**
     * @var string 内部参数，用户可忽略
     */
    public $MonitorVersion;

    /**
     * @param integer $Limit 实例列表的大小，参数默认值20
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param string $InstanceId 实例Id，如：crs-6ubhgouj
     * @param string $OrderBy 枚举范围： projectId,createtime,instancename,type,curDeadline
     * @param integer $OrderType 1倒序，0顺序，默认倒序
     * @param array $VpcIds 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：47525
     * @param array $SubnetIds 子网ID数组，数组下标从0开始，如：56854
     * @param array $ProjectIds 项目ID 组成的数组，数组下标从0开始
     * @param string $SearchKey 查找实例的ID。
     * @param string $InstanceName 实例名称
     * @param array $UniqVpcIds 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     * @param array $UniqSubnetIds 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     * @param array $RegionIds 地域ID，已经弃用，可通过公共参数Region查询对应地域
     * @param array $Status 实例状态：0-待初始化，1-流程中，2-运行中，-2-已隔离，-3-待删除
     * @param integer $TypeVersion 类型版本：1-单机版,2-主从版,3-集群版
     * @param string $EngineName 引擎信息：Redis-2.8，Redis-4.0，CKV
     * @param array $AutoRenew 续费模式：0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
     * @param string $BillingMode 计费模式：postpaid-按量计费；prepaid-包年包月
     * @param integer $Type 实例类型：1-Redis老集群版；2-Redis 2.8主从版；3-CKV主从版；4-CKV集群版；5-Redis 2.8单机版；6-Redis 4.0主从版；7-Redis 4.0集群版；8 – Redis5.0主从版，9 – Redis5.0集群版，
     * @param array $SearchKeys 搜索关键词：支持实例Id、实例名称、完整IP
     * @param array $TypeList 内部参数，用户可忽略
     * @param string $MonitorVersion 内部参数，用户可忽略
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TypeVersion",$param) and $param["TypeVersion"] !== null) {
            $this->TypeVersion = $param["TypeVersion"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }
    }
}

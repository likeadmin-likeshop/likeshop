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
 * UpgradeDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-j8kv137v
 * @method integer getMemory() 获取实例升级后内存大小，单位GB，其值不能小于当前实例内存大小
 * @method void setMemory(integer $Memory) 设置实例升级后内存大小，单位GB，其值不能小于当前实例内存大小
 * @method integer getStorage() 获取实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小
 * @method void setStorage(integer $Storage) 设置实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小
 * @method integer getAutoVoucher() 获取是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0
 * @method array getVoucherIds() 获取代金券ID，目前单个订单只能使用一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID，目前单个订单只能使用一张代金券
 * @method integer getCpu() 获取实例升级后的CPU核心数
 * @method void setCpu(integer $Cpu) 设置实例升级后的CPU核心数
 * @method string getDBVersion() 获取升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本
 * @method void setDBVersion(string $DBVersion) 设置升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本
 * @method string getHAType() 获取升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构
 * @method void setHAType(string $HAType) 设置升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构
 * @method string getMultiZones() 获取修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为夸可用区
 * @method void setMultiZones(string $MultiZones) 设置修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为夸可用区
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer 实例升级后内存大小，单位GB，其值不能小于当前实例内存大小
     */
    public $Memory;

    /**
     * @var integer 实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小
     */
    public $Storage;

    /**
     * @var integer 是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID，目前单个订单只能使用一张代金券
     */
    public $VoucherIds;

    /**
     * @var integer 实例升级后的CPU核心数
     */
    public $Cpu;

    /**
     * @var string 升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本
     */
    public $DBVersion;

    /**
     * @var string 升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构
     */
    public $HAType;

    /**
     * @var string 修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为夸可用区
     */
    public $MultiZones;

    /**
     * @param string $InstanceId 实例ID，形如mssql-j8kv137v
     * @param integer $Memory 实例升级后内存大小，单位GB，其值不能小于当前实例内存大小
     * @param integer $Storage 实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小
     * @param integer $AutoVoucher 是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0
     * @param array $VoucherIds 代金券ID，目前单个订单只能使用一张代金券
     * @param integer $Cpu 实例升级后的CPU核心数
     * @param string $DBVersion 升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本
     * @param string $HAType 升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构
     * @param string $MultiZones 修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为夸可用区
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("HAType",$param) and $param["HAType"] !== null) {
            $this->HAType = $param["HAType"];
        }

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }
    }
}

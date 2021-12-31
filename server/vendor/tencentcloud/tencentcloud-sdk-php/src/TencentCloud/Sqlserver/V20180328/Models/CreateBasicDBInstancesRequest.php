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
 * CreateBasicDBInstances请求参数结构体
 *
 * @method string getZone() 获取实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method void setZone(string $Zone) 设置实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method integer getCpu() 获取实例的CPU核心数
 * @method void setCpu(integer $Cpu) 设置实例的CPU核心数
 * @method integer getMemory() 获取实例内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位GB
 * @method integer getStorage() 获取实例磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置实例磁盘大小，单位GB
 * @method string getSubnetId() 获取VPC子网ID，形如subnet-bdoe83fa
 * @method void setSubnetId(string $SubnetId) 设置VPC子网ID，形如subnet-bdoe83fa
 * @method string getVpcId() 获取VPC网络ID，形如vpc-dsp338hz
 * @method void setVpcId(string $VpcId) 设置VPC网络ID，形如vpc-dsp338hz
 * @method string getMachineType() 获取购买实例的宿主机类型, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
 * @method void setMachineType(string $MachineType) 设置购买实例的宿主机类型, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
 * @method string getInstanceChargeType() 获取付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getGoodsNum() 获取本次购买几个实例，默认值为1。取值不超过10
 * @method void setGoodsNum(integer $GoodsNum) 设置本次购买几个实例，默认值为1。取值不超过10
 * @method string getDBVersion() 获取sqlserver版本，目前只支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise），2016SP1（SQL Server 2016 Enterprise），201602（SQL Server 2016 Standard），2017（SQL Server 2017 Enterprise），201202（SQL Server 2012 Standard），201402（SQL Server 2014 Standard），2014SP2（SQL Server 2014 Enterprise），201702（SQL Server 2017 Standard）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method void setDBVersion(string $DBVersion) 设置sqlserver版本，目前只支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise），2016SP1（SQL Server 2016 Enterprise），201602（SQL Server 2016 Standard），2017（SQL Server 2017 Enterprise），201202（SQL Server 2012 Standard），201402（SQL Server 2014 Standard），2014SP2（SQL Server 2014 Enterprise），201702（SQL Server 2017 Standard）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method integer getPeriod() 获取购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method void setPeriod(integer $Period) 设置购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method array getSecurityGroupList() 获取安全组列表，填写形如sg-xxx的安全组ID
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置安全组列表，填写形如sg-xxx的安全组ID
 * @method integer getAutoRenewFlag() 获取自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
 * @method integer getAutoVoucher() 获取是否自动使用代金券；1 - 是，0 - 否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券；1 - 是，0 - 否，默认不使用
 * @method array getVoucherIds() 获取代金券ID数组，目前单个订单只能使用一张
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID数组，目前单个订单只能使用一张
 * @method array getWeekly() 获取可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method void setWeekly(array $Weekly) 设置可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method string getStartTime() 获取可维护时间窗配置，每天可维护的开始时间
 * @method void setStartTime(string $StartTime) 设置可维护时间窗配置，每天可维护的开始时间
 * @method integer getSpan() 获取可维护时间窗配置，持续时间，单位：小时
 * @method void setSpan(integer $Span) 设置可维护时间窗配置，持续时间，单位：小时
 * @method array getResourceTags() 获取新建实例绑定的标签集合
 * @method void setResourceTags(array $ResourceTags) 设置新建实例绑定的标签集合
 */
class CreateBasicDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     */
    public $Zone;

    /**
     * @var integer 实例的CPU核心数
     */
    public $Cpu;

    /**
     * @var integer 实例内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 实例磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var string VPC子网ID，形如subnet-bdoe83fa
     */
    public $SubnetId;

    /**
     * @var string VPC网络ID，形如vpc-dsp338hz
     */
    public $VpcId;

    /**
     * @var string 购买实例的宿主机类型, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
     */
    public $MachineType;

    /**
     * @var string 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     */
    public $InstanceChargeType;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 本次购买几个实例，默认值为1。取值不超过10
     */
    public $GoodsNum;

    /**
     * @var string sqlserver版本，目前只支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise），2016SP1（SQL Server 2016 Enterprise），201602（SQL Server 2016 Standard），2017（SQL Server 2017 Enterprise），201202（SQL Server 2012 Standard），201402（SQL Server 2014 Standard），2014SP2（SQL Server 2014 Enterprise），201702（SQL Server 2017 Standard）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     */
    public $DBVersion;

    /**
     * @var integer 购买实例周期，默认取值为1，表示一个月。取值不超过48
     */
    public $Period;

    /**
     * @var array 安全组列表，填写形如sg-xxx的安全组ID
     */
    public $SecurityGroupList;

    /**
     * @var integer 自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动使用代金券；1 - 是，0 - 否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID数组，目前单个订单只能使用一张
     */
    public $VoucherIds;

    /**
     * @var array 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     */
    public $Weekly;

    /**
     * @var string 可维护时间窗配置，每天可维护的开始时间
     */
    public $StartTime;

    /**
     * @var integer 可维护时间窗配置，持续时间，单位：小时
     */
    public $Span;

    /**
     * @var array 新建实例绑定的标签集合
     */
    public $ResourceTags;

    /**
     * @param string $Zone 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     * @param integer $Cpu 实例的CPU核心数
     * @param integer $Memory 实例内存大小，单位GB
     * @param integer $Storage 实例磁盘大小，单位GB
     * @param string $SubnetId VPC子网ID，形如subnet-bdoe83fa
     * @param string $VpcId VPC网络ID，形如vpc-dsp338hz
     * @param string $MachineType 购买实例的宿主机类型, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
     * @param string $InstanceChargeType 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     * @param integer $ProjectId 项目ID
     * @param integer $GoodsNum 本次购买几个实例，默认值为1。取值不超过10
     * @param string $DBVersion sqlserver版本，目前只支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise），2016SP1（SQL Server 2016 Enterprise），201602（SQL Server 2016 Standard），2017（SQL Server 2017 Enterprise），201202（SQL Server 2012 Standard），201402（SQL Server 2014 Standard），2014SP2（SQL Server 2014 Enterprise），201702（SQL Server 2017 Standard）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     * @param integer $Period 购买实例周期，默认取值为1，表示一个月。取值不超过48
     * @param array $SecurityGroupList 安全组列表，填写形如sg-xxx的安全组ID
     * @param integer $AutoRenewFlag 自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
     * @param integer $AutoVoucher 是否自动使用代金券；1 - 是，0 - 否，默认不使用
     * @param array $VoucherIds 代金券ID数组，目前单个订单只能使用一张
     * @param array $Weekly 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     * @param string $StartTime 可维护时间窗配置，每天可维护的开始时间
     * @param integer $Span 可维护时间窗配置，持续时间，单位：小时
     * @param array $ResourceTags 新建实例绑定的标签集合
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}

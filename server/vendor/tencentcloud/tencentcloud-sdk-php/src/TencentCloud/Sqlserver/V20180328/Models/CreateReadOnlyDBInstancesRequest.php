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
 * CreateReadOnlyDBInstances请求参数结构体
 *
 * @method string getInstanceId() 获取主实例ID，格式如：mssql-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) 设置主实例ID，格式如：mssql-3l3fgqn7
 * @method string getZone() 获取实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method void setZone(string $Zone) 设置实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method integer getReadOnlyGroupType() 获取只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面
 * @method void setReadOnlyGroupType(integer $ReadOnlyGroupType) 设置只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面
 * @method integer getMemory() 获取实例内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位GB
 * @method integer getStorage() 获取实例磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置实例磁盘大小，单位GB
 * @method integer getReadOnlyGroupForcedUpgrade() 获取0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。
 * @method void setReadOnlyGroupForcedUpgrade(integer $ReadOnlyGroupForcedUpgrade) 设置0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。
 * @method string getReadOnlyGroupId() 获取ReadOnlyGroupType=3时必填,已存在的只读组ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置ReadOnlyGroupType=3时必填,已存在的只读组ID
 * @method string getReadOnlyGroupName() 获取ReadOnlyGroupType=2时必填，新建的只读组名称
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置ReadOnlyGroupType=2时必填，新建的只读组名称
 * @method integer getReadOnlyGroupIsOfflineDelay() 获取ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。
 * @method void setReadOnlyGroupIsOfflineDelay(integer $ReadOnlyGroupIsOfflineDelay) 设置ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。
 * @method integer getReadOnlyGroupMaxDelayTime() 获取ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。
 * @method void setReadOnlyGroupMaxDelayTime(integer $ReadOnlyGroupMaxDelayTime) 设置ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。
 * @method integer getReadOnlyGroupMinInGroup() 获取ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。
 * @method void setReadOnlyGroupMinInGroup(integer $ReadOnlyGroupMinInGroup) 设置ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。
 * @method string getInstanceChargeType() 获取付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method integer getGoodsNum() 获取本次购买几个只读实例，默认值为1。
 * @method void setGoodsNum(integer $GoodsNum) 设置本次购买几个只读实例，默认值为1。
 * @method string getSubnetId() 获取VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setSubnetId(string $SubnetId) 设置VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method string getVpcId() 获取VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setVpcId(string $VpcId) 设置VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method integer getPeriod() 获取购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method void setPeriod(integer $Period) 设置购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method array getSecurityGroupList() 获取安全组列表，填写形如sg-xxx的安全组ID
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置安全组列表，填写形如sg-xxx的安全组ID
 * @method integer getAutoVoucher() 获取是否自动使用代金券；1 - 是，0 - 否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券；1 - 是，0 - 否，默认不使用
 * @method array getVoucherIds() 获取代金券ID数组，目前单个订单只能使用一张
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID数组，目前单个订单只能使用一张
 * @method array getResourceTags() 获取新建实例绑定的标签集合
 * @method void setResourceTags(array $ResourceTags) 设置新建实例绑定的标签集合
 */
class CreateReadOnlyDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 主实例ID，格式如：mssql-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var string 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     */
    public $Zone;

    /**
     * @var integer 只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面
     */
    public $ReadOnlyGroupType;

    /**
     * @var integer 实例内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 实例磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var integer 0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。
     */
    public $ReadOnlyGroupForcedUpgrade;

    /**
     * @var string ReadOnlyGroupType=3时必填,已存在的只读组ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string ReadOnlyGroupType=2时必填，新建的只读组名称
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。
     */
    public $ReadOnlyGroupIsOfflineDelay;

    /**
     * @var integer ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。
     */
    public $ReadOnlyGroupMaxDelayTime;

    /**
     * @var integer ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。
     */
    public $ReadOnlyGroupMinInGroup;

    /**
     * @var string 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     */
    public $InstanceChargeType;

    /**
     * @var integer 本次购买几个只读实例，默认值为1。
     */
    public $GoodsNum;

    /**
     * @var string VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $SubnetId;

    /**
     * @var string VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $VpcId;

    /**
     * @var integer 购买实例周期，默认取值为1，表示一个月。取值不超过48
     */
    public $Period;

    /**
     * @var array 安全组列表，填写形如sg-xxx的安全组ID
     */
    public $SecurityGroupList;

    /**
     * @var integer 是否自动使用代金券；1 - 是，0 - 否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID数组，目前单个订单只能使用一张
     */
    public $VoucherIds;

    /**
     * @var array 新建实例绑定的标签集合
     */
    public $ResourceTags;

    /**
     * @param string $InstanceId 主实例ID，格式如：mssql-3l3fgqn7
     * @param string $Zone 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     * @param integer $ReadOnlyGroupType 只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面
     * @param integer $Memory 实例内存大小，单位GB
     * @param integer $Storage 实例磁盘大小，单位GB
     * @param integer $ReadOnlyGroupForcedUpgrade 0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。
     * @param string $ReadOnlyGroupId ReadOnlyGroupType=3时必填,已存在的只读组ID
     * @param string $ReadOnlyGroupName ReadOnlyGroupType=2时必填，新建的只读组名称
     * @param integer $ReadOnlyGroupIsOfflineDelay ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。
     * @param integer $ReadOnlyGroupMaxDelayTime ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。
     * @param integer $ReadOnlyGroupMinInGroup ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。
     * @param string $InstanceChargeType 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     * @param integer $GoodsNum 本次购买几个只读实例，默认值为1。
     * @param string $SubnetId VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     * @param string $VpcId VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     * @param integer $Period 购买实例周期，默认取值为1，表示一个月。取值不超过48
     * @param array $SecurityGroupList 安全组列表，填写形如sg-xxx的安全组ID
     * @param integer $AutoVoucher 是否自动使用代金券；1 - 是，0 - 否，默认不使用
     * @param array $VoucherIds 代金券ID数组，目前单个订单只能使用一张
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ReadOnlyGroupType",$param) and $param["ReadOnlyGroupType"] !== null) {
            $this->ReadOnlyGroupType = $param["ReadOnlyGroupType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ReadOnlyGroupForcedUpgrade",$param) and $param["ReadOnlyGroupForcedUpgrade"] !== null) {
            $this->ReadOnlyGroupForcedUpgrade = $param["ReadOnlyGroupForcedUpgrade"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ReadOnlyGroupIsOfflineDelay",$param) and $param["ReadOnlyGroupIsOfflineDelay"] !== null) {
            $this->ReadOnlyGroupIsOfflineDelay = $param["ReadOnlyGroupIsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyGroupMaxDelayTime",$param) and $param["ReadOnlyGroupMaxDelayTime"] !== null) {
            $this->ReadOnlyGroupMaxDelayTime = $param["ReadOnlyGroupMaxDelayTime"];
        }

        if (array_key_exists("ReadOnlyGroupMinInGroup",$param) and $param["ReadOnlyGroupMinInGroup"] !== null) {
            $this->ReadOnlyGroupMinInGroup = $param["ReadOnlyGroupMinInGroup"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
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

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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstanceHour请求参数结构体
 *
 * @method integer getMemory() 获取实例内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB
 * @method integer getVolume() 获取实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB
 * @method integer getReplicateSetNum() 获取副本集个数，1为单副本集实例，大于1为分片集群实例，最大不超过10
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置副本集个数，1为单副本集实例，大于1为分片集群实例，最大不超过10
 * @method integer getSecondaryNum() 获取每个副本集内从节点个数，目前只支持从节点数为2
 * @method void setSecondaryNum(integer $SecondaryNum) 设置每个副本集内从节点个数，目前只支持从节点数为2
 * @method string getEngineVersion() 获取MongoDB引擎版本，值包括MONGO_3_WT 、MONGO_3_ROCKS和MONGO_36_WT
 * @method void setEngineVersion(string $EngineVersion) 设置MongoDB引擎版本，值包括MONGO_3_WT 、MONGO_3_ROCKS和MONGO_36_WT
 * @method string getMachine() 获取实例类型，GIO：高IO版；TGIO：高IO万兆
 * @method void setMachine(string $Machine) 设置实例类型，GIO：高IO版；TGIO：高IO万兆
 * @method integer getGoodsNum() 获取实例数量，默认值为1, 最小值1，最大值为10
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为1, 最小值1，最大值为10
 * @method string getZone() 获取可用区信息，格式如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置可用区信息，格式如：ap-guangzhou-2
 * @method string getInstanceRole() 获取实例角色，支持值包括：MASTER-表示主实例，DR-表示灾备实例，RO-表示只读实例
 * @method void setInstanceRole(string $InstanceRole) 设置实例角色，支持值包括：MASTER-表示主实例，DR-表示灾备实例，RO-表示只读实例
 * @method string getInstanceType() 获取实例类型，REPLSET-副本集，SHARD-分片集群
 * @method void setInstanceType(string $InstanceType) 设置实例类型，REPLSET-副本集，SHARD-分片集群
 * @method integer getEncrypt() 获取数据是否加密，当且仅当引擎版本为MONGO_3_ROCKS，可以选择加密
 * @method void setEncrypt(integer $Encrypt) 设置数据是否加密，当且仅当引擎版本为MONGO_3_ROCKS，可以选择加密
 * @method string getVpcId() 获取私有网络ID，如果不传则默认选择基础网络
 * @method void setVpcId(string $VpcId) 设置私有网络ID，如果不传则默认选择基础网络
 * @method string getSubnetId() 获取私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 * @method integer getProjectId() 获取项目ID，不填为默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不填为默认项目
 * @method array getSecurityGroup() 获取安全组参数
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var integer 副本集个数，1为单副本集实例，大于1为分片集群实例，最大不超过10
     */
    public $ReplicateSetNum;

    /**
     * @var integer 每个副本集内从节点个数，目前只支持从节点数为2
     */
    public $SecondaryNum;

    /**
     * @var string MongoDB引擎版本，值包括MONGO_3_WT 、MONGO_3_ROCKS和MONGO_36_WT
     */
    public $EngineVersion;

    /**
     * @var string 实例类型，GIO：高IO版；TGIO：高IO万兆
     */
    public $Machine;

    /**
     * @var integer 实例数量，默认值为1, 最小值1，最大值为10
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，格式如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var string 实例角色，支持值包括：MASTER-表示主实例，DR-表示灾备实例，RO-表示只读实例
     */
    public $InstanceRole;

    /**
     * @var string 实例类型，REPLSET-副本集，SHARD-分片集群
     */
    public $InstanceType;

    /**
     * @var integer 数据是否加密，当且仅当引擎版本为MONGO_3_ROCKS，可以选择加密
     */
    public $Encrypt;

    /**
     * @var string 私有网络ID，如果不传则默认选择基础网络
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
     */
    public $SubnetId;

    /**
     * @var integer 项目ID，不填为默认项目
     */
    public $ProjectId;

    /**
     * @var array 安全组参数
     */
    public $SecurityGroup;

    /**
     * @param integer $Memory 实例内存大小，单位：GB
     * @param integer $Volume 实例硬盘大小，单位：GB
     * @param integer $ReplicateSetNum 副本集个数，1为单副本集实例，大于1为分片集群实例，最大不超过10
     * @param integer $SecondaryNum 每个副本集内从节点个数，目前只支持从节点数为2
     * @param string $EngineVersion MongoDB引擎版本，值包括MONGO_3_WT 、MONGO_3_ROCKS和MONGO_36_WT
     * @param string $Machine 实例类型，GIO：高IO版；TGIO：高IO万兆
     * @param integer $GoodsNum 实例数量，默认值为1, 最小值1，最大值为10
     * @param string $Zone 可用区信息，格式如：ap-guangzhou-2
     * @param string $InstanceRole 实例角色，支持值包括：MASTER-表示主实例，DR-表示灾备实例，RO-表示只读实例
     * @param string $InstanceType 实例类型，REPLSET-副本集，SHARD-分片集群
     * @param integer $Encrypt 数据是否加密，当且仅当引擎版本为MONGO_3_ROCKS，可以选择加密
     * @param string $VpcId 私有网络ID，如果不传则默认选择基础网络
     * @param string $SubnetId 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
     * @param integer $ProjectId 项目ID，不填为默认项目
     * @param array $SecurityGroup 安全组参数
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}

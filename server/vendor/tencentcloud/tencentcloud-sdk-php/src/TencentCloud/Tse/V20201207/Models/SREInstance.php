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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务注册引擎实例
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getEdition() 获取版本号
 * @method void setEdition(string $Edition) 设置版本号
 * @method string getStatus() 获取状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
 * @method void setStatus(string $Status) 设置状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
 * @method string getSpecId() 获取规格ID
 * @method void setSpecId(string $SpecId) 设置规格ID
 * @method integer getReplica() 获取副本数
 * @method void setReplica(integer $Replica) 设置副本数
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getVpcId() 获取Vpc iD
 * @method void setVpcId(string $VpcId) 设置Vpc iD
 * @method array getSubnetIds() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableStorage() 获取是否开启持久化存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableStorage(boolean $EnableStorage) 设置是否开启持久化存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取数据存储方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置数据存储方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageCapacity() 获取云硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageCapacity(integer $StorageCapacity) 设置云硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymode() 获取计费方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymode(string $Paymode) 设置计费方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class SREInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 版本号
     */
    public $Edition;

    /**
     * @var string 状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
     */
    public $Status;

    /**
     * @var string 规格ID
     */
    public $SpecId;

    /**
     * @var integer 副本数
     */
    public $Replica;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string Vpc iD
     */
    public $VpcId;

    /**
     * @var array 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var boolean 是否开启持久化存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableStorage;

    /**
     * @var string 数据存储方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var integer 云硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageCapacity;

    /**
     * @var string 计费方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paymode;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 名称
     * @param string $Edition 版本号
     * @param string $Status 状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
     * @param string $SpecId 规格ID
     * @param integer $Replica 副本数
     * @param string $Type 类型
     * @param string $VpcId Vpc iD
     * @param array $SubnetIds 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableStorage 是否开启持久化存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 数据存储方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageCapacity 云硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Paymode 计费方式
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("EnableStorage",$param) and $param["EnableStorage"] !== null) {
            $this->EnableStorage = $param["EnableStorage"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }
    }
}

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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据安全审计产品规格信息
 *
 * @method string getInstanceVersionName() 获取规格描述
 * @method void setInstanceVersionName(string $InstanceVersionName) 设置规格描述
 * @method string getInstanceVersionKey() 获取规格名称
 * @method void setInstanceVersionKey(string $InstanceVersionKey) 设置规格名称
 * @method integer getQps() 获取最大吞吐量
 * @method void setQps(integer $Qps) 设置最大吞吐量
 * @method integer getMaxInstances() 获取最大实例数
 * @method void setMaxInstances(integer $MaxInstances) 设置最大实例数
 * @method integer getInsertSpeed() 获取入库速率（每小时）
 * @method void setInsertSpeed(integer $InsertSpeed) 设置入库速率（每小时）
 * @method integer getOnlineStorageCapacity() 获取最大在线存储量，单位：条
 * @method void setOnlineStorageCapacity(integer $OnlineStorageCapacity) 设置最大在线存储量，单位：条
 * @method integer getArchivingStorageCapacity() 获取最大归档存储量，单位：条
 * @method void setArchivingStorageCapacity(integer $ArchivingStorageCapacity) 设置最大归档存储量，单位：条
 */
class DbauditTypesInfo extends AbstractModel
{
    /**
     * @var string 规格描述
     */
    public $InstanceVersionName;

    /**
     * @var string 规格名称
     */
    public $InstanceVersionKey;

    /**
     * @var integer 最大吞吐量
     */
    public $Qps;

    /**
     * @var integer 最大实例数
     */
    public $MaxInstances;

    /**
     * @var integer 入库速率（每小时）
     */
    public $InsertSpeed;

    /**
     * @var integer 最大在线存储量，单位：条
     */
    public $OnlineStorageCapacity;

    /**
     * @var integer 最大归档存储量，单位：条
     */
    public $ArchivingStorageCapacity;

    /**
     * @param string $InstanceVersionName 规格描述
     * @param string $InstanceVersionKey 规格名称
     * @param integer $Qps 最大吞吐量
     * @param integer $MaxInstances 最大实例数
     * @param integer $InsertSpeed 入库速率（每小时）
     * @param integer $OnlineStorageCapacity 最大在线存储量，单位：条
     * @param integer $ArchivingStorageCapacity 最大归档存储量，单位：条
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
        if (array_key_exists("InstanceVersionName",$param) and $param["InstanceVersionName"] !== null) {
            $this->InstanceVersionName = $param["InstanceVersionName"];
        }

        if (array_key_exists("InstanceVersionKey",$param) and $param["InstanceVersionKey"] !== null) {
            $this->InstanceVersionKey = $param["InstanceVersionKey"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("MaxInstances",$param) and $param["MaxInstances"] !== null) {
            $this->MaxInstances = $param["MaxInstances"];
        }

        if (array_key_exists("InsertSpeed",$param) and $param["InsertSpeed"] !== null) {
            $this->InsertSpeed = $param["InsertSpeed"];
        }

        if (array_key_exists("OnlineStorageCapacity",$param) and $param["OnlineStorageCapacity"] !== null) {
            $this->OnlineStorageCapacity = $param["OnlineStorageCapacity"];
        }

        if (array_key_exists("ArchivingStorageCapacity",$param) and $param["ArchivingStorageCapacity"] !== null) {
            $this->ArchivingStorageCapacity = $param["ArchivingStorageCapacity"];
        }
    }
}

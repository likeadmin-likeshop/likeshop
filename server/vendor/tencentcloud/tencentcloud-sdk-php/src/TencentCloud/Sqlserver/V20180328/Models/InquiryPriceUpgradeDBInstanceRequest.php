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
 * InquiryPriceUpgradeDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-njj2mtpl
 * @method integer getMemory() 获取实例升级后的内存大小，单位GB，其值不能比当前实例内存小
 * @method void setMemory(integer $Memory) 设置实例升级后的内存大小，单位GB，其值不能比当前实例内存小
 * @method integer getStorage() 获取实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小
 * @method void setStorage(integer $Storage) 设置实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小
 * @method integer getCpu() 获取实例升级后的CPU核心数，其值不能比当前实例CPU小
 * @method void setCpu(integer $Cpu) 设置实例升级后的CPU核心数，其值不能比当前实例CPU小
 */
class InquiryPriceUpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer 实例升级后的内存大小，单位GB，其值不能比当前实例内存小
     */
    public $Memory;

    /**
     * @var integer 实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小
     */
    public $Storage;

    /**
     * @var integer 实例升级后的CPU核心数，其值不能比当前实例CPU小
     */
    public $Cpu;

    /**
     * @param string $InstanceId 实例ID，形如mssql-njj2mtpl
     * @param integer $Memory 实例升级后的内存大小，单位GB，其值不能比当前实例内存小
     * @param integer $Storage 实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小
     * @param integer $Cpu 实例升级后的CPU核心数，其值不能比当前实例CPU小
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}

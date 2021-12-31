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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一种规格的信息
 *
 * @method string getSpecCode() 获取规格ID
 * @method void setSpecCode(string $SpecCode) 设置规格ID
 * @method string getVersion() 获取PostgreSQL的内核版本编号
 * @method void setVersion(string $Version) 设置PostgreSQL的内核版本编号
 * @method string getVersionName() 获取内核编号对应的完整版本名称
 * @method void setVersionName(string $VersionName) 设置内核编号对应的完整版本名称
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMemory() 获取内存大小，单位：MB
 * @method void setMemory(integer $Memory) 设置内存大小，单位：MB
 * @method integer getMaxStorage() 获取该规格所支持最大存储容量，单位：GB
 * @method void setMaxStorage(integer $MaxStorage) 设置该规格所支持最大存储容量，单位：GB
 * @method integer getMinStorage() 获取该规格所支持最小存储容量，单位：GB
 * @method void setMinStorage(integer $MinStorage) 设置该规格所支持最小存储容量，单位：GB
 * @method integer getQps() 获取该规格的预估QPS
 * @method void setQps(integer $Qps) 设置该规格的预估QPS
 * @method integer getPid() 获取该规格对应的计费ID
 * @method void setPid(integer $Pid) 设置该规格对应的计费ID
 * @method string getType() 获取机器类型
 * @method void setType(string $Type) 设置机器类型
 */
class SpecItemInfo extends AbstractModel
{
    /**
     * @var string 规格ID
     */
    public $SpecCode;

    /**
     * @var string PostgreSQL的内核版本编号
     */
    public $Version;

    /**
     * @var string 内核编号对应的完整版本名称
     */
    public $VersionName;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位：MB
     */
    public $Memory;

    /**
     * @var integer 该规格所支持最大存储容量，单位：GB
     */
    public $MaxStorage;

    /**
     * @var integer 该规格所支持最小存储容量，单位：GB
     */
    public $MinStorage;

    /**
     * @var integer 该规格的预估QPS
     */
    public $Qps;

    /**
     * @var integer 该规格对应的计费ID
     */
    public $Pid;

    /**
     * @var string 机器类型
     */
    public $Type;

    /**
     * @param string $SpecCode 规格ID
     * @param string $Version PostgreSQL的内核版本编号
     * @param string $VersionName 内核编号对应的完整版本名称
     * @param integer $Cpu CPU核数
     * @param integer $Memory 内存大小，单位：MB
     * @param integer $MaxStorage 该规格所支持最大存储容量，单位：GB
     * @param integer $MinStorage 该规格所支持最小存储容量，单位：GB
     * @param integer $Qps 该规格的预估QPS
     * @param integer $Pid 该规格对应的计费ID
     * @param string $Type 机器类型
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

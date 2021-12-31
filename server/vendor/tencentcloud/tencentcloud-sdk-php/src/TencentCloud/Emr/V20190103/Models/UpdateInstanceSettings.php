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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变配资源规格
 *
 * @method integer getMemory() 获取内存容量，单位为G
 * @method void setMemory(integer $Memory) 设置内存容量，单位为G
 * @method integer getCPUCores() 获取CPU核数
 * @method void setCPUCores(integer $CPUCores) 设置CPU核数
 * @method string getResourceId() 获取机器资源ID（EMR测资源标识）
 * @method void setResourceId(string $ResourceId) 设置机器资源ID（EMR测资源标识）
 * @method string getInstanceType() 获取变配机器规格
 * @method void setInstanceType(string $InstanceType) 设置变配机器规格
 */
class UpdateInstanceSettings extends AbstractModel
{
    /**
     * @var integer 内存容量，单位为G
     */
    public $Memory;

    /**
     * @var integer CPU核数
     */
    public $CPUCores;

    /**
     * @var string 机器资源ID（EMR测资源标识）
     */
    public $ResourceId;

    /**
     * @var string 变配机器规格
     */
    public $InstanceType;

    /**
     * @param integer $Memory 内存容量，单位为G
     * @param integer $CPUCores CPU核数
     * @param string $ResourceId 机器资源ID（EMR测资源标识）
     * @param string $InstanceType 变配机器规格
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

        if (array_key_exists("CPUCores",$param) and $param["CPUCores"] !== null) {
            $this->CPUCores = $param["CPUCores"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}

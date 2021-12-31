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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例CPU平均使用率
 *
 * @method integer getCpuCore() 获取Cpu核编号
 * @method void setCpuCore(integer $CpuCore) 设置Cpu核编号
 * @method array getRate() 获取Cpu使用率
 * @method void setRate(array $Rate) 设置Cpu使用率
 */
class DeviceCpuRateInfo extends AbstractModel
{
    /**
     * @var integer Cpu核编号
     */
    public $CpuCore;

    /**
     * @var array Cpu使用率
     */
    public $Rate;

    /**
     * @param integer $CpuCore Cpu核编号
     * @param array $Rate Cpu使用率
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
        if (array_key_exists("CpuCore",$param) and $param["CpuCore"] !== null) {
            $this->CpuCore = $param["CpuCore"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }
    }
}

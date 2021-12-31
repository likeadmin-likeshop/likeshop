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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护机器信息
 *
 * @method string getQuuid() 获取机器唯一ID
 * @method void setQuuid(string $Quuid) 设置机器唯一ID
 * @method integer getProtectSwitch() 获取防护开关 0  关闭 1开启
 * @method void setProtectSwitch(integer $ProtectSwitch) 设置防护开关 0  关闭 1开启
 * @method integer getAutoRecovery() 获取自动恢复开关 0 关闭 1开启
 * @method void setAutoRecovery(integer $AutoRecovery) 设置自动恢复开关 0 关闭 1开启
 */
class ProtectHostConfig extends AbstractModel
{
    /**
     * @var string 机器唯一ID
     */
    public $Quuid;

    /**
     * @var integer 防护开关 0  关闭 1开启
     */
    public $ProtectSwitch;

    /**
     * @var integer 自动恢复开关 0 关闭 1开启
     */
    public $AutoRecovery;

    /**
     * @param string $Quuid 机器唯一ID
     * @param integer $ProtectSwitch 防护开关 0  关闭 1开启
     * @param integer $AutoRecovery 自动恢复开关 0 关闭 1开启
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ProtectSwitch",$param) and $param["ProtectSwitch"] !== null) {
            $this->ProtectSwitch = $param["ProtectSwitch"];
        }

        if (array_key_exists("AutoRecovery",$param) and $param["AutoRecovery"] !== null) {
            $this->AutoRecovery = $param["AutoRecovery"];
        }
    }
}

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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专业周报密码破解数据。
 *
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getUsername() 获取被破解用户名。
 * @method void setUsername(string $Username) 设置被破解用户名。
 * @method string getSrcIp() 获取源IP。
 * @method void setSrcIp(string $SrcIp) 设置源IP。
 * @method integer getCount() 获取尝试次数。
 * @method void setCount(integer $Count) 设置尝试次数。
 * @method string getAttackTime() 获取攻击时间。
 * @method void setAttackTime(string $AttackTime) 设置攻击时间。
 */
class WeeklyReportBruteAttack extends AbstractModel
{
    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 被破解用户名。
     */
    public $Username;

    /**
     * @var string 源IP。
     */
    public $SrcIp;

    /**
     * @var integer 尝试次数。
     */
    public $Count;

    /**
     * @var string 攻击时间。
     */
    public $AttackTime;

    /**
     * @param string $MachineIp 主机IP。
     * @param string $Username 被破解用户名。
     * @param string $SrcIp 源IP。
     * @param integer $Count 尝试次数。
     * @param string $AttackTime 攻击时间。
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}

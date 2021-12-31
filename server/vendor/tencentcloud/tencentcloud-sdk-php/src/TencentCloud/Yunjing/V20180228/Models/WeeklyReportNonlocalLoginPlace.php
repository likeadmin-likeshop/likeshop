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
 * 专业周报异地登录数据。
 *
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getUsername() 获取用户名。
 * @method void setUsername(string $Username) 设置用户名。
 * @method string getSrcIp() 获取源IP。
 * @method void setSrcIp(string $SrcIp) 设置源IP。
 * @method integer getCountry() 获取国家ID。
 * @method void setCountry(integer $Country) 设置国家ID。
 * @method integer getProvince() 获取省份ID。
 * @method void setProvince(integer $Province) 设置省份ID。
 * @method integer getCity() 获取城市ID。
 * @method void setCity(integer $City) 设置城市ID。
 * @method string getLoginTime() 获取登录时间。
 * @method void setLoginTime(string $LoginTime) 设置登录时间。
 */
class WeeklyReportNonlocalLoginPlace extends AbstractModel
{
    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 用户名。
     */
    public $Username;

    /**
     * @var string 源IP。
     */
    public $SrcIp;

    /**
     * @var integer 国家ID。
     */
    public $Country;

    /**
     * @var integer 省份ID。
     */
    public $Province;

    /**
     * @var integer 城市ID。
     */
    public $City;

    /**
     * @var string 登录时间。
     */
    public $LoginTime;

    /**
     * @param string $MachineIp 主机IP。
     * @param string $Username 用户名。
     * @param string $SrcIp 源IP。
     * @param integer $Country 国家ID。
     * @param integer $Province 省份ID。
     * @param integer $City 城市ID。
     * @param string $LoginTime 登录时间。
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

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }
    }
}

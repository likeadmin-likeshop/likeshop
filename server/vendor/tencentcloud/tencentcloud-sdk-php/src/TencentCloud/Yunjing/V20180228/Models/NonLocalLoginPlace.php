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
 * 异地登录
 *
 * @method integer getId() 获取事件ID。
 * @method void setId(integer $Id) 设置事件ID。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getStatus() 获取登录状态
<li>NON_LOCAL_LOGIN：异地登录</li>
<li>NORMAL_LOGIN：正常登录</li>
 * @method void setStatus(string $Status) 设置登录状态
<li>NON_LOCAL_LOGIN：异地登录</li>
<li>NORMAL_LOGIN：正常登录</li>
 * @method string getUserName() 获取用户名。
 * @method void setUserName(string $UserName) 设置用户名。
 * @method integer getCity() 获取城市ID。
 * @method void setCity(integer $City) 设置城市ID。
 * @method integer getCountry() 获取国家ID。
 * @method void setCountry(integer $Country) 设置国家ID。
 * @method integer getProvince() 获取省份ID。
 * @method void setProvince(integer $Province) 设置省份ID。
 * @method string getSrcIp() 获取登录IP。
 * @method void setSrcIp(string $SrcIp) 设置登录IP。
 * @method string getMachineName() 获取机器名称。
 * @method void setMachineName(string $MachineName) 设置机器名称。
 * @method string getLoginTime() 获取登录时间。
 * @method void setLoginTime(string $LoginTime) 设置登录时间。
 * @method string getUuid() 获取云镜客户端唯一标识Uuid。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一标识Uuid。
 */
class NonLocalLoginPlace extends AbstractModel
{
    /**
     * @var integer 事件ID。
     */
    public $Id;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 登录状态
<li>NON_LOCAL_LOGIN：异地登录</li>
<li>NORMAL_LOGIN：正常登录</li>
     */
    public $Status;

    /**
     * @var string 用户名。
     */
    public $UserName;

    /**
     * @var integer 城市ID。
     */
    public $City;

    /**
     * @var integer 国家ID。
     */
    public $Country;

    /**
     * @var integer 省份ID。
     */
    public $Province;

    /**
     * @var string 登录IP。
     */
    public $SrcIp;

    /**
     * @var string 机器名称。
     */
    public $MachineName;

    /**
     * @var string 登录时间。
     */
    public $LoginTime;

    /**
     * @var string 云镜客户端唯一标识Uuid。
     */
    public $Uuid;

    /**
     * @param integer $Id 事件ID。
     * @param string $MachineIp 主机IP。
     * @param string $Status 登录状态
<li>NON_LOCAL_LOGIN：异地登录</li>
<li>NORMAL_LOGIN：正常登录</li>
     * @param string $UserName 用户名。
     * @param integer $City 城市ID。
     * @param integer $Country 国家ID。
     * @param integer $Province 省份ID。
     * @param string $SrcIp 登录IP。
     * @param string $MachineName 机器名称。
     * @param string $LoginTime 登录时间。
     * @param string $Uuid 云镜客户端唯一标识Uuid。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}

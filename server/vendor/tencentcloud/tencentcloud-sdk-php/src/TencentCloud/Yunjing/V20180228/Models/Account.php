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
 * 帐号列表信息数据。
 *
 * @method integer getId() 获取唯一ID。
 * @method void setId(integer $Id) 设置唯一ID。
 * @method string getUuid() 获取云镜客户端唯一Uuid
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一Uuid
 * @method string getMachineIp() 获取主机内网IP。
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP。
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getUsername() 获取帐号名。
 * @method void setUsername(string $Username) 设置帐号名。
 * @method string getGroups() 获取帐号所属组。
 * @method void setGroups(string $Groups) 设置帐号所属组。
 * @method string getPrivilege() 获取帐号类型。
<li>ORDINARY：普通帐号</li>
<li>SUPPER：超级管理员帐号</li>
 * @method void setPrivilege(string $Privilege) 设置帐号类型。
<li>ORDINARY：普通帐号</li>
<li>SUPPER：超级管理员帐号</li>
 * @method string getAccountCreateTime() 获取帐号创建时间。
 * @method void setAccountCreateTime(string $AccountCreateTime) 设置帐号创建时间。
 * @method string getLastLoginTime() 获取帐号最后登录时间。
 * @method void setLastLoginTime(string $LastLoginTime) 设置帐号最后登录时间。
 */
class Account extends AbstractModel
{
    /**
     * @var integer 唯一ID。
     */
    public $Id;

    /**
     * @var string 云镜客户端唯一Uuid
     */
    public $Uuid;

    /**
     * @var string 主机内网IP。
     */
    public $MachineIp;

    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 帐号名。
     */
    public $Username;

    /**
     * @var string 帐号所属组。
     */
    public $Groups;

    /**
     * @var string 帐号类型。
<li>ORDINARY：普通帐号</li>
<li>SUPPER：超级管理员帐号</li>
     */
    public $Privilege;

    /**
     * @var string 帐号创建时间。
     */
    public $AccountCreateTime;

    /**
     * @var string 帐号最后登录时间。
     */
    public $LastLoginTime;

    /**
     * @param integer $Id 唯一ID。
     * @param string $Uuid 云镜客户端唯一Uuid
     * @param string $MachineIp 主机内网IP。
     * @param string $MachineName 主机名称。
     * @param string $Username 帐号名。
     * @param string $Groups 帐号所属组。
     * @param string $Privilege 帐号类型。
<li>ORDINARY：普通帐号</li>
<li>SUPPER：超级管理员帐号</li>
     * @param string $AccountCreateTime 帐号创建时间。
     * @param string $LastLoginTime 帐号最后登录时间。
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("AccountCreateTime",$param) and $param["AccountCreateTime"] !== null) {
            $this->AccountCreateTime = $param["AccountCreateTime"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }
    }
}

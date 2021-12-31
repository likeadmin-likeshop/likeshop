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
 * 账号变更历史数据。
 *
 * @method integer getId() 获取唯一ID。
 * @method void setId(integer $Id) 设置唯一ID。
 * @method string getUuid() 获取云镜客户端唯一Uuid。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一Uuid。
 * @method string getMachineIp() 获取主机内网IP。
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP。
 * @method string getMachineName() 获取主机名。
 * @method void setMachineName(string $MachineName) 设置主机名。
 * @method string getUsername() 获取帐号名。
 * @method void setUsername(string $Username) 设置帐号名。
 * @method string getModifyType() 获取帐号变更类型。
<li>CREATE：表示新增帐号</li>
<li>MODIFY：表示修改帐号</li>
<li>DELETE：表示删除帐号</li>
 * @method void setModifyType(string $ModifyType) 设置帐号变更类型。
<li>CREATE：表示新增帐号</li>
<li>MODIFY：表示修改帐号</li>
<li>DELETE：表示删除帐号</li>
 * @method string getModifyTime() 获取变更时间。
 * @method void setModifyTime(string $ModifyTime) 设置变更时间。
 */
class HistoryAccount extends AbstractModel
{
    /**
     * @var integer 唯一ID。
     */
    public $Id;

    /**
     * @var string 云镜客户端唯一Uuid。
     */
    public $Uuid;

    /**
     * @var string 主机内网IP。
     */
    public $MachineIp;

    /**
     * @var string 主机名。
     */
    public $MachineName;

    /**
     * @var string 帐号名。
     */
    public $Username;

    /**
     * @var string 帐号变更类型。
<li>CREATE：表示新增帐号</li>
<li>MODIFY：表示修改帐号</li>
<li>DELETE：表示删除帐号</li>
     */
    public $ModifyType;

    /**
     * @var string 变更时间。
     */
    public $ModifyTime;

    /**
     * @param integer $Id 唯一ID。
     * @param string $Uuid 云镜客户端唯一Uuid。
     * @param string $MachineIp 主机内网IP。
     * @param string $MachineName 主机名。
     * @param string $Username 帐号名。
     * @param string $ModifyType 帐号变更类型。
<li>CREATE：表示新增帐号</li>
<li>MODIFY：表示修改帐号</li>
<li>DELETE：表示删除帐号</li>
     * @param string $ModifyTime 变更时间。
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

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}

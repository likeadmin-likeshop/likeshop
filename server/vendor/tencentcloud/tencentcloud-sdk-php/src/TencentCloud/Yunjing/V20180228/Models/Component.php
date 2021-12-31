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
 * 组件列表数据。
 *
 * @method integer getId() 获取唯一ID。
 * @method void setId(integer $Id) 设置唯一ID。
 * @method string getUuid() 获取云镜客户端唯一Uuid。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一Uuid。
 * @method string getMachineIp() 获取主机内网IP。
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP。
 * @method string getMachineName() 获取主机名。
 * @method void setMachineName(string $MachineName) 设置主机名。
 * @method string getComponentVersion() 获取组件版本号。
 * @method void setComponentVersion(string $ComponentVersion) 设置组件版本号。
 * @method string getComponentType() 获取组件类型。
<li>SYSTEM：系统组件</li>
<li>WEB：Web组件</li>
 * @method void setComponentType(string $ComponentType) 设置组件类型。
<li>SYSTEM：系统组件</li>
<li>WEB：Web组件</li>
 * @method string getComponentName() 获取组件名称。
 * @method void setComponentName(string $ComponentName) 设置组件名称。
 * @method string getModifyTime() 获取组件检测更新时间。
 * @method void setModifyTime(string $ModifyTime) 设置组件检测更新时间。
 */
class Component extends AbstractModel
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
     * @var string 组件版本号。
     */
    public $ComponentVersion;

    /**
     * @var string 组件类型。
<li>SYSTEM：系统组件</li>
<li>WEB：Web组件</li>
     */
    public $ComponentType;

    /**
     * @var string 组件名称。
     */
    public $ComponentName;

    /**
     * @var string 组件检测更新时间。
     */
    public $ModifyTime;

    /**
     * @param integer $Id 唯一ID。
     * @param string $Uuid 云镜客户端唯一Uuid。
     * @param string $MachineIp 主机内网IP。
     * @param string $MachineName 主机名。
     * @param string $ComponentVersion 组件版本号。
     * @param string $ComponentType 组件类型。
<li>SYSTEM：系统组件</li>
<li>WEB：Web组件</li>
     * @param string $ComponentName 组件名称。
     * @param string $ModifyTime 组件检测更新时间。
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

        if (array_key_exists("ComponentVersion",$param) and $param["ComponentVersion"] !== null) {
            $this->ComponentVersion = $param["ComponentVersion"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}

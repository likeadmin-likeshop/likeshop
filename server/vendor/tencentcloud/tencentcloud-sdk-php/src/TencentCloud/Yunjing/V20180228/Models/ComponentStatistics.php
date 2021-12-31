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
 * 组件统计数据。
 *
 * @method integer getId() 获取组件ID。
 * @method void setId(integer $Id) 设置组件ID。
 * @method integer getMachineNum() 获取主机数量。
 * @method void setMachineNum(integer $MachineNum) 设置主机数量。
 * @method string getComponentName() 获取组件名称。
 * @method void setComponentName(string $ComponentName) 设置组件名称。
 * @method string getComponentType() 获取组件类型。
<li>WEB：Web组件</li>
<li>SYSTEM：系统组件</li>
 * @method void setComponentType(string $ComponentType) 设置组件类型。
<li>WEB：Web组件</li>
<li>SYSTEM：系统组件</li>
 * @method string getDescription() 获取组件描述。
 * @method void setDescription(string $Description) 设置组件描述。
 */
class ComponentStatistics extends AbstractModel
{
    /**
     * @var integer 组件ID。
     */
    public $Id;

    /**
     * @var integer 主机数量。
     */
    public $MachineNum;

    /**
     * @var string 组件名称。
     */
    public $ComponentName;

    /**
     * @var string 组件类型。
<li>WEB：Web组件</li>
<li>SYSTEM：系统组件</li>
     */
    public $ComponentType;

    /**
     * @var string 组件描述。
     */
    public $Description;

    /**
     * @param integer $Id 组件ID。
     * @param integer $MachineNum 主机数量。
     * @param string $ComponentName 组件名称。
     * @param string $ComponentType 组件类型。
<li>WEB：Web组件</li>
<li>SYSTEM：系统组件</li>
     * @param string $Description 组件描述。
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

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

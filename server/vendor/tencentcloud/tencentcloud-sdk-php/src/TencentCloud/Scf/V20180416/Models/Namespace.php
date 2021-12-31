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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间
 *
 * @method string getModTime() 获取命名空间创建时间
 * @method void setModTime(string $ModTime) 设置命名空间创建时间
 * @method string getAddTime() 获取命名空间修改时间
 * @method void setAddTime(string $AddTime) 设置命名空间修改时间
 * @method string getDescription() 获取命名空间描述
 * @method void setDescription(string $Description) 设置命名空间描述
 * @method string getName() 获取命名空间名称
 * @method void setName(string $Name) 设置命名空间名称
 * @method string getType() 获取默认default，TCB表示是小程序云开发创建的
 * @method void setType(string $Type) 设置默认default，TCB表示是小程序云开发创建的
 */
class Namespace extends AbstractModel
{
    /**
     * @var string 命名空间创建时间
     */
    public $ModTime;

    /**
     * @var string 命名空间修改时间
     */
    public $AddTime;

    /**
     * @var string 命名空间描述
     */
    public $Description;

    /**
     * @var string 命名空间名称
     */
    public $Name;

    /**
     * @var string 默认default，TCB表示是小程序云开发创建的
     */
    public $Type;

    /**
     * @param string $ModTime 命名空间创建时间
     * @param string $AddTime 命名空间修改时间
     * @param string $Description 命名空间描述
     * @param string $Name 命名空间名称
     * @param string $Type 默认default，TCB表示是小程序云开发创建的
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

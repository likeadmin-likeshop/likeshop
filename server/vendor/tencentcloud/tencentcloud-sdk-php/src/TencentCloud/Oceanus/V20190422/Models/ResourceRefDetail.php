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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JobConfig引用资源信息
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method integer getVersion() 获取资源版本，-1表示使用最新版本
 * @method void setVersion(integer $Version) 设置资源版本，-1表示使用最新版本
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method integer getType() 获取1: 主资源
 * @method void setType(integer $Type) 设置1: 主资源
 * @method integer getSystemProvide() 获取1: 系统内置资源
 * @method void setSystemProvide(integer $SystemProvide) 设置1: 系统内置资源
 */
class ResourceRefDetail extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var integer 资源版本，-1表示使用最新版本
     */
    public $Version;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var integer 1: 主资源
     */
    public $Type;

    /**
     * @var integer 1: 系统内置资源
     */
    public $SystemProvide;

    /**
     * @param string $ResourceId 资源id
     * @param integer $Version 资源版本，-1表示使用最新版本
     * @param string $Name 资源名称
     * @param integer $Type 1: 主资源
     * @param integer $SystemProvide 1: 系统内置资源
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SystemProvide",$param) and $param["SystemProvide"] !== null) {
            $this->SystemProvide = $param["SystemProvide"];
        }
    }
}

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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRuntime请求参数结构体
 *
 * @method string getName() 获取全局唯一的运行环境名称
 * @method void setName(string $Name) 设置全局唯一的运行环境名称
 * @method string getImage() 获取运行环境镜像地址
 * @method void setImage(string $Image) 设置运行环境镜像地址
 * @method string getFramework() 获取运行环境框架
 * @method void setFramework(string $Framework) 设置运行环境框架
 * @method string getDescription() 获取运行环境描述
 * @method void setDescription(string $Description) 设置运行环境描述
 * @method boolean getHealthCheckOn() 获取是否支持健康检查，默认为False
 * @method void setHealthCheckOn(boolean $HealthCheckOn) 设置是否支持健康检查，默认为False
 */
class CreateRuntimeRequest extends AbstractModel
{
    /**
     * @var string 全局唯一的运行环境名称
     */
    public $Name;

    /**
     * @var string 运行环境镜像地址
     */
    public $Image;

    /**
     * @var string 运行环境框架
     */
    public $Framework;

    /**
     * @var string 运行环境描述
     */
    public $Description;

    /**
     * @var boolean 是否支持健康检查，默认为False
     */
    public $HealthCheckOn;

    /**
     * @param string $Name 全局唯一的运行环境名称
     * @param string $Image 运行环境镜像地址
     * @param string $Framework 运行环境框架
     * @param string $Description 运行环境描述
     * @param boolean $HealthCheckOn 是否支持健康检查，默认为False
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HealthCheckOn",$param) and $param["HealthCheckOn"] !== null) {
            $this->HealthCheckOn = $param["HealthCheckOn"];
        }
    }
}

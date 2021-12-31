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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 常量参数
 *
 * @method string getName() 获取常量参数名称。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method void setName(string $Name) 设置常量参数名称。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method string getDesc() 获取常量参数描述。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method void setDesc(string $Desc) 设置常量参数描述。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method string getPosition() 获取常量参数位置。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method void setPosition(string $Position) 设置常量参数位置。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method string getDefaultValue() 获取常量参数默认值。只有 ServiceType 是 HTTP 才会用到此参数。
 * @method void setDefaultValue(string $DefaultValue) 设置常量参数默认值。只有 ServiceType 是 HTTP 才会用到此参数。
 */
class ConstantParameter extends AbstractModel
{
    /**
     * @var string 常量参数名称。只有 ServiceType 是 HTTP 才会用到此参数。
     */
    public $Name;

    /**
     * @var string 常量参数描述。只有 ServiceType 是 HTTP 才会用到此参数。
     */
    public $Desc;

    /**
     * @var string 常量参数位置。只有 ServiceType 是 HTTP 才会用到此参数。
     */
    public $Position;

    /**
     * @var string 常量参数默认值。只有 ServiceType 是 HTTP 才会用到此参数。
     */
    public $DefaultValue;

    /**
     * @param string $Name 常量参数名称。只有 ServiceType 是 HTTP 才会用到此参数。
     * @param string $Desc 常量参数描述。只有 ServiceType 是 HTTP 才会用到此参数。
     * @param string $Position 常量参数位置。只有 ServiceType 是 HTTP 才会用到此参数。
     * @param string $DefaultValue 常量参数默认值。只有 ServiceType 是 HTTP 才会用到此参数。
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }
    }
}

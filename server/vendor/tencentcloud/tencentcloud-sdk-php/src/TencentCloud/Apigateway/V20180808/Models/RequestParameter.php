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
 * 请求参数
 *
 * @method string getName() 获取请求参数名称
 * @method void setName(string $Name) 设置请求参数名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getPosition() 获取参数位置
 * @method void setPosition(string $Position) 设置参数位置
 * @method string getType() 获取参数类型
 * @method void setType(string $Type) 设置参数类型
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method boolean getRequired() 获取是否必须
 * @method void setRequired(boolean $Required) 设置是否必须
 */
class RequestParameter extends AbstractModel
{
    /**
     * @var string 请求参数名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 参数位置
     */
    public $Position;

    /**
     * @var string 参数类型
     */
    public $Type;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var boolean 是否必须
     */
    public $Required;

    /**
     * @param string $Name 请求参数名称
     * @param string $Desc 描述
     * @param string $Position 参数位置
     * @param string $Type 参数类型
     * @param string $DefaultValue 默认值
     * @param boolean $Required 是否必须
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}

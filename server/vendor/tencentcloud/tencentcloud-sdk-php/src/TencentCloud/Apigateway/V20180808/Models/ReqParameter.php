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
 * @method string getName() 获取API 的前端参数名称。
 * @method void setName(string $Name) 设置API 的前端参数名称。
 * @method string getPosition() 获取API 的前端参数位置，如 header。目前支持 header、query、path。
 * @method void setPosition(string $Position) 设置API 的前端参数位置，如 header。目前支持 header、query、path。
 * @method string getType() 获取API 的前端参数类型，如 String、int。
 * @method void setType(string $Type) 设置API 的前端参数类型，如 String、int。
 * @method string getDefaultValue() 获取API 的前端参数默认值。
 * @method void setDefaultValue(string $DefaultValue) 设置API 的前端参数默认值。
 * @method boolean getRequired() 获取API 的前端参数是否必填，True：表示必填，False：表示可选。
 * @method void setRequired(boolean $Required) 设置API 的前端参数是否必填，True：表示必填，False：表示可选。
 * @method string getDesc() 获取API 的前端参数备注。
 * @method void setDesc(string $Desc) 设置API 的前端参数备注。
 */
class ReqParameter extends AbstractModel
{
    /**
     * @var string API 的前端参数名称。
     */
    public $Name;

    /**
     * @var string API 的前端参数位置，如 header。目前支持 header、query、path。
     */
    public $Position;

    /**
     * @var string API 的前端参数类型，如 String、int。
     */
    public $Type;

    /**
     * @var string API 的前端参数默认值。
     */
    public $DefaultValue;

    /**
     * @var boolean API 的前端参数是否必填，True：表示必填，False：表示可选。
     */
    public $Required;

    /**
     * @var string API 的前端参数备注。
     */
    public $Desc;

    /**
     * @param string $Name API 的前端参数名称。
     * @param string $Position API 的前端参数位置，如 header。目前支持 header、query、path。
     * @param string $Type API 的前端参数类型，如 String、int。
     * @param string $DefaultValue API 的前端参数默认值。
     * @param boolean $Required API 的前端参数是否必填，True：表示必填，False：表示可选。
     * @param string $Desc API 的前端参数备注。
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}

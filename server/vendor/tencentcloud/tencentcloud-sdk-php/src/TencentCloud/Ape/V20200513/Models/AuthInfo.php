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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权人信息
 *
 * @method string getId() 获取主键
 * @method void setId(string $Id) 设置主键
 * @method string getName() 获取授权人名称
 * @method void setName(string $Name) 设置授权人名称
 * @method string getCode() 获取身份证号/社会信用代码
 * @method void setCode(string $Code) 设置身份证号/社会信用代码
 * @method integer getType() 获取授权人类型
 * @method void setType(integer $Type) 设置授权人类型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class AuthInfo extends AbstractModel
{
    /**
     * @var string 主键
     */
    public $Id;

    /**
     * @var string 授权人名称
     */
    public $Name;

    /**
     * @var string 身份证号/社会信用代码
     */
    public $Code;

    /**
     * @var integer 授权人类型
     */
    public $Type;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $Id 主键
     * @param string $Name 授权人名称
     * @param string $Code 身份证号/社会信用代码
     * @param integer $Type 授权人类型
     * @param string $CreateTime 创建时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

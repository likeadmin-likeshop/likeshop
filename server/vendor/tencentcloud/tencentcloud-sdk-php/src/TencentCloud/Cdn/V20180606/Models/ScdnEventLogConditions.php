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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN 事件日志查询条件
 *
 * @method string getKey() 获取匹配关键字，ip, attack_location
 * @method void setKey(string $Key) 设置匹配关键字，ip, attack_location
 * @method string getOperator() 获取逻辑操作符，取值 exclude, include
 * @method void setOperator(string $Operator) 设置逻辑操作符，取值 exclude, include
 * @method string getValue() 获取匹配值，允许使用通配符(*)查询，匹配零个、单个、多个字符，例如 1.2.*
 * @method void setValue(string $Value) 设置匹配值，允许使用通配符(*)查询，匹配零个、单个、多个字符，例如 1.2.*
 */
class ScdnEventLogConditions extends AbstractModel
{
    /**
     * @var string 匹配关键字，ip, attack_location
     */
    public $Key;

    /**
     * @var string 逻辑操作符，取值 exclude, include
     */
    public $Operator;

    /**
     * @var string 匹配值，允许使用通配符(*)查询，匹配零个、单个、多个字符，例如 1.2.*
     */
    public $Value;

    /**
     * @param string $Key 匹配关键字，ip, attack_location
     * @param string $Operator 逻辑操作符，取值 exclude, include
     * @param string $Value 匹配值，允许使用通配符(*)查询，匹配零个、单个、多个字符，例如 1.2.*
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

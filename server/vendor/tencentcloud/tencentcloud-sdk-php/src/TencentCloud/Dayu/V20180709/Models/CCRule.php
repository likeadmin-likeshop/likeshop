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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cc自定义策略配置的规则
 *
 * @method string getSkey() 获取规则的key, 可以为host、cgi、ua、referer
 * @method void setSkey(string $Skey) 设置规则的key, 可以为host、cgi、ua、referer
 * @method string getOperator() 获取规则的条件，可以为include、not_include、equal
 * @method void setOperator(string $Operator) 设置规则的条件，可以为include、not_include、equal
 * @method string getValue() 获取规则的值，长度小于31字节
 * @method void setValue(string $Value) 设置规则的值，长度小于31字节
 */
class CCRule extends AbstractModel
{
    /**
     * @var string 规则的key, 可以为host、cgi、ua、referer
     */
    public $Skey;

    /**
     * @var string 规则的条件，可以为include、not_include、equal
     */
    public $Operator;

    /**
     * @var string 规则的值，长度小于31字节
     */
    public $Value;

    /**
     * @param string $Skey 规则的key, 可以为host、cgi、ua、referer
     * @param string $Operator 规则的条件，可以为include、not_include、equal
     * @param string $Value 规则的值，长度小于31字节
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
        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

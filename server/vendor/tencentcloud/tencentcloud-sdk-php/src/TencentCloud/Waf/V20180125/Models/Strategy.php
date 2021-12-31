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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义规则的匹配条件结构体
 *
 * @method string getField() 获取匹配字段
 * @method void setField(string $Field) 设置匹配字段
 * @method string getCompareFunc() 获取逻辑符号
 * @method void setCompareFunc(string $CompareFunc) 设置逻辑符号
 * @method string getContent() 获取匹配内容
 * @method void setContent(string $Content) 设置匹配内容
 * @method string getArg() 获取匹配参数
 * @method void setArg(string $Arg) 设置匹配参数
 */
class Strategy extends AbstractModel
{
    /**
     * @var string 匹配字段
     */
    public $Field;

    /**
     * @var string 逻辑符号
     */
    public $CompareFunc;

    /**
     * @var string 匹配内容
     */
    public $Content;

    /**
     * @var string 匹配参数
     */
    public $Arg;

    /**
     * @param string $Field 匹配字段
     * @param string $CompareFunc 逻辑符号
     * @param string $Content 匹配内容
     * @param string $Arg 匹配参数
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Arg",$param) and $param["Arg"] !== null) {
            $this->Arg = $param["Arg"];
        }
    }
}

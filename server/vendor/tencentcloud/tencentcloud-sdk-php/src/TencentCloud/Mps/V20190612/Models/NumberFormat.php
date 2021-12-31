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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出文件名的`{number}`变量的规则。
 *
 * @method integer getInitialValue() 获取`{number}`变量的起始值，默认为0。
 * @method void setInitialValue(integer $InitialValue) 设置`{number}`变量的起始值，默认为0。
 * @method integer getIncrement() 获取`{number}`变量的增长步长，默认为1。
 * @method void setIncrement(integer $Increment) 设置`{number}`变量的增长步长，默认为1。
 * @method integer getMinLength() 获取`{number}`变量的最小长度，不足时补占位符。默认为1。
 * @method void setMinLength(integer $MinLength) 设置`{number}`变量的最小长度，不足时补占位符。默认为1。
 * @method string getPlaceHolder() 获取`{number}`变量的长度不足时，补充的占位符。默认为"0"。
 * @method void setPlaceHolder(string $PlaceHolder) 设置`{number}`变量的长度不足时，补充的占位符。默认为"0"。
 */
class NumberFormat extends AbstractModel
{
    /**
     * @var integer `{number}`变量的起始值，默认为0。
     */
    public $InitialValue;

    /**
     * @var integer `{number}`变量的增长步长，默认为1。
     */
    public $Increment;

    /**
     * @var integer `{number}`变量的最小长度，不足时补占位符。默认为1。
     */
    public $MinLength;

    /**
     * @var string `{number}`变量的长度不足时，补充的占位符。默认为"0"。
     */
    public $PlaceHolder;

    /**
     * @param integer $InitialValue `{number}`变量的起始值，默认为0。
     * @param integer $Increment `{number}`变量的增长步长，默认为1。
     * @param integer $MinLength `{number}`变量的最小长度，不足时补占位符。默认为1。
     * @param string $PlaceHolder `{number}`变量的长度不足时，补充的占位符。默认为"0"。
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
        if (array_key_exists("InitialValue",$param) and $param["InitialValue"] !== null) {
            $this->InitialValue = $param["InitialValue"];
        }

        if (array_key_exists("Increment",$param) and $param["Increment"] !== null) {
            $this->Increment = $param["Increment"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("PlaceHolder",$param) and $param["PlaceHolder"] !== null) {
            $this->PlaceHolder = $param["PlaceHolder"];
        }
    }
}

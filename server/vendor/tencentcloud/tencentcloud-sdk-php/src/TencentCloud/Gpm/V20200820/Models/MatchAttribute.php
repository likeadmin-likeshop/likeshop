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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 玩家匹配属性
 *
 * @method string getName() 获取属性名 长度 128 [a-zA-Z0-9-\.]*
 * @method void setName(string $Name) 设置属性名 长度 128 [a-zA-Z0-9-\.]*
 * @method integer getType() 获取属性类型: 0 数值; 1 string; 默认 0
 * @method void setType(integer $Type) 设置属性类型: 0 数值; 1 string; 默认 0
 * @method float getNumberValue() 获取数字属性值 默认 0.0
 * @method void setNumberValue(float $NumberValue) 设置数字属性值 默认 0.0
 * @method string getStringValue() 获取字符串属性值 长度 128 默认 ""
 * @method void setStringValue(string $StringValue) 设置字符串属性值 长度 128 默认 ""
 * @method array getListValue() 获取list 属性值
 * @method void setListValue(array $ListValue) 设置list 属性值
 * @method array getMapValue() 获取字典属性值
 * @method void setMapValue(array $MapValue) 设置字典属性值
 */
class MatchAttribute extends AbstractModel
{
    /**
     * @var string 属性名 长度 128 [a-zA-Z0-9-\.]*
     */
    public $Name;

    /**
     * @var integer 属性类型: 0 数值; 1 string; 默认 0
     */
    public $Type;

    /**
     * @var float 数字属性值 默认 0.0
     */
    public $NumberValue;

    /**
     * @var string 字符串属性值 长度 128 默认 ""
     */
    public $StringValue;

    /**
     * @var array list 属性值
     */
    public $ListValue;

    /**
     * @var array 字典属性值
     */
    public $MapValue;

    /**
     * @param string $Name 属性名 长度 128 [a-zA-Z0-9-\.]*
     * @param integer $Type 属性类型: 0 数值; 1 string; 默认 0
     * @param float $NumberValue 数字属性值 默认 0.0
     * @param string $StringValue 字符串属性值 长度 128 默认 ""
     * @param array $ListValue list 属性值
     * @param array $MapValue 字典属性值
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NumberValue",$param) and $param["NumberValue"] !== null) {
            $this->NumberValue = $param["NumberValue"];
        }

        if (array_key_exists("StringValue",$param) and $param["StringValue"] !== null) {
            $this->StringValue = $param["StringValue"];
        }

        if (array_key_exists("ListValue",$param) and $param["ListValue"] !== null) {
            $this->ListValue = $param["ListValue"];
        }

        if (array_key_exists("MapValue",$param) and $param["MapValue"] !== null) {
            $this->MapValue = [];
            foreach ($param["MapValue"] as $key => $value){
                $obj = new AttributeMap();
                $obj->deserialize($value);
                array_push($this->MapValue, $obj);
            }
        }
    }
}

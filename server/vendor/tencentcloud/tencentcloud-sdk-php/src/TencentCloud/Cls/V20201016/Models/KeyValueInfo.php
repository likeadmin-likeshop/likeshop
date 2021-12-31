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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值或者元字段索引的字段信息
 *
 * @method string getKey() 获取需要配置键值或者元字段索引的字段
 * @method void setKey(string $Key) 设置需要配置键值或者元字段索引的字段
 * @method ValueInfo getValue() 获取字段的索引描述信息
 * @method void setValue(ValueInfo $Value) 设置字段的索引描述信息
 */
class KeyValueInfo extends AbstractModel
{
    /**
     * @var string 需要配置键值或者元字段索引的字段
     */
    public $Key;

    /**
     * @var ValueInfo 字段的索引描述信息
     */
    public $Value;

    /**
     * @param string $Key 需要配置键值或者元字段索引的字段
     * @param ValueInfo $Value 字段的索引描述信息
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ValueInfo();
            $this->Value->deserialize($param["Value"]);
        }
    }
}

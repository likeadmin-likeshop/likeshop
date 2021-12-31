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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户属性对象
 *
 * @method string getAttributeName() 获取属性名
 * @method void setAttributeName(string $AttributeName) 设置属性名
 * @method array getAttributeValues() 获取属性值
 * @method void setAttributeValues(array $AttributeValues) 设置属性值
 */
class AccountAttribute extends AbstractModel
{
    /**
     * @var string 属性名
     */
    public $AttributeName;

    /**
     * @var array 属性值
     */
    public $AttributeValues;

    /**
     * @param string $AttributeName 属性名
     * @param array $AttributeValues 属性值
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
        if (array_key_exists("AttributeName",$param) and $param["AttributeName"] !== null) {
            $this->AttributeName = $param["AttributeName"];
        }

        if (array_key_exists("AttributeValues",$param) and $param["AttributeValues"] !== null) {
            $this->AttributeValues = $param["AttributeValues"];
        }
    }
}

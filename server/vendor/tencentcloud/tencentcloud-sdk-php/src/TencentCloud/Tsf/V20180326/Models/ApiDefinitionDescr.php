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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 对象类型描述
 *
 * @method string getName() 获取对象名称
 * @method void setName(string $Name) 设置对象名称
 * @method array getProperties() 获取对象属性列表
 * @method void setProperties(array $Properties) 设置对象属性列表
 */
class ApiDefinitionDescr extends AbstractModel
{
    /**
     * @var string 对象名称
     */
    public $Name;

    /**
     * @var array 对象属性列表
     */
    public $Properties;

    /**
     * @param string $Name 对象名称
     * @param array $Properties 对象属性列表
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

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new PropertyField();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}

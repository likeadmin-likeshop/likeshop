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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直方图数据结构
 *
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method array getChildren() 获取项目值
 * @method void setChildren(array $Children) 设置项目值
 */
class ChartHistogram extends AbstractModel
{
    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var array 项目值
     */
    public $Children;

    /**
     * @param string $Name 项目名
     * @param array $Children 项目值
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

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new ChartNameValue();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}

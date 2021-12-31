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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模版过滤类型
 *
 * @method string getName() 获取过滤器名字
 * @method void setName(string $Name) 设置过滤器名字
 * @method array getValues() 获取过滤器值的数组
 * @method void setValues(array $Values) 设置过滤器值的数组
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤器名字
     */
    public $Name;

    /**
     * @var array 过滤器值的数组
     */
    public $Values;

    /**
     * @param string $Name 过滤器名字
     * @param array $Values 过滤器值的数组
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

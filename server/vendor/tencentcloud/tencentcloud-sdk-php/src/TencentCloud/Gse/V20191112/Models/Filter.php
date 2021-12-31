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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤字段内容
 *
 * @method string getKey() 获取过滤属性的 key
 * @method void setKey(string $Key) 设置过滤属性的 key
 * @method array getValues() 获取过滤属性的 values 值
 * @method void setValues(array $Values) 设置过滤属性的 values 值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤属性的 key
     */
    public $Key;

    /**
     * @var array 过滤属性的 values 值
     */
    public $Values;

    /**
     * @param string $Key 过滤属性的 key
     * @param array $Values 过滤属性的 values 值
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

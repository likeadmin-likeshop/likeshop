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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索关键词
 *
 * @method string getKey() 获取搜索条件的Key
 * @method void setKey(string $Key) 设置搜索条件的Key
 * @method string getValue() 获取搜索条件的值
 * @method void setValue(string $Value) 设置搜索条件的值
 */
class SearchKeyword extends AbstractModel
{
    /**
     * @var string 搜索条件的Key
     */
    public $Key;

    /**
     * @var string 搜索条件的值
     */
    public $Value;

    /**
     * @param string $Key 搜索条件的Key
     * @param string $Value 搜索条件的值
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
            $this->Value = $param["Value"];
        }
    }
}

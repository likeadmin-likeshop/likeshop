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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索字段
 *
 * @method string getSearchType() 获取支持搜索的类型
 * @method void setSearchType(string $SearchType) 设置支持搜索的类型
 * @method string getSearchValue() 获取支持搜索的值
 * @method void setSearchValue(string $SearchValue) 设置支持搜索的值
 */
class SearchItem extends AbstractModel
{
    /**
     * @var string 支持搜索的类型
     */
    public $SearchType;

    /**
     * @var string 支持搜索的值
     */
    public $SearchValue;

    /**
     * @param string $SearchType 支持搜索的类型
     * @param string $SearchValue 支持搜索的值
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
        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}

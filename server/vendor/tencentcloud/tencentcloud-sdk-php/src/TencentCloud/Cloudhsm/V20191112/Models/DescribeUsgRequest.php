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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsg请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
 * @method void setOffset(integer $Offset) 设置偏移量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
 * @method integer getLimit() 获取返回量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
 * @method void setLimit(integer $Limit) 设置返回量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 */
class DescribeUsgRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
     */
    public $Offset;

    /**
     * @var integer 返回量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
     */
    public $Limit;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @param integer $Offset 偏移量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
     * @param integer $Limit 返回量，当Offset和Limit均为0时将一次性返回用户所有的安全组列表。
     * @param string $SearchWord 搜索关键字
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}

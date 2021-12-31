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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchKTVMusics请求参数结构体
 *
 * @method string getKeyWord() 获取搜索关键词
 * @method void setKeyWord(string $KeyWord) 设置搜索关键词
 * @method integer getOffset() 获取分页游标
 * @method void setOffset(integer $Offset) 设置分页游标
 * @method integer getLimit() 获取分页页长
 * @method void setLimit(integer $Limit) 设置分页页长
 */
class SearchKTVMusicsRequest extends AbstractModel
{
    /**
     * @var string 搜索关键词
     */
    public $KeyWord;

    /**
     * @var integer 分页游标
     */
    public $Offset;

    /**
     * @var integer 分页页长
     */
    public $Limit;

    /**
     * @param string $KeyWord 搜索关键词
     * @param integer $Offset 分页游标
     * @param integer $Limit 分页页长
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
        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

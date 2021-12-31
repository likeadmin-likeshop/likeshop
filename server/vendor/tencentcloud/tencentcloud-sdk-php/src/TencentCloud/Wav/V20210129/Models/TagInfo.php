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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签信息
 *
 * @method string getTagName() 获取标签名称, 最大长度限制15个字符
 * @method void setTagName(string $TagName) 设置标签名称, 最大长度限制15个字符
 * @method integer getSort() 获取标签组排序,值越大,排序越靠前
 * @method void setSort(integer $Sort) 设置标签组排序,值越大,排序越靠前
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string 标签名称, 最大长度限制15个字符
     */
    public $TagName;

    /**
     * @var integer 标签组排序,值越大,排序越靠前
     */
    public $Sort;

    /**
     * @param string $TagName 标签名称, 最大长度限制15个字符
     * @param integer $Sort 标签组排序,值越大,排序越靠前
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}

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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDicts请求参数结构体
 *
 * @method integer getLimit() 获取每页数据量，范围为1~100，默认为10。
 * @method void setLimit(integer $Limit) 设置每页数据量，范围为1~100，默认为10。
 * @method integer getOffset() 获取分页偏移量，从0开始，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始，默认为0。
 */
class DescribeDictsRequest extends AbstractModel
{
    /**
     * @var integer 每页数据量，范围为1~100，默认为10。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，从0开始，默认为0。
     */
    public $Offset;

    /**
     * @param integer $Limit 每页数据量，范围为1~100，默认为10。
     * @param integer $Offset 分页偏移量，从0开始，默认为0。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

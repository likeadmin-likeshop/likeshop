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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePerson请求参数结构体
 *
 * @method string getMallId() 获取卖场编码
 * @method void setMallId(string $MallId) 设置卖场编码
 * @method integer getOffset() 获取查询偏移
 * @method void setOffset(integer $Offset) 设置查询偏移
 * @method integer getLimit() 获取查询数量，默认20，最大查询数量100
 * @method void setLimit(integer $Limit) 设置查询数量，默认20，最大查询数量100
 */
class DescribePersonRequest extends AbstractModel
{
    /**
     * @var string 卖场编码
     */
    public $MallId;

    /**
     * @var integer 查询偏移
     */
    public $Offset;

    /**
     * @var integer 查询数量，默认20，最大查询数量100
     */
    public $Limit;

    /**
     * @param string $MallId 卖场编码
     * @param integer $Offset 查询偏移
     * @param integer $Limit 查询数量，默认20，最大查询数量100
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
        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

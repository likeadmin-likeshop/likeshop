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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupList请求参数结构体
 *
 * @method integer getDirection() 获取0: 出站规则，1：入站规则
 * @method void setDirection(integer $Direction) 设置0: 出站规则，1：入站规则
 * @method string getArea() 获取地域代码（例: ap-guangzhou),支持腾讯云全部地域
 * @method void setArea(string $Area) 设置地域代码（例: ap-guangzhou),支持腾讯云全部地域
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 * @method integer getLimit() 获取每页条数，默认为10
 * @method void setLimit(integer $Limit) 设置每页条数，默认为10
 * @method integer getOffset() 获取偏移值，默认为0
 * @method void setOffset(integer $Offset) 设置偏移值，默认为0
 * @method string getStatus() 获取状态，'': 全部，'0'：筛选停用规则，'1'：筛选启用规则
 * @method void setStatus(string $Status) 设置状态，'': 全部，'0'：筛选停用规则，'1'：筛选启用规则
 * @method integer getFilter() 获取0: 不过滤，1：过滤掉正常规则，保留下发异常规则
 * @method void setFilter(integer $Filter) 设置0: 不过滤，1：过滤掉正常规则，保留下发异常规则
 */
class DescribeSecurityGroupListRequest extends AbstractModel
{
    /**
     * @var integer 0: 出站规则，1：入站规则
     */
    public $Direction;

    /**
     * @var string 地域代码（例: ap-guangzhou),支持腾讯云全部地域
     */
    public $Area;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @var integer 每页条数，默认为10
     */
    public $Limit;

    /**
     * @var integer 偏移值，默认为0
     */
    public $Offset;

    /**
     * @var string 状态，'': 全部，'0'：筛选停用规则，'1'：筛选启用规则
     */
    public $Status;

    /**
     * @var integer 0: 不过滤，1：过滤掉正常规则，保留下发异常规则
     */
    public $Filter;

    /**
     * @param integer $Direction 0: 出站规则，1：入站规则
     * @param string $Area 地域代码（例: ap-guangzhou),支持腾讯云全部地域
     * @param string $SearchValue 搜索值
     * @param integer $Limit 每页条数，默认为10
     * @param integer $Offset 偏移值，默认为0
     * @param string $Status 状态，'': 全部，'0'：筛选停用规则，'1'：筛选启用规则
     * @param integer $Filter 0: 不过滤，1：过滤掉正常规则，保留下发异常规则
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}

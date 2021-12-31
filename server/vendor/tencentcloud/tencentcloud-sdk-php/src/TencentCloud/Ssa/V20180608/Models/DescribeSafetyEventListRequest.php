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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSafetyEventList请求参数结构体
 *
 * @method string getFilter() 获取搜索过滤查询参数
 * @method void setFilter(string $Filter) 设置搜索过滤查询参数
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method integer getOffset() 获取页偏移
 * @method void setOffset(integer $Offset) 设置页偏移
 * @method string getOrder() 获取排序列名
 * @method void setOrder(string $Order) 设置排序列名
 * @method string getBy() 获取排序升降：desc-降序 asc-升序
 * @method void setBy(string $By) 设置排序升降：desc-降序 asc-升序
 * @method string getStartTime() 获取开始查询时间
 * @method void setStartTime(string $StartTime) 设置开始查询时间
 * @method string getEndTime() 获取结束查询时间
 * @method void setEndTime(string $EndTime) 设置结束查询时间
 * @method boolean getIsFilterResponseTime() 获取是否过滤响应时间
 * @method void setIsFilterResponseTime(boolean $IsFilterResponseTime) 设置是否过滤响应时间
 */
class DescribeSafetyEventListRequest extends AbstractModel
{
    /**
     * @var string 搜索过滤查询参数
     */
    public $Filter;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var integer 页偏移
     */
    public $Offset;

    /**
     * @var string 排序列名
     */
    public $Order;

    /**
     * @var string 排序升降：desc-降序 asc-升序
     */
    public $By;

    /**
     * @var string 开始查询时间
     */
    public $StartTime;

    /**
     * @var string 结束查询时间
     */
    public $EndTime;

    /**
     * @var boolean 是否过滤响应时间
     */
    public $IsFilterResponseTime;

    /**
     * @param string $Filter 搜索过滤查询参数
     * @param integer $Limit 限制数目
     * @param integer $Offset 页偏移
     * @param string $Order 排序列名
     * @param string $By 排序升降：desc-降序 asc-升序
     * @param string $StartTime 开始查询时间
     * @param string $EndTime 结束查询时间
     * @param boolean $IsFilterResponseTime 是否过滤响应时间
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsFilterResponseTime",$param) and $param["IsFilterResponseTime"] !== null) {
            $this->IsFilterResponseTime = $param["IsFilterResponseTime"];
        }
    }
}

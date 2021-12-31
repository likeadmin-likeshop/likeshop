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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRequestData请求参数结构体
 *
 * @method string getTimeRangeBegin() 获取请求量统计起始时间，格式：2020-11-22 00:00:00
 * @method void setTimeRangeBegin(string $TimeRangeBegin) 设置请求量统计起始时间，格式：2020-11-22 00:00:00
 * @method array getFilters() 获取筛选参数：
 * @method void setFilters(array $Filters) 设置筛选参数：
 * @method string getTimeRangeEnd() 获取请求量统计结束时间，格式：2020-11-22 23:59:59
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置请求量统计结束时间，格式：2020-11-22 23:59:59
 */
class DescribeRequestDataRequest extends AbstractModel
{
    /**
     * @var string 请求量统计起始时间，格式：2020-11-22 00:00:00
     */
    public $TimeRangeBegin;

    /**
     * @var array 筛选参数：
     */
    public $Filters;

    /**
     * @var string 请求量统计结束时间，格式：2020-11-22 23:59:59
     */
    public $TimeRangeEnd;

    /**
     * @param string $TimeRangeBegin 请求量统计起始时间，格式：2020-11-22 00:00:00
     * @param array $Filters 筛选参数：
     * @param string $TimeRangeEnd 请求量统计结束时间，格式：2020-11-22 23:59:59
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
        if (array_key_exists("TimeRangeBegin",$param) and $param["TimeRangeBegin"] !== null) {
            $this->TimeRangeBegin = $param["TimeRangeBegin"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }
    }
}

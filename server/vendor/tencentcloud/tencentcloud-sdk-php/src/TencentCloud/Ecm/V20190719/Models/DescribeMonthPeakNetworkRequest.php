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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonthPeakNetwork请求参数结构体
 *
 * @method string getMonth() 获取月份时间(xxxx-xx) 如2021-03,默认取当前时间的上一个月份
 * @method void setMonth(string $Month) 设置月份时间(xxxx-xx) 如2021-03,默认取当前时间的上一个月份
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 */
class DescribeMonthPeakNetworkRequest extends AbstractModel
{
    /**
     * @var string 月份时间(xxxx-xx) 如2021-03,默认取当前时间的上一个月份
     */
    public $Month;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @param string $Month 月份时间(xxxx-xx) 如2021-03,默认取当前时间的上一个月份
     * @param array $Filters 过滤条件
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

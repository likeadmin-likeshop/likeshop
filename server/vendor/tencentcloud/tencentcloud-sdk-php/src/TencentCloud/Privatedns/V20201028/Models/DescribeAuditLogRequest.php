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
 * DescribeAuditLog请求参数结构体
 *
 * @method string getTimeRangeBegin() 获取请求量统计起始时间
 * @method void setTimeRangeBegin(string $TimeRangeBegin) 设置请求量统计起始时间
 * @method array getFilters() 获取筛选参数：ZoneId：私有域ID；Domain：私有域；OperatorUin：操作者账号ID
 * @method void setFilters(array $Filters) 设置筛选参数：ZoneId：私有域ID；Domain：私有域；OperatorUin：操作者账号ID
 * @method string getTimeRangeEnd() 获取请求量统计结束时间
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置请求量统计结束时间
 * @method integer getOffset() 获取分页偏移量，从0开始
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始
 * @method integer getLimit() 获取分页限制数目， 最大100，默认20
 * @method void setLimit(integer $Limit) 设置分页限制数目， 最大100，默认20
 */
class DescribeAuditLogRequest extends AbstractModel
{
    /**
     * @var string 请求量统计起始时间
     */
    public $TimeRangeBegin;

    /**
     * @var array 筛选参数：ZoneId：私有域ID；Domain：私有域；OperatorUin：操作者账号ID
     */
    public $Filters;

    /**
     * @var string 请求量统计结束时间
     */
    public $TimeRangeEnd;

    /**
     * @var integer 分页偏移量，从0开始
     */
    public $Offset;

    /**
     * @var integer 分页限制数目， 最大100，默认20
     */
    public $Limit;

    /**
     * @param string $TimeRangeBegin 请求量统计起始时间
     * @param array $Filters 筛选参数：ZoneId：私有域ID；Domain：私有域；OperatorUin：操作者账号ID
     * @param string $TimeRangeEnd 请求量统计结束时间
     * @param integer $Offset 分页偏移量，从0开始
     * @param integer $Limit 分页限制数目， 最大100，默认20
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

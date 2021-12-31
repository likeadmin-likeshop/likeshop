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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method integer getLimit() 获取每页展示多少条。（默认展示10条）
 * @method void setLimit(integer $Limit) 设置每页展示多少条。（默认展示10条）
 * @method TaskFilter getFilter() 获取过滤参数
 * @method void setFilter(TaskFilter $Filter) 设置过滤参数
 * @method string getPageToken() 获取翻页token，在向前或向后翻页时需要
 * @method void setPageToken(string $PageToken) 设置翻页token，在向前或向后翻页时需要
 * @method string getStartTime() 获取开始时间。默认是最近3天。
 * @method void setStartTime(string $StartTime) 设置开始时间。默认是最近3天。
 * @method string getEndTime() 获取结束时间。默认为空
 * @method void setEndTime(string $EndTime) 设置结束时间。默认为空
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer 每页展示多少条。（默认展示10条）
     */
    public $Limit;

    /**
     * @var TaskFilter 过滤参数
     */
    public $Filter;

    /**
     * @var string 翻页token，在向前或向后翻页时需要
     */
    public $PageToken;

    /**
     * @var string 开始时间。默认是最近3天。
     */
    public $StartTime;

    /**
     * @var string 结束时间。默认为空
     */
    public $EndTime;

    /**
     * @param integer $Limit 每页展示多少条。（默认展示10条）
     * @param TaskFilter $Filter 过滤参数
     * @param string $PageToken 翻页token，在向前或向后翻页时需要
     * @param string $StartTime 开始时间。默认是最近3天。
     * @param string $EndTime 结束时间。默认为空
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new TaskFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

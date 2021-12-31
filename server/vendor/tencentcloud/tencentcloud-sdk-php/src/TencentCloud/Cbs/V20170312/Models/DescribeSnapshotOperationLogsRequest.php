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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotOperationLogs请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。支持以下条件：
<li>snapshot-id - Array of String - 是否必填：是 - 按快照ID过滤，每个请求最多可指定10个快照ID。
 * @method void setFilters(array $Filters) 设置过滤条件。支持以下条件：
<li>snapshot-id - Array of String - 是否必填：是 - 按快照ID过滤，每个请求最多可指定10个快照ID。
 * @method string getBeginTime() 获取要查询的操作日志的起始时间，例如：“2019-11-22 00:00:00"
 * @method void setBeginTime(string $BeginTime) 设置要查询的操作日志的起始时间，例如：“2019-11-22 00:00:00"
 * @method string getEndTime() 获取要查询的操作日志的截止时间，例如：“2019-11-22 23:59:59"
 * @method void setEndTime(string $EndTime) 设置要查询的操作日志的截止时间，例如：“2019-11-22 23:59:59"
 */
class DescribeSnapshotOperationLogsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。支持以下条件：
<li>snapshot-id - Array of String - 是否必填：是 - 按快照ID过滤，每个请求最多可指定10个快照ID。
     */
    public $Filters;

    /**
     * @var string 要查询的操作日志的起始时间，例如：“2019-11-22 00:00:00"
     */
    public $BeginTime;

    /**
     * @var string 要查询的操作日志的截止时间，例如：“2019-11-22 23:59:59"
     */
    public $EndTime;

    /**
     * @param array $Filters 过滤条件。支持以下条件：
<li>snapshot-id - Array of String - 是否必填：是 - 按快照ID过滤，每个请求最多可指定10个快照ID。
     * @param string $BeginTime 要查询的操作日志的起始时间，例如：“2019-11-22 00:00:00"
     * @param string $EndTime 要查询的操作日志的截止时间，例如：“2019-11-22 23:59:59"
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

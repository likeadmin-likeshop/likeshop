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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceLogs请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method integer getLogType() 获取日志类型，默认值为1
<li>1, 主日志</li>
<li>2, 搜索慢日志</li>
<li>3, 索引慢日志</li>
<li>4, GC日志</li>
 * @method void setLogType(integer $LogType) 设置日志类型，默认值为1
<li>1, 主日志</li>
<li>2, 搜索慢日志</li>
<li>3, 索引慢日志</li>
<li>4, GC日志</li>
 * @method string getSearchKey() 获取搜索词，支持LUCENE语法，如 level:WARN、ip:1.1.1.1、message:test-index等
 * @method void setSearchKey(string $SearchKey) 设置搜索词，支持LUCENE语法，如 level:WARN、ip:1.1.1.1、message:test-index等
 * @method string getStartTime() 获取日志开始时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
 * @method void setStartTime(string $StartTime) 设置日志开始时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
 * @method string getEndTime() 获取日志结束时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
 * @method void setEndTime(string $EndTime) 设置日志结束时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
 * @method integer getOffset() 获取分页起始值, 默认值为0
 * @method void setOffset(integer $Offset) 设置分页起始值, 默认值为0
 * @method integer getLimit() 获取分页大小，默认值为100，最大值100
 * @method void setLimit(integer $Limit) 设置分页大小，默认值为100，最大值100
 * @method integer getOrderByType() 获取时间排序方式，默认值为0
<li>0, 降序</li>
<li>1, 升序</li>
 * @method void setOrderByType(integer $OrderByType) 设置时间排序方式，默认值为0
<li>0, 降序</li>
<li>1, 升序</li>
 */
class DescribeInstanceLogsRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var integer 日志类型，默认值为1
<li>1, 主日志</li>
<li>2, 搜索慢日志</li>
<li>3, 索引慢日志</li>
<li>4, GC日志</li>
     */
    public $LogType;

    /**
     * @var string 搜索词，支持LUCENE语法，如 level:WARN、ip:1.1.1.1、message:test-index等
     */
    public $SearchKey;

    /**
     * @var string 日志开始时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
     */
    public $StartTime;

    /**
     * @var string 日志结束时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
     */
    public $EndTime;

    /**
     * @var integer 分页起始值, 默认值为0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认值为100，最大值100
     */
    public $Limit;

    /**
     * @var integer 时间排序方式，默认值为0
<li>0, 降序</li>
<li>1, 升序</li>
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 集群实例ID
     * @param integer $LogType 日志类型，默认值为1
<li>1, 主日志</li>
<li>2, 搜索慢日志</li>
<li>3, 索引慢日志</li>
<li>4, GC日志</li>
     * @param string $SearchKey 搜索词，支持LUCENE语法，如 level:WARN、ip:1.1.1.1、message:test-index等
     * @param string $StartTime 日志开始时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
     * @param string $EndTime 日志结束时间，格式为YYYY-MM-DD HH:MM:SS, 如2019-01-22 20:15:53
     * @param integer $Offset 分页起始值, 默认值为0
     * @param integer $Limit 分页大小，默认值为100，最大值100
     * @param integer $OrderByType 时间排序方式，默认值为0
<li>0, 降序</li>
<li>1, 升序</li>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}

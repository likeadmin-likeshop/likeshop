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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogData请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getStartTime() 获取开始时间戳。
 * @method void setStartTime(integer $StartTime) 设置开始时间戳。
 * @method integer getEndTime() 获取结束时间戳。
 * @method void setEndTime(integer $EndTime) 设置结束时间戳。
 * @method array getUserHosts() 获取客户端 Host 列表。
 * @method void setUserHosts(array $UserHosts) 设置客户端 Host 列表。
 * @method array getUserNames() 获取客户端 用户名 列表。
 * @method void setUserNames(array $UserNames) 设置客户端 用户名 列表。
 * @method array getDataBases() 获取访问的 数据库 列表。
 * @method void setDataBases(array $DataBases) 设置访问的 数据库 列表。
 * @method string getSortBy() 获取排序字段。当前支持：Timestamp,QueryTime,LockTime,RowsExamined,RowsSent 。
 * @method void setSortBy(string $SortBy) 设置排序字段。当前支持：Timestamp,QueryTime,LockTime,RowsExamined,RowsSent 。
 * @method string getOrderBy() 获取升序还是降序排列。当前支持：ASC,DESC 。
 * @method void setOrderBy(string $OrderBy) 设置升序还是降序排列。当前支持：ASC,DESC 。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取一次性返回的记录数量，默认为100，最大为400。
 * @method void setLimit(integer $Limit) 设置一次性返回的记录数量，默认为100，最大为400。
 * @method string getInstType() 获取仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
 * @method void setInstType(string $InstType) 设置仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
 */
class DescribeSlowLogDataRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 开始时间戳。
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳。
     */
    public $EndTime;

    /**
     * @var array 客户端 Host 列表。
     */
    public $UserHosts;

    /**
     * @var array 客户端 用户名 列表。
     */
    public $UserNames;

    /**
     * @var array 访问的 数据库 列表。
     */
    public $DataBases;

    /**
     * @var string 排序字段。当前支持：Timestamp,QueryTime,LockTime,RowsExamined,RowsSent 。
     */
    public $SortBy;

    /**
     * @var string 升序还是降序排列。当前支持：ASC,DESC 。
     */
    public $OrderBy;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 一次性返回的记录数量，默认为100，最大为400。
     */
    public $Limit;

    /**
     * @var string 仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
     */
    public $InstType;

    /**
     * @param string $InstanceId 实例 ID。
     * @param integer $StartTime 开始时间戳。
     * @param integer $EndTime 结束时间戳。
     * @param array $UserHosts 客户端 Host 列表。
     * @param array $UserNames 客户端 用户名 列表。
     * @param array $DataBases 访问的 数据库 列表。
     * @param string $SortBy 排序字段。当前支持：Timestamp,QueryTime,LockTime,RowsExamined,RowsSent 。
     * @param string $OrderBy 升序还是降序排列。当前支持：ASC,DESC 。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 一次性返回的记录数量，默认为100，最大为400。
     * @param string $InstType 仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserHosts",$param) and $param["UserHosts"] !== null) {
            $this->UserHosts = $param["UserHosts"];
        }

        if (array_key_exists("UserNames",$param) and $param["UserNames"] !== null) {
            $this->UserNames = $param["UserNames"];
        }

        if (array_key_exists("DataBases",$param) and $param["DataBases"] !== null) {
            $this->DataBases = $param["DataBases"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstType",$param) and $param["InstType"] !== null) {
            $this->InstType = $param["InstType"];
        }
    }
}

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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method string getBackupName() 获取备份文件名，用来过滤指定文件的下载任务
 * @method void setBackupName(string $BackupName) 设置备份文件名，用来过滤指定文件的下载任务
 * @method string getStartTime() 获取指定要查询任务的时间范围，StartTime指定开始时间，不填默认不限制开始时间
 * @method void setStartTime(string $StartTime) 设置指定要查询任务的时间范围，StartTime指定开始时间，不填默认不限制开始时间
 * @method string getEndTime() 获取指定要查询任务的时间范围，EndTime指定结束时间，不填默认不限制结束时间
 * @method void setEndTime(string $EndTime) 设置指定要查询任务的时间范围，EndTime指定结束时间，不填默认不限制结束时间
 * @method integer getLimit() 获取此次查询返回的条数，取值范围为1-100，默认为20
 * @method void setLimit(integer $Limit) 设置此次查询返回的条数，取值范围为1-100，默认为20
 * @method integer getOffset() 获取指定此次查询返回的页数，默认为0
 * @method void setOffset(integer $Offset) 设置指定此次查询返回的页数，默认为0
 * @method string getOrderBy() 获取排序字段，取值为createTime，finishTime两种，默认为createTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，取值为createTime，finishTime两种，默认为createTime
 * @method string getOrderByType() 获取排序方式，取值为asc，desc两种，默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，取值为asc，desc两种，默认desc
 * @method array getStatus() 获取根据任务状态过滤。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试。不填默认返回所有类型
 * @method void setStatus(array $Status) 设置根据任务状态过滤。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试。不填默认返回所有类型
 */
class DescribeBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var string 备份文件名，用来过滤指定文件的下载任务
     */
    public $BackupName;

    /**
     * @var string 指定要查询任务的时间范围，StartTime指定开始时间，不填默认不限制开始时间
     */
    public $StartTime;

    /**
     * @var string 指定要查询任务的时间范围，EndTime指定结束时间，不填默认不限制结束时间
     */
    public $EndTime;

    /**
     * @var integer 此次查询返回的条数，取值范围为1-100，默认为20
     */
    public $Limit;

    /**
     * @var integer 指定此次查询返回的页数，默认为0
     */
    public $Offset;

    /**
     * @var string 排序字段，取值为createTime，finishTime两种，默认为createTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，取值为asc，desc两种，默认desc
     */
    public $OrderByType;

    /**
     * @var array 根据任务状态过滤。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试。不填默认返回所有类型
     */
    public $Status;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     * @param string $BackupName 备份文件名，用来过滤指定文件的下载任务
     * @param string $StartTime 指定要查询任务的时间范围，StartTime指定开始时间，不填默认不限制开始时间
     * @param string $EndTime 指定要查询任务的时间范围，EndTime指定结束时间，不填默认不限制结束时间
     * @param integer $Limit 此次查询返回的条数，取值范围为1-100，默认为20
     * @param integer $Offset 指定此次查询返回的页数，默认为0
     * @param string $OrderBy 排序字段，取值为createTime，finishTime两种，默认为createTime
     * @param string $OrderByType 排序方式，取值为asc，desc两种，默认desc
     * @param array $Status 根据任务状态过滤。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试。不填默认返回所有类型
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmsByTask请求参数结构体
 *
 * @method integer getTaskId() 获取拨测任务Id
 * @method void setTaskId(integer $TaskId) 设置拨测任务Id
 * @method integer getOffset() 获取从第Offset 条开始查询。缺省值为0
 * @method void setOffset(integer $Offset) 设置从第Offset 条开始查询。缺省值为0
 * @method integer getLimit() 获取本批次查询Limit 条记录。缺省值为20
 * @method void setLimit(integer $Limit) 设置本批次查询Limit 条记录。缺省值为20
 * @method integer getStatus() 获取0 全部, 1 已恢复, 2 未恢复  默认为0。其他值，视为0 查全部状态
 * @method void setStatus(integer $Status) 设置0 全部, 1 已恢复, 2 未恢复  默认为0。其他值，视为0 查全部状态
 * @method string getBeginTime() 获取格式如：2017-05-09 00:00:00  缺省为7天前0点
 * @method void setBeginTime(string $BeginTime) 设置格式如：2017-05-09 00:00:00  缺省为7天前0点
 * @method string getEndTime() 获取格式如：2017-05-10 00:00:00  缺省为明天0点
 * @method void setEndTime(string $EndTime) 设置格式如：2017-05-10 00:00:00  缺省为明天0点
 * @method string getSortBy() 获取排序字段，可为Time, ObjName, Duration, Status, Content 之一。缺省为Time
 * @method void setSortBy(string $SortBy) 设置排序字段，可为Time, ObjName, Duration, Status, Content 之一。缺省为Time
 * @method string getSortType() 获取升序或降序。可为Desc, Asc之一。缺省为Desc
 * @method void setSortType(string $SortType) 设置升序或降序。可为Desc, Asc之一。缺省为Desc
 * @method string getObjName() 获取告警对象的名称
 * @method void setObjName(string $ObjName) 设置告警对象的名称
 */
class DescribeAlarmsByTaskRequest extends AbstractModel
{
    /**
     * @var integer 拨测任务Id
     */
    public $TaskId;

    /**
     * @var integer 从第Offset 条开始查询。缺省值为0
     */
    public $Offset;

    /**
     * @var integer 本批次查询Limit 条记录。缺省值为20
     */
    public $Limit;

    /**
     * @var integer 0 全部, 1 已恢复, 2 未恢复  默认为0。其他值，视为0 查全部状态
     */
    public $Status;

    /**
     * @var string 格式如：2017-05-09 00:00:00  缺省为7天前0点
     */
    public $BeginTime;

    /**
     * @var string 格式如：2017-05-10 00:00:00  缺省为明天0点
     */
    public $EndTime;

    /**
     * @var string 排序字段，可为Time, ObjName, Duration, Status, Content 之一。缺省为Time
     */
    public $SortBy;

    /**
     * @var string 升序或降序。可为Desc, Asc之一。缺省为Desc
     */
    public $SortType;

    /**
     * @var string 告警对象的名称
     */
    public $ObjName;

    /**
     * @param integer $TaskId 拨测任务Id
     * @param integer $Offset 从第Offset 条开始查询。缺省值为0
     * @param integer $Limit 本批次查询Limit 条记录。缺省值为20
     * @param integer $Status 0 全部, 1 已恢复, 2 未恢复  默认为0。其他值，视为0 查全部状态
     * @param string $BeginTime 格式如：2017-05-09 00:00:00  缺省为7天前0点
     * @param string $EndTime 格式如：2017-05-10 00:00:00  缺省为明天0点
     * @param string $SortBy 排序字段，可为Time, ObjName, Duration, Status, Content 之一。缺省为Time
     * @param string $SortType 升序或降序。可为Desc, Asc之一。缺省为Desc
     * @param string $ObjName 告警对象的名称
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }
    }
}

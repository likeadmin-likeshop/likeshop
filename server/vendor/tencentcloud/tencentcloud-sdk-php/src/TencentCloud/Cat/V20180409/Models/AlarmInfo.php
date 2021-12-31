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
 * 拨测告警信息
 *
 * @method string getObjName() 获取告警对象的名称
 * @method void setObjName(string $ObjName) 设置告警对象的名称
 * @method string getFirstOccurTime() 获取告警发生的时间
 * @method void setFirstOccurTime(string $FirstOccurTime) 设置告警发生的时间
 * @method string getLastOccurTime() 获取告警结束的时间
 * @method void setLastOccurTime(string $LastOccurTime) 设置告警结束的时间
 * @method integer getStatus() 获取告警状态。1 表示已恢复，0 表示未恢复，2表示数据不足
 * @method void setStatus(integer $Status) 设置告警状态。1 表示已恢复，0 表示未恢复，2表示数据不足
 * @method string getContent() 获取告警的内容
 * @method void setContent(string $Content) 设置告警的内容
 * @method integer getTaskId() 获取拨测任务ID
 * @method void setTaskId(integer $TaskId) 设置拨测任务ID
 * @method string getMetricName() 获取特征项名字
 * @method void setMetricName(string $MetricName) 设置特征项名字
 * @method string getMetricValue() 获取特征项数值
 * @method void setMetricValue(string $MetricValue) 设置特征项数值
 * @method string getObjId() 获取告警对象的ID
 * @method void setObjId(string $ObjId) 设置告警对象的ID
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string 告警对象的名称
     */
    public $ObjName;

    /**
     * @var string 告警发生的时间
     */
    public $FirstOccurTime;

    /**
     * @var string 告警结束的时间
     */
    public $LastOccurTime;

    /**
     * @var integer 告警状态。1 表示已恢复，0 表示未恢复，2表示数据不足
     */
    public $Status;

    /**
     * @var string 告警的内容
     */
    public $Content;

    /**
     * @var integer 拨测任务ID
     */
    public $TaskId;

    /**
     * @var string 特征项名字
     */
    public $MetricName;

    /**
     * @var string 特征项数值
     */
    public $MetricValue;

    /**
     * @var string 告警对象的ID
     */
    public $ObjId;

    /**
     * @param string $ObjName 告警对象的名称
     * @param string $FirstOccurTime 告警发生的时间
     * @param string $LastOccurTime 告警结束的时间
     * @param integer $Status 告警状态。1 表示已恢复，0 表示未恢复，2表示数据不足
     * @param string $Content 告警的内容
     * @param integer $TaskId 拨测任务ID
     * @param string $MetricName 特征项名字
     * @param string $MetricValue 特征项数值
     * @param string $ObjId 告警对象的ID
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
        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricValue",$param) and $param["MetricValue"] !== null) {
            $this->MetricValue = $param["MetricValue"];
        }

        if (array_key_exists("ObjId",$param) and $param["ObjId"] !== null) {
            $this->ObjId = $param["ObjId"];
        }
    }
}

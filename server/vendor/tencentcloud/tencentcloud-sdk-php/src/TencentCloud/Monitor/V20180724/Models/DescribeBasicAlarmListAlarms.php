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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList返回的Alarms
 *
 * @method integer getId() 获取该条告警的ID
 * @method void setId(integer $Id) 设置该条告警的ID
 * @method integer getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmStatus() 获取告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmStatus(string $AlarmStatus) 设置告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取策略组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置策略组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取策略组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置策略组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstOccurTime() 获取发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstOccurTime(string $FirstOccurTime) 设置发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取持续时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置持续时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOccurTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOccurTime(string $LastOccurTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取告警内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置告警内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjName() 获取告警对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjName(string $ObjName) 设置告警对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjId() 获取告警对象ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjId(string $ObjId) 设置告警对象ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewName() 获取策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewName(string $ViewName) 设置策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpc() 获取VPC，只有CVM有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpc(string $Vpc) 设置VPC，只有CVM有
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricId() 获取指标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricId(integer $MetricId) 设置指标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmType() 获取告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmType(integer $AlarmType) 设置告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimensions() 获取告警对象维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(string $Dimensions) 设置告警对象维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotifyWay() 获取通知方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置通知方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceGroup() 获取所属实例组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroup(array $InstanceGroup) 设置所属实例组信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBasicAlarmListAlarms extends AbstractModel
{
    /**
     * @var integer 该条告警的ID
     */
    public $Id;

    /**
     * @var integer 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmStatus;

    /**
     * @var integer 策略组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 策略组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 发生时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstOccurTime;

    /**
     * @var integer 持续时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOccurTime;

    /**
     * @var string 告警内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 告警对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjName;

    /**
     * @var string 告警对象ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjId;

    /**
     * @var string 策略类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewName;

    /**
     * @var string VPC，只有CVM有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpc;

    /**
     * @var integer 指标ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricId;

    /**
     * @var string 指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer 告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmType;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 告警对象维度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var array 通知方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var array 所属实例组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroup;

    /**
     * @param integer $Id 该条告警的ID
     * @param integer $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmStatus 告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 策略组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 策略组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstOccurTime 发生时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 持续时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOccurTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 告警内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjName 告警对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjId 告警对象ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewName 策略类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vpc VPC，只有CVM有
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricId 指标ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 指标名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmType 告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimensions 告警对象维度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NotifyWay 通知方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceGroup 所属实例组信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("ObjId",$param) and $param["ObjId"] !== null) {
            $this->ObjId = $param["ObjId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = [];
            foreach ($param["InstanceGroup"] as $key => $value){
                $obj = new InstanceGroup();
                $obj->deserialize($value);
                array_push($this->InstanceGroup, $obj);
            }
        }
    }
}

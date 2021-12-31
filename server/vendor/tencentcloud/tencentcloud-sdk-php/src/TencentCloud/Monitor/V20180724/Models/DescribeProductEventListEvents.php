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
 * DescribeProductEventList返回的Events
 *
 * @method integer getEventId() 获取事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(integer $EventId) 设置事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventCName() 获取事件中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCName(string $EventCName) 设置事件中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventEName() 获取事件英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventEName(string $EventEName) 设置事件英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventName() 获取事件简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCName() 获取产品中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCName(string $ProductCName) 设置产品中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductEName() 获取产品英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductEName(string $ProductEName) 设置产品英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportAlarm() 获取是否支持告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportAlarm(integer $SupportAlarm) 设置是否支持告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDimensions() 获取实例对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(array $Dimensions) 设置实例对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdditionMsg() 获取实例对象附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionMsg(array $AdditionMsg) 设置实例对象附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAlarmConfig() 获取是否配置告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAlarmConfig(integer $IsAlarmConfig) 设置是否配置告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupInfo() 获取策略信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupInfo(array $GroupInfo) 设置策略信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewName() 获取显示名称ViewName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewName(string $ViewName) 设置显示名称ViewName
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeProductEventListEvents extends AbstractModel
{
    /**
     * @var integer 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string 事件中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCName;

    /**
     * @var string 事件英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventEName;

    /**
     * @var string 事件简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string 产品中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCName;

    /**
     * @var string 产品英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductEName;

    /**
     * @var string 产品简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 是否支持告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportAlarm;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 实例对象信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var array 实例对象附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionMsg;

    /**
     * @var integer 是否配置告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAlarmConfig;

    /**
     * @var array 策略信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupInfo;

    /**
     * @var string 显示名称ViewName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewName;

    /**
     * @param integer $EventId 事件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventCName 事件中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventEName 事件英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventName 事件简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCName 产品中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductEName 产品英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportAlarm 是否支持告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Dimensions 实例对象信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdditionMsg 实例对象附加信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAlarmConfig 是否配置告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupInfo 策略信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewName 显示名称ViewName
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventCName",$param) and $param["EventCName"] !== null) {
            $this->EventCName = $param["EventCName"];
        }

        if (array_key_exists("EventEName",$param) and $param["EventEName"] !== null) {
            $this->EventEName = $param["EventEName"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ProductCName",$param) and $param["ProductCName"] !== null) {
            $this->ProductCName = $param["ProductCName"];
        }

        if (array_key_exists("ProductEName",$param) and $param["ProductEName"] !== null) {
            $this->ProductEName = $param["ProductEName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SupportAlarm",$param) and $param["SupportAlarm"] !== null) {
            $this->SupportAlarm = $param["SupportAlarm"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeProductEventListEventsDimensions();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("AdditionMsg",$param) and $param["AdditionMsg"] !== null) {
            $this->AdditionMsg = [];
            foreach ($param["AdditionMsg"] as $key => $value){
                $obj = new DescribeProductEventListEventsDimensions();
                $obj->deserialize($value);
                array_push($this->AdditionMsg, $obj);
            }
        }

        if (array_key_exists("IsAlarmConfig",$param) and $param["IsAlarmConfig"] !== null) {
            $this->IsAlarmConfig = $param["IsAlarmConfig"];
        }

        if (array_key_exists("GroupInfo",$param) and $param["GroupInfo"] !== null) {
            $this->GroupInfo = [];
            foreach ($param["GroupInfo"] as $key => $value){
                $obj = new DescribeProductEventListEventsGroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfo, $obj);
            }
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }
    }
}

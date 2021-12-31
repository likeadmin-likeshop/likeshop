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
 * CreatePolicyGroup请求参数结构体
 *
 * @method string getGroupName() 获取组策略名称
 * @method void setGroupName(string $GroupName) 设置组策略名称
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method string getViewName() 获取策略组所属视图的名称，若通过模版创建，可不传入
 * @method void setViewName(string $ViewName) 设置策略组所属视图的名称，若通过模版创建，可不传入
 * @method integer getProjectId() 获取策略组所属项目Id，会进行鉴权操作
 * @method void setProjectId(integer $ProjectId) 设置策略组所属项目Id，会进行鉴权操作
 * @method integer getConditionTempGroupId() 获取模版策略组Id, 通过模版创建时才需要传
 * @method void setConditionTempGroupId(integer $ConditionTempGroupId) 设置模版策略组Id, 通过模版创建时才需要传
 * @method integer getIsShielded() 获取是否屏蔽策略组，0表示不屏蔽，1表示屏蔽。不填默认为0
 * @method void setIsShielded(integer $IsShielded) 设置是否屏蔽策略组，0表示不屏蔽，1表示屏蔽。不填默认为0
 * @method string getRemark() 获取策略组的备注信息
 * @method void setRemark(string $Remark) 设置策略组的备注信息
 * @method integer getInsertTime() 获取插入时间，戳格式为Unix时间戳，不填则按后台处理时间填充
 * @method void setInsertTime(integer $InsertTime) 设置插入时间，戳格式为Unix时间戳，不填则按后台处理时间填充
 * @method array getConditions() 获取策略组中的阈值告警规则
 * @method void setConditions(array $Conditions) 设置策略组中的阈值告警规则
 * @method array getEventConditions() 获取策略组中的事件告警规则
 * @method void setEventConditions(array $EventConditions) 设置策略组中的事件告警规则
 * @method integer getBackEndCall() 获取是否为后端调用。当且仅当值为1时，后台拉取策略模版中的规则填充入Conditions以及EventConditions字段
 * @method void setBackEndCall(integer $BackEndCall) 设置是否为后端调用。当且仅当值为1时，后台拉取策略模版中的规则填充入Conditions以及EventConditions字段
 * @method integer getIsUnionRule() 获取指标告警规则的且或关系，0表示或规则(满足任意规则就告警)，1表示且规则(满足所有规则才告警)
 * @method void setIsUnionRule(integer $IsUnionRule) 设置指标告警规则的且或关系，0表示或规则(满足任意规则就告警)，1表示且规则(满足所有规则才告警)
 */
class CreatePolicyGroupRequest extends AbstractModel
{
    /**
     * @var string 组策略名称
     */
    public $GroupName;

    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var string 策略组所属视图的名称，若通过模版创建，可不传入
     */
    public $ViewName;

    /**
     * @var integer 策略组所属项目Id，会进行鉴权操作
     */
    public $ProjectId;

    /**
     * @var integer 模版策略组Id, 通过模版创建时才需要传
     */
    public $ConditionTempGroupId;

    /**
     * @var integer 是否屏蔽策略组，0表示不屏蔽，1表示屏蔽。不填默认为0
     */
    public $IsShielded;

    /**
     * @var string 策略组的备注信息
     */
    public $Remark;

    /**
     * @var integer 插入时间，戳格式为Unix时间戳，不填则按后台处理时间填充
     */
    public $InsertTime;

    /**
     * @var array 策略组中的阈值告警规则
     */
    public $Conditions;

    /**
     * @var array 策略组中的事件告警规则
     */
    public $EventConditions;

    /**
     * @var integer 是否为后端调用。当且仅当值为1时，后台拉取策略模版中的规则填充入Conditions以及EventConditions字段
     */
    public $BackEndCall;

    /**
     * @var integer 指标告警规则的且或关系，0表示或规则(满足任意规则就告警)，1表示且规则(满足所有规则才告警)
     */
    public $IsUnionRule;

    /**
     * @param string $GroupName 组策略名称
     * @param string $Module 固定值，为"monitor"
     * @param string $ViewName 策略组所属视图的名称，若通过模版创建，可不传入
     * @param integer $ProjectId 策略组所属项目Id，会进行鉴权操作
     * @param integer $ConditionTempGroupId 模版策略组Id, 通过模版创建时才需要传
     * @param integer $IsShielded 是否屏蔽策略组，0表示不屏蔽，1表示屏蔽。不填默认为0
     * @param string $Remark 策略组的备注信息
     * @param integer $InsertTime 插入时间，戳格式为Unix时间戳，不填则按后台处理时间填充
     * @param array $Conditions 策略组中的阈值告警规则
     * @param array $EventConditions 策略组中的事件告警规则
     * @param integer $BackEndCall 是否为后端调用。当且仅当值为1时，后台拉取策略模版中的规则填充入Conditions以及EventConditions字段
     * @param integer $IsUnionRule 指标告警规则的且或关系，0表示或规则(满足任意规则就告警)，1表示且规则(满足所有规则才告警)
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }

        if (array_key_exists("IsShielded",$param) and $param["IsShielded"] !== null) {
            $this->IsShielded = $param["IsShielded"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new CreatePolicyGroupCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new CreatePolicyGroupEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("BackEndCall",$param) and $param["BackEndCall"] !== null) {
            $this->BackEndCall = $param["BackEndCall"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}

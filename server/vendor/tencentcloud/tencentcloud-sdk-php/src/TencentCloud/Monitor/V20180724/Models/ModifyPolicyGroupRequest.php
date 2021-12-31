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
 * ModifyPolicyGroup请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getGroupId() 获取策略组id
 * @method void setGroupId(integer $GroupId) 设置策略组id
 * @method string getViewName() 获取告警类型
 * @method void setViewName(string $ViewName) 设置告警类型
 * @method string getGroupName() 获取策略组名称
 * @method void setGroupName(string $GroupName) 设置策略组名称
 * @method integer getIsUnionRule() 获取指标告警条件的且或关系，1表示且告警，所有指标告警条件都达到才告警，0表示或告警，任意指标告警条件达到都告警
 * @method void setIsUnionRule(integer $IsUnionRule) 设置指标告警条件的且或关系，1表示且告警，所有指标告警条件都达到才告警，0表示或告警，任意指标告警条件达到都告警
 * @method array getConditions() 获取指标告警条件规则，不填表示删除已有的所有指标告警条件规则
 * @method void setConditions(array $Conditions) 设置指标告警条件规则，不填表示删除已有的所有指标告警条件规则
 * @method array getEventConditions() 获取事件告警条件，不填表示删除已有的事件告警条件
 * @method void setEventConditions(array $EventConditions) 设置事件告警条件，不填表示删除已有的事件告警条件
 * @method integer getConditionTempGroupId() 获取模板策略组id
 * @method void setConditionTempGroupId(integer $ConditionTempGroupId) 设置模板策略组id
 */
class ModifyPolicyGroupRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 策略组id
     */
    public $GroupId;

    /**
     * @var string 告警类型
     */
    public $ViewName;

    /**
     * @var string 策略组名称
     */
    public $GroupName;

    /**
     * @var integer 指标告警条件的且或关系，1表示且告警，所有指标告警条件都达到才告警，0表示或告警，任意指标告警条件达到都告警
     */
    public $IsUnionRule;

    /**
     * @var array 指标告警条件规则，不填表示删除已有的所有指标告警条件规则
     */
    public $Conditions;

    /**
     * @var array 事件告警条件，不填表示删除已有的事件告警条件
     */
    public $EventConditions;

    /**
     * @var integer 模板策略组id
     */
    public $ConditionTempGroupId;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $GroupId 策略组id
     * @param string $ViewName 告警类型
     * @param string $GroupName 策略组名称
     * @param integer $IsUnionRule 指标告警条件的且或关系，1表示且告警，所有指标告警条件都达到才告警，0表示或告警，任意指标告警条件达到都告警
     * @param array $Conditions 指标告警条件规则，不填表示删除已有的所有指标告警条件规则
     * @param array $EventConditions 事件告警条件，不填表示删除已有的事件告警条件
     * @param integer $ConditionTempGroupId 模板策略组id
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ModifyPolicyGroupCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new ModifyPolicyGroupEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }
    }
}

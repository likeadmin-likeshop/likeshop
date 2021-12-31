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
 * 告警策略详情
 *
 * @method string getPolicyId() 获取告警策略 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置告警策略 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取告警策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置告警策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorType() 获取监控类型 MT_QCE=云产品监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(string $MonitorType) 设置监控类型 MT_QCE=云产品监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取启停状态 0=停用 1=启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置启停状态 0=停用 1=启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseSum() 获取策略组绑定的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseSum(integer $UseSum) 设置策略组绑定的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目 Id -1=无项目 0=默认项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目 Id -1=无项目 0=默认项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取告警策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置告警策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionTemplateId() 获取触发条件模板 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionTemplateId(string $ConditionTemplateId) 设置触发条件模板 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyCondition getCondition() 获取指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyEventCondition getEventCondition() 获取事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeIds() 获取通知规则 id 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeIds(array $NoticeIds) 设置通知规则 id 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotices() 获取通知规则 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotices(array $Notices) 设置通知规则 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerTasks() 获取触发任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTasks(array $TriggerTasks) 设置触发任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConditionsTemp getConditionsTemp() 获取模板策略组
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(ConditionsTemp $ConditionsTemp) 设置模板策略组
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastEditUin() 获取最后编辑的用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastEditUin(string $LastEditUin) 设置最后编辑的用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInsertTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(array $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceShowName() 获取namespace显示名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceShowName(string $NamespaceShowName) 设置namespace显示名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取是否默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置是否默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCanSetDefault() 获取能否设置默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanSetDefault(integer $CanSetDefault) 设置能否设置默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceGroupId() 获取实例分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceSum() 获取实例分组总实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSum(integer $InstanceSum) 设置实例分组总实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceGroupName() 获取实例分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupName(string $InstanceGroupName) 设置实例分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginId() 获取用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginId(string $OriginId) 设置用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInstances() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInstances(array $TagInstances) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicy extends AbstractModel
{
    /**
     * @var string 告警策略 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 告警策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 监控类型 MT_QCE=云产品监控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var integer 启停状态 0=停用 1=启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 策略组绑定的实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseSum;

    /**
     * @var integer 项目 Id -1=无项目 0=默认项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 告警策略类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 触发条件模板 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition 指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition 事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCondition;

    /**
     * @var array 通知规则 id 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeIds;

    /**
     * @var array 通知规则 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notices;

    /**
     * @var array 触发任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTasks;

    /**
     * @var ConditionsTemp 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var string 最后编辑的用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastEditUin;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var array 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string namespace显示名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceShowName;

    /**
     * @var integer 是否默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var integer 能否设置默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanSetDefault;

    /**
     * @var integer 实例分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupId;

    /**
     * @var integer 实例分组总实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSum;

    /**
     * @var string 实例分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupName;

    /**
     * @var string 触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginId;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInstances;

    /**
     * @param string $PolicyId 告警策略 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 告警策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorType 监控类型 MT_QCE=云产品监控
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 启停状态 0=停用 1=启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseSum 策略组绑定的实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目 Id -1=无项目 0=默认项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 告警策略类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionTemplateId 触发条件模板 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyCondition $Condition 指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyEventCondition $EventCondition 事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeIds 通知规则 id 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Notices 通知规则 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerTasks 触发任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConditionsTemp $ConditionsTemp 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastEditUin 最后编辑的用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InsertTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceShowName namespace显示名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault 是否默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CanSetDefault 能否设置默认策略，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceGroupId 实例分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceSum 实例分组总实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceGroupName 实例分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginId 用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInstances 标签
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ConditionTemplateId",$param) and $param["ConditionTemplateId"] !== null) {
            $this->ConditionTemplateId = $param["ConditionTemplateId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new AlarmNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new ConditionsTemp();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NamespaceShowName",$param) and $param["NamespaceShowName"] !== null) {
            $this->NamespaceShowName = $param["NamespaceShowName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("InstanceGroupName",$param) and $param["InstanceGroupName"] !== null) {
            $this->InstanceGroupName = $param["InstanceGroupName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("TagInstances",$param) and $param["TagInstances"] !== null) {
            $this->TagInstances = [];
            foreach ($param["TagInstances"] as $key => $value){
                $obj = new TagInstance();
                $obj->deserialize($value);
                array_push($this->TagInstances, $obj);
            }
        }
    }
}

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
 * CreateAlarmPolicy请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method string getPolicyName() 获取策略名称，不超过20字符
 * @method void setPolicyName(string $PolicyName) 设置策略名称，不超过20字符
 * @method string getMonitorType() 获取监控类型 MT_QCE=云产品监控
 * @method void setMonitorType(string $MonitorType) 设置监控类型 MT_QCE=云产品监控
 * @method string getNamespace() 获取告警策略类型，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得，例如 cvm_device
 * @method void setNamespace(string $Namespace) 设置告警策略类型，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得，例如 cvm_device
 * @method string getRemark() 获取备注，不超过100字符，仅支持中英文、数字、下划线、-
 * @method void setRemark(string $Remark) 设置备注，不超过100字符，仅支持中英文、数字、下划线、-
 * @method integer getEnable() 获取是否启用 0=停用 1=启用，可不传 默认为1
 * @method void setEnable(integer $Enable) 设置是否启用 0=停用 1=启用，可不传 默认为1
 * @method integer getProjectId() 获取项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 [账号中心-项目管理](https://console.cloud.tencent.com/project) 中查看。
 * @method void setProjectId(integer $ProjectId) 设置项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 [账号中心-项目管理](https://console.cloud.tencent.com/project) 中查看。
 * @method integer getConditionTemplateId() 获取触发条件模板 Id ，可不传
 * @method void setConditionTemplateId(integer $ConditionTemplateId) 设置触发条件模板 Id ，可不传
 * @method AlarmPolicyCondition getCondition() 获取指标触发条件，支持的指标可以从 [DescribeAlarmMetrics](https://cloud.tencent.com/document/product/248/51283) 查询。
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置指标触发条件，支持的指标可以从 [DescribeAlarmMetrics](https://cloud.tencent.com/document/product/248/51283) 查询。
 * @method AlarmPolicyEventCondition getEventCondition() 获取事件触发条件，支持的事件可以从 [DescribeAlarmEvents](https://cloud.tencent.com/document/product/248/51284) 查询。
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置事件触发条件，支持的事件可以从 [DescribeAlarmEvents](https://cloud.tencent.com/document/product/248/51284) 查询。
 * @method array getNoticeIds() 获取通知规则 Id 列表，由 [DescribeAlarmNotices](https://cloud.tencent.com/document/product/248/51280) 获得
 * @method void setNoticeIds(array $NoticeIds) 设置通知规则 Id 列表，由 [DescribeAlarmNotices](https://cloud.tencent.com/document/product/248/51280) 获得
 * @method array getTriggerTasks() 获取触发任务列表
 * @method void setTriggerTasks(array $TriggerTasks) 设置触发任务列表
 */
class CreateAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var string 策略名称，不超过20字符
     */
    public $PolicyName;

    /**
     * @var string 监控类型 MT_QCE=云产品监控
     */
    public $MonitorType;

    /**
     * @var string 告警策略类型，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得，例如 cvm_device
     */
    public $Namespace;

    /**
     * @var string 备注，不超过100字符，仅支持中英文、数字、下划线、-
     */
    public $Remark;

    /**
     * @var integer 是否启用 0=停用 1=启用，可不传 默认为1
     */
    public $Enable;

    /**
     * @var integer 项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 [账号中心-项目管理](https://console.cloud.tencent.com/project) 中查看。
     */
    public $ProjectId;

    /**
     * @var integer 触发条件模板 Id ，可不传
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition 指标触发条件，支持的指标可以从 [DescribeAlarmMetrics](https://cloud.tencent.com/document/product/248/51283) 查询。
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition 事件触发条件，支持的事件可以从 [DescribeAlarmEvents](https://cloud.tencent.com/document/product/248/51284) 查询。
     */
    public $EventCondition;

    /**
     * @var array 通知规则 Id 列表，由 [DescribeAlarmNotices](https://cloud.tencent.com/document/product/248/51280) 获得
     */
    public $NoticeIds;

    /**
     * @var array 触发任务列表
     */
    public $TriggerTasks;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param string $PolicyName 策略名称，不超过20字符
     * @param string $MonitorType 监控类型 MT_QCE=云产品监控
     * @param string $Namespace 告警策略类型，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得，例如 cvm_device
     * @param string $Remark 备注，不超过100字符，仅支持中英文、数字、下划线、-
     * @param integer $Enable 是否启用 0=停用 1=启用，可不传 默认为1
     * @param integer $ProjectId 项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 [账号中心-项目管理](https://console.cloud.tencent.com/project) 中查看。
     * @param integer $ConditionTemplateId 触发条件模板 Id ，可不传
     * @param AlarmPolicyCondition $Condition 指标触发条件，支持的指标可以从 [DescribeAlarmMetrics](https://cloud.tencent.com/document/product/248/51283) 查询。
     * @param AlarmPolicyEventCondition $EventCondition 事件触发条件，支持的事件可以从 [DescribeAlarmEvents](https://cloud.tencent.com/document/product/248/51284) 查询。
     * @param array $NoticeIds 通知规则 Id 列表，由 [DescribeAlarmNotices](https://cloud.tencent.com/document/product/248/51280) 获得
     * @param array $TriggerTasks 触发任务列表
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }
    }
}

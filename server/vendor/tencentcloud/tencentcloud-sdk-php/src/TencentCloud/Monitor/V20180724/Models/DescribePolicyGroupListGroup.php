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
 * DescribePolicyGroupList.Group
 *
 * @method integer getGroupId() 获取策略组id
 * @method void setGroupId(integer $GroupId) 设置策略组id
 * @method string getGroupName() 获取策略组名称
 * @method void setGroupName(string $GroupName) 设置策略组名称
 * @method boolean getIsOpen() 获取是否开启
 * @method void setIsOpen(boolean $IsOpen) 设置是否开启
 * @method string getViewName() 获取策略视图名称
 * @method void setViewName(string $ViewName) 设置策略视图名称
 * @method string getLastEditUin() 获取最近编辑的用户uin
 * @method void setLastEditUin(string $LastEditUin) 设置最近编辑的用户uin
 * @method integer getUpdateTime() 获取最后修改时间
 * @method void setUpdateTime(integer $UpdateTime) 设置最后修改时间
 * @method integer getInsertTime() 获取创建时间
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
 * @method integer getUseSum() 获取策略组绑定的实例数
 * @method void setUseSum(integer $UseSum) 设置策略组绑定的实例数
 * @method integer getNoShieldedSum() 获取策略组绑定的未屏蔽实例数
 * @method void setNoShieldedSum(integer $NoShieldedSum) 设置策略组绑定的未屏蔽实例数
 * @method integer getIsDefault() 获取是否为默认策略，0表示非默认策略，1表示默认策略
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认策略，0表示非默认策略，1表示默认策略
 * @method boolean getCanSetDefault() 获取是否可以设置成默认策略
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置是否可以设置成默认策略
 * @method integer getParentGroupId() 获取父策略组id
 * @method void setParentGroupId(integer $ParentGroupId) 设置父策略组id
 * @method string getRemark() 获取策略组备注
 * @method void setRemark(string $Remark) 设置策略组备注
 * @method integer getProjectId() 获取策略组所属项目id
 * @method void setProjectId(integer $ProjectId) 设置策略组所属项目id
 * @method array getConditions() 获取阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConditions() 获取产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConditions(array $EventConditions) 设置产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverInfos() 获取用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() 获取模板策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) 设置模板策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupListGroupInstanceGroup getInstanceGroup() 获取策略组绑定的实例组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroup(DescribePolicyGroupListGroupInstanceGroup $InstanceGroup) 设置策略组绑定的实例组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUnionRule() 获取且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupListGroup extends AbstractModel
{
    /**
     * @var integer 策略组id
     */
    public $GroupId;

    /**
     * @var string 策略组名称
     */
    public $GroupName;

    /**
     * @var boolean 是否开启
     */
    public $IsOpen;

    /**
     * @var string 策略视图名称
     */
    public $ViewName;

    /**
     * @var string 最近编辑的用户uin
     */
    public $LastEditUin;

    /**
     * @var integer 最后修改时间
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间
     */
    public $InsertTime;

    /**
     * @var integer 策略组绑定的实例数
     */
    public $UseSum;

    /**
     * @var integer 策略组绑定的未屏蔽实例数
     */
    public $NoShieldedSum;

    /**
     * @var integer 是否为默认策略，0表示非默认策略，1表示默认策略
     */
    public $IsDefault;

    /**
     * @var boolean 是否可以设置成默认策略
     */
    public $CanSetDefault;

    /**
     * @var integer 父策略组id
     */
    public $ParentGroupId;

    /**
     * @var string 策略组备注
     */
    public $Remark;

    /**
     * @var integer 策略组所属项目id
     */
    public $ProjectId;

    /**
     * @var array 阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var array 产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConditions;

    /**
     * @var array 用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoConditionTpl 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var DescribePolicyGroupListGroupInstanceGroup 策略组绑定的实例组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroup;

    /**
     * @var integer 且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId 策略组id
     * @param string $GroupName 策略组名称
     * @param boolean $IsOpen 是否开启
     * @param string $ViewName 策略视图名称
     * @param string $LastEditUin 最近编辑的用户uin
     * @param integer $UpdateTime 最后修改时间
     * @param integer $InsertTime 创建时间
     * @param integer $UseSum 策略组绑定的实例数
     * @param integer $NoShieldedSum 策略组绑定的未屏蔽实例数
     * @param integer $IsDefault 是否为默认策略，0表示非默认策略，1表示默认策略
     * @param boolean $CanSetDefault 是否可以设置成默认策略
     * @param integer $ParentGroupId 父策略组id
     * @param string $Remark 策略组备注
     * @param integer $ProjectId 策略组所属项目id
     * @param array $Conditions 阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConditions 产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverInfos 用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupListGroupInstanceGroup $InstanceGroup 策略组绑定的实例组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUnionRule 且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
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

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("NoShieldedSum",$param) and $param["NoShieldedSum"] !== null) {
            $this->NoShieldedSum = $param["NoShieldedSum"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("ParentGroupId",$param) and $param["ParentGroupId"] !== null) {
            $this->ParentGroupId = $param["ParentGroupId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new DescribePolicyGroupInfoReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = new DescribePolicyGroupListGroupInstanceGroup();
            $this->InstanceGroup->deserialize($param["InstanceGroup"]);
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}

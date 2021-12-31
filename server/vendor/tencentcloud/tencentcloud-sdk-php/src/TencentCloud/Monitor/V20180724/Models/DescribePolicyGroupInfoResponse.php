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
 * DescribePolicyGroupInfo返回参数结构体
 *
 * @method string getGroupName() 获取策略组名称
 * @method void setGroupName(string $GroupName) 设置策略组名称
 * @method integer getProjectId() 获取策略组所属的项目id
 * @method void setProjectId(integer $ProjectId) 设置策略组所属的项目id
 * @method integer getIsDefault() 获取是否为默认策略，0表示非默认策略，1表示默认策略
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认策略，0表示非默认策略，1表示默认策略
 * @method string getViewName() 获取策略类型
 * @method void setViewName(string $ViewName) 设置策略类型
 * @method string getRemark() 获取策略说明
 * @method void setRemark(string $Remark) 设置策略说明
 * @method string getShowName() 获取策略类型名称
 * @method void setShowName(string $ShowName) 设置策略类型名称
 * @method string getLastEditUin() 获取最近编辑的用户uin
 * @method void setLastEditUin(string $LastEditUin) 设置最近编辑的用户uin
 * @method string getUpdateTime() 获取最近编辑时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近编辑时间
 * @method array getRegion() 获取该策略支持的地域
 * @method void setRegion(array $Region) 设置该策略支持的地域
 * @method array getDimensionGroup() 获取策略类型的维度列表
 * @method void setDimensionGroup(array $DimensionGroup) 设置策略类型的维度列表
 * @method array getConditionsConfig() 获取阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsConfig(array $ConditionsConfig) 设置阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConfig() 获取产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConfig(array $EventConfig) 设置产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverInfos() 获取用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoCallback getCallback() 获取用户回调信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallback(DescribePolicyGroupInfoCallback $Callback) 设置用户回调信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() 获取模板策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) 设置模板策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanSetDefault() 获取是否可以设置成默认策略
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置是否可以设置成默认策略
 * @method integer getIsUnionRule() 获取是否且规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置是否且规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePolicyGroupInfoResponse extends AbstractModel
{
    /**
     * @var string 策略组名称
     */
    public $GroupName;

    /**
     * @var integer 策略组所属的项目id
     */
    public $ProjectId;

    /**
     * @var integer 是否为默认策略，0表示非默认策略，1表示默认策略
     */
    public $IsDefault;

    /**
     * @var string 策略类型
     */
    public $ViewName;

    /**
     * @var string 策略说明
     */
    public $Remark;

    /**
     * @var string 策略类型名称
     */
    public $ShowName;

    /**
     * @var string 最近编辑的用户uin
     */
    public $LastEditUin;

    /**
     * @var string 最近编辑时间
     */
    public $UpdateTime;

    /**
     * @var array 该策略支持的地域
     */
    public $Region;

    /**
     * @var array 策略类型的维度列表
     */
    public $DimensionGroup;

    /**
     * @var array 阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsConfig;

    /**
     * @var array 产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConfig;

    /**
     * @var array 用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoCallback 用户回调信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Callback;

    /**
     * @var DescribePolicyGroupInfoConditionTpl 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var boolean 是否可以设置成默认策略
     */
    public $CanSetDefault;

    /**
     * @var integer 是否且规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GroupName 策略组名称
     * @param integer $ProjectId 策略组所属的项目id
     * @param integer $IsDefault 是否为默认策略，0表示非默认策略，1表示默认策略
     * @param string $ViewName 策略类型
     * @param string $Remark 策略说明
     * @param string $ShowName 策略类型名称
     * @param string $LastEditUin 最近编辑的用户uin
     * @param string $UpdateTime 最近编辑时间
     * @param array $Region 该策略支持的地域
     * @param array $DimensionGroup 策略类型的维度列表
     * @param array $ConditionsConfig 阈值规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConfig 产品事件规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverInfos 用户接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoCallback $Callback 用户回调信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp 模板策略组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanSetDefault 是否可以设置成默认策略
     * @param integer $IsUnionRule 是否且规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ShowName",$param) and $param["ShowName"] !== null) {
            $this->ShowName = $param["ShowName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DimensionGroup",$param) and $param["DimensionGroup"] !== null) {
            $this->DimensionGroup = $param["DimensionGroup"];
        }

        if (array_key_exists("ConditionsConfig",$param) and $param["ConditionsConfig"] !== null) {
            $this->ConditionsConfig = [];
            foreach ($param["ConditionsConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->ConditionsConfig, $obj);
            }
        }

        if (array_key_exists("EventConfig",$param) and $param["EventConfig"] !== null) {
            $this->EventConfig = [];
            foreach ($param["EventConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConfig, $obj);
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

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new DescribePolicyGroupInfoCallback();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

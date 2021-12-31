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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批申请单
 *
 * @method string getApplicationId() 获取审批单号
 * @method void setApplicationId(string $ApplicationId) 设置审批单号
 * @method integer getApplicationType() 获取申请类型
 * @method void setApplicationType(integer $ApplicationType) 设置申请类型
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getTableGroupName() 获取表格组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupName(string $TableGroupName) 设置表格组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表格名称
 * @method void setTableName(string $TableName) 设置表格名称
 * @method string getApplicant() 获取申请人
 * @method void setApplicant(string $Applicant) 设置申请人
 * @method string getCreatedTime() 获取建单时间
 * @method void setCreatedTime(string $CreatedTime) 设置建单时间
 * @method integer getApplicationStatus() 获取处理状态 -1 撤回 0-待审核 1-已经审核并提交任务 2-已驳回
 * @method void setApplicationStatus(integer $ApplicationStatus) 设置处理状态 -1 撤回 0-待审核 1-已经审核并提交任务 2-已驳回
 * @method string getTableGroupId() 获取表格组Id
 * @method void setTableGroupId(string $TableGroupId) 设置表格组Id
 * @method string getTaskId() 获取已提交的任务Id，未提交申请为0
 * @method void setTaskId(string $TaskId) 设置已提交的任务Id，未提交申请为0
 * @method string getTableInstanceId() 获取腾讯云上table的唯一键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置腾讯云上table的唯一键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUser() 获取审批人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUser(string $ExecuteUser) 设置审批人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteStatus() 获取执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteStatus(string $ExecuteStatus) 设置执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanCensor() 获取该申请单是否可以被当前用户审批
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanCensor(boolean $CanCensor) 设置该申请单是否可以被当前用户审批
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanWithdrawal() 获取该申请单是否可以被当前用户撤回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanWithdrawal(boolean $CanWithdrawal) 设置该申请单是否可以被当前用户撤回
注意：此字段可能返回 null，表示取不到有效值。
 */
class Application extends AbstractModel
{
    /**
     * @var string 审批单号
     */
    public $ApplicationId;

    /**
     * @var integer 申请类型
     */
    public $ApplicationType;

    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 表格组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupName;

    /**
     * @var string 表格名称
     */
    public $TableName;

    /**
     * @var string 申请人
     */
    public $Applicant;

    /**
     * @var string 建单时间
     */
    public $CreatedTime;

    /**
     * @var integer 处理状态 -1 撤回 0-待审核 1-已经审核并提交任务 2-已驳回
     */
    public $ApplicationStatus;

    /**
     * @var string 表格组Id
     */
    public $TableGroupId;

    /**
     * @var string 已提交的任务Id，未提交申请为0
     */
    public $TaskId;

    /**
     * @var string 腾讯云上table的唯一键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInstanceId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 审批人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUser;

    /**
     * @var string 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteStatus;

    /**
     * @var boolean 该申请单是否可以被当前用户审批
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanCensor;

    /**
     * @var boolean 该申请单是否可以被当前用户撤回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanWithdrawal;

    /**
     * @param string $ApplicationId 审批单号
     * @param integer $ApplicationType 申请类型
     * @param string $ClusterId 集群Id
     * @param string $ClusterName 集群名称
     * @param string $TableGroupName 表格组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表格名称
     * @param string $Applicant 申请人
     * @param string $CreatedTime 建单时间
     * @param integer $ApplicationStatus 处理状态 -1 撤回 0-待审核 1-已经审核并提交任务 2-已驳回
     * @param string $TableGroupId 表格组Id
     * @param string $TaskId 已提交的任务Id，未提交申请为0
     * @param string $TableInstanceId 腾讯云上table的唯一键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUser 审批人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteStatus 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanCensor 该申请单是否可以被当前用户审批
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanWithdrawal 该申请单是否可以被当前用户撤回
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Applicant",$param) and $param["Applicant"] !== null) {
            $this->Applicant = $param["Applicant"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExecuteUser",$param) and $param["ExecuteUser"] !== null) {
            $this->ExecuteUser = $param["ExecuteUser"];
        }

        if (array_key_exists("ExecuteStatus",$param) and $param["ExecuteStatus"] !== null) {
            $this->ExecuteStatus = $param["ExecuteStatus"];
        }

        if (array_key_exists("CanCensor",$param) and $param["CanCensor"] !== null) {
            $this->CanCensor = $param["CanCensor"];
        }

        if (array_key_exists("CanWithdrawal",$param) and $param["CanWithdrawal"] !== null) {
            $this->CanWithdrawal = $param["CanWithdrawal"];
        }
    }
}

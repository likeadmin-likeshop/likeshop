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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * notebook实例概览
 *
 * @method string getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedTime() 获取最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookInstanceName() 获取notebook实例名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置notebook实例名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookInstanceStatus() 获取notebook实例状态，取值范围：
Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookInstanceStatus(string $NotebookInstanceStatus) 设置notebook实例状态，取值范围：
Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取算力类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置算力类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartupTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(string $StartupTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadline() 获取运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadline(string $Deadline) 设置运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method StoppingCondition getStoppingCondition() 获取自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrepay() 获取是否是预付费实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepay(boolean $Prepay) 设置是否是预付费实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method BillingLabel getBillingLabel() 获取计费标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingLabel(BillingLabel $BillingLabel) 设置计费标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuntimeInSeconds() 获取运行时长，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置运行时长，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainTimeInSeconds() 获取剩余时长，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainTimeInSeconds(integer $RemainTimeInSeconds) 设置剩余时长，秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookInstanceSummary extends AbstractModel
{
    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedTime;

    /**
     * @var string notebook实例名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookInstanceName;

    /**
     * @var string notebook实例状态，取值范围：
Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookInstanceStatus;

    /**
     * @var string 算力类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var string 运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deadline;

    /**
     * @var StoppingCondition 自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingCondition;

    /**
     * @var boolean 是否是预付费实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prepay;

    /**
     * @var BillingLabel 计费标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingLabel;

    /**
     * @var integer 运行时长，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var integer 剩余时长，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainTimeInSeconds;

    /**
     * @param string $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedTime 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookInstanceName notebook实例名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookInstanceStatus notebook实例状态，取值范围：
Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 算力类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartupTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Deadline 运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param StoppingCondition $StoppingCondition 自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Prepay 是否是预付费实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param BillingLabel $BillingLabel 计费标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuntimeInSeconds 运行时长，秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainTimeInSeconds 剩余时长，秒
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("NotebookInstanceStatus",$param) and $param["NotebookInstanceStatus"] !== null) {
            $this->NotebookInstanceStatus = $param["NotebookInstanceStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("Prepay",$param) and $param["Prepay"] !== null) {
            $this->Prepay = $param["Prepay"];
        }

        if (array_key_exists("BillingLabel",$param) and $param["BillingLabel"] !== null) {
            $this->BillingLabel = new BillingLabel();
            $this->BillingLabel->deserialize($param["BillingLabel"]);
        }

        if (array_key_exists("RuntimeInSeconds",$param) and $param["RuntimeInSeconds"] !== null) {
            $this->RuntimeInSeconds = $param["RuntimeInSeconds"];
        }

        if (array_key_exists("RemainTimeInSeconds",$param) and $param["RemainTimeInSeconds"] !== null) {
            $this->RemainTimeInSeconds = $param["RemainTimeInSeconds"];
        }
    }
}

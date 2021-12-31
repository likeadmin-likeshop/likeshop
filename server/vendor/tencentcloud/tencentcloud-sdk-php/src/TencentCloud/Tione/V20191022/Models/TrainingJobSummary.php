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
 * 训练任务概要
 *
 * @method string getCreationTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedTime() 获取最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingJobName() 获取训练任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingJobName(string $TrainingJobName) 设置训练任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingJobStatus() 获取训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingJobStatus(string $TrainingJobStatus) 设置训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingEndTime() 获取完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingEndTime(string $TrainingEndTime) 设置完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取算了实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置算了实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConfig getResourceConfig() 获取资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceConfig(ResourceConfig $ResourceConfig) 设置资源配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingJobSummary extends AbstractModel
{
    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedTime;

    /**
     * @var string 训练任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingJobName;

    /**
     * @var string 训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingJobStatus;

    /**
     * @var string 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingEndTime;

    /**
     * @var string 算了实例Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var ResourceConfig 资源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceConfig;

    /**
     * @param string $CreationTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedTime 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingJobName 训练任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingJobStatus 训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingEndTime 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 算了实例Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConfig $ResourceConfig 资源配置
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

        if (array_key_exists("TrainingJobName",$param) and $param["TrainingJobName"] !== null) {
            $this->TrainingJobName = $param["TrainingJobName"];
        }

        if (array_key_exists("TrainingJobStatus",$param) and $param["TrainingJobStatus"] !== null) {
            $this->TrainingJobStatus = $param["TrainingJobStatus"];
        }

        if (array_key_exists("TrainingEndTime",$param) and $param["TrainingEndTime"] !== null) {
            $this->TrainingEndTime = $param["TrainingEndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new ResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }
    }
}

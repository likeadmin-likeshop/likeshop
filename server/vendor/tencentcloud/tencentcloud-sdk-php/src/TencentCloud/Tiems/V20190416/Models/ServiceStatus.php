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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务状态
 *
 * @method integer getDesiredReplicas() 获取预期副本数
 * @method void setDesiredReplicas(integer $DesiredReplicas) 设置预期副本数
 * @method integer getCurrentReplicas() 获取当前副本数
 * @method void setCurrentReplicas(integer $CurrentReplicas) 设置当前副本数
 * @method string getStatus() 获取Normal：正常运行中；Abnormal：服务异常，例如容器启动失败等；Waiting：服务等待中，例如容器下载镜像过程等；Stopped：已停止 Stopping 停止中；Resuming：重启中；Updating：服务更新中
 * @method void setStatus(string $Status) 设置Normal：正常运行中；Abnormal：服务异常，例如容器启动失败等；Waiting：服务等待中，例如容器下载镜像过程等；Stopped：已停止 Stopping 停止中；Resuming：重启中；Updating：服务更新中
 * @method array getConditions() 获取服务处于当前状态的原因集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置服务处于当前状态的原因集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReplicas() 获取副本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(array $Replicas) 设置副本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取运行状态对额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置运行状态对额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReplicaInfos() 获取副本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaInfos(array $ReplicaInfos) 设置副本信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceStatus extends AbstractModel
{
    /**
     * @var integer 预期副本数
     */
    public $DesiredReplicas;

    /**
     * @var integer 当前副本数
     */
    public $CurrentReplicas;

    /**
     * @var string Normal：正常运行中；Abnormal：服务异常，例如容器启动失败等；Waiting：服务等待中，例如容器下载镜像过程等；Stopped：已停止 Stopping 停止中；Resuming：重启中；Updating：服务更新中
     */
    public $Status;

    /**
     * @var array 服务处于当前状态的原因集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var array 副本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var string 运行状态对额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array 副本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaInfos;

    /**
     * @param integer $DesiredReplicas 预期副本数
     * @param integer $CurrentReplicas 当前副本数
     * @param string $Status Normal：正常运行中；Abnormal：服务异常，例如容器启动失败等；Waiting：服务等待中，例如容器下载镜像过程等；Stopped：已停止 Stopping 停止中；Resuming：重启中；Updating：服务更新中
     * @param array $Conditions 服务处于当前状态的原因集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Replicas 副本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 运行状态对额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReplicaInfos 副本信息
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
        if (array_key_exists("DesiredReplicas",$param) and $param["DesiredReplicas"] !== null) {
            $this->DesiredReplicas = $param["DesiredReplicas"];
        }

        if (array_key_exists("CurrentReplicas",$param) and $param["CurrentReplicas"] !== null) {
            $this->CurrentReplicas = $param["CurrentReplicas"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new Conditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReplicaInfos",$param) and $param["ReplicaInfos"] !== null) {
            $this->ReplicaInfos = [];
            foreach ($param["ReplicaInfos"] as $key => $value){
                $obj = new ReplicaInfo();
                $obj->deserialize($value);
                array_push($this->ReplicaInfos, $obj);
            }
        }
    }
}

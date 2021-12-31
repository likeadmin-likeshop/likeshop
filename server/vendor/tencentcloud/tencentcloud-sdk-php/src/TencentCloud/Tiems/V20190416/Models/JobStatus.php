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
 * 任务状态
 *
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method string getMessage() 获取错误时为错误描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误时为错误描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesiredWorkers() 获取预期Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredWorkers(integer $DesiredWorkers) 设置预期Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentWorkers() 获取当前Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentWorkers(integer $CurrentWorkers) 设置当前Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReplicas() 获取副本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(array $Replicas) 设置副本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReplicaInfos() 获取副本实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaInfos(array $ReplicaInfos) 设置副本实例
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobStatus extends AbstractModel
{
    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var string 错误时为错误描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 预期Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredWorkers;

    /**
     * @var integer 当前Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentWorkers;

    /**
     * @var array 副本名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var array 副本实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaInfos;

    /**
     * @param string $Status 任务状态
     * @param string $Message 错误时为错误描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DesiredWorkers 预期Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentWorkers 当前Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Replicas 副本名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReplicaInfos 副本实例
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DesiredWorkers",$param) and $param["DesiredWorkers"] !== null) {
            $this->DesiredWorkers = $param["DesiredWorkers"];
        }

        if (array_key_exists("CurrentWorkers",$param) and $param["CurrentWorkers"] !== null) {
            $this->CurrentWorkers = $param["CurrentWorkers"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
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

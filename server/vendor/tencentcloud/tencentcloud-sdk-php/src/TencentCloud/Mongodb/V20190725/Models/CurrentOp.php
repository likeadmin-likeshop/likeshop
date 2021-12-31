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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云数据库实例当前操作
 *
 * @method integer getOpId() 获取操作序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpId(integer $OpId) 设置操作序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNs() 获取操作所在的命名空间，形式如db.collection
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNs(string $Ns) 设置操作所在的命名空间，形式如db.collection
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuery() 获取操作执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuery(string $Query) 设置操作执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOp() 获取操作类型，可能的取值：aggregate、count、delete、distinct、find、findAndModify、getMore、insert、mapReduce、update和command
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOp(string $Op) 设置操作类型，可能的取值：aggregate、count、delete、distinct、find、findAndModify、getMore、insert、mapReduce、update和command
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplicaSetName() 获取操作所在的分片名称
 * @method void setReplicaSetName(string $ReplicaSetName) 设置操作所在的分片名称
 * @method string getState() 获取筛选条件，节点状态，可能的取值为：Primary、Secondary
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置筛选条件，节点状态，可能的取值为：Primary、Secondary
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperation() 获取操作详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(string $Operation) 设置操作详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取操作所在的节点名称
 * @method void setNodeName(string $NodeName) 设置操作所在的节点名称
 * @method integer getMicrosecsRunning() 获取操作已执行时间（ms）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicrosecsRunning(integer $MicrosecsRunning) 设置操作已执行时间（ms）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CurrentOp extends AbstractModel
{
    /**
     * @var integer 操作序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpId;

    /**
     * @var string 操作所在的命名空间，形式如db.collection
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ns;

    /**
     * @var string 操作执行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Query;

    /**
     * @var string 操作类型，可能的取值：aggregate、count、delete、distinct、find、findAndModify、getMore、insert、mapReduce、update和command
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Op;

    /**
     * @var string 操作所在的分片名称
     */
    public $ReplicaSetName;

    /**
     * @var string 筛选条件，节点状态，可能的取值为：Primary、Secondary
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 操作详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var string 操作所在的节点名称
     */
    public $NodeName;

    /**
     * @var integer 操作已执行时间（ms）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicrosecsRunning;

    /**
     * @param integer $OpId 操作序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ns 操作所在的命名空间，形式如db.collection
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Query 操作执行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Op 操作类型，可能的取值：aggregate、count、delete、distinct、find、findAndModify、getMore、insert、mapReduce、update和command
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplicaSetName 操作所在的分片名称
     * @param string $State 筛选条件，节点状态，可能的取值为：Primary、Secondary
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operation 操作详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 操作所在的节点名称
     * @param integer $MicrosecsRunning 操作已执行时间（ms）
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
        if (array_key_exists("OpId",$param) and $param["OpId"] !== null) {
            $this->OpId = $param["OpId"];
        }

        if (array_key_exists("Ns",$param) and $param["Ns"] !== null) {
            $this->Ns = $param["Ns"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("MicrosecsRunning",$param) and $param["MicrosecsRunning"] !== null) {
            $this->MicrosecsRunning = $param["MicrosecsRunning"];
        }
    }
}

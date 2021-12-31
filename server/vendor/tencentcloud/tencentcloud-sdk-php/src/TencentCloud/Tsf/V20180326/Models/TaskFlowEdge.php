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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流图中的边
 *
 * @method string getNodeId() 获取节点 ID
 * @method void setNodeId(string $NodeId) 设置节点 ID
 * @method string getChildNodeId() 获取子节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildNodeId(string $ChildNodeId) 设置子节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoreNode() 获取是否核心任务,Y/N
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreNode(string $CoreNode) 设置是否核心任务,Y/N
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeType() 获取边类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeType(string $EdgeType) 设置边类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeType() 获取任务节点类型
 * @method void setNodeType(string $NodeType) 设置任务节点类型
 * @method string getPositionX() 获取X轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositionX(string $PositionX) 设置X轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPositionY() 获取Y轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositionY(string $PositionY) 设置Y轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGraphId() 获取图 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGraphId(string $GraphId) 设置图 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowId() 获取工作流 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(string $FlowId) 设置工作流 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLogId() 获取任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLogId(string $TaskLogId) 设置任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFlowEdge extends AbstractModel
{
    /**
     * @var string 节点 ID
     */
    public $NodeId;

    /**
     * @var string 子节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildNodeId;

    /**
     * @var string 是否核心任务,Y/N
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreNode;

    /**
     * @var string 边类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeType;

    /**
     * @var string 任务节点类型
     */
    public $NodeType;

    /**
     * @var string X轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PositionX;

    /**
     * @var string Y轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PositionY;

    /**
     * @var string 图 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GraphId;

    /**
     * @var string 工作流 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLogId;

    /**
     * @param string $NodeId 节点 ID
     * @param string $ChildNodeId 子节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoreNode 是否核心任务,Y/N
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeType 边类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeType 任务节点类型
     * @param string $PositionX X轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PositionY Y轴坐标位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GraphId 图 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowId 工作流 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLogId 任务历史ID
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ChildNodeId",$param) and $param["ChildNodeId"] !== null) {
            $this->ChildNodeId = $param["ChildNodeId"];
        }

        if (array_key_exists("CoreNode",$param) and $param["CoreNode"] !== null) {
            $this->CoreNode = $param["CoreNode"];
        }

        if (array_key_exists("EdgeType",$param) and $param["EdgeType"] !== null) {
            $this->EdgeType = $param["EdgeType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PositionX",$param) and $param["PositionX"] !== null) {
            $this->PositionX = $param["PositionX"];
        }

        if (array_key_exists("PositionY",$param) and $param["PositionY"] !== null) {
            $this->PositionY = $param["PositionY"];
        }

        if (array_key_exists("GraphId",$param) and $param["GraphId"] !== null) {
            $this->GraphId = $param["GraphId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskLogId",$param) and $param["TaskLogId"] !== null) {
            $this->TaskLogId = $param["TaskLogId"];
        }
    }
}

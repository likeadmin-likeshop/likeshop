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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算环境信息
 *
 * @method string getEnvId() 获取计算环境ID
 * @method void setEnvId(string $EnvId) 设置计算环境ID
 * @method string getEnvName() 获取计算环境名称
 * @method void setEnvName(string $EnvName) 设置计算环境名称
 * @method Placement getPlacement() 获取位置信息
 * @method void setPlacement(Placement $Placement) 设置位置信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method ComputeNodeMetrics getComputeNodeMetrics() 获取计算节点统计指标
 * @method void setComputeNodeMetrics(ComputeNodeMetrics $ComputeNodeMetrics) 设置计算节点统计指标
 * @method string getEnvType() 获取计算环境类型
 * @method void setEnvType(string $EnvType) 设置计算环境类型
 * @method integer getDesiredComputeNodeCount() 获取计算节点期望个数
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置计算节点期望个数
 * @method string getResourceType() 获取计算环境资源类型，当前为CVM和CPM（黑石）
 * @method void setResourceType(string $ResourceType) 设置计算环境资源类型，当前为CVM和CPM（黑石）
 * @method string getNextAction() 获取下一步动作
 * @method void setNextAction(string $NextAction) 设置下一步动作
 * @method integer getAttachedComputeNodeCount() 获取用户添加到计算环境中的计算节点个数
 * @method void setAttachedComputeNodeCount(integer $AttachedComputeNodeCount) 设置用户添加到计算环境中的计算节点个数
 * @method array getTags() 获取计算环境绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置计算环境绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComputeEnvView extends AbstractModel
{
    /**
     * @var string 计算环境ID
     */
    public $EnvId;

    /**
     * @var string 计算环境名称
     */
    public $EnvName;

    /**
     * @var Placement 位置信息
     */
    public $Placement;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var ComputeNodeMetrics 计算节点统计指标
     */
    public $ComputeNodeMetrics;

    /**
     * @var string 计算环境类型
     */
    public $EnvType;

    /**
     * @var integer 计算节点期望个数
     */
    public $DesiredComputeNodeCount;

    /**
     * @var string 计算环境资源类型，当前为CVM和CPM（黑石）
     */
    public $ResourceType;

    /**
     * @var string 下一步动作
     */
    public $NextAction;

    /**
     * @var integer 用户添加到计算环境中的计算节点个数
     */
    public $AttachedComputeNodeCount;

    /**
     * @var array 计算环境绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $EnvId 计算环境ID
     * @param string $EnvName 计算环境名称
     * @param Placement $Placement 位置信息
     * @param string $CreateTime 创建时间
     * @param ComputeNodeMetrics $ComputeNodeMetrics 计算节点统计指标
     * @param string $EnvType 计算环境类型
     * @param integer $DesiredComputeNodeCount 计算节点期望个数
     * @param string $ResourceType 计算环境资源类型，当前为CVM和CPM（黑石）
     * @param string $NextAction 下一步动作
     * @param integer $AttachedComputeNodeCount 用户添加到计算环境中的计算节点个数
     * @param array $Tags 计算环境绑定的标签列表。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComputeNodeMetrics",$param) and $param["ComputeNodeMetrics"] !== null) {
            $this->ComputeNodeMetrics = new ComputeNodeMetrics();
            $this->ComputeNodeMetrics->deserialize($param["ComputeNodeMetrics"]);
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("NextAction",$param) and $param["NextAction"] !== null) {
            $this->NextAction = $param["NextAction"];
        }

        if (array_key_exists("AttachedComputeNodeCount",$param) and $param["AttachedComputeNodeCount"] !== null) {
            $this->AttachedComputeNodeCount = $param["AttachedComputeNodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

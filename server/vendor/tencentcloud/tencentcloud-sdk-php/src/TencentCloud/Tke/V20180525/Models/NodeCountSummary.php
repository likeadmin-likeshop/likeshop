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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点统计列表
 *
 * @method ManuallyAdded getManuallyAdded() 获取手动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManuallyAdded(ManuallyAdded $ManuallyAdded) 设置手动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method AutoscalingAdded getAutoscalingAdded() 获取自动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingAdded(AutoscalingAdded $AutoscalingAdded) 设置自动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeCountSummary extends AbstractModel
{
    /**
     * @var ManuallyAdded 手动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManuallyAdded;

    /**
     * @var AutoscalingAdded 自动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingAdded;

    /**
     * @param ManuallyAdded $ManuallyAdded 手动管理的节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param AutoscalingAdded $AutoscalingAdded 自动管理的节点
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
        if (array_key_exists("ManuallyAdded",$param) and $param["ManuallyAdded"] !== null) {
            $this->ManuallyAdded = new ManuallyAdded();
            $this->ManuallyAdded->deserialize($param["ManuallyAdded"]);
        }

        if (array_key_exists("AutoscalingAdded",$param) and $param["AutoscalingAdded"] !== null) {
            $this->AutoscalingAdded = new AutoscalingAdded();
            $this->AutoscalingAdded->deserialize($param["AutoscalingAdded"]);
        }
    }
}

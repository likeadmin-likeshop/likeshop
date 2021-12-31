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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器实例统计数据
 *
 * @method integer getActive() 获取活跃的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActive(integer $Active) 设置活跃的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesired() 获取期望的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesired(integer $Desired) 设置期望的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdle() 获取空闲的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdle(integer $Idle) 设置空闲的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxiNum() 获取服务器实例数最大限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxiNum(integer $MaxiNum) 设置服务器实例数最大限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMiniNum() 获取服务器实例数最小限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniNum(integer $MiniNum) 设置服务器实例数最小限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPending() 获取已开始创建，但未激活的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPending(integer $Pending) 设置已开始创建，但未激活的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTerminating() 获取结束中的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminating(integer $Terminating) 设置结束中的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceCounts extends AbstractModel
{
    /**
     * @var integer 活跃的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Active;

    /**
     * @var integer 期望的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desired;

    /**
     * @var integer 空闲的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Idle;

    /**
     * @var integer 服务器实例数最大限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxiNum;

    /**
     * @var integer 服务器实例数最小限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniNum;

    /**
     * @var integer 已开始创建，但未激活的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pending;

    /**
     * @var integer 结束中的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Terminating;

    /**
     * @param integer $Active 活跃的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Desired 期望的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Idle 空闲的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxiNum 服务器实例数最大限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MiniNum 服务器实例数最小限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pending 已开始创建，但未激活的服务器实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Terminating 结束中的服务器实例数
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
        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Desired",$param) and $param["Desired"] !== null) {
            $this->Desired = $param["Desired"];
        }

        if (array_key_exists("Idle",$param) and $param["Idle"] !== null) {
            $this->Idle = $param["Idle"];
        }

        if (array_key_exists("MaxiNum",$param) and $param["MaxiNum"] !== null) {
            $this->MaxiNum = $param["MaxiNum"];
        }

        if (array_key_exists("MiniNum",$param) and $param["MiniNum"] !== null) {
            $this->MiniNum = $param["MiniNum"];
        }

        if (array_key_exists("Pending",$param) and $param["Pending"] !== null) {
            $this->Pending = $param["Pending"];
        }

        if (array_key_exists("Terminating",$param) and $param["Terminating"] !== null) {
            $this->Terminating = $param["Terminating"];
        }
    }
}

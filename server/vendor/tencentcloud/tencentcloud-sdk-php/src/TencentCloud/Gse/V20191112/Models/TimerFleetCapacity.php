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
 * 定时器弹性伸缩策略
 *
 * @method string getFleetId() 获取扩缩容配置服务器舰队ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置扩缩容配置服务器舰队ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesiredInstances() 获取期望实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredInstances(integer $DesiredInstances) 设置期望实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinSize() 获取最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinSize(integer $MinSize) 设置最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxSize() 获取最大实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSize(integer $MaxSize) 设置最大实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingInterval() 获取伸缩容间隔，单位：分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingInterval(integer $ScalingInterval) 设置伸缩容间隔，单位：分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingType() 获取扩缩容类型（手动1，自动2、未定义0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingType(integer $ScalingType) 设置扩缩容类型（手动1，自动2、未定义0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetConfiguration getTargetConfiguration() 获取基于目标的扩展策略的设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetConfiguration(TargetConfiguration $TargetConfiguration) 设置基于目标的扩展策略的设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimerFleetCapacity extends AbstractModel
{
    /**
     * @var string 扩缩容配置服务器舰队ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var integer 期望实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredInstances;

    /**
     * @var integer 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinSize;

    /**
     * @var integer 最大实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSize;

    /**
     * @var integer 伸缩容间隔，单位：分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingInterval;

    /**
     * @var integer 扩缩容类型（手动1，自动2、未定义0）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingType;

    /**
     * @var TargetConfiguration 基于目标的扩展策略的设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetConfiguration;

    /**
     * @param string $FleetId 扩缩容配置服务器舰队ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DesiredInstances 期望实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinSize 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxSize 最大实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingInterval 伸缩容间隔，单位：分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingType 扩缩容类型（手动1，自动2、未定义0）
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetConfiguration $TargetConfiguration 基于目标的扩展策略的设置
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("DesiredInstances",$param) and $param["DesiredInstances"] !== null) {
            $this->DesiredInstances = $param["DesiredInstances"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("ScalingInterval",$param) and $param["ScalingInterval"] !== null) {
            $this->ScalingInterval = $param["ScalingInterval"];
        }

        if (array_key_exists("ScalingType",$param) and $param["ScalingType"] !== null) {
            $this->ScalingType = $param["ScalingType"];
        }

        if (array_key_exists("TargetConfiguration",$param) and $param["TargetConfiguration"] !== null) {
            $this->TargetConfiguration = new TargetConfiguration();
            $this->TargetConfiguration->deserialize($param["TargetConfiguration"]);
        }
    }
}

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
 * 定时器策略消息
 *
 * @method string getTimerId() 获取定时器ID，进行encode，填写时更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerId(string $TimerId) 设置定时器ID，进行encode，填写时更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimerName() 获取定时器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerName(string $TimerName) 设置定时器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimerStatus() 获取定时器状态(未定义0、未生效1、生效中2、已停止3、已过期4)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerStatus(integer $TimerStatus) 设置定时器状态(未定义0、未生效1、生效中2、已停止3、已过期4)
注意：此字段可能返回 null，表示取不到有效值。
 * @method TimerFleetCapacity getTimerFleetCapacity() 获取定时器弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerFleetCapacity(TimerFleetCapacity $TimerFleetCapacity) 设置定时器弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method TimerConfiguration getTimerConfiguration() 获取重复周期配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerConfiguration(TimerConfiguration $TimerConfiguration) 设置重复周期配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimerScalingPolicy extends AbstractModel
{
    /**
     * @var string 定时器ID，进行encode，填写时更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerId;

    /**
     * @var string 定时器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerName;

    /**
     * @var integer 定时器状态(未定义0、未生效1、生效中2、已停止3、已过期4)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerStatus;

    /**
     * @var TimerFleetCapacity 定时器弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerFleetCapacity;

    /**
     * @var TimerConfiguration 重复周期配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerConfiguration;

    /**
     * @param string $TimerId 定时器ID，进行encode，填写时更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimerName 定时器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimerStatus 定时器状态(未定义0、未生效1、生效中2、已停止3、已过期4)
注意：此字段可能返回 null，表示取不到有效值。
     * @param TimerFleetCapacity $TimerFleetCapacity 定时器弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param TimerConfiguration $TimerConfiguration 重复周期配置
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
        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }

        if (array_key_exists("TimerStatus",$param) and $param["TimerStatus"] !== null) {
            $this->TimerStatus = $param["TimerStatus"];
        }

        if (array_key_exists("TimerFleetCapacity",$param) and $param["TimerFleetCapacity"] !== null) {
            $this->TimerFleetCapacity = new TimerFleetCapacity();
            $this->TimerFleetCapacity->deserialize($param["TimerFleetCapacity"]);
        }

        if (array_key_exists("TimerConfiguration",$param) and $param["TimerConfiguration"] !== null) {
            $this->TimerConfiguration = new TimerConfiguration();
            $this->TimerConfiguration->deserialize($param["TimerConfiguration"]);
        }
    }
}

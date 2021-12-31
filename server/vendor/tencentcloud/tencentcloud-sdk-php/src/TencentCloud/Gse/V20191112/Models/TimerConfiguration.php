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
 * 重复周期配置
 *
 * @method integer getTimerType() 获取定时器重复周期类型（未定义0，单次1、按天2、按月3、按周4）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerType(integer $TimerType) 设置定时器重复周期类型（未定义0，单次1、按天2、按月3、按周4）
注意：此字段可能返回 null，表示取不到有效值。
 * @method TimerValue getTimerValue() 获取定时器取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimerValue(TimerValue $TimerValue) 设置定时器取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取定时器开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置定时器开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取定时器结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置定时器结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimerConfiguration extends AbstractModel
{
    /**
     * @var integer 定时器重复周期类型（未定义0，单次1、按天2、按月3、按周4）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerType;

    /**
     * @var TimerValue 定时器取值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimerValue;

    /**
     * @var string 定时器开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 定时器结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param integer $TimerType 定时器重复周期类型（未定义0，单次1、按天2、按月3、按周4）
注意：此字段可能返回 null，表示取不到有效值。
     * @param TimerValue $TimerValue 定时器取值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 定时器开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 定时器结束时间
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
        if (array_key_exists("TimerType",$param) and $param["TimerType"] !== null) {
            $this->TimerType = $param["TimerType"];
        }

        if (array_key_exists("TimerValue",$param) and $param["TimerValue"] !== null) {
            $this->TimerValue = new TimerValue();
            $this->TimerValue->deserialize($param["TimerValue"]);
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

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
 * 定时器取值配置
 *
 * @method integer getDay() 获取每X天，执行一次(重复周期-按天/单次)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDay(integer $Day) 设置每X天，执行一次(重复周期-按天/单次)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFromDay() 获取每月从第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromDay(integer $FromDay) 设置每月从第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToDay() 获取每月到第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToDay(integer $ToDay) 设置每月到第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeekDays() 获取重复周期-按周，周几（多个值,取值周一(1,2,3,4,5,6,7)周日）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekDays(array $WeekDays) 设置重复周期-按周，周几（多个值,取值周一(1,2,3,4,5,6,7)周日）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimerValue extends AbstractModel
{
    /**
     * @var integer 每X天，执行一次(重复周期-按天/单次)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Day;

    /**
     * @var integer 每月从第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromDay;

    /**
     * @var integer 每月到第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToDay;

    /**
     * @var array 重复周期-按周，周几（多个值,取值周一(1,2,3,4,5,6,7)周日）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekDays;

    /**
     * @param integer $Day 每X天，执行一次(重复周期-按天/单次)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FromDay 每月从第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToDay 每月到第x天，执行一次(重复周期-按月)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeekDays 重复周期-按周，周几（多个值,取值周一(1,2,3,4,5,6,7)周日）
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
        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }

        if (array_key_exists("FromDay",$param) and $param["FromDay"] !== null) {
            $this->FromDay = $param["FromDay"];
        }

        if (array_key_exists("ToDay",$param) and $param["ToDay"] !== null) {
            $this->ToDay = $param["ToDay"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }
    }
}

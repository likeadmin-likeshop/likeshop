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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 月经史
 *
 * @method string getLastMenstrualPeriod() 获取末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMenstrualPeriod(string $LastMenstrualPeriod) 设置末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenstrualFlow() 获取经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualFlow(string $MenstrualFlow) 设置经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenarcheAge() 获取月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenarcheAge(string $MenarcheAge) 设置月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenstruationOrNot() 获取是否来月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstruationOrNot(string $MenstruationOrNot) 设置是否来月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenstrualCycles() 获取月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualCycles(string $MenstrualCycles) 设置月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenstrualPeriod() 获取月经持续天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualPeriod(string $MenstrualPeriod) 设置月经持续天数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MenstrualMedicalHistory extends AbstractModel
{
    /**
     * @var string 末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMenstrualPeriod;

    /**
     * @var string 经量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualFlow;

    /**
     * @var string 月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenarcheAge;

    /**
     * @var string 是否来月经
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstruationOrNot;

    /**
     * @var string 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualCycles;

    /**
     * @var string 月经持续天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualPeriod;

    /**
     * @param string $LastMenstrualPeriod 末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenstrualFlow 经量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenarcheAge 月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenstruationOrNot 是否来月经
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenstrualCycles 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenstrualPeriod 月经持续天数
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
        if (array_key_exists("LastMenstrualPeriod",$param) and $param["LastMenstrualPeriod"] !== null) {
            $this->LastMenstrualPeriod = $param["LastMenstrualPeriod"];
        }

        if (array_key_exists("MenstrualFlow",$param) and $param["MenstrualFlow"] !== null) {
            $this->MenstrualFlow = $param["MenstrualFlow"];
        }

        if (array_key_exists("MenarcheAge",$param) and $param["MenarcheAge"] !== null) {
            $this->MenarcheAge = $param["MenarcheAge"];
        }

        if (array_key_exists("MenstruationOrNot",$param) and $param["MenstruationOrNot"] !== null) {
            $this->MenstruationOrNot = $param["MenstruationOrNot"];
        }

        if (array_key_exists("MenstrualCycles",$param) and $param["MenstrualCycles"] !== null) {
            $this->MenstrualCycles = $param["MenstrualCycles"];
        }

        if (array_key_exists("MenstrualPeriod",$param) and $param["MenstrualPeriod"] !== null) {
            $this->MenstrualPeriod = $param["MenstrualPeriod"];
        }
    }
}

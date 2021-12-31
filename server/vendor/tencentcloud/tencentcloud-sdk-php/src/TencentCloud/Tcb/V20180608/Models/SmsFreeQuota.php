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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信免费量
 *
 * @method integer getFreeQuota() 获取免费量总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeQuota(integer $FreeQuota) 设置免费量总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalUsedQuota() 获取共计已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedQuota(integer $TotalUsedQuota) 设置共计已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleStart() 获取免费周期起点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStart(string $CycleStart) 设置免费周期起点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleEnd() 获取免费周期终点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleEnd(string $CycleEnd) 设置免费周期终点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTodayUsedQuota() 获取今天已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTodayUsedQuota(integer $TodayUsedQuota) 设置今天已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmsFreeQuota extends AbstractModel
{
    /**
     * @var integer 免费量总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeQuota;

    /**
     * @var integer 共计已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedQuota;

    /**
     * @var string 免费周期起点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStart;

    /**
     * @var string 免费周期终点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleEnd;

    /**
     * @var integer 今天已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TodayUsedQuota;

    /**
     * @param integer $FreeQuota 免费量总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalUsedQuota 共计已使用总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleStart 免费周期起点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleEnd 免费周期终点，0000-00-00 00:00:00 形式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TodayUsedQuota 今天已使用总条数
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
        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("TotalUsedQuota",$param) and $param["TotalUsedQuota"] !== null) {
            $this->TotalUsedQuota = $param["TotalUsedQuota"];
        }

        if (array_key_exists("CycleStart",$param) and $param["CycleStart"] !== null) {
            $this->CycleStart = $param["CycleStart"];
        }

        if (array_key_exists("CycleEnd",$param) and $param["CycleEnd"] !== null) {
            $this->CycleEnd = $param["CycleEnd"];
        }

        if (array_key_exists("TodayUsedQuota",$param) and $param["TodayUsedQuota"] !== null) {
            $this->TodayUsedQuota = $param["TodayUsedQuota"];
        }
    }
}

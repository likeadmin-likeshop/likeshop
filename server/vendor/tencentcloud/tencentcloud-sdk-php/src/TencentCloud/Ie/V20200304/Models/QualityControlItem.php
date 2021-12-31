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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质检结果项
 *
 * @method integer getConfidence() 获取置信度，取值范围是 0 到 100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(integer $Confidence) 设置置信度，取值范围是 0 到 100
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStartTimeOffset() 获取出现的起始时间戳，秒
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置出现的起始时间戳，秒
 * @method float getEndTimeOffset() 获取出现的结束时间戳，秒
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置出现的结束时间戳，秒
 * @method array getAreaCoordsSet() 获取区域坐标(px)，即左上角坐标、右下角坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCoordsSet(array $AreaCoordsSet) 设置区域坐标(px)，即左上角坐标、右下角坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityControlItem extends AbstractModel
{
    /**
     * @var integer 置信度，取值范围是 0 到 100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var float 出现的起始时间戳，秒
     */
    public $StartTimeOffset;

    /**
     * @var float 出现的结束时间戳，秒
     */
    public $EndTimeOffset;

    /**
     * @var array 区域坐标(px)，即左上角坐标、右下角坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCoordsSet;

    /**
     * @param integer $Confidence 置信度，取值范围是 0 到 100
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $StartTimeOffset 出现的起始时间戳，秒
     * @param float $EndTimeOffset 出现的结束时间戳，秒
     * @param array $AreaCoordsSet 区域坐标(px)，即左上角坐标、右下角坐标
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("AreaCoordsSet",$param) and $param["AreaCoordsSet"] !== null) {
            $this->AreaCoordsSet = $param["AreaCoordsSet"];
        }
    }
}

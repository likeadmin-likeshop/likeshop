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
 * 语音字幕识别项
 *
 * @method string getId() 获取语音识别结果
 * @method void setId(string $Id) 设置语音识别结果
 * @method string getZh() 获取中文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZh(string $Zh) 设置中文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEn() 获取英文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEn(string $En) 设置英文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartPts() 获取语句起始时间戳PTS(ms)
 * @method void setStartPts(integer $StartPts) 设置语句起始时间戳PTS(ms)
 * @method integer getEndPts() 获取语句结束时间戳PTS(ms)
 * @method void setEndPts(integer $EndPts) 设置语句结束时间戳PTS(ms)
 * @method string getPeriod() 获取字符串形式的起始结束时间
 * @method void setPeriod(string $Period) 设置字符串形式的起始结束时间
 * @method integer getConfidence() 获取结果的置信度（百分制）
 * @method void setConfidence(integer $Confidence) 设置结果的置信度（百分制）
 * @method boolean getEndFlag() 获取当前语句是否结束
 * @method void setEndFlag(boolean $EndFlag) 设置当前语句是否结束
 * @method string getPuncEndTs() 获取语句分割时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPuncEndTs(string $PuncEndTs) 设置语句分割时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubtitleItem extends AbstractModel
{
    /**
     * @var string 语音识别结果
     */
    public $Id;

    /**
     * @var string 中文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zh;

    /**
     * @var string 英文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $En;

    /**
     * @var integer 语句起始时间戳PTS(ms)
     */
    public $StartPts;

    /**
     * @var integer 语句结束时间戳PTS(ms)
     */
    public $EndPts;

    /**
     * @var string 字符串形式的起始结束时间
     */
    public $Period;

    /**
     * @var integer 结果的置信度（百分制）
     */
    public $Confidence;

    /**
     * @var boolean 当前语句是否结束
     */
    public $EndFlag;

    /**
     * @var string 语句分割时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PuncEndTs;

    /**
     * @param string $Id 语音识别结果
     * @param string $Zh 中文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $En 英文翻译结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartPts 语句起始时间戳PTS(ms)
     * @param integer $EndPts 语句结束时间戳PTS(ms)
     * @param string $Period 字符串形式的起始结束时间
     * @param integer $Confidence 结果的置信度（百分制）
     * @param boolean $EndFlag 当前语句是否结束
     * @param string $PuncEndTs 语句分割时间戳
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Zh",$param) and $param["Zh"] !== null) {
            $this->Zh = $param["Zh"];
        }

        if (array_key_exists("En",$param) and $param["En"] !== null) {
            $this->En = $param["En"];
        }

        if (array_key_exists("StartPts",$param) and $param["StartPts"] !== null) {
            $this->StartPts = $param["StartPts"];
        }

        if (array_key_exists("EndPts",$param) and $param["EndPts"] !== null) {
            $this->EndPts = $param["EndPts"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("EndFlag",$param) and $param["EndFlag"] !== null) {
            $this->EndFlag = $param["EndFlag"];
        }

        if (array_key_exists("PuncEndTs",$param) and $param["PuncEndTs"] !== null) {
            $this->PuncEndTs = $param["PuncEndTs"];
        }
    }
}

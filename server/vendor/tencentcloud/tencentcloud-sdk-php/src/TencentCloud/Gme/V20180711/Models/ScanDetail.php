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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音检测详情
 *
 * @method string getLabel() 获取违规场景，参照<a href="https://cloud.tencent.com/document/product/607/37622#Label_Value">Label</a>定义
 * @method void setLabel(string $Label) 设置违规场景，参照<a href="https://cloud.tencent.com/document/product/607/37622#Label_Value">Label</a>定义
 * @method string getRate() 获取该场景下概率[0.00,100.00],分值越大违规概率越高
 * @method void setRate(string $Rate) 设置该场景下概率[0.00,100.00],分值越大违规概率越高
 * @method string getKeyWord() 获取违规关键字
 * @method void setKeyWord(string $KeyWord) 设置违规关键字
 * @method integer getStartTime() 获取关键字在音频的开始时间，从0开始的偏移量，单位为毫秒
 * @method void setStartTime(integer $StartTime) 设置关键字在音频的开始时间，从0开始的偏移量，单位为毫秒
 * @method integer getEndTime() 获取关键字在音频的结束时间，从0开始的偏移量,，单位为毫秒
 * @method void setEndTime(integer $EndTime) 设置关键字在音频的结束时间，从0开始的偏移量,，单位为毫秒
 */
class ScanDetail extends AbstractModel
{
    /**
     * @var string 违规场景，参照<a href="https://cloud.tencent.com/document/product/607/37622#Label_Value">Label</a>定义
     */
    public $Label;

    /**
     * @var string 该场景下概率[0.00,100.00],分值越大违规概率越高
     */
    public $Rate;

    /**
     * @var string 违规关键字
     */
    public $KeyWord;

    /**
     * @var integer 关键字在音频的开始时间，从0开始的偏移量，单位为毫秒
     */
    public $StartTime;

    /**
     * @var integer 关键字在音频的结束时间，从0开始的偏移量,，单位为毫秒
     */
    public $EndTime;

    /**
     * @param string $Label 违规场景，参照<a href="https://cloud.tencent.com/document/product/607/37622#Label_Value">Label</a>定义
     * @param string $Rate 该场景下概率[0.00,100.00],分值越大违规概率越高
     * @param string $KeyWord 违规关键字
     * @param integer $StartTime 关键字在音频的开始时间，从0开始的偏移量，单位为毫秒
     * @param integer $EndTime 关键字在音频的结束时间，从0开始的偏移量,，单位为毫秒
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

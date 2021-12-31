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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前音频的统计结果
 *
 * @method float getAvgSpeed() 获取当前音频的平均语速
 * @method void setAvgSpeed(float $AvgSpeed) 设置当前音频的平均语速
 * @method float getAvgVolume() 获取Vad的平均音量
 * @method void setAvgVolume(float $AvgVolume) 设置Vad的平均音量
 * @method float getMaxVolume() 获取Vad的最大音量
 * @method void setMaxVolume(float $MaxVolume) 设置Vad的最大音量
 * @method float getMinVolume() 获取Vad的最小音量
 * @method void setMinVolume(float $MinVolume) 设置Vad的最小音量
 * @method integer getMuteDuration() 获取当前音频的非发音时长
 * @method void setMuteDuration(integer $MuteDuration) 设置当前音频的非发音时长
 * @method integer getSoundDuration() 获取当前音频的发音时长
 * @method void setSoundDuration(integer $SoundDuration) 设置当前音频的发音时长
 * @method integer getTotalDuration() 获取当前音频的总时长
 * @method void setTotalDuration(integer $TotalDuration) 设置当前音频的总时长
 * @method integer getVadNum() 获取当前音频的句子总数
 * @method void setVadNum(integer $VadNum) 设置当前音频的句子总数
 * @method integer getWordNum() 获取当前音频的单词总数
 * @method void setWordNum(integer $WordNum) 设置当前音频的单词总数
 */
class ASRStat extends AbstractModel
{
    /**
     * @var float 当前音频的平均语速
     */
    public $AvgSpeed;

    /**
     * @var float Vad的平均音量
     */
    public $AvgVolume;

    /**
     * @var float Vad的最大音量
     */
    public $MaxVolume;

    /**
     * @var float Vad的最小音量
     */
    public $MinVolume;

    /**
     * @var integer 当前音频的非发音时长
     */
    public $MuteDuration;

    /**
     * @var integer 当前音频的发音时长
     */
    public $SoundDuration;

    /**
     * @var integer 当前音频的总时长
     */
    public $TotalDuration;

    /**
     * @var integer 当前音频的句子总数
     */
    public $VadNum;

    /**
     * @var integer 当前音频的单词总数
     */
    public $WordNum;

    /**
     * @param float $AvgSpeed 当前音频的平均语速
     * @param float $AvgVolume Vad的平均音量
     * @param float $MaxVolume Vad的最大音量
     * @param float $MinVolume Vad的最小音量
     * @param integer $MuteDuration 当前音频的非发音时长
     * @param integer $SoundDuration 当前音频的发音时长
     * @param integer $TotalDuration 当前音频的总时长
     * @param integer $VadNum 当前音频的句子总数
     * @param integer $WordNum 当前音频的单词总数
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
        if (array_key_exists("AvgSpeed",$param) and $param["AvgSpeed"] !== null) {
            $this->AvgSpeed = $param["AvgSpeed"];
        }

        if (array_key_exists("AvgVolume",$param) and $param["AvgVolume"] !== null) {
            $this->AvgVolume = $param["AvgVolume"];
        }

        if (array_key_exists("MaxVolume",$param) and $param["MaxVolume"] !== null) {
            $this->MaxVolume = $param["MaxVolume"];
        }

        if (array_key_exists("MinVolume",$param) and $param["MinVolume"] !== null) {
            $this->MinVolume = $param["MinVolume"];
        }

        if (array_key_exists("MuteDuration",$param) and $param["MuteDuration"] !== null) {
            $this->MuteDuration = $param["MuteDuration"];
        }

        if (array_key_exists("SoundDuration",$param) and $param["SoundDuration"] !== null) {
            $this->SoundDuration = $param["SoundDuration"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("VadNum",$param) and $param["VadNum"] !== null) {
            $this->VadNum = $param["VadNum"];
        }

        if (array_key_exists("WordNum",$param) and $param["WordNum"] !== null) {
            $this->WordNum = $param["WordNum"];
        }
    }
}

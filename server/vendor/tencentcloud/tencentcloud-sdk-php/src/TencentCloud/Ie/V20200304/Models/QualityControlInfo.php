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
 * 媒体质检任务参数信息
 *
 * @method integer getInterval() 获取对流进行截图的间隔ms，默认1000ms
 * @method void setInterval(integer $Interval) 设置对流进行截图的间隔ms，默认1000ms
 * @method boolean getVideoShot() 获取是否保存截图
 * @method void setVideoShot(boolean $VideoShot) 设置是否保存截图
 * @method boolean getJitter() 获取是否检测抖动重影
 * @method void setJitter(boolean $Jitter) 设置是否检测抖动重影
 * @method boolean getBlur() 获取是否检测模糊
 * @method void setBlur(boolean $Blur) 设置是否检测模糊
 * @method boolean getAbnormalLighting() 获取是否检测低光照、过曝
 * @method void setAbnormalLighting(boolean $AbnormalLighting) 设置是否检测低光照、过曝
 * @method boolean getCrashScreen() 获取是否检测花屏
 * @method void setCrashScreen(boolean $CrashScreen) 设置是否检测花屏
 * @method boolean getBlackWhiteEdge() 获取是否检测黑边、白边、黑屏、白屏、绿屏
 * @method void setBlackWhiteEdge(boolean $BlackWhiteEdge) 设置是否检测黑边、白边、黑屏、白屏、绿屏
 * @method boolean getNoise() 获取是否检测噪点
 * @method void setNoise(boolean $Noise) 设置是否检测噪点
 * @method boolean getMosaic() 获取是否检测马赛克
 * @method void setMosaic(boolean $Mosaic) 设置是否检测马赛克
 * @method boolean getQRCode() 获取是否检测二维码，包括小程序码、条形码
 * @method void setQRCode(boolean $QRCode) 设置是否检测二维码，包括小程序码、条形码
 * @method boolean getQualityEvaluation() 获取是否开启画面质量评价
 * @method void setQualityEvaluation(boolean $QualityEvaluation) 设置是否开启画面质量评价
 * @method integer getQualityEvalScore() 获取画面质量评价过滤阈值，结果只返回低于阈值的时间段，默认60
 * @method void setQualityEvalScore(integer $QualityEvalScore) 设置画面质量评价过滤阈值，结果只返回低于阈值的时间段，默认60
 * @method boolean getVoice() 获取是否检测视频音频，包含静音、低音、爆音
 * @method void setVoice(boolean $Voice) 设置是否检测视频音频，包含静音、低音、爆音
 */
class QualityControlInfo extends AbstractModel
{
    /**
     * @var integer 对流进行截图的间隔ms，默认1000ms
     */
    public $Interval;

    /**
     * @var boolean 是否保存截图
     */
    public $VideoShot;

    /**
     * @var boolean 是否检测抖动重影
     */
    public $Jitter;

    /**
     * @var boolean 是否检测模糊
     */
    public $Blur;

    /**
     * @var boolean 是否检测低光照、过曝
     */
    public $AbnormalLighting;

    /**
     * @var boolean 是否检测花屏
     */
    public $CrashScreen;

    /**
     * @var boolean 是否检测黑边、白边、黑屏、白屏、绿屏
     */
    public $BlackWhiteEdge;

    /**
     * @var boolean 是否检测噪点
     */
    public $Noise;

    /**
     * @var boolean 是否检测马赛克
     */
    public $Mosaic;

    /**
     * @var boolean 是否检测二维码，包括小程序码、条形码
     */
    public $QRCode;

    /**
     * @var boolean 是否开启画面质量评价
     */
    public $QualityEvaluation;

    /**
     * @var integer 画面质量评价过滤阈值，结果只返回低于阈值的时间段，默认60
     */
    public $QualityEvalScore;

    /**
     * @var boolean 是否检测视频音频，包含静音、低音、爆音
     */
    public $Voice;

    /**
     * @param integer $Interval 对流进行截图的间隔ms，默认1000ms
     * @param boolean $VideoShot 是否保存截图
     * @param boolean $Jitter 是否检测抖动重影
     * @param boolean $Blur 是否检测模糊
     * @param boolean $AbnormalLighting 是否检测低光照、过曝
     * @param boolean $CrashScreen 是否检测花屏
     * @param boolean $BlackWhiteEdge 是否检测黑边、白边、黑屏、白屏、绿屏
     * @param boolean $Noise 是否检测噪点
     * @param boolean $Mosaic 是否检测马赛克
     * @param boolean $QRCode 是否检测二维码，包括小程序码、条形码
     * @param boolean $QualityEvaluation 是否开启画面质量评价
     * @param integer $QualityEvalScore 画面质量评价过滤阈值，结果只返回低于阈值的时间段，默认60
     * @param boolean $Voice 是否检测视频音频，包含静音、低音、爆音
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("VideoShot",$param) and $param["VideoShot"] !== null) {
            $this->VideoShot = $param["VideoShot"];
        }

        if (array_key_exists("Jitter",$param) and $param["Jitter"] !== null) {
            $this->Jitter = $param["Jitter"];
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = $param["Blur"];
        }

        if (array_key_exists("AbnormalLighting",$param) and $param["AbnormalLighting"] !== null) {
            $this->AbnormalLighting = $param["AbnormalLighting"];
        }

        if (array_key_exists("CrashScreen",$param) and $param["CrashScreen"] !== null) {
            $this->CrashScreen = $param["CrashScreen"];
        }

        if (array_key_exists("BlackWhiteEdge",$param) and $param["BlackWhiteEdge"] !== null) {
            $this->BlackWhiteEdge = $param["BlackWhiteEdge"];
        }

        if (array_key_exists("Noise",$param) and $param["Noise"] !== null) {
            $this->Noise = $param["Noise"];
        }

        if (array_key_exists("Mosaic",$param) and $param["Mosaic"] !== null) {
            $this->Mosaic = $param["Mosaic"];
        }

        if (array_key_exists("QRCode",$param) and $param["QRCode"] !== null) {
            $this->QRCode = $param["QRCode"];
        }

        if (array_key_exists("QualityEvaluation",$param) and $param["QualityEvaluation"] !== null) {
            $this->QualityEvaluation = $param["QualityEvaluation"];
        }

        if (array_key_exists("QualityEvalScore",$param) and $param["QualityEvalScore"] !== null) {
            $this->QualityEvalScore = $param["QualityEvalScore"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = $param["Voice"];
        }
    }
}

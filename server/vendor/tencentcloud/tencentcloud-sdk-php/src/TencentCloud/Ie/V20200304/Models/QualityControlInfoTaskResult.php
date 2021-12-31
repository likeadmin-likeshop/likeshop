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
 * 媒体质检结果信息
 *
 * @method string getTaskId() 获取质检任务 ID
 * @method void setTaskId(string $TaskId) 设置质检任务 ID
 * @method integer getStatus() 获取质检任务状态。
1：执行中；2：成功；3：失败
 * @method void setStatus(integer $Status) 设置质检任务状态。
1：执行中；2：成功；3：失败
 * @method integer getProgress() 获取表示处理进度百分比
 * @method void setProgress(integer $Progress) 设置表示处理进度百分比
 * @method integer getUsedTime() 获取处理时长(s)
 * @method void setUsedTime(integer $UsedTime) 设置处理时长(s)
 * @method integer getDuration() 获取计费时长(s)
 * @method void setDuration(integer $Duration) 设置计费时长(s)
 * @method boolean getNoAudio() 获取为true时表示视频无音频轨
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoAudio(boolean $NoAudio) 设置为true时表示视频无音频轨
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNoVideo() 获取为true时表示视频无视频轨
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoVideo(boolean $NoVideo) 设置为true时表示视频无视频轨
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityEvaluationScore() 获取视频无参考质量打分，百分制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) 设置视频无参考质量打分，百分制
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityEvaluationResults() 获取视频画面无参考评分低于阈值的时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEvaluationResults(array $QualityEvaluationResults) 设置视频画面无参考评分低于阈值的时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJitterResults() 获取视频画面抖动时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJitterResults(array $JitterResults) 设置视频画面抖动时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBlurResults() 获取视频画面模糊时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlurResults(array $BlurResults) 设置视频画面模糊时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAbnormalLightingResults() 获取视频画面低光、过曝时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalLightingResults(array $AbnormalLightingResults) 设置视频画面低光、过曝时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCrashScreenResults() 获取视频画面花屏时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrashScreenResults(array $CrashScreenResults) 设置视频画面花屏时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBlackWhiteEdgeResults() 获取视频画面黑边、白边、黑屏、白屏、纯色屏时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlackWhiteEdgeResults(array $BlackWhiteEdgeResults) 设置视频画面黑边、白边、黑屏、白屏、纯色屏时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoiseResults() 获取视频画面有噪点时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoiseResults(array $NoiseResults) 设置视频画面有噪点时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMosaicResults() 获取视频画面有马赛克时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMosaicResults(array $MosaicResults) 设置视频画面有马赛克时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQRCodeResults() 获取视频画面有二维码的时间段，包括小程序码、条形码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQRCodeResults(array $QRCodeResults) 设置视频画面有二维码的时间段，包括小程序码、条形码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVoiceResults() 获取视频音频异常时间段，包括静音、低音、爆音
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceResults(array $VoiceResults) 设置视频音频异常时间段，包括静音、低音、爆音
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取任务错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置任务错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityControlInfoTaskResult extends AbstractModel
{
    /**
     * @var string 质检任务 ID
     */
    public $TaskId;

    /**
     * @var integer 质检任务状态。
1：执行中；2：成功；3：失败
     */
    public $Status;

    /**
     * @var integer 表示处理进度百分比
     */
    public $Progress;

    /**
     * @var integer 处理时长(s)
     */
    public $UsedTime;

    /**
     * @var integer 计费时长(s)
     */
    public $Duration;

    /**
     * @var boolean 为true时表示视频无音频轨
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoAudio;

    /**
     * @var boolean 为true时表示视频无视频轨
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoVideo;

    /**
     * @var integer 视频无参考质量打分，百分制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEvaluationScore;

    /**
     * @var array 视频画面无参考评分低于阈值的时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEvaluationResults;

    /**
     * @var array 视频画面抖动时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JitterResults;

    /**
     * @var array 视频画面模糊时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlurResults;

    /**
     * @var array 视频画面低光、过曝时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalLightingResults;

    /**
     * @var array 视频画面花屏时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrashScreenResults;

    /**
     * @var array 视频画面黑边、白边、黑屏、白屏、纯色屏时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlackWhiteEdgeResults;

    /**
     * @var array 视频画面有噪点时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoiseResults;

    /**
     * @var array 视频画面有马赛克时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MosaicResults;

    /**
     * @var array 视频画面有二维码的时间段，包括小程序码、条形码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QRCodeResults;

    /**
     * @var array 视频音频异常时间段，包括静音、低音、爆音
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceResults;

    /**
     * @var integer 任务错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @param string $TaskId 质检任务 ID
     * @param integer $Status 质检任务状态。
1：执行中；2：成功；3：失败
     * @param integer $Progress 表示处理进度百分比
     * @param integer $UsedTime 处理时长(s)
     * @param integer $Duration 计费时长(s)
     * @param boolean $NoAudio 为true时表示视频无音频轨
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NoVideo 为true时表示视频无视频轨
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityEvaluationScore 视频无参考质量打分，百分制
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityEvaluationResults 视频画面无参考评分低于阈值的时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $JitterResults 视频画面抖动时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BlurResults 视频画面模糊时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AbnormalLightingResults 视频画面低光、过曝时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CrashScreenResults 视频画面花屏时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BlackWhiteEdgeResults 视频画面黑边、白边、黑屏、白屏、纯色屏时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoiseResults 视频画面有噪点时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MosaicResults 视频画面有马赛克时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QRCodeResults 视频画面有二维码的时间段，包括小程序码、条形码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VoiceResults 视频音频异常时间段，包括静音、低音、爆音
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode 任务错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 任务错误信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("NoAudio",$param) and $param["NoAudio"] !== null) {
            $this->NoAudio = $param["NoAudio"];
        }

        if (array_key_exists("NoVideo",$param) and $param["NoVideo"] !== null) {
            $this->NoVideo = $param["NoVideo"];
        }

        if (array_key_exists("QualityEvaluationScore",$param) and $param["QualityEvaluationScore"] !== null) {
            $this->QualityEvaluationScore = $param["QualityEvaluationScore"];
        }

        if (array_key_exists("QualityEvaluationResults",$param) and $param["QualityEvaluationResults"] !== null) {
            $this->QualityEvaluationResults = [];
            foreach ($param["QualityEvaluationResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->QualityEvaluationResults, $obj);
            }
        }

        if (array_key_exists("JitterResults",$param) and $param["JitterResults"] !== null) {
            $this->JitterResults = [];
            foreach ($param["JitterResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->JitterResults, $obj);
            }
        }

        if (array_key_exists("BlurResults",$param) and $param["BlurResults"] !== null) {
            $this->BlurResults = [];
            foreach ($param["BlurResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->BlurResults, $obj);
            }
        }

        if (array_key_exists("AbnormalLightingResults",$param) and $param["AbnormalLightingResults"] !== null) {
            $this->AbnormalLightingResults = [];
            foreach ($param["AbnormalLightingResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->AbnormalLightingResults, $obj);
            }
        }

        if (array_key_exists("CrashScreenResults",$param) and $param["CrashScreenResults"] !== null) {
            $this->CrashScreenResults = [];
            foreach ($param["CrashScreenResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->CrashScreenResults, $obj);
            }
        }

        if (array_key_exists("BlackWhiteEdgeResults",$param) and $param["BlackWhiteEdgeResults"] !== null) {
            $this->BlackWhiteEdgeResults = [];
            foreach ($param["BlackWhiteEdgeResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->BlackWhiteEdgeResults, $obj);
            }
        }

        if (array_key_exists("NoiseResults",$param) and $param["NoiseResults"] !== null) {
            $this->NoiseResults = [];
            foreach ($param["NoiseResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->NoiseResults, $obj);
            }
        }

        if (array_key_exists("MosaicResults",$param) and $param["MosaicResults"] !== null) {
            $this->MosaicResults = [];
            foreach ($param["MosaicResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->MosaicResults, $obj);
            }
        }

        if (array_key_exists("QRCodeResults",$param) and $param["QRCodeResults"] !== null) {
            $this->QRCodeResults = [];
            foreach ($param["QRCodeResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->QRCodeResults, $obj);
            }
        }

        if (array_key_exists("VoiceResults",$param) and $param["VoiceResults"] !== null) {
            $this->VoiceResults = [];
            foreach ($param["VoiceResults"] as $key => $value){
                $obj = new QualityControlResultItems();
                $obj->deserialize($value);
                array_push($this->VoiceResults, $obj);
            }
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}

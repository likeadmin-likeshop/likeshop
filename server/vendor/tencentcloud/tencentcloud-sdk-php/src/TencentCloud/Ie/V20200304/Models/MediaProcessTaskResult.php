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
 * 编辑处理/任务处理结果
 *
 * @method string getTaskId() 获取编辑处理任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置编辑处理任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取编辑处理任务类型，取值：
MediaEditing：视频编辑（待上线）；
MediaCutting：视频剪切；
MediaJoining：视频拼接。
MediaRecognition：媒体识别；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置编辑处理任务类型，取值：
MediaEditing：视频编辑（待上线）；
MediaCutting：视频剪切；
MediaJoining：视频拼接。
MediaRecognition：媒体识别；
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取处理进度，范围：[0,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置处理进度，范围：[0,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态：
1100：等待中；
1200：执行中；
2000：成功；
5000：失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态：
1100：等待中；
1200：执行中；
2000：成功；
5000：失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取任务错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置任务错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取任务错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置任务错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaCuttingTaskResult getMediaCuttingTaskResult() 获取剪切任务处理结果，当Type=MediaCutting时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaCuttingTaskResult(MediaCuttingTaskResult $MediaCuttingTaskResult) 设置剪切任务处理结果，当Type=MediaCutting时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaJoiningTaskResult getMediaJoiningTaskResult() 获取拼接任务处理结果，当Type=MediaJoining时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaJoiningTaskResult(MediaJoiningTaskResult $MediaJoiningTaskResult) 设置拼接任务处理结果，当Type=MediaJoining时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaRecognitionTaskResult getMediaRecognitionTaskResult() 获取媒体识别任务处理结果，当Type=MediaRecognition时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaRecognitionTaskResult(MediaRecognitionTaskResult $MediaRecognitionTaskResult) 设置媒体识别任务处理结果，当Type=MediaRecognition时才有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string 编辑处理任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 编辑处理任务类型，取值：
MediaEditing：视频编辑（待上线）；
MediaCutting：视频剪切；
MediaJoining：视频拼接。
MediaRecognition：媒体识别；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 处理进度，范围：[0,100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var integer 任务状态：
1100：等待中；
1200：执行中；
2000：成功；
5000：失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 任务错误码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 任务错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var MediaCuttingTaskResult 剪切任务处理结果，当Type=MediaCutting时才有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaCuttingTaskResult;

    /**
     * @var MediaJoiningTaskResult 拼接任务处理结果，当Type=MediaJoining时才有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaJoiningTaskResult;

    /**
     * @var MediaRecognitionTaskResult 媒体识别任务处理结果，当Type=MediaRecognition时才有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaRecognitionTaskResult;

    /**
     * @param string $TaskId 编辑处理任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 编辑处理任务类型，取值：
MediaEditing：视频编辑（待上线）；
MediaCutting：视频剪切；
MediaJoining：视频拼接。
MediaRecognition：媒体识别；
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 处理进度，范围：[0,100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态：
1100：等待中；
1200：执行中；
2000：成功；
5000：失败。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode 任务错误码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 任务错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaCuttingTaskResult $MediaCuttingTaskResult 剪切任务处理结果，当Type=MediaCutting时才有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaJoiningTaskResult $MediaJoiningTaskResult 拼接任务处理结果，当Type=MediaJoining时才有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaRecognitionTaskResult $MediaRecognitionTaskResult 媒体识别任务处理结果，当Type=MediaRecognition时才有效。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("MediaCuttingTaskResult",$param) and $param["MediaCuttingTaskResult"] !== null) {
            $this->MediaCuttingTaskResult = new MediaCuttingTaskResult();
            $this->MediaCuttingTaskResult->deserialize($param["MediaCuttingTaskResult"]);
        }

        if (array_key_exists("MediaJoiningTaskResult",$param) and $param["MediaJoiningTaskResult"] !== null) {
            $this->MediaJoiningTaskResult = new MediaJoiningTaskResult();
            $this->MediaJoiningTaskResult->deserialize($param["MediaJoiningTaskResult"]);
        }

        if (array_key_exists("MediaRecognitionTaskResult",$param) and $param["MediaRecognitionTaskResult"] !== null) {
            $this->MediaRecognitionTaskResult = new MediaRecognitionTaskResult();
            $this->MediaRecognitionTaskResult->deserialize($param["MediaRecognitionTaskResult"]);
        }
    }
}

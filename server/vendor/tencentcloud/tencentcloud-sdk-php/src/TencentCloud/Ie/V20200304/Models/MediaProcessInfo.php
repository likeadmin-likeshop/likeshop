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
 * 编辑处理/任务信息
 *
 * @method string getType() 获取编辑处理任务类型，可选值：
MediaEditing：媒体编辑（待上线）；
MediaCutting：媒体剪切；
MediaJoining：媒体拼接。
MediaRecognition: 媒体识别。
 * @method void setType(string $Type) 设置编辑处理任务类型，可选值：
MediaEditing：媒体编辑（待上线）；
MediaCutting：媒体剪切；
MediaJoining：媒体拼接。
MediaRecognition: 媒体识别。
 * @method MediaCuttingInfo getMediaCuttingInfo() 获取视频剪切任务参数，Type=MediaCutting时必选。
 * @method void setMediaCuttingInfo(MediaCuttingInfo $MediaCuttingInfo) 设置视频剪切任务参数，Type=MediaCutting时必选。
 * @method MediaJoiningInfo getMediaJoiningInfo() 获取视频拼接任务参数，Type=MediaJoining时必选。
 * @method void setMediaJoiningInfo(MediaJoiningInfo $MediaJoiningInfo) 设置视频拼接任务参数，Type=MediaJoining时必选。
 * @method MediaRecognitionInfo getMediaRecognitionInfo() 获取媒体识别任务参数，Type=MediaRecognition时必选
 * @method void setMediaRecognitionInfo(MediaRecognitionInfo $MediaRecognitionInfo) 设置媒体识别任务参数，Type=MediaRecognition时必选
 */
class MediaProcessInfo extends AbstractModel
{
    /**
     * @var string 编辑处理任务类型，可选值：
MediaEditing：媒体编辑（待上线）；
MediaCutting：媒体剪切；
MediaJoining：媒体拼接。
MediaRecognition: 媒体识别。
     */
    public $Type;

    /**
     * @var MediaCuttingInfo 视频剪切任务参数，Type=MediaCutting时必选。
     */
    public $MediaCuttingInfo;

    /**
     * @var MediaJoiningInfo 视频拼接任务参数，Type=MediaJoining时必选。
     */
    public $MediaJoiningInfo;

    /**
     * @var MediaRecognitionInfo 媒体识别任务参数，Type=MediaRecognition时必选
     */
    public $MediaRecognitionInfo;

    /**
     * @param string $Type 编辑处理任务类型，可选值：
MediaEditing：媒体编辑（待上线）；
MediaCutting：媒体剪切；
MediaJoining：媒体拼接。
MediaRecognition: 媒体识别。
     * @param MediaCuttingInfo $MediaCuttingInfo 视频剪切任务参数，Type=MediaCutting时必选。
     * @param MediaJoiningInfo $MediaJoiningInfo 视频拼接任务参数，Type=MediaJoining时必选。
     * @param MediaRecognitionInfo $MediaRecognitionInfo 媒体识别任务参数，Type=MediaRecognition时必选
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MediaCuttingInfo",$param) and $param["MediaCuttingInfo"] !== null) {
            $this->MediaCuttingInfo = new MediaCuttingInfo();
            $this->MediaCuttingInfo->deserialize($param["MediaCuttingInfo"]);
        }

        if (array_key_exists("MediaJoiningInfo",$param) and $param["MediaJoiningInfo"] !== null) {
            $this->MediaJoiningInfo = new MediaJoiningInfo();
            $this->MediaJoiningInfo->deserialize($param["MediaJoiningInfo"]);
        }

        if (array_key_exists("MediaRecognitionInfo",$param) and $param["MediaRecognitionInfo"] !== null) {
            $this->MediaRecognitionInfo = new MediaRecognitionInfo();
            $this->MediaRecognitionInfo->deserialize($param["MediaRecognitionInfo"]);
        }
    }
}

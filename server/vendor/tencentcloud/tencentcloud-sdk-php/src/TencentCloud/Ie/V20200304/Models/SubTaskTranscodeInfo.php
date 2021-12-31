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
 * 画质重生子任务参数信息
 *
 * @method string getTaskName() 获取子任务名称。
 * @method void setTaskName(string $TaskName) 设置子任务名称。
 * @method TargetInfo getTargetInfo() 获取目标文件信息。
 * @method void setTargetInfo(TargetInfo $TargetInfo) 设置目标文件信息。
 * @method EditInfo getEditInfo() 获取视频剪辑信息。注意：如果填写了EditInfo，则VideoInfo和AudioInfo必填
 * @method void setEditInfo(EditInfo $EditInfo) 设置视频剪辑信息。注意：如果填写了EditInfo，则VideoInfo和AudioInfo必填
 * @method VideoInfo getVideoInfo() 获取视频转码信息，不填保持和源文件一致。
 * @method void setVideoInfo(VideoInfo $VideoInfo) 设置视频转码信息，不填保持和源文件一致。
 * @method AudioInfo getAudioInfo() 获取音频转码信息，不填保持和源文件一致。
 * @method void setAudioInfo(AudioInfo $AudioInfo) 设置音频转码信息，不填保持和源文件一致。
 * @method MuxInfo getMuxInfo() 获取指定封装信息。
 * @method void setMuxInfo(MuxInfo $MuxInfo) 设置指定封装信息。
 */
class SubTaskTranscodeInfo extends AbstractModel
{
    /**
     * @var string 子任务名称。
     */
    public $TaskName;

    /**
     * @var TargetInfo 目标文件信息。
     */
    public $TargetInfo;

    /**
     * @var EditInfo 视频剪辑信息。注意：如果填写了EditInfo，则VideoInfo和AudioInfo必填
     */
    public $EditInfo;

    /**
     * @var VideoInfo 视频转码信息，不填保持和源文件一致。
     */
    public $VideoInfo;

    /**
     * @var AudioInfo 音频转码信息，不填保持和源文件一致。
     */
    public $AudioInfo;

    /**
     * @var MuxInfo 指定封装信息。
     */
    public $MuxInfo;

    /**
     * @param string $TaskName 子任务名称。
     * @param TargetInfo $TargetInfo 目标文件信息。
     * @param EditInfo $EditInfo 视频剪辑信息。注意：如果填写了EditInfo，则VideoInfo和AudioInfo必填
     * @param VideoInfo $VideoInfo 视频转码信息，不填保持和源文件一致。
     * @param AudioInfo $AudioInfo 音频转码信息，不填保持和源文件一致。
     * @param MuxInfo $MuxInfo 指定封装信息。
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new TargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }

        if (array_key_exists("EditInfo",$param) and $param["EditInfo"] !== null) {
            $this->EditInfo = new EditInfo();
            $this->EditInfo->deserialize($param["EditInfo"]);
        }

        if (array_key_exists("VideoInfo",$param) and $param["VideoInfo"] !== null) {
            $this->VideoInfo = new VideoInfo();
            $this->VideoInfo->deserialize($param["VideoInfo"]);
        }

        if (array_key_exists("AudioInfo",$param) and $param["AudioInfo"] !== null) {
            $this->AudioInfo = new AudioInfo();
            $this->AudioInfo->deserialize($param["AudioInfo"]);
        }

        if (array_key_exists("MuxInfo",$param) and $param["MuxInfo"] !== null) {
            $this->MuxInfo = new MuxInfo();
            $this->MuxInfo->deserialize($param["MuxInfo"]);
        }
    }
}

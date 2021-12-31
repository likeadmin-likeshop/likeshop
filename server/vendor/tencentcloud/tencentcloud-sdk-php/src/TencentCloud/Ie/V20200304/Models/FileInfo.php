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
 * 画质重生处理后文件的详细信息
 *
 * @method integer getFileSize() 获取任务结束后生成的文件大小。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置任务结束后生成的文件大小。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取任务结束后生成的文件格式，例如：mp4,flv等等。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置任务结束后生成的文件格式，例如：mp4,flv等等。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitrate() 获取任务结束后生成的文件整体码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitrate(integer $Bitrate) 设置任务结束后生成的文件整体码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取任务结束后生成的文件时长，单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置任务结束后生成的文件时长，单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVideoInfoResult() 获取任务结束后生成的文件视频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoInfoResult(array $VideoInfoResult) 设置任务结束后生成的文件视频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioInfoResult() 获取任务结束后生成的文件音频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioInfoResult(array $AudioInfoResult) 设置任务结束后生成的文件音频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileInfo extends AbstractModel
{
    /**
     * @var integer 任务结束后生成的文件大小。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 任务结束后生成的文件格式，例如：mp4,flv等等。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var integer 任务结束后生成的文件整体码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bitrate;

    /**
     * @var integer 任务结束后生成的文件时长，单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 任务结束后生成的文件视频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoInfoResult;

    /**
     * @var array 任务结束后生成的文件音频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioInfoResult;

    /**
     * @param integer $FileSize 任务结束后生成的文件大小。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 任务结束后生成的文件格式，例如：mp4,flv等等。
注意：此字段可能返回 null，表示取不到有效值 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bitrate 任务结束后生成的文件整体码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 任务结束后生成的文件时长，单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VideoInfoResult 任务结束后生成的文件视频信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioInfoResult 任务结束后生成的文件音频信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("VideoInfoResult",$param) and $param["VideoInfoResult"] !== null) {
            $this->VideoInfoResult = [];
            foreach ($param["VideoInfoResult"] as $key => $value){
                $obj = new VideoInfoResultItem();
                $obj->deserialize($value);
                array_push($this->VideoInfoResult, $obj);
            }
        }

        if (array_key_exists("AudioInfoResult",$param) and $param["AudioInfoResult"] !== null) {
            $this->AudioInfoResult = [];
            foreach ($param["AudioInfoResult"] as $key => $value){
                $obj = new AudioInfoResultItem();
                $obj->deserialize($value);
                array_push($this->AudioInfoResult, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体文件元信息。
 *
 * @method integer getSize() 获取上传的媒体文件大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置上传的媒体文件大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainer() 获取容器类型，例如 m4a，mp4 等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainer(string $Container) 设置容器类型，例如 m4a，mp4 等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitrate() 获取视频流码率平均值与音频流码率平均值之和，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitrate(integer $Bitrate) 设置视频流码率平均值与音频流码率平均值之和，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取视频流高度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置视频流高度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取视频流宽度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置视频流宽度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRotate() 获取视频拍摄时的选择角度，单位：度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotate(integer $Rotate) 设置视频拍摄时的选择角度，单位：度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVideoStreamSet() 获取视频流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoStreamSet(array $VideoStreamSet) 设置视频流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioStreamSet() 获取音频流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioStreamSet(array $AudioStreamSet) 设置音频流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getVideoDuration() 获取视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoDuration(float $VideoDuration) 设置视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAudioDuration() 获取音频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioDuration(float $AudioDuration) 设置音频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VodMetaData extends AbstractModel
{
    /**
     * @var integer 上传的媒体文件大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 容器类型，例如 m4a，mp4 等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Container;

    /**
     * @var integer 视频流码率平均值与音频流码率平均值之和，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bitrate;

    /**
     * @var integer 视频流高度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer 视频流宽度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var float 视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 视频拍摄时的选择角度，单位：度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rotate;

    /**
     * @var array 视频流信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoStreamSet;

    /**
     * @var array 音频流信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioStreamSet;

    /**
     * @var float 视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoDuration;

    /**
     * @var float 音频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioDuration;

    /**
     * @param integer $Size 上传的媒体文件大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Container 容器类型，例如 m4a，mp4 等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bitrate 视频流码率平均值与音频流码率平均值之和，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 视频流高度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 视频流宽度的最大值，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration 视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rotate 视频拍摄时的选择角度，单位：度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VideoStreamSet 视频流信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioStreamSet 音频流信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $VideoDuration 视频时长，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AudioDuration 音频时长，单位：秒。
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new VodVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new VodAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("AudioDuration",$param) and $param["AudioDuration"] !== null) {
            $this->AudioDuration = $param["AudioDuration"];
        }
    }
}

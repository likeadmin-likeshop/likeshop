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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件元信息。
 *
 * @method integer getSize() 获取大小。
 * @method void setSize(integer $Size) 设置大小。
 * @method string getContainer() 获取容器类型。
 * @method void setContainer(string $Container) 设置容器类型。
 * @method integer getBitrate() 获取视频流码率平均值与音频流码率平均值之和，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置视频流码率平均值与音频流码率平均值之和，单位：bps。
 * @method integer getHeight() 获取视频流高度的最大值，单位：px。
 * @method void setHeight(integer $Height) 设置视频流高度的最大值，单位：px。
 * @method integer getWidth() 获取视频流宽度的最大值，单位：px。
 * @method void setWidth(integer $Width) 设置视频流宽度的最大值，单位：px。
 * @method float getDuration() 获取时长，单位：秒。
 * @method void setDuration(float $Duration) 设置时长，单位：秒。
 * @method integer getRotate() 获取视频拍摄时的选择角度，单位：度
 * @method void setRotate(integer $Rotate) 设置视频拍摄时的选择角度，单位：度
 * @method array getVideoStreamInfoSet() 获取视频流信息。
 * @method void setVideoStreamInfoSet(array $VideoStreamInfoSet) 设置视频流信息。
 * @method array getAudioStreamInfoSet() 获取音频流信息。
 * @method void setAudioStreamInfoSet(array $AudioStreamInfoSet) 设置音频流信息。
 */
class MediaMetaData extends AbstractModel
{
    /**
     * @var integer 大小。
     */
    public $Size;

    /**
     * @var string 容器类型。
     */
    public $Container;

    /**
     * @var integer 视频流码率平均值与音频流码率平均值之和，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 视频流高度的最大值，单位：px。
     */
    public $Height;

    /**
     * @var integer 视频流宽度的最大值，单位：px。
     */
    public $Width;

    /**
     * @var float 时长，单位：秒。
     */
    public $Duration;

    /**
     * @var integer 视频拍摄时的选择角度，单位：度
     */
    public $Rotate;

    /**
     * @var array 视频流信息。
     */
    public $VideoStreamInfoSet;

    /**
     * @var array 音频流信息。
     */
    public $AudioStreamInfoSet;

    /**
     * @param integer $Size 大小。
     * @param string $Container 容器类型。
     * @param integer $Bitrate 视频流码率平均值与音频流码率平均值之和，单位：bps。
     * @param integer $Height 视频流高度的最大值，单位：px。
     * @param integer $Width 视频流宽度的最大值，单位：px。
     * @param float $Duration 时长，单位：秒。
     * @param integer $Rotate 视频拍摄时的选择角度，单位：度
     * @param array $VideoStreamInfoSet 视频流信息。
     * @param array $AudioStreamInfoSet 音频流信息。
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

        if (array_key_exists("VideoStreamInfoSet",$param) and $param["VideoStreamInfoSet"] !== null) {
            $this->VideoStreamInfoSet = [];
            foreach ($param["VideoStreamInfoSet"] as $key => $value){
                $obj = new VideoStreamInfo();
                $obj->deserialize($value);
                array_push($this->VideoStreamInfoSet, $obj);
            }
        }

        if (array_key_exists("AudioStreamInfoSet",$param) and $param["AudioStreamInfoSet"] !== null) {
            $this->AudioStreamInfoSet = [];
            foreach ($param["AudioStreamInfoSet"] as $key => $value){
                $obj = new AudioStreamInfo();
                $obj->deserialize($value);
                array_push($this->AudioStreamInfoSet, $obj);
            }
        }
    }
}

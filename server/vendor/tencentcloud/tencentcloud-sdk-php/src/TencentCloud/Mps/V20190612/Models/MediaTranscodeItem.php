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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码信息
 *
 * @method TaskOutputStorage getOutputStorage() 获取转码后文件的目标存储。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置转码后文件的目标存储。
 * @method string getPath() 获取转码后的视频文件路径。
 * @method void setPath(string $Path) 设置转码后的视频文件路径。
 * @method integer getDefinition() 获取转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/862/37042)。
 * @method void setDefinition(integer $Definition) 设置转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/862/37042)。
 * @method integer getBitrate() 获取视频流码率平均值与音频流码率平均值之和， 单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置视频流码率平均值与音频流码率平均值之和， 单位：bps。
 * @method integer getHeight() 获取视频流高度的最大值，单位：px。
 * @method void setHeight(integer $Height) 设置视频流高度的最大值，单位：px。
 * @method integer getWidth() 获取视频流宽度的最大值，单位：px。
 * @method void setWidth(integer $Width) 设置视频流宽度的最大值，单位：px。
 * @method integer getSize() 获取媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
 * @method void setSize(integer $Size) 设置媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
 * @method float getDuration() 获取视频时长，单位：秒。
 * @method void setDuration(float $Duration) 设置视频时长，单位：秒。
 * @method string getContainer() 获取容器类型，例如 m4a，mp4 等。
 * @method void setContainer(string $Container) 设置容器类型，例如 m4a，mp4 等。
 * @method string getMd5() 获取视频的 md5 值。
 * @method void setMd5(string $Md5) 设置视频的 md5 值。
 * @method array getAudioStreamSet() 获取音频流信息。
 * @method void setAudioStreamSet(array $AudioStreamSet) 设置音频流信息。
 * @method array getVideoStreamSet() 获取视频流信息。
 * @method void setVideoStreamSet(array $VideoStreamSet) 设置视频流信息。
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage 转码后文件的目标存储。
     */
    public $OutputStorage;

    /**
     * @var string 转码后的视频文件路径。
     */
    public $Path;

    /**
     * @var integer 转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/862/37042)。
     */
    public $Definition;

    /**
     * @var integer 视频流码率平均值与音频流码率平均值之和， 单位：bps。
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
     * @var integer 媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
     */
    public $Size;

    /**
     * @var float 视频时长，单位：秒。
     */
    public $Duration;

    /**
     * @var string 容器类型，例如 m4a，mp4 等。
     */
    public $Container;

    /**
     * @var string 视频的 md5 值。
     */
    public $Md5;

    /**
     * @var array 音频流信息。
     */
    public $AudioStreamSet;

    /**
     * @var array 视频流信息。
     */
    public $VideoStreamSet;

    /**
     * @param TaskOutputStorage $OutputStorage 转码后文件的目标存储。
     * @param string $Path 转码后的视频文件路径。
     * @param integer $Definition 转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/862/37042)。
     * @param integer $Bitrate 视频流码率平均值与音频流码率平均值之和， 单位：bps。
     * @param integer $Height 视频流高度的最大值，单位：px。
     * @param integer $Width 视频流宽度的最大值，单位：px。
     * @param integer $Size 媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。
     * @param float $Duration 视频时长，单位：秒。
     * @param string $Container 容器类型，例如 m4a，mp4 等。
     * @param string $Md5 视频的 md5 值。
     * @param array $AudioStreamSet 音频流信息。
     * @param array $VideoStreamSet 视频流信息。
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }
    }
}

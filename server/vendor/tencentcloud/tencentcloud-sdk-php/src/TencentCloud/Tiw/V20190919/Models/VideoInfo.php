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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频信息
 *
 * @method integer getVideoPlayTime() 获取视频开始播放的时间（单位：毫秒）
 * @method void setVideoPlayTime(integer $VideoPlayTime) 设置视频开始播放的时间（单位：毫秒）
 * @method integer getVideoSize() 获取视频大小（字节）
 * @method void setVideoSize(integer $VideoSize) 设置视频大小（字节）
 * @method string getVideoFormat() 获取视频格式
 * @method void setVideoFormat(string $VideoFormat) 设置视频格式
 * @method integer getVideoDuration() 获取视频播放时长（单位：毫秒）
 * @method void setVideoDuration(integer $VideoDuration) 设置视频播放时长（单位：毫秒）
 * @method string getVideoUrl() 获取视频文件URL
 * @method void setVideoUrl(string $VideoUrl) 设置视频文件URL
 * @method string getVideoId() 获取视频文件Id
 * @method void setVideoId(string $VideoId) 设置视频文件Id
 * @method integer getVideoType() 获取视频流类型 
- 0：摄像头视频 
- 1：屏幕分享视频
- 2：白板视频 
- 3：混流视频
- 4：纯音频（mp3)
 * @method void setVideoType(integer $VideoType) 设置视频流类型 
- 0：摄像头视频 
- 1：屏幕分享视频
- 2：白板视频 
- 3：混流视频
- 4：纯音频（mp3)
 * @method string getUserId() 获取摄像头/屏幕分享视频所属用户的 Id（白板视频为空、混流视频tic_mixstream_房间号_混流布局类型、辅路视频tic_substream_用户Id）
 * @method void setUserId(string $UserId) 设置摄像头/屏幕分享视频所属用户的 Id（白板视频为空、混流视频tic_mixstream_房间号_混流布局类型、辅路视频tic_substream_用户Id）
 * @method integer getWidth() 获取视频分辨率的宽
 * @method void setWidth(integer $Width) 设置视频分辨率的宽
 * @method integer getHeight() 获取视频分辨率的高
 * @method void setHeight(integer $Height) 设置视频分辨率的高
 */
class VideoInfo extends AbstractModel
{
    /**
     * @var integer 视频开始播放的时间（单位：毫秒）
     */
    public $VideoPlayTime;

    /**
     * @var integer 视频大小（字节）
     */
    public $VideoSize;

    /**
     * @var string 视频格式
     */
    public $VideoFormat;

    /**
     * @var integer 视频播放时长（单位：毫秒）
     */
    public $VideoDuration;

    /**
     * @var string 视频文件URL
     */
    public $VideoUrl;

    /**
     * @var string 视频文件Id
     */
    public $VideoId;

    /**
     * @var integer 视频流类型 
- 0：摄像头视频 
- 1：屏幕分享视频
- 2：白板视频 
- 3：混流视频
- 4：纯音频（mp3)
     */
    public $VideoType;

    /**
     * @var string 摄像头/屏幕分享视频所属用户的 Id（白板视频为空、混流视频tic_mixstream_房间号_混流布局类型、辅路视频tic_substream_用户Id）
     */
    public $UserId;

    /**
     * @var integer 视频分辨率的宽
     */
    public $Width;

    /**
     * @var integer 视频分辨率的高
     */
    public $Height;

    /**
     * @param integer $VideoPlayTime 视频开始播放的时间（单位：毫秒）
     * @param integer $VideoSize 视频大小（字节）
     * @param string $VideoFormat 视频格式
     * @param integer $VideoDuration 视频播放时长（单位：毫秒）
     * @param string $VideoUrl 视频文件URL
     * @param string $VideoId 视频文件Id
     * @param integer $VideoType 视频流类型 
- 0：摄像头视频 
- 1：屏幕分享视频
- 2：白板视频 
- 3：混流视频
- 4：纯音频（mp3)
     * @param string $UserId 摄像头/屏幕分享视频所属用户的 Id（白板视频为空、混流视频tic_mixstream_房间号_混流布局类型、辅路视频tic_substream_用户Id）
     * @param integer $Width 视频分辨率的宽
     * @param integer $Height 视频分辨率的高
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
        if (array_key_exists("VideoPlayTime",$param) and $param["VideoPlayTime"] !== null) {
            $this->VideoPlayTime = $param["VideoPlayTime"];
        }

        if (array_key_exists("VideoSize",$param) and $param["VideoSize"] !== null) {
            $this->VideoSize = $param["VideoSize"];
        }

        if (array_key_exists("VideoFormat",$param) and $param["VideoFormat"] !== null) {
            $this->VideoFormat = $param["VideoFormat"];
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("VideoType",$param) and $param["VideoType"] !== null) {
            $this->VideoType = $param["VideoType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}

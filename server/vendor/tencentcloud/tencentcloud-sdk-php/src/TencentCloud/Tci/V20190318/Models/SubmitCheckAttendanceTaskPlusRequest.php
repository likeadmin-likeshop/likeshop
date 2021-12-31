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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitCheckAttendanceTaskPlus请求参数结构体
 *
 * @method array getFileContent() 获取输入数据
 * @method void setFileContent(array $FileContent) 设置输入数据
 * @method string getFileType() 获取视频流类型，vod_url表示点播URL，live_url表示直播URL，默认vod_url
 * @method void setFileType(string $FileType) 设置视频流类型，vod_url表示点播URL，live_url表示直播URL，默认vod_url
 * @method array getLibraryIds() 获取人员库 ID列表
 * @method void setLibraryIds(array $LibraryIds) 设置人员库 ID列表
 * @method float getAttendanceThreshold() 获取确定出勤阈值；默认为0.92
 * @method void setAttendanceThreshold(float $AttendanceThreshold) 设置确定出勤阈值；默认为0.92
 * @method boolean getEnableStranger() 获取是否开启陌生人模式，陌生人模式是指在任务中发现的非注册人脸库中的人脸也返回相关统计信息，默认不开启
 * @method void setEnableStranger(boolean $EnableStranger) 设置是否开启陌生人模式，陌生人模式是指在任务中发现的非注册人脸库中的人脸也返回相关统计信息，默认不开启
 * @method integer getEndTime() 获取考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间往后12小时
 * @method void setEndTime(integer $EndTime) 设置考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间往后12小时
 * @method string getNoticeUrl() 获取通知回调地址，要求方法为post，application/json格式
 * @method void setNoticeUrl(string $NoticeUrl) 设置通知回调地址，要求方法为post，application/json格式
 * @method integer getStartTime() 获取考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间
 * @method void setStartTime(integer $StartTime) 设置考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间
 * @method float getThreshold() 获取识别阈值；默认为0.8
 * @method void setThreshold(float $Threshold) 设置识别阈值；默认为0.8
 */
class SubmitCheckAttendanceTaskPlusRequest extends AbstractModel
{
    /**
     * @var array 输入数据
     */
    public $FileContent;

    /**
     * @var string 视频流类型，vod_url表示点播URL，live_url表示直播URL，默认vod_url
     */
    public $FileType;

    /**
     * @var array 人员库 ID列表
     */
    public $LibraryIds;

    /**
     * @var float 确定出勤阈值；默认为0.92
     */
    public $AttendanceThreshold;

    /**
     * @var boolean 是否开启陌生人模式，陌生人模式是指在任务中发现的非注册人脸库中的人脸也返回相关统计信息，默认不开启
     */
    public $EnableStranger;

    /**
     * @var integer 考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间往后12小时
     */
    public $EndTime;

    /**
     * @var string 通知回调地址，要求方法为post，application/json格式
     */
    public $NoticeUrl;

    /**
     * @var integer 考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间
     */
    public $StartTime;

    /**
     * @var float 识别阈值；默认为0.8
     */
    public $Threshold;

    /**
     * @param array $FileContent 输入数据
     * @param string $FileType 视频流类型，vod_url表示点播URL，live_url表示直播URL，默认vod_url
     * @param array $LibraryIds 人员库 ID列表
     * @param float $AttendanceThreshold 确定出勤阈值；默认为0.92
     * @param boolean $EnableStranger 是否开启陌生人模式，陌生人模式是指在任务中发现的非注册人脸库中的人脸也返回相关统计信息，默认不开启
     * @param integer $EndTime 考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间往后12小时
     * @param string $NoticeUrl 通知回调地址，要求方法为post，application/json格式
     * @param integer $StartTime 考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0 
对于直播场景，使用绝对时间戳，单位秒，默认当前时间
     * @param float $Threshold 识别阈值；默认为0.8
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
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("LibraryIds",$param) and $param["LibraryIds"] !== null) {
            $this->LibraryIds = $param["LibraryIds"];
        }

        if (array_key_exists("AttendanceThreshold",$param) and $param["AttendanceThreshold"] !== null) {
            $this->AttendanceThreshold = $param["AttendanceThreshold"];
        }

        if (array_key_exists("EnableStranger",$param) and $param["EnableStranger"] !== null) {
            $this->EnableStranger = $param["EnableStranger"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NoticeUrl",$param) and $param["NoticeUrl"] !== null) {
            $this->NoticeUrl = $param["NoticeUrl"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}

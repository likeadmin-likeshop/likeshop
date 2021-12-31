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
 * 拼接视频中被忽略的时间段
 *
 * @method integer getVideoTime() 获取录制暂停时间戳对应的视频播放时间(单位: 毫秒)
 * @method void setVideoTime(integer $VideoTime) 设置录制暂停时间戳对应的视频播放时间(单位: 毫秒)
 * @method integer getPauseTime() 获取录制暂停时间戳(单位: 毫秒)
 * @method void setPauseTime(integer $PauseTime) 设置录制暂停时间戳(单位: 毫秒)
 * @method integer getResumeTime() 获取录制恢复时间戳(单位: 毫秒)
 * @method void setResumeTime(integer $ResumeTime) 设置录制恢复时间戳(单位: 毫秒)
 */
class OmittedDuration extends AbstractModel
{
    /**
     * @var integer 录制暂停时间戳对应的视频播放时间(单位: 毫秒)
     */
    public $VideoTime;

    /**
     * @var integer 录制暂停时间戳(单位: 毫秒)
     */
    public $PauseTime;

    /**
     * @var integer 录制恢复时间戳(单位: 毫秒)
     */
    public $ResumeTime;

    /**
     * @param integer $VideoTime 录制暂停时间戳对应的视频播放时间(单位: 毫秒)
     * @param integer $PauseTime 录制暂停时间戳(单位: 毫秒)
     * @param integer $ResumeTime 录制恢复时间戳(单位: 毫秒)
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
        if (array_key_exists("VideoTime",$param) and $param["VideoTime"] !== null) {
            $this->VideoTime = $param["VideoTime"];
        }

        if (array_key_exists("PauseTime",$param) and $param["PauseTime"] !== null) {
            $this->PauseTime = $param["PauseTime"];
        }

        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }
    }
}

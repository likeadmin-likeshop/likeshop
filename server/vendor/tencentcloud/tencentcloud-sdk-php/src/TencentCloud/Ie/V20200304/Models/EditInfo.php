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
 * 画质重生子任务视频剪辑参数
 *
 * @method integer getStartTime() 获取剪辑开始时间，单位：ms。
 * @method void setStartTime(integer $StartTime) 设置剪辑开始时间，单位：ms。
 * @method integer getEndTime() 获取剪辑结束时间，单位：ms
 * @method void setEndTime(integer $EndTime) 设置剪辑结束时间，单位：ms
 */
class EditInfo extends AbstractModel
{
    /**
     * @var integer 剪辑开始时间，单位：ms。
     */
    public $StartTime;

    /**
     * @var integer 剪辑结束时间，单位：ms
     */
    public $EndTime;

    /**
     * @param integer $StartTime 剪辑开始时间，单位：ms。
     * @param integer $EndTime 剪辑结束时间，单位：ms
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

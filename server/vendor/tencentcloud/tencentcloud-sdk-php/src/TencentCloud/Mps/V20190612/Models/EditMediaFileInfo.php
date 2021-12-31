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
 * 编辑点播视频文件信息
 *
 * @method MediaInputInfo getInputInfo() 获取视频的输入信息。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置视频的输入信息。
 * @method float getStartTimeOffset() 获取视频剪辑的起始时间偏移，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置视频剪辑的起始时间偏移，单位：秒。
 * @method float getEndTimeOffset() 获取视频剪辑的结束时间偏移，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置视频剪辑的结束时间偏移，单位：秒。
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var MediaInputInfo 视频的输入信息。
     */
    public $InputInfo;

    /**
     * @var float 视频剪辑的起始时间偏移，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 视频剪辑的结束时间偏移，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param MediaInputInfo $InputInfo 视频的输入信息。
     * @param float $StartTimeOffset 视频剪辑的起始时间偏移，单位：秒。
     * @param float $EndTimeOffset 视频剪辑的结束时间偏移，单位：秒。
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}

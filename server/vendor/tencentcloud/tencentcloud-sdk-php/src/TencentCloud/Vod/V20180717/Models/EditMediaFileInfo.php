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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑点播视频文件信息
 *
 * @method string getFileId() 获取视频的 ID。
 * @method void setFileId(string $FileId) 设置视频的 ID。
 * @method float getStartTimeOffset() 获取视频剪辑的起始偏移时间偏移，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置视频剪辑的起始偏移时间偏移，单位：秒。
 * @method float getEndTimeOffset() 获取视频剪辑的起始结束时间偏移，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置视频剪辑的起始结束时间偏移，单位：秒。
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var string 视频的 ID。
     */
    public $FileId;

    /**
     * @var float 视频剪辑的起始偏移时间偏移，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 视频剪辑的起始结束时间偏移，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId 视频的 ID。
     * @param float $StartTimeOffset 视频剪辑的起始偏移时间偏移，单位：秒。
     * @param float $EndTimeOffset 视频剪辑的起始结束时间偏移，单位：秒。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}

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
 * 直播剪辑项目输入参数。
 *
 * @method string getUrl() 获取直播流播放地址，目前仅支持 HLS 和 FLV 格式。
 * @method void setUrl(string $Url) 设置直播流播放地址，目前仅支持 HLS 和 FLV 格式。
 * @method integer getStreamRecordDuration() 获取直播流录制时长，单位为秒，最大值为 7200。
 * @method void setStreamRecordDuration(integer $StreamRecordDuration) 设置直播流录制时长，单位为秒，最大值为 7200。
 */
class LiveStreamClipProjectInput extends AbstractModel
{
    /**
     * @var string 直播流播放地址，目前仅支持 HLS 和 FLV 格式。
     */
    public $Url;

    /**
     * @var integer 直播流录制时长，单位为秒，最大值为 7200。
     */
    public $StreamRecordDuration;

    /**
     * @param string $Url 直播流播放地址，目前仅支持 HLS 和 FLV 格式。
     * @param integer $StreamRecordDuration 直播流录制时长，单位为秒，最大值为 7200。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StreamRecordDuration",$param) and $param["StreamRecordDuration"] !== null) {
            $this->StreamRecordDuration = $param["StreamRecordDuration"];
        }
    }
}

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
 * ParseStreamingManifest请求参数结构体
 *
 * @method string getMediaManifestContent() 获取待解析的索引文件内容。
 * @method void setMediaManifestContent(string $MediaManifestContent) 设置待解析的索引文件内容。
 * @method string getManifestType() 获取视频索引文件格式。默认 m3u8 格式。
<li>m3u8</li>
<li>mpd</li>
 * @method void setManifestType(string $ManifestType) 设置视频索引文件格式。默认 m3u8 格式。
<li>m3u8</li>
<li>mpd</li>
 */
class ParseStreamingManifestRequest extends AbstractModel
{
    /**
     * @var string 待解析的索引文件内容。
     */
    public $MediaManifestContent;

    /**
     * @var string 视频索引文件格式。默认 m3u8 格式。
<li>m3u8</li>
<li>mpd</li>
     */
    public $ManifestType;

    /**
     * @param string $MediaManifestContent 待解析的索引文件内容。
     * @param string $ManifestType 视频索引文件格式。默认 m3u8 格式。
<li>m3u8</li>
<li>mpd</li>
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
        if (array_key_exists("MediaManifestContent",$param) and $param["MediaManifestContent"] !== null) {
            $this->MediaManifestContent = $param["MediaManifestContent"];
        }

        if (array_key_exists("ManifestType",$param) and $param["ManifestType"] !== null) {
            $this->ManifestType = $param["ManifestType"];
        }
    }
}

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
 * 任务视频Url形式下载信息。
 *
 * @method string getUrl() 获取视频 URL。
注意：编辑理解仅支持mp4、flv等格式的点播文件，不支持hls；
 * @method void setUrl(string $Url) 设置视频 URL。
注意：编辑理解仅支持mp4、flv等格式的点播文件，不支持hls；
 * @method integer getFormat() 获取视频地址格式，可选值： 
0：音视频 ;
1：直播流。 
默认为0。其他非0非1值默认为0。画质重生任务只支持0。
 * @method void setFormat(integer $Format) 设置视频地址格式，可选值： 
0：音视频 ;
1：直播流。 
默认为0。其他非0非1值默认为0。画质重生任务只支持0。
 * @method string getHost() 获取指定请求资源时，HTTP头部host的值。
 * @method void setHost(string $Host) 设置指定请求资源时，HTTP头部host的值。
 */
class UrlInfo extends AbstractModel
{
    /**
     * @var string 视频 URL。
注意：编辑理解仅支持mp4、flv等格式的点播文件，不支持hls；
     */
    public $Url;

    /**
     * @var integer 视频地址格式，可选值： 
0：音视频 ;
1：直播流。 
默认为0。其他非0非1值默认为0。画质重生任务只支持0。
     */
    public $Format;

    /**
     * @var string 指定请求资源时，HTTP头部host的值。
     */
    public $Host;

    /**
     * @param string $Url 视频 URL。
注意：编辑理解仅支持mp4、flv等格式的点播文件，不支持hls；
     * @param integer $Format 视频地址格式，可选值： 
0：音视频 ;
1：直播流。 
默认为0。其他非0非1值默认为0。画质重生任务只支持0。
     * @param string $Host 指定请求资源时，HTTP头部host的值。
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

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}

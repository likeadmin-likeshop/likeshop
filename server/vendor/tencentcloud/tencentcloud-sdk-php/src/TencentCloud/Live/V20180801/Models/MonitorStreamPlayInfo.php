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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控播放数据
 *
 * @method string getPlayDomain() 获取播放域名。
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名。
 * @method string getStreamName() 获取流id。
 * @method void setStreamName(string $StreamName) 设置流id。
 * @method integer getRate() 获取播放码率，0表示原始码率。
 * @method void setRate(integer $Rate) 设置播放码率，0表示原始码率。
 * @method string getProtocol() 获取播放协议，可选值包括 Unknown，Flv，Hls，Rtmp，Huyap2p。
 * @method void setProtocol(string $Protocol) 设置播放协议，可选值包括 Unknown，Flv，Hls，Rtmp，Huyap2p。
 * @method float getBandwidth() 获取带宽，单位是Mbps。
 * @method void setBandwidth(float $Bandwidth) 设置带宽，单位是Mbps。
 * @method integer getOnline() 获取在线人数，1分钟采样一个点，统计采样点的tcp链接数目。
 * @method void setOnline(integer $Online) 设置在线人数，1分钟采样一个点，统计采样点的tcp链接数目。
 * @method integer getRequest() 获取请求数。
 * @method void setRequest(integer $Request) 设置请求数。
 */
class MonitorStreamPlayInfo extends AbstractModel
{
    /**
     * @var string 播放域名。
     */
    public $PlayDomain;

    /**
     * @var string 流id。
     */
    public $StreamName;

    /**
     * @var integer 播放码率，0表示原始码率。
     */
    public $Rate;

    /**
     * @var string 播放协议，可选值包括 Unknown，Flv，Hls，Rtmp，Huyap2p。
     */
    public $Protocol;

    /**
     * @var float 带宽，单位是Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 在线人数，1分钟采样一个点，统计采样点的tcp链接数目。
     */
    public $Online;

    /**
     * @var integer 请求数。
     */
    public $Request;

    /**
     * @param string $PlayDomain 播放域名。
     * @param string $StreamName 流id。
     * @param integer $Rate 播放码率，0表示原始码率。
     * @param string $Protocol 播放协议，可选值包括 Unknown，Flv，Hls，Rtmp，Huyap2p。
     * @param float $Bandwidth 带宽，单位是Mbps。
     * @param integer $Online 在线人数，1分钟采样一个点，统计采样点的tcp链接数目。
     * @param integer $Request 请求数。
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
        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }
    }
}

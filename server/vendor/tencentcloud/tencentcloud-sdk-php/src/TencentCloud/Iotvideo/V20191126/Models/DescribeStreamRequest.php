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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStream请求参数结构体
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getAccessId() 获取终端用户ID
 * @method void setAccessId(string $AccessId) 设置终端用户ID
 * @method string getProtocol() 获取直播协议, 可选值：RTSP、RTMP、HLS、HLS-fmp4
 * @method void setProtocol(string $Protocol) 设置直播协议, 可选值：RTSP、RTMP、HLS、HLS-fmp4
 * @method string getAddress() 获取音视频流地址
 * @method void setAddress(string $Address) 设置音视频流地址
 * @method string getAccessToken() 获取设备访问token，访问用户未绑定的设备时，需提供该参数
 * @method void setAccessToken(string $AccessToken) 设置设备访问token，访问用户未绑定的设备时，需提供该参数
 */
class DescribeStreamRequest extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 终端用户ID
     */
    public $AccessId;

    /**
     * @var string 直播协议, 可选值：RTSP、RTMP、HLS、HLS-fmp4
     */
    public $Protocol;

    /**
     * @var string 音视频流地址
     */
    public $Address;

    /**
     * @var string 设备访问token，访问用户未绑定的设备时，需提供该参数
     */
    public $AccessToken;

    /**
     * @param string $Tid 设备TID
     * @param string $AccessId 终端用户ID
     * @param string $Protocol 直播协议, 可选值：RTSP、RTMP、HLS、HLS-fmp4
     * @param string $Address 音视频流地址
     * @param string $AccessToken 设备访问token，访问用户未绑定的设备时，需提供该参数
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }
    }
}

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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceStreams的出参复杂类型
 *
 * @method string getRtspAddr() 获取rtsp地址
 * @method void setRtspAddr(string $RtspAddr) 设置rtsp地址
 * @method string getRtmpAddr() 获取rtmp地址
 * @method void setRtmpAddr(string $RtmpAddr) 设置rtmp地址
 * @method string getHlsAddr() 获取hls地址
 * @method void setHlsAddr(string $HlsAddr) 设置hls地址
 * @method string getFlvAddr() 获取flv地址
 * @method void setFlvAddr(string $FlvAddr) 设置flv地址
 */
class DescribeDeviceStreamsData extends AbstractModel
{
    /**
     * @var string rtsp地址
     */
    public $RtspAddr;

    /**
     * @var string rtmp地址
     */
    public $RtmpAddr;

    /**
     * @var string hls地址
     */
    public $HlsAddr;

    /**
     * @var string flv地址
     */
    public $FlvAddr;

    /**
     * @param string $RtspAddr rtsp地址
     * @param string $RtmpAddr rtmp地址
     * @param string $HlsAddr hls地址
     * @param string $FlvAddr flv地址
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
        if (array_key_exists("RtspAddr",$param) and $param["RtspAddr"] !== null) {
            $this->RtspAddr = $param["RtspAddr"];
        }

        if (array_key_exists("RtmpAddr",$param) and $param["RtmpAddr"] !== null) {
            $this->RtmpAddr = $param["RtmpAddr"];
        }

        if (array_key_exists("HlsAddr",$param) and $param["HlsAddr"] !== null) {
            $this->HlsAddr = $param["HlsAddr"];
        }

        if (array_key_exists("FlvAddr",$param) and $param["FlvAddr"] !== null) {
            $this->FlvAddr = $param["FlvAddr"];
        }
    }
}

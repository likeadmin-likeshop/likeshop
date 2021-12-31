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
 * DescribeRecordStreamData 复杂类型
 *
 * @method string getRtspAddr() 获取Rtsp地址
 * @method void setRtspAddr(string $RtspAddr) 设置Rtsp地址
 * @method string getRtmpAddr() 获取Rtmp地址
 * @method void setRtmpAddr(string $RtmpAddr) 设置Rtmp地址
 * @method string getHlsAddr() 获取Hls地址
 * @method void setHlsAddr(string $HlsAddr) 设置Hls地址
 * @method string getFlvAddr() 获取Flv地址
 * @method void setFlvAddr(string $FlvAddr) 设置Flv地址
 * @method string getStreamId() 获取流Id
 * @method void setStreamId(string $StreamId) 设置流Id
 */
class DescribeRecordStreamData extends AbstractModel
{
    /**
     * @var string Rtsp地址
     */
    public $RtspAddr;

    /**
     * @var string Rtmp地址
     */
    public $RtmpAddr;

    /**
     * @var string Hls地址
     */
    public $HlsAddr;

    /**
     * @var string Flv地址
     */
    public $FlvAddr;

    /**
     * @var string 流Id
     */
    public $StreamId;

    /**
     * @param string $RtspAddr Rtsp地址
     * @param string $RtmpAddr Rtmp地址
     * @param string $HlsAddr Hls地址
     * @param string $FlvAddr Flv地址
     * @param string $StreamId 流Id
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

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }
    }
}

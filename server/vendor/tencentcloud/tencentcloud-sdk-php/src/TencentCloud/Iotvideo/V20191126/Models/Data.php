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
 * 接口DescribeStream输出参数
 *
 * @method string getProtocol() 获取直播协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置直播协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURI() 获取流媒体播放地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURI(string $URI) 设置流媒体播放地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取流媒体地址过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置流媒体地址过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoCodec() 获取视频编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoCodec(string $VideoCodec) 设置视频编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioCodec() 获取音频编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioCodec(string $AudioCodec) 设置音频编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class Data extends AbstractModel
{
    /**
     * @var string 直播协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 流媒体播放地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URI;

    /**
     * @var integer 流媒体地址过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 视频编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoCodec;

    /**
     * @var string 音频编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioCodec;

    /**
     * @param string $Protocol 直播协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URI 流媒体播放地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 流媒体地址过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoCodec 视频编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioCodec 音频编码
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("URI",$param) and $param["URI"] !== null) {
            $this->URI = $param["URI"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("VideoCodec",$param) and $param["VideoCodec"] !== null) {
            $this->VideoCodec = $param["VideoCodec"];
        }

        if (array_key_exists("AudioCodec",$param) and $param["AudioCodec"] !== null) {
            $this->AudioCodec = $param["AudioCodec"];
        }
    }
}

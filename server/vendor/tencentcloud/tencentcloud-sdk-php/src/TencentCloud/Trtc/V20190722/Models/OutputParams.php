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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCU混流的输出参数
 *
 * @method string getStreamId() 获取直播流 ID，由用户自定义设置，该流 ID 不能与用户旁路的流 ID 相同。
 * @method void setStreamId(string $StreamId) 设置直播流 ID，由用户自定义设置，该流 ID 不能与用户旁路的流 ID 相同。
 * @method integer getPureAudioStream() 获取取值范围[0,1]， 填0：直播流为音视频(默认); 填1：直播流为纯音频
 * @method void setPureAudioStream(integer $PureAudioStream) 设置取值范围[0,1]， 填0：直播流为音视频(默认); 填1：直播流为纯音频
 * @method string getRecordId() 获取自定义录制文件名称前缀。请先在实时音视频控制台开通录制功能，https://cloud.tencent.com/document/product/647/50768
 * @method void setRecordId(string $RecordId) 设置自定义录制文件名称前缀。请先在实时音视频控制台开通录制功能，https://cloud.tencent.com/document/product/647/50768
 * @method integer getRecordAudioOnly() 获取取值范围[0,1]，填0无实际含义; 填1：指定录制文件格式为mp3。此参数不建议使用，建议在实时音视频控制台配置纯音频录制模板。
 * @method void setRecordAudioOnly(integer $RecordAudioOnly) 设置取值范围[0,1]，填0无实际含义; 填1：指定录制文件格式为mp3。此参数不建议使用，建议在实时音视频控制台配置纯音频录制模板。
 */
class OutputParams extends AbstractModel
{
    /**
     * @var string 直播流 ID，由用户自定义设置，该流 ID 不能与用户旁路的流 ID 相同。
     */
    public $StreamId;

    /**
     * @var integer 取值范围[0,1]， 填0：直播流为音视频(默认); 填1：直播流为纯音频
     */
    public $PureAudioStream;

    /**
     * @var string 自定义录制文件名称前缀。请先在实时音视频控制台开通录制功能，https://cloud.tencent.com/document/product/647/50768
     */
    public $RecordId;

    /**
     * @var integer 取值范围[0,1]，填0无实际含义; 填1：指定录制文件格式为mp3。此参数不建议使用，建议在实时音视频控制台配置纯音频录制模板。
     */
    public $RecordAudioOnly;

    /**
     * @param string $StreamId 直播流 ID，由用户自定义设置，该流 ID 不能与用户旁路的流 ID 相同。
     * @param integer $PureAudioStream 取值范围[0,1]， 填0：直播流为音视频(默认); 填1：直播流为纯音频
     * @param string $RecordId 自定义录制文件名称前缀。请先在实时音视频控制台开通录制功能，https://cloud.tencent.com/document/product/647/50768
     * @param integer $RecordAudioOnly 取值范围[0,1]，填0无实际含义; 填1：指定录制文件格式为mp3。此参数不建议使用，建议在实时音视频控制台配置纯音频录制模板。
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("PureAudioStream",$param) and $param["PureAudioStream"] !== null) {
            $this->PureAudioStream = $param["PureAudioStream"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordAudioOnly",$param) and $param["RecordAudioOnly"] !== null) {
            $this->RecordAudioOnly = $param["RecordAudioOnly"];
        }
    }
}

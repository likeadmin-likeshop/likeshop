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
namespace TencentCloud\Aai\V20180522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SentenceRecognition请求参数结构体
 *
 * @method integer getProjectId() 获取腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method void setProjectId(integer $ProjectId) 设置腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method integer getSubServiceType() 获取子服务类型。2，一句话识别。
 * @method void setSubServiceType(integer $SubServiceType) 设置子服务类型。2，一句话识别。
 * @method string getEngSerViceType() 获取引擎类型。8k：电话 8k 通用模型；16k：16k 通用模型。只支持单声道音频识别。
 * @method void setEngSerViceType(string $EngSerViceType) 设置引擎类型。8k：电话 8k 通用模型；16k：16k 通用模型。只支持单声道音频识别。
 * @method integer getSourceType() 获取语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method void setSourceType(integer $SourceType) 设置语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method string getVoiceFormat() 获取识别音频的音频格式（支持mp3,wav）。
 * @method void setVoiceFormat(string $VoiceFormat) 设置识别音频的音频格式（支持mp3,wav）。
 * @method string getUsrAudioKey() 获取用户端对此任务的唯一标识，用户自助生成，用于用户查找识别结果。
 * @method void setUsrAudioKey(string $UsrAudioKey) 设置用户端对此任务的唯一标识，用户自助生成，用于用户查找识别结果。
 * @method string getUrl() 获取语音 URL，公网可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不填；URL 的长度大于 0，小于 2048，需进行urlencode编码。音频时间长度要小于60s。
 * @method void setUrl(string $Url) 设置语音 URL，公网可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不填；URL 的长度大于 0，小于 2048，需进行urlencode编码。音频时间长度要小于60s。
 * @method string getData() 获取语音数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频数据要小于600kB。
 * @method void setData(string $Data) 设置语音数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频数据要小于600kB。
 * @method integer getDataLen() 获取数据长度，当 SourceType 值为1时必须填写，为0可不写（此数据长度为数据未进行base64编码时的数据长度）。
 * @method void setDataLen(integer $DataLen) 设置数据长度，当 SourceType 值为1时必须填写，为0可不写（此数据长度为数据未进行base64编码时的数据长度）。
 */
class SentenceRecognitionRequest extends AbstractModel
{
    /**
     * @var integer 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     */
    public $ProjectId;

    /**
     * @var integer 子服务类型。2，一句话识别。
     */
    public $SubServiceType;

    /**
     * @var string 引擎类型。8k：电话 8k 通用模型；16k：16k 通用模型。只支持单声道音频识别。
     */
    public $EngSerViceType;

    /**
     * @var integer 语音数据来源。0：语音 URL；1：语音数据（post body）。
     */
    public $SourceType;

    /**
     * @var string 识别音频的音频格式（支持mp3,wav）。
     */
    public $VoiceFormat;

    /**
     * @var string 用户端对此任务的唯一标识，用户自助生成，用于用户查找识别结果。
     */
    public $UsrAudioKey;

    /**
     * @var string 语音 URL，公网可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不填；URL 的长度大于 0，小于 2048，需进行urlencode编码。音频时间长度要小于60s。
     */
    public $Url;

    /**
     * @var string 语音数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频数据要小于600kB。
     */
    public $Data;

    /**
     * @var integer 数据长度，当 SourceType 值为1时必须填写，为0可不写（此数据长度为数据未进行base64编码时的数据长度）。
     */
    public $DataLen;

    /**
     * @param integer $ProjectId 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     * @param integer $SubServiceType 子服务类型。2，一句话识别。
     * @param string $EngSerViceType 引擎类型。8k：电话 8k 通用模型；16k：16k 通用模型。只支持单声道音频识别。
     * @param integer $SourceType 语音数据来源。0：语音 URL；1：语音数据（post body）。
     * @param string $VoiceFormat 识别音频的音频格式（支持mp3,wav）。
     * @param string $UsrAudioKey 用户端对此任务的唯一标识，用户自助生成，用于用户查找识别结果。
     * @param string $Url 语音 URL，公网可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不填；URL 的长度大于 0，小于 2048，需进行urlencode编码。音频时间长度要小于60s。
     * @param string $Data 语音数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频数据要小于600kB。
     * @param integer $DataLen 数据长度，当 SourceType 值为1时必须填写，为0可不写（此数据长度为数据未进行base64编码时的数据长度）。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubServiceType",$param) and $param["SubServiceType"] !== null) {
            $this->SubServiceType = $param["SubServiceType"];
        }

        if (array_key_exists("EngSerViceType",$param) and $param["EngSerViceType"] !== null) {
            $this->EngSerViceType = $param["EngSerViceType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("VoiceFormat",$param) and $param["VoiceFormat"] !== null) {
            $this->VoiceFormat = $param["VoiceFormat"];
        }

        if (array_key_exists("UsrAudioKey",$param) and $param["UsrAudioKey"] !== null) {
            $this->UsrAudioKey = $param["UsrAudioKey"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }
    }
}

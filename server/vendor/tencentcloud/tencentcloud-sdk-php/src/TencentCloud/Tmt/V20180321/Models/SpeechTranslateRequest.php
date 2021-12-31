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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SpeechTranslate请求参数结构体
 *
 * @method string getSessionUuid() 获取一段完整的语音对应一个SessionUuid
 * @method void setSessionUuid(string $SessionUuid) 设置一段完整的语音对应一个SessionUuid
 * @method string getSource() 获取音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setSource(string $Source) 设置音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method string getTarget() 获取翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setTarget(string $Target) 设置翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method integer getAudioFormat() 获取pcm : 146   speex : 16779154   mp3 : 83886080
 * @method void setAudioFormat(integer $AudioFormat) 设置pcm : 146   speex : 16779154   mp3 : 83886080
 * @method integer getSeq() 获取语音分片的序号，从0开始
 * @method void setSeq(integer $Seq) 设置语音分片的序号，从0开始
 * @method integer getIsEnd() 获取是否最后一片语音分片，0-否，1-是
 * @method void setIsEnd(integer $IsEnd) 设置是否最后一片语音分片，0-否，1-是
 * @method string getData() 获取语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 * @method void setData(string $Data) 设置语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 * @method integer getProjectId() 获取项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
 * @method void setProjectId(integer $ProjectId) 设置项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
 * @method string getMode() 获取识别模式，该参数已废弃
 * @method void setMode(string $Mode) 设置识别模式，该参数已废弃
 * @method integer getTransType() 获取该参数已废弃
 * @method void setTransType(integer $TransType) 设置该参数已废弃
 */
class SpeechTranslateRequest extends AbstractModel
{
    /**
     * @var string 一段完整的语音对应一个SessionUuid
     */
    public $SessionUuid;

    /**
     * @var string 音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Source;

    /**
     * @var string 翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Target;

    /**
     * @var integer pcm : 146   speex : 16779154   mp3 : 83886080
     */
    public $AudioFormat;

    /**
     * @var integer 语音分片的序号，从0开始
     */
    public $Seq;

    /**
     * @var integer 是否最后一片语音分片，0-否，1-是
     */
    public $IsEnd;

    /**
     * @var string 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
     */
    public $Data;

    /**
     * @var integer 项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
     */
    public $ProjectId;

    /**
     * @var string 识别模式，该参数已废弃
     */
    public $Mode;

    /**
     * @var integer 该参数已废弃
     */
    public $TransType;

    /**
     * @param string $SessionUuid 一段完整的语音对应一个SessionUuid
     * @param string $Source 音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param string $Target 翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param integer $AudioFormat pcm : 146   speex : 16779154   mp3 : 83886080
     * @param integer $Seq 语音分片的序号，从0开始
     * @param integer $IsEnd 是否最后一片语音分片，0-否，1-是
     * @param string $Data 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
     * @param integer $ProjectId 项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
     * @param string $Mode 识别模式，该参数已废弃
     * @param integer $TransType 该参数已废弃
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
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TransType",$param) and $param["TransType"] !== null) {
            $this->TransType = $param["TransType"];
        }
    }
}

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
 * SimultaneousInterpreting请求参数结构体
 *
 * @method integer getProjectId() 获取腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method void setProjectId(integer $ProjectId) 设置腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method integer getSubServiceType() 获取子服务类型。0：离线语音识别。1：实时流式识别，2，一句话识别。3：同传。
 * @method void setSubServiceType(integer $SubServiceType) 设置子服务类型。0：离线语音识别。1：实时流式识别，2，一句话识别。3：同传。
 * @method string getRecEngineModelType() 获取识别引擎类型。8k_zh： 8k 中文会场模型；16k_zh：16k 中文会场模型，8k_en： 8k 英文会场模型；16k_en：16k 英文会场模型。当前仅支持16K。
 * @method void setRecEngineModelType(string $RecEngineModelType) 设置识别引擎类型。8k_zh： 8k 中文会场模型；16k_zh：16k 中文会场模型，8k_en： 8k 英文会场模型；16k_en：16k 英文会场模型。当前仅支持16K。
 * @method string getData() 获取语音数据，要base64编码。
 * @method void setData(string $Data) 设置语音数据，要base64编码。
 * @method integer getDataLen() 获取数据长度。
 * @method void setDataLen(integer $DataLen) 设置数据长度。
 * @method string getVoiceId() 获取声音id，标识一句话。
 * @method void setVoiceId(string $VoiceId) 设置声音id，标识一句话。
 * @method integer getIsEnd() 获取是否是一句话的结束。
 * @method void setIsEnd(integer $IsEnd) 设置是否是一句话的结束。
 * @method integer getVoiceFormat() 获取声音编码的格式1:pcm，4:speex，6:silk，默认为1。
 * @method void setVoiceFormat(integer $VoiceFormat) 设置声音编码的格式1:pcm，4:speex，6:silk，默认为1。
 * @method integer getOpenTranslate() 获取是否需要翻译结果，1表示需要翻译，0是不需要。
 * @method void setOpenTranslate(integer $OpenTranslate) 设置是否需要翻译结果，1表示需要翻译，0是不需要。
 * @method string getSourceLanguage() 获取如果需要翻译，表示源语言类型，可取值：zh，en。
 * @method void setSourceLanguage(string $SourceLanguage) 设置如果需要翻译，表示源语言类型，可取值：zh，en。
 * @method string getTargetLanguage() 获取如果需要翻译，表示目标语言类型，可取值：zh，en。
 * @method void setTargetLanguage(string $TargetLanguage) 设置如果需要翻译，表示目标语言类型，可取值：zh，en。
 * @method integer getSeq() 获取表明当前语音分片的索引，从0开始
 * @method void setSeq(integer $Seq) 设置表明当前语音分片的索引，从0开始
 */
class SimultaneousInterpretingRequest extends AbstractModel
{
    /**
     * @var integer 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     */
    public $ProjectId;

    /**
     * @var integer 子服务类型。0：离线语音识别。1：实时流式识别，2，一句话识别。3：同传。
     */
    public $SubServiceType;

    /**
     * @var string 识别引擎类型。8k_zh： 8k 中文会场模型；16k_zh：16k 中文会场模型，8k_en： 8k 英文会场模型；16k_en：16k 英文会场模型。当前仅支持16K。
     */
    public $RecEngineModelType;

    /**
     * @var string 语音数据，要base64编码。
     */
    public $Data;

    /**
     * @var integer 数据长度。
     */
    public $DataLen;

    /**
     * @var string 声音id，标识一句话。
     */
    public $VoiceId;

    /**
     * @var integer 是否是一句话的结束。
     */
    public $IsEnd;

    /**
     * @var integer 声音编码的格式1:pcm，4:speex，6:silk，默认为1。
     */
    public $VoiceFormat;

    /**
     * @var integer 是否需要翻译结果，1表示需要翻译，0是不需要。
     */
    public $OpenTranslate;

    /**
     * @var string 如果需要翻译，表示源语言类型，可取值：zh，en。
     */
    public $SourceLanguage;

    /**
     * @var string 如果需要翻译，表示目标语言类型，可取值：zh，en。
     */
    public $TargetLanguage;

    /**
     * @var integer 表明当前语音分片的索引，从0开始
     */
    public $Seq;

    /**
     * @param integer $ProjectId 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     * @param integer $SubServiceType 子服务类型。0：离线语音识别。1：实时流式识别，2，一句话识别。3：同传。
     * @param string $RecEngineModelType 识别引擎类型。8k_zh： 8k 中文会场模型；16k_zh：16k 中文会场模型，8k_en： 8k 英文会场模型；16k_en：16k 英文会场模型。当前仅支持16K。
     * @param string $Data 语音数据，要base64编码。
     * @param integer $DataLen 数据长度。
     * @param string $VoiceId 声音id，标识一句话。
     * @param integer $IsEnd 是否是一句话的结束。
     * @param integer $VoiceFormat 声音编码的格式1:pcm，4:speex，6:silk，默认为1。
     * @param integer $OpenTranslate 是否需要翻译结果，1表示需要翻译，0是不需要。
     * @param string $SourceLanguage 如果需要翻译，表示源语言类型，可取值：zh，en。
     * @param string $TargetLanguage 如果需要翻译，表示目标语言类型，可取值：zh，en。
     * @param integer $Seq 表明当前语音分片的索引，从0开始
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

        if (array_key_exists("RecEngineModelType",$param) and $param["RecEngineModelType"] !== null) {
            $this->RecEngineModelType = $param["RecEngineModelType"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("VoiceFormat",$param) and $param["VoiceFormat"] !== null) {
            $this->VoiceFormat = $param["VoiceFormat"];
        }

        if (array_key_exists("OpenTranslate",$param) and $param["OpenTranslate"] !== null) {
            $this->OpenTranslate = $param["OpenTranslate"];
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }
    }
}

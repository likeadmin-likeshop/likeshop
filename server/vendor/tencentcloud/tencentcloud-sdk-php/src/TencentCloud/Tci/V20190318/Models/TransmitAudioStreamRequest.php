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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransmitAudioStream请求参数结构体
 *
 * @method FunctionInfo getFunctions() 获取功能开关列表，表示是否需要打开相应的功能，返回相应的信息
 * @method void setFunctions(FunctionInfo $Functions) 设置功能开关列表，表示是否需要打开相应的功能，返回相应的信息
 * @method integer getSeqId() 获取流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义。
 * @method void setSeqId(integer $SeqId) 设置流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义。
 * @method string getSessionId() 获取语音段唯一标识，一个完整语音一个SessionId。
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一个完整语音一个SessionId。
 * @method string getUserVoiceData() 获取当前数据包数据, 流式模式下数据包大小可以按需设置，在网络良好的情况下，建议设置为0.5k，且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数），编码格式要求为BASE64。
 * @method void setUserVoiceData(string $UserVoiceData) 设置当前数据包数据, 流式模式下数据包大小可以按需设置，在网络良好的情况下，建议设置为0.5k，且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数），编码格式要求为BASE64。
 * @method integer getVoiceEncodeType() 获取语音编码类型 1:pcm。
 * @method void setVoiceEncodeType(integer $VoiceEncodeType) 设置语音编码类型 1:pcm。
 * @method integer getVoiceFileType() 获取语音文件类型 	1: raw, 2: wav, 3: mp3 (语言文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败)。
 * @method void setVoiceFileType(integer $VoiceFileType) 设置语音文件类型 	1: raw, 2: wav, 3: mp3 (语言文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败)。
 * @method integer getIsEnd() 获取是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
 * @method void setIsEnd(integer $IsEnd) 设置是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
 * @method integer getLang() 获取音频源的语言，默认0为英文，1为中文
 * @method void setLang(integer $Lang) 设置音频源的语言，默认0为英文，1为中文
 * @method integer getStorageMode() 获取是否临时保存 音频链接
 * @method void setStorageMode(integer $StorageMode) 设置是否临时保存 音频链接
 * @method array getVocabLibNameList() 获取识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 * @method void setVocabLibNameList(array $VocabLibNameList) 设置识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 */
class TransmitAudioStreamRequest extends AbstractModel
{
    /**
     * @var FunctionInfo 功能开关列表，表示是否需要打开相应的功能，返回相应的信息
     */
    public $Functions;

    /**
     * @var integer 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义。
     */
    public $SeqId;

    /**
     * @var string 语音段唯一标识，一个完整语音一个SessionId。
     */
    public $SessionId;

    /**
     * @var string 当前数据包数据, 流式模式下数据包大小可以按需设置，在网络良好的情况下，建议设置为0.5k，且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数），编码格式要求为BASE64。
     */
    public $UserVoiceData;

    /**
     * @var integer 语音编码类型 1:pcm。
     */
    public $VoiceEncodeType;

    /**
     * @var integer 语音文件类型 	1: raw, 2: wav, 3: mp3 (语言文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败)。
     */
    public $VoiceFileType;

    /**
     * @var integer 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
     */
    public $IsEnd;

    /**
     * @var integer 音频源的语言，默认0为英文，1为中文
     */
    public $Lang;

    /**
     * @var integer 是否临时保存 音频链接
     */
    public $StorageMode;

    /**
     * @var array 识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
     */
    public $VocabLibNameList;

    /**
     * @param FunctionInfo $Functions 功能开关列表，表示是否需要打开相应的功能，返回相应的信息
     * @param integer $SeqId 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义。
     * @param string $SessionId 语音段唯一标识，一个完整语音一个SessionId。
     * @param string $UserVoiceData 当前数据包数据, 流式模式下数据包大小可以按需设置，在网络良好的情况下，建议设置为0.5k，且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数），编码格式要求为BASE64。
     * @param integer $VoiceEncodeType 语音编码类型 1:pcm。
     * @param integer $VoiceFileType 语音文件类型 	1: raw, 2: wav, 3: mp3 (语言文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败)。
     * @param integer $IsEnd 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
     * @param integer $Lang 音频源的语言，默认0为英文，1为中文
     * @param integer $StorageMode 是否临时保存 音频链接
     * @param array $VocabLibNameList 识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
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
        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = new FunctionInfo();
            $this->Functions->deserialize($param["Functions"]);
        }

        if (array_key_exists("SeqId",$param) and $param["SeqId"] !== null) {
            $this->SeqId = $param["SeqId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("UserVoiceData",$param) and $param["UserVoiceData"] !== null) {
            $this->UserVoiceData = $param["UserVoiceData"];
        }

        if (array_key_exists("VoiceEncodeType",$param) and $param["VoiceEncodeType"] !== null) {
            $this->VoiceEncodeType = $param["VoiceEncodeType"];
        }

        if (array_key_exists("VoiceFileType",$param) and $param["VoiceFileType"] !== null) {
            $this->VoiceFileType = $param["VoiceFileType"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("VocabLibNameList",$param) and $param["VocabLibNameList"] !== null) {
            $this->VocabLibNameList = $param["VocabLibNameList"];
        }
    }
}

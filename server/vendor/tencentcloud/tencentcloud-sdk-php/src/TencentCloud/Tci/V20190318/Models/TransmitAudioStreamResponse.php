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
 * TransmitAudioStream返回参数结构体
 *
 * @method ASRStat getAsrStat() 获取返回的当前音频的统计信息。当进度为100时返回。
 * @method void setAsrStat(ASRStat $AsrStat) 设置返回的当前音频的统计信息。当进度为100时返回。
 * @method array getTexts() 获取返回当前音频流的详细信息，如果是流模式，返回的是对应流的详细信息，如果是 URL模式，返回的是查询的那一段seq对应的音频的详细信息。
 * @method void setTexts(array $Texts) 设置返回当前音频流的详细信息，如果是流模式，返回的是对应流的详细信息，如果是 URL模式，返回的是查询的那一段seq对应的音频的详细信息。
 * @method array getVocabAnalysisDetailInfo() 获取返回词汇库中的单词出现的详细时间信息。
 * @method void setVocabAnalysisDetailInfo(array $VocabAnalysisDetailInfo) 设置返回词汇库中的单词出现的详细时间信息。
 * @method array getVocabAnalysisStatInfo() 获取返回词汇库中的单词出现的次数信息。
 * @method void setVocabAnalysisStatInfo(array $VocabAnalysisStatInfo) 设置返回词汇库中的单词出现的次数信息。
 * @method string getAllTexts() 获取音频全部文本。
 * @method void setAllTexts(string $AllTexts) 设置音频全部文本。
 * @method string getAudioUrl() 获取临时保存的音频链接
 * @method void setAudioUrl(string $AudioUrl) 设置临时保存的音频链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TransmitAudioStreamResponse extends AbstractModel
{
    /**
     * @var ASRStat 返回的当前音频的统计信息。当进度为100时返回。
     */
    public $AsrStat;

    /**
     * @var array 返回当前音频流的详细信息，如果是流模式，返回的是对应流的详细信息，如果是 URL模式，返回的是查询的那一段seq对应的音频的详细信息。
     */
    public $Texts;

    /**
     * @var array 返回词汇库中的单词出现的详细时间信息。
     */
    public $VocabAnalysisDetailInfo;

    /**
     * @var array 返回词汇库中的单词出现的次数信息。
     */
    public $VocabAnalysisStatInfo;

    /**
     * @var string 音频全部文本。
     */
    public $AllTexts;

    /**
     * @var string 临时保存的音频链接
     */
    public $AudioUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ASRStat $AsrStat 返回的当前音频的统计信息。当进度为100时返回。
     * @param array $Texts 返回当前音频流的详细信息，如果是流模式，返回的是对应流的详细信息，如果是 URL模式，返回的是查询的那一段seq对应的音频的详细信息。
     * @param array $VocabAnalysisDetailInfo 返回词汇库中的单词出现的详细时间信息。
     * @param array $VocabAnalysisStatInfo 返回词汇库中的单词出现的次数信息。
     * @param string $AllTexts 音频全部文本。
     * @param string $AudioUrl 临时保存的音频链接
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AsrStat",$param) and $param["AsrStat"] !== null) {
            $this->AsrStat = new ASRStat();
            $this->AsrStat->deserialize($param["AsrStat"]);
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = [];
            foreach ($param["Texts"] as $key => $value){
                $obj = new WholeTextItem();
                $obj->deserialize($value);
                array_push($this->Texts, $obj);
            }
        }

        if (array_key_exists("VocabAnalysisDetailInfo",$param) and $param["VocabAnalysisDetailInfo"] !== null) {
            $this->VocabAnalysisDetailInfo = [];
            foreach ($param["VocabAnalysisDetailInfo"] as $key => $value){
                $obj = new VocabDetailInfomation();
                $obj->deserialize($value);
                array_push($this->VocabAnalysisDetailInfo, $obj);
            }
        }

        if (array_key_exists("VocabAnalysisStatInfo",$param) and $param["VocabAnalysisStatInfo"] !== null) {
            $this->VocabAnalysisStatInfo = [];
            foreach ($param["VocabAnalysisStatInfo"] as $key => $value){
                $obj = new VocabStatInfomation();
                $obj->deserialize($value);
                array_push($this->VocabAnalysisStatInfo, $obj);
            }
        }

        if (array_key_exists("AllTexts",$param) and $param["AllTexts"] !== null) {
            $this->AllTexts = $param["AllTexts"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

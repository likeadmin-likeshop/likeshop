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
 * SubmitConversationTask请求参数结构体
 *
 * @method integer getLang() 获取音频源的语言，默认0为英文，1为中文
 * @method void setLang(integer $Lang) 设置音频源的语言，默认0为英文，1为中文
 * @method string getStudentUrl() 获取学生音频流
 * @method void setStudentUrl(string $StudentUrl) 设置学生音频流
 * @method string getTeacherUrl() 获取教师音频流
 * @method void setTeacherUrl(string $TeacherUrl) 设置教师音频流
 * @method integer getVoiceEncodeType() 获取语音编码类型 1:pcm
 * @method void setVoiceEncodeType(integer $VoiceEncodeType) 设置语音编码类型 1:pcm
 * @method integer getVoiceFileType() 获取语音文件类型 1:raw, 2:wav, 3:mp3（三种格式目前仅支持16k采样率16bit）
 * @method void setVoiceFileType(integer $VoiceFileType) 设置语音文件类型 1:raw, 2:wav, 3:mp3（三种格式目前仅支持16k采样率16bit）
 * @method FunctionInfo getFunctions() 获取功能开关列表，表示是否需要打开相应的功能，返回相应的信息
 * @method void setFunctions(FunctionInfo $Functions) 设置功能开关列表，表示是否需要打开相应的功能，返回相应的信息
 * @method array getVocabLibNameList() 获取识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 * @method void setVocabLibNameList(array $VocabLibNameList) 设置识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 */
class SubmitConversationTaskRequest extends AbstractModel
{
    /**
     * @var integer 音频源的语言，默认0为英文，1为中文
     */
    public $Lang;

    /**
     * @var string 学生音频流
     */
    public $StudentUrl;

    /**
     * @var string 教师音频流
     */
    public $TeacherUrl;

    /**
     * @var integer 语音编码类型 1:pcm
     */
    public $VoiceEncodeType;

    /**
     * @var integer 语音文件类型 1:raw, 2:wav, 3:mp3（三种格式目前仅支持16k采样率16bit）
     */
    public $VoiceFileType;

    /**
     * @var FunctionInfo 功能开关列表，表示是否需要打开相应的功能，返回相应的信息
     */
    public $Functions;

    /**
     * @var array 识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
     */
    public $VocabLibNameList;

    /**
     * @param integer $Lang 音频源的语言，默认0为英文，1为中文
     * @param string $StudentUrl 学生音频流
     * @param string $TeacherUrl 教师音频流
     * @param integer $VoiceEncodeType 语音编码类型 1:pcm
     * @param integer $VoiceFileType 语音文件类型 1:raw, 2:wav, 3:mp3（三种格式目前仅支持16k采样率16bit）
     * @param FunctionInfo $Functions 功能开关列表，表示是否需要打开相应的功能，返回相应的信息
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
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("StudentUrl",$param) and $param["StudentUrl"] !== null) {
            $this->StudentUrl = $param["StudentUrl"];
        }

        if (array_key_exists("TeacherUrl",$param) and $param["TeacherUrl"] !== null) {
            $this->TeacherUrl = $param["TeacherUrl"];
        }

        if (array_key_exists("VoiceEncodeType",$param) and $param["VoiceEncodeType"] !== null) {
            $this->VoiceEncodeType = $param["VoiceEncodeType"];
        }

        if (array_key_exists("VoiceFileType",$param) and $param["VoiceFileType"] !== null) {
            $this->VoiceFileType = $param["VoiceFileType"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = new FunctionInfo();
            $this->Functions->deserialize($param["Functions"]);
        }

        if (array_key_exists("VocabLibNameList",$param) and $param["VocabLibNameList"] !== null) {
            $this->VocabLibNameList = $param["VocabLibNameList"];
        }
    }
}

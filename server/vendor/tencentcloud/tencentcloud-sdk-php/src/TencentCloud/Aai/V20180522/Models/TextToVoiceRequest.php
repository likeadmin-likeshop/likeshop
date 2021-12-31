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
 * TextToVoice请求参数结构体
 *
 * @method string getText() 获取合成语音的源文本，按UTF-8编码统一计算。
中文最大支持100个汉字（全角标点符号算一个汉字）；英文最大支持400个字母（半角标点符号算一个字母）。包含空格等字符时需要url encode再传输。
 * @method void setText(string $Text) 设置合成语音的源文本，按UTF-8编码统一计算。
中文最大支持100个汉字（全角标点符号算一个汉字）；英文最大支持400个字母（半角标点符号算一个字母）。包含空格等字符时需要url encode再传输。
 * @method string getSessionId() 获取一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method void setSessionId(string $SessionId) 设置一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method integer getModelType() 获取模型类型，1-默认模型。
 * @method void setModelType(integer $ModelType) 设置模型类型，1-默认模型。
 * @method float getVolume() 获取音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
输入除以上整数之外的其他参数不生效，按默认值处理。
 * @method void setVolume(float $Volume) 设置音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
输入除以上整数之外的其他参数不生效，按默认值处理。
 * @method float getSpeed() 获取语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>输入除以上整数之外的其他参数不生效，按默认值处理。
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>输入除以上整数之外的其他参数不生效，按默认值处理。
 * @method integer getProjectId() 获取项目id，用户自定义，默认为0。
 * @method void setProjectId(integer $ProjectId) 设置项目id，用户自定义，默认为0。
 * @method integer getVoiceType() 获取音色<li>0-亲和女声(默认)</li><li>1-亲和男声</li><li>2-成熟男声</li><li>3-活力男声</li><li>4-温暖女声</li><li>5-情感女声</li><li>6-情感男声</li>
 * @method void setVoiceType(integer $VoiceType) 设置音色<li>0-亲和女声(默认)</li><li>1-亲和男声</li><li>2-成熟男声</li><li>3-活力男声</li><li>4-温暖女声</li><li>5-情感女声</li><li>6-情感男声</li>
 * @method integer getPrimaryLanguage() 获取主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
 * @method integer getSampleRate() 获取音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method string getCodec() 获取返回音频格式，可取值：wav（默认），mp3
 * @method void setCodec(string $Codec) 设置返回音频格式，可取值：wav（默认），mp3
 */
class TextToVoiceRequest extends AbstractModel
{
    /**
     * @var string 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持100个汉字（全角标点符号算一个汉字）；英文最大支持400个字母（半角标点符号算一个字母）。包含空格等字符时需要url encode再传输。
     */
    public $Text;

    /**
     * @var string 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     */
    public $SessionId;

    /**
     * @var integer 模型类型，1-默认模型。
     */
    public $ModelType;

    /**
     * @var float 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
输入除以上整数之外的其他参数不生效，按默认值处理。
     */
    public $Volume;

    /**
     * @var float 语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>输入除以上整数之外的其他参数不生效，按默认值处理。
     */
    public $Speed;

    /**
     * @var integer 项目id，用户自定义，默认为0。
     */
    public $ProjectId;

    /**
     * @var integer 音色<li>0-亲和女声(默认)</li><li>1-亲和男声</li><li>2-成熟男声</li><li>3-活力男声</li><li>4-温暖女声</li><li>5-情感女声</li><li>6-情感男声</li>
     */
    public $VoiceType;

    /**
     * @var integer 主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
     */
    public $PrimaryLanguage;

    /**
     * @var integer 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     */
    public $SampleRate;

    /**
     * @var string 返回音频格式，可取值：wav（默认），mp3
     */
    public $Codec;

    /**
     * @param string $Text 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持100个汉字（全角标点符号算一个汉字）；英文最大支持400个字母（半角标点符号算一个字母）。包含空格等字符时需要url encode再传输。
     * @param string $SessionId 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     * @param integer $ModelType 模型类型，1-默认模型。
     * @param float $Volume 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
输入除以上整数之外的其他参数不生效，按默认值处理。
     * @param float $Speed 语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>输入除以上整数之外的其他参数不生效，按默认值处理。
     * @param integer $ProjectId 项目id，用户自定义，默认为0。
     * @param integer $VoiceType 音色<li>0-亲和女声(默认)</li><li>1-亲和男声</li><li>2-成熟男声</li><li>3-活力男声</li><li>4-温暖女声</li><li>5-情感女声</li><li>6-情感男声</li>
     * @param integer $PrimaryLanguage 主语言类型：<li>1-中文（默认）</li><li>2-英文</li>
     * @param integer $SampleRate 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     * @param string $Codec 返回音频格式，可取值：wav（默认），mp3
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("PrimaryLanguage",$param) and $param["PrimaryLanguage"] !== null) {
            $this->PrimaryLanguage = $param["PrimaryLanguage"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }
    }
}

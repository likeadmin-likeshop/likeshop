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
 * SpeechTranslate返回参数结构体
 *
 * @method string getSessionUuid() 获取请求的SessionUuid直接返回
 * @method void setSessionUuid(string $SessionUuid) 设置请求的SessionUuid直接返回
 * @method integer getRecognizeStatus() 获取语音识别状态 1-进行中 0-完成
 * @method void setRecognizeStatus(integer $RecognizeStatus) 设置语音识别状态 1-进行中 0-完成
 * @method string getSourceText() 获取识别出的原文
 * @method void setSourceText(string $SourceText) 设置识别出的原文
 * @method string getTargetText() 获取翻译出的译文
 * @method void setTargetText(string $TargetText) 设置翻译出的译文
 * @method integer getSeq() 获取第几个语音分片
 * @method void setSeq(integer $Seq) 设置第几个语音分片
 * @method string getSource() 获取原语言
 * @method void setSource(string $Source) 设置原语言
 * @method string getTarget() 获取目标语言
 * @method void setTarget(string $Target) 设置目标语言
 * @method integer getVadSeq() 获取当请求的Mode参数填写bvad是，启动VadSeq。此时Seq会被设置为后台vad（静音检测）后的新序号，而VadSeq代表客户端原始Seq值
 * @method void setVadSeq(integer $VadSeq) 设置当请求的Mode参数填写bvad是，启动VadSeq。此时Seq会被设置为后台vad（静音检测）后的新序号，而VadSeq代表客户端原始Seq值
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SpeechTranslateResponse extends AbstractModel
{
    /**
     * @var string 请求的SessionUuid直接返回
     */
    public $SessionUuid;

    /**
     * @var integer 语音识别状态 1-进行中 0-完成
     */
    public $RecognizeStatus;

    /**
     * @var string 识别出的原文
     */
    public $SourceText;

    /**
     * @var string 翻译出的译文
     */
    public $TargetText;

    /**
     * @var integer 第几个语音分片
     */
    public $Seq;

    /**
     * @var string 原语言
     */
    public $Source;

    /**
     * @var string 目标语言
     */
    public $Target;

    /**
     * @var integer 当请求的Mode参数填写bvad是，启动VadSeq。此时Seq会被设置为后台vad（静音检测）后的新序号，而VadSeq代表客户端原始Seq值
     */
    public $VadSeq;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SessionUuid 请求的SessionUuid直接返回
     * @param integer $RecognizeStatus 语音识别状态 1-进行中 0-完成
     * @param string $SourceText 识别出的原文
     * @param string $TargetText 翻译出的译文
     * @param integer $Seq 第几个语音分片
     * @param string $Source 原语言
     * @param string $Target 目标语言
     * @param integer $VadSeq 当请求的Mode参数填写bvad是，启动VadSeq。此时Seq会被设置为后台vad（静音检测）后的新序号，而VadSeq代表客户端原始Seq值
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
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("RecognizeStatus",$param) and $param["RecognizeStatus"] !== null) {
            $this->RecognizeStatus = $param["RecognizeStatus"];
        }

        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("VadSeq",$param) and $param["VadSeq"] !== null) {
            $this->VadSeq = $param["VadSeq"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

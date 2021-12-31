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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 句子的相关信息
 *
 * @method string getSentence() 获取英语句子
 * @method void setSentence(string $Sentence) 设置英语句子
 * @method integer getParaID() 获取段落id
 * @method void setParaID(integer $ParaID) 设置段落id
 * @method integer getSentenceID() 获取句子id
 * @method void setSentenceID(integer $SentenceID) 设置句子id
 */
class SentenceItem extends AbstractModel
{
    /**
     * @var string 英语句子
     */
    public $Sentence;

    /**
     * @var integer 段落id
     */
    public $ParaID;

    /**
     * @var integer 句子id
     */
    public $SentenceID;

    /**
     * @param string $Sentence 英语句子
     * @param integer $ParaID 段落id
     * @param integer $SentenceID 句子id
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
        if (array_key_exists("Sentence",$param) and $param["Sentence"] !== null) {
            $this->Sentence = $param["Sentence"];
        }

        if (array_key_exists("ParaID",$param) and $param["ParaID"] !== null) {
            $this->ParaID = $param["ParaID"];
        }

        if (array_key_exists("SentenceID",$param) and $param["SentenceID"] !== null) {
            $this->SentenceID = $param["SentenceID"];
        }
    }
}

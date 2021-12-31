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
 * 当前句子包含的所有单词信息
 *
 * @method float getConfidence() 获取当前词的置信度
 * @method void setConfidence(float $Confidence) 设置当前词的置信度
 * @method integer getMbtm() 获取当前单词语音的起始时间点，单位为ms
 * @method void setMbtm(integer $Mbtm) 设置当前单词语音的起始时间点，单位为ms
 * @method integer getMetm() 获取当前单词语音的终止时间点，单位为ms
 * @method void setMetm(integer $Metm) 设置当前单词语音的终止时间点，单位为ms
 * @method string getText() 获取当前词
 * @method void setText(string $Text) 设置当前词
 * @method integer getWsize() 获取当前词的字节数
 * @method void setWsize(integer $Wsize) 设置当前词的字节数
 */
class Word extends AbstractModel
{
    /**
     * @var float 当前词的置信度
     */
    public $Confidence;

    /**
     * @var integer 当前单词语音的起始时间点，单位为ms
     */
    public $Mbtm;

    /**
     * @var integer 当前单词语音的终止时间点，单位为ms
     */
    public $Metm;

    /**
     * @var string 当前词
     */
    public $Text;

    /**
     * @var integer 当前词的字节数
     */
    public $Wsize;

    /**
     * @param float $Confidence 当前词的置信度
     * @param integer $Mbtm 当前单词语音的起始时间点，单位为ms
     * @param integer $Metm 当前单词语音的终止时间点，单位为ms
     * @param string $Text 当前词
     * @param integer $Wsize 当前词的字节数
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Mbtm",$param) and $param["Mbtm"] !== null) {
            $this->Mbtm = $param["Mbtm"];
        }

        if (array_key_exists("Metm",$param) and $param["Metm"] !== null) {
            $this->Metm = $param["Metm"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Wsize",$param) and $param["Wsize"] !== null) {
            $this->Wsize = $param["Wsize"];
        }
    }
}

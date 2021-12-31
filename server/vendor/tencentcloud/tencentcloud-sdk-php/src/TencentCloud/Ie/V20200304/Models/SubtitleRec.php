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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音字幕任务参数
 *
 * @method string getAsrDst() 获取语音识别：
zh：中文
en：英文
 * @method void setAsrDst(string $AsrDst) 设置语音识别：
zh：中文
en：英文
 * @method string getTransDst() 获取翻译识别：
zh：中文
en：英文
 * @method void setTransDst(string $TransDst) 设置翻译识别：
zh：中文
en：英文
 */
class SubtitleRec extends AbstractModel
{
    /**
     * @var string 语音识别：
zh：中文
en：英文
     */
    public $AsrDst;

    /**
     * @var string 翻译识别：
zh：中文
en：英文
     */
    public $TransDst;

    /**
     * @param string $AsrDst 语音识别：
zh：中文
en：英文
     * @param string $TransDst 翻译识别：
zh：中文
en：英文
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
        if (array_key_exists("AsrDst",$param) and $param["AsrDst"] !== null) {
            $this->AsrDst = $param["AsrDst"];
        }

        if (array_key_exists("TransDst",$param) and $param["TransDst"] !== null) {
            $this->TransDst = $param["TransDst"];
        }
    }
}

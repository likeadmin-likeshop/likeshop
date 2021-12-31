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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一句话识别返回的词时间戳
 *
 * @method string getWord() 获取词结果
 * @method void setWord(string $Word) 设置词结果
 * @method integer getStartTime() 获取词在音频中的开始时间
 * @method void setStartTime(integer $StartTime) 设置词在音频中的开始时间
 * @method integer getEndTime() 获取词在音频中的结束时间
 * @method void setEndTime(integer $EndTime) 设置词在音频中的结束时间
 */
class SentenceWord extends AbstractModel
{
    /**
     * @var string 词结果
     */
    public $Word;

    /**
     * @var integer 词在音频中的开始时间
     */
    public $StartTime;

    /**
     * @var integer 词在音频中的结束时间
     */
    public $EndTime;

    /**
     * @param string $Word 词结果
     * @param integer $StartTime 词在音频中的开始时间
     * @param integer $EndTime 词在音频中的结束时间
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

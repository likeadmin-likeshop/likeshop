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
 * 词汇库中的单词出现在音频中的那个句子的起始时间和结束时间信息
 *
 * @method array getVocabDetailInfo() 获取词汇库中的单词出现在该音频中的那个句子的时间戳，出现了几次，就返回对应次数的起始和结束时间戳
 * @method void setVocabDetailInfo(array $VocabDetailInfo) 设置词汇库中的单词出现在该音频中的那个句子的时间戳，出现了几次，就返回对应次数的起始和结束时间戳
 * @method string getVocabLibName() 获取词汇库名
 * @method void setVocabLibName(string $VocabLibName) 设置词汇库名
 */
class VocabDetailInfomation extends AbstractModel
{
    /**
     * @var array 词汇库中的单词出现在该音频中的那个句子的时间戳，出现了几次，就返回对应次数的起始和结束时间戳
     */
    public $VocabDetailInfo;

    /**
     * @var string 词汇库名
     */
    public $VocabLibName;

    /**
     * @param array $VocabDetailInfo 词汇库中的单词出现在该音频中的那个句子的时间戳，出现了几次，就返回对应次数的起始和结束时间戳
     * @param string $VocabLibName 词汇库名
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
        if (array_key_exists("VocabDetailInfo",$param) and $param["VocabDetailInfo"] !== null) {
            $this->VocabDetailInfo = [];
            foreach ($param["VocabDetailInfo"] as $key => $value){
                $obj = new DetailInfo();
                $obj->deserialize($value);
                array_push($this->VocabDetailInfo, $obj);
            }
        }

        if (array_key_exists("VocabLibName",$param) and $param["VocabLibName"] !== null) {
            $this->VocabLibName = $param["VocabLibName"];
        }
    }
}

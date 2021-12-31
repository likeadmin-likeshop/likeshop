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
 * CreateVocab请求参数结构体
 *
 * @method string getVocabLibName() 获取要添加词汇的词汇库名
 * @method void setVocabLibName(string $VocabLibName) 设置要添加词汇的词汇库名
 * @method array getVocabList() 获取要添加的词汇列表
 * @method void setVocabList(array $VocabList) 设置要添加的词汇列表
 */
class CreateVocabRequest extends AbstractModel
{
    /**
     * @var string 要添加词汇的词汇库名
     */
    public $VocabLibName;

    /**
     * @var array 要添加的词汇列表
     */
    public $VocabList;

    /**
     * @param string $VocabLibName 要添加词汇的词汇库名
     * @param array $VocabList 要添加的词汇列表
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
        if (array_key_exists("VocabLibName",$param) and $param["VocabLibName"] !== null) {
            $this->VocabLibName = $param["VocabLibName"];
        }

        if (array_key_exists("VocabList",$param) and $param["VocabList"] !== null) {
            $this->VocabList = $param["VocabList"];
        }
    }
}

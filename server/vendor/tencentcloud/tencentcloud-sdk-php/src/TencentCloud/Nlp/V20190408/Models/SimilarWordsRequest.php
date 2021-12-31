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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SimilarWords请求参数结构体
 *
 * @method string getText() 获取输入的词语（仅支持UTF-8格式，不超过20字）
 * @method void setText(string $Text) 设置输入的词语（仅支持UTF-8格式，不超过20字）
 * @method integer getWordNumber() 获取相似词个数；取值范围：1-200，默认为10；
 * @method void setWordNumber(integer $WordNumber) 设置相似词个数；取值范围：1-200，默认为10；
 */
class SimilarWordsRequest extends AbstractModel
{
    /**
     * @var string 输入的词语（仅支持UTF-8格式，不超过20字）
     */
    public $Text;

    /**
     * @var integer 相似词个数；取值范围：1-200，默认为10；
     */
    public $WordNumber;

    /**
     * @param string $Text 输入的词语（仅支持UTF-8格式，不超过20字）
     * @param integer $WordNumber 相似词个数；取值范围：1-200，默认为10；
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

        if (array_key_exists("WordNumber",$param) and $param["WordNumber"] !== null) {
            $this->WordNumber = $param["WordNumber"];
        }
    }
}

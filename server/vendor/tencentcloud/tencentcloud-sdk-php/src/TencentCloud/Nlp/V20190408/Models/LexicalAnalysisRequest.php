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
 * LexicalAnalysis请求参数结构体
 *
 * @method string getText() 获取待分析的文本（仅支持UTF-8格式，不超过500字）
 * @method void setText(string $Text) 设置待分析的文本（仅支持UTF-8格式，不超过500字）
 * @method string getDictId() 获取指定要加载的自定义词库ID。
 * @method void setDictId(string $DictId) 设置指定要加载的自定义词库ID。
 * @method integer getFlag() 获取词法分析模式（默认取2值）：
1、高精度（混合粒度分词能力）；
2、高性能（单粒度分词能力）；
 * @method void setFlag(integer $Flag) 设置词法分析模式（默认取2值）：
1、高精度（混合粒度分词能力）；
2、高性能（单粒度分词能力）；
 */
class LexicalAnalysisRequest extends AbstractModel
{
    /**
     * @var string 待分析的文本（仅支持UTF-8格式，不超过500字）
     */
    public $Text;

    /**
     * @var string 指定要加载的自定义词库ID。
     */
    public $DictId;

    /**
     * @var integer 词法分析模式（默认取2值）：
1、高精度（混合粒度分词能力）；
2、高性能（单粒度分词能力）；
     */
    public $Flag;

    /**
     * @param string $Text 待分析的文本（仅支持UTF-8格式，不超过500字）
     * @param string $DictId 指定要加载的自定义词库ID。
     * @param integer $Flag 词法分析模式（默认取2值）：
1、高精度（混合粒度分词能力）；
2、高性能（单粒度分词能力）；
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

        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}

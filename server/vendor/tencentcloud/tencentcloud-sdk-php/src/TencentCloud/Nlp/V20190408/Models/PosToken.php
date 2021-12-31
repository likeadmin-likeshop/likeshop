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
 * 分词&词性标注结果
 *
 * @method string getWord() 获取基础词
 * @method void setWord(string $Word) 设置基础词
 * @method integer getLength() 获取长度
 * @method void setLength(integer $Length) 设置长度
 * @method integer getBeginOffset() 获取起始位置
 * @method void setBeginOffset(integer $BeginOffset) 设置起始位置
 * @method string getPos() 获取词性
 * @method void setPos(string $Pos) 设置词性
 */
class PosToken extends AbstractModel
{
    /**
     * @var string 基础词
     */
    public $Word;

    /**
     * @var integer 长度
     */
    public $Length;

    /**
     * @var integer 起始位置
     */
    public $BeginOffset;

    /**
     * @var string 词性
     */
    public $Pos;

    /**
     * @param string $Word 基础词
     * @param integer $Length 长度
     * @param integer $BeginOffset 起始位置
     * @param string $Pos 词性
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

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("Pos",$param) and $param["Pos"] !== null) {
            $this->Pos = $param["Pos"];
        }
    }
}

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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本格式
 *
 * @method string getFormat() 获取文本类型，本参数取值为TextFile。
 * @method void setFormat(string $Format) 设置文本类型，本参数取值为TextFile。
 * @method string getRegex() 获取处理文本用的正则表达式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(string $Regex) 设置处理文本用的正则表达式。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextFile extends AbstractModel
{
    /**
     * @var string 文本类型，本参数取值为TextFile。
     */
    public $Format;

    /**
     * @var string 处理文本用的正则表达式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @param string $Format 文本类型，本参数取值为TextFile。
     * @param string $Regex 处理文本用的正则表达式。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}

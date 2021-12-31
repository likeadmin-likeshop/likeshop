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
 * CSV序列化及反序列化数据结构
 *
 * @method string getEscape() 获取CSV序列化转义符，默认为"\\"，最长8个字符，如 Escape: "/\"
 * @method void setEscape(string $Escape) 设置CSV序列化转义符，默认为"\\"，最长8个字符，如 Escape: "/\"
 * @method string getQuote() 获取CSV序列化字段域符，默认为"'"，最长8个字符, 如 Quote: "\""
 * @method void setQuote(string $Quote) 设置CSV序列化字段域符，默认为"'"，最长8个字符, 如 Quote: "\""
 * @method string getSeparator() 获取CSV序列化分隔符，默认为"\t"，最长8个字符, 如 Separator: "\t"
 * @method void setSeparator(string $Separator) 设置CSV序列化分隔符，默认为"\t"，最长8个字符, 如 Separator: "\t"
 */
class CSVSerde extends AbstractModel
{
    /**
     * @var string CSV序列化转义符，默认为"\\"，最长8个字符，如 Escape: "/\"
     */
    public $Escape;

    /**
     * @var string CSV序列化字段域符，默认为"'"，最长8个字符, 如 Quote: "\""
     */
    public $Quote;

    /**
     * @var string CSV序列化分隔符，默认为"\t"，最长8个字符, 如 Separator: "\t"
     */
    public $Separator;

    /**
     * @param string $Escape CSV序列化转义符，默认为"\\"，最长8个字符，如 Escape: "/\"
     * @param string $Quote CSV序列化字段域符，默认为"'"，最长8个字符, 如 Quote: "\""
     * @param string $Separator CSV序列化分隔符，默认为"\t"，最长8个字符, 如 Separator: "\t"
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
        if (array_key_exists("Escape",$param) and $param["Escape"] !== null) {
            $this->Escape = $param["Escape"];
        }

        if (array_key_exists("Quote",$param) and $param["Quote"] !== null) {
            $this->Quote = $param["Quote"];
        }

        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }
    }
}

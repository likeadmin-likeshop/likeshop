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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕信息输入参数。
 *
 * @method string getName() 获取字幕名字，长度限制：64 个字符。
 * @method void setName(string $Name) 设置字幕名字，长度限制：64 个字符。
 * @method string getLanguage() 获取字幕语言。常见的取值如下：
<li>cn：中文</li>
<li>ja：日文</li>
<li>en-US：英文</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
 * @method void setLanguage(string $Language) 设置字幕语言。常见的取值如下：
<li>cn：中文</li>
<li>ja：日文</li>
<li>en-US：英文</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
 * @method string getFormat() 获取字幕格式。取值范围如下：
<li>vtt</li>
 * @method void setFormat(string $Format) 设置字幕格式。取值范围如下：
<li>vtt</li>
 * @method string getContent() 获取字幕内容，进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串。
 * @method void setContent(string $Content) 设置字幕内容，进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串。
 * @method string getId() 获取字幕的唯一标识。长度不能超过16个字符，可以使用大小写字母、数字、下划线（_）或横杠（-）。不能与媒资文件中现有字幕的唯一标识重复。
 * @method void setId(string $Id) 设置字幕的唯一标识。长度不能超过16个字符，可以使用大小写字母、数字、下划线（_）或横杠（-）。不能与媒资文件中现有字幕的唯一标识重复。
 */
class MediaSubtitleInput extends AbstractModel
{
    /**
     * @var string 字幕名字，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 字幕语言。常见的取值如下：
<li>cn：中文</li>
<li>ja：日文</li>
<li>en-US：英文</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
     */
    public $Language;

    /**
     * @var string 字幕格式。取值范围如下：
<li>vtt</li>
     */
    public $Format;

    /**
     * @var string 字幕内容，进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串。
     */
    public $Content;

    /**
     * @var string 字幕的唯一标识。长度不能超过16个字符，可以使用大小写字母、数字、下划线（_）或横杠（-）。不能与媒资文件中现有字幕的唯一标识重复。
     */
    public $Id;

    /**
     * @param string $Name 字幕名字，长度限制：64 个字符。
     * @param string $Language 字幕语言。常见的取值如下：
<li>cn：中文</li>
<li>ja：日文</li>
<li>en-US：英文</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
     * @param string $Format 字幕格式。取值范围如下：
<li>vtt</li>
     * @param string $Content 字幕内容，进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串。
     * @param string $Id 字幕的唯一标识。长度不能超过16个字符，可以使用大小写字母、数字、下划线（_）或横杠（-）。不能与媒资文件中现有字幕的唯一标识重复。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}

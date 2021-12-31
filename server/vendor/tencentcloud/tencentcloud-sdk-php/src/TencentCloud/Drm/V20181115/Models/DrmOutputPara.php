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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Drm加密对象输出参数
 *
 * @method string getType() 获取内容类型。例:video，audio，mpd，m3u8
 * @method void setType(string $Type) 设置内容类型。例:video，audio，mpd，m3u8
 * @method string getLanguage() 获取语言,例: en, zh-cn
 * @method void setLanguage(string $Language) 设置语言,例: en, zh-cn
 */
class DrmOutputPara extends AbstractModel
{
    /**
     * @var string 内容类型。例:video，audio，mpd，m3u8
     */
    public $Type;

    /**
     * @var string 语言,例: en, zh-cn
     */
    public $Language;

    /**
     * @param string $Type 内容类型。例:video，audio，mpd，m3u8
     * @param string $Language 语言,例: en, zh-cn
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}

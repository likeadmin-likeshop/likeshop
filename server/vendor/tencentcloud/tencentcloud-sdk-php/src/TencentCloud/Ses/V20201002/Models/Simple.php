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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邮件发送的内容，可以是纯文本(TEXT)，也可以是纯代码(HTML)，或者纯文本+HTML的组合(建议方式)
 *
 * @method string getHtml() 获取base64之后的Html代码。需要包含所有的代码信息，不要包含外部css，否则会导致显示格式错乱
 * @method void setHtml(string $Html) 设置base64之后的Html代码。需要包含所有的代码信息，不要包含外部css，否则会导致显示格式错乱
 * @method string getText() 获取base64之后的纯文本信息，如果没有Html，邮件中会直接显示纯文本；如果有Html，它代表邮件的纯文本样式
 * @method void setText(string $Text) 设置base64之后的纯文本信息，如果没有Html，邮件中会直接显示纯文本；如果有Html，它代表邮件的纯文本样式
 */
class Simple extends AbstractModel
{
    /**
     * @var string base64之后的Html代码。需要包含所有的代码信息，不要包含外部css，否则会导致显示格式错乱
     */
    public $Html;

    /**
     * @var string base64之后的纯文本信息，如果没有Html，邮件中会直接显示纯文本；如果有Html，它代表邮件的纯文本样式
     */
    public $Text;

    /**
     * @param string $Html base64之后的Html代码。需要包含所有的代码信息，不要包含外部css，否则会导致显示格式错乱
     * @param string $Text base64之后的纯文本信息，如果没有Html，邮件中会直接显示纯文本；如果有Html，它代表邮件的纯文本样式
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
        if (array_key_exists("Html",$param) and $param["Html"] !== null) {
            $this->Html = $param["Html"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}

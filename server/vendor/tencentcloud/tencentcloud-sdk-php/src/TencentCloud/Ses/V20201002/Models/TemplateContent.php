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
 * 模板内容，TEXT和HTML必须至少存在一项，建议使用TEXT和HTML的组合
 *
 * @method string getHtml() 获取base64之后的Html代码
 * @method void setHtml(string $Html) 设置base64之后的Html代码
 * @method string getText() 获取base64之后的文本内容
 * @method void setText(string $Text) 设置base64之后的文本内容
 */
class TemplateContent extends AbstractModel
{
    /**
     * @var string base64之后的Html代码
     */
    public $Html;

    /**
     * @var string base64之后的文本内容
     */
    public $Text;

    /**
     * @param string $Html base64之后的Html代码
     * @param string $Text base64之后的文本内容
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

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
namespace TencentCloud\Tbp\V20190627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Group是消息组的具体定义，当前包含ContentType、Url、Content三个字段。其中，具体的ContentType字段定义，参考互联网MIME类型标准。
 *
 * @method string getContentType() 获取消息类型参考互联网MIME类型标准，当前仅支持"text/plain"。
 * @method void setContentType(string $ContentType) 设置消息类型参考互联网MIME类型标准，当前仅支持"text/plain"。
 * @method string getUrl() 获取返回内容以链接形式提供。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置返回内容以链接形式提供。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取普通文本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置普通文本。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Group extends AbstractModel
{
    /**
     * @var string 消息类型参考互联网MIME类型标准，当前仅支持"text/plain"。
     */
    public $ContentType;

    /**
     * @var string 返回内容以链接形式提供。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 普通文本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $ContentType 消息类型参考互联网MIME类型标准，当前仅支持"text/plain"。
     * @param string $Url 返回内容以链接形式提供。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 普通文本。
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
        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}

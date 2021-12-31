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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 素材模板消息标题的样例列表
 *
 * @method string getContent() 获取模板预览区内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置模板预览区内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExample() 获取模板预览示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExample(string $Example) 设置模板预览示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyArray() 获取模板预览区域键数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyArray(string $KeyArray) 设置模板预览区域键数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method string getTitle() 获取模板标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置模板标题
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceTemplateHeader extends AbstractModel
{
    /**
     * @var string 模板预览区内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 模板预览示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Example;

    /**
     * @var string 模板预览区域键数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyArray;

    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var string 模板标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @param string $Content 模板预览区内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Example 模板预览示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyArray 模板预览区域键数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 模板id
     * @param string $Title 模板标题
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = $param["Example"];
        }

        if (array_key_exists("KeyArray",$param) and $param["KeyArray"] !== null) {
            $this->KeyArray = $param["KeyArray"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}

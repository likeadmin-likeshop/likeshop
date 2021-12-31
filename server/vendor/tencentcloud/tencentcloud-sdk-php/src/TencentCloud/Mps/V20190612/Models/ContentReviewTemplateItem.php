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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容审核模板详情
 *
 * @method integer getDefinition() 获取内容审核模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置内容审核模板唯一标识。
 * @method string getName() 获取内容审核模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置内容审核模板名称，长度限制：64 个字符。
 * @method string getComment() 获取内容审核模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置内容审核模板描述信息，长度限制：256 个字符。
 * @method PornConfigureInfo getPornConfigure() 获取鉴黄控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) 设置鉴黄控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TerrorismConfigureInfo getTerrorismConfigure() 获取鉴恐控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) 设置鉴恐控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PoliticalConfigureInfo getPoliticalConfigure() 获取鉴政控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) 设置鉴政控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProhibitedConfigureInfo getProhibitedConfigure() 获取违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) 设置违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserDefineConfigureInfo getUserDefineConfigure() 获取用户自定义内容审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) 设置用户自定义内容审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 */
class ContentReviewTemplateItem extends AbstractModel
{
    /**
     * @var integer 内容审核模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 内容审核模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 内容审核模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var PornConfigureInfo 鉴黄控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo 鉴恐控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo 鉴政控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo 违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo 用户自定义内容审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefineConfigure;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 内容审核模板唯一标识。
     * @param string $Name 内容审核模板名称，长度限制：64 个字符。
     * @param string $Comment 内容审核模板描述信息，长度限制：256 个字符。
     * @param PornConfigureInfo $PornConfigure 鉴黄控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TerrorismConfigureInfo $TerrorismConfigure 鉴恐控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PoliticalConfigureInfo $PoliticalConfigure 鉴政控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProhibitedConfigureInfo $ProhibitedConfigure 违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserDefineConfigureInfo $UserDefineConfigure 用户自定义内容审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PornConfigure",$param) and $param["PornConfigure"] !== null) {
            $this->PornConfigure = new PornConfigureInfo();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfo();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfo();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfo();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfo();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

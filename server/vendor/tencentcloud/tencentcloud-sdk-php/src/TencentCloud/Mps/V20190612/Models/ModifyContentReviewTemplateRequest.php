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
 * ModifyContentReviewTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取内容智能识别模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置内容智能识别模板唯一标识。
 * @method string getName() 获取内容智能识别模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置内容智能识别模板名称，长度限制：64 个字符。
 * @method string getComment() 获取内容智能识别模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置内容智能识别模板描述信息，长度限制：256 个字符。
 * @method PornConfigureInfoForUpdate getPornConfigure() 获取令人反感的信息的控制参数。
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) 设置令人反感的信息的控制参数。
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() 获取令人不安全的信息的控制参数。
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) 设置令人不安全的信息的控制参数。
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() 获取令人不适宜的控制参数。
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) 设置令人不适宜的控制参数。
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() 获取违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此参数尚未支持。
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) 设置违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此参数尚未支持。
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() 获取用户自定义内容智能识别控制参数。
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) 设置用户自定义内容智能识别控制参数。
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer 内容智能识别模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 内容智能识别模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 内容智能识别模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var PornConfigureInfoForUpdate 令人反感的信息的控制参数。
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfoForUpdate 令人不安全的信息的控制参数。
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate 令人不适宜的控制参数。
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate 违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此参数尚未支持。
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate 用户自定义内容智能识别控制参数。
     */
    public $UserDefineConfigure;

    /**
     * @param integer $Definition 内容智能识别模板唯一标识。
     * @param string $Name 内容智能识别模板名称，长度限制：64 个字符。
     * @param string $Comment 内容智能识别模板描述信息，长度限制：256 个字符。
     * @param PornConfigureInfoForUpdate $PornConfigure 令人反感的信息的控制参数。
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure 令人不安全的信息的控制参数。
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure 令人不适宜的控制参数。
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure 违禁控制参数。违禁内容包括：
<li>谩骂；</li>
<li>涉毒违法。</li>
注意：此参数尚未支持。
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure 用户自定义内容智能识别控制参数。
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
            $this->PornConfigure = new PornConfigureInfoForUpdate();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfoForUpdate();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfoForUpdate();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfoForUpdate();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfoForUpdate();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }
    }
}

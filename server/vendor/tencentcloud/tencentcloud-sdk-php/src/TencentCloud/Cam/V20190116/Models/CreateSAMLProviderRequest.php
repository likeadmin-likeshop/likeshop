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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSAMLProvider请求参数结构体
 *
 * @method string getName() 获取SAML身份提供商名称
 * @method void setName(string $Name) 设置SAML身份提供商名称
 * @method string getDescription() 获取SAML身份提供商描述
 * @method void setDescription(string $Description) 设置SAML身份提供商描述
 * @method string getSAMLMetadataDocument() 获取SAML身份提供商Base64编码的元数据文档
 * @method void setSAMLMetadataDocument(string $SAMLMetadataDocument) 设置SAML身份提供商Base64编码的元数据文档
 */
class CreateSAMLProviderRequest extends AbstractModel
{
    /**
     * @var string SAML身份提供商名称
     */
    public $Name;

    /**
     * @var string SAML身份提供商描述
     */
    public $Description;

    /**
     * @var string SAML身份提供商Base64编码的元数据文档
     */
    public $SAMLMetadataDocument;

    /**
     * @param string $Name SAML身份提供商名称
     * @param string $Description SAML身份提供商描述
     * @param string $SAMLMetadataDocument SAML身份提供商Base64编码的元数据文档
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SAMLMetadataDocument",$param) and $param["SAMLMetadataDocument"] !== null) {
            $this->SAMLMetadataDocument = $param["SAMLMetadataDocument"];
        }
    }
}

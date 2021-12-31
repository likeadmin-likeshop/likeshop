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
 * GetSAMLProvider返回参数结构体
 *
 * @method string getName() 获取SAML身份提供商名称
 * @method void setName(string $Name) 设置SAML身份提供商名称
 * @method string getDescription() 获取SAML身份提供商描述
 * @method void setDescription(string $Description) 设置SAML身份提供商描述
 * @method string getCreateTime() 获取SAML身份提供商创建时间
 * @method void setCreateTime(string $CreateTime) 设置SAML身份提供商创建时间
 * @method string getModifyTime() 获取SAML身份提供商上次修改时间
 * @method void setModifyTime(string $ModifyTime) 设置SAML身份提供商上次修改时间
 * @method string getSAMLMetadata() 获取SAML身份提供商元数据文档
 * @method void setSAMLMetadata(string $SAMLMetadata) 设置SAML身份提供商元数据文档
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetSAMLProviderResponse extends AbstractModel
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
     * @var string SAML身份提供商创建时间
     */
    public $CreateTime;

    /**
     * @var string SAML身份提供商上次修改时间
     */
    public $ModifyTime;

    /**
     * @var string SAML身份提供商元数据文档
     */
    public $SAMLMetadata;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name SAML身份提供商名称
     * @param string $Description SAML身份提供商描述
     * @param string $CreateTime SAML身份提供商创建时间
     * @param string $ModifyTime SAML身份提供商上次修改时间
     * @param string $SAMLMetadata SAML身份提供商元数据文档
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SAMLMetadata",$param) and $param["SAMLMetadata"] !== null) {
            $this->SAMLMetadata = $param["SAMLMetadata"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

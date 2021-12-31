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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTemplate请求参数结构体
 *
 * @method ContactInfo getContactInfo() 获取联系人信息
 * @method void setContactInfo(ContactInfo $ContactInfo) 设置联系人信息
 * @method CertificateInfo getCertificateInfo() 获取证件信息
 * @method void setCertificateInfo(CertificateInfo $CertificateInfo) 设置证件信息
 */
class CreateTemplateRequest extends AbstractModel
{
    /**
     * @var ContactInfo 联系人信息
     */
    public $ContactInfo;

    /**
     * @var CertificateInfo 证件信息
     */
    public $CertificateInfo;

    /**
     * @param ContactInfo $ContactInfo 联系人信息
     * @param CertificateInfo $CertificateInfo 证件信息
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
        if (array_key_exists("ContactInfo",$param) and $param["ContactInfo"] !== null) {
            $this->ContactInfo = new ContactInfo();
            $this->ContactInfo->deserialize($param["ContactInfo"]);
        }

        if (array_key_exists("CertificateInfo",$param) and $param["CertificateInfo"] !== null) {
            $this->CertificateInfo = new CertificateInfo();
            $this->CertificateInfo->deserialize($param["CertificateInfo"]);
        }
    }
}

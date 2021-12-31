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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点验证数据
 *
 * @method string getDomain() 获取根域名。
 * @method void setDomain(string $Domain) 设置根域名。
 * @method string getTxtName() 获取txt解析域名验证的name。
 * @method void setTxtName(string $TxtName) 设置txt解析域名验证的name。
 * @method string getTxtText() 获取txt解析域名验证的text。
 * @method void setTxtText(string $TxtText) 设置txt解析域名验证的text。
 * @method string getValidTo() 获取验证有效期，在此之前有效。
 * @method void setValidTo(string $ValidTo) 设置验证有效期，在此之前有效。
 * @method integer getVerifyStatus() 获取验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
 * @method void setVerifyStatus(integer $VerifyStatus) 设置验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
 * @method string getCreatedAt() 获取CreatedAt。
 * @method void setCreatedAt(string $CreatedAt) 设置CreatedAt。
 * @method string getUpdatedAt() 获取UpdatedAt。
 * @method void setUpdatedAt(string $UpdatedAt) 设置UpdatedAt。
 * @method integer getId() 获取ID。
 * @method void setId(integer $Id) 设置ID。
 * @method integer getAppid() 获取云用户appid
 * @method void setAppid(integer $Appid) 设置云用户appid
 * @method string getVerifyUrl() 获取用于验证站点的url，即访问该url获取验证数据。
 * @method void setVerifyUrl(string $VerifyUrl) 设置用于验证站点的url，即访问该url获取验证数据。
 * @method string getVerifyFileUrl() 获取获取验证验证文件的url。
 * @method void setVerifyFileUrl(string $VerifyFileUrl) 设置获取验证验证文件的url。
 */
class SitesVerification extends AbstractModel
{
    /**
     * @var string 根域名。
     */
    public $Domain;

    /**
     * @var string txt解析域名验证的name。
     */
    public $TxtName;

    /**
     * @var string txt解析域名验证的text。
     */
    public $TxtText;

    /**
     * @var string 验证有效期，在此之前有效。
     */
    public $ValidTo;

    /**
     * @var integer 验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
     */
    public $VerifyStatus;

    /**
     * @var string CreatedAt。
     */
    public $CreatedAt;

    /**
     * @var string UpdatedAt。
     */
    public $UpdatedAt;

    /**
     * @var integer ID。
     */
    public $Id;

    /**
     * @var integer 云用户appid
     */
    public $Appid;

    /**
     * @var string 用于验证站点的url，即访问该url获取验证数据。
     */
    public $VerifyUrl;

    /**
     * @var string 获取验证验证文件的url。
     */
    public $VerifyFileUrl;

    /**
     * @param string $Domain 根域名。
     * @param string $TxtName txt解析域名验证的name。
     * @param string $TxtText txt解析域名验证的text。
     * @param string $ValidTo 验证有效期，在此之前有效。
     * @param integer $VerifyStatus 验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
     * @param string $CreatedAt CreatedAt。
     * @param string $UpdatedAt UpdatedAt。
     * @param integer $Id ID。
     * @param integer $Appid 云用户appid
     * @param string $VerifyUrl 用于验证站点的url，即访问该url获取验证数据。
     * @param string $VerifyFileUrl 获取验证验证文件的url。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TxtName",$param) and $param["TxtName"] !== null) {
            $this->TxtName = $param["TxtName"];
        }

        if (array_key_exists("TxtText",$param) and $param["TxtText"] !== null) {
            $this->TxtText = $param["TxtText"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("VerifyUrl",$param) and $param["VerifyUrl"] !== null) {
            $this->VerifyUrl = $param["VerifyUrl"];
        }

        if (array_key_exists("VerifyFileUrl",$param) and $param["VerifyFileUrl"] !== null) {
            $this->VerifyFileUrl = $param["VerifyFileUrl"];
        }
    }
}

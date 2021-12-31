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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateL7RuleCert请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method string getId() 获取资源实例ID，例如高防IP实例的ID，高防IP专业版实例的ID
 * @method void setId(string $Id) 设置资源实例ID，例如高防IP实例的ID，高防IP专业版实例的ID
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getCertType() 获取证书类型，当为协议为HTTPS协议时必须填，取值[2(腾讯云托管证书)]
 * @method void setCertType(integer $CertType) 设置证书类型，当为协议为HTTPS协议时必须填，取值[2(腾讯云托管证书)]
 * @method string getSSLId() 获取当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
 * @method void setSSLId(string $SSLId) 设置当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
 * @method string getCert() 获取当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method void setCert(string $Cert) 设置当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method string getPrivateKey() 获取当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method void setPrivateKey(string $PrivateKey) 设置当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 */
class CreateL7RuleCertRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源实例ID，例如高防IP实例的ID，高防IP专业版实例的ID
     */
    public $Id;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var integer 证书类型，当为协议为HTTPS协议时必须填，取值[2(腾讯云托管证书)]
     */
    public $CertType;

    /**
     * @var string 当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
     */
    public $SSLId;

    /**
     * @var string 当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
     */
    public $Cert;

    /**
     * @var string 当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
     */
    public $PrivateKey;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     * @param string $Id 资源实例ID，例如高防IP实例的ID，高防IP专业版实例的ID
     * @param string $RuleId 规则ID
     * @param integer $CertType 证书类型，当为协议为HTTPS协议时必须填，取值[2(腾讯云托管证书)]
     * @param string $SSLId 当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
     * @param string $Cert 当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
     * @param string $PrivateKey 当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}

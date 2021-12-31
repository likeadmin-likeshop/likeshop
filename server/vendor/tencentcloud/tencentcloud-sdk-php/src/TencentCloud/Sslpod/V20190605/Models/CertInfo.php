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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书信息
 *
 * @method string getHash() 获取证书sha1
 * @method void setHash(string $Hash) 设置证书sha1
 * @method string getCN() 获取证书通用名称
 * @method void setCN(string $CN) 设置证书通用名称
 * @method string getSANs() 获取备用名称
 * @method void setSANs(string $SANs) 设置备用名称
 * @method string getKeyAlgo() 获取公钥算法
 * @method void setKeyAlgo(string $KeyAlgo) 设置公钥算法
 * @method string getIssuer() 获取颁发者
 * @method void setIssuer(string $Issuer) 设置颁发者
 * @method string getBeginTime() 获取有效期开始
 * @method void setBeginTime(string $BeginTime) 设置有效期开始
 * @method string getEndTime() 获取有效期结束
 * @method void setEndTime(string $EndTime) 设置有效期结束
 * @method integer getDays() 获取剩余天数
 * @method void setDays(integer $Days) 设置剩余天数
 * @method string getBrand() 获取品牌
 * @method void setBrand(string $Brand) 设置品牌
 * @method string getTrustStatus() 获取信任状态
 * @method void setTrustStatus(string $TrustStatus) 设置信任状态
 * @method string getCertType() 获取证书类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertType(string $CertType) 设置证书类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string 证书sha1
     */
    public $Hash;

    /**
     * @var string 证书通用名称
     */
    public $CN;

    /**
     * @var string 备用名称
     */
    public $SANs;

    /**
     * @var string 公钥算法
     */
    public $KeyAlgo;

    /**
     * @var string 颁发者
     */
    public $Issuer;

    /**
     * @var string 有效期开始
     */
    public $BeginTime;

    /**
     * @var string 有效期结束
     */
    public $EndTime;

    /**
     * @var integer 剩余天数
     */
    public $Days;

    /**
     * @var string 品牌
     */
    public $Brand;

    /**
     * @var string 信任状态
     */
    public $TrustStatus;

    /**
     * @var string 证书类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertType;

    /**
     * @param string $Hash 证书sha1
     * @param string $CN 证书通用名称
     * @param string $SANs 备用名称
     * @param string $KeyAlgo 公钥算法
     * @param string $Issuer 颁发者
     * @param string $BeginTime 有效期开始
     * @param string $EndTime 有效期结束
     * @param integer $Days 剩余天数
     * @param string $Brand 品牌
     * @param string $TrustStatus 信任状态
     * @param string $CertType 证书类型
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
        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("CN",$param) and $param["CN"] !== null) {
            $this->CN = $param["CN"];
        }

        if (array_key_exists("SANs",$param) and $param["SANs"] !== null) {
            $this->SANs = $param["SANs"];
        }

        if (array_key_exists("KeyAlgo",$param) and $param["KeyAlgo"] !== null) {
            $this->KeyAlgo = $param["KeyAlgo"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("TrustStatus",$param) and $param["TrustStatus"] !== null) {
            $this->TrustStatus = $param["TrustStatus"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }
    }
}

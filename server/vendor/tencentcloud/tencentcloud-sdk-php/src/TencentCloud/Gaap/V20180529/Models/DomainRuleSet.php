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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按照域名分类的7层监听器转发规则信息
 *
 * @method string getDomain() 获取转发规则域名。
 * @method void setDomain(string $Domain) 设置转发规则域名。
 * @method array getRuleSet() 获取该域名对应的转发规则列表。
 * @method void setRuleSet(array $RuleSet) 设置该域名对应的转发规则列表。
 * @method string getCertificateId() 获取该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateId(string $CertificateId) 设置该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateAlias() 获取该域名对应服务器证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateAlias(string $CertificateAlias) 设置该域名对应服务器证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientCertificateId() 获取该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientCertificateAlias() 获取该域名对应客户端证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertificateAlias(string $ClientCertificateAlias) 设置该域名对应客户端证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBasicAuthConfId() 获取该域名对应基础认证配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicAuthConfId(string $BasicAuthConfId) 设置该域名对应基础认证配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBasicAuth() 获取基础认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicAuth(integer $BasicAuth) 设置基础认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBasicAuthConfAlias() 获取该域名对应基础认证配置名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicAuthConfAlias(string $BasicAuthConfAlias) 设置该域名对应基础认证配置名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealServerCertificateId() 获取该域名对应源站认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerCertificateId(string $RealServerCertificateId) 设置该域名对应源站认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealServerAuth() 获取源站认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerAuth(integer $RealServerAuth) 设置源站认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealServerCertificateAlias() 获取该域名对应源站认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerCertificateAlias(string $RealServerCertificateAlias) 设置该域名对应源站认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGaapCertificateId() 获取该域名对应通道认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGaapCertificateId(string $GaapCertificateId) 设置该域名对应通道认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGaapAuth() 获取通道认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGaapAuth(integer $GaapAuth) 设置通道认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGaapCertificateAlias() 获取该域名对应通道认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGaapCertificateAlias(string $GaapCertificateAlias) 设置该域名对应通道认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealServerCertificateDomain() 获取源站认证域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerCertificateDomain(string $RealServerCertificateDomain) 设置源站认证域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolyClientCertificateAliasInfo() 获取多客户端证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolyClientCertificateAliasInfo(array $PolyClientCertificateAliasInfo) 设置多客户端证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolyRealServerCertificateAliasInfo() 获取多源站证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolyRealServerCertificateAliasInfo(array $PolyRealServerCertificateAliasInfo) 设置多源站证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainStatus() 获取域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainStatus(integer $DomainStatus) 设置域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainRuleSet extends AbstractModel
{
    /**
     * @var string 转发规则域名。
     */
    public $Domain;

    /**
     * @var array 该域名对应的转发规则列表。
     */
    public $RuleSet;

    /**
     * @var string 该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateId;

    /**
     * @var string 该域名对应服务器证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateAlias;

    /**
     * @var string 该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertificateId;

    /**
     * @var string 该域名对应客户端证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertificateAlias;

    /**
     * @var string 该域名对应基础认证配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicAuthConfId;

    /**
     * @var integer 基础认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicAuth;

    /**
     * @var string 该域名对应基础认证配置名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicAuthConfAlias;

    /**
     * @var string 该域名对应源站认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerCertificateId;

    /**
     * @var integer 源站认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerAuth;

    /**
     * @var string 该域名对应源站认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerCertificateAlias;

    /**
     * @var string 该域名对应通道认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GaapCertificateId;

    /**
     * @var integer 通道认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GaapAuth;

    /**
     * @var string 该域名对应通道认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GaapCertificateAlias;

    /**
     * @var string 源站认证域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerCertificateDomain;

    /**
     * @var array 多客户端证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolyClientCertificateAliasInfo;

    /**
     * @var array 多源站证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolyRealServerCertificateAliasInfo;

    /**
     * @var integer 域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainStatus;

    /**
     * @param string $Domain 转发规则域名。
     * @param array $RuleSet 该域名对应的转发规则列表。
     * @param string $CertificateId 该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateAlias 该域名对应服务器证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientCertificateId 该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientCertificateAlias 该域名对应客户端证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BasicAuthConfId 该域名对应基础认证配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BasicAuth 基础认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BasicAuthConfAlias 该域名对应基础认证配置名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealServerCertificateId 该域名对应源站认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealServerAuth 源站认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealServerCertificateAlias 该域名对应源站认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GaapCertificateId 该域名对应通道认证证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GaapAuth 通道认证开关，其中：
0，表示未开启；
1，表示已开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GaapCertificateAlias 该域名对应通道认证证书名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealServerCertificateDomain 源站认证域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolyClientCertificateAliasInfo 多客户端证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolyRealServerCertificateAliasInfo 多源站证书时，返回多个证书的id和别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainStatus 域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new RuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("ClientCertificateAlias",$param) and $param["ClientCertificateAlias"] !== null) {
            $this->ClientCertificateAlias = $param["ClientCertificateAlias"];
        }

        if (array_key_exists("BasicAuthConfId",$param) and $param["BasicAuthConfId"] !== null) {
            $this->BasicAuthConfId = $param["BasicAuthConfId"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = $param["BasicAuth"];
        }

        if (array_key_exists("BasicAuthConfAlias",$param) and $param["BasicAuthConfAlias"] !== null) {
            $this->BasicAuthConfAlias = $param["BasicAuthConfAlias"];
        }

        if (array_key_exists("RealServerCertificateId",$param) and $param["RealServerCertificateId"] !== null) {
            $this->RealServerCertificateId = $param["RealServerCertificateId"];
        }

        if (array_key_exists("RealServerAuth",$param) and $param["RealServerAuth"] !== null) {
            $this->RealServerAuth = $param["RealServerAuth"];
        }

        if (array_key_exists("RealServerCertificateAlias",$param) and $param["RealServerCertificateAlias"] !== null) {
            $this->RealServerCertificateAlias = $param["RealServerCertificateAlias"];
        }

        if (array_key_exists("GaapCertificateId",$param) and $param["GaapCertificateId"] !== null) {
            $this->GaapCertificateId = $param["GaapCertificateId"];
        }

        if (array_key_exists("GaapAuth",$param) and $param["GaapAuth"] !== null) {
            $this->GaapAuth = $param["GaapAuth"];
        }

        if (array_key_exists("GaapCertificateAlias",$param) and $param["GaapCertificateAlias"] !== null) {
            $this->GaapCertificateAlias = $param["GaapCertificateAlias"];
        }

        if (array_key_exists("RealServerCertificateDomain",$param) and $param["RealServerCertificateDomain"] !== null) {
            $this->RealServerCertificateDomain = $param["RealServerCertificateDomain"];
        }

        if (array_key_exists("PolyClientCertificateAliasInfo",$param) and $param["PolyClientCertificateAliasInfo"] !== null) {
            $this->PolyClientCertificateAliasInfo = [];
            foreach ($param["PolyClientCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyClientCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("PolyRealServerCertificateAliasInfo",$param) and $param["PolyRealServerCertificateAliasInfo"] !== null) {
            $this->PolyRealServerCertificateAliasInfo = [];
            foreach ($param["PolyRealServerCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyRealServerCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }
    }
}

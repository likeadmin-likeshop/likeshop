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
 * L7规则
 *
 * @method string getProtocol() 获取转发协议，取值[http, https]
 * @method void setProtocol(string $Protocol) 设置转发协议，取值[http, https]
 * @method string getDomain() 获取转发域名
 * @method void setDomain(string $Domain) 设置转发域名
 * @method integer getSourceType() 获取回源方式，取值[1(域名回源)，2(IP回源)]
 * @method void setSourceType(integer $SourceType) 设置回源方式，取值[1(域名回源)，2(IP回源)]
 * @method integer getKeepTime() 获取会话保持时间，单位秒
 * @method void setKeepTime(integer $KeepTime) 设置会话保持时间，单位秒
 * @method array getSourceList() 获取回源列表
 * @method void setSourceList(array $SourceList) 设置回源列表
 * @method integer getLbType() 获取负载均衡方式，取值[1(加权轮询)]
 * @method void setLbType(integer $LbType) 设置负载均衡方式，取值[1(加权轮询)]
 * @method integer getKeepEnable() 获取会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]
 * @method void setKeepEnable(integer $KeepEnable) 设置会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]
 * @method string getRuleId() 获取规则ID，当添加新规则时可以不用填写此字段；当修改或者删除规则时需要填写此字段；
 * @method void setRuleId(string $RuleId) 设置规则ID，当添加新规则时可以不用填写此字段；当修改或者删除规则时需要填写此字段；
 * @method integer getCertType() 获取证书来源，当转发协议为https时必须填，取值[2(腾讯云托管证书)]，当转发协议为http时也可以填0
 * @method void setCertType(integer $CertType) 设置证书来源，当转发协议为https时必须填，取值[2(腾讯云托管证书)]，当转发协议为http时也可以填0
 * @method string getSSLId() 获取当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
 * @method void setSSLId(string $SSLId) 设置当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
 * @method string getCert() 获取当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method void setCert(string $Cert) 设置当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method string getPrivateKey() 获取当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method void setPrivateKey(string $PrivateKey) 设置当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
 * @method string getRuleName() 获取规则描述
 * @method void setRuleName(string $RuleName) 设置规则描述
 * @method integer getStatus() 获取规则状态，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
 * @method void setStatus(integer $Status) 设置规则状态，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
 * @method integer getCCStatus() 获取cc防护状态，取值[0(关闭), 1(开启)]
 * @method void setCCStatus(integer $CCStatus) 设置cc防护状态，取值[0(关闭), 1(开启)]
 * @method integer getCCEnable() 获取HTTPS协议的CC防护状态，取值[0(关闭), 1(开启)]
 * @method void setCCEnable(integer $CCEnable) 设置HTTPS协议的CC防护状态，取值[0(关闭), 1(开启)]
 * @method integer getCCThreshold() 获取HTTPS协议的CC防护阈值
 * @method void setCCThreshold(integer $CCThreshold) 设置HTTPS协议的CC防护阈值
 * @method string getCCLevel() 获取HTTPS协议的CC防护等级
 * @method void setCCLevel(string $CCLevel) 设置HTTPS协议的CC防护等级
 * @method integer getRegion() 获取区域码
 * @method void setRegion(integer $Region) 设置区域码
 * @method string getId() 获取资源Id
 * @method void setId(string $Id) 设置资源Id
 * @method string getIp() 获取资源Ip
 * @method void setIp(string $Ip) 设置资源Ip
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getHttpsToHttpEnable() 获取是否开启Https协议使用Http回源，取值[0(关闭), 1(开启)]，不填写默认是关闭
 * @method void setHttpsToHttpEnable(integer $HttpsToHttpEnable) 设置是否开启Https协议使用Http回源，取值[0(关闭), 1(开启)]，不填写默认是关闭
 * @method integer getVirtualPort() 获取接入端口值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualPort(integer $VirtualPort) 设置接入端口值
注意：此字段可能返回 null，表示取不到有效值。
 */
class NewL7RuleEntry extends AbstractModel
{
    /**
     * @var string 转发协议，取值[http, https]
     */
    public $Protocol;

    /**
     * @var string 转发域名
     */
    public $Domain;

    /**
     * @var integer 回源方式，取值[1(域名回源)，2(IP回源)]
     */
    public $SourceType;

    /**
     * @var integer 会话保持时间，单位秒
     */
    public $KeepTime;

    /**
     * @var array 回源列表
     */
    public $SourceList;

    /**
     * @var integer 负载均衡方式，取值[1(加权轮询)]
     */
    public $LbType;

    /**
     * @var integer 会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]
     */
    public $KeepEnable;

    /**
     * @var string 规则ID，当添加新规则时可以不用填写此字段；当修改或者删除规则时需要填写此字段；
     */
    public $RuleId;

    /**
     * @var integer 证书来源，当转发协议为https时必须填，取值[2(腾讯云托管证书)]，当转发协议为http时也可以填0
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
     * @var string 规则描述
     */
    public $RuleName;

    /**
     * @var integer 规则状态，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
     */
    public $Status;

    /**
     * @var integer cc防护状态，取值[0(关闭), 1(开启)]
     */
    public $CCStatus;

    /**
     * @var integer HTTPS协议的CC防护状态，取值[0(关闭), 1(开启)]
     */
    public $CCEnable;

    /**
     * @var integer HTTPS协议的CC防护阈值
     */
    public $CCThreshold;

    /**
     * @var string HTTPS协议的CC防护等级
     */
    public $CCLevel;

    /**
     * @var integer 区域码
     */
    public $Region;

    /**
     * @var string 资源Id
     */
    public $Id;

    /**
     * @var string 资源Ip
     */
    public $Ip;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 是否开启Https协议使用Http回源，取值[0(关闭), 1(开启)]，不填写默认是关闭
     */
    public $HttpsToHttpEnable;

    /**
     * @var integer 接入端口值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualPort;

    /**
     * @param string $Protocol 转发协议，取值[http, https]
     * @param string $Domain 转发域名
     * @param integer $SourceType 回源方式，取值[1(域名回源)，2(IP回源)]
     * @param integer $KeepTime 会话保持时间，单位秒
     * @param array $SourceList 回源列表
     * @param integer $LbType 负载均衡方式，取值[1(加权轮询)]
     * @param integer $KeepEnable 会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]
     * @param string $RuleId 规则ID，当添加新规则时可以不用填写此字段；当修改或者删除规则时需要填写此字段；
     * @param integer $CertType 证书来源，当转发协议为https时必须填，取值[2(腾讯云托管证书)]，当转发协议为http时也可以填0
     * @param string $SSLId 当证书来源为腾讯云托管证书时，此字段必须填写托管证书ID
     * @param string $Cert 当证书来源为自有证书时，此字段必须填写证书内容；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
     * @param string $PrivateKey 当证书来源为自有证书时，此字段必须填写证书密钥；(因已不再支持自有证书，此字段已弃用，请不用填写此字段)
     * @param string $RuleName 规则描述
     * @param integer $Status 规则状态，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
     * @param integer $CCStatus cc防护状态，取值[0(关闭), 1(开启)]
     * @param integer $CCEnable HTTPS协议的CC防护状态，取值[0(关闭), 1(开启)]
     * @param integer $CCThreshold HTTPS协议的CC防护阈值
     * @param string $CCLevel HTTPS协议的CC防护等级
     * @param integer $Region 区域码
     * @param string $Id 资源Id
     * @param string $Ip 资源Ip
     * @param string $ModifyTime 修改时间
     * @param integer $HttpsToHttpEnable 是否开启Https协议使用Http回源，取值[0(关闭), 1(开启)]，不填写默认是关闭
     * @param integer $VirtualPort 接入端口值
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("SourceList",$param) and $param["SourceList"] !== null) {
            $this->SourceList = [];
            foreach ($param["SourceList"] as $key => $value){
                $obj = new L4RuleSource();
                $obj->deserialize($value);
                array_push($this->SourceList, $obj);
            }
        }

        if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
            $this->LbType = $param["LbType"];
        }

        if (array_key_exists("KeepEnable",$param) and $param["KeepEnable"] !== null) {
            $this->KeepEnable = $param["KeepEnable"];
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CCStatus",$param) and $param["CCStatus"] !== null) {
            $this->CCStatus = $param["CCStatus"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }

        if (array_key_exists("CCLevel",$param) and $param["CCLevel"] !== null) {
            $this->CCLevel = $param["CCLevel"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("HttpsToHttpEnable",$param) and $param["HttpsToHttpEnable"] !== null) {
            $this->HttpsToHttpEnable = $param["HttpsToHttpEnable"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }
    }
}

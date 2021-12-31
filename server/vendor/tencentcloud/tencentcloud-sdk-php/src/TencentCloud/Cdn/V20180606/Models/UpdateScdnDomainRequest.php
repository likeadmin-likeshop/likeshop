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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateScdnDomain请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method ScdnWafConfig getWaf() 获取Web 攻击防护（WAF）配置
 * @method void setWaf(ScdnWafConfig $Waf) 设置Web 攻击防护（WAF）配置
 * @method ScdnAclConfig getAcl() 获取自定义防护策略配置
 * @method void setAcl(ScdnAclConfig $Acl) 设置自定义防护策略配置
 * @method ScdnConfig getCC() 获取CC 防护配置，目前 CC 防护默认开启
 * @method void setCC(ScdnConfig $CC) 设置CC 防护配置，目前 CC 防护默认开启
 * @method ScdnDdosConfig getDdos() 获取DDOS 防护配置，目前 DDoS 防护默认开启
 * @method void setDdos(ScdnDdosConfig $Ddos) 设置DDOS 防护配置，目前 DDoS 防护默认开启
 * @method ScdnBotConfig getBot() 获取BOT 防护配置
 * @method void setBot(ScdnBotConfig $Bot) 设置BOT 防护配置
 */
class UpdateScdnDomainRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var ScdnWafConfig Web 攻击防护（WAF）配置
     */
    public $Waf;

    /**
     * @var ScdnAclConfig 自定义防护策略配置
     */
    public $Acl;

    /**
     * @var ScdnConfig CC 防护配置，目前 CC 防护默认开启
     */
    public $CC;

    /**
     * @var ScdnDdosConfig DDOS 防护配置，目前 DDoS 防护默认开启
     */
    public $Ddos;

    /**
     * @var ScdnBotConfig BOT 防护配置
     */
    public $Bot;

    /**
     * @param string $Domain 域名
     * @param ScdnWafConfig $Waf Web 攻击防护（WAF）配置
     * @param ScdnAclConfig $Acl 自定义防护策略配置
     * @param ScdnConfig $CC CC 防护配置，目前 CC 防护默认开启
     * @param ScdnDdosConfig $Ddos DDOS 防护配置，目前 DDoS 防护默认开启
     * @param ScdnBotConfig $Bot BOT 防护配置
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

        if (array_key_exists("Waf",$param) and $param["Waf"] !== null) {
            $this->Waf = new ScdnWafConfig();
            $this->Waf->deserialize($param["Waf"]);
        }

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = new ScdnAclConfig();
            $this->Acl->deserialize($param["Acl"]);
        }

        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = new ScdnConfig();
            $this->CC->deserialize($param["CC"]);
        }

        if (array_key_exists("Ddos",$param) and $param["Ddos"] !== null) {
            $this->Ddos = new ScdnDdosConfig();
            $this->Ddos->deserialize($param["Ddos"]);
        }

        if (array_key_exists("Bot",$param) and $param["Bot"] !== null) {
            $this->Bot = new ScdnBotConfig();
            $this->Bot->deserialize($param["Bot"]);
        }
    }
}

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
 * 聚合了SCDN域名的基本信息
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getStatus() 获取当前状态，取值online | offline | process
 * @method void setStatus(string $Status) 设置当前状态，取值online | offline | process
 * @method string getWaf() 获取Waf 状态默认为‘/’，取值 close | intercept | observe
 * @method void setWaf(string $Waf) 设置Waf 状态默认为‘/’，取值 close | intercept | observe
 * @method string getAcl() 获取Acl 状态默认为‘/’，取值 close | open
 * @method void setAcl(string $Acl) 设置Acl 状态默认为‘/’，取值 close | open
 * @method string getCC() 获取CC 状态默认为‘/’，取值 close | open
 * @method void setCC(string $CC) 设置CC 状态默认为‘/’，取值 close | open
 * @method string getDdos() 获取Ddos 状态默认为‘/’，取值 close | open
 * @method void setDdos(string $Ddos) 设置Ddos 状态默认为‘/’，取值 close | open
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getAclRuleNumbers() 获取Acl 规则数
 * @method void setAclRuleNumbers(integer $AclRuleNumbers) 设置Acl 规则数
 * @method string getBot() 获取Bot 状态默认为‘/’，取值 close | open
 * @method void setBot(string $Bot) 设置Bot 状态默认为‘/’，取值 close | open
 * @method string getArea() 获取域名加速区域，取值global | mainland |  overseas
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置域名加速区域，取值global | mainland |  overseas
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnDomain extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 当前状态，取值online | offline | process
     */
    public $Status;

    /**
     * @var string Waf 状态默认为‘/’，取值 close | intercept | observe
     */
    public $Waf;

    /**
     * @var string Acl 状态默认为‘/’，取值 close | open
     */
    public $Acl;

    /**
     * @var string CC 状态默认为‘/’，取值 close | open
     */
    public $CC;

    /**
     * @var string Ddos 状态默认为‘/’，取值 close | open
     */
    public $Ddos;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer Acl 规则数
     */
    public $AclRuleNumbers;

    /**
     * @var string Bot 状态默认为‘/’，取值 close | open
     */
    public $Bot;

    /**
     * @var string 域名加速区域，取值global | mainland |  overseas
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @param string $Domain 域名
     * @param string $Status 当前状态，取值online | offline | process
     * @param string $Waf Waf 状态默认为‘/’，取值 close | intercept | observe
     * @param string $Acl Acl 状态默认为‘/’，取值 close | open
     * @param string $CC CC 状态默认为‘/’，取值 close | open
     * @param string $Ddos Ddos 状态默认为‘/’，取值 close | open
     * @param string $ProjectId 项目ID
     * @param integer $AclRuleNumbers Acl 规则数
     * @param string $Bot Bot 状态默认为‘/’，取值 close | open
     * @param string $Area 域名加速区域，取值global | mainland |  overseas
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Waf",$param) and $param["Waf"] !== null) {
            $this->Waf = $param["Waf"];
        }

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = $param["Acl"];
        }

        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = $param["CC"];
        }

        if (array_key_exists("Ddos",$param) and $param["Ddos"] !== null) {
            $this->Ddos = $param["Ddos"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AclRuleNumbers",$param) and $param["AclRuleNumbers"] !== null) {
            $this->AclRuleNumbers = $param["AclRuleNumbers"];
        }

        if (array_key_exists("Bot",$param) and $param["Bot"] !== null) {
            $this->Bot = $param["Bot"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}

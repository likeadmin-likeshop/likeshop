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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPV6转换规则
 *
 * @method string getIp6RuleId() 获取IPV6转换规则唯一ID，形如rule6-xxxxxxxx
 * @method void setIp6RuleId(string $Ip6RuleId) 设置IPV6转换规则唯一ID，形如rule6-xxxxxxxx
 * @method string getIp6RuleName() 获取IPV6转换规则名称
 * @method void setIp6RuleName(string $Ip6RuleName) 设置IPV6转换规则名称
 * @method string getVip6() 获取IPV6地址
 * @method void setVip6(string $Vip6) 设置IPV6地址
 * @method integer getVport6() 获取IPV6端口号
 * @method void setVport6(integer $Vport6) 设置IPV6端口号
 * @method string getProtocol() 获取协议类型，支持TCP/UDP
 * @method void setProtocol(string $Protocol) 设置协议类型，支持TCP/UDP
 * @method string getVip() 获取IPV4地址
 * @method void setVip(string $Vip) 设置IPV4地址
 * @method integer getVport() 获取IPV4端口号
 * @method void setVport(integer $Vport) 设置IPV4端口号
 * @method string getRuleStatus() 获取转换规则状态，限于CREATING,RUNNING,DELETING,MODIFYING
 * @method void setRuleStatus(string $RuleStatus) 设置转换规则状态，限于CREATING,RUNNING,DELETING,MODIFYING
 * @method string getCreatedTime() 获取转换规则创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置转换规则创建时间
 */
class Ip6Rule extends AbstractModel
{
    /**
     * @var string IPV6转换规则唯一ID，形如rule6-xxxxxxxx
     */
    public $Ip6RuleId;

    /**
     * @var string IPV6转换规则名称
     */
    public $Ip6RuleName;

    /**
     * @var string IPV6地址
     */
    public $Vip6;

    /**
     * @var integer IPV6端口号
     */
    public $Vport6;

    /**
     * @var string 协议类型，支持TCP/UDP
     */
    public $Protocol;

    /**
     * @var string IPV4地址
     */
    public $Vip;

    /**
     * @var integer IPV4端口号
     */
    public $Vport;

    /**
     * @var string 转换规则状态，限于CREATING,RUNNING,DELETING,MODIFYING
     */
    public $RuleStatus;

    /**
     * @var string 转换规则创建时间
     */
    public $CreatedTime;

    /**
     * @param string $Ip6RuleId IPV6转换规则唯一ID，形如rule6-xxxxxxxx
     * @param string $Ip6RuleName IPV6转换规则名称
     * @param string $Vip6 IPV6地址
     * @param integer $Vport6 IPV6端口号
     * @param string $Protocol 协议类型，支持TCP/UDP
     * @param string $Vip IPV4地址
     * @param integer $Vport IPV4端口号
     * @param string $RuleStatus 转换规则状态，限于CREATING,RUNNING,DELETING,MODIFYING
     * @param string $CreatedTime 转换规则创建时间
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
        if (array_key_exists("Ip6RuleId",$param) and $param["Ip6RuleId"] !== null) {
            $this->Ip6RuleId = $param["Ip6RuleId"];
        }

        if (array_key_exists("Ip6RuleName",$param) and $param["Ip6RuleName"] !== null) {
            $this->Ip6RuleName = $param["Ip6RuleName"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Vport6",$param) and $param["Vport6"] !== null) {
            $this->Vport6 = $param["Vport6"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}

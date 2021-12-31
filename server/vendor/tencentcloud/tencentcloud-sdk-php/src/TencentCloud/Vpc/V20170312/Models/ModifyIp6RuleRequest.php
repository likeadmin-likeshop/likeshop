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
 * ModifyIp6Rule请求参数结构体
 *
 * @method string getIp6TranslatorId() 获取IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method void setIp6TranslatorId(string $Ip6TranslatorId) 设置IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method string getIp6RuleId() 获取IPV6转换规则唯一ID，形如rule6-xxxxxxxx
 * @method void setIp6RuleId(string $Ip6RuleId) 设置IPV6转换规则唯一ID，形如rule6-xxxxxxxx
 * @method string getIp6RuleName() 获取IPV6转换规则修改后的名称
 * @method void setIp6RuleName(string $Ip6RuleName) 设置IPV6转换规则修改后的名称
 * @method string getVip() 获取IPV6转换规则修改后的IPV4地址
 * @method void setVip(string $Vip) 设置IPV6转换规则修改后的IPV4地址
 * @method integer getVport() 获取IPV6转换规则修改后的IPV4端口号
 * @method void setVport(integer $Vport) 设置IPV6转换规则修改后的IPV4端口号
 */
class ModifyIp6RuleRequest extends AbstractModel
{
    /**
     * @var string IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     */
    public $Ip6TranslatorId;

    /**
     * @var string IPV6转换规则唯一ID，形如rule6-xxxxxxxx
     */
    public $Ip6RuleId;

    /**
     * @var string IPV6转换规则修改后的名称
     */
    public $Ip6RuleName;

    /**
     * @var string IPV6转换规则修改后的IPV4地址
     */
    public $Vip;

    /**
     * @var integer IPV6转换规则修改后的IPV4端口号
     */
    public $Vport;

    /**
     * @param string $Ip6TranslatorId IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     * @param string $Ip6RuleId IPV6转换规则唯一ID，形如rule6-xxxxxxxx
     * @param string $Ip6RuleName IPV6转换规则修改后的名称
     * @param string $Vip IPV6转换规则修改后的IPV4地址
     * @param integer $Vport IPV6转换规则修改后的IPV4端口号
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
        if (array_key_exists("Ip6TranslatorId",$param) and $param["Ip6TranslatorId"] !== null) {
            $this->Ip6TranslatorId = $param["Ip6TranslatorId"];
        }

        if (array_key_exists("Ip6RuleId",$param) and $param["Ip6RuleId"] !== null) {
            $this->Ip6RuleId = $param["Ip6RuleId"];
        }

        if (array_key_exists("Ip6RuleName",$param) and $param["Ip6RuleName"] !== null) {
            $this->Ip6RuleName = $param["Ip6RuleName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}

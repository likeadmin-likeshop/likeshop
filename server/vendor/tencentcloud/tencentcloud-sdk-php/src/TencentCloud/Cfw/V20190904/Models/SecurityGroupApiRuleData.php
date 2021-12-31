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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加安全组Api规则对象
 *
 * @method string getSourceId() 获取访问源，入站时为Ip/Cidr，默认为0.0.0.0/0； 出站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
 * @method void setSourceId(string $SourceId) 设置访问源，入站时为Ip/Cidr，默认为0.0.0.0/0； 出站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
 * @method string getTargetId() 获取访问目的，出站时为Ip/Cidr，默认为0.0.0.0/0；入站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
 * @method void setTargetId(string $TargetId) 设置访问目的，出站时为Ip/Cidr，默认为0.0.0.0/0；入站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
 * @method string getProtocol() 获取协议，支持ANY/TCP/UDP/ICMP
 * @method void setProtocol(string $Protocol) 设置协议，支持ANY/TCP/UDP/ICMP
 * @method string getPort() 获取端口, 当Protocol为ANY或ICMP时，Port为-1/-1
 * @method void setPort(string $Port) 设置端口, 当Protocol为ANY或ICMP时，Port为-1/-1
 * @method string getStrategy() 获取策略, 1：阻断，2：放行
 * @method void setStrategy(string $Strategy) 设置策略, 1：阻断，2：放行
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method integer getRuleType() 获取规则类型，1：VpcId+Ip/Cidr, 2: 实例ID，入站时为访问目的类型，出站时为访问源类型
 * @method void setRuleType(integer $RuleType) 设置规则类型，1：VpcId+Ip/Cidr, 2: 实例ID，入站时为访问目的类型，出站时为访问源类型
 * @method integer getOrderIndex() 获取执行顺序，中间插入必传，前插、后插非必传
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序，中间插入必传，前插、后插非必传
 * @method string getVpcId() 获取私有网络ID，当RuleType为1时必传
 * @method void setVpcId(string $VpcId) 设置私有网络ID，当RuleType为1时必传
 */
class SecurityGroupApiRuleData extends AbstractModel
{
    /**
     * @var string 访问源，入站时为Ip/Cidr，默认为0.0.0.0/0； 出站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
     */
    public $SourceId;

    /**
     * @var string 访问目的，出站时为Ip/Cidr，默认为0.0.0.0/0；入站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
     */
    public $TargetId;

    /**
     * @var string 协议，支持ANY/TCP/UDP/ICMP
     */
    public $Protocol;

    /**
     * @var string 端口, 当Protocol为ANY或ICMP时，Port为-1/-1
     */
    public $Port;

    /**
     * @var string 策略, 1：阻断，2：放行
     */
    public $Strategy;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var integer 规则类型，1：VpcId+Ip/Cidr, 2: 实例ID，入站时为访问目的类型，出站时为访问源类型
     */
    public $RuleType;

    /**
     * @var integer 执行顺序，中间插入必传，前插、后插非必传
     */
    public $OrderIndex;

    /**
     * @var string 私有网络ID，当RuleType为1时必传
     */
    public $VpcId;

    /**
     * @param string $SourceId 访问源，入站时为Ip/Cidr，默认为0.0.0.0/0； 出站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
     * @param string $TargetId 访问目的，出站时为Ip/Cidr，默认为0.0.0.0/0；入站时当RuleType为1时，支持内网Ip/Cidr, 当RuleType为2时，填实例ID
     * @param string $Protocol 协议，支持ANY/TCP/UDP/ICMP
     * @param string $Port 端口, 当Protocol为ANY或ICMP时，Port为-1/-1
     * @param string $Strategy 策略, 1：阻断，2：放行
     * @param string $Detail 描述
     * @param integer $RuleType 规则类型，1：VpcId+Ip/Cidr, 2: 实例ID，入站时为访问目的类型，出站时为访问源类型
     * @param integer $OrderIndex 执行顺序，中间插入必传，前插、后插非必传
     * @param string $VpcId 私有网络ID，当RuleType为1时必传
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}

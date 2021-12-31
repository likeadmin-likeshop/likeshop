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
 * DDoS高级策略的报文过滤项
 *
 * @method string getProtocol() 获取协议，取值范围[tcp,udp,icmp,all]
 * @method void setProtocol(string $Protocol) 设置协议，取值范围[tcp,udp,icmp,all]
 * @method integer getSportStart() 获取开始源端口，取值范围[0,65535]
 * @method void setSportStart(integer $SportStart) 设置开始源端口，取值范围[0,65535]
 * @method integer getSportEnd() 获取结束源端口，取值范围[0,65535]
 * @method void setSportEnd(integer $SportEnd) 设置结束源端口，取值范围[0,65535]
 * @method integer getDportStart() 获取开始目的端口，取值范围[0,65535]
 * @method void setDportStart(integer $DportStart) 设置开始目的端口，取值范围[0,65535]
 * @method integer getDportEnd() 获取结束目的端口，取值范围[0,65535]
 * @method void setDportEnd(integer $DportEnd) 设置结束目的端口，取值范围[0,65535]
 * @method integer getPktlenMin() 获取最小包长，取值范围[0,1500]
 * @method void setPktlenMin(integer $PktlenMin) 设置最小包长，取值范围[0,1500]
 * @method integer getPktlenMax() 获取最大包长，取值范围[0,1500]
 * @method void setPktlenMax(integer $PktlenMax) 设置最大包长，取值范围[0,1500]
 * @method string getMatchBegin() 获取是否检测载荷，取值范围[
begin_l3(IP头)
begin_l4(TCP头)
begin_l5(载荷)
no_match(不检测)
]
 * @method void setMatchBegin(string $MatchBegin) 设置是否检测载荷，取值范围[
begin_l3(IP头)
begin_l4(TCP头)
begin_l5(载荷)
no_match(不检测)
]
 * @method string getMatchType() 获取是否是正则表达式，取值范围[sunday(表示关键字),pcre(表示正则表达式)]
 * @method void setMatchType(string $MatchType) 设置是否是正则表达式，取值范围[sunday(表示关键字),pcre(表示正则表达式)]
 * @method string getStr() 获取关键字或正则表达式
 * @method void setStr(string $Str) 设置关键字或正则表达式
 * @method integer getDepth() 获取检测深度，取值范围[0,1500]
 * @method void setDepth(integer $Depth) 设置检测深度，取值范围[0,1500]
 * @method integer getOffset() 获取检测偏移量，取值范围[0,1500]
 * @method void setOffset(integer $Offset) 设置检测偏移量，取值范围[0,1500]
 * @method integer getIsNot() 获取是否包括，取值范围[0(表示不包含),1(表示包含)]
 * @method void setIsNot(integer $IsNot) 设置是否包括，取值范围[0(表示不包含),1(表示包含)]
 * @method string getAction() 获取策略动作，取值范围[drop，drop_black，drop_rst，drop_black_rst，transmit]
 * @method void setAction(string $Action) 设置策略动作，取值范围[drop，drop_black，drop_rst，drop_black_rst，transmit]
 */
class DDoSPolicyPacketFilter extends AbstractModel
{
    /**
     * @var string 协议，取值范围[tcp,udp,icmp,all]
     */
    public $Protocol;

    /**
     * @var integer 开始源端口，取值范围[0,65535]
     */
    public $SportStart;

    /**
     * @var integer 结束源端口，取值范围[0,65535]
     */
    public $SportEnd;

    /**
     * @var integer 开始目的端口，取值范围[0,65535]
     */
    public $DportStart;

    /**
     * @var integer 结束目的端口，取值范围[0,65535]
     */
    public $DportEnd;

    /**
     * @var integer 最小包长，取值范围[0,1500]
     */
    public $PktlenMin;

    /**
     * @var integer 最大包长，取值范围[0,1500]
     */
    public $PktlenMax;

    /**
     * @var string 是否检测载荷，取值范围[
begin_l3(IP头)
begin_l4(TCP头)
begin_l5(载荷)
no_match(不检测)
]
     */
    public $MatchBegin;

    /**
     * @var string 是否是正则表达式，取值范围[sunday(表示关键字),pcre(表示正则表达式)]
     */
    public $MatchType;

    /**
     * @var string 关键字或正则表达式
     */
    public $Str;

    /**
     * @var integer 检测深度，取值范围[0,1500]
     */
    public $Depth;

    /**
     * @var integer 检测偏移量，取值范围[0,1500]
     */
    public $Offset;

    /**
     * @var integer 是否包括，取值范围[0(表示不包含),1(表示包含)]
     */
    public $IsNot;

    /**
     * @var string 策略动作，取值范围[drop，drop_black，drop_rst，drop_black_rst，transmit]
     */
    public $Action;

    /**
     * @param string $Protocol 协议，取值范围[tcp,udp,icmp,all]
     * @param integer $SportStart 开始源端口，取值范围[0,65535]
     * @param integer $SportEnd 结束源端口，取值范围[0,65535]
     * @param integer $DportStart 开始目的端口，取值范围[0,65535]
     * @param integer $DportEnd 结束目的端口，取值范围[0,65535]
     * @param integer $PktlenMin 最小包长，取值范围[0,1500]
     * @param integer $PktlenMax 最大包长，取值范围[0,1500]
     * @param string $MatchBegin 是否检测载荷，取值范围[
begin_l3(IP头)
begin_l4(TCP头)
begin_l5(载荷)
no_match(不检测)
]
     * @param string $MatchType 是否是正则表达式，取值范围[sunday(表示关键字),pcre(表示正则表达式)]
     * @param string $Str 关键字或正则表达式
     * @param integer $Depth 检测深度，取值范围[0,1500]
     * @param integer $Offset 检测偏移量，取值范围[0,1500]
     * @param integer $IsNot 是否包括，取值范围[0(表示不包含),1(表示包含)]
     * @param string $Action 策略动作，取值范围[drop，drop_black，drop_rst，drop_black_rst，transmit]
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

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("PktlenMin",$param) and $param["PktlenMin"] !== null) {
            $this->PktlenMin = $param["PktlenMin"];
        }

        if (array_key_exists("PktlenMax",$param) and $param["PktlenMax"] !== null) {
            $this->PktlenMax = $param["PktlenMax"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}

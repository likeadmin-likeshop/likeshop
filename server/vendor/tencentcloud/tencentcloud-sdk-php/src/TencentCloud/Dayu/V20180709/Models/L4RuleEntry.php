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
 * L4规则
 *
 * @method string getProtocol() 获取转发协议，取值[TCP, UDP]
 * @method void setProtocol(string $Protocol) 设置转发协议，取值[TCP, UDP]
 * @method integer getVirtualPort() 获取转发端口
 * @method void setVirtualPort(integer $VirtualPort) 设置转发端口
 * @method integer getSourcePort() 获取源站端口
 * @method void setSourcePort(integer $SourcePort) 设置源站端口
 * @method integer getSourceType() 获取回源方式，取值[1(域名回源)，2(IP回源)]
 * @method void setSourceType(integer $SourceType) 设置回源方式，取值[1(域名回源)，2(IP回源)]
 * @method integer getKeepTime() 获取会话保持时间，单位秒
 * @method void setKeepTime(integer $KeepTime) 设置会话保持时间，单位秒
 * @method array getSourceList() 获取回源列表
 * @method void setSourceList(array $SourceList) 设置回源列表
 * @method integer getLbType() 获取负载均衡方式，取值[1(加权轮询)，2(源IP hash)]
 * @method void setLbType(integer $LbType) 设置负载均衡方式，取值[1(加权轮询)，2(源IP hash)]
 * @method integer getKeepEnable() 获取会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]；
 * @method void setKeepEnable(integer $KeepEnable) 设置会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]；
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getRuleName() 获取规则描述
 * @method void setRuleName(string $RuleName) 设置规则描述
 * @method integer getRemoveSwitch() 获取移除水印状态，取值[0(关闭)，1(开启)]
 * @method void setRemoveSwitch(integer $RemoveSwitch) 设置移除水印状态，取值[0(关闭)，1(开启)]
 */
class L4RuleEntry extends AbstractModel
{
    /**
     * @var string 转发协议，取值[TCP, UDP]
     */
    public $Protocol;

    /**
     * @var integer 转发端口
     */
    public $VirtualPort;

    /**
     * @var integer 源站端口
     */
    public $SourcePort;

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
     * @var integer 负载均衡方式，取值[1(加权轮询)，2(源IP hash)]
     */
    public $LbType;

    /**
     * @var integer 会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]；
     */
    public $KeepEnable;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则描述
     */
    public $RuleName;

    /**
     * @var integer 移除水印状态，取值[0(关闭)，1(开启)]
     */
    public $RemoveSwitch;

    /**
     * @param string $Protocol 转发协议，取值[TCP, UDP]
     * @param integer $VirtualPort 转发端口
     * @param integer $SourcePort 源站端口
     * @param integer $SourceType 回源方式，取值[1(域名回源)，2(IP回源)]
     * @param integer $KeepTime 会话保持时间，单位秒
     * @param array $SourceList 回源列表
     * @param integer $LbType 负载均衡方式，取值[1(加权轮询)，2(源IP hash)]
     * @param integer $KeepEnable 会话保持开关，取值[0(会话保持关闭)，1(会话保持开启)]；
     * @param string $RuleId 规则ID
     * @param string $RuleName 规则描述
     * @param integer $RemoveSwitch 移除水印状态，取值[0(关闭)，1(开启)]
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

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RemoveSwitch",$param) and $param["RemoveSwitch"] !== null) {
            $this->RemoveSwitch = $param["RemoveSwitch"];
        }
    }
}

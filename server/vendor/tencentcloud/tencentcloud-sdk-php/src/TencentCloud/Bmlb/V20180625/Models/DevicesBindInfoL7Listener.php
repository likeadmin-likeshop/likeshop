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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取设备绑定信息时返回的七层监听器信息。
 *
 * @method string getListenerId() 获取七层监听器实例ID。
 * @method void setListenerId(string $ListenerId) 设置七层监听器实例ID。
 * @method string getProtocol() 获取七层监听器协议类型，可选值：http,https。
 * @method void setProtocol(string $Protocol) 设置七层监听器协议类型，可选值：http,https。
 * @method integer getLoadBalancerPort() 获取七层监听器的监听端口。
 * @method void setLoadBalancerPort(integer $LoadBalancerPort) 设置七层监听器的监听端口。
 * @method array getRuleSet() 获取返回的转发规则列表。
 * @method void setRuleSet(array $RuleSet) 设置返回的转发规则列表。
 */
class DevicesBindInfoL7Listener extends AbstractModel
{
    /**
     * @var string 七层监听器实例ID。
     */
    public $ListenerId;

    /**
     * @var string 七层监听器协议类型，可选值：http,https。
     */
    public $Protocol;

    /**
     * @var integer 七层监听器的监听端口。
     */
    public $LoadBalancerPort;

    /**
     * @var array 返回的转发规则列表。
     */
    public $RuleSet;

    /**
     * @param string $ListenerId 七层监听器实例ID。
     * @param string $Protocol 七层监听器协议类型，可选值：http,https。
     * @param integer $LoadBalancerPort 七层监听器的监听端口。
     * @param array $RuleSet 返回的转发规则列表。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("LoadBalancerPort",$param) and $param["LoadBalancerPort"] !== null) {
            $this->LoadBalancerPort = $param["LoadBalancerPort"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new DevicesBindInfoRule();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }
    }
}

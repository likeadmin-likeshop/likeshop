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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组关联到的规则
 *
 * @method string getLoadBalancerId() 获取关联到的负载均衡ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置关联到的负载均衡ID
 * @method string getListenerId() 获取关联到的监听器ID
 * @method void setListenerId(string $ListenerId) 设置关联到的监听器ID
 * @method string getLocationId() 获取关联到的转发规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocationId(string $LocationId) 设置关联到的转发规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取关联到的监听器协议类型，如HTTP,TCP,
 * @method void setProtocol(string $Protocol) 设置关联到的监听器协议类型，如HTTP,TCP,
 * @method integer getPort() 获取关联到的监听器端口
 * @method void setPort(integer $Port) 设置关联到的监听器端口
 * @method string getDomain() 获取关联到的转发规则域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置关联到的转发规则域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取关联到的转发规则URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置关联到的转发规则URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerName() 获取负载均衡名称
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名称
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 */
class AssociationItem extends AbstractModel
{
    /**
     * @var string 关联到的负载均衡ID
     */
    public $LoadBalancerId;

    /**
     * @var string 关联到的监听器ID
     */
    public $ListenerId;

    /**
     * @var string 关联到的转发规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocationId;

    /**
     * @var string 关联到的监听器协议类型，如HTTP,TCP,
     */
    public $Protocol;

    /**
     * @var integer 关联到的监听器端口
     */
    public $Port;

    /**
     * @var string 关联到的转发规则域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 关联到的转发规则URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 负载均衡名称
     */
    public $LoadBalancerName;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @param string $LoadBalancerId 关联到的负载均衡ID
     * @param string $ListenerId 关联到的监听器ID
     * @param string $LocationId 关联到的转发规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 关联到的监听器协议类型，如HTTP,TCP,
     * @param integer $Port 关联到的监听器端口
     * @param string $Domain 关联到的转发规则域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 关联到的转发规则URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerName 负载均衡名称
     * @param string $ListenerName 监听器名称
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }
    }
}

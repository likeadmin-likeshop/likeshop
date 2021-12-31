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
 * 获取负载均衡实例列表时返回的负载均衡信息。
 *
 * @method string getLoadBalancerId() 获取负载均衡器ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡器ID
 * @method integer getProjectId() 获取项目ID，通过v2/DescribeProject 接口获得
 * @method void setProjectId(integer $ProjectId) 设置项目ID，通过v2/DescribeProject 接口获得
 * @method string getLoadBalancerName() 获取负载均衡器名称
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡器名称
 * @method string getLoadBalancerType() 获取负载均衡的类型 : open表示公网负载均衡类型，internal表示内网负载均衡类型
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡的类型 : open表示公网负载均衡类型，internal表示内网负载均衡类型
 * @method integer getExclusive() 获取是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
 * @method void setExclusive(integer $Exclusive) 设置是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
 * @method string getTgwSetType() 获取该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
 * @method void setTgwSetType(string $TgwSetType) 设置该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
 * @method string getDomain() 获取负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
 * @method void setDomain(string $Domain) 设置负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
 * @method string getVpcId() 获取该负载均衡对应的所在的VpcId
 * @method void setVpcId(string $VpcId) 设置该负载均衡对应的所在的VpcId
 * @method string getSubnetId() 获取该负载均衡对应的所在的SubnetId
 * @method void setSubnetId(string $SubnetId) 设置该负载均衡对应的所在的SubnetId
 * @method integer getStatus() 获取无
 * @method void setStatus(integer $Status) 设置无
 * @method string getPayMode() 获取无
 * @method void setPayMode(string $PayMode) 设置无
 * @method string getLatestPayMode() 获取无
 * @method void setLatestPayMode(string $LatestPayMode) 设置无
 * @method string getCreateTime() 获取无
 * @method void setCreateTime(string $CreateTime) 设置无
 * @method string getStatusTime() 获取无
 * @method void setStatusTime(string $StatusTime) 设置无
 * @method string getVpcName() 获取私有网络名称。
 * @method void setVpcName(string $VpcName) 设置私有网络名称。
 * @method string getVpcCidrBlock() 获取私有网络Cidr。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置私有网络Cidr。
 * @method array getLoadBalancerVips() 获取负载均衡的IPV4的VIP。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡的IPV4的VIP。
 * @method array getSupportListenerTypes() 获取无
 * @method void setSupportListenerTypes(array $SupportListenerTypes) 设置无
 * @method integer getBandwidth() 获取无
 * @method void setBandwidth(integer $Bandwidth) 设置无
 * @method string getConfId() 获取负载均衡个性化配置ID
 * @method void setConfId(string $ConfId) 设置负载均衡个性化配置ID
 * @method string getConfName() 获取无
 * @method void setConfName(string $ConfName) 设置无
 * @method array getLoadBalancerVipv6s() 获取负载均衡的IPV6的VIP。
 * @method void setLoadBalancerVipv6s(array $LoadBalancerVipv6s) 设置负载均衡的IPV6的VIP。
 * @method string getIpProtocolType() 获取负载均衡IP协议类型。ipv4或者ipv6。
 * @method void setIpProtocolType(string $IpProtocolType) 设置负载均衡IP协议类型。ipv4或者ipv6。
 * @method string getBzPayMode() 获取保障型网关计费形式
 * @method void setBzPayMode(string $BzPayMode) 设置保障型网关计费形式
 * @method string getBzL4Metrics() 获取保障型网关四层计费指标
 * @method void setBzL4Metrics(string $BzL4Metrics) 设置保障型网关四层计费指标
 * @method string getBzL7Metrics() 获取保障型网关七层计费指标
 * @method void setBzL7Metrics(string $BzL7Metrics) 设置保障型网关七层计费指标
 * @method integer getIntVpcId() 获取该负载均衡对应的所在的整形类型的VpcId
 * @method void setIntVpcId(integer $IntVpcId) 设置该负载均衡对应的所在的整形类型的VpcId
 * @method array getCurVips() 获取负载均衡的IPV6或者IPV4的VIP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurVips(array $CurVips) 设置负载均衡的IPV6或者IPV4的VIP。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡器ID
     */
    public $LoadBalancerId;

    /**
     * @var integer 项目ID，通过v2/DescribeProject 接口获得
     */
    public $ProjectId;

    /**
     * @var string 负载均衡器名称
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡的类型 : open表示公网负载均衡类型，internal表示内网负载均衡类型
     */
    public $LoadBalancerType;

    /**
     * @var integer 是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
     */
    public $Exclusive;

    /**
     * @var string 该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
     */
    public $TgwSetType;

    /**
     * @var string 负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
     */
    public $Domain;

    /**
     * @var string 该负载均衡对应的所在的VpcId
     */
    public $VpcId;

    /**
     * @var string 该负载均衡对应的所在的SubnetId
     */
    public $SubnetId;

    /**
     * @var integer 无
     */
    public $Status;

    /**
     * @var string 无
     */
    public $PayMode;

    /**
     * @var string 无
     */
    public $LatestPayMode;

    /**
     * @var string 无
     */
    public $CreateTime;

    /**
     * @var string 无
     */
    public $StatusTime;

    /**
     * @var string 私有网络名称。
     */
    public $VpcName;

    /**
     * @var string 私有网络Cidr。
     */
    public $VpcCidrBlock;

    /**
     * @var array 负载均衡的IPV4的VIP。
     */
    public $LoadBalancerVips;

    /**
     * @var array 无
     */
    public $SupportListenerTypes;

    /**
     * @var integer 无
     */
    public $Bandwidth;

    /**
     * @var string 负载均衡个性化配置ID
     */
    public $ConfId;

    /**
     * @var string 无
     */
    public $ConfName;

    /**
     * @var array 负载均衡的IPV6的VIP。
     */
    public $LoadBalancerVipv6s;

    /**
     * @var string 负载均衡IP协议类型。ipv4或者ipv6。
     */
    public $IpProtocolType;

    /**
     * @var string 保障型网关计费形式
     */
    public $BzPayMode;

    /**
     * @var string 保障型网关四层计费指标
     */
    public $BzL4Metrics;

    /**
     * @var string 保障型网关七层计费指标
     */
    public $BzL7Metrics;

    /**
     * @var integer 该负载均衡对应的所在的整形类型的VpcId
     */
    public $IntVpcId;

    /**
     * @var array 负载均衡的IPV6或者IPV4的VIP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurVips;

    /**
     * @param string $LoadBalancerId 负载均衡器ID
     * @param integer $ProjectId 项目ID，通过v2/DescribeProject 接口获得
     * @param string $LoadBalancerName 负载均衡器名称
     * @param string $LoadBalancerType 负载均衡的类型 : open表示公网负载均衡类型，internal表示内网负载均衡类型
     * @param integer $Exclusive 是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
     * @param string $TgwSetType 该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
     * @param string $Domain 负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
     * @param string $VpcId 该负载均衡对应的所在的VpcId
     * @param string $SubnetId 该负载均衡对应的所在的SubnetId
     * @param integer $Status 无
     * @param string $PayMode 无
     * @param string $LatestPayMode 无
     * @param string $CreateTime 无
     * @param string $StatusTime 无
     * @param string $VpcName 私有网络名称。
     * @param string $VpcCidrBlock 私有网络Cidr。
     * @param array $LoadBalancerVips 负载均衡的IPV4的VIP。
     * @param array $SupportListenerTypes 无
     * @param integer $Bandwidth 无
     * @param string $ConfId 负载均衡个性化配置ID
     * @param string $ConfName 无
     * @param array $LoadBalancerVipv6s 负载均衡的IPV6的VIP。
     * @param string $IpProtocolType 负载均衡IP协议类型。ipv4或者ipv6。
     * @param string $BzPayMode 保障型网关计费形式
     * @param string $BzL4Metrics 保障型网关四层计费指标
     * @param string $BzL7Metrics 保障型网关七层计费指标
     * @param integer $IntVpcId 该负载均衡对应的所在的整形类型的VpcId
     * @param array $CurVips 负载均衡的IPV6或者IPV4的VIP。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("TgwSetType",$param) and $param["TgwSetType"] !== null) {
            $this->TgwSetType = $param["TgwSetType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("LatestPayMode",$param) and $param["LatestPayMode"] !== null) {
            $this->LatestPayMode = $param["LatestPayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("SupportListenerTypes",$param) and $param["SupportListenerTypes"] !== null) {
            $this->SupportListenerTypes = $param["SupportListenerTypes"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ConfId",$param) and $param["ConfId"] !== null) {
            $this->ConfId = $param["ConfId"];
        }

        if (array_key_exists("ConfName",$param) and $param["ConfName"] !== null) {
            $this->ConfName = $param["ConfName"];
        }

        if (array_key_exists("LoadBalancerVipv6s",$param) and $param["LoadBalancerVipv6s"] !== null) {
            $this->LoadBalancerVipv6s = $param["LoadBalancerVipv6s"];
        }

        if (array_key_exists("IpProtocolType",$param) and $param["IpProtocolType"] !== null) {
            $this->IpProtocolType = $param["IpProtocolType"];
        }

        if (array_key_exists("BzPayMode",$param) and $param["BzPayMode"] !== null) {
            $this->BzPayMode = $param["BzPayMode"];
        }

        if (array_key_exists("BzL4Metrics",$param) and $param["BzL4Metrics"] !== null) {
            $this->BzL4Metrics = $param["BzL4Metrics"];
        }

        if (array_key_exists("BzL7Metrics",$param) and $param["BzL7Metrics"] !== null) {
            $this->BzL7Metrics = $param["BzL7Metrics"];
        }

        if (array_key_exists("IntVpcId",$param) and $param["IntVpcId"] !== null) {
            $this->IntVpcId = $param["IntVpcId"];
        }

        if (array_key_exists("CurVips",$param) and $param["CurVips"] !== null) {
            $this->CurVips = $param["CurVips"];
        }
    }
}

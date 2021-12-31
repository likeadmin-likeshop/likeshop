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
 * DescribeLoadBalancers请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取负载均衡器ID数组
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡器ID数组
 * @method string getLoadBalancerType() 获取负载均衡的类型 : open表示公网LB类型，internal表示内网LB类型
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡的类型 : open表示公网LB类型，internal表示内网LB类型
 * @method string getLoadBalancerName() 获取负载均衡器名称
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡器名称
 * @method string getDomain() 获取负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
 * @method void setDomain(string $Domain) 设置负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
 * @method array getLoadBalancerVips() 获取负载均衡获得的公网IP地址,支持多个
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡获得的公网IP地址,支持多个
 * @method integer getOffset() 获取数据偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为0
 * @method integer getLimit() 获取返回数据长度，默认为20
 * @method void setLimit(integer $Limit) 设置返回数据长度，默认为20
 * @method string getSearchKey() 获取模糊查找名称、域名、VIP
 * @method void setSearchKey(string $SearchKey) 设置模糊查找名称、域名、VIP
 * @method string getOrderBy() 获取排序字段，支持：loadBalancerName,createTime,domain,loadBalancerType
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持：loadBalancerName,createTime,domain,loadBalancerType
 * @method integer getOrderType() 获取1倒序，0顺序，默认顺序
 * @method void setOrderType(integer $OrderType) 设置1倒序，0顺序，默认顺序
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getExclusive() 获取是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
 * @method void setExclusive(integer $Exclusive) 设置是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
 * @method string getTgwSetType() 获取该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
 * @method void setTgwSetType(string $TgwSetType) 设置该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
 * @method string getVpcId() 获取该负载均衡对应的所在的私有网络ID
 * @method void setVpcId(string $VpcId) 设置该负载均衡对应的所在的私有网络ID
 * @method string getQueryType() 获取'CONFLIST' 查询带confId的LB列表，'CONFID' 查询某个confId绑定的LB列表
 * @method void setQueryType(string $QueryType) 设置'CONFLIST' 查询带confId的LB列表，'CONFID' 查询某个confId绑定的LB列表
 * @method string getConfId() 获取个性化配置ID
 * @method void setConfId(string $ConfId) 设置个性化配置ID
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 负载均衡器ID数组
     */
    public $LoadBalancerIds;

    /**
     * @var string 负载均衡的类型 : open表示公网LB类型，internal表示内网LB类型
     */
    public $LoadBalancerType;

    /**
     * @var string 负载均衡器名称
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
     */
    public $Domain;

    /**
     * @var array 负载均衡获得的公网IP地址,支持多个
     */
    public $LoadBalancerVips;

    /**
     * @var integer 数据偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数据长度，默认为20
     */
    public $Limit;

    /**
     * @var string 模糊查找名称、域名、VIP
     */
    public $SearchKey;

    /**
     * @var string 排序字段，支持：loadBalancerName,createTime,domain,loadBalancerType
     */
    public $OrderBy;

    /**
     * @var integer 1倒序，0顺序，默认顺序
     */
    public $OrderType;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
     */
    public $Exclusive;

    /**
     * @var string 该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
     */
    public $TgwSetType;

    /**
     * @var string 该负载均衡对应的所在的私有网络ID
     */
    public $VpcId;

    /**
     * @var string 'CONFLIST' 查询带confId的LB列表，'CONFID' 查询某个confId绑定的LB列表
     */
    public $QueryType;

    /**
     * @var string 个性化配置ID
     */
    public $ConfId;

    /**
     * @param array $LoadBalancerIds 负载均衡器ID数组
     * @param string $LoadBalancerType 负载均衡的类型 : open表示公网LB类型，internal表示内网LB类型
     * @param string $LoadBalancerName 负载均衡器名称
     * @param string $Domain 负载均衡域名。规则：1-60个小写英文字母、数字、点号“.”或连接线“-”。内网类型的负载均衡不能配置该字段
     * @param array $LoadBalancerVips 负载均衡获得的公网IP地址,支持多个
     * @param integer $Offset 数据偏移量，默认为0
     * @param integer $Limit 返回数据长度，默认为20
     * @param string $SearchKey 模糊查找名称、域名、VIP
     * @param string $OrderBy 排序字段，支持：loadBalancerName,createTime,domain,loadBalancerType
     * @param integer $OrderType 1倒序，0顺序，默认顺序
     * @param integer $ProjectId 项目ID
     * @param integer $Exclusive 是否筛选独占集群，0表示非独占集群，1表示四层独占集群，2表示七层独占集群，3表示四层和七层独占集群，4表示共享容灾
     * @param string $TgwSetType 该负载均衡对应的tgw集群（fullnat,tunnel,dnat）
     * @param string $VpcId 该负载均衡对应的所在的私有网络ID
     * @param string $QueryType 'CONFLIST' 查询带confId的LB列表，'CONFID' 查询某个confId绑定的LB列表
     * @param string $ConfId 个性化配置ID
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("TgwSetType",$param) and $param["TgwSetType"] !== null) {
            $this->TgwSetType = $param["TgwSetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("ConfId",$param) and $param["ConfId"] !== null) {
            $this->ConfId = $param["ConfId"];
        }
    }
}

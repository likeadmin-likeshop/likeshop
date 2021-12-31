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
 * CreateLoadBalancers请求参数结构体
 *
 * @method string getVpcId() 获取黑石负载均衡实例所属的私有网络ID。
 * @method void setVpcId(string $VpcId) 设置黑石负载均衡实例所属的私有网络ID。
 * @method string getLoadBalancerType() 获取负载均衡的类型，取值为open或internal。open表示公网(有日租)，internal表示内网。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡的类型，取值为open或internal。open表示公网(有日租)，internal表示内网。
 * @method string getSubnetId() 获取在私有网络内购买内网负载均衡实例的时候需要指定子网ID，内网负载均衡实例的VIP将从这个子网中产生。其他情况不用填写该字段。
 * @method void setSubnetId(string $SubnetId) 设置在私有网络内购买内网负载均衡实例的时候需要指定子网ID，内网负载均衡实例的VIP将从这个子网中产生。其他情况不用填写该字段。
 * @method integer getProjectId() 获取负载均衡所属项目ID。不填则属于默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡所属项目ID。不填则属于默认项目。
 * @method integer getGoodsNum() 获取购买黑石负载均衡实例的数量。默认值为1, 最大值为20。
 * @method void setGoodsNum(integer $GoodsNum) 设置购买黑石负载均衡实例的数量。默认值为1, 最大值为20。
 * @method string getPayMode() 获取黑石负载均衡的计费模式，取值为flow和bandwidth，其中flow模式表示流量模式，bandwidth表示带宽模式。默认值为flow。
 * @method void setPayMode(string $PayMode) 设置黑石负载均衡的计费模式，取值为flow和bandwidth，其中flow模式表示流量模式，bandwidth表示带宽模式。默认值为flow。
 * @method string getTgwSetType() 获取负载均衡对应的TGW集群类别，取值为tunnel、fullnat或dnat。tunnel表示隧道集群，fullnat表示FULLNAT集群（普通外网负载均衡），dnat表示DNAT集群（增强型外网负载均衡）。默认值为fullnat。如需获取client IP，可以选择 tunnel 模式，fullnat 模式（tcp 通过toa 获取），dnat 模式。
 * @method void setTgwSetType(string $TgwSetType) 设置负载均衡对应的TGW集群类别，取值为tunnel、fullnat或dnat。tunnel表示隧道集群，fullnat表示FULLNAT集群（普通外网负载均衡），dnat表示DNAT集群（增强型外网负载均衡）。默认值为fullnat。如需获取client IP，可以选择 tunnel 模式，fullnat 模式（tcp 通过toa 获取），dnat 模式。
 * @method integer getExclusive() 获取负载均衡的独占类别，取值为0表示非独占，1表示四层独占，2表示七层独占，3表示四层和七层独占，4表示共享容灾。
 * @method void setExclusive(integer $Exclusive) 设置负载均衡的独占类别，取值为0表示非独占，1表示四层独占，2表示七层独占，3表示四层和七层独占，4表示共享容灾。
 * @method array getSpecifiedVips() 获取指定的VIP，如果指定，则数量必须与goodsNum一致。如果不指定，则由后台分配随机VIP。
 * @method void setSpecifiedVips(array $SpecifiedVips) 设置指定的VIP，如果指定，则数量必须与goodsNum一致。如果不指定，则由后台分配随机VIP。
 * @method CreateLoadBalancerBzConf getBzConf() 获取（未全地域开放）保障型负载均衡设定参数，如果类别选择保障型则需传入此参数。
 * @method void setBzConf(CreateLoadBalancerBzConf $BzConf) 设置（未全地域开放）保障型负载均衡设定参数，如果类别选择保障型则需传入此参数。
 * @method string getIpProtocolType() 获取IP协议类型。可取的值为“ipv4”或“ipv6”。
 * @method void setIpProtocolType(string $IpProtocolType) 设置IP协议类型。可取的值为“ipv4”或“ipv6”。
 */
class CreateLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 黑石负载均衡实例所属的私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 负载均衡的类型，取值为open或internal。open表示公网(有日租)，internal表示内网。
     */
    public $LoadBalancerType;

    /**
     * @var string 在私有网络内购买内网负载均衡实例的时候需要指定子网ID，内网负载均衡实例的VIP将从这个子网中产生。其他情况不用填写该字段。
     */
    public $SubnetId;

    /**
     * @var integer 负载均衡所属项目ID。不填则属于默认项目。
     */
    public $ProjectId;

    /**
     * @var integer 购买黑石负载均衡实例的数量。默认值为1, 最大值为20。
     */
    public $GoodsNum;

    /**
     * @var string 黑石负载均衡的计费模式，取值为flow和bandwidth，其中flow模式表示流量模式，bandwidth表示带宽模式。默认值为flow。
     */
    public $PayMode;

    /**
     * @var string 负载均衡对应的TGW集群类别，取值为tunnel、fullnat或dnat。tunnel表示隧道集群，fullnat表示FULLNAT集群（普通外网负载均衡），dnat表示DNAT集群（增强型外网负载均衡）。默认值为fullnat。如需获取client IP，可以选择 tunnel 模式，fullnat 模式（tcp 通过toa 获取），dnat 模式。
     */
    public $TgwSetType;

    /**
     * @var integer 负载均衡的独占类别，取值为0表示非独占，1表示四层独占，2表示七层独占，3表示四层和七层独占，4表示共享容灾。
     */
    public $Exclusive;

    /**
     * @var array 指定的VIP，如果指定，则数量必须与goodsNum一致。如果不指定，则由后台分配随机VIP。
     */
    public $SpecifiedVips;

    /**
     * @var CreateLoadBalancerBzConf （未全地域开放）保障型负载均衡设定参数，如果类别选择保障型则需传入此参数。
     */
    public $BzConf;

    /**
     * @var string IP协议类型。可取的值为“ipv4”或“ipv6”。
     */
    public $IpProtocolType;

    /**
     * @param string $VpcId 黑石负载均衡实例所属的私有网络ID。
     * @param string $LoadBalancerType 负载均衡的类型，取值为open或internal。open表示公网(有日租)，internal表示内网。
     * @param string $SubnetId 在私有网络内购买内网负载均衡实例的时候需要指定子网ID，内网负载均衡实例的VIP将从这个子网中产生。其他情况不用填写该字段。
     * @param integer $ProjectId 负载均衡所属项目ID。不填则属于默认项目。
     * @param integer $GoodsNum 购买黑石负载均衡实例的数量。默认值为1, 最大值为20。
     * @param string $PayMode 黑石负载均衡的计费模式，取值为flow和bandwidth，其中flow模式表示流量模式，bandwidth表示带宽模式。默认值为flow。
     * @param string $TgwSetType 负载均衡对应的TGW集群类别，取值为tunnel、fullnat或dnat。tunnel表示隧道集群，fullnat表示FULLNAT集群（普通外网负载均衡），dnat表示DNAT集群（增强型外网负载均衡）。默认值为fullnat。如需获取client IP，可以选择 tunnel 模式，fullnat 模式（tcp 通过toa 获取），dnat 模式。
     * @param integer $Exclusive 负载均衡的独占类别，取值为0表示非独占，1表示四层独占，2表示七层独占，3表示四层和七层独占，4表示共享容灾。
     * @param array $SpecifiedVips 指定的VIP，如果指定，则数量必须与goodsNum一致。如果不指定，则由后台分配随机VIP。
     * @param CreateLoadBalancerBzConf $BzConf （未全地域开放）保障型负载均衡设定参数，如果类别选择保障型则需传入此参数。
     * @param string $IpProtocolType IP协议类型。可取的值为“ipv4”或“ipv6”。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TgwSetType",$param) and $param["TgwSetType"] !== null) {
            $this->TgwSetType = $param["TgwSetType"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("SpecifiedVips",$param) and $param["SpecifiedVips"] !== null) {
            $this->SpecifiedVips = $param["SpecifiedVips"];
        }

        if (array_key_exists("BzConf",$param) and $param["BzConf"] !== null) {
            $this->BzConf = new CreateLoadBalancerBzConf();
            $this->BzConf->deserialize($param["BzConf"]);
        }

        if (array_key_exists("IpProtocolType",$param) and $param["IpProtocolType"] !== null) {
            $this->IpProtocolType = $param["IpProtocolType"];
        }
    }
}

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

namespace TencentCloud\Bmlb\V20180625;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bmlb\V20180625\Models as Models;

/**
 * @method Models\BindL4BackendsResponse BindL4Backends(Models\BindL4BackendsRequest $req) 绑定黑石服务器到四层监听器。服务器包括物理服务器、虚拟机以及半托管机器。
 * @method Models\BindL7BackendsResponse BindL7Backends(Models\BindL7BackendsRequest $req) 绑定黑石物理服务器或半托管服务器到七层转发路径。
 * @method Models\BindTrafficMirrorListenersResponse BindTrafficMirrorListeners(Models\BindTrafficMirrorListenersRequest $req) 绑定黑石服务器七层监听器到流量镜像实例。
 * @method Models\BindTrafficMirrorReceiversResponse BindTrafficMirrorReceivers(Models\BindTrafficMirrorReceiversRequest $req) 绑定黑石物理服务器成为流量镜像接收机。
 * @method Models\CreateL4ListenersResponse CreateL4Listeners(Models\CreateL4ListenersRequest $req) 创建黑石四层负载均衡监听器功能。黑石负载均衡四层监听器提供了转发用户请求的具体规则，包括端口、协议、会话保持、健康检查等参数。
 * @method Models\CreateL7ListenersResponse CreateL7Listeners(Models\CreateL7ListenersRequest $req) 创建黑石负载均衡七层监听器功能。负载均衡七层监听器提供了转发用户请求的具体规则，包括端口、协议等参数。
 * @method Models\CreateL7RulesResponse CreateL7Rules(Models\CreateL7RulesRequest $req) 创建黑石负载均衡七层转发规则。
 * @method Models\CreateLoadBalancersResponse CreateLoadBalancers(Models\CreateLoadBalancersRequest $req) 用来创建黑石负载均衡。为了使用黑石负载均衡服务，您必须要创建一个或者多个负载均衡实例。通过成功调用该接口，会返回负载均衡实例的唯一ID。用户可以购买的黑石负载均衡实例类型分为：公网类型、内网类型。公网类型负载均衡对应一个BGP VIP，可用于快速访问公网负载均衡绑定的物理服务器；内网类型负载均衡对应一个腾讯云内部的VIP，不能通过Internet访问，可快速访问内网负载均衡绑定的物理服务器。
 * @method Models\CreateTrafficMirrorResponse CreateTrafficMirror(Models\CreateTrafficMirrorRequest $req) 创建流量镜像实例。
 * @method Models\DeleteL7DomainsResponse DeleteL7Domains(Models\DeleteL7DomainsRequest $req) 删除黑石负载均衡七层转发域名。
 * @method Models\DeleteL7RulesResponse DeleteL7Rules(Models\DeleteL7RulesRequest $req) 删除黑石负载均衡七层转发规则。
 * @method Models\DeleteListenersResponse DeleteListeners(Models\DeleteListenersRequest $req) 删除黑石负载均衡监听器。
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) 删除用户指定的黑石负载均衡实例。
 * @method Models\DeleteTrafficMirrorResponse DeleteTrafficMirror(Models\DeleteTrafficMirrorRequest $req) 删除已创建的黑石流量镜像实例，删除过程是异步执行的，因此需要使用查询任务接口获取删除的结果。
 * @method Models\DescribeCertDetailResponse DescribeCertDetail(Models\DescribeCertDetailRequest $req) 获取黑石负载均衡证书详情。
 * @method Models\DescribeDevicesBindInfoResponse DescribeDevicesBindInfo(Models\DescribeDevicesBindInfoRequest $req) 查询黑石物理机和虚机以及托管服务器绑定的黑石负载均衡详情。
 * @method Models\DescribeL4BackendsResponse DescribeL4Backends(Models\DescribeL4BackendsRequest $req) 获取黑石负载均衡四层监听器绑定的主机列表。
 * @method Models\DescribeL4ListenerInfoResponse DescribeL4ListenerInfo(Models\DescribeL4ListenerInfoRequest $req) 查找绑定了某主机或者指定监听器名称的黑石负载均衡四层监听器。
 * @method Models\DescribeL4ListenersResponse DescribeL4Listeners(Models\DescribeL4ListenersRequest $req) 获取黑石负载均衡四层监听器。
 * @method Models\DescribeL7BackendsResponse DescribeL7Backends(Models\DescribeL7BackendsRequest $req) 获取黑石负载均衡七层监听器绑定的主机列表
 * @method Models\DescribeL7ListenerInfoResponse DescribeL7ListenerInfo(Models\DescribeL7ListenerInfoRequest $req) 查找绑定了某主机或者有某转发域名黑石负载均衡七层监听器。
 * @method Models\DescribeL7ListenersResponse DescribeL7Listeners(Models\DescribeL7ListenersRequest $req) 获取黑石负载均衡七层监听器列表信息。
 * @method Models\DescribeL7ListenersExResponse DescribeL7ListenersEx(Models\DescribeL7ListenersExRequest $req) 获取指定VPC下的7层监听器(支持模糊匹配)。
 * @method Models\DescribeL7RulesResponse DescribeL7Rules(Models\DescribeL7RulesRequest $req) 获取黑石负载均衡七层转发规则。
 * @method Models\DescribeLoadBalancerPortInfoResponse DescribeLoadBalancerPortInfo(Models\DescribeLoadBalancerPortInfoRequest $req) 获取黑石负载均衡端口相关信息。
 * @method Models\DescribeLoadBalancerTaskResultResponse DescribeLoadBalancerTaskResult(Models\DescribeLoadBalancerTaskResultRequest $req) 查询负载均衡实例异步任务的执行情况。
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 获取黑石负载均衡实例列表
 * @method Models\DescribeTrafficMirrorListenersResponse DescribeTrafficMirrorListeners(Models\DescribeTrafficMirrorListenersRequest $req) 获取流量镜像的监听器列表信息。
 * @method Models\DescribeTrafficMirrorReceiverHealthStatusResponse DescribeTrafficMirrorReceiverHealthStatus(Models\DescribeTrafficMirrorReceiverHealthStatusRequest $req) 获取流量镜像接收机健康状态。
 * @method Models\DescribeTrafficMirrorReceiversResponse DescribeTrafficMirrorReceivers(Models\DescribeTrafficMirrorReceiversRequest $req) 获取指定流量镜像实例的接收机信息。
 * @method Models\DescribeTrafficMirrorsResponse DescribeTrafficMirrors(Models\DescribeTrafficMirrorsRequest $req) 获取流量镜像实例的列表信息。
 * @method Models\ModifyL4BackendPortResponse ModifyL4BackendPort(Models\ModifyL4BackendPortRequest $req) 修改黑石负载均衡四层监听器后端实例端口。
 * @method Models\ModifyL4BackendProbePortResponse ModifyL4BackendProbePort(Models\ModifyL4BackendProbePortRequest $req) 修改黑石负载均衡四层监听器后端探测端口。
 * @method Models\ModifyL4BackendWeightResponse ModifyL4BackendWeight(Models\ModifyL4BackendWeightRequest $req) 修改黑石负载均衡四层监听器后端实例权重功能。
 * @method Models\ModifyL4ListenerResponse ModifyL4Listener(Models\ModifyL4ListenerRequest $req) 修改黑石负载均衡四层监听器。
 * @method Models\ModifyL7BackendPortResponse ModifyL7BackendPort(Models\ModifyL7BackendPortRequest $req) 修改黑石负载均衡七层转发路径后端实例端口。
 * @method Models\ModifyL7BackendWeightResponse ModifyL7BackendWeight(Models\ModifyL7BackendWeightRequest $req) 修改黑石负载均衡七层转发路径后端实例权重。
 * @method Models\ModifyL7ListenerResponse ModifyL7Listener(Models\ModifyL7ListenerRequest $req) 修改黑石负载均衡七层监听器。
 * @method Models\ModifyL7LocationsResponse ModifyL7Locations(Models\ModifyL7LocationsRequest $req) 修改黑石负载均衡七层转发路径。
 * @method Models\ModifyLoadBalancerResponse ModifyLoadBalancer(Models\ModifyLoadBalancerRequest $req) 根据输入参数来修改黑石负载均衡实例的基本配置信息。可能的信息包括负载均衡实例的名称，域名前缀。
 * @method Models\ModifyLoadBalancerChargeModeResponse ModifyLoadBalancerChargeMode(Models\ModifyLoadBalancerChargeModeRequest $req) 更改黑石负载均衡的计费方式
 * @method Models\ReplaceCertResponse ReplaceCert(Models\ReplaceCertRequest $req) 更新黑石负载均衡证书。
 * @method Models\SetTrafficMirrorAliasResponse SetTrafficMirrorAlias(Models\SetTrafficMirrorAliasRequest $req) 设置流量镜像的别名。
 * @method Models\SetTrafficMirrorHealthSwitchResponse SetTrafficMirrorHealthSwitch(Models\SetTrafficMirrorHealthSwitchRequest $req) 设置流量镜像的健康检查参数。
 * @method Models\UnbindL4BackendsResponse UnbindL4Backends(Models\UnbindL4BackendsRequest $req) 解绑黑石负载均衡四层监听器物理服务器。
 * @method Models\UnbindL7BackendsResponse UnbindL7Backends(Models\UnbindL7BackendsRequest $req) 解绑黑石物理服务器或者托管服务器到七层转发路径功能。
 * @method Models\UnbindTrafficMirrorListenersResponse UnbindTrafficMirrorListeners(Models\UnbindTrafficMirrorListenersRequest $req) 解绑流量镜像监听器。
 * @method Models\UnbindTrafficMirrorReceiversResponse UnbindTrafficMirrorReceivers(Models\UnbindTrafficMirrorReceiversRequest $req) 从流量镜像实例上解绑流量镜像接收机。
 * @method Models\UploadCertResponse UploadCert(Models\UploadCertRequest $req) 创建黑石负载均衡证书。
 */

class BmlbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bmlb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bmlb";

    /**
     * @var string
     */
    protected $version = "2018-06-25";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("bmlb")."\\"."V20180625\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

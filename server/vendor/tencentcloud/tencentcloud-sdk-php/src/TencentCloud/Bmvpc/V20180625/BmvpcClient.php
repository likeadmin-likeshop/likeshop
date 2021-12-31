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

namespace TencentCloud\Bmvpc\V20180625;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bmvpc\V20180625\Models as Models;

/**
 * @method Models\AcceptVpcPeerConnectionResponse AcceptVpcPeerConnection(Models\AcceptVpcPeerConnectionRequest $req) 接受黑石对等连接
 * @method Models\AsyncRegisterIpsResponse AsyncRegisterIps(Models\AsyncRegisterIpsRequest $req) 批量注册虚拟IP，异步接口。通过接口来查询任务进度。每次请求最多注册256个IP
 * @method Models\BindEipsToNatGatewayResponse BindEipsToNatGateway(Models\BindEipsToNatGatewayRequest $req) NAT网关绑定EIP接口，可将EIP绑定到NAT网关，该EIP作为访问外网的源IP地址，将流量发送到Internet
 * @method Models\BindIpsToNatGatewayResponse BindIpsToNatGateway(Models\BindIpsToNatGatewayRequest $req) 可用于将子网的部分IP绑定到NAT网关
 * @method Models\BindSubnetsToNatGatewayResponse BindSubnetsToNatGateway(Models\BindSubnetsToNatGatewayRequest $req) NAT网关绑定子网后，该子网内全部IP可出公网
 * @method Models\CreateCustomerGatewayResponse CreateCustomerGateway(Models\CreateCustomerGatewayRequest $req) 本接口（CreateCustomerGateway）用于创建对端网关。
 * @method Models\CreateDockerSubnetWithVlanResponse CreateDockerSubnetWithVlan(Models\CreateDockerSubnetWithVlanRequest $req) 创建黑石Docker子网， 如果不指定VlanId，将会分配2000--2999范围的VlanId; 子网会关闭分布式网关
 * @method Models\CreateHostedInterfaceResponse CreateHostedInterface(Models\CreateHostedInterfaceRequest $req) 本接口（CreateHostedInterface）用于黑石托管机器加入带VLANID不为5的子网。

1) 不能加入vlanId 为5的子网，只能加入VLANID范围为2000-2999的子网。
2) 每台托管机器最多可以加入20个子网。
3) 每次调用最多能支持传入10台托管机器。
 * @method Models\CreateInterfacesResponse CreateInterfaces(Models\CreateInterfacesRequest $req) 物理机加入子网
 * @method Models\CreateNatGatewayResponse CreateNatGateway(Models\CreateNatGatewayRequest $req) 创建NAT网关接口，可针对网段方式、子网全部IP、子网部分IP这三种方式创建NAT网关
 * @method Models\CreateRoutePoliciesResponse CreateRoutePolicies(Models\CreateRoutePoliciesRequest $req) 创建黑石路由表的路由规则
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) 创建黑石私有网络的子网
访问管理: 用户可以对VpcId进行授权操作。例如设置资源为["qcs::bmvpc:::unVpc/vpc-xxxxx"]
 * @method Models\CreateVirtualSubnetWithVlanResponse CreateVirtualSubnetWithVlan(Models\CreateVirtualSubnetWithVlanRequest $req) 创建黑石虚拟子网， 虚拟子网用于在黑石上创建虚拟网络，与黑石子网要做好规划。虚拟子网会分配2000-2999的VlanId。
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) 创建黑石私有网络
 * @method Models\CreateVpcPeerConnectionResponse CreateVpcPeerConnection(Models\CreateVpcPeerConnectionRequest $req) 创建对等连接
 * @method Models\DeleteCustomerGatewayResponse DeleteCustomerGateway(Models\DeleteCustomerGatewayRequest $req) 本接口（DeleteCustomerGateway）用于删除对端网关。
 * @method Models\DeleteHostedInterfaceResponse DeleteHostedInterface(Models\DeleteHostedInterfaceRequest $req) 本接口用于托管机器从VLANID不为5的子网中移除。
1) 不能从vlanId 为5的子网中移除。
2) 每次调用最多能支持传入10台物理机。
 * @method Models\DeleteHostedInterfacesResponse DeleteHostedInterfaces(Models\DeleteHostedInterfacesRequest $req) 托管机器移除子网批量接口，传入一台托管机器和多个子网，批量移除这些子网。异步接口，接口返回TaskId。
 * @method Models\DeleteInterfacesResponse DeleteInterfaces(Models\DeleteInterfacesRequest $req) 物理机移除子网批量接口，传入一台物理机和多个子网，批量移除这些子网。异步接口，接口返回TaskId。
 * @method Models\DeleteNatGatewayResponse DeleteNatGateway(Models\DeleteNatGatewayRequest $req) 删除NAT网关
 * @method Models\DeleteRoutePolicyResponse DeleteRoutePolicy(Models\DeleteRoutePolicyRequest $req) 删除黑石路由表路由规则
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) 本接口（DeleteSubnet）用于删除黑石私有网络子网。
删除子网前，请清理该子网下所有资源，包括物理机、负载均衡、黑石数据库、弹性IP、NAT网关等资源
 * @method Models\DeleteVirtualIpResponse DeleteVirtualIp(Models\DeleteVirtualIpRequest $req) 退还虚拟IP。此接口只能退还虚拟IP，物理机IP不能退还。
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) 本接口(DeleteVpc)用于删除黑石私有网络(VPC)。

删除私有网络前，请清理该私有网络下所有资源，包括子网、负载均衡、弹性 IP、对等连接、NAT 网关、专线通道、SSLVPN 等资源。
 * @method Models\DeleteVpcPeerConnectionResponse DeleteVpcPeerConnection(Models\DeleteVpcPeerConnectionRequest $req) 删除黑石对等连接
 * @method Models\DeleteVpnConnectionResponse DeleteVpnConnection(Models\DeleteVpnConnectionRequest $req) 本接口(DeleteVpnConnection)用于删除VPN通道。
 * @method Models\DeleteVpnGatewayResponse DeleteVpnGateway(Models\DeleteVpnGatewayRequest $req) 本接口（DeleteVpnGateway）用于删除VPN网关。
 * @method Models\DeregisterIpsResponse DeregisterIps(Models\DeregisterIpsRequest $req) 注销私有网络IP为空闲
 * @method Models\DescribeCustomerGatewaysResponse DescribeCustomerGateways(Models\DescribeCustomerGatewaysRequest $req) 本接口（DescribeCustomerGateways）用于查询对端网关列表。
 * @method Models\DescribeNatGatewaysResponse DescribeNatGateways(Models\DescribeNatGatewaysRequest $req) 获取NAT网关信息，包括NAT网关 ID、网关名称、私有网络、网关并发连接上限、绑定EIP列表等
 * @method Models\DescribeNatSubnetsResponse DescribeNatSubnets(Models\DescribeNatSubnetsRequest $req) 可获取NAT网关绑定的子网信息
 * @method Models\DescribeRoutePoliciesResponse DescribeRoutePolicies(Models\DescribeRoutePoliciesRequest $req) 本接口（DescribeRoutePolicies）用于查询路由表条目。
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req) 本接口（DescribeRouteTables）用于查询路由表。
 * @method Models\DescribeSubnetAvailableIpsResponse DescribeSubnetAvailableIps(Models\DescribeSubnetAvailableIpsRequest $req) 获取子网内可用IP列表
 * @method Models\DescribeSubnetByDeviceResponse DescribeSubnetByDevice(Models\DescribeSubnetByDeviceRequest $req) 物理机可以加入物理机子网，虚拟子网，DOCKER子网，通过此接口可以查询物理机加入的子网。
 * @method Models\DescribeSubnetByHostedDeviceResponse DescribeSubnetByHostedDevice(Models\DescribeSubnetByHostedDeviceRequest $req) 托管可以加入物理机子网，虚拟子网，DOCKER子网，通过此接口可以查询托管加入的子网。
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) 本接口（DescribeSubnets）用于查询黑石子网列表。
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 根据任务ID，获取任务的执行状态
 * @method Models\DescribeVpcPeerConnectionsResponse DescribeVpcPeerConnections(Models\DescribeVpcPeerConnectionsRequest $req) 获取对等连接列表
 * @method Models\DescribeVpcQuotaResponse DescribeVpcQuota(Models\DescribeVpcQuotaRequest $req) 本接口（DescribeVpcQuota）用于查询用户VPC相关配额限制。
 * @method Models\DescribeVpcResourceResponse DescribeVpcResource(Models\DescribeVpcResourceRequest $req) 查询黑石私有网络关联资源
 * @method Models\DescribeVpcViewResponse DescribeVpcView(Models\DescribeVpcViewRequest $req) 本接口（DescribeVpcView）用于查询VPC网络拓扑视图。
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) 本接口（DescribeVpcs）用于查询私有网络列表。
本接口不传参数时，返回默认排序下的前20条VPC信息。
 * @method Models\DescribeVpnConnectionsResponse DescribeVpnConnections(Models\DescribeVpnConnectionsRequest $req)  本接口（DescribeVpnConnections）查询VPN通道列表。
 * @method Models\DescribeVpnGatewaysResponse DescribeVpnGateways(Models\DescribeVpnGatewaysRequest $req) 本接口（DescribeVpnGateways）用于查询VPN网关列表。
 * @method Models\DownloadCustomerGatewayConfigurationResponse DownloadCustomerGatewayConfiguration(Models\DownloadCustomerGatewayConfigurationRequest $req) 本接口(DownloadCustomerGatewayConfiguration)用于下载VPN通道配置。
 * @method Models\ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttribute(Models\ModifyCustomerGatewayAttributeRequest $req) 本接口（ModifyCustomerGatewayAttribute）用于修改对端网关信息。
 * @method Models\ModifyRoutePolicyResponse ModifyRoutePolicy(Models\ModifyRoutePolicyRequest $req) 修改自定义路由
 * @method Models\ModifyRouteTableResponse ModifyRouteTable(Models\ModifyRouteTableRequest $req) 修改路由表
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) 修改子网属性
 * @method Models\ModifySubnetDHCPRelayResponse ModifySubnetDHCPRelay(Models\ModifySubnetDHCPRelayRequest $req) 修改子网DHCP Relay属性
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) 本接口（ModifyVpcAttribute）用于修改VPC的标识名称和控制VPC的监控起停。
 * @method Models\ModifyVpcPeerConnectionResponse ModifyVpcPeerConnection(Models\ModifyVpcPeerConnectionRequest $req) 修改黑石对等连接
 * @method Models\ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(Models\ModifyVpnConnectionAttributeRequest $req) 本接口（ModifyVpnConnectionAttribute）用于修改VPN通道。
 * @method Models\ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(Models\ModifyVpnGatewayAttributeRequest $req) 本接口（ModifyVpnGatewayAttribute）用于修改VPN网关属性。
 * @method Models\RejectVpcPeerConnectionResponse RejectVpcPeerConnection(Models\RejectVpcPeerConnectionRequest $req) 拒绝黑石对等连接申请
 * @method Models\ResetVpnConnectionResponse ResetVpnConnection(Models\ResetVpnConnectionRequest $req) 本接口(ResetVpnConnection)用于重置VPN通道。
 * @method Models\UnbindEipsFromNatGatewayResponse UnbindEipsFromNatGateway(Models\UnbindEipsFromNatGatewayRequest $req) NAT网关解绑该EIP后，NAT网关将不会使用该EIP作为访问外网的源IP地址

 * @method Models\UnbindIpsFromNatGatewayResponse UnbindIpsFromNatGateway(Models\UnbindIpsFromNatGatewayRequest $req) NAT网关解绑IP接口，可将子网的部分IP从NAT网关中解绑
 * @method Models\UnbindSubnetsFromNatGatewayResponse UnbindSubnetsFromNatGateway(Models\UnbindSubnetsFromNatGatewayRequest $req) NAT网关解绑子网接口，可将子网解绑NAT网关
 * @method Models\UpgradeNatGatewayResponse UpgradeNatGateway(Models\UpgradeNatGatewayRequest $req) 升级NAT网关接口，可NAT网关修改为小型NAT网关、中型NAT网关、以及大型NAT网关
 */

class BmvpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bmvpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bmvpc";

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
        $respClass = "TencentCloud"."\\".ucfirst("bmvpc")."\\"."V20180625\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

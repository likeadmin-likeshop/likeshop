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

namespace TencentCloud\Ecm\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecm\V20190719\Models as Models;

/**
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) 申请一个或多个弹性公网IP（简称 EIP）
 * @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) 本接口（AssignIpv6Addresses）用于弹性网卡申请IPv6地址。
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) 弹性网卡申请内网 IP
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) 将弹性公网IP（简称 EIP）绑定到实例或弹性网卡的指定内网 IP 上。
将 EIP 绑定到实例（ECM）上，其本质是将 EIP 绑定到实例上主网卡的主内网 IP 上。
将 EIP 绑定到指定网卡的内网 IP上，内网IP已经绑定了EIP或普通公网IP，则反馈失败。必须先解绑该 EIP，才能再绑定新的。
只有状态为 UNBIND 的 EIP 才能够绑定内网IP。
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 绑定安全组
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) 弹性网卡绑定云主机
 * @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) 批量解绑后端服务。
 * @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) 批量修改监听器绑定的后端机器的转发权重。
 * @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) 批量绑定后端目标。
 * @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) 本接口（CreateHaVip）用于创建高可用虚拟IP（HAVIP）
 * @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) 本接口(CreateImage)用于将实例的系统盘制作为新镜像，创建后的镜像可以用于创建实例。
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 创建负载均衡监听器。
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) 购买负载均衡实例。
 * @method Models\CreateModuleResponse CreateModule(Models\CreateModuleRequest $req) 创建模块
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) 创建弹性网卡
 * @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) 创建了VPC后，系统会创建一个默认路由表，所有新建的子网都会关联到默认路由表。默认情况下您可以直接使用默认路由表来管理您的路由策略。当您的路由策略较多时，您可以调用创建路由表接口创建更多路由表管理您的路由策略。
 * @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) 创建路由策略
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) 创建安全组
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) <p>本接口（CreateSecurityGroupPolicies）用于创建安全组规则（SecurityGroupPolicy）。</p>
<p>在 SecurityGroupPolicySet 参数中：</p>
<ul>
<li>Version 安全组规则版本号，用户每次更新安全规则版本会自动加1，防止您更新的路由规则已过期，不填不考虑冲突。</li>
<li>在创建出站和入站规则（Egress 和 Ingress）时：<ul>
<li>Protocol 字段支持输入TCP, UDP, ICMP, GRE, ALL。</li>
<li>CidrBlock 字段允许输入符合cidr格式标准的任意字符串。在基础网络中，如果 CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。</li>
<li>SecurityGroupId 字段允许输入与待修改的安全组位于相同项目中的安全组 ID，包括这个安全组 ID 本身，代表安全组下所有云服务器的内网 IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个 ID 所关联的云服务器变化而变化，不需要重新修改。</li>
<li>Port 字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当 Protocol 字段是 TCP 或 UDP 时，Port 字段才被接受，即 Protocol 字段不是 TCP 或 UDP 时，Protocol 和 Port 排他关系，不允许同时输入，否则会接口报错。</li>
<li>Action 字段只允许输入 ACCEPT 或 DROP。</li>
<li>CidrBlock, SecurityGroupId, AddressTemplate 是排他关系，不允许同时输入，Protocol + Port 和 ServiceTemplate 二者是排他关系，不允许同时输入。</li>
<li>一次请求中只能创建单个方向的规则, 如果需要指定索引（PolicyIndex）参数, 多条规则的索引必须一致。</li>
</ul></li></ul>
<p>默认接口请求频率限制：20次/秒。</p>
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) 创建子网，若创建成功，则此子网会成为此可用区的默认子网。
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) 创建私有网络
 * @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) 用于删除高可用虚拟IP（HAVIP）
 * @method Models\DeleteImageResponse DeleteImage(Models\DeleteImageRequest $req) 删除镜像
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 删除负载均衡监听器。
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) 删除负载均衡实例。
 * @method Models\DeleteLoadBalancerListenersResponse DeleteLoadBalancerListeners(Models\DeleteLoadBalancerListenersRequest $req) 删除负载均衡多个监听器
 * @method Models\DeleteModuleResponse DeleteModule(Models\DeleteModuleRequest $req) 删除业务模块
 * @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) 删除弹性网卡
 * @method Models\DeleteRouteTableResponse DeleteRouteTable(Models\DeleteRouteTableRequest $req) 删除路由表
 * @method Models\DeleteRoutesResponse DeleteRoutes(Models\DeleteRoutesRequest $req) 对某个路由表批量删除路由策略
 * @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) 只有当前账号下的安全组允许被删除。
安全组实例ID如果在其他安全组的规则中被引用，则无法直接删除。这种情况下，需要先进行规则修改，再删除安全组。
删除的安全组无法再找回，请谨慎调用。
 * @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) SecurityGroupPolicySet.Version 用于指定要操作的安全组的版本。传入 Version 版本号若不等于当前安全组的最新版本，将返回失败；若不传 Version 则直接删除指定PolicyIndex的规则。
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) 删除子网，若子网为可用区下的默认子网，则默认子网会回退到系统自动创建的默认子网，非用户最新创建的子网。若默认子网不满足需求，可调用设置默认子网接口设置。
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) 删除私有网络
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) 查询您账户的弹性公网IP（简称 EIP）在当前地域的配额信息
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) 查询弹性公网IP列表
 * @method Models\DescribeBaseOverviewResponse DescribeBaseOverview(Models\DescribeBaseOverviewRequest $req) 获取概览页统计的基本数据
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 获取带宽硬盘等数据的限制
 * @method Models\DescribeCustomImageTaskResponse DescribeCustomImageTask(Models\DescribeCustomImageTaskRequest $req) 查询导入镜像任务
 * @method Models\DescribeDefaultSubnetResponse DescribeDefaultSubnet(Models\DescribeDefaultSubnetRequest $req) 查询可用区的默认子网
 * @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) 用于查询高可用虚拟IP（HAVIP）列表。
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) 展示镜像列表
 * @method Models\DescribeImportImageOsResponse DescribeImportImageOs(Models\DescribeImportImageOsRequest $req) 查询外部导入镜像支持的OS列表
 * @method Models\DescribeInstanceTypeConfigResponse DescribeInstanceTypeConfig(Models\DescribeInstanceTypeConfigRequest $req) 获取机型配置列表
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) 查询实例管理终端地址
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取实例的相关信息。
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) 通过实例id获取当前禁止的操作
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) 查询负载均衡的监听器列表。
 * @method Models\DescribeLoadBalanceTaskStatusResponse DescribeLoadBalanceTaskStatus(Models\DescribeLoadBalanceTaskStatusRequest $req) 查询负载均衡相关的任务状态
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 查询负载均衡实例列表。
 * @method Models\DescribeModuleResponse DescribeModule(Models\DescribeModuleRequest $req) 获取模块列表
 * @method Models\DescribeModuleDetailResponse DescribeModuleDetail(Models\DescribeModuleDetailRequest $req) 展示模块详细信息
 * @method Models\DescribeMonthPeakNetworkResponse DescribeMonthPeakNetwork(Models\DescribeMonthPeakNetworkRequest $req) 获取客户节点上的出入带宽月峰和计费带宽信息
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) 查询弹性网卡列表
 * @method Models\DescribeNodeResponse DescribeNode(Models\DescribeNodeRequest $req) 获取节点列表
 * @method Models\DescribePeakBaseOverviewResponse DescribePeakBaseOverview(Models\DescribePeakBaseOverviewRequest $req) CPU 内存 硬盘等基础信息峰值数据
 * @method Models\DescribePeakNetworkOverviewResponse DescribePeakNetworkOverview(Models\DescribePeakNetworkOverviewRequest $req) 获取网络峰值数据
 * @method Models\DescribeRouteConflictsResponse DescribeRouteConflicts(Models\DescribeRouteConflictsRequest $req) 查询自定义路由策略与云联网路由策略冲突列表
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req) 查询路由表对象列表
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) 查询安全组关联实例统计
 * @method Models\DescribeSecurityGroupLimitsResponse DescribeSecurityGroupLimits(Models\DescribeSecurityGroupLimitsRequest $req) 查询用户安全组配额
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) 查询安全组规则
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) 查看安全组
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) 查询子网列表
 * @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) 获取负载均衡后端服务的健康检查状态。
 * @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) 查询负载均衡绑定的后端服务列表。
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) 查询EIP异步任务执行结果
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口(DescribeTaskStatus)用于获取异步任务状态
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) 查询私有网络列表
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) 弹性网卡解绑云主机
 * @method Models\DisableRoutesResponse DisableRoutes(Models\DisableRoutesRequest $req) 禁用已启用的子网路由
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) 解绑弹性公网IP（简称 EIP）
只有状态为 BIND 和 BIND_ENI 的 EIP 才能进行解绑定操作。
EIP 如果被封堵，则不能进行解绑定操作。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 解绑安全组
 * @method Models\EnableRoutesResponse EnableRoutes(Models\EnableRoutesRequest $req) 启用已禁用的子网路由。
本接口会校验启用后，是否与已有路由冲突，如果冲突，则无法启用，失败处理。路由冲突时，需要先禁用与之冲突的路由，才能启用该路由。
 * @method Models\ImportCustomImageResponse ImportCustomImage(Models\ImportCustomImageRequest $req) 导入自定义镜像，支持 RAW、VHD、QCOW2、VMDK 镜像格式
 * @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) 从CVM产品导入镜像到ECM
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) 弹性网卡迁移
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req) 弹性网卡内网IP迁移。
该接口用于将一个内网IP从一个弹性网卡上迁移到另外一个弹性网卡，主IP地址不支持迁移。
迁移前后的弹性网卡必须在同一个子网内。
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) 修改弹性公网IP属性
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) 调整弹性公网IP带宽

 * @method Models\ModifyDefaultSubnetResponse ModifyDefaultSubnet(Models\ModifyDefaultSubnetRequest $req) 修改在一个可用区下创建实例时使用的默认子网（创建实例时，未填写VPC参数时使用的sunbetId）
 * @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) 用于修改高可用虚拟IP（HAVIP）属性
 * @method Models\ModifyImageAttributeResponse ModifyImageAttribute(Models\ModifyImageAttributeRequest $req) 本接口（ModifyImageAttribute）用于修改镜像属性。
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) 修改实例的属性。
 * @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) 本接口（ModifyIpv6AddressesAttribute）用于修改弹性网卡IPv6地址属性。
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) 修改负载均衡监听器属性。
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) 修改负载均衡实例的属性。
 * @method Models\ModifyModuleConfigResponse ModifyModuleConfig(Models\ModifyModuleConfigRequest $req) 修改模块配置，已关联实例的模块不支持调整配置。
 * @method Models\ModifyModuleDisableWanIpResponse ModifyModuleDisableWanIp(Models\ModifyModuleDisableWanIpRequest $req) 修改模块是否禁止分配外网ip的属性。
 * @method Models\ModifyModuleImageResponse ModifyModuleImage(Models\ModifyModuleImageRequest $req) 修改模块的默认镜像
 * @method Models\ModifyModuleIpDirectResponse ModifyModuleIpDirect(Models\ModifyModuleIpDirectRequest $req) 修改模块IP直通。
 * @method Models\ModifyModuleNameResponse ModifyModuleName(Models\ModifyModuleNameRequest $req) 修改模块名称
 * @method Models\ModifyModuleNetworkResponse ModifyModuleNetwork(Models\ModifyModuleNetworkRequest $req) 修改模块默认带宽上限
 * @method Models\ModifyModuleSecurityGroupsResponse ModifyModuleSecurityGroups(Models\ModifyModuleSecurityGroupsRequest $req) 修改模块默认安全组
 * @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) 用于修改弹性网卡内网IP属性。
 * @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) 修改路由表属性
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) 修改安全组属性
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) 修改安全组出站和入站规则
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) 修改子网属性
 * @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) 修改监听器绑定的后端机器的端口。
 * @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) 修改监听器绑定的后端机器的转发权重。
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) 修改私有网络（VPC）的相关属性
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 只有状态为RUNNING的实例才可以进行此操作；接口调用成功时，实例会进入REBOOTING状态；重启实例成功时，实例会进入RUNNING状态；支持强制重启，强制重启的效果等同于关闭物理计算机的电源开关再重新启动。强制重启可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常重启时使用。
 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) 释放一个或多个弹性公网IP（简称 EIP）。
该操作不可逆，释放后 EIP 关联的 IP 地址将不再属于您的名下。
只有状态为 UNBIND 的 EIP 才能进行释放操作。
 * @method Models\ReleaseIpv6AddressesResponse ReleaseIpv6Addresses(Models\ReleaseIpv6AddressesRequest $req) 本接口（UnassignIpv6Addresses）用于释放弹性网卡IPv6地址。
 * @method Models\RemovePrivateIpAddressesResponse RemovePrivateIpAddresses(Models\RemovePrivateIpAddressesRequest $req) 弹性网卡退还内网 IP。
退还弹性网卡上的辅助内网IP，接口自动解关联弹性公网 IP。不能退还弹性网卡的主内网IP。
 * @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) 修改子网关联的路由表，一个子网只能关联一个路由表。
 * @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) 替换路由策略
 * @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) 替换单条安全组路由规则, 单个请求中只能替换单个方向的一条规则, 必须要指定索引（PolicyIndex）。
 * @method Models\ResetInstancesResponse ResetInstances(Models\ResetInstancesRequest $req) 重装实例，若指定了ImageId参数，则使用指定的镜像重装；否则按照当前实例使用的镜像进行重装；若未指定密码，则密码通过站内信形式随后发送。
 * @method Models\ResetInstancesMaxBandwidthResponse ResetInstancesMaxBandwidth(Models\ResetInstancesMaxBandwidthRequest $req) 重置实例的最大带宽上限。
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) 重置处于运行中状态的实例的密码，需要显式指定强制关机参数ForceStop。如果没有显式指定强制关机参数，则只有处于关机状态的实例才允许执行重置密码操作。
 * @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) 对某个路由表名称和所有路由策略（Route）进行重新设置
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) 创建ECM实例。
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) 设置负载均衡实例的安全组。
 * @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) 绑定或解绑一个安全组到多个负载均衡实例。
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) 只有状态为STOPPED的实例才可以进行此操作；接口调用成功时，实例会进入STARTING状态；启动实例成功时，实例会进入RUNNING状态。
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) 只有处于"RUNNING"状态的实例才能够进行关机操作；
调用成功时，实例会进入STOPPING状态；关闭实例成功时，实例会进入STOPPED状态；
支持强制关闭，强制关机的效果等同于关闭物理计算机的电源开关，强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 销毁实例
 */

class EcmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ecm";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecm")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

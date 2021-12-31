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

namespace TencentCloud\Vpc\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vpc\V20170312\Models as Models;

/**
 * @method Models\AcceptAttachCcnInstancesResponse AcceptAttachCcnInstances(Models\AcceptAttachCcnInstancesRequest $req) 本接口（AcceptAttachCcnInstances）用于跨账号关联实例时，云联网所有者接受并同意关联操作。
 * @method Models\AddBandwidthPackageResourcesResponse AddBandwidthPackageResources(Models\AddBandwidthPackageResourcesRequest $req) 接口用于添加带宽包资源，包括[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)和[负载均衡](https://cloud.tencent.com/document/product/214/517)等
 * @method Models\AddIp6RulesResponse AddIp6Rules(Models\AddIp6RulesRequest $req) 1. 该接口用于在转换实例下添加IPV6转换规则。
2. 支持在同一个转换实例下批量添加转换规则，一个账户在一个地域最多50个。
3. 一个完整的转换规则包括vip6:vport6:protocol:vip:vport，其中vip6:vport6:protocol必须是唯一。
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) 本接口 (AllocateAddresses) 用于申请一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* EIP 是专为动态云计算设计的静态 IP 地址。借助 EIP，您可以快速将 EIP 重新映射到您的另一个实例上，从而屏蔽实例故障。
* 您的 EIP 与腾讯云账户相关联，而不是与某个实例相关联。在您选择显式释放该地址，或欠费超过24小时之前，它会一直与您的腾讯云账户保持关联。
* 一个腾讯云账户在每个地域能申请的 EIP 最大配额有所限制，可参见 [EIP 产品简介](https://cloud.tencent.com/document/product/213/5733)，上述配额可通过 DescribeAddressQuota 接口获取。
 * @method Models\AllocateIp6AddressesBandwidthResponse AllocateIp6AddressesBandwidth(Models\AllocateIp6AddressesBandwidthRequest $req) 该接口用于给IPv6地址初次分配公网带宽
 * @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) 本接口（AssignIpv6Addresses）用于弹性网卡申请`IPv6`地址。<br />
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口。
* 一个弹性网卡支持绑定的IP地址是有限制的，更多资源限制信息详见<a href="/document/product/576/18527">弹性网卡使用限制</a>。
* 可以指定`IPv6`地址申请，地址类型不能为主`IP`，`IPv6`地址暂时只支持作为辅助`IP`。
* 地址必须要在弹性网卡所在子网内，而且不能被占用。
* 在弹性网卡上申请一个到多个辅助`IPv6`地址，接口会在弹性网卡所在子网段内返回指定数量的辅助`IPv6`地址。
 * @method Models\AssignIpv6CidrBlockResponse AssignIpv6CidrBlock(Models\AssignIpv6CidrBlockRequest $req) 本接口（AssignIpv6CidrBlock）用于分配IPv6网段。
* 使用本接口前，您需要已有VPC实例，如果没有可通过接口<a href="https://cloud.tencent.com/document/api/215/15774" title="CreateVpc" target="_blank">CreateVpc</a>创建。
* 每个VPC只能申请一个IPv6网段
 * @method Models\AssignIpv6SubnetCidrBlockResponse AssignIpv6SubnetCidrBlock(Models\AssignIpv6SubnetCidrBlockRequest $req) 本接口（AssignIpv6SubnetCidrBlock）用于分配IPv6子网段。
* 给子网分配 `IPv6` 网段，要求子网所属 `VPC` 已获得 `IPv6` 网段。如果尚未分配，请先通过接口 `AssignIpv6CidrBlock` 给子网所属 `VPC` 分配一个 `IPv6` 网段。否则无法分配 `IPv6` 子网段。
* 每个子网只能分配一个IPv6网段。
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) 本接口（AssignPrivateIpAddresses）用于弹性网卡申请内网 IP。
* 一个弹性网卡支持绑定的IP地址是有限制的，更多资源限制信息详见<a href="/document/product/576/18527">弹性网卡使用限制</a>。
* 可以指定内网IP地址申请，内网IP地址类型不能为主IP，主IP已存在，不能修改，内网IP必须要弹性网卡所在子网内，而且不能被占用。
* 在弹性网卡上申请一个到多个辅助内网IP，接口会在弹性网卡所在子网网段内返回指定数量的辅助内网IP。
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) 本接口 (AssociateAddress) 用于将[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）绑定到实例或弹性网卡的指定内网 IP 上。
* 将 EIP 绑定到实例（CVM）上，其本质是将 EIP 绑定到实例上主网卡的主内网 IP 上。
* 将 EIP 绑定到主网卡的主内网IP上，绑定过程会把其上绑定的普通公网 IP 自动解绑并释放。
* 将 EIP 绑定到指定网卡的内网 IP上（非主网卡的主内网IP），则必须先解绑该 EIP，才能再绑定新的。
* 将 EIP 绑定到NAT网关，请使用接口[AssociateNatGatewayAddress](https://cloud.tencent.com/document/product/215/36722)
* EIP 如果欠费或被封堵，则不能被绑定。
* 只有状态为 UNBIND 的 EIP 才能够被绑定。
 * @method Models\AssociateDhcpIpWithAddressIpResponse AssociateDhcpIpWithAddressIp(Models\AssociateDhcpIpWithAddressIpRequest $req) 本接口（AssociateDhcpIpWithAddressIp）用于DhcpIp绑定弹性公网IP（EIP）。<br />
 * @method Models\AssociateDirectConnectGatewayNatGatewayResponse AssociateDirectConnectGatewayNatGateway(Models\AssociateDirectConnectGatewayNatGatewayRequest $req) 将专线网关与NAT网关绑定，专线网关默认路由指向NAT网关
 * @method Models\AssociateNatGatewayAddressResponse AssociateNatGatewayAddress(Models\AssociateNatGatewayAddressRequest $req) 本接口(AssociateNatGatewayAddress)用于NAT网关绑定弹性IP（EIP）。
 * @method Models\AssociateNetworkAclSubnetsResponse AssociateNetworkAclSubnets(Models\AssociateNetworkAclSubnetsRequest $req) 本接口（AssociateNetworkAclSubnets）用于网络ACL关联vpc下的子网。
 * @method Models\AssociateNetworkInterfaceSecurityGroupsResponse AssociateNetworkInterfaceSecurityGroups(Models\AssociateNetworkInterfaceSecurityGroupsRequest $req) 本接口（AssociateNetworkInterfaceSecurityGroups）用于弹性网卡绑定安全组（SecurityGroup）。
 * @method Models\AttachCcnInstancesResponse AttachCcnInstances(Models\AttachCcnInstancesRequest $req) 本接口（AttachCcnInstances）用于将网络实例加载到云联网实例中，网络实例包括VPC和专线网关。<br />
每个云联网能够关联的网络实例个数是有限的，详请参考产品文档。如果需要扩充请联系在线客服。
 * @method Models\AttachClassicLinkVpcResponse AttachClassicLinkVpc(Models\AttachClassicLinkVpcRequest $req) 本接口(AttachClassicLinkVpc)用于创建私有网络和基础网络设备互通。
* 私有网络和基础网络设备必须在同一个地域。
* 私有网络和基础网络的区别详见vpc产品文档-<a href="https://cloud.tencent.com/document/product/215/30720">私有网络与基础网络</a>。
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) 本接口（AttachNetworkInterface）用于弹性网卡绑定云服务器。
* 一个云服务器可以绑定多个弹性网卡，但只能绑定一个主网卡。更多限制信息详见<a href="https://cloud.tencent.com/document/product/576/18527">弹性网卡使用限制</a>。
* 一个弹性网卡只能同时绑定一个云服务器。
* 只有运行中或者已关机状态的云服务器才能绑定弹性网卡，查看云服务器状态详见<a href="https://cloud.tencent.com/document/api/213/9452#InstanceStatus">腾讯云服务器信息</a>。
* 弹性网卡绑定的云服务器必须是私有网络的，而且云服务器所在可用区必须和弹性网卡子网的可用区相同。
 * @method Models\AuditCrossBorderComplianceResponse AuditCrossBorderCompliance(Models\AuditCrossBorderComplianceRequest $req) 本接口（AuditCrossBorderCompliance）用于服务商操作合规化资质审批。
* 服务商只能操作提交到本服务商的审批单，后台会校验身份。即只授权给服务商的`APPID` 调用本接口。
* `APPROVED` 状态的审批单，可以再次操作为 `DENY`；`DENY` 状态的审批单，也可以再次操作为 `APPROVED`。
 * @method Models\CheckAssistantCidrResponse CheckAssistantCidr(Models\CheckAssistantCidrRequest $req) 本接口(CheckAssistantCidr)用于检查辅助CIDR是否与存量路由、对等连接（对端VPC的CIDR）等资源存在冲突。如果存在重叠，则返回重叠的资源。（接口灰度中，如需使用请提工单。）
* 检测辅助CIDR是否与当前VPC的主CIDR和辅助CIDR存在重叠。
* 检测辅助CIDR是否与当前VPC的路由的目的端存在重叠。
* 检测辅助CIDR是否与当前VPC的对等连接，对端VPC下的主CIDR或辅助CIDR存在重叠。
 * @method Models\CheckDefaultSubnetResponse CheckDefaultSubnet(Models\CheckDefaultSubnetRequest $req) 本接口（CheckDefaultSubnet）用于预判是否可建默认子网。
 * @method Models\CheckNetDetectStateResponse CheckNetDetectState(Models\CheckNetDetectStateRequest $req) 本接口(CheckNetDetectState)用于验证网络探测。
 * @method Models\CloneSecurityGroupResponse CloneSecurityGroup(Models\CloneSecurityGroupRequest $req) 本接口（CloneSecurityGroup）用于根据存量的安全组，克隆创建出同样规则配置的安全组。仅克隆安全组及其规则信息，不会克隆安全组标签信息。
 * @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) 本接口（CreateAddressTemplate）用于创建IP地址模版
 * @method Models\CreateAddressTemplateGroupResponse CreateAddressTemplateGroup(Models\CreateAddressTemplateGroupRequest $req) 本接口（CreateAddressTemplateGroup）用于创建IP地址模版集合
 * @method Models\CreateAndAttachNetworkInterfaceResponse CreateAndAttachNetworkInterface(Models\CreateAndAttachNetworkInterfaceRequest $req) 本接口（CreateAndAttachNetworkInterface）用于创建弹性网卡并绑定云服务器。
* 创建弹性网卡时可以指定内网IP，并且可以指定一个主IP，指定的内网IP必须在弹性网卡所在子网内，而且不能被占用。
* 创建弹性网卡时可以指定需要申请的内网IP数量，系统会随机生成内网IP地址。
* 一个弹性网卡支持绑定的IP地址是有限制的，更多资源限制信息详见<a href="/document/product/576/18527">弹性网卡使用限制</a>。
* 创建弹性网卡同时可以绑定已有安全组。
* 创建弹性网卡同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateAssistantCidrResponse CreateAssistantCidr(Models\CreateAssistantCidrRequest $req) 本接口(CreateAssistantCidr)用于批量创建辅助CIDR。（接口灰度中，如需使用请提工单。）
 * @method Models\CreateBandwidthPackageResponse CreateBandwidthPackage(Models\CreateBandwidthPackageRequest $req) 接口支持创建[设备带宽包](https://cloud.tencent.com/document/product/684/15246#.E8.AE.BE.E5.A4.87.E5.B8.A6.E5.AE.BD.E5.8C.85)和[IP带宽包](https://cloud.tencent.com/document/product/684/15246#ip-.E5.B8.A6.E5.AE.BD.E5.8C.85)
 * @method Models\CreateCcnResponse CreateCcn(Models\CreateCcnRequest $req) 本接口（CreateCcn）用于创建云联网（CCN）。<br />
* 创建云联网同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
每个账号能创建的云联网实例个数是有限的，详请参考产品文档。如果需要扩充请联系在线客服。
 * @method Models\CreateCustomerGatewayResponse CreateCustomerGateway(Models\CreateCustomerGatewayRequest $req) 本接口（CreateCustomerGateway）用于创建对端网关。
 * @method Models\CreateDefaultSecurityGroupResponse CreateDefaultSecurityGroup(Models\CreateDefaultSecurityGroupRequest $req) 本接口（CreateDefaultSecurityGroup）用于创建（如果项目下未存在默认安全组，则创建；已存在则获取。）默认安全组（SecurityGroup）。
* 每个账户下每个地域的每个项目的<a href="https://cloud.tencent.com/document/product/213/12453">安全组数量限制</a>。
* 默认安全组会放通所有IPv4规则，在创建后通常您需要再调用CreateSecurityGroupPolicies将安全组的规则设置为需要的规则。
* 创建安全组同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateDefaultVpcResponse CreateDefaultVpc(Models\CreateDefaultVpcRequest $req) 本接口（CreateDefaultVpc）用于创建默认私有网络(VPC）。

默认VPC适用于快速入门和启动公共实例，您可以像使用任何其他VPC一样使用默认VPC。如果您想创建标准VPC，即指定VPC名称、VPC网段、子网网段、子网可用区，请使用常规创建VPC接口（CreateVpc）

正常情况，本接口并不一定生产默认VPC，而是根据用户账号的网络属性（DescribeAccountAttributes）来决定的
* 支持基础网络、VPC，返回VpcId为0
* 只支持VPC，返回默认VPC信息

您也可以通过 Force 参数，强制返回默认VPC
 * @method Models\CreateDhcpIpResponse CreateDhcpIp(Models\CreateDhcpIpRequest $req) 本接口（CreateDhcpIp）用于创建DhcpIp
 * @method Models\CreateDirectConnectGatewayResponse CreateDirectConnectGateway(Models\CreateDirectConnectGatewayRequest $req) 本接口（CreateDirectConnectGateway）用于创建专线网关。
 * @method Models\CreateDirectConnectGatewayCcnRoutesResponse CreateDirectConnectGatewayCcnRoutes(Models\CreateDirectConnectGatewayCcnRoutesRequest $req) 本接口（CreateDirectConnectGatewayCcnRoutes）用于创建专线网关的云联网路由（IDC网段）
 * @method Models\CreateFlowLogResponse CreateFlowLog(Models\CreateFlowLogRequest $req) 本接口（CreateFlowLog）用于创建流日志
 * @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) 本接口（CreateHaVip）用于创建高可用虚拟IP（HAVIP）
 * @method Models\CreateIp6TranslatorsResponse CreateIp6Translators(Models\CreateIp6TranslatorsRequest $req) 1. 该接口用于创建IPV6转换IPV4实例，支持批量
2. 同一个账户在一个地域最多允许创建10个转换实例
 * @method Models\CreateLocalGatewayResponse CreateLocalGateway(Models\CreateLocalGatewayRequest $req) 该接口用于创建用于CDC的本地网关。
 * @method Models\CreateNatGatewayResponse CreateNatGateway(Models\CreateNatGatewayRequest $req) 本接口(CreateNatGateway)用于创建NAT网关。
 * @method Models\CreateNatGatewayDestinationIpPortTranslationNatRuleResponse CreateNatGatewayDestinationIpPortTranslationNatRule(Models\CreateNatGatewayDestinationIpPortTranslationNatRuleRequest $req) 本接口(CreateNatGatewayDestinationIpPortTranslationNatRule)用于创建NAT网关端口转发规则。
 * @method Models\CreateNatGatewaySourceIpTranslationNatRuleResponse CreateNatGatewaySourceIpTranslationNatRule(Models\CreateNatGatewaySourceIpTranslationNatRuleRequest $req) 本接口(CreateNatGatewaySourceIpTranslationNatRule)用于创建NAT网关SNAT规则
 * @method Models\CreateNetDetectResponse CreateNetDetect(Models\CreateNetDetectRequest $req) 本接口(CreateNetDetect)用于创建网络探测。
 * @method Models\CreateNetworkAclResponse CreateNetworkAcl(Models\CreateNetworkAclRequest $req) 本接口（CreateNetworkAcl）用于创建新的<a href="https://cloud.tencent.com/document/product/215/20088">网络ACL</a>。
* 新建的网络ACL的入站和出站规则默认都是全部拒绝，在创建后通常您需要再调用ModifyNetworkAclEntries将网络ACL的规则设置为需要的规则。
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) 本接口（CreateNetworkInterface）用于创建弹性网卡。
* 创建弹性网卡时可以指定内网IP，并且可以指定一个主IP，指定的内网IP必须在弹性网卡所在子网内，而且不能被占用。
* 创建弹性网卡时可以指定需要申请的内网IP数量，系统会随机生成内网IP地址。
* 一个弹性网卡支持绑定的IP地址是有限制的，更多资源限制信息详见<a href="/document/product/576/18527">弹性网卡使用限制</a>。
* 创建弹性网卡同时可以绑定已有安全组。
* 创建弹性网卡同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) 本接口(CreateRouteTable)用于创建路由表。
* 创建了VPC后，系统会创建一个默认路由表，所有新建的子网都会关联到默认路由表。默认情况下您可以直接使用默认路由表来管理您的路由策略。当您的路由策略较多时，您可以调用创建路由表接口创建更多路由表管理您的路由策略。
* 创建路由表同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) 本接口(CreateRoutes)用于创建路由策略。
* 向指定路由表批量新增路由策略。
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) 本接口（CreateSecurityGroup）用于创建新的安全组（SecurityGroup）。
* 每个账户下每个地域的每个项目的<a href="https://cloud.tencent.com/document/product/213/12453">安全组数量限制</a>。
* 新建的安全组的入站和出站规则默认都是全部拒绝，在创建后通常您需要再调用CreateSecurityGroupPolicies将安全组的规则设置为需要的规则。
* 创建安全组同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) 本接口（CreateSecurityGroupPolicies）用于创建安全组规则（SecurityGroupPolicy）。

在 SecurityGroupPolicySet 参数中：
<ul>
<li>Version 安全组规则版本号，用户每次更新安全规则版本会自动加1，防止您更新的路由规则已过期，不填不考虑冲突。</li>
<li>在创建出站和入站规则（Egress 和 Ingress）时：<ul>
<li>Protocol 字段支持输入TCP, UDP, ICMP, ICMPV6, GRE, ALL。</li>
<li>CidrBlock 字段允许输入符合cidr格式标准的任意字符串。在基础网络中，如果 CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。</li>
<li>Ipv6CidrBlock 字段允许输入符合IPv6 cidr格式标准的任意字符串。在基础网络中，如果Ipv6CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IPv6，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。</li>
<li>SecurityGroupId 字段允许输入与待修改的安全组位于相同项目中的安全组 ID，包括这个安全组 ID 本身，代表安全组下所有云服务器的内网 IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个 ID 所关联的云服务器变化而变化，不需要重新修改。</li>
<li>Port 字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当 Protocol 字段是 TCP 或 UDP 时，Port 字段才被接受，即 Protocol 字段不是 TCP 或 UDP 时，Protocol 和 Port 排他关系，不允许同时输入，否则会接口报错。</li>
<li>Action 字段只允许输入 ACCEPT 或 DROP。</li>
<li>CidrBlock, Ipv6CidrBlock, SecurityGroupId, AddressTemplate 四者是排他关系，不允许同时输入，Protocol + Port 和 ServiceTemplate 二者是排他关系，不允许同时输入。</li>
<li>一次请求中只能创建单个方向的规则, 如果需要指定索引（PolicyIndex）参数, 多条规则的索引必须一致。</li>
</ul></li></ul>
 * @method Models\CreateSecurityGroupWithPoliciesResponse CreateSecurityGroupWithPolicies(Models\CreateSecurityGroupWithPoliciesRequest $req) 本接口（CreateSecurityGroupWithPolicies）用于创建新的安全组（SecurityGroup），并且可以同时添加安全组规则（SecurityGroupPolicy）。
* 每个账户下每个地域的每个项目的<a href="https://cloud.tencent.com/document/product/213/12453">安全组数量限制</a>。
* 新建的安全组的入站和出站规则默认都是全部拒绝，在创建后通常您需要再调用CreateSecurityGroupPolicies将安全组的规则设置为需要的规则。

安全组规则说明：
* Version安全组规则版本号，用户每次更新安全规则版本会自动加1，防止您更新的路由规则已过期，不填不考虑冲突。
* Protocol字段支持输入TCP, UDP, ICMP, ICMPV6, GRE, ALL。
* CidrBlock字段允许输入符合cidr格式标准的任意字符串。(展开)在基础网络中，如果CidrBlock包含您的账户内的云服务器之外的设备在腾讯云的内网IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
* Ipv6CidrBlock字段允许输入符合IPv6 cidr格式标准的任意字符串。(展开)在基础网络中，如果Ipv6CidrBlock包含您的账户内的云服务器之外的设备在腾讯云的内网IPv6，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
* SecurityGroupId字段允许输入与待修改的安全组位于相同项目中的安全组ID，包括这个安全组ID本身，代表安全组下所有云服务器的内网IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个ID所关联的云服务器变化而变化，不需要重新修改。
* Port字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当Protocol字段是TCP或UDP时，Port字段才被接受，即Protocol字段不是TCP或UDP时，Protocol和Port排他关系，不允许同时输入，否则会接口报错。
* Action字段只允许输入ACCEPT或DROP。
* CidrBlock, Ipv6CidrBlock, SecurityGroupId, AddressTemplate四者是排他关系，不允许同时输入，Protocol + Port和ServiceTemplate二者是排他关系，不允许同时输入。
* 一次请求中只能创建单个方向的规则, 如果需要指定索引（PolicyIndex）参数, 多条规则的索引必须一致。
 * @method Models\CreateServiceTemplateResponse CreateServiceTemplate(Models\CreateServiceTemplateRequest $req) 本接口（CreateServiceTemplate）用于创建协议端口模板
 * @method Models\CreateServiceTemplateGroupResponse CreateServiceTemplateGroup(Models\CreateServiceTemplateGroupRequest $req) 本接口（CreateServiceTemplateGroup）用于创建协议端口模板集合
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) 本接口(CreateSubnet)用于创建子网。
* 创建子网前必须创建好 VPC。
* 子网创建成功后，子网网段不能修改。子网网段必须在VPC网段内，可以和VPC网段相同（VPC有且只有一个子网时），建议子网网段在VPC网段内，预留网段给其他子网使用。
* 您可以创建的最小网段子网掩码为28（有16个IP地址），最大网段子网掩码为16（65,536个IP地址）。
* 同一个VPC内，多个子网的网段不能重叠。
* 子网创建后会自动关联到默认路由表。
* 创建子网同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateSubnetsResponse CreateSubnets(Models\CreateSubnetsRequest $req) 本接口(CreateSubnets)用于批量创建子网。
* 创建子网前必须创建好 VPC。
* 子网创建成功后，子网网段不能修改。子网网段必须在VPC网段内，可以和VPC网段相同（VPC有且只有一个子网时），建议子网网段在VPC网段内，预留网段给其他子网使用。
* 您可以创建的最小网段子网掩码为28（有16个IP地址），最大网段子网掩码为16（65,536个IP地址）。
* 同一个VPC内，多个子网的网段不能重叠。
* 子网创建后会自动关联到默认路由表。
* 创建子网同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) 本接口(CreateVpc)用于创建私有网络(VPC)。
* 用户可以创建的最小网段子网掩码为28（有16个IP地址），最大网段子网掩码为16（65,536个IP地址），如果需要规划VPC网段请参见[网络规划](https://cloud.tencent.com/document/product/215/30313)。
* 同一个地域能创建的VPC资源个数也是有限制的，详见 <a href="https://cloud.tencent.com/doc/product/215/537" title="VPC使用限制">VPC使用限制</a>，如果需要申请更多资源，请提交[工单申请](https://console.cloud.tencent.com/workorder/category)。
* 创建VPC同时可以绑定标签, 应答里的标签列表代表添加成功的标签。
 * @method Models\CreateVpcEndPointResponse CreateVpcEndPoint(Models\CreateVpcEndPointRequest $req) 创建终端节点。
 * @method Models\CreateVpcEndPointServiceResponse CreateVpcEndPointService(Models\CreateVpcEndPointServiceRequest $req) 创建终端节点服务。
 * @method Models\CreateVpcEndPointServiceWhiteListResponse CreateVpcEndPointServiceWhiteList(Models\CreateVpcEndPointServiceWhiteListRequest $req) 创建终端服务白名单。
 * @method Models\CreateVpnConnectionResponse CreateVpnConnection(Models\CreateVpnConnectionRequest $req) 本接口（CreateVpnConnection）用于创建VPN通道。
 * @method Models\CreateVpnGatewayResponse CreateVpnGateway(Models\CreateVpnGatewayRequest $req) 本接口（CreateVpnGateway）用于创建VPN网关。
 * @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) 本接口（DeleteAddressTemplate）用于删除IP地址模板
 * @method Models\DeleteAddressTemplateGroupResponse DeleteAddressTemplateGroup(Models\DeleteAddressTemplateGroupRequest $req) 本接口（DeleteAddressTemplateGroup）用于删除IP地址模板集合
 * @method Models\DeleteAssistantCidrResponse DeleteAssistantCidr(Models\DeleteAssistantCidrRequest $req) 本接口(DeleteAssistantCidr)用于删除辅助CIDR。（接口灰度中，如需使用请提工单。）
 * @method Models\DeleteBandwidthPackageResponse DeleteBandwidthPackage(Models\DeleteBandwidthPackageRequest $req) 接口支持删除共享带宽包，包括[设备带宽包](https://cloud.tencent.com/document/product/684/15246#.E8.AE.BE.E5.A4.87.E5.B8.A6.E5.AE.BD.E5.8C.85)和[IP带宽包](https://cloud.tencent.com/document/product/684/15246#ip-.E5.B8.A6.E5.AE.BD.E5.8C.85)
 * @method Models\DeleteCcnResponse DeleteCcn(Models\DeleteCcnRequest $req) 本接口（DeleteCcn）用于删除云联网。
* 删除后，云联网关联的所有实例间路由将被删除，网络将会中断，请务必确认
* 删除云联网是不可逆的操作，请谨慎处理。

 * @method Models\DeleteCustomerGatewayResponse DeleteCustomerGateway(Models\DeleteCustomerGatewayRequest $req) 本接口（DeleteCustomerGateway）用于删除对端网关。
 * @method Models\DeleteDhcpIpResponse DeleteDhcpIp(Models\DeleteDhcpIpRequest $req) 本接口（DeleteDhcpIp）用于删除DhcpIp
 * @method Models\DeleteDirectConnectGatewayResponse DeleteDirectConnectGateway(Models\DeleteDirectConnectGatewayRequest $req) 本接口（DeleteDirectConnectGateway）用于删除专线网关。
<li>如果是 NAT 网关，删除专线网关后，NAT 规则以及 ACL 策略都被清理了。</li>
<li>删除专线网关后，系统会删除路由表中跟该专线网关相关的路由策略。</li>
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口
 * @method Models\DeleteDirectConnectGatewayCcnRoutesResponse DeleteDirectConnectGatewayCcnRoutes(Models\DeleteDirectConnectGatewayCcnRoutesRequest $req) 本接口（DeleteDirectConnectGatewayCcnRoutes）用于删除专线网关的云联网路由（IDC网段）
 * @method Models\DeleteFlowLogResponse DeleteFlowLog(Models\DeleteFlowLogRequest $req) 本接口（DeleteFlowLog）用于删除流日志
 * @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) 本接口（DeleteHaVip）用于删除高可用虚拟IP（HAVIP）<br />
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口
 * @method Models\DeleteIp6TranslatorsResponse DeleteIp6Translators(Models\DeleteIp6TranslatorsRequest $req) 1. 该接口用于释放IPV6转换实例，支持批量。
2.  如果IPV6转换实例建立有转换规则，会一并删除。
 * @method Models\DeleteLocalGatewayResponse DeleteLocalGateway(Models\DeleteLocalGatewayRequest $req) 该接口用于删除CDC的本地网关。
 * @method Models\DeleteNatGatewayResponse DeleteNatGateway(Models\DeleteNatGatewayRequest $req) 本接口（DeleteNatGateway）用于删除NAT网关。
删除 NAT 网关后，系统会自动删除路由表中包含此 NAT 网关的路由项，同时也会解绑弹性公网IP（EIP）。
 * @method Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleResponse DeleteNatGatewayDestinationIpPortTranslationNatRule(Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleRequest $req) 本接口（DeleteNatGatewayDestinationIpPortTranslationNatRule）用于删除NAT网关端口转发规则。
 * @method Models\DeleteNatGatewaySourceIpTranslationNatRuleResponse DeleteNatGatewaySourceIpTranslationNatRule(Models\DeleteNatGatewaySourceIpTranslationNatRuleRequest $req) 本接口（DeleteNatGatewaySourceIpTranslationNatRule）用于删除NAT网关端口SNAT转发规则。
 * @method Models\DeleteNetDetectResponse DeleteNetDetect(Models\DeleteNetDetectRequest $req) 本接口(DeleteNetDetect)用于删除网络探测实例。
 * @method Models\DeleteNetworkAclResponse DeleteNetworkAcl(Models\DeleteNetworkAclRequest $req) 本接口（DeleteNetworkAcl）用于删除网络ACL。
 * @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) 本接口（DeleteNetworkInterface）用于删除弹性网卡。
* 弹性网卡上绑定了云服务器时，不能被删除。
* 删除指定弹性网卡，弹性网卡必须先和子机解绑才能删除。删除之后弹性网卡上所有内网IP都将被退还。
 * @method Models\DeleteRouteTableResponse DeleteRouteTable(Models\DeleteRouteTableRequest $req) 删除路由表
 * @method Models\DeleteRoutesResponse DeleteRoutes(Models\DeleteRoutesRequest $req) 本接口(DeleteRoutes)用于对某个路由表批量删除路由策略（Route）。
 * @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) 本接口（DeleteSecurityGroup）用于删除安全组（SecurityGroup）。
* 只有当前账号下的安全组允许被删除。
* 安全组实例ID如果在其他安全组的规则中被引用，则无法直接删除。这种情况下，需要先进行规则修改，再删除安全组。
* 删除的安全组无法再找回，请谨慎调用。
 * @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) 本接口（DeleteSecurityGroupPolicies）用于用于删除安全组规则（SecurityGroupPolicy）。
* SecurityGroupPolicySet.Version 用于指定要操作的安全组的版本。传入 Version 版本号若不等于当前安全组的最新版本，将返回失败；若不传 Version 则直接删除指定PolicyIndex的规则。
 * @method Models\DeleteServiceTemplateResponse DeleteServiceTemplate(Models\DeleteServiceTemplateRequest $req) 本接口（DeleteServiceTemplate）用于删除协议端口模板
 * @method Models\DeleteServiceTemplateGroupResponse DeleteServiceTemplateGroup(Models\DeleteServiceTemplateGroupRequest $req) 本接口（DeleteServiceTemplateGroup）用于删除协议端口模板集合
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) 本接口（DeleteSubnet）用于用于删除子网(Subnet)。
* 删除子网前，请清理该子网下所有资源，包括云服务器、负载均衡、云数据、noSql、弹性网卡等资源。
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) 本接口（DeleteVpc）用于删除私有网络。
* 删除前请确保 VPC 内已经没有相关资源，例如云服务器、云数据库、NoSQL、VPN网关、专线网关、负载均衡、对等连接、与之互通的基础网络设备等。
* 删除私有网络是不可逆的操作，请谨慎处理。
 * @method Models\DeleteVpcEndPointResponse DeleteVpcEndPoint(Models\DeleteVpcEndPointRequest $req) 删除终端节点。
 * @method Models\DeleteVpcEndPointServiceResponse DeleteVpcEndPointService(Models\DeleteVpcEndPointServiceRequest $req) 删除终端节点服务。


 * @method Models\DeleteVpcEndPointServiceWhiteListResponse DeleteVpcEndPointServiceWhiteList(Models\DeleteVpcEndPointServiceWhiteListRequest $req) 删除终端节点服务白名单。
 * @method Models\DeleteVpnConnectionResponse DeleteVpnConnection(Models\DeleteVpnConnectionRequest $req) 本接口(DeleteVpnConnection)用于删除VPN通道。
 * @method Models\DeleteVpnGatewayResponse DeleteVpnGateway(Models\DeleteVpnGatewayRequest $req) 本接口（DeleteVpnGateway）用于删除VPN网关。目前只支持删除运行中的按量计费的IPSEC网关实例。
 * @method Models\DescribeAccountAttributesResponse DescribeAccountAttributes(Models\DescribeAccountAttributesRequest $req) 本接口（DescribeAccountAttributes）用于查询用户账号私有属性。
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) 本接口 (DescribeAddressQuota) 用于查询您账户的[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）在当前地域的配额信息。配额详情可参见 [EIP 产品简介](https://cloud.tencent.com/document/product/213/5733)。
 * @method Models\DescribeAddressTemplateGroupsResponse DescribeAddressTemplateGroups(Models\DescribeAddressTemplateGroupsRequest $req) 本接口（DescribeAddressTemplateGroups）用于查询IP地址模板集合
 * @method Models\DescribeAddressTemplatesResponse DescribeAddressTemplates(Models\DescribeAddressTemplatesRequest $req) 本接口（DescribeAddressTemplates）用于查询IP地址模板
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) 本接口 (DescribeAddresses) 用于查询一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）的详细信息。
* 如果参数为空，返回当前用户一定数量（Limit所指定的数量，默认为20）的 EIP。
 * @method Models\DescribeAssistantCidrResponse DescribeAssistantCidr(Models\DescribeAssistantCidrRequest $req) 本接口（DescribeAssistantCidr）用于查询辅助CIDR列表。（接口灰度中，如需使用请提工单。）
 * @method Models\DescribeBandwidthPackageBillUsageResponse DescribeBandwidthPackageBillUsage(Models\DescribeBandwidthPackageBillUsageRequest $req) 本接口 (DescribeBandwidthPackageBillUsage) 用于查询后付费共享带宽包当前的计费用量.
 * @method Models\DescribeBandwidthPackageQuotaResponse DescribeBandwidthPackageQuota(Models\DescribeBandwidthPackageQuotaRequest $req) 接口用于查询账户在当前地域的带宽包上限数量以及使用数量
 * @method Models\DescribeBandwidthPackageResourcesResponse DescribeBandwidthPackageResources(Models\DescribeBandwidthPackageResourcesRequest $req) 本接口 (DescribeBandwidthPackageResources) 用于根据共享带宽包唯一ID查询共享带宽包内的资源列表，支持按条件过滤查询结果和分页查询。

 * @method Models\DescribeBandwidthPackagesResponse DescribeBandwidthPackages(Models\DescribeBandwidthPackagesRequest $req) 接口用于查询带宽包详细信息，包括带宽包唯一标识ID，类型，计费模式，名称，资源信息等
 * @method Models\DescribeCcnAttachedInstancesResponse DescribeCcnAttachedInstances(Models\DescribeCcnAttachedInstancesRequest $req) 本接口（DescribeCcnAttachedInstances）用于查询云联网实例下已关联的网络实例。
 * @method Models\DescribeCcnRegionBandwidthLimitsResponse DescribeCcnRegionBandwidthLimits(Models\DescribeCcnRegionBandwidthLimitsRequest $req) 本接口（DescribeCcnRegionBandwidthLimits）用于查询云联网各地域出带宽上限，该接口只返回已关联网络实例包含的地域
 * @method Models\DescribeCcnRoutesResponse DescribeCcnRoutes(Models\DescribeCcnRoutesRequest $req) 本接口（DescribeCcnRoutes）用于查询已加入云联网（CCN）的路由
 * @method Models\DescribeCcnsResponse DescribeCcns(Models\DescribeCcnsRequest $req) 本接口（DescribeCcns）用于查询云联网（CCN）列表。
 * @method Models\DescribeClassicLinkInstancesResponse DescribeClassicLinkInstances(Models\DescribeClassicLinkInstancesRequest $req) 本接口(DescribeClassicLinkInstances)用于查询私有网络和基础网络设备互通列表。
 * @method Models\DescribeCrossBorderComplianceResponse DescribeCrossBorderCompliance(Models\DescribeCrossBorderComplianceRequest $req) 本接口（DescribeCrossBorderCompliance）用于查询用户创建的合规化资质审批单。
服务商可以查询服务名下的任意 `APPID` 创建的审批单；非服务商，只能查询自己审批单。
 * @method Models\DescribeCustomerGatewayVendorsResponse DescribeCustomerGatewayVendors(Models\DescribeCustomerGatewayVendorsRequest $req) 本接口（DescribeCustomerGatewayVendors）用于查询可支持的对端网关厂商信息。
 * @method Models\DescribeCustomerGatewaysResponse DescribeCustomerGateways(Models\DescribeCustomerGatewaysRequest $req) 本接口（DescribeCustomerGateways）用于查询对端网关列表。
 * @method Models\DescribeDhcpIpsResponse DescribeDhcpIps(Models\DescribeDhcpIpsRequest $req) 本接口（DescribeDhcpIps）用于查询DhcpIp列表
 * @method Models\DescribeDirectConnectGatewayCcnRoutesResponse DescribeDirectConnectGatewayCcnRoutes(Models\DescribeDirectConnectGatewayCcnRoutesRequest $req) 本接口（DescribeDirectConnectGatewayCcnRoutes）用于查询专线网关的云联网路由（IDC网段）
 * @method Models\DescribeDirectConnectGatewaysResponse DescribeDirectConnectGateways(Models\DescribeDirectConnectGatewaysRequest $req) 本接口（DescribeDirectConnectGateways）用于查询专线网关。
 * @method Models\DescribeFlowLogResponse DescribeFlowLog(Models\DescribeFlowLogRequest $req) 本接口（DescribeFlowLog）用于查询流日志实例信息
 * @method Models\DescribeFlowLogsResponse DescribeFlowLogs(Models\DescribeFlowLogsRequest $req) 本接口（DescribeFlowLogs）用于查询获取流日志集合
 * @method Models\DescribeGatewayFlowMonitorDetailResponse DescribeGatewayFlowMonitorDetail(Models\DescribeGatewayFlowMonitorDetailRequest $req) 本接口（DescribeGatewayFlowMonitorDetail）用于查询网关流量监控明细。
* 只支持单个网关实例查询。即入参 `VpnId`、 `DirectConnectGatewayId`、 `PeeringConnectionId`、 `NatId` 最多只支持传一个，且必须传一个。
* 如果网关有流量，但调用本接口没有返回数据，请在控制台对应网关详情页确认是否开启网关流量监控。
 * @method Models\DescribeGatewayFlowQosResponse DescribeGatewayFlowQos(Models\DescribeGatewayFlowQosRequest $req) 本接口（DescribeGatewayFlowQos）用于查询网关来访IP流控带宽。
 * @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) 本接口（DescribeHaVips）用于查询高可用虚拟IP（HAVIP）列表。
 * @method Models\DescribeIp6AddressesResponse DescribeIp6Addresses(Models\DescribeIp6AddressesRequest $req) 该接口用于查询IPV6地址信息
 * @method Models\DescribeIp6TranslatorQuotaResponse DescribeIp6TranslatorQuota(Models\DescribeIp6TranslatorQuotaRequest $req) 查询账户在指定地域IPV6转换实例和规则的配额
 * @method Models\DescribeIp6TranslatorsResponse DescribeIp6Translators(Models\DescribeIp6TranslatorsRequest $req) 1. 该接口用于查询账户下的IPV6转换实例及其绑定的转换规则信息
2. 支持过滤查询
 * @method Models\DescribeIpGeolocationDatabaseUrlResponse DescribeIpGeolocationDatabaseUrl(Models\DescribeIpGeolocationDatabaseUrlRequest $req) 本接口（DescribeIpGeolocationDatabaseUrl）用于获取IP地理位置库下载链接。
 * @method Models\DescribeIpGeolocationInfosResponse DescribeIpGeolocationInfos(Models\DescribeIpGeolocationInfosRequest $req) 该接口用于查询IP地址信息，包括地理位置信息和网络信息。
 * @method Models\DescribeLocalGatewayResponse DescribeLocalGateway(Models\DescribeLocalGatewayRequest $req) 该接口用于查询CDC的本地网关。
 * @method Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse DescribeNatGatewayDestinationIpPortTranslationNatRules(Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesRequest $req) 本接口（DescribeNatGatewayDestinationIpPortTranslationNatRules）用于查询NAT网关端口转发规则对象数组。
 * @method Models\DescribeNatGatewaySourceIpTranslationNatRulesResponse DescribeNatGatewaySourceIpTranslationNatRules(Models\DescribeNatGatewaySourceIpTranslationNatRulesRequest $req) 本接口（DescribeNatGatewaySourceIpTranslationNatRules）用于查询NAT网关SNAT转发规则对象数组。
 * @method Models\DescribeNatGatewaysResponse DescribeNatGateways(Models\DescribeNatGatewaysRequest $req) 本接口（DescribeNatGateways）用于查询 NAT 网关。
 * @method Models\DescribeNetDetectStatesResponse DescribeNetDetectStates(Models\DescribeNetDetectStatesRequest $req) 本接口(DescribeNetDetectStates)用于查询网络探测验证结果列表。
 * @method Models\DescribeNetDetectsResponse DescribeNetDetects(Models\DescribeNetDetectsRequest $req) 本接口（DescribeNetDetects）用于查询网络探测列表。
 * @method Models\DescribeNetworkAclsResponse DescribeNetworkAcls(Models\DescribeNetworkAclsRequest $req) 本接口（DescribeNetworkAcls）用于查询网络ACL列表。
 * @method Models\DescribeNetworkInterfaceLimitResponse DescribeNetworkInterfaceLimit(Models\DescribeNetworkInterfaceLimitRequest $req) 本接口（DescribeNetworkInterfaceLimit）根据CVM实例ID或弹性网卡ID查询弹性网卡配额，返回该CVM实例或弹性网卡能绑定的弹性网卡配额，以及弹性网卡可以分配的IP配额
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) 本接口（DescribeNetworkInterfaces）用于查询弹性网卡列表。
 * @method Models\DescribeProductQuotaResponse DescribeProductQuota(Models\DescribeProductQuotaRequest $req) 本接口用于查询网络产品的配额信息
 * @method Models\DescribeRouteConflictsResponse DescribeRouteConflicts(Models\DescribeRouteConflictsRequest $req) 本接口（DescribeRouteConflicts）用于查询自定义路由策略与云联网路由策略冲突列表
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req)  本接口（DescribeRouteTables）用于查询路由表。
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) 本接口（DescribeSecurityGroupAssociationStatistics）用于查询安全组关联的实例统计。
 * @method Models\DescribeSecurityGroupLimitsResponse DescribeSecurityGroupLimits(Models\DescribeSecurityGroupLimitsRequest $req) 本接口(DescribeSecurityGroupLimits)用于查询用户安全组配额。
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) 本接口（DescribeSecurityGroupPolicies）用于查询安全组规则。
 * @method Models\DescribeSecurityGroupReferencesResponse DescribeSecurityGroupReferences(Models\DescribeSecurityGroupReferencesRequest $req) 本接口（DescribeSecurityGroupReferences）用于查询安全组被引用信息。
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) 本接口（DescribeSecurityGroups）用于查询安全组。
 * @method Models\DescribeServiceTemplateGroupsResponse DescribeServiceTemplateGroups(Models\DescribeServiceTemplateGroupsRequest $req) 本接口（DescribeServiceTemplateGroups）用于查询协议端口模板集合
 * @method Models\DescribeServiceTemplatesResponse DescribeServiceTemplates(Models\DescribeServiceTemplatesRequest $req) 本接口（DescribeServiceTemplates）用于查询协议端口模板
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) 本接口（DescribeSubnets）用于查询子网列表。
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) 查询EIP异步任务执行结果
 * @method Models\DescribeTemplateLimitsResponse DescribeTemplateLimits(Models\DescribeTemplateLimitsRequest $req) 本接口（DescribeTemplateLimits）用于查询参数模板配额列表。
 * @method Models\DescribeVpcEndPointResponse DescribeVpcEndPoint(Models\DescribeVpcEndPointRequest $req) 查询终端节点列表。
 * @method Models\DescribeVpcEndPointServiceResponse DescribeVpcEndPointService(Models\DescribeVpcEndPointServiceRequest $req) 查询终端节点服务列表。
 * @method Models\DescribeVpcEndPointServiceWhiteListResponse DescribeVpcEndPointServiceWhiteList(Models\DescribeVpcEndPointServiceWhiteListRequest $req) 查询终端节点服务的服务白名单列表。
 * @method Models\DescribeVpcInstancesResponse DescribeVpcInstances(Models\DescribeVpcInstancesRequest $req)  本接口（DescribeVpcInstances）用于查询VPC下的云主机实例列表。
 * @method Models\DescribeVpcIpv6AddressesResponse DescribeVpcIpv6Addresses(Models\DescribeVpcIpv6AddressesRequest $req) 本接口（DescribeVpcIpv6Addresses）用于查询 `VPC` `IPv6` 信息。
只能查询已使用的`IPv6`信息，当查询未使用的IP时，本接口不会报错，但不会出现在返回结果里。
 * @method Models\DescribeVpcLimitsResponse DescribeVpcLimits(Models\DescribeVpcLimitsRequest $req) 获取私有网络配额，部分私有网络的配额有地域属性。
LimitTypes取值范围：
* appid-max-vpcs （每个开发商每个地域可创建的VPC数）
* vpc-max-subnets（每个VPC可创建的子网数）
* vpc-max-route-tables（每个VPC可创建的路由表数）
* route-table-max-policies（每个路由表可添加的策略数）
* vpc-max-vpn-gateways（每个VPC可创建的VPN网关数）
* appid-max-custom-gateways（每个开发商可创建的对端网关数）
* appid-max-vpn-connections（每个开发商可创建的VPN通道数）
* custom-gateway-max-vpn-connections（每个对端网关可创建的VPN通道数）
* vpn-gateway-max-custom-gateways（每个VPNGW可以创建的通道数）
* vpc-max-network-acls（每个VPC可创建的网络ACL数）
* network-acl-max-inbound-policies（每个网络ACL可添加的入站规则数）
* network-acl-max-outbound-policies（每个网络ACL可添加的出站规则数）
* vpc-max-vpcpeers（每个VPC可创建的对等连接数）
* vpc-max-available-vpcpeers（每个VPC可创建的有效对等连接数）
* vpc-max-basic-network-interconnections（每个VPC可创建的基础网络云主机与VPC互通数）
* direct-connection-max-snats（每个专线网关可创建的SNAT数）
* direct-connection-max-dnats（每个专线网关可创建的DNAT数）
* direct-connection-max-snapts（每个专线网关可创建的SNAPT数）
* direct-connection-max-dnapts（每个专线网关可创建的DNAPT数）
* vpc-max-nat-gateways（每个VPC可创建的NAT网关数）
* nat-gateway-max-eips（每个NAT可以购买的外网IP数量）
* vpc-max-enis（每个VPC可创建弹性网卡数）
* vpc-max-havips（每个VPC可创建HAVIP数）
* eni-max-private-ips（每个ENI可以绑定的内网IP数（ENI未绑定子机））
* nat-gateway-max-dnapts（每个NAT网关可创建的DNAPT数）
* vpc-max-ipv6s（每个VPC可分配的IPv6地址数）
* eni-max-ipv6s（每个ENI可分配的IPv6地址数）
* vpc-max-assistant_cidrs（每个VPC可分配的辅助CIDR数）
 * @method Models\DescribeVpcPrivateIpAddressesResponse DescribeVpcPrivateIpAddresses(Models\DescribeVpcPrivateIpAddressesRequest $req) 本接口（DescribeVpcPrivateIpAddresses）用于查询VPC内网IP信息。<br />
只能查询已使用的IP信息，当查询未使用的IP时，本接口不会报错，但不会出现在返回结果里。
 * @method Models\DescribeVpcResourceDashboardResponse DescribeVpcResourceDashboard(Models\DescribeVpcResourceDashboardRequest $req) 本接口(DescribeVpcResourceDashboard)用于查看VPC资源信息。
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) 本接口（DescribeVpcs）用于查询私有网络列表。
 * @method Models\DescribeVpnConnectionsResponse DescribeVpnConnections(Models\DescribeVpnConnectionsRequest $req)  本接口（DescribeVpnConnections）查询VPN通道列表。
 * @method Models\DescribeVpnGatewayCcnRoutesResponse DescribeVpnGatewayCcnRoutes(Models\DescribeVpnGatewayCcnRoutesRequest $req) 本接口（DescribeVpnGatewayCcnRoutes）用于查询VPN网关云联网路由
 * @method Models\DescribeVpnGatewaysResponse DescribeVpnGateways(Models\DescribeVpnGatewaysRequest $req) 本接口（DescribeVpnGateways）用于查询VPN网关列表。
 * @method Models\DetachCcnInstancesResponse DetachCcnInstances(Models\DetachCcnInstancesRequest $req) 本接口（DetachCcnInstances）用于从云联网实例中解关联指定的网络实例。<br />
解关联网络实例后，相应的路由策略会一并删除。
 * @method Models\DetachClassicLinkVpcResponse DetachClassicLinkVpc(Models\DetachClassicLinkVpcRequest $req) 本接口(DetachClassicLinkVpc)用于删除私有网络和基础网络设备互通。
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) 本接口（DetachNetworkInterface）用于弹性网卡解绑云服务器。
 * @method Models\DisableCcnRoutesResponse DisableCcnRoutes(Models\DisableCcnRoutesRequest $req) 本接口（DisableCcnRoutes）用于禁用已经启用的云联网（CCN）路由
 * @method Models\DisableGatewayFlowMonitorResponse DisableGatewayFlowMonitor(Models\DisableGatewayFlowMonitorRequest $req) 本接口（DisableGatewayFlowMonitor）用于关闭网关流量监控。
 * @method Models\DisableRoutesResponse DisableRoutes(Models\DisableRoutesRequest $req) 本接口（DisableRoutes）用于禁用已启用的子网路由
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) 本接口 (DisassociateAddress) 用于解绑[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 支持CVM实例，弹性网卡上的EIP解绑
* 不支持NAT上的EIP解绑。NAT上的EIP解绑请参考[DisassociateNatGatewayAddress](https://cloud.tencent.com/document/api/215/36716)
* 只有状态为 BIND 和 BIND_ENI 的 EIP 才能进行解绑定操作。
* EIP 如果被封堵，则不能进行解绑定操作。
 * @method Models\DisassociateDhcpIpWithAddressIpResponse DisassociateDhcpIpWithAddressIp(Models\DisassociateDhcpIpWithAddressIpRequest $req) 本接口（DisassociateDhcpIpWithAddressIp）用于将DhcpIp已绑定的弹性公网IP（EIP）解除绑定。<br />
 * @method Models\DisassociateDirectConnectGatewayNatGatewayResponse DisassociateDirectConnectGatewayNatGateway(Models\DisassociateDirectConnectGatewayNatGatewayRequest $req) 将专线网关与NAT网关解绑，解绑之后，专线网关将不能通过NAT网关访问公网
 * @method Models\DisassociateNatGatewayAddressResponse DisassociateNatGatewayAddress(Models\DisassociateNatGatewayAddressRequest $req) 本接口（DisassociateNatGatewayAddress）用于NAT网关解绑弹性IP。
 * @method Models\DisassociateNetworkAclSubnetsResponse DisassociateNetworkAclSubnets(Models\DisassociateNetworkAclSubnetsRequest $req) 本接口（DisassociateNetworkAclSubnets）用于网络ACL解关联vpc下的子网。
 * @method Models\DisassociateNetworkInterfaceSecurityGroupsResponse DisassociateNetworkInterfaceSecurityGroups(Models\DisassociateNetworkInterfaceSecurityGroupsRequest $req) 本接口（DisassociateNetworkInterfaceSecurityGroups）用于弹性网卡解绑安全组。支持弹性网卡完全解绑安全组。
 * @method Models\DisassociateVpcEndPointSecurityGroupsResponse DisassociateVpcEndPointSecurityGroups(Models\DisassociateVpcEndPointSecurityGroupsRequest $req) 终端节点解绑安全组。
 * @method Models\DownloadCustomerGatewayConfigurationResponse DownloadCustomerGatewayConfiguration(Models\DownloadCustomerGatewayConfigurationRequest $req) 本接口(DownloadCustomerGatewayConfiguration)用于下载VPN通道配置。
 * @method Models\EnableCcnRoutesResponse EnableCcnRoutes(Models\EnableCcnRoutesRequest $req) 本接口（EnableCcnRoutes）用于启用已经加入云联网（CCN）的路由。<br />
本接口会校验启用后，是否与已有路由冲突，如果冲突，则无法启用，失败处理。路由冲突时，需要先禁用与之冲突的路由，才能启用该路由。
 * @method Models\EnableGatewayFlowMonitorResponse EnableGatewayFlowMonitor(Models\EnableGatewayFlowMonitorRequest $req) 本接口（EnableGatewayFlowMonitor）用于开启网关流量监控。
 * @method Models\EnableRoutesResponse EnableRoutes(Models\EnableRoutesRequest $req) 本接口（EnableRoutes）用于启用已禁用的子网路由。<br />
本接口会校验启用后，是否与已有路由冲突，如果冲突，则无法启用，失败处理。路由冲突时，需要先禁用与之冲突的路由，才能启用该路由。
 * @method Models\EnableVpcEndPointConnectResponse EnableVpcEndPointConnect(Models\EnableVpcEndPointConnectRequest $req) 是否接受终端节点连接请求。
 * @method Models\GetCcnRegionBandwidthLimitsResponse GetCcnRegionBandwidthLimits(Models\GetCcnRegionBandwidthLimitsRequest $req) 本接口（GetCcnRegionBandwidthLimits）用于查询云联网相关地域带宽信息，其中预付费模式的云联网仅支持地域间限速，后付费模式的云联网支持地域间限速和地域出口限速。
 * @method Models\HaVipAssociateAddressIpResponse HaVipAssociateAddressIp(Models\HaVipAssociateAddressIpRequest $req) 本接口（HaVipAssociateAddressIp）用于高可用虚拟IP（HAVIP）绑定弹性公网IP（EIP）<br />
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口
 * @method Models\HaVipDisassociateAddressIpResponse HaVipDisassociateAddressIp(Models\HaVipDisassociateAddressIpRequest $req) 本接口（HaVipDisassociateAddressIp）用于将高可用虚拟IP（HAVIP）已绑定的弹性公网IP（EIP）解除绑定<br />
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口
 * @method Models\InquirePriceCreateDirectConnectGatewayResponse InquirePriceCreateDirectConnectGateway(Models\InquirePriceCreateDirectConnectGatewayRequest $req) 本接口（DescribePriceCreateDirectConnectGateway）用于创建专线网关询价。
 * @method Models\InquiryPriceCreateVpnGatewayResponse InquiryPriceCreateVpnGateway(Models\InquiryPriceCreateVpnGatewayRequest $req) 本接口（InquiryPriceCreateVpnGateway）用于创建VPN网关询价。
 * @method Models\InquiryPriceRenewVpnGatewayResponse InquiryPriceRenewVpnGateway(Models\InquiryPriceRenewVpnGatewayRequest $req) 本接口（InquiryPriceRenewVpnGateway）用于续费VPN网关询价。目前仅支持IPSEC类型网关的询价。
 * @method Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthResponse InquiryPriceResetVpnGatewayInternetMaxBandwidth(Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthRequest $req) 本接口（InquiryPriceResetVpnGatewayInternetMaxBandwidth）调整VPN网关带宽上限询价。
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) 本接口（MigrateNetworkInterface）用于弹性网卡迁移。
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req)  本接口（MigratePrivateIpAddress）用于弹性网卡内网IP迁移。

* 该接口用于将一个内网IP从一个弹性网卡上迁移到另外一个弹性网卡，主IP地址不支持迁移。
* 迁移前后的弹性网卡必须在同一个子网内。
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) 本接口 (ModifyAddressAttribute) 用于修改[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）的名称。
 * @method Models\ModifyAddressInternetChargeTypeResponse ModifyAddressInternetChargeType(Models\ModifyAddressInternetChargeTypeRequest $req) 该接口用于调整具有带宽属性弹性公网IP的网络计费模式
* 支持BANDWIDTH_PREPAID_BY_MONTH和TRAFFIC_POSTPAID_BY_HOUR两种网络计费模式之间的切换。
* 每个弹性公网IP支持调整两次，次数超出则无法调整。
 * @method Models\ModifyAddressTemplateAttributeResponse ModifyAddressTemplateAttribute(Models\ModifyAddressTemplateAttributeRequest $req) 本接口（ModifyAddressTemplateAttribute）用于修改IP地址模板
 * @method Models\ModifyAddressTemplateGroupAttributeResponse ModifyAddressTemplateGroupAttribute(Models\ModifyAddressTemplateGroupAttributeRequest $req) 本接口（ModifyAddressTemplateGroupAttribute）用于修改IP地址模板集合
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) 本接口（ModifyAddressesBandwidth）用于调整[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)(简称EIP)带宽，支持后付费EIP, 预付费EIP和带宽包EIP
 * @method Models\ModifyAssistantCidrResponse ModifyAssistantCidr(Models\ModifyAssistantCidrRequest $req) 本接口(ModifyAssistantCidr)用于批量修改辅助CIDR，支持新增和删除。（接口灰度中，如需使用请提工单。）
 * @method Models\ModifyBandwidthPackageAttributeResponse ModifyBandwidthPackageAttribute(Models\ModifyBandwidthPackageAttributeRequest $req) 接口用于修改带宽包属性，包括带宽包名字等
 * @method Models\ModifyCcnAttachedInstancesAttributeResponse ModifyCcnAttachedInstancesAttribute(Models\ModifyCcnAttachedInstancesAttributeRequest $req) 修改CCN关联实例属性，目前仅修改备注description
 * @method Models\ModifyCcnAttributeResponse ModifyCcnAttribute(Models\ModifyCcnAttributeRequest $req) 本接口（ModifyCcnAttribute）用于修改云联网（CCN）的相关属性。
 * @method Models\ModifyCcnRegionBandwidthLimitsTypeResponse ModifyCcnRegionBandwidthLimitsType(Models\ModifyCcnRegionBandwidthLimitsTypeRequest $req) 本接口（ModifyCcnRegionBandwidthLimitsType）用于修改后付费云联网实例修改带宽限速策略。
 * @method Models\ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttribute(Models\ModifyCustomerGatewayAttributeRequest $req) 本接口（ModifyCustomerGatewayAttribute）用于修改对端网关信息。
 * @method Models\ModifyDhcpIpAttributeResponse ModifyDhcpIpAttribute(Models\ModifyDhcpIpAttributeRequest $req) 本接口（ModifyDhcpIpAttribute）用于修改DhcpIp属性
 * @method Models\ModifyDirectConnectGatewayAttributeResponse ModifyDirectConnectGatewayAttribute(Models\ModifyDirectConnectGatewayAttributeRequest $req) 本接口（ModifyDirectConnectGatewayAttribute）用于修改专线网关属性

 * @method Models\ModifyFlowLogAttributeResponse ModifyFlowLogAttribute(Models\ModifyFlowLogAttributeRequest $req) 本接口（ModifyFlowLogAttribute）用于修改流日志属性
 * @method Models\ModifyGatewayFlowQosResponse ModifyGatewayFlowQos(Models\ModifyGatewayFlowQosRequest $req) 本接口（ModifyGatewayFlowQos）用于调整网关流控带宽。
 * @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) 本接口（ModifyHaVipAttribute）用于修改高可用虚拟IP（HAVIP）属性
 * @method Models\ModifyIp6AddressesBandwidthResponse ModifyIp6AddressesBandwidth(Models\ModifyIp6AddressesBandwidthRequest $req) 该接口用于修改IPV6地址访问internet的带宽
 * @method Models\ModifyIp6RuleResponse ModifyIp6Rule(Models\ModifyIp6RuleRequest $req) 该接口用于修改IPV6转换规则，当前仅支持修改转换规则名称，IPV4地址和IPV4端口号
 * @method Models\ModifyIp6TranslatorResponse ModifyIp6Translator(Models\ModifyIp6TranslatorRequest $req) 该接口用于修改IP6转换实例属性，当前仅支持修改实例名称。
 * @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) 本接口（ModifyIpv6AddressesAttribute）用于修改弹性网卡内网IPv6地址属性。
 * @method Models\ModifyLocalGatewayResponse ModifyLocalGateway(Models\ModifyLocalGatewayRequest $req) 该接口用于修改CDC的本地网关。
 * @method Models\ModifyNatGatewayAttributeResponse ModifyNatGatewayAttribute(Models\ModifyNatGatewayAttributeRequest $req) 本接口（ModifyNatGatewayAttribute）用于修改NAT网关的属性。
 * @method Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleResponse ModifyNatGatewayDestinationIpPortTranslationNatRule(Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleRequest $req) 本接口（ModifyNatGatewayDestinationIpPortTranslationNatRule）用于修改NAT网关端口转发规则。
 * @method Models\ModifyNatGatewaySourceIpTranslationNatRuleResponse ModifyNatGatewaySourceIpTranslationNatRule(Models\ModifyNatGatewaySourceIpTranslationNatRuleRequest $req) 本接口（ModifyNatGatewaySourceIpTranslationNatRule）用于修改NAT网关SNAT转发规则。
 * @method Models\ModifyNetDetectResponse ModifyNetDetect(Models\ModifyNetDetectRequest $req) 本接口(ModifyNetDetect)用于修改网络探测参数。
 * @method Models\ModifyNetworkAclAttributeResponse ModifyNetworkAclAttribute(Models\ModifyNetworkAclAttributeRequest $req) 本接口（ModifyNetworkAclAttribute）用于修改网络ACL属性。
 * @method Models\ModifyNetworkAclEntriesResponse ModifyNetworkAclEntries(Models\ModifyNetworkAclEntriesRequest $req) 本接口（ModifyNetworkAclEntries）用于修改（包括添加和删除）网络ACL的入站规则和出站规则。在NetworkAclEntrySet参数中：
* 若同时传入入站规则和出站规则，则重置原有的入站规则和出站规则，并分别导入传入的规则。
* 若仅传入入站规则，则仅重置原有的入站规则，并导入传入的规则，不影响原有的出站规则（若仅传入出站规则，处理方式类似入站方向）。
 * @method Models\ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(Models\ModifyNetworkInterfaceAttributeRequest $req) 本接口（ModifyNetworkInterfaceAttribute）用于修改弹性网卡属性。
 * @method Models\ModifyNetworkInterfaceQosResponse ModifyNetworkInterfaceQos(Models\ModifyNetworkInterfaceQosRequest $req) 修改弹性网卡服务质量
 * @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) 本接口（ModifyPrivateIpAddressesAttribute）用于修改弹性网卡内网IP属性。
 * @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) 本接口（ModifyRouteTableAttribute）用于修改路由表（RouteTable）属性。
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) 本接口（ModifySecurityGroupAttribute）用于修改安全组（SecurityGroupPolicy）属性。
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) 本接口（ModifySecurityGroupPolicies）用于重置安全组出站和入站规则（SecurityGroupPolicy）。

<ul>
<li>接口是先删除当前所有的出入站规则，然后再添加 Egress 和 Ingress 规则，不支持自定义索引 PolicyIndex。</li>
<li>在 SecurityGroupPolicySet 参数中：<ul>
	<li> 如果指定 SecurityGroupPolicySet.Version 为0, 表示清空所有规则，并忽略 Egress 和 Ingress。</li>
	<li> 如果指定 SecurityGroupPolicySet.Version 不为0, 在添加出站和入站规则（Egress 和 Ingress）时：<ul>
		<li>Protocol 字段支持输入 TCP, UDP, ICMP, ICMPV6, GRE, ALL。</li>
		<li>CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。(展开)在基础网络中，如果 CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。</li>
		<li>Ipv6CidrBlock 字段允许输入符合 IPv6 cidr 格式标准的任意字符串。(展开)在基础网络中，如果Ipv6CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IPv6，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。</li>
		<li>SecurityGroupId 字段允许输入与待修改的安全组位于相同项目中的安全组 ID，包括这个安全组 ID 本身，代表安全组下所有云服务器的内网 IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个ID所关联的云服务器变化而变化，不需要重新修改。</li>
		<li>Port 字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当 Protocol 字段是 TCP 或 UDP 时，Port 字段才被接受。</li>
		<li>Action 字段只允许输入 ACCEPT 或 DROP。</li>
		<li>CidrBlock, Ipv6CidrBlock, SecurityGroupId, AddressTemplate 四者是排他关系，不允许同时输入，Protocol + Port 和 ServiceTemplate 二者是排他关系，不允许同时输入。</li>
</ul></li></ul></li>
</ul>
 * @method Models\ModifyServiceTemplateAttributeResponse ModifyServiceTemplateAttribute(Models\ModifyServiceTemplateAttributeRequest $req) 本接口（ModifyServiceTemplateAttribute）用于修改协议端口模板
 * @method Models\ModifyServiceTemplateGroupAttributeResponse ModifyServiceTemplateGroupAttribute(Models\ModifyServiceTemplateGroupAttributeRequest $req) 本接口（ModifyServiceTemplateGroupAttribute）用于修改协议端口模板集合。
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) 本接口（ModifySubnetAttribute）用于修改子网属性。
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) 本接口（ModifyVpcAttribute）用于修改私有网络（VPC）的相关属性。
 * @method Models\ModifyVpcEndPointAttributeResponse ModifyVpcEndPointAttribute(Models\ModifyVpcEndPointAttributeRequest $req) 修改终端节点属性。
 * @method Models\ModifyVpcEndPointServiceAttributeResponse ModifyVpcEndPointServiceAttribute(Models\ModifyVpcEndPointServiceAttributeRequest $req) 修改终端节点服务属性。


 * @method Models\ModifyVpcEndPointServiceWhiteListResponse ModifyVpcEndPointServiceWhiteList(Models\ModifyVpcEndPointServiceWhiteListRequest $req) 修改终端节点服务白名单属性。
 * @method Models\ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(Models\ModifyVpnConnectionAttributeRequest $req) 本接口（ModifyVpnConnectionAttribute）用于修改VPN通道。
 * @method Models\ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(Models\ModifyVpnGatewayAttributeRequest $req) 本接口（ModifyVpnGatewayAttribute）用于修改VPN网关属性。
 * @method Models\ModifyVpnGatewayCcnRoutesResponse ModifyVpnGatewayCcnRoutes(Models\ModifyVpnGatewayCcnRoutesRequest $req) 本接口（ModifyVpnGatewayCcnRoutes）用于修改VPN网关云联网路由
 * @method Models\NotifyRoutesResponse NotifyRoutes(Models\NotifyRoutesRequest $req) 路由表列表页操作增加“发布到云联网”，用于发布路由到云联网。
 * @method Models\RejectAttachCcnInstancesResponse RejectAttachCcnInstances(Models\RejectAttachCcnInstancesRequest $req) 本接口（RejectAttachCcnInstances）用于跨账号关联实例时，云联网所有者拒绝关联操作。

 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) 本接口 (ReleaseAddresses) 用于释放一个或多个[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 该操作不可逆，释放后 EIP 关联的 IP 地址将不再属于您的名下。
* 只有状态为 UNBIND 的 EIP 才能进行释放操作。
 * @method Models\ReleaseIp6AddressesBandwidthResponse ReleaseIp6AddressesBandwidth(Models\ReleaseIp6AddressesBandwidthRequest $req) 该接口用于给弹性公网IPv6地址释放带宽。
 * @method Models\RemoveBandwidthPackageResourcesResponse RemoveBandwidthPackageResources(Models\RemoveBandwidthPackageResourcesRequest $req) 接口用于删除带宽包资源，包括[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)和[负载均衡](https://cloud.tencent.com/document/product/214/517)等
 * @method Models\RemoveIp6RulesResponse RemoveIp6Rules(Models\RemoveIp6RulesRequest $req) 1. 该接口用于删除IPV6转换规则
2. 支持批量删除同一个转换实例下的多个转换规则
 * @method Models\RenewAddressesResponse RenewAddresses(Models\RenewAddressesRequest $req) 该接口用于续费包月带宽计费模式的弹性公网IP
 * @method Models\RenewVpnGatewayResponse RenewVpnGateway(Models\RenewVpnGatewayRequest $req) 本接口（RenewVpnGateway）用于预付费（包年包月）VPN网关续费。目前只支持IPSEC网关。
 * @method Models\ReplaceDirectConnectGatewayCcnRoutesResponse ReplaceDirectConnectGatewayCcnRoutes(Models\ReplaceDirectConnectGatewayCcnRoutesRequest $req) 本接口（ReplaceDirectConnectGatewayCcnRoutes）根据路由ID（RouteId）修改指定的路由（Route），支持批量修改。
 * @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) 本接口（ReplaceRouteTableAssociation)用于修改子网（Subnet）关联的路由表（RouteTable）。
* 一个子网只能关联一个路由表。
 * @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) 本接口（ReplaceRoutes）根据路由策略ID（RouteId）修改指定的路由策略（Route），支持批量修改。
 * @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) 本接口（ReplaceSecurityGroupPolicy）用于替换单条安全组规则（SecurityGroupPolicy）。
单个请求中只能替换单个方向的一条规则, 必须要指定索引（PolicyIndex）。
 * @method Models\ResetAttachCcnInstancesResponse ResetAttachCcnInstances(Models\ResetAttachCcnInstancesRequest $req) 本接口（ResetAttachCcnInstances）用于跨账号关联实例申请过期时，重新申请关联操作。
 * @method Models\ResetNatGatewayConnectionResponse ResetNatGatewayConnection(Models\ResetNatGatewayConnectionRequest $req) 本接口（ResetNatGatewayConnection）用来NAT网关并发连接上限。
 * @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) 本接口（ResetRoutes）用于对某个路由表名称和所有路由策略（Route）进行重新设置。<br />
注意: 调用本接口是先删除当前路由表中所有路由策略, 再保存新提交的路由策略内容, 会引起网络中断。
 * @method Models\ResetVpnConnectionResponse ResetVpnConnection(Models\ResetVpnConnectionRequest $req) 本接口(ResetVpnConnection)用于重置VPN通道。
 * @method Models\ResetVpnGatewayInternetMaxBandwidthResponse ResetVpnGatewayInternetMaxBandwidth(Models\ResetVpnGatewayInternetMaxBandwidthRequest $req) 本接口（ResetVpnGatewayInternetMaxBandwidth）调整VPN网关带宽上限。目前支持升级配置，如果是包年包月VPN网关需要在有效期内。
 * @method Models\SetCcnRegionBandwidthLimitsResponse SetCcnRegionBandwidthLimits(Models\SetCcnRegionBandwidthLimitsRequest $req) 本接口（SetCcnRegionBandwidthLimits）用于设置云联网（CCN）各地域出带宽上限，或者地域间带宽上限。
 * @method Models\TransformAddressResponse TransformAddress(Models\TransformAddressRequest $req) 本接口 (TransformAddress) 用于将实例的普通公网 IP 转换为[弹性公网IP](https://cloud.tencent.com/document/product/213/1941)（简称 EIP）。
* 平台对用户每地域每日解绑 EIP 重新分配普通公网 IP 次数有所限制（可参见 [EIP 产品简介](/document/product/213/1941)）。上述配额可通过 [DescribeAddressQuota](https://cloud.tencent.com/document/api/213/1378) 接口获取。
 * @method Models\UnassignIpv6AddressesResponse UnassignIpv6Addresses(Models\UnassignIpv6AddressesRequest $req) 本接口（UnassignIpv6Addresses）用于释放弹性网卡`IPv6`地址。<br />
本接口是异步完成，如需查询异步任务执行结果，请使用本接口返回的`RequestId`轮询`QueryTask`接口。
 * @method Models\UnassignIpv6CidrBlockResponse UnassignIpv6CidrBlock(Models\UnassignIpv6CidrBlockRequest $req) 本接口（UnassignIpv6CidrBlock）用于释放IPv6网段。<br />
网段如果还有IP占用且未回收，则网段无法释放。
 * @method Models\UnassignIpv6SubnetCidrBlockResponse UnassignIpv6SubnetCidrBlock(Models\UnassignIpv6SubnetCidrBlockRequest $req) 本接口（UnassignIpv6SubnetCidrBlock）用于释放IPv6子网段。<br />
子网段如果还有IP占用且未回收，则子网段无法释放。
 * @method Models\UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(Models\UnassignPrivateIpAddressesRequest $req) 本接口（UnassignPrivateIpAddresses）用于弹性网卡退还内网 IP。
* 退还弹性网卡上的辅助内网IP，接口自动解关联弹性公网 IP。不能退还弹性网卡的主内网IP。
 * @method Models\WithdrawNotifyRoutesResponse WithdrawNotifyRoutes(Models\WithdrawNotifyRoutesRequest $req) 路由表列表页操作增加“从云联网撤销”，用于撤销已发布到云联网的路由。
 */

class VpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vpc";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("vpc")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

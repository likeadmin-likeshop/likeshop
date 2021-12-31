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

namespace TencentCloud\Tke\V20180525;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tke\V20180525\Models as Models;

/**
 * @method Models\AcquireClusterAdminRoleResponse AcquireClusterAdminRole(Models\AcquireClusterAdminRoleRequest $req) 通过此接口，可以获取集群的tke:admin的ClusterRole，即管理员角色，可以用于CAM侧高权限的用户，通过CAM策略给予子账户此接口权限，进而可以通过此接口直接获取到kubernetes集群内的管理员角色。
 * @method Models\AddExistedInstancesResponse AddExistedInstances(Models\AddExistedInstancesRequest $req) 添加已经存在的实例到集群
 * @method Models\AddNodeToNodePoolResponse AddNodeToNodePool(Models\AddNodeToNodePoolRequest $req) 将集群内节点移入节点池
 * @method Models\AddVpcCniSubnetsResponse AddVpcCniSubnets(Models\AddVpcCniSubnetsRequest $req) 针对VPC-CNI模式的集群，增加集群容器网络可使用的子网
 * @method Models\CheckInstancesUpgradeAbleResponse CheckInstancesUpgradeAble(Models\CheckInstancesUpgradeAbleRequest $req) 检查给定节点列表中哪些是可升级的 
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建集群
 * @method Models\CreateClusterAsGroupResponse CreateClusterAsGroup(Models\CreateClusterAsGroupRequest $req) 为已经存在的集群创建伸缩组
 * @method Models\CreateClusterEndpointResponse CreateClusterEndpoint(Models\CreateClusterEndpointRequest $req) 创建集群访问端口(独立集群开启内网/外网访问，托管集群支持开启内网访问)
 * @method Models\CreateClusterEndpointVipResponse CreateClusterEndpointVip(Models\CreateClusterEndpointVipRequest $req) 创建托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
 * @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) 扩展(新建)集群节点
 * @method Models\CreateClusterNodePoolResponse CreateClusterNodePool(Models\CreateClusterNodePoolRequest $req) 创建节点池
 * @method Models\CreateClusterNodePoolFromExistingAsgResponse CreateClusterNodePoolFromExistingAsg(Models\CreateClusterNodePoolFromExistingAsgRequest $req) 从伸缩组创建节点池
 * @method Models\CreateClusterRouteResponse CreateClusterRoute(Models\CreateClusterRouteRequest $req) 创建集群路由
 * @method Models\CreateClusterRouteTableResponse CreateClusterRouteTable(Models\CreateClusterRouteTableRequest $req) 创建集群路由表
 * @method Models\CreateEKSClusterResponse CreateEKSCluster(Models\CreateEKSClusterRequest $req) 创建弹性集群
 * @method Models\CreatePrometheusDashboardResponse CreatePrometheusDashboard(Models\CreatePrometheusDashboardRequest $req) 创建grafana监控面板
 * @method Models\CreatePrometheusTemplateResponse CreatePrometheusTemplate(Models\CreatePrometheusTemplateRequest $req) 创建一个云原生Prometheus模板实例
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群(YUNAPI V3版本)
 * @method Models\DeleteClusterAsGroupsResponse DeleteClusterAsGroups(Models\DeleteClusterAsGroupsRequest $req) 删除集群伸缩组
 * @method Models\DeleteClusterEndpointResponse DeleteClusterEndpoint(Models\DeleteClusterEndpointRequest $req) 删除集群访问端口(独立集群开启内网/外网访问，托管集群支持开启内网访问)
 * @method Models\DeleteClusterEndpointVipResponse DeleteClusterEndpointVip(Models\DeleteClusterEndpointVipRequest $req) 删除托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
 * @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) 删除集群中的实例
 * @method Models\DeleteClusterNodePoolResponse DeleteClusterNodePool(Models\DeleteClusterNodePoolRequest $req) 删除节点池
 * @method Models\DeleteClusterRouteResponse DeleteClusterRoute(Models\DeleteClusterRouteRequest $req) 删除集群路由
 * @method Models\DeleteClusterRouteTableResponse DeleteClusterRouteTable(Models\DeleteClusterRouteTableRequest $req) 删除集群路由表
 * @method Models\DeleteEKSClusterResponse DeleteEKSCluster(Models\DeleteEKSClusterRequest $req) 删除弹性集群(yunapiv3)
 * @method Models\DeletePrometheusTemplateResponse DeletePrometheusTemplate(Models\DeletePrometheusTemplateRequest $req) 删除一个云原生Prometheus配置模板
 * @method Models\DeletePrometheusTemplateSyncResponse DeletePrometheusTemplateSync(Models\DeletePrometheusTemplateSyncRequest $req) 取消模板同步，这将会删除目标中该模板所生产的配置
 * @method Models\DescribeAvailableClusterVersionResponse DescribeAvailableClusterVersion(Models\DescribeAvailableClusterVersionRequest $req) 获取集群可以升级的所有版本
 * @method Models\DescribeClusterAsGroupOptionResponse DescribeClusterAsGroupOption(Models\DescribeClusterAsGroupOptionRequest $req) 集群弹性伸缩配置
 * @method Models\DescribeClusterAsGroupsResponse DescribeClusterAsGroups(Models\DescribeClusterAsGroupsRequest $req) 集群关联的伸缩组列表
 * @method Models\DescribeClusterCommonNamesResponse DescribeClusterCommonNames(Models\DescribeClusterCommonNamesRequest $req) 获取指定子账户在RBAC授权模式中对应kube-apiserver客户端证书的CommonName字段，如果没有客户端证书，将会签发一个，此接口有最大传入子账户数量上限，当前为50
 * @method Models\DescribeClusterEndpointStatusResponse DescribeClusterEndpointStatus(Models\DescribeClusterEndpointStatusRequest $req) 查询集群访问端口状态(独立集群开启内网/外网访问，托管集群支持开启内网访问)
 * @method Models\DescribeClusterEndpointVipStatusResponse DescribeClusterEndpointVipStatus(Models\DescribeClusterEndpointVipStatusRequest $req) 查询集群开启端口流程状态(仅支持托管集群外网端口)
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req)  查询集群下节点实例信息 
 * @method Models\DescribeClusterKubeconfigResponse DescribeClusterKubeconfig(Models\DescribeClusterKubeconfigRequest $req) 获取集群的kubeconfig文件，不同子账户获取自己的kubeconfig文件，该文件中有每个子账户自己的kube-apiserver的客户端证书，默认首次调此接口时候创建客户端证书，时效20年，未授予任何权限，如果是集群所有者或者主账户，则默认是cluster-admin权限。
 * @method Models\DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetail(Models\DescribeClusterNodePoolDetailRequest $req) 查询节点池详情
 * @method Models\DescribeClusterNodePoolsResponse DescribeClusterNodePools(Models\DescribeClusterNodePoolsRequest $req) 查询节点池列表
 * @method Models\DescribeClusterRouteTablesResponse DescribeClusterRouteTables(Models\DescribeClusterRouteTablesRequest $req) 查询集群路由表
 * @method Models\DescribeClusterRoutesResponse DescribeClusterRoutes(Models\DescribeClusterRoutesRequest $req) 查询集群路由
 * @method Models\DescribeClusterSecurityResponse DescribeClusterSecurity(Models\DescribeClusterSecurityRequest $req) 集群的密钥信息
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群列表
 * @method Models\DescribeEKSClusterCredentialResponse DescribeEKSClusterCredential(Models\DescribeEKSClusterCredentialRequest $req) 获取弹性容器集群的接入认证信息
 * @method Models\DescribeEKSClustersResponse DescribeEKSClusters(Models\DescribeEKSClustersRequest $req) 查询弹性集群列表
 * @method Models\DescribeEnableVpcCniProgressResponse DescribeEnableVpcCniProgress(Models\DescribeEnableVpcCniProgressRequest $req) 本接口用于查询开启vpc-cni模式的任务进度
 * @method Models\DescribeExistedInstancesResponse DescribeExistedInstances(Models\DescribeExistedInstancesRequest $req) 查询已经存在的节点，判断是否可以加入集群
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) 获取镜像信息
 * @method Models\DescribePrometheusAgentInstancesResponse DescribePrometheusAgentInstances(Models\DescribePrometheusAgentInstancesRequest $req) 获取关联目标集群的实例列表
 * @method Models\DescribePrometheusAgentsResponse DescribePrometheusAgents(Models\DescribePrometheusAgentsRequest $req) 获取被关联集群列表
 * @method Models\DescribePrometheusAlertHistoryResponse DescribePrometheusAlertHistory(Models\DescribePrometheusAlertHistoryRequest $req) 获取告警历史
 * @method Models\DescribePrometheusAlertRuleResponse DescribePrometheusAlertRule(Models\DescribePrometheusAlertRuleRequest $req) 获取告警规则列表
 * @method Models\DescribePrometheusOverviewsResponse DescribePrometheusOverviews(Models\DescribePrometheusOverviewsRequest $req) 获取实例列表
 * @method Models\DescribePrometheusTargetsResponse DescribePrometheusTargets(Models\DescribePrometheusTargetsRequest $req) 获取targets信息
 * @method Models\DescribePrometheusTemplateSyncResponse DescribePrometheusTemplateSync(Models\DescribePrometheusTemplateSyncRequest $req) 获取模板同步信息
 * @method Models\DescribePrometheusTemplatesResponse DescribePrometheusTemplates(Models\DescribePrometheusTemplatesRequest $req) 拉取模板列表，默认模板将总是在最前面
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 获取容器服务支持的所有地域
 * @method Models\DescribeRouteTableConflictsResponse DescribeRouteTableConflicts(Models\DescribeRouteTableConflictsRequest $req) 查询路由表冲突列表
 * @method Models\EnableVpcCniNetworkTypeResponse EnableVpcCniNetworkType(Models\EnableVpcCniNetworkTypeRequest $req) GR集群可以通过本接口附加vpc-cni容器网络插件，开启vpc-cni容器网络能力
 * @method Models\GetUpgradeInstanceProgressResponse GetUpgradeInstanceProgress(Models\GetUpgradeInstanceProgressRequest $req) 获得节点升级当前的进度 
 * @method Models\ModifyClusterAsGroupAttributeResponse ModifyClusterAsGroupAttribute(Models\ModifyClusterAsGroupAttributeRequest $req) 修改集群伸缩组属性
 * @method Models\ModifyClusterAsGroupOptionAttributeResponse ModifyClusterAsGroupOptionAttribute(Models\ModifyClusterAsGroupOptionAttributeRequest $req) 修改集群弹性伸缩属性
 * @method Models\ModifyClusterAttributeResponse ModifyClusterAttribute(Models\ModifyClusterAttributeRequest $req) 修改集群属性
 * @method Models\ModifyClusterEndpointSPResponse ModifyClusterEndpointSP(Models\ModifyClusterEndpointSPRequest $req) 修改托管集群外网端口的安全策略（老的方式，仅支持托管集群外网端口）
 * @method Models\ModifyClusterNodePoolResponse ModifyClusterNodePool(Models\ModifyClusterNodePoolRequest $req) 编辑节点池
 * @method Models\ModifyNodePoolDesiredCapacityAboutAsgResponse ModifyNodePoolDesiredCapacityAboutAsg(Models\ModifyNodePoolDesiredCapacityAboutAsgRequest $req) 修改节点池关联伸缩组的期望实例数
 * @method Models\ModifyPrometheusTemplateResponse ModifyPrometheusTemplate(Models\ModifyPrometheusTemplateRequest $req) 修改模板内容
 * @method Models\RemoveNodeFromNodePoolResponse RemoveNodeFromNodePool(Models\RemoveNodeFromNodePoolRequest $req) 移出节点池节点，但保留在集群内
 * @method Models\SetNodePoolNodeProtectionResponse SetNodePoolNodeProtection(Models\SetNodePoolNodeProtectionRequest $req) 仅能设置节点池中处于伸缩组的节点
 * @method Models\SyncPrometheusTemplateResponse SyncPrometheusTemplate(Models\SyncPrometheusTemplateRequest $req) 同步模板到实例或者集群
 * @method Models\UpdateClusterVersionResponse UpdateClusterVersion(Models\UpdateClusterVersionRequest $req) 升级集群 Master 组件到指定版本
 * @method Models\UpdateEKSClusterResponse UpdateEKSCluster(Models\UpdateEKSClusterRequest $req) 修改弹性集群名称等属性 
 * @method Models\UpgradeClusterInstancesResponse UpgradeClusterInstances(Models\UpgradeClusterInstancesRequest $req) 给集群的一批work节点进行升级 
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tke";

    /**
     * @var string
     */
    protected $version = "2018-05-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20180525\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

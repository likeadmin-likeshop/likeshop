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

namespace TencentCloud\Tsf\V20180326;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tsf\V20180326\Models as Models;

/**
 * @method Models\AddClusterInstancesResponse AddClusterInstances(Models\AddClusterInstancesRequest $req) 添加云主机节点至TSF集群
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) 添加云主机节点至TSF集群
 * @method Models\BindApiGroupResponse BindApiGroup(Models\BindApiGroupRequest $req) 网关与API分组批量绑定
 * @method Models\BindPluginResponse BindPlugin(Models\BindPluginRequest $req) 插件与网关分组/API批量绑定
 * @method Models\ChangeApiUsableStatusResponse ChangeApiUsableStatus(Models\ChangeApiUsableStatusRequest $req) 启用或禁用API
 * @method Models\ContinueRunFailedTaskBatchResponse ContinueRunFailedTaskBatch(Models\ContinueRunFailedTaskBatchRequest $req) 对执行失败的任务批次执行续跑
 * @method Models\CreateAllGatewayApiAsyncResponse CreateAllGatewayApiAsync(Models\CreateAllGatewayApiAsyncRequest $req) 一键导入API分组
 * @method Models\CreateApiGroupResponse CreateApiGroup(Models\CreateApiGroupRequest $req) 创建API分组
 * @method Models\CreateApiRateLimitRuleResponse CreateApiRateLimitRule(Models\CreateApiRateLimitRuleRequest $req) 创建API限流规则
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) 创建应用
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建集群
 * @method Models\CreateConfigResponse CreateConfig(Models\CreateConfigRequest $req) 创建配置项
 * @method Models\CreateContainGroupResponse CreateContainGroup(Models\CreateContainGroupRequest $req) 创建容器部署组
 * @method Models\CreateGatewayApiResponse CreateGatewayApi(Models\CreateGatewayApiRequest $req) 批量导入API至api分组(也支持新建API到分组)
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) 创建虚拟机部署组
 * @method Models\CreateLaneResponse CreateLane(Models\CreateLaneRequest $req) 创建泳道
 * @method Models\CreateLaneRuleResponse CreateLaneRule(Models\CreateLaneRuleRequest $req) 创建泳道规则
 * @method Models\CreateMicroserviceResponse CreateMicroservice(Models\CreateMicroserviceRequest $req) 新增微服务
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) 创建命名空间
 * @method Models\CreatePathRewritesResponse CreatePathRewrites(Models\CreatePathRewritesRequest $req) 创建路径重写
 * @method Models\CreatePublicConfigResponse CreatePublicConfig(Models\CreatePublicConfigRequest $req) 创建公共配置项
 * @method Models\CreateRepositoryResponse CreateRepository(Models\CreateRepositoryRequest $req) 创建仓库
 * @method Models\CreateServerlessGroupResponse CreateServerlessGroup(Models\CreateServerlessGroupRequest $req) 创建Serverless部署组
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 创建任务
 * @method Models\CreateTaskFlowResponse CreateTaskFlow(Models\CreateTaskFlowRequest $req) 创建工作流
 * @method Models\CreateUnitRuleResponse CreateUnitRule(Models\CreateUnitRuleRequest $req) 创建单元化规则
 * @method Models\DeleteApiGroupResponse DeleteApiGroup(Models\DeleteApiGroupRequest $req) 删除Api分组
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) 删除应用
 * @method Models\DeleteConfigResponse DeleteConfig(Models\DeleteConfigRequest $req) 删除配置项
 * @method Models\DeleteContainerGroupResponse DeleteContainerGroup(Models\DeleteContainerGroupRequest $req) 删除容器部署组
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 删除容器部署组
 * @method Models\DeleteImageTagsResponse DeleteImageTags(Models\DeleteImageTagsRequest $req) 批量删除镜像版本
 * @method Models\DeleteLaneResponse DeleteLane(Models\DeleteLaneRequest $req) 删除泳道
 * @method Models\DeleteMicroserviceResponse DeleteMicroservice(Models\DeleteMicroserviceRequest $req) 删除微服务
 * @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) 删除命名空间
 * @method Models\DeletePathRewritesResponse DeletePathRewrites(Models\DeletePathRewritesRequest $req) 删除路径重写
 * @method Models\DeletePkgsResponse DeletePkgs(Models\DeletePkgsRequest $req) 从软件仓库批量删除程序包。
一次最多支持删除1000个包，数量超过1000，返回UpperDeleteLimit错误。
 * @method Models\DeletePublicConfigResponse DeletePublicConfig(Models\DeletePublicConfigRequest $req) 删除公共配置项
 * @method Models\DeleteRepositoryResponse DeleteRepository(Models\DeleteRepositoryRequest $req) 删除仓库
 * @method Models\DeleteServerlessGroupResponse DeleteServerlessGroup(Models\DeleteServerlessGroupRequest $req) 删除Serverless部署组
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) 删除任务
 * @method Models\DeleteUnitNamespacesResponse DeleteUnitNamespaces(Models\DeleteUnitNamespacesRequest $req) 删除单元化命名空间
 * @method Models\DeleteUnitRuleResponse DeleteUnitRule(Models\DeleteUnitRuleRequest $req) 删除单元化规则
 * @method Models\DeployContainerGroupResponse DeployContainerGroup(Models\DeployContainerGroupRequest $req) 部署容器应用
 * @method Models\DeployGroupResponse DeployGroup(Models\DeployGroupRequest $req) 部署虚拟机部署组应用
 * @method Models\DeployServerlessGroupResponse DeployServerlessGroup(Models\DeployServerlessGroupRequest $req) 部署Serverless应用
 * @method Models\DescribeApiDetailResponse DescribeApiDetail(Models\DescribeApiDetailRequest $req) 查询API详情
 * @method Models\DescribeApiGroupResponse DescribeApiGroup(Models\DescribeApiGroupRequest $req) 查询API分组
 * @method Models\DescribeApiGroupsResponse DescribeApiGroups(Models\DescribeApiGroupsRequest $req) 查询API 分组信息列表
 * @method Models\DescribeApiRateLimitRulesResponse DescribeApiRateLimitRules(Models\DescribeApiRateLimitRulesRequest $req) 查询API限流规则
 * @method Models\DescribeApiUseDetailResponse DescribeApiUseDetail(Models\DescribeApiUseDetailRequest $req) 查询网关API监控明细数据
 * @method Models\DescribeApiVersionsResponse DescribeApiVersions(Models\DescribeApiVersionsRequest $req) 查询API 版本
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) 获取应用详情
 * @method Models\DescribeApplicationAttributeResponse DescribeApplicationAttribute(Models\DescribeApplicationAttributeRequest $req) 获取应用列表其它字段，如实例数量信息等
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 获取应用列表
 * @method Models\DescribeBasicResourceUsageResponse DescribeBasicResourceUsage(Models\DescribeBasicResourceUsageRequest $req) TSF基本资源信息概览接口
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) 查询集群实例
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 查询配置
 * @method Models\DescribeConfigReleaseLogsResponse DescribeConfigReleaseLogs(Models\DescribeConfigReleaseLogsRequest $req) 查询配置发布历史
 * @method Models\DescribeConfigReleasesResponse DescribeConfigReleases(Models\DescribeConfigReleasesRequest $req) 查询配置发布信息
 * @method Models\DescribeConfigSummaryResponse DescribeConfigSummary(Models\DescribeConfigSummaryRequest $req) 查询配置汇总列表
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) 查询配置项列表
 * @method Models\DescribeContainerEventsResponse DescribeContainerEvents(Models\DescribeContainerEventsRequest $req) 获取容器事件列表
 * @method Models\DescribeContainerGroupDetailResponse DescribeContainerGroupDetail(Models\DescribeContainerGroupDetailRequest $req)  容器部署组详情
 * @method Models\DescribeContainerGroupsResponse DescribeContainerGroups(Models\DescribeContainerGroupsRequest $req) 容器部署组列表
 * @method Models\DescribeCreateGatewayApiStatusResponse DescribeCreateGatewayApiStatus(Models\DescribeCreateGatewayApiStatusRequest $req) 查询一键导入API分组任务的状态
 * @method Models\DescribeDownloadInfoResponse DescribeDownloadInfo(Models\DescribeDownloadInfoRequest $req) TSF上传的程序包存放在腾讯云对象存储（COS）中，通过该API可以获取从COS下载程序包需要的信息，包括包所在的桶、存储路径、鉴权信息等，之后使用COS API（或SDK）进行下载。
COS相关文档请查阅：https://cloud.tencent.com/document/product/436
 * @method Models\DescribeEnabledUnitRuleResponse DescribeEnabledUnitRule(Models\DescribeEnabledUnitRuleRequest $req) 查询生效的单元化规则
 * @method Models\DescribeFlowLastBatchStateResponse DescribeFlowLastBatchState(Models\DescribeFlowLastBatchStateRequest $req) 查询工作流最新一个批次的状态信息
 * @method Models\DescribeGatewayAllGroupApisResponse DescribeGatewayAllGroupApis(Models\DescribeGatewayAllGroupApisRequest $req) 查询网关所有分组下Api列表
 * @method Models\DescribeGatewayMonitorOverviewResponse DescribeGatewayMonitorOverview(Models\DescribeGatewayMonitorOverviewRequest $req) 查询网关监控概览
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) 查询虚拟机部署组详情
 * @method Models\DescribeGroupBindedGatewaysResponse DescribeGroupBindedGateways(Models\DescribeGroupBindedGatewaysRequest $req) 查询某个API分组已绑定的网关部署组信息列表
 * @method Models\DescribeGroupGatewaysResponse DescribeGroupGateways(Models\DescribeGroupGatewaysRequest $req) 查询某个网关绑定的API 分组信息列表
 * @method Models\DescribeGroupInstancesResponse DescribeGroupInstances(Models\DescribeGroupInstancesRequest $req) 查询虚拟机部署组云主机列表
 * @method Models\DescribeGroupUseDetailResponse DescribeGroupUseDetail(Models\DescribeGroupUseDetailRequest $req) 查询网关分组监控明细数据
 * @method Models\DescribeGroupsResponse DescribeGroups(Models\DescribeGroupsRequest $req) 获取虚拟机部署组列表
 * @method Models\DescribeGroupsWithPluginResponse DescribeGroupsWithPlugin(Models\DescribeGroupsWithPluginRequest $req) 查询某个插件下绑定或未绑定的API分组
 * @method Models\DescribeImageRepositoryResponse DescribeImageRepository(Models\DescribeImageRepositoryRequest $req) 镜像仓库列表 
 * @method Models\DescribeImageTagsResponse DescribeImageTags(Models\DescribeImageTagsRequest $req) 镜像版本列表
 * @method Models\DescribeLaneRulesResponse DescribeLaneRules(Models\DescribeLaneRulesRequest $req) 查询泳道规则列表
 * @method Models\DescribeLanesResponse DescribeLanes(Models\DescribeLanesRequest $req) 查询泳道列表
 * @method Models\DescribeMicroserviceResponse DescribeMicroservice(Models\DescribeMicroserviceRequest $req) 查询微服务详情
 * @method Models\DescribeMicroservicesResponse DescribeMicroservices(Models\DescribeMicroservicesRequest $req) 获取微服务列表
 * @method Models\DescribeMsApiListResponse DescribeMsApiList(Models\DescribeMsApiListRequest $req) 查询服务API列表
 * @method Models\DescribePathRewriteResponse DescribePathRewrite(Models\DescribePathRewriteRequest $req) 查询路径重写
 * @method Models\DescribePathRewritesResponse DescribePathRewrites(Models\DescribePathRewritesRequest $req) 查询路径重写列表
 * @method Models\DescribePkgsResponse DescribePkgs(Models\DescribePkgsRequest $req) 无
 * @method Models\DescribePluginInstancesResponse DescribePluginInstances(Models\DescribePluginInstancesRequest $req) 分页查询网关分组/API绑定（或未绑定）的插件列表
 * @method Models\DescribePodInstancesResponse DescribePodInstances(Models\DescribePodInstancesRequest $req) 获取部署组实例列表
 * @method Models\DescribePublicConfigResponse DescribePublicConfig(Models\DescribePublicConfigRequest $req) 查询公共配置（单条）
 * @method Models\DescribePublicConfigReleaseLogsResponse DescribePublicConfigReleaseLogs(Models\DescribePublicConfigReleaseLogsRequest $req) 查询公共配置发布历史
 * @method Models\DescribePublicConfigReleasesResponse DescribePublicConfigReleases(Models\DescribePublicConfigReleasesRequest $req) 查询公共配置发布信息
 * @method Models\DescribePublicConfigSummaryResponse DescribePublicConfigSummary(Models\DescribePublicConfigSummaryRequest $req) 查询公共配置汇总列表
 * @method Models\DescribePublicConfigsResponse DescribePublicConfigs(Models\DescribePublicConfigsRequest $req) 查询公共配置项列表
 * @method Models\DescribeReleasedConfigResponse DescribeReleasedConfig(Models\DescribeReleasedConfigRequest $req) 查询group发布的配置
 * @method Models\DescribeRepositoriesResponse DescribeRepositories(Models\DescribeRepositoriesRequest $req) 查询仓库列表
 * @method Models\DescribeRepositoryResponse DescribeRepository(Models\DescribeRepositoryRequest $req) 查询仓库信息
 * @method Models\DescribeServerlessGroupResponse DescribeServerlessGroup(Models\DescribeServerlessGroupRequest $req) 查询Serverless部署组明细
 * @method Models\DescribeServerlessGroupsResponse DescribeServerlessGroups(Models\DescribeServerlessGroupsRequest $req) 查询Serverless部署组列表
 * @method Models\DescribeSimpleApplicationsResponse DescribeSimpleApplications(Models\DescribeSimpleApplicationsRequest $req) 查询简单应用列表
 * @method Models\DescribeSimpleClustersResponse DescribeSimpleClusters(Models\DescribeSimpleClustersRequest $req) 查询简单集群列表
 * @method Models\DescribeSimpleGroupsResponse DescribeSimpleGroups(Models\DescribeSimpleGroupsRequest $req) 查询简单部署组列表
 * @method Models\DescribeSimpleNamespacesResponse DescribeSimpleNamespaces(Models\DescribeSimpleNamespacesRequest $req) 查询简单命名空间列表 
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 查询任务详情
 * @method Models\DescribeTaskLastStatusResponse DescribeTaskLastStatus(Models\DescribeTaskLastStatusRequest $req) 查询任务最近一次执行状态
 * @method Models\DescribeTaskRecordsResponse DescribeTaskRecords(Models\DescribeTaskRecordsRequest $req) 翻页查询任务列表
 * @method Models\DescribeUnitApiUseDetailResponse DescribeUnitApiUseDetail(Models\DescribeUnitApiUseDetailRequest $req) 查询网关API监控明细数据（仅单元化网关），非单元化网关使用DescribeApiUseDetail
 * @method Models\DescribeUnitNamespacesResponse DescribeUnitNamespaces(Models\DescribeUnitNamespacesRequest $req) 查询单元化命名空间列表
 * @method Models\DescribeUnitRuleResponse DescribeUnitRule(Models\DescribeUnitRuleRequest $req) 查询单元化规则详情
 * @method Models\DescribeUnitRulesResponse DescribeUnitRules(Models\DescribeUnitRulesRequest $req) 查询单元化规则列表
 * @method Models\DescribeUploadInfoResponse DescribeUploadInfo(Models\DescribeUploadInfoRequest $req) TSF会将软件包上传到腾讯云对象存储（COS）。调用此接口获取上传信息，如目标地域，桶，包Id，存储路径，鉴权信息等，之后请使用COS API（或SDK）进行上传。
COS相关文档请查阅：https://cloud.tencent.com/document/product/436
 * @method Models\DescribeUsableUnitNamespacesResponse DescribeUsableUnitNamespaces(Models\DescribeUsableUnitNamespacesRequest $req) 查询可用于被导入的命名空间列表
 * @method Models\DisableTaskResponse DisableTask(Models\DisableTaskRequest $req) 停用任务
 * @method Models\DisableTaskFlowResponse DisableTaskFlow(Models\DisableTaskFlowRequest $req) 停用工作流
 * @method Models\DisableUnitRouteResponse DisableUnitRoute(Models\DisableUnitRouteRequest $req) 禁用单元化路由
 * @method Models\DisableUnitRuleResponse DisableUnitRule(Models\DisableUnitRuleRequest $req) 禁用单元化规则
 * @method Models\DraftApiGroupResponse DraftApiGroup(Models\DraftApiGroupRequest $req) 下线Api分组
 * @method Models\EnableTaskResponse EnableTask(Models\EnableTaskRequest $req) 启用任务
 * @method Models\EnableTaskFlowResponse EnableTaskFlow(Models\EnableTaskFlowRequest $req) 启用工作流
 * @method Models\EnableUnitRouteResponse EnableUnitRoute(Models\EnableUnitRouteRequest $req) 启用单元化路由
 * @method Models\EnableUnitRuleResponse EnableUnitRule(Models\EnableUnitRuleRequest $req) 启用单元化规则
 * @method Models\ExecuteTaskResponse ExecuteTask(Models\ExecuteTaskRequest $req) 手动执行一次任务。
 * @method Models\ExecuteTaskFlowResponse ExecuteTaskFlow(Models\ExecuteTaskFlowRequest $req) 执行一次工作流
 * @method Models\ExpandGroupResponse ExpandGroup(Models\ExpandGroupRequest $req) 虚拟机部署组添加实例
 * @method Models\ModifyContainerGroupResponse ModifyContainerGroup(Models\ModifyContainerGroupRequest $req) 修改容器部署组
 * @method Models\ModifyContainerReplicasResponse ModifyContainerReplicas(Models\ModifyContainerReplicasRequest $req) 修改容器部署组实例数
 * @method Models\ModifyLaneResponse ModifyLane(Models\ModifyLaneRequest $req) 更新泳道信息
 * @method Models\ModifyLaneRuleResponse ModifyLaneRule(Models\ModifyLaneRuleRequest $req) 更新泳道规则
 * @method Models\ModifyMicroserviceResponse ModifyMicroservice(Models\ModifyMicroserviceRequest $req) 修改微服务详情
 * @method Models\ModifyPathRewriteResponse ModifyPathRewrite(Models\ModifyPathRewriteRequest $req) 修改路径重写
 * @method Models\ModifyTaskResponse ModifyTask(Models\ModifyTaskRequest $req) 修改任务
 * @method Models\ModifyUploadInfoResponse ModifyUploadInfo(Models\ModifyUploadInfoRequest $req) 调用该接口和COS的上传接口后，需要调用此接口更新TSF中保存的程序包状态。
调用此接口完成后，才标志上传包流程结束。
 * @method Models\RedoTaskResponse RedoTask(Models\RedoTaskRequest $req) 重新执行任务
 * @method Models\RedoTaskBatchResponse RedoTaskBatch(Models\RedoTaskBatchRequest $req) 重新执行任务批次
 * @method Models\RedoTaskExecuteResponse RedoTaskExecute(Models\RedoTaskExecuteRequest $req) 重新执行在某个节点上执行任务。
 * @method Models\RedoTaskFlowBatchResponse RedoTaskFlowBatch(Models\RedoTaskFlowBatchRequest $req) 重新执行工作流批次
 * @method Models\ReleaseApiGroupResponse ReleaseApiGroup(Models\ReleaseApiGroupRequest $req) 发布Api分组
 * @method Models\ReleaseConfigResponse ReleaseConfig(Models\ReleaseConfigRequest $req) 发布配置
 * @method Models\ReleasePublicConfigResponse ReleasePublicConfig(Models\ReleasePublicConfigRequest $req) 发布公共配置
 * @method Models\RemoveInstancesResponse RemoveInstances(Models\RemoveInstancesRequest $req) 从 TSF 集群中批量移除云主机节点
 * @method Models\RevocationConfigResponse RevocationConfig(Models\RevocationConfigRequest $req) 撤回已发布的配置
 * @method Models\RevocationPublicConfigResponse RevocationPublicConfig(Models\RevocationPublicConfigRequest $req) 撤回已发布的公共配置
 * @method Models\RollbackConfigResponse RollbackConfig(Models\RollbackConfigRequest $req) 回滚配置
 * @method Models\SearchBusinessLogResponse SearchBusinessLog(Models\SearchBusinessLogRequest $req) 业务日志搜索
 * @method Models\SearchStdoutLogResponse SearchStdoutLog(Models\SearchStdoutLogRequest $req) 标准输出日志搜索
 * @method Models\ShrinkGroupResponse ShrinkGroup(Models\ShrinkGroupRequest $req) 下线部署组所有机器实例
 * @method Models\ShrinkInstancesResponse ShrinkInstances(Models\ShrinkInstancesRequest $req) 虚拟机部署组下线实例
 * @method Models\StartContainerGroupResponse StartContainerGroup(Models\StartContainerGroupRequest $req) 启动容器部署组
 * @method Models\StartGroupResponse StartGroup(Models\StartGroupRequest $req) 启动分组
 * @method Models\StopContainerGroupResponse StopContainerGroup(Models\StopContainerGroupRequest $req) 停止容器部署组
 * @method Models\StopGroupResponse StopGroup(Models\StopGroupRequest $req) 停止虚拟机部署组
 * @method Models\StopTaskBatchResponse StopTaskBatch(Models\StopTaskBatchRequest $req) 停止执行中的任务批次， 非运行中的任务不可调用。
 * @method Models\StopTaskExecuteResponse StopTaskExecute(Models\StopTaskExecuteRequest $req) 停止正在某个节点上执行的任务
 * @method Models\TerminateTaskFlowBatchResponse TerminateTaskFlowBatch(Models\TerminateTaskFlowBatchRequest $req) 停止一个工作流批次
 * @method Models\UnbindApiGroupResponse UnbindApiGroup(Models\UnbindApiGroupRequest $req) API分组批量与网关解绑
 * @method Models\UpdateApiGroupResponse UpdateApiGroup(Models\UpdateApiGroupRequest $req) 更新Api分组
 * @method Models\UpdateApiRateLimitRuleResponse UpdateApiRateLimitRule(Models\UpdateApiRateLimitRuleRequest $req) 更新API限流规则
 * @method Models\UpdateApiRateLimitRulesResponse UpdateApiRateLimitRules(Models\UpdateApiRateLimitRulesRequest $req) 批量更新API限流规则
 * @method Models\UpdateApiTimeoutsResponse UpdateApiTimeouts(Models\UpdateApiTimeoutsRequest $req) 批量更新API超时
 * @method Models\UpdateGatewayApiResponse UpdateGatewayApi(Models\UpdateGatewayApiRequest $req) 更新API
 * @method Models\UpdateHealthCheckSettingsResponse UpdateHealthCheckSettings(Models\UpdateHealthCheckSettingsRequest $req) 更新健康检查配置
 * @method Models\UpdateRepositoryResponse UpdateRepository(Models\UpdateRepositoryRequest $req) 更新仓库信息
 * @method Models\UpdateUnitRuleResponse UpdateUnitRule(Models\UpdateUnitRuleRequest $req) 更新单元化规则
 */

class TsfClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tsf.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tsf";

    /**
     * @var string
     */
    protected $version = "2018-03-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("tsf")."\\"."V20180326\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

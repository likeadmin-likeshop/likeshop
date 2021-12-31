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

namespace TencentCloud\Tcaplusdb\V20190823;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcaplusdb\V20190823\Models as Models;

/**
 * @method Models\ClearTablesResponse ClearTables(Models\ClearTablesRequest $req) 根据给定的表信息，清除表数据。
 * @method Models\CompareIdlFilesResponse CompareIdlFiles(Models\CompareIdlFilesRequest $req) 选中目标表格，上传并校验改表文件，返回是否允许修改表格结构的结果。
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 用户创建备份任务
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 本接口用于创建TcaplusDB集群
 * @method Models\CreateSnapshotsResponse CreateSnapshots(Models\CreateSnapshotsRequest $req) 构造表格过去时间点的快照
 * @method Models\CreateTableGroupResponse CreateTableGroup(Models\CreateTableGroupRequest $req) 在TcaplusDB集群下创建表格组
 * @method Models\CreateTablesResponse CreateTables(Models\CreateTablesRequest $req) 根据选择的IDL文件列表，批量创建表格
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除TcaplusDB集群，必须在集群所属所有资源（包括表格组，表）都已经释放的情况下才会成功。
 * @method Models\DeleteIdlFilesResponse DeleteIdlFiles(Models\DeleteIdlFilesRequest $req) 指定集群ID和待删除IDL文件的信息，删除目标文件，如果文件正在被表关联则删除失败。
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) 删除表格的快照
 * @method Models\DeleteTableGroupResponse DeleteTableGroup(Models\DeleteTableGroupRequest $req) 删除表格组
 * @method Models\DeleteTableIndexResponse DeleteTableIndex(Models\DeleteTableIndexRequest $req) 删除表格的分布式索引
 * @method Models\DeleteTablesResponse DeleteTables(Models\DeleteTablesRequest $req) 删除指定的表,第一次调用此接口代表将表移动至回收站，再次调用代表将此表格从回收站中彻底删除。
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 获取审批管理的申请单
 * @method Models\DescribeClusterTagsResponse DescribeClusterTags(Models\DescribeClusterTagsRequest $req) 获取集群关联的标签列表
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询TcaplusDB集群列表，包含集群详细信息。
 * @method Models\DescribeIdlFileInfosResponse DescribeIdlFileInfos(Models\DescribeIdlFileInfosRequest $req) 查询表描述文件详情
 * @method Models\DescribeMachineResponse DescribeMachine(Models\DescribeMachineRequest $req) 查询独占集群可以申请的剩余机器
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 查询TcaplusDB服务支持的地域列表
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) 查询快照列表
 * @method Models\DescribeTableGroupTagsResponse DescribeTableGroupTags(Models\DescribeTableGroupTagsRequest $req) 获取表格组关联的标签列表
 * @method Models\DescribeTableGroupsResponse DescribeTableGroups(Models\DescribeTableGroupsRequest $req) 查询表格组列表
 * @method Models\DescribeTableTagsResponse DescribeTableTags(Models\DescribeTableTagsRequest $req) 获取表格标签
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 查询表详情
 * @method Models\DescribeTablesInRecycleResponse DescribeTablesInRecycle(Models\DescribeTablesInRecycleRequest $req) 查询回收站中的表详情
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 查询任务列表
 * @method Models\DescribeUinInWhitelistResponse DescribeUinInWhitelist(Models\DescribeUinInWhitelistRequest $req) 查询本用户是否在白名单中，控制是否能创建TDR类型的APP或表
 * @method Models\DisableRestProxyResponse DisableRestProxy(Models\DisableRestProxyRequest $req) 当restful api为关闭状态时，可以通过此接口关闭restful api
 * @method Models\EnableRestProxyResponse EnableRestProxy(Models\EnableRestProxyRequest $req) 当restful api为关闭状态时，可以通过此接口开启restful apu
 * @method Models\ImportSnapshotsResponse ImportSnapshots(Models\ImportSnapshotsRequest $req) 将快照数据导入到新表或当前表
 * @method Models\MergeTablesDataResponse MergeTablesData(Models\MergeTablesDataRequest $req) 合并指定表格
 * @method Models\ModifyCensorshipResponse ModifyCensorship(Models\ModifyCensorshipRequest $req) 修改集群审批状态
 * @method Models\ModifyClusterMachineResponse ModifyClusterMachine(Models\ModifyClusterMachineRequest $req) 修改独占集群机器
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) 修改指定的集群名称
 * @method Models\ModifyClusterPasswordResponse ModifyClusterPassword(Models\ModifyClusterPasswordRequest $req) 修改指定集群的密码，后台将在旧密码失效之前同时支持TcaplusDB SDK使用旧密码和新密码访问数据库。在旧密码失效之前不能提交新的密码修改请求，在旧密码失效之后不能提交修改旧密码过期时间的请求。
 * @method Models\ModifyClusterTagsResponse ModifyClusterTags(Models\ModifyClusterTagsRequest $req) 修改集群标签
 * @method Models\ModifySnapshotsResponse ModifySnapshots(Models\ModifySnapshotsRequest $req) 修改表格快照的过期时间
 * @method Models\ModifyTableGroupNameResponse ModifyTableGroupName(Models\ModifyTableGroupNameRequest $req) 修改TcaplusDB表格组名称
 * @method Models\ModifyTableGroupTagsResponse ModifyTableGroupTags(Models\ModifyTableGroupTagsRequest $req) 修改表格组标签
 * @method Models\ModifyTableMemosResponse ModifyTableMemos(Models\ModifyTableMemosRequest $req) 修改表备注信息
 * @method Models\ModifyTableQuotasResponse ModifyTableQuotas(Models\ModifyTableQuotasRequest $req) 表格扩缩容
 * @method Models\ModifyTableTagsResponse ModifyTableTags(Models\ModifyTableTagsRequest $req) 修改表格标签
 * @method Models\ModifyTablesResponse ModifyTables(Models\ModifyTablesRequest $req) 根据用户选定的表定义IDL文件，批量修改指定的表
 * @method Models\RecoverRecycleTablesResponse RecoverRecycleTables(Models\RecoverRecycleTablesRequest $req) 恢复回收站中，用户自行删除的表。对欠费待释放的表无效。
 * @method Models\RollbackTablesResponse RollbackTables(Models\RollbackTablesRequest $req) 表格数据回档
 * @method Models\SetTableIndexResponse SetTableIndex(Models\SetTableIndexRequest $req) 设置表格分布式索引
 * @method Models\UpdateApplyResponse UpdateApply(Models\UpdateApplyRequest $req) 更新申请单状态
 * @method Models\VerifyIdlFilesResponse VerifyIdlFiles(Models\VerifyIdlFilesRequest $req) 上传并校验创建表格文件，返回校验合法的表格定义
 */

class TcaplusdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcaplusdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcaplusdb";

    /**
     * @var string
     */
    protected $version = "2019-08-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcaplusdb")."\\"."V20190823\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

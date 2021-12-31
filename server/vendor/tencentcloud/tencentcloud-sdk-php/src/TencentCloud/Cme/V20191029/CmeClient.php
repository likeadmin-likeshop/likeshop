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

namespace TencentCloud\Cme\V20191029;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cme\V20191029\Models as Models;

/**
 * @method Models\AddTeamMemberResponse AddTeamMember(Models\AddTeamMemberRequest $req) 向一个团队中团队成员，并且指定成员的角色。
 * @method Models\CreateClassResponse CreateClass(Models\CreateClassRequest $req) 新增分类，用于管理素材。
<li>分类层数不能超过10；</li>
<li>子分类数不能超过10。</li>
 * @method Models\CreateLinkResponse CreateLink(Models\CreateLinkRequest $req)  创建媒体链接或分类路径链接，将源资源信息链接到目标。
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建云剪的编辑项目，支持创建视频剪辑、直播剪辑、导播台、视频拆条、录制回放以及云转推项目。

<b>若需使用云转推功能，请先咨询 [智能客服](https://cloud.tencent.com/act/event/smarty-service?from=doc_1138) 或 [提交工单](https://console.cloud.tencent.com/workorder/category) 。</b>

 * @method Models\CreateTeamResponse CreateTeam(Models\CreateTeamRequest $req) 创建一个团队。
 * @method Models\DeleteClassResponse DeleteClass(Models\DeleteClassRequest $req) 删除分类信息，删除时检验下述限制：
<li>分类路径必须存在；</li>
<li>分类下没有绑定素材。</li>
 * @method Models\DeleteLoginStatusResponse DeleteLoginStatus(Models\DeleteLoginStatusRequest $req) 删除用户登录态，使用户登出云剪平台。
 * @method Models\DeleteMaterialResponse DeleteMaterial(Models\DeleteMaterialRequest $req) 根据媒体 Id 删除媒体。
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除云剪编辑项目。
 * @method Models\DeleteTeamResponse DeleteTeam(Models\DeleteTeamRequest $req) 删除一个团队。
<li>要删除的团队必须没有归属的素材；</li>
<li>要删除的团队必须没有归属的分类。</li>
 * @method Models\DeleteTeamMembersResponse DeleteTeamMembers(Models\DeleteTeamMembersRequest $req) 将团队成员从团队中删除，默认只有 Owner 及管理员才有此权限。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 获取用户账号信息。
 * @method Models\DescribeClassResponse DescribeClass(Models\DescribeClassRequest $req) 获取指定归属者下所有的分类信息。
 * @method Models\DescribeJoinTeamsResponse DescribeJoinTeams(Models\DescribeJoinTeamsRequest $req) 获取指定的团队成员所加入的团队列表。
 * @method Models\DescribeLoginStatusResponse DescribeLoginStatus(Models\DescribeLoginStatusRequest $req) 查询指定用户的登录态。
 * @method Models\DescribeMaterialsResponse DescribeMaterials(Models\DescribeMaterialsRequest $req) 根据媒体 Id 批量获取媒体详情。
 * @method Models\DescribePlatformsResponse DescribePlatforms(Models\DescribePlatformsRequest $req) <li>支持获取所创建的所有平台列表信息；</li>
<li>支持获取指定的平台列表信息。</li>


 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 支持根据多种条件过滤出项目列表。
 * @method Models\DescribeResourceAuthorizationResponse DescribeResourceAuthorization(Models\DescribeResourceAuthorizationRequest $req) 查询指定资源的授权列表。
 * @method Models\DescribeSharedSpaceResponse DescribeSharedSpace(Models\DescribeSharedSpaceRequest $req) 获取共享空间。当个人或团队A对个人或团队B授权某资源以后，个人或团队B的共享空间就会增加个人或团队A。
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 获取任务详情信息，包含下面几个部分：
<li>任务基础信息：包括任务状态、错误信息、创建时间等；</li>
<li>导出项目输出信息：包括输出的素材 Id 等。</li>
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 获取任务列表，支持条件筛选，返回对应的任务基础信息列表。
 * @method Models\DescribeTeamMembersResponse DescribeTeamMembers(Models\DescribeTeamMembersRequest $req) 获取指定成员 ID 的信息，同时支持拉取所有团队成员信息。
 * @method Models\DescribeTeamsResponse DescribeTeams(Models\DescribeTeamsRequest $req) 获取指定团队的信息，拉取团队信息列表。
 * @method Models\ExportVideoByEditorTrackDataResponse ExportVideoByEditorTrackData(Models\ExportVideoByEditorTrackDataRequest $req) 使用视频合成协议导出视频，支持导出到CME云媒资和VOD云媒资。
 * @method Models\ExportVideoByTemplateResponse ExportVideoByTemplate(Models\ExportVideoByTemplateRequest $req) 使用视频编辑模板直接导出视频。
 * @method Models\ExportVideoByVideoSegmentationDataResponse ExportVideoByVideoSegmentationData(Models\ExportVideoByVideoSegmentationDataRequest $req) 使用视频智能拆条数据导出视频，将指定的视频拆条片段导出为一个视频。
 * @method Models\ExportVideoEditProjectResponse ExportVideoEditProject(Models\ExportVideoEditProjectRequest $req) 导出视频编辑项目，支持指定输出的模板。
 * @method Models\FlattenListMediaResponse FlattenListMedia(Models\FlattenListMediaRequest $req) 平铺分类路径下及其子分类下的所有媒体基础信息。
 * @method Models\GenerateVideoSegmentationSchemeByAiResponse GenerateVideoSegmentationSchemeByAi(Models\GenerateVideoSegmentationSchemeByAiRequest $req) <li>发起视频智能拆条任务，支持智能生成和平精英集锦、王者荣耀集锦、足球集锦、篮球集锦 、人物集锦、新闻拆条等任务。</li>
<li>和平精英集锦和王者荣耀集锦根据击杀场景进行拆条，足球集锦和篮球集锦根据进球场景进行拆条，人物集锦根据人物人脸特征进行拆条，新闻拆条根据导播进行拆条。</li>
<li>【本接口内测中，暂不建议使用】</li>
 * @method Models\GrantResourceAuthorizationResponse GrantResourceAuthorization(Models\GrantResourceAuthorizationRequest $req) 资源归属者对目标个人或团队授予目标资源的相应权限。
 * @method Models\HandleStreamConnectProjectResponse HandleStreamConnectProject(Models\HandleStreamConnectProjectRequest $req) 对云转推项目进行操作。
### 操作类型<a id="Operation"></a>
- `AddInput`（添加输入源），包括：
	- 添加直播拉流输入源，参见 [示例1](#.E7.A4.BA.E4.BE.8B1-.E6.B7.BB.E5.8A.A0.E7.9B.B4.E6.92.AD.E6.8B.89.E6.B5.81.E8.BE.93.E5.85.A5.E6.BA.90)；
	- 添加直播推流输入源，参见 [示例2](#.E7.A4.BA.E4.BE.8B2-.E6.B7.BB.E5.8A.A0.E7.9B.B4.E6.92.AD.E6.8E.A8.E6.B5.81.E8.BE.93.E5.85.A5.E6.BA.90)；
	- 添加点播拉流输入源，参见 [示例3](#.E7.A4.BA.E4.BE.8B3-.E6.B7.BB.E5.8A.A0.E7.82.B9.E6.92.AD.E6.8B.89.E6.B5.81.E8.BE.93.E5.85.A5.E6.BA.90.E4.B8.94.E5.BE.AA.E7.8E.AF.E6.92.AD.E6.94.BE)、[示例4](#.E7.A4.BA.E4.BE.8B4-.E6.B7.BB.E5.8A.A0.E7.82.B9.E6.92.AD.E6.8B.89.E6.B5.81.E8.BE.93.E5.85.A5.E6.BA.90.E4.B8.94.E5.8D.95.E6.AC.A1.E6.92.AD.E6.94.BE)；
- `DeleteInput`（删除输入源），参见 [示例5](#.E7.A4.BA.E4.BE.8B5-.E5.88.A0.E9.99.A4.E8.BE.93.E5.85.A5.E6.BA.90)；
- `ModifyInput`（修改输入源），参见 [示例6](#.E7.A4.BA.E4.BE.8B6-.E4.BF.AE.E6.94.B9.E8.BE.93.E5.85.A5.E6.BA.90)；
- `AddOutput`（ 添加输出源），参见 [示例7](#.E7.A4.BA.E4.BE.8B7-.E6.B7.BB.E5.8A.A0.E8.BE.93.E5.87.BA.E6.BA.90)；
- `DeleteOutput`（删除输出源），参见 [示例8](#.E7.A4.BA.E4.BE.8B8-.E5.88.A0.E9.99.A4.E8.BE.93.E5.87.BA.E6.BA.90)；
- `ModifyOutput`（修改输出源），参见 [示例9](#.E7.A4.BA.E4.BE.8B9-.E4.BF.AE.E6.94.B9.E8.BE.93.E5.87.BA.E6.BA.90)；
- `Start`（开启转推），参见 [示例10](#.E7.A4.BA.E4.BE.8B10-.E5.BC.80.E5.90.AF.E4.BA.91.E8.BD.AC.E6.8E.A8)；
- `Stop`（停止转推），参见 [示例11](#.E7.A4.BA.E4.BE.8B11-.E5.81.9C.E6.AD.A2.E4.BA.91.E8.BD.AC.E6.8E.A8)；
- `SwitchInput`（切换输入源），参见 [示例12](#.E7.A4.BA.E4.BE.8B12-.E5.88.87.E6.8D.A2.E8.BE.93.E5.85.A5.E6.BA.90)；
- `ModifyCurrentStopTime`（修改当前计划结束时间），参见 [示例13](#.E7.A4.BA.E4.BE.8B13-.E4.BF.AE.E6.94.B9.E8.BD.AC.E6.8E.A8.E7.BB.93.E6.9D.9F.E6.97.B6.E9.97.B4)。
 * @method Models\ImportMaterialResponse ImportMaterial(Models\ImportMaterialRequest $req) 将云点播媒资文件导入到云剪媒体资源库。
 * @method Models\ImportMediaToProjectResponse ImportMediaToProject(Models\ImportMediaToProjectRequest $req) 将云点播中的媒资或者用户自有媒资文件添加到媒体库中，跟项目关联，供后续视频编辑使用。目前仅普通编辑项目和智能视频拆条项目有效。
 * @method Models\ListMediaResponse ListMedia(Models\ListMediaRequest $req)  浏览当前分类路径下的资源，包括媒体文件和子分类，返回媒资基础信息和分类信息。
 * @method Models\ModifyMaterialResponse ModifyMaterial(Models\ModifyMaterialRequest $req) 修改媒体信息，支持修改媒体名称、分类路径、标签等信息。
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改云剪编辑项目的信息。
 * @method Models\ModifyTeamResponse ModifyTeam(Models\ModifyTeamRequest $req) 修改团队信息，目前支持修改的操作有：
<li>修改团队名称。</li>
 * @method Models\ModifyTeamMemberResponse ModifyTeamMember(Models\ModifyTeamMemberRequest $req) 修改团队成员信息，包括成员备注、角色等。
 * @method Models\MoveClassResponse MoveClass(Models\MoveClassRequest $req) 移动某一个分类到另外一个分类下，也可用于分类重命名。
如果 SourceClassPath = /素材/视频/NBA，DestinationClassPath = /素材/视频/篮球
<li>当 DestinationClassPath 不存在时候，操作结果为重命名 ClassPath；</li>
<li>当 DestinationClassPath 存在时候，操作结果为产生新目录 /素材/视频/篮球/NBA</li>
 * @method Models\MoveResourceResponse MoveResource(Models\MoveResourceRequest $req) 移动资源，支持跨个人或团队移动媒体以及分类。如果填写了Operator，则需要校验用户对媒体和分类资源的访问以及写权限。
<li>当原始资源为媒体时，该接口效果为将该媒体移动到目标分类下面；</li>
<li>当原始资源为分类时，该接口效果为将原始分类移动到目标分类或者是重命名。</li>
 如果 SourceResource.Resource.Id = /素材/视频/NBA，DestinationResource.Resource.Id= /素材/视频/篮球 
<li>当 DestinationResource.Resource.Id 不存在时候且原始资源与目标资源归属相同，操作结果为重命名原始分类；</li>
<li>当 DestinationResource.Resource.Id 存在时候，操作结果为产生新目录 /素材/视频/篮球/NBA</li>

 * @method Models\ParseEventResponse ParseEvent(Models\ParseEventRequest $req) 该接口接受制作云回调给客户的事件内容，将其转化为对应的 EventContent 结构，请不要实际调用该接口，只需要将接收到的事件内容直接使用 JSON 解析到 EventContent  即可使用。
 * @method Models\RevokeResourceAuthorizationResponse RevokeResourceAuthorization(Models\RevokeResourceAuthorizationRequest $req)  资源所属实体对目标实体回收目标资源的相应权限，若原本没有相应权限则不产生变更。
 * @method Models\SearchMaterialResponse SearchMaterial(Models\SearchMaterialRequest $req) 根据检索条件搜索媒体，返回媒体的基本信息。
 */

class CmeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cme.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cme";

    /**
     * @var string
     */
    protected $version = "2019-10-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("cme")."\\"."V20191029\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

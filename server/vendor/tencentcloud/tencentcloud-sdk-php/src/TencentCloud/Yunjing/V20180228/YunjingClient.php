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

namespace TencentCloud\Yunjing\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Yunjing\V20180228\Models as Models;

/**
 * @method Models\AddLoginWhiteListResponse AddLoginWhiteList(Models\AddLoginWhiteListRequest $req) 本接口（AddLoginWhiteList）用于添加白名单规则
 * @method Models\AddMachineTagResponse AddMachineTag(Models\AddMachineTagRequest $req) 增加机器关联标签
 * @method Models\CloseProVersionResponse CloseProVersion(Models\CloseProVersionRequest $req) 本接口 (CloseProVersion) 用于关闭专业版。
 * @method Models\CreateBaselineStrategyResponse CreateBaselineStrategy(Models\CreateBaselineStrategyRequest $req) 根据策略信息创建基线策略
 * @method Models\CreateOpenPortTaskResponse CreateOpenPortTask(Models\CreateOpenPortTaskRequest $req) 本接口 (CreateOpenPortTask) 用于创建实时获取端口任务。
 * @method Models\CreateProcessTaskResponse CreateProcessTask(Models\CreateProcessTaskRequest $req) 本接口 (CreateProcessTask) 用于创建实时拉取进程任务。
 * @method Models\CreateUsualLoginPlacesResponse CreateUsualLoginPlaces(Models\CreateUsualLoginPlacesRequest $req) 此接口（CreateUsualLoginPlaces）用于添加常用登录地。
 * @method Models\DeleteAttackLogsResponse DeleteAttackLogs(Models\DeleteAttackLogsRequest $req) 删除网络攻击日志
 * @method Models\DeleteBashEventsResponse DeleteBashEvents(Models\DeleteBashEventsRequest $req) 根据Ids删除高危命令事件
 * @method Models\DeleteBashRulesResponse DeleteBashRules(Models\DeleteBashRulesRequest $req) 删除高危命令规则
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) 本接口 (DeleteBruteAttacks) 用于删除暴力破解记录。
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) 删除白名单规则
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) 本接口（DeleteMachine）用于卸载云镜客户端。
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) 删除服务器关联的标签
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) 本接口 (DeleteMaliciousRequests) 用于删除恶意请求记录。
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) 本接口 (DeleteMalwares) 用于删除木马记录。
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) 本接口 (DeleteNonlocalLoginPlaces) 用于删除异地登录记录。
 * @method Models\DeletePrivilegeEventsResponse DeletePrivilegeEvents(Models\DeletePrivilegeEventsRequest $req) 根据Ids删除本地提权
 * @method Models\DeletePrivilegeRulesResponse DeletePrivilegeRules(Models\DeletePrivilegeRulesRequest $req) 删除本地提权规则
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) 根据Ids删除反弹Shell事件
 * @method Models\DeleteReverseShellRulesResponse DeleteReverseShellRules(Models\DeleteReverseShellRulesRequest $req) 删除反弹Shell规则
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) 删除标签
 * @method Models\DeleteUsualLoginPlacesResponse DeleteUsualLoginPlaces(Models\DeleteUsualLoginPlacesRequest $req) 本接口（DeleteUsualLoginPlaces）用于删除常用登录地。
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) 本接口 (DescribeAccountStatistics) 用于获取帐号统计列表数据。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口 (DescribeAccounts) 用于获取帐号列表数据。
 * @method Models\DescribeAgentVulsResponse DescribeAgentVuls(Models\DescribeAgentVulsRequest $req) 本接口 (DescribeAgentVuls) 用于获取单台主机的漏洞列表。
 * @method Models\DescribeAlarmAttributeResponse DescribeAlarmAttribute(Models\DescribeAlarmAttributeRequest $req) 本接口 (DescribeAlarmAttribute) 用于获取告警设置。
 * @method Models\DescribeAttackLogInfoResponse DescribeAttackLogInfo(Models\DescribeAttackLogInfoRequest $req) 网络攻击日志详情
 * @method Models\DescribeAttackLogsResponse DescribeAttackLogs(Models\DescribeAttackLogsRequest $req) 按分页形式展示网络攻击日志列表
 * @method Models\DescribeBashEventsResponse DescribeBashEvents(Models\DescribeBashEventsRequest $req) 获取高危命令列表
 * @method Models\DescribeBashRulesResponse DescribeBashRules(Models\DescribeBashRulesRequest $req) 获取高危命令规则列表
 * @method Models\DescribeBruteAttacksResponse DescribeBruteAttacks(Models\DescribeBruteAttacksRequest $req) 本接口{DescribeBruteAttacks}用于获取暴力破解事件列表。
 * @method Models\DescribeComponentInfoResponse DescribeComponentInfo(Models\DescribeComponentInfoRequest $req) 本接口 (DescribeComponentInfo) 用于获取组件信息数据。
 * @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) 本接口 (DescribeComponentStatistics) 用于获取组件统计列表数据。
 * @method Models\DescribeComponentsResponse DescribeComponents(Models\DescribeComponentsRequest $req) 本接口 (DescribeComponents) 用于获取组件列表数据。
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) 本接口 (DescribeHistoryAccounts) 用于获取帐号变更历史列表数据。
 * @method Models\DescribeImpactedHostsResponse DescribeImpactedHosts(Models\DescribeImpactedHostsRequest $req) 本接口 (DescribeImpactedHosts) 用于获取漏洞受影响机器列表。
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) 获取异地登录白名单列表
 * @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) 本接口（DescribeMachineInfo）用于获取机器详细信息。
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 本接口 (DescribeMachines) 用于获取区域主机列表。
 * @method Models\DescribeMaliciousRequestsResponse DescribeMaliciousRequests(Models\DescribeMaliciousRequestsRequest $req) 本接口 (DescribeMaliciousRequests) 用于获取恶意请求数据。
 * @method Models\DescribeMalwaresResponse DescribeMalwares(Models\DescribeMalwaresRequest $req) 本接口（DescribeMalwares）用于获取木马事件列表。
 * @method Models\DescribeNonlocalLoginPlacesResponse DescribeNonlocalLoginPlaces(Models\DescribeNonlocalLoginPlacesRequest $req) 本接口(DescribeNonlocalLoginPlaces)用于获取异地登录事件。
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) 本接口 (DescribeOpenPortStatistics) 用于获取端口统计列表。
 * @method Models\DescribeOpenPortTaskStatusResponse DescribeOpenPortTaskStatus(Models\DescribeOpenPortTaskStatusRequest $req) 本接口 (DescribeOpenPortTaskStatus) 用于获取实时拉取端口任务状态。
 * @method Models\DescribeOpenPortsResponse DescribeOpenPorts(Models\DescribeOpenPortsRequest $req) 本接口 (DescribeOpenPorts) 用于获取端口列表数据。

 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) 本接口用于（DescribeOverviewStatistics）获取概览统计数据。
 * @method Models\DescribePrivilegeEventsResponse DescribePrivilegeEvents(Models\DescribePrivilegeEventsRequest $req) 获取本地提权事件列表
 * @method Models\DescribePrivilegeRulesResponse DescribePrivilegeRules(Models\DescribePrivilegeRulesRequest $req) 获取本地提权规则列表
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) 本接口 (DescribeProVersionInfo) 用于获取专业版信息。
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) 本接口 (DescribeProcessStatistics) 用于获取进程统计列表数据。
 * @method Models\DescribeProcessTaskStatusResponse DescribeProcessTaskStatus(Models\DescribeProcessTaskStatusRequest $req) 本接口 (DescribeProcessTaskStatus) 用于获取实时拉取进程任务状态。
 * @method Models\DescribeProcessesResponse DescribeProcesses(Models\DescribeProcessesRequest $req) 本接口 (DescribeProcesses) 用于获取进程列表数据。
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) 获取反弹Shell列表
 * @method Models\DescribeReverseShellRulesResponse DescribeReverseShellRules(Models\DescribeReverseShellRulesRequest $req) 获取反弹Shell规则列表
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) 本接口 (DescribeSecurityDynamics) 用于获取安全事件消息数据。
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) 本接口 (DescribeSecurityTrends) 用于获取安全事件统计数据。
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) 获取指定标签关联的服务器信息
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 获取所有主机标签
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) 此接口（DescribeUsualLoginPlaces）用于查询常用登录地。
 * @method Models\DescribeVulInfoResponse DescribeVulInfo(Models\DescribeVulInfoRequest $req) 本接口 (DescribeVulInfo) 用于获取漏洞详情。
 * @method Models\DescribeVulScanResultResponse DescribeVulScanResult(Models\DescribeVulScanResultRequest $req) 本接口 (DescribeVulScanResult) 用于获取漏洞检测结果。

 * @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) 本接口 (DescribeVuls) 用于获取漏洞列表数据。
 * @method Models\DescribeWeeklyReportBruteAttacksResponse DescribeWeeklyReportBruteAttacks(Models\DescribeWeeklyReportBruteAttacksRequest $req) 本接口 (DescribeWeeklyReportBruteAttacks) 用于获取专业周报密码破解数据。
 * @method Models\DescribeWeeklyReportInfoResponse DescribeWeeklyReportInfo(Models\DescribeWeeklyReportInfoRequest $req) 本接口 (DescribeWeeklyReportInfo) 用于获取专业周报详情数据。
 * @method Models\DescribeWeeklyReportMalwaresResponse DescribeWeeklyReportMalwares(Models\DescribeWeeklyReportMalwaresRequest $req) 本接口 (DescribeWeeklyReportMalwares) 用于获取专业周报木马数据。
 * @method Models\DescribeWeeklyReportNonlocalLoginPlacesResponse DescribeWeeklyReportNonlocalLoginPlaces(Models\DescribeWeeklyReportNonlocalLoginPlacesRequest $req) 本接口 (DescribeWeeklyReportNonlocalLoginPlaces) 用于获取专业周报异地登录数据。
 * @method Models\DescribeWeeklyReportVulsResponse DescribeWeeklyReportVuls(Models\DescribeWeeklyReportVulsRequest $req) 本接口 (DescribeWeeklyReportVuls) 用于专业版周报漏洞数据。

 * @method Models\DescribeWeeklyReportsResponse DescribeWeeklyReports(Models\DescribeWeeklyReportsRequest $req) 本接口 (DescribeWeeklyReports) 用于获取周报列表数据。
 * @method Models\EditBashRuleResponse EditBashRule(Models\EditBashRuleRequest $req) 新增或修改高危命令规则
 * @method Models\EditPrivilegeRuleResponse EditPrivilegeRule(Models\EditPrivilegeRuleRequest $req) 新增或修改本地提权规则
 * @method Models\EditReverseShellRuleResponse EditReverseShellRule(Models\EditReverseShellRuleRequest $req) 编辑反弹Shell规则
 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) 新增或编辑标签
 * @method Models\ExportAttackLogsResponse ExportAttackLogs(Models\ExportAttackLogsRequest $req) 导出网络攻击日志
 * @method Models\ExportBashEventsResponse ExportBashEvents(Models\ExportBashEventsRequest $req) 导出高危命令事件
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) 本接口 (ExportBruteAttacks) 用于导出密码破解记录成CSV文件。
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) 本接口 (ExportMaliciousRequests) 用于导出下载恶意请求文件。
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) 本接口 (ExportMalwares) 用于导出木马记录CSV文件。
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) 本接口 (ExportNonlocalLoginPlaces) 用于导出异地登录事件记录CSV文件。
 * @method Models\ExportPrivilegeEventsResponse ExportPrivilegeEvents(Models\ExportPrivilegeEventsRequest $req) 导出本地提权事件
 * @method Models\ExportReverseShellEventsResponse ExportReverseShellEvents(Models\ExportReverseShellEventsRequest $req) 导出反弹Shell事件
 * @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) 本接口 (IgnoreImpactedHosts) 用于忽略漏洞。
 * @method Models\InquiryPriceOpenProVersionPrepaidResponse InquiryPriceOpenProVersionPrepaid(Models\InquiryPriceOpenProVersionPrepaidRequest $req) 本接口 (InquiryPriceOpenProVersionPrepaid) 用于开通专业版询价(预付费)。
 * @method Models\MisAlarmNonlocalLoginPlacesResponse MisAlarmNonlocalLoginPlaces(Models\MisAlarmNonlocalLoginPlacesRequest $req) 本接口{MisAlarmNonlocalLoginPlaces}将设置当前地点为常用登录地。
 * @method Models\ModifyAlarmAttributeResponse ModifyAlarmAttribute(Models\ModifyAlarmAttributeRequest $req) 本接口（ModifyAlarmAttribute）用于修改告警设置。
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) 本接口 (ModifyAutoOpenProVersionConfig) 用于设置新增主机自动开通专业版配置。
 * @method Models\ModifyLoginWhiteListResponse ModifyLoginWhiteList(Models\ModifyLoginWhiteListRequest $req) 编辑白名单规则
 * @method Models\ModifyProVersionRenewFlagResponse ModifyProVersionRenewFlag(Models\ModifyProVersionRenewFlagRequest $req) 本接口 (ModifyProVersionRenewFlag) 用于修改专业版包年包月续费标识。
 * @method Models\OpenProVersionResponse OpenProVersion(Models\OpenProVersionRequest $req) 本接口 (OpenProVersion) 用于开通专业版。
 * @method Models\OpenProVersionPrepaidResponse OpenProVersionPrepaid(Models\OpenProVersionPrepaidRequest $req) 本接口 (OpenProVersionPrepaid) 用于开通专业版(包年包月)。
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) 本接口（RecoverMalwares）用于批量恢复已经被隔离的木马文件。
 * @method Models\RenewProVersionResponse RenewProVersion(Models\RenewProVersionRequest $req) 本接口 (RenewProVersion) 用于续费专业版(包年包月)。
 * @method Models\RescanImpactedHostResponse RescanImpactedHost(Models\RescanImpactedHostRequest $req) 本接口 (RescanImpactedHost) 用于漏洞重新检测。
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) 本接口（SeparateMalwares）用于隔离木马。
 * @method Models\SetBashEventsStatusResponse SetBashEventsStatus(Models\SetBashEventsStatusRequest $req) 设置高危命令事件状态
 * @method Models\SwitchBashRulesResponse SwitchBashRules(Models\SwitchBashRulesRequest $req) 切换高危命令规则状态
 * @method Models\TrustMaliciousRequestResponse TrustMaliciousRequest(Models\TrustMaliciousRequestRequest $req) 本接口 (TrustMaliciousRequest) 用于恶意请求添加信任。
 * @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) 本接口(TrustMalwares)将被识别木马文件设为信任。
 * @method Models\UntrustMaliciousRequestResponse UntrustMaliciousRequest(Models\UntrustMaliciousRequestRequest $req) 本接口 (UntrustMaliciousRequest) 用于取消信任恶意请求。
 * @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) 本接口（UntrustMalwares）用于取消信任木马文件。
 */

class YunjingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "yunjing.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "yunjing";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("yunjing")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

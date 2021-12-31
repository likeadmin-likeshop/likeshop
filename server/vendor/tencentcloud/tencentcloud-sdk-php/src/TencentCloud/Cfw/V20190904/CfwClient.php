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

namespace TencentCloud\Cfw\V20190904;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfw\V20190904\Models as Models;

/**
 * @method Models\CreateAcRulesResponse CreateAcRules(Models\CreateAcRulesRequest $req) 创建规则
 * @method Models\CreateSecurityGroupApiRulesResponse CreateSecurityGroupApiRules(Models\CreateSecurityGroupApiRulesRequest $req) 创建安全组API规则
 * @method Models\DeleteAcRuleResponse DeleteAcRule(Models\DeleteAcRuleRequest $req) 删除规则
 * @method Models\DeleteAllAccessControlRuleResponse DeleteAllAccessControlRule(Models\DeleteAllAccessControlRuleRequest $req) 全部删除规则
 * @method Models\DeleteSecurityGroupAllRuleResponse DeleteSecurityGroupAllRule(Models\DeleteSecurityGroupAllRuleRequest $req) 删除全部规则
 * @method Models\DeleteSecurityGroupRuleResponse DeleteSecurityGroupRule(Models\DeleteSecurityGroupRuleRequest $req) 删除规则
 * @method Models\DescribeAcListsResponse DescribeAcLists(Models\DescribeAcListsRequest $req) 访问控制列表
 * @method Models\DescribeAssociatedInstanceListResponse DescribeAssociatedInstanceList(Models\DescribeAssociatedInstanceListRequest $req) 获取安全组关联实例列表
 * @method Models\DescribeCfwEipsResponse DescribeCfwEips(Models\DescribeCfwEipsRequest $req) 查询防火墙弹性公网ip
 * @method Models\DescribeGuideScanInfoResponse DescribeGuideScanInfo(Models\DescribeGuideScanInfoRequest $req) DescribeGuideScanInfo新手引导扫描接口信息
 * @method Models\DescribeNatRuleOverviewResponse DescribeNatRuleOverview(Models\DescribeNatRuleOverviewRequest $req) nat规则列表概况
 * @method Models\DescribeRuleOverviewResponse DescribeRuleOverview(Models\DescribeRuleOverviewRequest $req) 查询规则列表概况
 * @method Models\DescribeSecurityGroupListResponse DescribeSecurityGroupList(Models\DescribeSecurityGroupListRequest $req) 查询安全组规则列表
 * @method Models\DescribeSwitchListsResponse DescribeSwitchLists(Models\DescribeSwitchListsRequest $req) 防火墙开关列表
 * @method Models\DescribeSyncAssetStatusResponse DescribeSyncAssetStatus(Models\DescribeSyncAssetStatusRequest $req) 同步资产状态查询-互联网&VPC
 * @method Models\DescribeTableStatusResponse DescribeTableStatus(Models\DescribeTableStatusRequest $req) 查询规则表状态
 * @method Models\DescribeVpcRuleOverviewResponse DescribeVpcRuleOverview(Models\DescribeVpcRuleOverviewRequest $req) vpc规则列表概况
 * @method Models\ExpandCfwVerticalResponse ExpandCfwVertical(Models\ExpandCfwVerticalRequest $req) 防火墙垂直扩容
 * @method Models\ModifyAcRuleResponse ModifyAcRule(Models\ModifyAcRuleRequest $req) 修改规则
 * @method Models\ModifyAllRuleStatusResponse ModifyAllRuleStatus(Models\ModifyAllRuleStatusRequest $req) 启用停用全部规则
 * @method Models\ModifyAllSwitchStatusResponse ModifyAllSwitchStatus(Models\ModifyAllSwitchStatusRequest $req) 一键开启和关闭
 * @method Models\ModifyBlockIgnoreListResponse ModifyBlockIgnoreList(Models\ModifyBlockIgnoreListRequest $req) 支持对拦截列表、忽略列表如下操作：
批量增加拦截IP、忽略IP/域名
批量删除拦截IP、忽略IP/域名
批量修改拦截IP、忽略IP/域名生效事件
 * @method Models\ModifyItemSwitchStatusResponse ModifyItemSwitchStatus(Models\ModifyItemSwitchStatusRequest $req) 修改单个防火墙开关
 * @method Models\ModifySecurityGroupAllRuleStatusResponse ModifySecurityGroupAllRuleStatus(Models\ModifySecurityGroupAllRuleStatusRequest $req) 启用停用全部规则
 * @method Models\ModifySequenceRulesResponse ModifySequenceRules(Models\ModifySequenceRulesRequest $req) 修改规则执行顺序
 * @method Models\ModifyTableStatusResponse ModifyTableStatus(Models\ModifyTableStatusRequest $req) 修改规则表状态
 * @method Models\RunSyncAssetResponse RunSyncAsset(Models\RunSyncAssetRequest $req) 同步资产-互联网&VPC
 * @method Models\SetNatFwDnatRuleResponse SetNatFwDnatRule(Models\SetNatFwDnatRuleRequest $req) 配置防火墙Dnat规则
 */

class CfwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfw";

    /**
     * @var string
     */
    protected $version = "2019-09-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfw")."\\"."V20190904\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

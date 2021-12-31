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

namespace TencentCloud\Partners\V20180321;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Partners\V20180321\Models as Models;

/**
 * @method Models\AgentPayDealsResponse AgentPayDeals(Models\AgentPayDealsRequest $req) 代理商支付订单接口，支持自付/代付
 * @method Models\AgentTransferMoneyResponse AgentTransferMoney(Models\AgentTransferMoneyRequest $req) 为合作伙伴提供转账给客户能力。仅支持合作伙伴为自己名下客户转账。
 * @method Models\AuditApplyClientResponse AuditApplyClient(Models\AuditApplyClientRequest $req) 代理商可以审核其名下申请中代客
 * @method Models\CreatePayRelationForClientResponse CreatePayRelationForClient(Models\CreatePayRelationForClientRequest $req) 合作伙伴为客户创建强代付关系
 * @method Models\DescribeAgentAuditedClientsResponse DescribeAgentAuditedClients(Models\DescribeAgentAuditedClientsRequest $req) 查询已审核客户列表
 * @method Models\DescribeAgentBillsResponse DescribeAgentBills(Models\DescribeAgentBillsRequest $req) 代理商可查询自己及名下代客所有业务明细
 * @method Models\DescribeAgentClientGradeResponse DescribeAgentClientGrade(Models\DescribeAgentClientGradeRequest $req) 传入代客uin，查客户级别，客户审核状态，客户实名认证状态
 * @method Models\DescribeAgentClientsResponse DescribeAgentClients(Models\DescribeAgentClientsRequest $req) 代理商可查询自己名下待审核客户列表
 * @method Models\DescribeAgentDealsByCacheResponse DescribeAgentDealsByCache(Models\DescribeAgentDealsByCacheRequest $req) 供超大型代理商（代客数量>=3000 ）拉取缓存的全量客户订单。
 * @method Models\DescribeAgentDealsCacheResponse DescribeAgentDealsCache(Models\DescribeAgentDealsCacheRequest $req) 【该接口将逐步下线，请切换使用升级版本DescribeAgentDealsByCache】供超大型代理商（代客数量>=3000 ）拉取缓存的全量客户订单。

 * @method Models\DescribeAgentPayDealsResponse DescribeAgentPayDeals(Models\DescribeAgentPayDealsRequest $req) 【该接口将逐步下线，请切换使用升级版本DescribeAgentPayDealsV2】可以查询代理商代付的所有订单
 * @method Models\DescribeAgentPayDealsV2Response DescribeAgentPayDealsV2(Models\DescribeAgentPayDealsV2Request $req) 可以查询代理商代付的所有订单
 * @method Models\DescribeAgentSelfPayDealsResponse DescribeAgentSelfPayDeals(Models\DescribeAgentSelfPayDealsRequest $req) 【该接口将逐步下线，请切换使用升级版本DescribeAgentSelfPayDealsV2】可以查询代理商下指定客户的自付订单
 * @method Models\DescribeAgentSelfPayDealsV2Response DescribeAgentSelfPayDealsV2(Models\DescribeAgentSelfPayDealsV2Request $req) 可以查询代理商下指定客户的自付订单
 * @method Models\DescribeClientBalanceResponse DescribeClientBalance(Models\DescribeClientBalanceRequest $req) 为合作伙伴提供查询客户余额能力。调用者必须是合作伙伴，只能查询自己名下客户余额
 * @method Models\DescribeClientBaseInfoResponse DescribeClientBaseInfo(Models\DescribeClientBaseInfoRequest $req) 该接口即将下线，请切换调用DescribeClientBasicInfo。

国际站根据UIN查询代客基础信息【本接口仅限主账号访问】
 * @method Models\DescribeRebateInfosResponse DescribeRebateInfos(Models\DescribeRebateInfosRequest $req) 代理商可查询自己名下全部返佣信息
 * @method Models\DescribeSalesmansResponse DescribeSalesmans(Models\DescribeSalesmansRequest $req) 代理商查询名下业务员列表信息
 * @method Models\DescribeUnbindClientListResponse DescribeUnbindClientList(Models\DescribeUnbindClientListRequest $req) 代理商名下客户解绑记录查询接口
 * @method Models\ModifyClientRemarkResponse ModifyClientRemark(Models\ModifyClientRemarkRequest $req) 代理商可以对名下客户添加备注、修改备注
 * @method Models\RemovePayRelationForClientResponse RemovePayRelationForClient(Models\RemovePayRelationForClientRequest $req) 合作伙伴为客户消除强代付关系
 */

class PartnersClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "partners.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "partners";

    /**
     * @var string
     */
    protected $version = "2018-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("partners")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

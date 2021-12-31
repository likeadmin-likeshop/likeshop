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

namespace TencentCloud\Gpm\V20200820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gpm\V20200820\Models as Models;

/**
 * @method Models\CancelMatchingResponse CancelMatching(Models\CancelMatchingRequest $req) 取消匹配。
 * @method Models\CreateMatchResponse CreateMatch(Models\CreateMatchRequest $req) 创建匹配
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建规则
 * @method Models\DeleteMatchResponse DeleteMatch(Models\DeleteMatchRequest $req) 删除匹配
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除规则
 * @method Models\DescribeDataResponse DescribeData(Models\DescribeDataRequest $req) 统计数据
 * @method Models\DescribeMatchResponse DescribeMatch(Models\DescribeMatchRequest $req) 查询匹配详情
 * @method Models\DescribeMatchCodesResponse DescribeMatchCodes(Models\DescribeMatchCodesRequest $req) 分页查询匹配Code
 * @method Models\DescribeMatchesResponse DescribeMatches(Models\DescribeMatchesRequest $req) 分页查询匹配列表
 * @method Models\DescribeMatchingProgressResponse DescribeMatchingProgress(Models\DescribeMatchingProgressRequest $req) 查询匹配进度。
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) 查询规则详情
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 分页查询规则集列表
 * @method Models\DescribeTokenResponse DescribeToken(Models\DescribeTokenRequest $req) 查询匹配Token，Token用于push消息验证。
 * @method Models\ModifyMatchResponse ModifyMatch(Models\ModifyMatchRequest $req) 修改匹配
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 修改规则（描述、标签）
 * @method Models\ModifyTokenResponse ModifyToken(Models\ModifyTokenRequest $req) 修改匹配Token。
 * @method Models\StartMatchingResponse StartMatching(Models\StartMatchingRequest $req) 支持传入一个玩家或多个玩家发起匹配，在同一个请求内的玩家将被分到同一个对局。
 * @method Models\StartMatchingBackfillResponse StartMatchingBackfill(Models\StartMatchingBackfillRequest $req) 通过调用StartMatchingBackfill，用户可以传入一个回填的匹配请求，GPM为回填请求搜索符合条件的ticket并形成一个新的match。
 */

class GpmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gpm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gpm";

    /**
     * @var string
     */
    protected $version = "2020-08-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("gpm")."\\"."V20200820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

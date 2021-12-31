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

namespace TencentCloud\Waf\V20180125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Waf\V20180125\Models as Models;

/**
 * @method Models\AddCustomRuleResponse AddCustomRule(Models\AddCustomRuleRequest $req) 增加自定义策略
 * @method Models\CreateAttackDownloadTaskResponse CreateAttackDownloadTask(Models\CreateAttackDownloadTaskRequest $req) 创建攻击日志下载任务
 * @method Models\DeleteAttackDownloadRecordResponse DeleteAttackDownloadRecord(Models\DeleteAttackDownloadRecordRequest $req) 删除攻击日志下载任务记录
 * @method Models\DeleteDownloadRecordResponse DeleteDownloadRecord(Models\DeleteDownloadRecordRequest $req) 删除访问日志下载记录
 * @method Models\DeleteSessionResponse DeleteSession(Models\DeleteSessionRequest $req) 删除CC攻击的session设置
 * @method Models\DescribeCustomRulesResponse DescribeCustomRules(Models\DescribeCustomRulesRequest $req) 获取防护配置中的自定义策略列表
 * @method Models\DescribeFlowTrendResponse DescribeFlowTrend(Models\DescribeFlowTrendRequest $req) 获取waf流量访问趋势
 * @method Models\DescribeUserClbWafRegionsResponse DescribeUserClbWafRegions(Models\DescribeUserClbWafRegionsRequest $req) 在负载均衡型WAF的添加、编辑域名配置的时候，需要展示负载均衡型WAF（clb-waf)支持的地域列表，通过DescribeUserClbWafRegions既可以获得当前对客户已经开放的地域列表
 * @method Models\ModifyCustomRuleStatusResponse ModifyCustomRuleStatus(Models\ModifyCustomRuleStatusRequest $req) 开启或禁用自定义策略
 */

class WafClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "waf.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "waf";

    /**
     * @var string
     */
    protected $version = "2018-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("waf")."\\"."V20180125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

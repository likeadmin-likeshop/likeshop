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

namespace TencentCloud\Dayu\V20180709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dayu\V20180709\Models as Models;

/**
 * @method Models\CreateBasicDDoSAlarmThresholdResponse CreateBasicDDoSAlarmThreshold(Models\CreateBasicDDoSAlarmThresholdRequest $req) 设置基础防护的DDoS告警阈值，只支持基础防护产品
 * @method Models\CreateBoundIPResponse CreateBoundIP(Models\CreateBoundIPRequest $req) 绑定IP到高防包实例，支持独享包、共享包；需要注意的是此接口绑定或解绑IP是异步接口，当处于绑定或解绑中时，则不允许再进行绑定或解绑，需要等待当前绑定或解绑完成。
 * @method Models\CreateCCFrequencyRulesResponse CreateCCFrequencyRules(Models\CreateCCFrequencyRulesRequest $req) 添加CC防护的访问频率控制规则
 * @method Models\CreateCCSelfDefinePolicyResponse CreateCCSelfDefinePolicy(Models\CreateCCSelfDefinePolicyRequest $req) 创建CC自定义策略
 * @method Models\CreateDDoSPolicyResponse CreateDDoSPolicy(Models\CreateDDoSPolicyRequest $req) 添加DDoS高级策略
 * @method Models\CreateDDoSPolicyCaseResponse CreateDDoSPolicyCase(Models\CreateDDoSPolicyCaseRequest $req) 添加策略场景
 * @method Models\CreateInstanceNameResponse CreateInstanceName(Models\CreateInstanceNameRequest $req) 资源实例重命名，支持独享包、共享包、高防IP、高防IP专业版；
 * @method Models\CreateL4HealthConfigResponse CreateL4HealthConfig(Models\CreateL4HealthConfigRequest $req) 上传四层健康检查配置
 * @method Models\CreateL4RulesResponse CreateL4Rules(Models\CreateL4RulesRequest $req) 添加L4转发规则
 * @method Models\CreateL7CCRuleResponse CreateL7CCRule(Models\CreateL7CCRuleRequest $req) 此接口是7层CC的访问频控自定义规则（IP+Host维度，不支持具体的URI），此接口已弃用，请调用新接口CreateCCFrequencyRules，新接口同时支持IP+Host维度以及具体的URI；
 * @method Models\CreateL7HealthConfigResponse CreateL7HealthConfig(Models\CreateL7HealthConfigRequest $req) 上传七层健康检查配置
 * @method Models\CreateL7RuleCertResponse CreateL7RuleCert(Models\CreateL7RuleCertRequest $req) 配置7层转发规则的证书
 * @method Models\CreateL7RulesResponse CreateL7Rules(Models\CreateL7RulesRequest $req) 添加7层(网站)转发规则
 * @method Models\CreateL7RulesUploadResponse CreateL7RulesUpload(Models\CreateL7RulesUploadRequest $req) 批量上传7层转发规则
 * @method Models\CreateNetReturnResponse CreateNetReturn(Models\CreateNetReturnRequest $req) 高防IP专业版一键切回源站
 * @method Models\CreateNewL4RulesResponse CreateNewL4Rules(Models\CreateNewL4RulesRequest $req) 添加L4转发规则
 * @method Models\CreateNewL7RulesResponse CreateNewL7Rules(Models\CreateNewL7RulesRequest $req) 添加7层转发规则
 * @method Models\CreateNewL7RulesUploadResponse CreateNewL7RulesUpload(Models\CreateNewL7RulesUploadRequest $req) 批量上传7层转发规则
 * @method Models\CreateUnblockIpResponse CreateUnblockIp(Models\CreateUnblockIpRequest $req) IP解封操作
 * @method Models\DeleteCCFrequencyRulesResponse DeleteCCFrequencyRules(Models\DeleteCCFrequencyRulesRequest $req) 删除CC防护的访问频率控制规则
 * @method Models\DeleteCCSelfDefinePolicyResponse DeleteCCSelfDefinePolicy(Models\DeleteCCSelfDefinePolicyRequest $req) 删除CC自定义策略
 * @method Models\DeleteDDoSPolicyResponse DeleteDDoSPolicy(Models\DeleteDDoSPolicyRequest $req) 删除DDoS高级策略
 * @method Models\DeleteDDoSPolicyCaseResponse DeleteDDoSPolicyCase(Models\DeleteDDoSPolicyCaseRequest $req) 删除策略场景
 * @method Models\DeleteL4RulesResponse DeleteL4Rules(Models\DeleteL4RulesRequest $req) 删除四层转发规则
 * @method Models\DeleteL7RulesResponse DeleteL7Rules(Models\DeleteL7RulesRequest $req) 删除七层转发规则
 * @method Models\DeleteNewL4RulesResponse DeleteNewL4Rules(Models\DeleteNewL4RulesRequest $req) 删除L4转发规则
 * @method Models\DeleteNewL7RulesResponse DeleteNewL7Rules(Models\DeleteNewL7RulesRequest $req) 删除L7转发规则
 * @method Models\DescribeActionLogResponse DescribeActionLog(Models\DescribeActionLogRequest $req) 获取操作日志
 * @method Models\DescribeBGPIPL7RuleMaxCntResponse DescribeBGPIPL7RuleMaxCnt(Models\DescribeBGPIPL7RuleMaxCntRequest $req) 获取高防IP可添加的最多7层规则数量

 * @method Models\DescribeBaradDataResponse DescribeBaradData(Models\DescribeBaradDataRequest $req) 为大禹子产品提供业务转发指标数据的接口
 * @method Models\DescribeBasicCCThresholdResponse DescribeBasicCCThreshold(Models\DescribeBasicCCThresholdRequest $req) 获取基础防护CC防护阈值
 * @method Models\DescribeBasicDeviceThresholdResponse DescribeBasicDeviceThreshold(Models\DescribeBasicDeviceThresholdRequest $req) 获取基础防护黑洞阈值
 * @method Models\DescribeBizHttpStatusResponse DescribeBizHttpStatus(Models\DescribeBizHttpStatusRequest $req) 获取业务流量状态码统计
 * @method Models\DescribeBizTrendResponse DescribeBizTrend(Models\DescribeBizTrendRequest $req) 获取业务流量曲线
 * @method Models\DescribeCCAlarmThresholdResponse DescribeCCAlarmThreshold(Models\DescribeCCAlarmThresholdRequest $req) 获取高防包、高防IP、高防IP专业版、棋牌盾产品设置CC攻击的告警通知阈值
 * @method Models\DescribeCCEvListResponse DescribeCCEvList(Models\DescribeCCEvListRequest $req) 获取CC攻击事件列表
 * @method Models\DescribeCCFrequencyRulesResponse DescribeCCFrequencyRules(Models\DescribeCCFrequencyRulesRequest $req) 获取CC防护的访问频率控制规则
 * @method Models\DescribeCCIpAllowDenyResponse DescribeCCIpAllowDeny(Models\DescribeCCIpAllowDenyRequest $req) 获取CC的IP黑白名单
 * @method Models\DescribeCCSelfDefinePolicyResponse DescribeCCSelfDefinePolicy(Models\DescribeCCSelfDefinePolicyRequest $req) 获取CC自定义策略
 * @method Models\DescribeCCTrendResponse DescribeCCTrend(Models\DescribeCCTrendRequest $req) 获取CC攻击指标数据，包括总请求峰值(QPS)和攻击请求(QPS)
 * @method Models\DescribeCCUrlAllowResponse DescribeCCUrlAllow(Models\DescribeCCUrlAllowRequest $req) 获取CC的Url白名单
 * @method Models\DescribeDDoSAlarmThresholdResponse DescribeDDoSAlarmThreshold(Models\DescribeDDoSAlarmThresholdRequest $req) 获取高防包、高防IP、高防IP专业版、棋牌盾产品设置DDoS攻击的告警通知阈值
 * @method Models\DescribeDDoSAttackIPRegionMapResponse DescribeDDoSAttackIPRegionMap(Models\DescribeDDoSAttackIPRegionMapRequest $req) 获取DDoS攻击源IP地域分布图，支持全球攻击分布和国内省份攻击分布；
 * @method Models\DescribeDDoSAttackSourceResponse DescribeDDoSAttackSource(Models\DescribeDDoSAttackSourceRequest $req) 获取DDoS攻击源列表
 * @method Models\DescribeDDoSCountResponse DescribeDDoSCount(Models\DescribeDDoSCountRequest $req) 获取DDoS攻击占比分析
 * @method Models\DescribeDDoSDefendStatusResponse DescribeDDoSDefendStatus(Models\DescribeDDoSDefendStatusRequest $req) 获取DDoS防护状态（临时关闭状态），支持产品：基础防护，独享包，共享包，高防IP，高防IP专业版；调用此接口是获取当前是否有设置临时关闭DDoS防护状态，如果有设置会返回临时关闭的时长等参数。
 * @method Models\DescribeDDoSEvInfoResponse DescribeDDoSEvInfo(Models\DescribeDDoSEvInfoRequest $req) 获取DDoS攻击事件详情
 * @method Models\DescribeDDoSEvListResponse DescribeDDoSEvList(Models\DescribeDDoSEvListRequest $req) 获取DDoS攻击事件列表
 * @method Models\DescribeDDoSIpLogResponse DescribeDDoSIpLog(Models\DescribeDDoSIpLogRequest $req) 获取DDoSIP攻击日志
 * @method Models\DescribeDDoSNetCountResponse DescribeDDoSNetCount(Models\DescribeDDoSNetCountRequest $req) 获取高防IP专业版资源的DDoS攻击占比分析
 * @method Models\DescribeDDoSNetEvInfoResponse DescribeDDoSNetEvInfo(Models\DescribeDDoSNetEvInfoRequest $req) 获取高防IP专业版资源的DDoS攻击事件详情
 * @method Models\DescribeDDoSNetEvListResponse DescribeDDoSNetEvList(Models\DescribeDDoSNetEvListRequest $req) 获取高防IP专业版资源的DDoS攻击事件列表
 * @method Models\DescribeDDoSNetIpLogResponse DescribeDDoSNetIpLog(Models\DescribeDDoSNetIpLogRequest $req) 获取高防IP专业版资源的DDoSIP攻击日志
 * @method Models\DescribeDDoSNetTrendResponse DescribeDDoSNetTrend(Models\DescribeDDoSNetTrendRequest $req) 获取高防IP专业版资源的DDoS攻击指标数据
 * @method Models\DescribeDDoSPolicyResponse DescribeDDoSPolicy(Models\DescribeDDoSPolicyRequest $req) 获取DDoS高级策略
 * @method Models\DescribeDDoSTrendResponse DescribeDDoSTrend(Models\DescribeDDoSTrendRequest $req) 获取DDoS攻击流量带宽和攻击包速率数据
 * @method Models\DescribeDDoSUsedStatisResponse DescribeDDoSUsedStatis(Models\DescribeDDoSUsedStatisRequest $req) 统计用户的高防资源的使用天数和DDoS攻击防护次数
 * @method Models\DescribeIPProductInfoResponse DescribeIPProductInfo(Models\DescribeIPProductInfoRequest $req) 获取独享包或共享包IP对应的云资产信息，只支持独享包和共享包的IP
 * @method Models\DescribeInsurePacksResponse DescribeInsurePacks(Models\DescribeInsurePacksRequest $req) 获取保险包套餐列表
 * @method Models\DescribeIpBlockListResponse DescribeIpBlockList(Models\DescribeIpBlockListRequest $req) 获取IP封堵列表
 * @method Models\DescribeIpUnBlockListResponse DescribeIpUnBlockList(Models\DescribeIpUnBlockListRequest $req) 获取IP解封记录
 * @method Models\DescribeL4HealthConfigResponse DescribeL4HealthConfig(Models\DescribeL4HealthConfigRequest $req) 导出四层健康检查配置
 * @method Models\DescribeL4RulesErrHealthResponse DescribeL4RulesErrHealth(Models\DescribeL4RulesErrHealthRequest $req) 获取L4转发规则健康检查异常结果
 * @method Models\DescribeL7HealthConfigResponse DescribeL7HealthConfig(Models\DescribeL7HealthConfigRequest $req) 导出七层健康检查配置
 * @method Models\DescribeNewL4RulesResponse DescribeNewL4Rules(Models\DescribeNewL4RulesRequest $req) 获取L4转发规则
 * @method Models\DescribeNewL4RulesErrHealthResponse DescribeNewL4RulesErrHealth(Models\DescribeNewL4RulesErrHealthRequest $req) 获取L4转发规则健康检查异常结果
 * @method Models\DescribeNewL7RulesErrHealthResponse DescribeNewL7RulesErrHealth(Models\DescribeNewL7RulesErrHealthRequest $req) 获取L7转发规则健康检查异常结果
 * @method Models\DescribePackIndexResponse DescribePackIndex(Models\DescribePackIndexRequest $req) 获取产品总览统计，支持高防包、高防IP、高防IP专业版；
 * @method Models\DescribePcapResponse DescribePcap(Models\DescribePcapRequest $req) 下载攻击事件的pcap包
 * @method Models\DescribePolicyCaseResponse DescribePolicyCase(Models\DescribePolicyCaseRequest $req) 获取策略场景
 * @method Models\DescribeResIpListResponse DescribeResIpList(Models\DescribeResIpListRequest $req) 获取资源的IP列表
 * @method Models\DescribeResourceListResponse DescribeResourceList(Models\DescribeResourceListRequest $req) 获取资源列表
 * @method Models\DescribeRuleSetsResponse DescribeRuleSets(Models\DescribeRuleSetsRequest $req) 获取资源的规则数
 * @method Models\DescribeSchedulingDomainListResponse DescribeSchedulingDomainList(Models\DescribeSchedulingDomainListRequest $req) 获取调度域名列表
 * @method Models\DescribeSecIndexResponse DescribeSecIndex(Models\DescribeSecIndexRequest $req) 获取本月安全统计
 * @method Models\DescribeSourceIpSegmentResponse DescribeSourceIpSegment(Models\DescribeSourceIpSegmentRequest $req) 获取回源IP段，支持的产品：高防IP，高防IP专业版；
 * @method Models\DescribeTransmitStatisResponse DescribeTransmitStatis(Models\DescribeTransmitStatisRequest $req) 获取业务转发统计数据，支持转发流量和转发包速率
 * @method Models\DescribeUnBlockStatisResponse DescribeUnBlockStatis(Models\DescribeUnBlockStatisRequest $req) 获取黑洞解封次数
 * @method Models\DescribleL4RulesResponse DescribleL4Rules(Models\DescribleL4RulesRequest $req) 获取四层转发规则
 * @method Models\DescribleL7RulesResponse DescribleL7Rules(Models\DescribleL7RulesRequest $req) 获取七层转发规则
 * @method Models\DescribleNewL7RulesResponse DescribleNewL7Rules(Models\DescribleNewL7RulesRequest $req) 获取7层规则
 * @method Models\DescribleRegionCountResponse DescribleRegionCount(Models\DescribleRegionCountRequest $req) 获取地域的资源实例数
 * @method Models\ModifyCCAlarmThresholdResponse ModifyCCAlarmThreshold(Models\ModifyCCAlarmThresholdRequest $req) 为高防包、高防IP、高防IP专业版、棋牌盾产品设置CC攻击的告警通知阈值
 * @method Models\ModifyCCFrequencyRulesResponse ModifyCCFrequencyRules(Models\ModifyCCFrequencyRulesRequest $req) 修改CC防护的访问频率控制规则
 * @method Models\ModifyCCFrequencyRulesStatusResponse ModifyCCFrequencyRulesStatus(Models\ModifyCCFrequencyRulesStatusRequest $req) 开启或关闭CC防护的访问频率控制规则
 * @method Models\ModifyCCHostProtectionResponse ModifyCCHostProtection(Models\ModifyCCHostProtectionRequest $req) 开启或关闭CC域名防护
 * @method Models\ModifyCCIpAllowDenyResponse ModifyCCIpAllowDeny(Models\ModifyCCIpAllowDenyRequest $req) 添加或删除CC的IP黑白名单
 * @method Models\ModifyCCLevelResponse ModifyCCLevel(Models\ModifyCCLevelRequest $req) 修改CC防护等级
 * @method Models\ModifyCCPolicySwitchResponse ModifyCCPolicySwitch(Models\ModifyCCPolicySwitchRequest $req) 修改CC自定义策略开关
 * @method Models\ModifyCCSelfDefinePolicyResponse ModifyCCSelfDefinePolicy(Models\ModifyCCSelfDefinePolicyRequest $req) 修改CC自定义策略
 * @method Models\ModifyCCThresholdResponse ModifyCCThreshold(Models\ModifyCCThresholdRequest $req) 修改CC的防护阈值
 * @method Models\ModifyCCUrlAllowResponse ModifyCCUrlAllow(Models\ModifyCCUrlAllowRequest $req) 添加或删除CC的URL白名单
 * @method Models\ModifyDDoSAIStatusResponse ModifyDDoSAIStatus(Models\ModifyDDoSAIStatusRequest $req) 读取或修改DDoS的AI防护状态
 * @method Models\ModifyDDoSAlarmThresholdResponse ModifyDDoSAlarmThreshold(Models\ModifyDDoSAlarmThresholdRequest $req) 为高防包、高防IP、高防IP专业版、棋牌盾等产品设置DDoS攻击的告警通知阈值
 * @method Models\ModifyDDoSDefendStatusResponse ModifyDDoSDefendStatus(Models\ModifyDDoSDefendStatusRequest $req) 开启或关闭DDoS防护状态，调用此接口允许临时关闭DDoS防护一段时间，等时间到了会自动开启DDoS防护；
 * @method Models\ModifyDDoSLevelResponse ModifyDDoSLevel(Models\ModifyDDoSLevelRequest $req) 读取或修改DDoS的防护等级
 * @method Models\ModifyDDoSPolicyResponse ModifyDDoSPolicy(Models\ModifyDDoSPolicyRequest $req) 修改DDoS高级策略
 * @method Models\ModifyDDoSPolicyCaseResponse ModifyDDoSPolicyCase(Models\ModifyDDoSPolicyCaseRequest $req) 修改策略场景
 * @method Models\ModifyDDoSPolicyNameResponse ModifyDDoSPolicyName(Models\ModifyDDoSPolicyNameRequest $req) 修改DDoS高级策略名称
 * @method Models\ModifyDDoSSwitchResponse ModifyDDoSSwitch(Models\ModifyDDoSSwitchRequest $req) 开启或关闭DDoS防护，只支持基础防护产品；
 * @method Models\ModifyDDoSThresholdResponse ModifyDDoSThreshold(Models\ModifyDDoSThresholdRequest $req) 修改DDoS清洗阈值
 * @method Models\ModifyDDoSWaterKeyResponse ModifyDDoSWaterKey(Models\ModifyDDoSWaterKeyRequest $req) 支持水印密钥的添加，删除，开启，关闭
 * @method Models\ModifyElasticLimitResponse ModifyElasticLimit(Models\ModifyElasticLimitRequest $req) 修改弹性防护阈值
 * @method Models\ModifyL4HealthResponse ModifyL4Health(Models\ModifyL4HealthRequest $req) 修改L4转发规则健康检查参数，支持的子产品：高防IP、高防IP专业版
 * @method Models\ModifyL4KeepTimeResponse ModifyL4KeepTime(Models\ModifyL4KeepTimeRequest $req) 修改L4转发规则的会话保持，支持的子产品：高防IP、高防IP专业版
 * @method Models\ModifyL4RulesResponse ModifyL4Rules(Models\ModifyL4RulesRequest $req) 修改L4转发规则
 * @method Models\ModifyL7RulesResponse ModifyL7Rules(Models\ModifyL7RulesRequest $req) 修改L7转发规则
 * @method Models\ModifyNetReturnSwitchResponse ModifyNetReturnSwitch(Models\ModifyNetReturnSwitchRequest $req) 在客户收攻击或者被封堵时，切回到源站，并设置回切的时长
 * @method Models\ModifyNewDomainRulesResponse ModifyNewDomainRules(Models\ModifyNewDomainRulesRequest $req) 修改7层转发规则
 * @method Models\ModifyNewL4RuleResponse ModifyNewL4Rule(Models\ModifyNewL4RuleRequest $req) 修改4层转发规则
 * @method Models\ModifyResBindDDoSPolicyResponse ModifyResBindDDoSPolicy(Models\ModifyResBindDDoSPolicyRequest $req) 资源实例绑定DDoS高级策略
 * @method Models\ModifyResourceRenewFlagResponse ModifyResourceRenewFlag(Models\ModifyResourceRenewFlagRequest $req) 修改资源自动续费标记
 */

class DayuClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dayu.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dayu";

    /**
     * @var string
     */
    protected $version = "2018-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("dayu")."\\"."V20180709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

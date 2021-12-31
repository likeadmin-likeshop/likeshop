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

namespace TencentCloud\Gaap\V20180529;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gaap\V20180529\Models as Models;

/**
 * @method Models\AddRealServersResponse AddRealServers(Models\AddRealServersRequest $req) 添加源站(服务器)信息，支持IP或域名
 * @method Models\BindListenerRealServersResponse BindListenerRealServers(Models\BindListenerRealServersRequest $req) 本接口（BindListenerRealServers）用于TCP/UDP监听器绑定解绑源站。
注意：本接口会解绑之前绑定的源站，绑定本次调用所选择的源站。例如：原来绑定的源站为A，B，C，本次调用的选择绑定的源站为C，D，E，那么调用后所绑定的源站为C，D，E。
 * @method Models\BindRuleRealServersResponse BindRuleRealServers(Models\BindRuleRealServersRequest $req) 该接口用于7层监听器的转发规则绑定源站。注意：本接口会解绑之前绑定的源站，绑定本次调用所选择的源站。
 * @method Models\CheckProxyCreateResponse CheckProxyCreate(Models\CheckProxyCreateRequest $req) 本接口(CheckProxyCreate)用于查询能否创建指定配置的加速通道。
 * @method Models\CloseProxiesResponse CloseProxies(Models\CloseProxiesRequest $req) 本接口（CloseProxies）用于关闭通道。通道关闭后，不再产生流量，但每天仍然收取通道基础配置费用。
 * @method Models\CloseProxyGroupResponse CloseProxyGroup(Models\CloseProxyGroupRequest $req) 本接口（CloseProxyGroup）用于关闭通道组。通道组关闭后，不再产生流量，但每天仍然收取通道基础配置费用。
 * @method Models\CloseSecurityPolicyResponse CloseSecurityPolicy(Models\CloseSecurityPolicyRequest $req) 关闭安全策略
 * @method Models\CreateCertificateResponse CreateCertificate(Models\CreateCertificateRequest $req) 本接口（CreateCertificate）用于创建Gaap相关证书和配置文件，包括基础认证配置文件，客户端CA证书，服务器SSL证书，Gaap SSL证书以及源站CA证书。
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) 本接口（CreateDomain）用于创建HTTP/HTTPS监听器的访问域名，客户端请求通过访问该域名来请求后端业务。
该接口仅支持version3.0的通道。
 * @method Models\CreateDomainErrorPageInfoResponse CreateDomainErrorPageInfo(Models\CreateDomainErrorPageInfoRequest $req) 定制域名指定错误码的错误响应
 * @method Models\CreateHTTPListenerResponse CreateHTTPListener(Models\CreateHTTPListenerRequest $req) 该接口（CreateHTTPListener）用于在通道实例下创建HTTP协议类型的监听器。
 * @method Models\CreateHTTPSListenerResponse CreateHTTPSListener(Models\CreateHTTPSListenerRequest $req) 该接口（CreateHTTPSListener）用于在通道实例下创建HTTPS协议类型的监听器。
 * @method Models\CreateProxyResponse CreateProxy(Models\CreateProxyRequest $req) 本接口（CreateProxy）用于创建/复制一个指定配置的加速通道。当复制通道时，需要设置新通道的基本配置参数，并设置ClonedProxyId来指定被复制的通道。
 * @method Models\CreateProxyGroupResponse CreateProxyGroup(Models\CreateProxyGroupRequest $req) 本接口（CreateProxyGroup）用于创建通道组。
 * @method Models\CreateProxyGroupDomainResponse CreateProxyGroupDomain(Models\CreateProxyGroupDomainRequest $req) 本接口（CreateProxyGroupDomain）用于创建通道组域名，并开启域名解析。
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 该接口（CreateRule）用于创建HTTP/HTTPS监听器转发规则。
 * @method Models\CreateSecurityPolicyResponse CreateSecurityPolicy(Models\CreateSecurityPolicyRequest $req) 创建安全策略
 * @method Models\CreateSecurityRulesResponse CreateSecurityRules(Models\CreateSecurityRulesRequest $req) 添加安全策略规则
 * @method Models\CreateTCPListenersResponse CreateTCPListeners(Models\CreateTCPListenersRequest $req) 该接口（CreateTCPListeners）用于批量创建单通道或者通道组的TCP协议类型的监听器。
 * @method Models\CreateUDPListenersResponse CreateUDPListeners(Models\CreateUDPListenersRequest $req) 该接口（CreateUDPListeners）用于批量创建单通道或者通道组的UDP协议类型的监听器。
 * @method Models\DeleteCertificateResponse DeleteCertificate(Models\DeleteCertificateRequest $req) 本接口（DeleteCertificate）用于删除证书。
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 本接口（DeleteDomain）仅适用于7层监听器，用于删除该监听器下对应域名及域名下的所有规则，所有已绑定源站的规则将自动解绑。
 * @method Models\DeleteDomainErrorPageInfoResponse DeleteDomainErrorPageInfo(Models\DeleteDomainErrorPageInfoRequest $req) 删除域名的定制错误
 * @method Models\DeleteListenersResponse DeleteListeners(Models\DeleteListenersRequest $req) 该接口（DeleteListeners）用于批量删除通道或通道组的监听器，包括4/7层监听器。
 * @method Models\DeleteProxyGroupResponse DeleteProxyGroup(Models\DeleteProxyGroupRequest $req) 本接口（DeleteProxyGroup）用于删除通道组。
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 该接口（DeleteRule）用于删除HTTP/HTTPS监听器的转发规则。
 * @method Models\DeleteSecurityPolicyResponse DeleteSecurityPolicy(Models\DeleteSecurityPolicyRequest $req) 删除安全策略
 * @method Models\DeleteSecurityRulesResponse DeleteSecurityRules(Models\DeleteSecurityRulesRequest $req) 删除安全策略规则
 * @method Models\DescribeAccessRegionsResponse DescribeAccessRegions(Models\DescribeAccessRegionsRequest $req) 本接口（DescribeAccessRegions）用于查询加速区域，即客户端接入区域。
 * @method Models\DescribeAccessRegionsByDestRegionResponse DescribeAccessRegionsByDestRegion(Models\DescribeAccessRegionsByDestRegionRequest $req) 本接口（DescribeAccessRegionsByDestRegion）根据源站区域查询可用的加速区域列表
 * @method Models\DescribeCertificateDetailResponse DescribeCertificateDetail(Models\DescribeCertificateDetailRequest $req) 本接口（DescribeCertificateDetail）用于查询证书详情，包括证书ID，证书名字，证书类型，证书内容以及密钥等信息。
 * @method Models\DescribeCertificatesResponse DescribeCertificates(Models\DescribeCertificatesRequest $req) 本接口（DescribeCertificates）用来查询可以使用的证书列表。
 * @method Models\DescribeCountryAreaMappingResponse DescribeCountryAreaMapping(Models\DescribeCountryAreaMappingRequest $req) 本接口（DescribeCountryAreaMapping）用于获取国家地区编码映射表。
 * @method Models\DescribeDestRegionsResponse DescribeDestRegions(Models\DescribeDestRegionsRequest $req) 本接口（DescribeDestRegions）用于查询源站区域，即源站服务器所在区域。
 * @method Models\DescribeDomainErrorPageInfoResponse DescribeDomainErrorPageInfo(Models\DescribeDomainErrorPageInfoRequest $req) 查询目前定制域名的错误响应
 * @method Models\DescribeDomainErrorPageInfoByIdsResponse DescribeDomainErrorPageInfoByIds(Models\DescribeDomainErrorPageInfoByIdsRequest $req) 根据定制错误ID查询错误响应
 * @method Models\DescribeGroupAndStatisticsProxyResponse DescribeGroupAndStatisticsProxy(Models\DescribeGroupAndStatisticsProxyRequest $req) 该接口为内部接口，用于查询可以获取统计数据的通道组和通道信息
 * @method Models\DescribeGroupDomainConfigResponse DescribeGroupDomainConfig(Models\DescribeGroupDomainConfigRequest $req) 本接口（DescribeGroupDomainConfig）用于获取通道组域名解析配置详情。
 * @method Models\DescribeHTTPListenersResponse DescribeHTTPListeners(Models\DescribeHTTPListenersRequest $req) 该接口（DescribeHTTPListeners）用来查询HTTP监听器信息。
 * @method Models\DescribeHTTPSListenersResponse DescribeHTTPSListeners(Models\DescribeHTTPSListenersRequest $req) 本接口（DescribeHTTPSListeners）用来查询HTTPS监听器信息。
 * @method Models\DescribeListenerRealServersResponse DescribeListenerRealServers(Models\DescribeListenerRealServersRequest $req) 该接口（DescribeListenerRealServers）用于查询TCP/UDP监听器源站列表，包括该监听器已经绑定的源站列表以及可以绑定的源站列表。
 * @method Models\DescribeListenerStatisticsResponse DescribeListenerStatistics(Models\DescribeListenerStatisticsRequest $req) 该接口用于查询监听器统计数据，包括出入带宽，出入包量，并发数据。支持300秒, 3600秒和86400秒的细粒度，取值为细粒度范围内最大值。
 * @method Models\DescribeProxiesResponse DescribeProxies(Models\DescribeProxiesRequest $req) 本接口（DescribeProxies）用于查询通道实例列表。
 * @method Models\DescribeProxiesStatusResponse DescribeProxiesStatus(Models\DescribeProxiesStatusRequest $req) 本接口（DescribeProxiesStatus）用于查询通道状态列表。
 * @method Models\DescribeProxyAndStatisticsListenersResponse DescribeProxyAndStatisticsListeners(Models\DescribeProxyAndStatisticsListenersRequest $req) 该接口为内部接口，用于查询可以获取统计数据的通道和监听器信息
 * @method Models\DescribeProxyDetailResponse DescribeProxyDetail(Models\DescribeProxyDetailRequest $req) 本接口（DescribeProxyDetail）用于查询通道详情。
 * @method Models\DescribeProxyGroupDetailsResponse DescribeProxyGroupDetails(Models\DescribeProxyGroupDetailsRequest $req) 本接口（DescribeProxyGroupDetails）用于查询通道组详情。
 * @method Models\DescribeProxyGroupListResponse DescribeProxyGroupList(Models\DescribeProxyGroupListRequest $req) 本接口（DescribeProxyGroupList）用于拉取通道组列表及各通道组基本信息。
 * @method Models\DescribeProxyGroupStatisticsResponse DescribeProxyGroupStatistics(Models\DescribeProxyGroupStatisticsRequest $req) 该接口用于查询监听器统计数据，包括出入带宽，出入包量，并发数据。支持300, 3600和86400的细粒度，取值为细粒度范围内最大值。
 * @method Models\DescribeProxyStatisticsResponse DescribeProxyStatistics(Models\DescribeProxyStatisticsRequest $req) 该接口用于查询监听器统计数据，包括出入带宽，出入包量，并发，丢包和时延数据。支持300, 3600和86400的细粒度，取值为细粒度范围内最大值。
 * @method Models\DescribeRealServerStatisticsResponse DescribeRealServerStatistics(Models\DescribeRealServerStatisticsRequest $req) 该接口（DescribeRealServerStatistics）用于查询源站健康检查结果的统计数据。源站状态展示位为1：正常或者0：异常。查询的源站需要在监听器或者规则上进行了绑定，查询时需指定绑定的监听器或者规则ID。该接口支持1分钟细粒度的源站状态统计数据展示。
 * @method Models\DescribeRealServersResponse DescribeRealServers(Models\DescribeRealServersRequest $req) 本接口（DescribeRealServers）用于查询源站信息，可以根据项目名查询所有的源站信息，此外支持指定IP或者域名的源站模糊查询。
 * @method Models\DescribeRealServersStatusResponse DescribeRealServersStatus(Models\DescribeRealServersStatusRequest $req) 本接口（DescribeRealServersStatus）用于查询源站是否已被规则或者监听器绑定
 * @method Models\DescribeRegionAndPriceResponse DescribeRegionAndPrice(Models\DescribeRegionAndPriceRequest $req) 该接口（DescribeRegionAndPrice）用于获取源站区域和带宽梯度价格
 * @method Models\DescribeResourcesByTagResponse DescribeResourcesByTag(Models\DescribeResourcesByTagRequest $req) 本接口（DescribeResourcesByTag）用于根据标签来查询对应的资源信息，包括通道，通道组和源站。
 * @method Models\DescribeRuleRealServersResponse DescribeRuleRealServers(Models\DescribeRuleRealServersRequest $req) 本接口（DescribeRuleRealServers）用于查询转发规则相关的源站信息， 包括该规则可绑定的源站信息和已绑定的源站信息。
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 本接口（DescribeRules）用于查询监听器下的所有规则信息，包括规则域名，路径以及该规则下所绑定的源站列表。当通道版本为3.0时，该接口会返回该域名对应的高级认证配置信息。
 * @method Models\DescribeRulesByRuleIdsResponse DescribeRulesByRuleIds(Models\DescribeRulesByRuleIdsRequest $req) 本接口（DescribeRulesByRuleIds）用于根据规则ID拉取规则信息列表。支持一个或者多个规则信息的拉取。一次最多支持10个规则信息的拉取。
 * @method Models\DescribeSecurityPolicyDetailResponse DescribeSecurityPolicyDetail(Models\DescribeSecurityPolicyDetailRequest $req) 获取安全策略详情
 * @method Models\DescribeSecurityRulesResponse DescribeSecurityRules(Models\DescribeSecurityRulesRequest $req) 本接口（DescribeSecurityRules）用于根据安全规则ID查询安全规则详情列表。支持一个或多个安全规则的查询。一次最多支持20个安全规则的查询。
 * @method Models\DescribeTCPListenersResponse DescribeTCPListeners(Models\DescribeTCPListenersRequest $req) 该接口（DescribeTCPListeners）用于查询单通道或者通道组下的TCP监听器信息。
 * @method Models\DescribeUDPListenersResponse DescribeUDPListeners(Models\DescribeUDPListenersRequest $req) 该接口（DescribeUDPListeners）用于查询单通道或者通道组下的UDP监听器信息
 * @method Models\DestroyProxiesResponse DestroyProxies(Models\DestroyProxiesRequest $req) 本接口（DestroyProxies）用于销毁。通道销毁后，不再产生任何费用。
 * @method Models\InquiryPriceCreateProxyResponse InquiryPriceCreateProxy(Models\InquiryPriceCreateProxyRequest $req) 本接口（InquiryPriceCreateProxy）用于创建加速通道询价。
 * @method Models\ModifyCertificateResponse ModifyCertificate(Models\ModifyCertificateRequest $req) 本接口（ModifyCertificate）用于修改监听器下的域名对应的证书。该接口仅适用于version3.0的通道。
 * @method Models\ModifyCertificateAttributesResponse ModifyCertificateAttributes(Models\ModifyCertificateAttributesRequest $req) 本接口（ModifyCertificateAttributes）用于修改证书，包括证书名字以及证书内容。
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) 本接口（ModifyDomain）用于监听器下的域名。当通道版本为3.0时，支持对该域名所对应的证书修改。
 * @method Models\ModifyGroupDomainConfigResponse ModifyGroupDomainConfig(Models\ModifyGroupDomainConfigRequest $req) 本接口（ModifyGroupDomainConfig）用于配置通道组就近接入域名。
 * @method Models\ModifyHTTPListenerAttributeResponse ModifyHTTPListenerAttribute(Models\ModifyHTTPListenerAttributeRequest $req) 该接口（ModifyHTTPListenerAttribute）用于修改通道的HTTP监听器配置信息，目前仅支持修改监听器的名称。
注意：通道组通道暂时不支持HTTP/HTTPS监听器。
 * @method Models\ModifyHTTPSListenerAttributeResponse ModifyHTTPSListenerAttribute(Models\ModifyHTTPSListenerAttributeRequest $req) 该接口（ModifyHTTPSListenerAttribute）用于修改HTTPS监听器配置，当前不支持通道组和v1版本通道。
 * @method Models\ModifyProxiesAttributeResponse ModifyProxiesAttribute(Models\ModifyProxiesAttributeRequest $req) 本接口（ModifyProxiesAttribute）用于修改实例的属性（目前只支持修改通道的名称）。
 * @method Models\ModifyProxiesProjectResponse ModifyProxiesProject(Models\ModifyProxiesProjectRequest $req) 本接口（ModifyProxiesProject）用于修改通道所属项目。
 * @method Models\ModifyProxyConfigurationResponse ModifyProxyConfiguration(Models\ModifyProxyConfigurationRequest $req) 本接口（ModifyProxyConfiguration）用于修改通道的配置。根据当前业务的容量需求，扩容或缩容相关通道的配置。仅支持Scalarable为1的通道,Scalarable可通过接口DescribeProxies获取。
 * @method Models\ModifyProxyGroupAttributeResponse ModifyProxyGroupAttribute(Models\ModifyProxyGroupAttributeRequest $req) 本接口（ModifyProxyGroupAttribute）用于修改通道组属性，目前仅支持修改通道组名称。
 * @method Models\ModifyRealServerNameResponse ModifyRealServerName(Models\ModifyRealServerNameRequest $req) 本接口（ModifyRealServerName）用于修改源站的名称
 * @method Models\ModifyRuleAttributeResponse ModifyRuleAttribute(Models\ModifyRuleAttributeRequest $req) 本接口（ModifyRuleAttribute）用于修改转发规则的信息，包括健康检查的配置以及转发策略。
 * @method Models\ModifySecurityRuleResponse ModifySecurityRule(Models\ModifySecurityRuleRequest $req) 修改安全策略规则名
 * @method Models\ModifyTCPListenerAttributeResponse ModifyTCPListenerAttribute(Models\ModifyTCPListenerAttributeRequest $req) 本接口（ModifyTCPListenerAttribute）用于修改通道实例下TCP监听器配置，包括健康检查的配置，调度策略。
 * @method Models\ModifyUDPListenerAttributeResponse ModifyUDPListenerAttribute(Models\ModifyUDPListenerAttributeRequest $req) 本接口（ModifyUDPListenerAttribute）用于修改通道实例下UDP监听器配置，包括监听器名称和调度策略的修改。
 * @method Models\OpenProxiesResponse OpenProxies(Models\OpenProxiesRequest $req) 该接口（OpenProxies）用于开启一条或者多条通道。
 * @method Models\OpenProxyGroupResponse OpenProxyGroup(Models\OpenProxyGroupRequest $req) 该接口（OpenProxyGroup）用于开启一条通道组中的所有通道
 * @method Models\OpenSecurityPolicyResponse OpenSecurityPolicy(Models\OpenSecurityPolicyRequest $req) 开启安全策略
 * @method Models\RemoveRealServersResponse RemoveRealServers(Models\RemoveRealServersRequest $req) 删除已添加的源站(服务器)IP或域名
 * @method Models\SetAuthenticationResponse SetAuthentication(Models\SetAuthenticationRequest $req) 本接口（SetAuthentication）用于通道的高级认证配置，包括认证方式选择，以及各种认证方式对应的证书选择。仅支持Version3.0的通道。
 */

class GaapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gaap.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gaap";

    /**
     * @var string
     */
    protected $version = "2018-05-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("gaap")."\\"."V20180529\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

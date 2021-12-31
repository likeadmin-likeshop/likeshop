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

namespace TencentCloud\Ecdn\V20191012;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecdn\V20191012\Models as Models;

/**
 * @method Models\AddEcdnDomainResponse AddEcdnDomain(Models\AddEcdnDomainRequest $req) 本接口（AddEcdnDomain）用于创建加速域名。
 * @method Models\CreateVerifyRecordResponse CreateVerifyRecord(Models\CreateVerifyRecordRequest $req) 生成一条子域名解析，提示客户添加到域名解析上，用于泛域名及域名取回校验归属权
 * @method Models\DeleteEcdnDomainResponse DeleteEcdnDomain(Models\DeleteEcdnDomainRequest $req) 本接口（DeleteEcdnDomain）用于删除指定加速域名。待删除域名必须处于已停用状态。
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) 本接口（DescribeDomains）用于查询CDN域名基本信息，包括项目id，状态，业务类型，创建时间，更新时间等。
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) 本接口（DescribeDomainsConfig）用于查询CDN加速域名详细配置信息。
 * @method Models\DescribeEcdnDomainLogsResponse DescribeEcdnDomainLogs(Models\DescribeEcdnDomainLogsRequest $req) 本接口（DescribeEcdnDomainLogs）用于查询域名的访问日志下载地址。
 * @method Models\DescribeEcdnDomainStatisticsResponse DescribeEcdnDomainStatistics(Models\DescribeEcdnDomainStatisticsRequest $req) 本接口（DescribeEcdnDomainStatistics）用于查询指定时间段内的域名访问统计指标
 * @method Models\DescribeEcdnStatisticsResponse DescribeEcdnStatistics(Models\DescribeEcdnStatisticsRequest $req) DescribeEcdnStatistics用于查询 ECDN 实时访问监控数据，支持以下指标查询：

+ 流量（单位为 byte）
+ 带宽（单位为 bps）
+ 请求数（单位为 次）
+ 状态码 2xx 汇总及各 2 开头状态码明细（单位为 个）
+ 状态码 3xx 汇总及各 3 开头状态码明细（单位为 个）
+ 状态码 4xx 汇总及各 4 开头状态码明细（单位为 个）
+ 状态码 5xx 汇总及各 5 开头状态码明细（单位为 个）
 * @method Models\DescribeIpStatusResponse DescribeIpStatus(Models\DescribeIpStatusRequest $req) DescribeIpStatus 用于查询域名所在加速平台的所有节点信息, 如果您的源站有白名单设置,可以通过本接口获取ECDN服务的节点IP进行加白, 本接口为内测接口,请联系腾讯云工程师开白。

由于产品服务节点常有更新，对于源站开白的使用场景，请定期调用接口获取最新节点信息，若新增服务节点发布7日后您尚未更新加白导致回源失败等问题，ECDN侧不对此承担责任。
 * @method Models\DescribePurgeQuotaResponse DescribePurgeQuota(Models\DescribePurgeQuotaRequest $req) 查询刷新接口的用量配额。
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) DescribePurgeTasks 用于查询刷新任务提交历史记录及执行进度。
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) PurgePathCache 用于批量刷新目录缓存，一次提交将返回一个刷新任务id。
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) PurgeUrlsCache 用于批量刷新Url，一次提交将返回一个刷新任务id。
 * @method Models\StartEcdnDomainResponse StartEcdnDomain(Models\StartEcdnDomainRequest $req) 本接口（StartEcdnDomain）用于启用加速域名，待启用域名必须处于已下线状态。
 * @method Models\StopEcdnDomainResponse StopEcdnDomain(Models\StopEcdnDomainRequest $req) 本接口（StopCdnDomain）用于停止加速域名，待停用加速域名必须处于已上线或部署中状态。
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) 本接口（UpdateDomainConfig）用于更新ECDN加速域名配置信息。
注意：如果需要更新复杂类型的配置项，必须传递整个对象的所有属性，未传递的属性将使用默认值。建议通过查询接口获取配置属性后，直接修改后传递给本接口。Https配置由于证书的特殊性，更新时不用传递证书和密钥字段。
 */

class EcdnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecdn.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ecdn";

    /**
     * @var string
     */
    protected $version = "2019-10-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecdn")."\\"."V20191012\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

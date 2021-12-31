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

namespace TencentCloud\Apigateway\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apigateway\V20180808\Models as Models;

/**
 * @method Models\BindEnvironmentResponse BindEnvironment(Models\BindEnvironmentRequest $req) 本接口（BindEnvironment）用于绑定使用计划到服务或API。
用户在发布服务到某个环境中后，如果 API 需要鉴权，还需要绑定使用计划才能进行调用，此接口用户将使用计划绑定到特定环境。
目前支持绑定使用计划到API，但是同一个服务不能同时存在绑定到服务的使用计划和绑定到API的使用计划，所以对已经绑定过服务级别使用计划的环境，请先使用 服务级别使用计划降级 接口进行降级操作。
 * @method Models\BindIPStrategyResponse BindIPStrategy(Models\BindIPStrategyRequest $req) 本接口（BindIPStrategy）用于API绑定IP策略。
 * @method Models\BindSecretIdsResponse BindSecretIds(Models\BindSecretIdsRequest $req) 本接口（BindSecretIds）用于为使用计划绑定密钥。
将密钥绑定到某个使用计划，并将此使用计划绑定到某个服务发布的环境上，调用者方可使用此密钥调用这个服务中的 API，可使用本接口为使用计划绑定密钥。
 * @method Models\BindSubDomainResponse BindSubDomain(Models\BindSubDomainRequest $req) 本接口（BindSubDomain）用于绑定自定义域名到服务。
API 网关中每个服务都会提供一个默认的域名供用户调用，但当用户想使用自己的已有域名时，也可以将自定义域名绑定到此服务，在做好备案、与默认域名的 CNAME 后，可直接调用自定义域名。
 * @method Models\BuildAPIDocResponse BuildAPIDoc(Models\BuildAPIDocRequest $req) 构建 API 文档
 * @method Models\CreateAPIDocResponse CreateAPIDoc(Models\CreateAPIDocRequest $req) 创建 API 文档
 * @method Models\CreateApiResponse CreateApi(Models\CreateApiRequest $req) 本接口（CreateApi）用于创建 API 接口，创建 API 前，用户需要先创建服务，每个 API 都有自己归属的服务。
 * @method Models\CreateApiKeyResponse CreateApiKey(Models\CreateApiKeyRequest $req) 本接口（CreateApiKey）用于创建一对新的 API 密钥。
 * @method Models\CreateIPStrategyResponse CreateIPStrategy(Models\CreateIPStrategyRequest $req) 本接口（CreateIPStrategy）用于创建服务IP策略。
 * @method Models\CreateServiceResponse CreateService(Models\CreateServiceRequest $req) 本接口（CreateService）用于创建服务。
API 网关使用的最大单元为服务，每个服务中可创建多个 API 接口。每个服务有一个默认域名供客户调用，用户也可绑定自定义域名到此服务中。
 * @method Models\CreateUsagePlanResponse CreateUsagePlan(Models\CreateUsagePlanRequest $req) 本接口（CreateUsagePlan）用于创建使用计划。
用户在使用 API 网关时，需要创建使用计划并将其绑定到服务的环境中使用。
 * @method Models\DeleteAPIDocResponse DeleteAPIDoc(Models\DeleteAPIDocRequest $req) 删除 API 文档
 * @method Models\DeleteApiResponse DeleteApi(Models\DeleteApiRequest $req) 本接口（DeleteApi）用于删除已经创建的API。
 * @method Models\DeleteApiKeyResponse DeleteApiKey(Models\DeleteApiKeyRequest $req) 本接口（DeleteApiKey）用于删除一对 API 密钥。
 * @method Models\DeleteIPStrategyResponse DeleteIPStrategy(Models\DeleteIPStrategyRequest $req) 本接口（DeleteIPStrategy）用于删除服务IP策略。
 * @method Models\DeleteServiceResponse DeleteService(Models\DeleteServiceRequest $req) 本接口（DeleteService）用于删除 API 网关中某个服务。
 * @method Models\DeleteServiceSubDomainMappingResponse DeleteServiceSubDomainMapping(Models\DeleteServiceSubDomainMappingRequest $req) 本接口（DeleteServiceSubDomainMapping）用于删除服务中某个环境的自定义域名映射。
当用户使用自定义域名，并使用了自定义映射时，可使用此接口。但需注意，若删除了所有环境的映射时，调用此 API 均会返回失败。
 * @method Models\DeleteUsagePlanResponse DeleteUsagePlan(Models\DeleteUsagePlanRequest $req) 本接口（DeleteUsagePlan）用于删除使用计划。
 * @method Models\DemoteServiceUsagePlanResponse DemoteServiceUsagePlan(Models\DemoteServiceUsagePlanRequest $req) 本接口（DemoteServiceUsagePlan）用于将某个服务在某个环境的使用计划，降级到API上。
如果服务内没有API不允许进行此操作。
如果当前环境没有发布，不允许进行此操作。
 * @method Models\DescribeAPIDocDetailResponse DescribeAPIDocDetail(Models\DescribeAPIDocDetailRequest $req) 查询 API 文档详情
 * @method Models\DescribeAPIDocsResponse DescribeAPIDocs(Models\DescribeAPIDocsRequest $req) 查询 API 文档列表
 * @method Models\DescribeApiResponse DescribeApi(Models\DescribeApiRequest $req) 本接口（DescribeApi）用于查询用户 API 网关的 API 接口的详细信息。​
 * @method Models\DescribeApiEnvironmentStrategyResponse DescribeApiEnvironmentStrategy(Models\DescribeApiEnvironmentStrategyRequest $req) 本接口（DescribeApiEnvironmentStrategy）用于展示API绑定的限流策略。
 * @method Models\DescribeApiKeyResponse DescribeApiKey(Models\DescribeApiKeyRequest $req) 本接口（DescribeApiKey）用于查询密钥详情。
用户在创建密钥后，可用此接口查询一个 API 密钥的详情，该接口会显示密钥 Key。
 * @method Models\DescribeApiKeysStatusResponse DescribeApiKeysStatus(Models\DescribeApiKeysStatusRequest $req) 本接口（DescribeApiKeysStatus）用于查询密钥列表。
当用户创建了多个密钥对时，可使用本接口查询一个或多个 API 密钥信息，本接口不会显示密钥 Key。
 * @method Models\DescribeApiUsagePlanResponse DescribeApiUsagePlan(Models\DescribeApiUsagePlanRequest $req) 本接口（DescribeApiUsagePlan）用于查询服务中 API 使用计划详情。
服务若需要鉴权限流生效，则需要绑定使用计划到此服务中，本接口用于查询绑定到一个服务及其中 API 的所有使用计划。
 * @method Models\DescribeApisStatusResponse DescribeApisStatus(Models\DescribeApisStatusRequest $req) 本接口（DescribeApisStatus）用于查看一个服务下的某个 API 或所有 API 列表及其相关信息。
 * @method Models\DescribeIPStrategyResponse DescribeIPStrategy(Models\DescribeIPStrategyRequest $req) 本接口（DescribeIPStrategy）用于查询IP策略详情。
 * @method Models\DescribeIPStrategyApisStatusResponse DescribeIPStrategyApisStatus(Models\DescribeIPStrategyApisStatusRequest $req) 本接口（DescribeIPStrategyApisStatus）用于查询IP策略可以绑定的API列表。即服务下所有API和该策略已绑定API的差集。
 * @method Models\DescribeIPStrategysStatusResponse DescribeIPStrategysStatus(Models\DescribeIPStrategysStatusRequest $req) 本接口（DescribeIPStrategysStatus）用于查询服务IP策略列表。
 * @method Models\DescribeLogSearchResponse DescribeLogSearch(Models\DescribeLogSearchRequest $req) 本接口DescribeLogSearch用于搜索日志
 * @method Models\DescribePluginsResponse DescribePlugins(Models\DescribePluginsRequest $req) 展示插件列表和详情，支持分页，支持按照插件类型查询，支持按照插件ID批量查询，支持按照插件名称查询。
 * @method Models\DescribeServiceResponse DescribeService(Models\DescribeServiceRequest $req) 本接口（DescribeService）用于查询一个服务的详细信息、包括服务的描述、域名、协议、创建时间、发布情况等信息。
 * @method Models\DescribeServiceEnvironmentListResponse DescribeServiceEnvironmentList(Models\DescribeServiceEnvironmentListRequest $req) 本接口（DescribeServiceEnvironmentList）用于查询一个服务的环境列表，可查询到此服务下所有环境及其状态。
 * @method Models\DescribeServiceEnvironmentReleaseHistoryResponse DescribeServiceEnvironmentReleaseHistory(Models\DescribeServiceEnvironmentReleaseHistoryRequest $req) 本接口（DescribeServiceEnvironmentReleaseHistory）用于查询服务环境的发布历史。
用户在创建好服务后需要发布到某个环境中才能进行使用，本接口用于查询一个服务某个环境的发布记录。
 * @method Models\DescribeServiceEnvironmentStrategyResponse DescribeServiceEnvironmentStrategy(Models\DescribeServiceEnvironmentStrategyRequest $req) 本接口（DescribeServiceEnvironmentStrategy）用于展示服务限流策略。
 * @method Models\DescribeServiceReleaseVersionResponse DescribeServiceReleaseVersion(Models\DescribeServiceReleaseVersionRequest $req) 本接口（DescribeServiceReleaseVersion）查询一个服务下面所有已经发布的版本列表。
用户在发布服务时，常有多个版本发布，可使用本接口查询已发布的版本。
 * @method Models\DescribeServiceSubDomainMappingsResponse DescribeServiceSubDomainMappings(Models\DescribeServiceSubDomainMappingsRequest $req) 本接口（DescribeServiceSubDomainMappings）用于查询自定义域名的路径映射。
API 网关可绑定自定义域名到服务，并且可以对自定义域名的路径进行映射，可自定义不同的路径映射到服务中的三个环境，本接口用于查询绑定服务的自定义域名的路径映射列表。
 * @method Models\DescribeServiceSubDomainsResponse DescribeServiceSubDomains(Models\DescribeServiceSubDomainsRequest $req) 本接口（DescribeServiceSubDomains）用于查询自定义域名列表。
API 网关可绑定自定义域名到服务，用于服务调用。此接口用于查询用户绑定在服务的自定义域名列表。
 * @method Models\DescribeServiceUsagePlanResponse DescribeServiceUsagePlan(Models\DescribeServiceUsagePlanRequest $req) 本接口（DescribeServiceUsagePlan）用于查询服务使用计划详情。
服务若需要鉴权限流生效，则需要绑定使用计划到此服务中，本接口用于查询绑定到一个服务的所有使用计划。
 * @method Models\DescribeServicesStatusResponse DescribeServicesStatus(Models\DescribeServicesStatusRequest $req) 本接口（DescribeServicesStatus）用于搜索查询某一个服务或多个服务的列表，并返回服务相关的域名、时间等信息。
 * @method Models\DescribeUsagePlanResponse DescribeUsagePlan(Models\DescribeUsagePlanRequest $req) 本接口（DescribeUsagePlan）用于查询一个使用计划的详细信息，包括名称、QPS、创建时间绑定的环境等。
 * @method Models\DescribeUsagePlanEnvironmentsResponse DescribeUsagePlanEnvironments(Models\DescribeUsagePlanEnvironmentsRequest $req) 本接口（DescribeUsagePlanEnvironments）用于查询使用计划绑定的环境列表。
用户在绑定了某个使用计划到环境后，可使用本接口查询这个使用计划绑定的所有服务的环境。
 * @method Models\DescribeUsagePlanSecretIdsResponse DescribeUsagePlanSecretIds(Models\DescribeUsagePlanSecretIdsRequest $req) 本接口（DescribeUsagePlanSecretIds）用于查询使用计划绑定的密钥列表。
在 API 网关中，一个使用计划可绑定多个密钥对，可使用本接口查询使用计划绑定的密钥列表。
 * @method Models\DescribeUsagePlansStatusResponse DescribeUsagePlansStatus(Models\DescribeUsagePlansStatusRequest $req) 本接口（DescribeUsagePlanStatus）用于查询使用计划的列表。
 * @method Models\DisableApiKeyResponse DisableApiKey(Models\DisableApiKeyRequest $req) 本接口（DisableApiKey）用于禁用一对 API 密钥。
 * @method Models\EnableApiKeyResponse EnableApiKey(Models\EnableApiKeyRequest $req) 本接口（EnableApiKey）用于启动一对被禁用的 API 密钥。
 * @method Models\GenerateApiDocumentResponse GenerateApiDocument(Models\GenerateApiDocumentRequest $req) 本接口（GenerateApiDocument）用于自动生成 API 文档和 SDK，一个服务的一个环境生成一份文档和 SDK。
 * @method Models\ModifyAPIDocResponse ModifyAPIDoc(Models\ModifyAPIDocRequest $req) 修改 API 文档
 * @method Models\ModifyApiResponse ModifyApi(Models\ModifyApiRequest $req) 本接口（ModifyApi）用于修改 API 接口，可调用此接口对已经配置的 API 接口进行编辑修改。修改后的 API 需要重新发布 API 所在的服务到对应环境方能生效。
 * @method Models\ModifyApiEnvironmentStrategyResponse ModifyApiEnvironmentStrategy(Models\ModifyApiEnvironmentStrategyRequest $req) 本接口（ModifyApiEnvironmentStrategy）用于修改API限流策略
 * @method Models\ModifyApiIncrementResponse ModifyApiIncrement(Models\ModifyApiIncrementRequest $req) 提供增量更新API能力，主要是给程序调用（区别于ModifyApi，该接口是需要传入API的全量参数，对console使用较友好）
 * @method Models\ModifyIPStrategyResponse ModifyIPStrategy(Models\ModifyIPStrategyRequest $req) 本接口（ModifyIPStrategy）用于修改服务IP策略。
 * @method Models\ModifyServiceResponse ModifyService(Models\ModifyServiceRequest $req) 本接口（ModifyService）用于修改服务的相关信息。当服务创建后，服务的名称、描述和服务类型均可被修改。
 * @method Models\ModifyServiceEnvironmentStrategyResponse ModifyServiceEnvironmentStrategy(Models\ModifyServiceEnvironmentStrategyRequest $req) 本接口（ModifyServiceEnvironmentStrategy）用于修改服务限流策略
 * @method Models\ModifySubDomainResponse ModifySubDomain(Models\ModifySubDomainRequest $req) 本接口（ModifySubDomain）用于修改服务的自定义域名设置中的路径映射，可以修改绑定自定义域名之前的路径映射规则。
 * @method Models\ModifyUsagePlanResponse ModifyUsagePlan(Models\ModifyUsagePlanRequest $req) 本接口（ModifyUsagePlan）用于修改使用计划的名称，描述及 QPS。
 * @method Models\ReleaseServiceResponse ReleaseService(Models\ReleaseServiceRequest $req) 本接口（ReleaseService）用于发布服务。
API 网关的服务创建后，需要发布到某个环境方生效后，使用者才能进行调用，此接口用于发布服务到环境，如 release 环境。
 * @method Models\ResetAPIDocPasswordResponse ResetAPIDocPassword(Models\ResetAPIDocPasswordRequest $req) 重置API文档密码
 * @method Models\UnBindEnvironmentResponse UnBindEnvironment(Models\UnBindEnvironmentRequest $req) 本接口（UnBindEnvironment）用于将使用计划从特定环境解绑。
 * @method Models\UnBindIPStrategyResponse UnBindIPStrategy(Models\UnBindIPStrategyRequest $req) 本接口（UnBindIPStrategy）用于服务解绑IP策略。
 * @method Models\UnBindSecretIdsResponse UnBindSecretIds(Models\UnBindSecretIdsRequest $req) 本接口（UnBindSecretIds）用于为使用计划解绑密钥。
 * @method Models\UnBindSubDomainResponse UnBindSubDomain(Models\UnBindSubDomainRequest $req) 本接口（UnBindSubDomain）用于解绑自定义域名。
用户使用 API 网关绑定了自定义域名到服务中后，若想要解绑此自定义域名，可使用此接口。
 * @method Models\UnReleaseServiceResponse UnReleaseService(Models\UnReleaseServiceRequest $req) 本接口（UnReleaseService）用于下线服务。
用户发布服务到某个环境后，此服务中的 API 方可被调用者进行调用，当用户需要将此服务从发布环境中下线时，可调用此 API。下线后的服务不可被调用。
 * @method Models\UpdateApiKeyResponse UpdateApiKey(Models\UpdateApiKeyRequest $req) 本接口（UpdateApiKey）用于更换用户已创建的一对 API 密钥。
 * @method Models\UpdateServiceResponse UpdateService(Models\UpdateServiceRequest $req) 本接口（UpdateService）用于从服务发布的环境中运行版本切换到特定版本。用户在使用 API 网关创建服务并发布服务到某个环境后，多因为开发过程会产生多个版本，此时可调用本接口。
 */

class ApigatewayClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apigateway.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apigateway";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("apigateway")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

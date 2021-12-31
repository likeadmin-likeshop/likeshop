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

namespace TencentCloud\Scf\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Scf\V20180416\Models as Models;

/**
 * @method Models\CopyFunctionResponse CopyFunction(Models\CopyFunctionRequest $req) 复制一个函数，您可以选择将复制出的新函数放置在特定的Region和Namespace。
注：本接口**不会**复制函数的以下对象或属性：
1. 函数的触发器
2. 除了$LATEST以外的其它版本
3. 函数配置的日志投递到的CLS目标。

如有需要，您可以在复制后手动配置新函数。
 * @method Models\CreateAliasResponse CreateAlias(Models\CreateAliasRequest $req) 为某个函数版本创建一个别名，您可以使用别名来标记特定的函数版本，如DEV/RELEASE版本，也可以随时修改别名指向的版本。
一个别名必须指向一个主版本，此外还可以同时指向一个附加版本。调用函数时指定特定的别名，则请求会被发送到别名指向的版本上，您可以配置请求发送到主版本和附加版本的比例。
 * @method Models\CreateFunctionResponse CreateFunction(Models\CreateFunctionRequest $req) 该接口根据传入参数创建新的函数。
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) 该接口根据传入的参数创建命名空间。
 * @method Models\CreateTriggerResponse CreateTrigger(Models\CreateTriggerRequest $req) 该接口根据参数输入设置新的触发方式。
 * @method Models\DeleteAliasResponse DeleteAlias(Models\DeleteAliasRequest $req) 删除一个函数版本的别名
 * @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) 该接口根据传入参数删除函数。
 * @method Models\DeleteLayerVersionResponse DeleteLayerVersion(Models\DeleteLayerVersionRequest $req) 删除指定层的指定版本，被删除的版本无法再关联到函数上，但不会影响正在引用这个层的函数。
 * @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) 该接口根据传入的参数删除命名空间。
 * @method Models\DeleteProvisionedConcurrencyConfigResponse DeleteProvisionedConcurrencyConfig(Models\DeleteProvisionedConcurrencyConfigRequest $req) 删除函数版本的预置并发配置。
 * @method Models\DeleteReservedConcurrencyConfigResponse DeleteReservedConcurrencyConfig(Models\DeleteReservedConcurrencyConfigRequest $req) 删除函数的保留并发配置。
 * @method Models\DeleteTriggerResponse DeleteTrigger(Models\DeleteTriggerRequest $req) 该接口根据参数传入删除已有的触发方式。
 * @method Models\GetAccountResponse GetAccount(Models\GetAccountRequest $req) 获取账户信息
 * @method Models\GetAliasResponse GetAlias(Models\GetAliasRequest $req) 获取别名的详细信息，包括名称、描述、版本、路由信息等。
 * @method Models\GetFunctionResponse GetFunction(Models\GetFunctionRequest $req) 该接口获取某个函数的详细信息，包括名称、代码、处理方法、关联触发器和超时时间等字段。
 * @method Models\GetFunctionAddressResponse GetFunctionAddress(Models\GetFunctionAddressRequest $req) 该接口用于获取函数代码包的下载地址。
 * @method Models\GetFunctionEventInvokeConfigResponse GetFunctionEventInvokeConfig(Models\GetFunctionEventInvokeConfigRequest $req) 获取函数异步重试配置，包括重试次数和消息保留时间
 * @method Models\GetFunctionLogsResponse GetFunctionLogs(Models\GetFunctionLogsRequest $req) 该接口根据指定的日志查询条件返回函数运行日志。
 * @method Models\GetLayerVersionResponse GetLayerVersion(Models\GetLayerVersionRequest $req) 获取层版本详细信息，包括用于下载层中文件的链接。
 * @method Models\GetProvisionedConcurrencyConfigResponse GetProvisionedConcurrencyConfig(Models\GetProvisionedConcurrencyConfigRequest $req) 获取函数或函数某一版本的预置并发详情。
 * @method Models\GetReservedConcurrencyConfigResponse GetReservedConcurrencyConfig(Models\GetReservedConcurrencyConfigRequest $req) 获取函数的保留并发详情。
 * @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) 该接口用于运行函数。
 * @method Models\ListAliasesResponse ListAliases(Models\ListAliasesRequest $req) 返回一个函数下的全部别名，可以根据特定函数版本过滤。
 * @method Models\ListAsyncEventsResponse ListAsyncEvents(Models\ListAsyncEventsRequest $req) 拉取函数异步事件列表
 * @method Models\ListFunctionsResponse ListFunctions(Models\ListFunctionsRequest $req) 该接口根据传入的查询参数返回相关函数信息。
 * @method Models\ListLayerVersionsResponse ListLayerVersions(Models\ListLayerVersionsRequest $req) 返回指定层的全部版本的信息
 * @method Models\ListLayersResponse ListLayers(Models\ListLayersRequest $req) 返回全部层的列表，其中包含了每个层最新版本的信息，可以通过适配运行时进行过滤。
 * @method Models\ListNamespacesResponse ListNamespaces(Models\ListNamespacesRequest $req) 列出命名空间列表
 * @method Models\ListTriggersResponse ListTriggers(Models\ListTriggersRequest $req) 获取函数触发器列表
 * @method Models\ListVersionByFunctionResponse ListVersionByFunction(Models\ListVersionByFunctionRequest $req) 该接口根据传入的参数查询函数的版本。
 * @method Models\PublishLayerVersionResponse PublishLayerVersion(Models\PublishLayerVersionRequest $req) 使用给定的zip文件或cos对象创建一个层的新版本，每次使用相同的层的名称调用本接口，都会生成一个新版本。
 * @method Models\PublishVersionResponse PublishVersion(Models\PublishVersionRequest $req) 该接口用于用户发布新版本函数。
 * @method Models\PutProvisionedConcurrencyConfigResponse PutProvisionedConcurrencyConfig(Models\PutProvisionedConcurrencyConfigRequest $req) 设置函数某一非$LATEST版本的预置并发。
 * @method Models\PutReservedConcurrencyConfigResponse PutReservedConcurrencyConfig(Models\PutReservedConcurrencyConfigRequest $req) 设置函数保留并发
 * @method Models\PutTotalConcurrencyConfigResponse PutTotalConcurrencyConfig(Models\PutTotalConcurrencyConfigRequest $req) 修改账号并发限制配额
 * @method Models\TerminateAsyncEventResponse TerminateAsyncEvent(Models\TerminateAsyncEventRequest $req) 终止正在运行中的函数异步事件
 * @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) 更新别名的配置
 * @method Models\UpdateFunctionCodeResponse UpdateFunctionCode(Models\UpdateFunctionCodeRequest $req) 该接口根据传入参数更新函数代码。
 * @method Models\UpdateFunctionConfigurationResponse UpdateFunctionConfiguration(Models\UpdateFunctionConfigurationRequest $req) 该接口根据传入参数更新函数配置。
 * @method Models\UpdateFunctionEventInvokeConfigResponse UpdateFunctionEventInvokeConfig(Models\UpdateFunctionEventInvokeConfigRequest $req) 更新函数的异步重试配置，包括重试次数和消息保留时间
 * @method Models\UpdateNamespaceResponse UpdateNamespace(Models\UpdateNamespaceRequest $req) 更新命名空间
 */

class ScfClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "scf.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "scf";

    /**
     * @var string
     */
    protected $version = "2018-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("scf")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

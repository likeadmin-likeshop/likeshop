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

namespace TencentCloud\Ssm\V20190923;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssm\V20190923\Models as Models;

/**
 * @method Models\CreateSecretResponse CreateSecret(Models\CreateSecretRequest $req) 创建新的凭据信息，通过KMS进行加密保护。每个Region最多可创建存储1000个凭据信息。
 * @method Models\DeleteSecretResponse DeleteSecret(Models\DeleteSecretRequest $req) 删除指定的凭据信息，可以通过RecoveryWindowInDays参数设置立即删除或者计划删除。对于计划删除的凭据，在删除日期到达之前状态为 PendingDelete，并可以通过RestoreSecret 进行恢复，超出指定删除日期之后会被彻底删除。您必须先通过 DisableSecret 停用凭据后才可以进行（计划）删除操作。
 * @method Models\DeleteSecretVersionResponse DeleteSecretVersion(Models\DeleteSecretVersionRequest $req) 该接口用于直接删除指定凭据下的单个版本凭据，删除操作立即生效，对所有状态下的凭据版本都可以删除。
 * @method Models\DescribeSecretResponse DescribeSecret(Models\DescribeSecretRequest $req) 获取凭据的详细属性信息。
 * @method Models\DisableSecretResponse DisableSecret(Models\DisableSecretRequest $req) 停用指定的凭据，停用后状态为 Disabled，无法通过接口获取该凭据的明文。
 * @method Models\EnableSecretResponse EnableSecret(Models\EnableSecretRequest $req) 该接口用于开启凭据，状态为Enabled。可以通过 GetSecretValue 接口获取凭据明文。处于PendingDelete状态的凭据不能直接开启，需要通过RestoreSecret 恢复后再开启使用。
 * @method Models\GetRegionsResponse GetRegions(Models\GetRegionsRequest $req) 获取控制台展示region列表
 * @method Models\GetSecretValueResponse GetSecretValue(Models\GetSecretValueRequest $req) 获取指定凭据名称和版本的凭据明文信息，只能获取启用状态的凭据明文。
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) 该接口用户获取用户SecretsManager服务开通状态。
 * @method Models\ListSecretVersionIdsResponse ListSecretVersionIds(Models\ListSecretVersionIdsRequest $req) 该接口用于获取指定凭据下的版本列表信息
 * @method Models\ListSecretsResponse ListSecrets(Models\ListSecretsRequest $req) 该接口用于获取所有凭据的详细列表，可以指定过滤字段、排序方式等。
 * @method Models\PutSecretValueResponse PutSecretValue(Models\PutSecretValueRequest $req) 该接口在指定名称的凭据下增加新版本的凭据内容，一个凭据下最多可以支持10个版本。只能对处于Enabled 和 Disabled 状态的凭据添加新的版本。
 * @method Models\RestoreSecretResponse RestoreSecret(Models\RestoreSecretRequest $req) 该接口用于恢复计划删除（PendingDelete状态）中的凭据，取消计划删除。取消计划删除的凭据将处于Disabled 状态，如需恢复使用，通过EnableSecret 接口开启凭据。
 * @method Models\UpdateDescriptionResponse UpdateDescription(Models\UpdateDescriptionRequest $req) 该接口用于修改指定凭据的描述信息，仅能修改Enabled 和 Disabled 状态的凭据。
 * @method Models\UpdateSecretResponse UpdateSecret(Models\UpdateSecretRequest $req) 该接口用于更新指定凭据名称和版本号的内容，调用该接口会对新的凭据内容加密后覆盖旧的内容。仅允许更新Enabled 和 Disabled 状态的凭据。
 */

class SsmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssm";

    /**
     * @var string
     */
    protected $version = "2019-09-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("ssm")."\\"."V20190923\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

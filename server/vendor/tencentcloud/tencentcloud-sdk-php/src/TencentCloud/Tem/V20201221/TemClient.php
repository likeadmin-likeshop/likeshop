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

namespace TencentCloud\Tem\V20201221;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tem\V20201221\Models as Models;

/**
 * @method Models\CreateCosTokenResponse CreateCosToken(Models\CreateCosTokenRequest $req) 生成Cos临时秘钥
 * @method Models\CreateCosTokenV2Response CreateCosTokenV2(Models\CreateCosTokenV2Request $req) 生成Cos临时秘钥
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) 创建环境
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) 绑定云资源
 * @method Models\CreateServiceV2Response CreateServiceV2(Models\CreateServiceV2Request $req) 创建服务
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) 删除 Ingress 规则
 * @method Models\DeployServiceV2Response DeployServiceV2(Models\DeployServiceV2Request $req) 服务部署
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) 查询 Ingress 规则
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) 查询 Ingress 规则列表
 * @method Models\DescribeNamespacesResponse DescribeNamespaces(Models\DescribeNamespacesRequest $req) 获取租户环境列表
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) 查询服务关联的 Ingress 规则列表
 * @method Models\DescribeServiceRunPodListV2Response DescribeServiceRunPodListV2(Models\DescribeServiceRunPodListV2Request $req) 获取服务下面运行pod列表
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) 创建或者更新 Ingress 规则
 * @method Models\ModifyNamespaceResponse ModifyNamespace(Models\ModifyNamespaceRequest $req) 编辑环境
 * @method Models\ModifyServiceInfoResponse ModifyServiceInfo(Models\ModifyServiceInfoRequest $req) 修改服务基本信息
 * @method Models\RestartServiceRunPodResponse RestartServiceRunPod(Models\RestartServiceRunPodRequest $req) 重启实例
 */

class TemClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tem.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tem";

    /**
     * @var string
     */
    protected $version = "2020-12-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("tem")."\\"."V20201221\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

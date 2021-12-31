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

namespace TencentCloud\Es\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Es\V20180416\Models as Models;

/**
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建指定规格的ES集群实例
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 销毁集群实例 
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) 查询用户该地域下符合条件的ES集群的日志
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) 查询实例指定条件下的操作记录
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询用户该地域下符合条件的所有实例
 * @method Models\DiagnoseInstanceResponse DiagnoseInstance(Models\DiagnoseInstanceRequest $req) 智能运维诊断集群
 * @method Models\GetRequestTargetNodeTypesResponse GetRequestTargetNodeTypes(Models\GetRequestTargetNodeTypesRequest $req) 获取接收客户端请求的节点类型
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) 重启ES集群实例(用于系统版本更新等操作) 
 * @method Models\RestartKibanaResponse RestartKibana(Models\RestartKibanaRequest $req) 重启Kibana 
 * @method Models\RestartNodesResponse RestartNodes(Models\RestartNodesRequest $req) 用于重启集群节点
 * @method Models\UpdateDiagnoseSettingsResponse UpdateDiagnoseSettings(Models\UpdateDiagnoseSettingsRequest $req) 更新智能运维配置
 * @method Models\UpdateInstanceResponse UpdateInstance(Models\UpdateInstanceRequest $req) 对集群进行节点规格变更，修改实例名称，修改配置，重置密码， 添加Kibana黑白名单等操作。参数中InstanceId为必传参数，ForceRestart为选填参数，剩余参数传递组合及含义如下：
- InstanceName：修改实例名称(仅用于标识实例)
- NodeInfoList: 修改节点配置（节点横向扩缩容，纵向扩缩容，增加主节点，增加冷节点等）
- EsConfig：修改集群配置
- Password：修改默认用户elastic的密码
- EsAcl：修改访问控制列表
- CosBackUp: 设置集群COS自动备份信息
以上参数组合只能传递一种，多传或少传均会导致请求失败
 * @method Models\UpdatePluginsResponse UpdatePlugins(Models\UpdatePluginsRequest $req) 变更插件列表
 * @method Models\UpdateRequestTargetNodeTypesResponse UpdateRequestTargetNodeTypes(Models\UpdateRequestTargetNodeTypesRequest $req) 更新接收客户端请求的节点类型
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 升级ES集群版本
 * @method Models\UpgradeLicenseResponse UpgradeLicense(Models\UpgradeLicenseRequest $req) 升级ES商业特性
 */

class EsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "es.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "es";

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
        $respClass = "TencentCloud"."\\".ucfirst("es")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

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

namespace TencentCloud\Cfs\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfs\V20190719\Models as Models;

/**
 * @method Models\CreateCfsFileSystemResponse CreateCfsFileSystem(Models\CreateCfsFileSystemRequest $req) 用于添加新文件系统
 * @method Models\CreateCfsPGroupResponse CreateCfsPGroup(Models\CreateCfsPGroupRequest $req) 本接口（CreateCfsPGroup）用于创建权限组
 * @method Models\CreateCfsRuleResponse CreateCfsRule(Models\CreateCfsRuleRequest $req) 本接口（CreateCfsRule）用于创建权限组规则。
 * @method Models\DeleteCfsFileSystemResponse DeleteCfsFileSystem(Models\DeleteCfsFileSystemRequest $req) 用于删除文件系统
 * @method Models\DeleteCfsPGroupResponse DeleteCfsPGroup(Models\DeleteCfsPGroupRequest $req) 本接口（DeleteCfsPGroup）用于删除权限组。
 * @method Models\DeleteCfsRuleResponse DeleteCfsRule(Models\DeleteCfsRuleRequest $req) 本接口（DeleteCfsRule）用于删除权限组规则。
 * @method Models\DeleteMountTargetResponse DeleteMountTarget(Models\DeleteMountTargetRequest $req) 本接口（DeleteMountTarget）用于删除挂载点
 * @method Models\DescribeAvailableZoneInfoResponse DescribeAvailableZoneInfo(Models\DescribeAvailableZoneInfoRequest $req) 本接口（DescribeAvailableZoneInfo）用于查询区域的可用情况。
 * @method Models\DescribeCfsFileSystemClientsResponse DescribeCfsFileSystemClients(Models\DescribeCfsFileSystemClientsRequest $req) 查询挂载该文件系统的客户端。此功能需要客户端安装CFS监控插件。
 * @method Models\DescribeCfsFileSystemsResponse DescribeCfsFileSystems(Models\DescribeCfsFileSystemsRequest $req) 本接口（DescribeCfsFileSystems）用于查询文件系统
 * @method Models\DescribeCfsPGroupsResponse DescribeCfsPGroups(Models\DescribeCfsPGroupsRequest $req) 本接口（DescribeCfsPGroups）用于查询权限组列表。
 * @method Models\DescribeCfsRulesResponse DescribeCfsRules(Models\DescribeCfsRulesRequest $req) 本接口（DescribeCfsRules）用于查询权限组规则列表。
 * @method Models\DescribeCfsServiceStatusResponse DescribeCfsServiceStatus(Models\DescribeCfsServiceStatusRequest $req) 本接口（DescribeCfsServiceStatus）用于查询用户使用CFS的服务状态。
 * @method Models\DescribeMountTargetsResponse DescribeMountTargets(Models\DescribeMountTargetsRequest $req) 本接口（DescribeMountTargets）用于查询文件系统挂载点信息
 * @method Models\SignUpCfsServiceResponse SignUpCfsService(Models\SignUpCfsServiceRequest $req) 本接口（SignUpCfsService）用于开通CFS服务。
 * @method Models\UpdateCfsFileSystemNameResponse UpdateCfsFileSystemName(Models\UpdateCfsFileSystemNameRequest $req) 本接口（UpdateCfsFileSystemName）用于更新文件系统名
 * @method Models\UpdateCfsFileSystemPGroupResponse UpdateCfsFileSystemPGroup(Models\UpdateCfsFileSystemPGroupRequest $req) 本接口（UpdateCfsFileSystemPGroup）用于更新文件系统所使用的权限组
 * @method Models\UpdateCfsFileSystemSizeLimitResponse UpdateCfsFileSystemSizeLimit(Models\UpdateCfsFileSystemSizeLimitRequest $req) 本接口（UpdateCfsFileSystemSizeLimit）用于更新文件系统存储容量限制。
 * @method Models\UpdateCfsPGroupResponse UpdateCfsPGroup(Models\UpdateCfsPGroupRequest $req) 本接口（UpdateCfsPGroup）更新权限组信息。
 * @method Models\UpdateCfsRuleResponse UpdateCfsRule(Models\UpdateCfsRuleRequest $req) 本接口（UpdateCfsRule）用于更新权限规则。
 */

class CfsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfs";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfs")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

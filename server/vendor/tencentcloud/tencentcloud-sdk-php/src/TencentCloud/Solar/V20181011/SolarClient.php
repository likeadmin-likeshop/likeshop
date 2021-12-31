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

namespace TencentCloud\Solar\V20181011;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Solar\V20181011\Models as Models;

/**
 * @method Models\CheckStaffChUserResponse CheckStaffChUser(Models\CheckStaffChUserRequest $req) 员工渠道更改员工状态
 * @method Models\CopyActivityChannelResponse CopyActivityChannel(Models\CopyActivityChannelRequest $req) 复制活动渠道的策略
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建项目
 * @method Models\CreateSubProjectResponse CreateSubProject(Models\CreateSubProjectRequest $req) 创建子项目
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除项目
 * @method Models\DescribeCustomerResponse DescribeCustomer(Models\DescribeCustomerRequest $req) 客户档案查询客户详情
 * @method Models\DescribeCustomersResponse DescribeCustomers(Models\DescribeCustomersRequest $req) 查询客户档案列表
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 项目详情展示
 * @method Models\DescribeProjectStockResponse DescribeProjectStock(Models\DescribeProjectStockRequest $req) 项目库存详情
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 项目列表展示
 * @method Models\DescribeResourceTemplateHeadersResponse DescribeResourceTemplateHeaders(Models\DescribeResourceTemplateHeadersRequest $req) 素材查询服务号模板的列表（样例）
 * @method Models\DescribeSubProjectResponse DescribeSubProject(Models\DescribeSubProjectRequest $req) 子项目详情
 * @method Models\ExpireFlowResponse ExpireFlow(Models\ExpireFlowRequest $req) 把审批中的工单置为已失效
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目
 * @method Models\OffLineProjectResponse OffLineProject(Models\OffLineProjectRequest $req) 下线项目
 * @method Models\ReplenishProjectStockResponse ReplenishProjectStock(Models\ReplenishProjectStockRequest $req) 补充子项目库存
 * @method Models\SendWxTouchTaskResponse SendWxTouchTask(Models\SendWxTouchTaskRequest $req) 发送企业微信触达任务
 */

class SolarClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "solar.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "solar";

    /**
     * @var string
     */
    protected $version = "2018-10-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("solar")."\\"."V20181011\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

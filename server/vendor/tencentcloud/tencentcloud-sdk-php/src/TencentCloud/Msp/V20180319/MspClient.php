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

namespace TencentCloud\Msp\V20180319;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Msp\V20180319\Models as Models;

/**
 * @method Models\DeregisterMigrationTaskResponse DeregisterMigrationTask(Models\DeregisterMigrationTaskRequest $req) 取消注册迁移任务
 * @method Models\DescribeMigrationTaskResponse DescribeMigrationTask(Models\DescribeMigrationTaskRequest $req) 获取指定迁移任务详情
 * @method Models\ListMigrationProjectResponse ListMigrationProject(Models\ListMigrationProjectRequest $req) 获取迁移项目名称列表
 * @method Models\ListMigrationTaskResponse ListMigrationTask(Models\ListMigrationTaskRequest $req) 获取迁移任务列表
 * @method Models\ModifyMigrationTaskBelongToProjectResponse ModifyMigrationTaskBelongToProject(Models\ModifyMigrationTaskBelongToProjectRequest $req) 更改迁移任务所属项目
 * @method Models\ModifyMigrationTaskStatusResponse ModifyMigrationTaskStatus(Models\ModifyMigrationTaskStatusRequest $req) 更新迁移任务状态
 * @method Models\RegisterMigrationTaskResponse RegisterMigrationTask(Models\RegisterMigrationTaskRequest $req) 注册迁移任务
 */

class MspClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "msp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "msp";

    /**
     * @var string
     */
    protected $version = "2018-03-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("msp")."\\"."V20180319\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

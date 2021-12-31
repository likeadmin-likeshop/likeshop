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

namespace TencentCloud\Dlc\V20210125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dlc\V20210125\Models as Models;

/**
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) 本接口（CreateDatabase）用于生成建库SQL语句。
 * @method Models\CreateScriptResponse CreateScript(Models\CreateScriptRequest $req) 该接口（CreateScript）用于创建sql脚本。
 * @method Models\CreateStoreLocationResponse CreateStoreLocation(Models\CreateStoreLocationRequest $req) 该接口（CreateStoreLocation）新增或覆盖计算结果存储位置。
 * @method Models\CreateTableResponse CreateTable(Models\CreateTableRequest $req) 本接口（CreateTable）用于生成建表SQL。
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 本接口（CreateTask）用于创建sql查询任务。
 * @method Models\DeleteScriptResponse DeleteScript(Models\DeleteScriptRequest $req) 该接口（DeleteScript）用于删除sql脚本。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口（DescribeDatabases）用于查询数据库列表。
 * @method Models\DescribeScriptsResponse DescribeScripts(Models\DescribeScriptsRequest $req) 该接口（DescribeScripts）用于获取所有SQL查询。
 * @method Models\DescribeTableResponse DescribeTable(Models\DescribeTableRequest $req) 查询单个表的详细信息。
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口（DescribleTables）用于查询数据表列表。
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 该接口（DescribleTasks）用于查询任务列表
 * @method Models\DescribeViewsResponse DescribeViews(Models\DescribeViewsRequest $req) 本接口（DescribeViews）用于查询数据视图列表。
 */

class DlcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dlc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dlc";

    /**
     * @var string
     */
    protected $version = "2021-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("dlc")."\\"."V20210125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

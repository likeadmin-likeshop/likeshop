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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTask请求参数结构体
 *
 * @method Task getTask() 获取计算任务，该参数中包含任务类型及其相关配置信息
 * @method void setTask(Task $Task) 设置计算任务，该参数中包含任务类型及其相关配置信息
 * @method string getDatabaseName() 获取数据库名称。任务在执行前均会USE该数据库， 除了首次建库时，其他情况建议均添加上。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称。任务在执行前均会USE该数据库， 除了首次建库时，其他情况建议均添加上。
 * @method string getDatasourceConnectionName() 获取默认数据源名称。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置默认数据源名称。
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var Task 计算任务，该参数中包含任务类型及其相关配置信息
     */
    public $Task;

    /**
     * @var string 数据库名称。任务在执行前均会USE该数据库， 除了首次建库时，其他情况建议均添加上。
     */
    public $DatabaseName;

    /**
     * @var string 默认数据源名称。
     */
    public $DatasourceConnectionName;

    /**
     * @param Task $Task 计算任务，该参数中包含任务类型及其相关配置信息
     * @param string $DatabaseName 数据库名称。任务在执行前均会USE该数据库， 除了首次建库时，其他情况建议均添加上。
     * @param string $DatasourceConnectionName 默认数据源名称。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new Task();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}

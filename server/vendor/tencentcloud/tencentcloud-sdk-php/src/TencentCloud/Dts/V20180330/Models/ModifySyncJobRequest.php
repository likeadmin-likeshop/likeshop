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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySyncJob请求参数结构体
 *
 * @method string getJobId() 获取待修改的灾备同步任务ID
 * @method void setJobId(string $JobId) 设置待修改的灾备同步任务ID
 * @method string getJobName() 获取灾备同步任务名称
 * @method void setJobName(string $JobName) 设置灾备同步任务名称
 * @method SyncOption getSyncOption() 获取灾备同步任务配置选项
 * @method void setSyncOption(SyncOption $SyncOption) 设置灾备同步任务配置选项
 * @method string getDatabaseInfo() 获取当选择'指定库表'灾备同步的时候, 需要设置待同步的源数据库表信息,用符合json数组格式的字符串描述, 如下所例。
对于database-table两级结构的数据库：
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
 * @method void setDatabaseInfo(string $DatabaseInfo) 设置当选择'指定库表'灾备同步的时候, 需要设置待同步的源数据库表信息,用符合json数组格式的字符串描述, 如下所例。
对于database-table两级结构的数据库：
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
 */
class ModifySyncJobRequest extends AbstractModel
{
    /**
     * @var string 待修改的灾备同步任务ID
     */
    public $JobId;

    /**
     * @var string 灾备同步任务名称
     */
    public $JobName;

    /**
     * @var SyncOption 灾备同步任务配置选项
     */
    public $SyncOption;

    /**
     * @var string 当选择'指定库表'灾备同步的时候, 需要设置待同步的源数据库表信息,用符合json数组格式的字符串描述, 如下所例。
对于database-table两级结构的数据库：
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
     */
    public $DatabaseInfo;

    /**
     * @param string $JobId 待修改的灾备同步任务ID
     * @param string $JobName 灾备同步任务名称
     * @param SyncOption $SyncOption 灾备同步任务配置选项
     * @param string $DatabaseInfo 当选择'指定库表'灾备同步的时候, 需要设置待同步的源数据库表信息,用符合json数组格式的字符串描述, 如下所例。
对于database-table两级结构的数据库：
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("SyncOption",$param) and $param["SyncOption"] !== null) {
            $this->SyncOption = new SyncOption();
            $this->SyncOption->deserialize($param["SyncOption"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }
    }
}

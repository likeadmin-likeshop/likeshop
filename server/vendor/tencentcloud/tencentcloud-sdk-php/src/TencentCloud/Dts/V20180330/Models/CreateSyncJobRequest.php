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
 * CreateSyncJob请求参数结构体
 *
 * @method string getJobName() 获取灾备同步任务名
 * @method void setJobName(string $JobName) 设置灾备同步任务名
 * @method SyncOption getSyncOption() 获取灾备同步任务配置选项
 * @method void setSyncOption(SyncOption $SyncOption) 设置灾备同步任务配置选项
 * @method string getSrcDatabaseType() 获取源实例数据库类型，目前仅包括：mysql
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源实例数据库类型，目前仅包括：mysql
 * @method string getSrcAccessType() 获取源实例接入类型，目前仅包括：cdb(云上cdb实例)
 * @method void setSrcAccessType(string $SrcAccessType) 设置源实例接入类型，目前仅包括：cdb(云上cdb实例)
 * @method SyncInstanceInfo getSrcInfo() 获取源实例信息
 * @method void setSrcInfo(SyncInstanceInfo $SrcInfo) 设置源实例信息
 * @method string getDstDatabaseType() 获取目标实例数据库类型，目前仅包括：mysql
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标实例数据库类型，目前仅包括：mysql
 * @method string getDstAccessType() 获取目标实例接入类型，目前仅包括：cdb(云上cdb实例)
 * @method void setDstAccessType(string $DstAccessType) 设置目标实例接入类型，目前仅包括：cdb(云上cdb实例)
 * @method SyncInstanceInfo getDstInfo() 获取目标实例信息
 * @method void setDstInfo(SyncInstanceInfo $DstInfo) 设置目标实例信息
 * @method string getDatabaseInfo() 获取需要同步的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
 * @method void setDatabaseInfo(string $DatabaseInfo) 设置需要同步的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
 */
class CreateSyncJobRequest extends AbstractModel
{
    /**
     * @var string 灾备同步任务名
     */
    public $JobName;

    /**
     * @var SyncOption 灾备同步任务配置选项
     */
    public $SyncOption;

    /**
     * @var string 源实例数据库类型，目前仅包括：mysql
     */
    public $SrcDatabaseType;

    /**
     * @var string 源实例接入类型，目前仅包括：cdb(云上cdb实例)
     */
    public $SrcAccessType;

    /**
     * @var SyncInstanceInfo 源实例信息
     */
    public $SrcInfo;

    /**
     * @var string 目标实例数据库类型，目前仅包括：mysql
     */
    public $DstDatabaseType;

    /**
     * @var string 目标实例接入类型，目前仅包括：cdb(云上cdb实例)
     */
    public $DstAccessType;

    /**
     * @var SyncInstanceInfo 目标实例信息
     */
    public $DstInfo;

    /**
     * @var string 需要同步的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
     */
    public $DatabaseInfo;

    /**
     * @param string $JobName 灾备同步任务名
     * @param SyncOption $SyncOption 灾备同步任务配置选项
     * @param string $SrcDatabaseType 源实例数据库类型，目前仅包括：mysql
     * @param string $SrcAccessType 源实例接入类型，目前仅包括：cdb(云上cdb实例)
     * @param SyncInstanceInfo $SrcInfo 源实例信息
     * @param string $DstDatabaseType 目标实例数据库类型，目前仅包括：mysql
     * @param string $DstAccessType 目标实例接入类型，目前仅包括：cdb(云上cdb实例)
     * @param SyncInstanceInfo $DstInfo 目标实例信息
     * @param string $DatabaseInfo 需要同步的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("SyncOption",$param) and $param["SyncOption"] !== null) {
            $this->SyncOption = new SyncOption();
            $this->SyncOption->deserialize($param["SyncOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SyncInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new SyncInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }
    }
}

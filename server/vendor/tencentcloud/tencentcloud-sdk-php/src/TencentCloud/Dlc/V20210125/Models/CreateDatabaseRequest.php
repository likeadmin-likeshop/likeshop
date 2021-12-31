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
 * CreateDatabase请求参数结构体
 *
 * @method DatabaseInfo getDatabaseInfo() 获取数据库基础信息
 * @method void setDatabaseInfo(DatabaseInfo $DatabaseInfo) 设置数据库基础信息
 * @method string getDatasourceConnectionName() 获取数据源名称，默认为CosDataCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称，默认为CosDataCatalog
 */
class CreateDatabaseRequest extends AbstractModel
{
    /**
     * @var DatabaseInfo 数据库基础信息
     */
    public $DatabaseInfo;

    /**
     * @var string 数据源名称，默认为CosDataCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @param DatabaseInfo $DatabaseInfo 数据库基础信息
     * @param string $DatasourceConnectionName 数据源名称，默认为CosDataCatalog
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
        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = new DatabaseInfo();
            $this->DatabaseInfo->deserialize($param["DatabaseInfo"]);
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}

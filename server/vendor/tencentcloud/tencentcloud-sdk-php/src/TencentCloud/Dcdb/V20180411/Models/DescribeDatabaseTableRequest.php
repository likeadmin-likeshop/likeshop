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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseTable请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：dcdbt-ow7t8lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：dcdbt-ow7t8lmc。
 * @method string getDbName() 获取数据库名称，通过 DescribeDatabases 接口获取。
 * @method void setDbName(string $DbName) 设置数据库名称，通过 DescribeDatabases 接口获取。
 * @method string getTable() 获取表名称，通过 DescribeDatabaseObjects 接口获取。
 * @method void setTable(string $Table) 设置表名称，通过 DescribeDatabaseObjects 接口获取。
 */
class DescribeDatabaseTableRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：dcdbt-ow7t8lmc。
     */
    public $InstanceId;

    /**
     * @var string 数据库名称，通过 DescribeDatabases 接口获取。
     */
    public $DbName;

    /**
     * @var string 表名称，通过 DescribeDatabaseObjects 接口获取。
     */
    public $Table;

    /**
     * @param string $InstanceId 实例 ID，形如：dcdbt-ow7t8lmc。
     * @param string $DbName 数据库名称，通过 DescribeDatabases 接口获取。
     * @param string $Table 表名称，通过 DescribeDatabaseObjects 接口获取。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}

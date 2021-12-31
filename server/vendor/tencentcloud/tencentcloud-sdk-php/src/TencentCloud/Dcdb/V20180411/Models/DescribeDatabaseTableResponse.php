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
 * DescribeDatabaseTable返回参数结构体
 *
 * @method string getInstanceId() 获取实例名称。
 * @method void setInstanceId(string $InstanceId) 设置实例名称。
 * @method string getDbName() 获取数据库名称。
 * @method void setDbName(string $DbName) 设置数据库名称。
 * @method string getTable() 获取表名称。
 * @method void setTable(string $Table) 设置表名称。
 * @method array getCols() 获取列信息。
 * @method void setCols(array $Cols) 设置列信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatabaseTableResponse extends AbstractModel
{
    /**
     * @var string 实例名称。
     */
    public $InstanceId;

    /**
     * @var string 数据库名称。
     */
    public $DbName;

    /**
     * @var string 表名称。
     */
    public $Table;

    /**
     * @var array 列信息。
     */
    public $Cols;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例名称。
     * @param string $DbName 数据库名称。
     * @param string $Table 表名称。
     * @param array $Cols 列信息。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = [];
            foreach ($param["Cols"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->Cols, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
 * DescribeTables请求参数结构体
 *
 * @method string getDatabaseName() 获取列出该数据库下所属数据表。
 * @method void setDatabaseName(string $DatabaseName) 设置列出该数据库下所属数据表。
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取数据偏移量，从0开始，默认为0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始，默认为0。
 * @method array getFilters() 获取过滤条件，如下支持的过滤类型，传参Name应为其一
table-name - String - （过滤条件）数据表名称,形如：table-001。
table-id - String - （过滤条件）table id形如：12342。
 * @method void setFilters(array $Filters) 设置过滤条件，如下支持的过滤类型，传参Name应为其一
table-name - String - （过滤条件）数据表名称,形如：table-001。
table-id - String - （过滤条件）table id形如：12342。
 * @method string getDatasourceConnectionName() 获取指定查询的数据源名称，默认为CosDataCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置指定查询的数据源名称，默认为CosDataCatalog
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string 列出该数据库下所属数据表。
     */
    public $DatabaseName;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件，如下支持的过滤类型，传参Name应为其一
table-name - String - （过滤条件）数据表名称,形如：table-001。
table-id - String - （过滤条件）table id形如：12342。
     */
    public $Filters;

    /**
     * @var string 指定查询的数据源名称，默认为CosDataCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @param string $DatabaseName 列出该数据库下所属数据表。
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 数据偏移量，从0开始，默认为0。
     * @param array $Filters 过滤条件，如下支持的过滤类型，传参Name应为其一
table-name - String - （过滤条件）数据表名称,形如：table-001。
table-id - String - （过滤条件）table id形如：12342。
     * @param string $DatasourceConnectionName 指定查询的数据源名称，默认为CosDataCatalog
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}

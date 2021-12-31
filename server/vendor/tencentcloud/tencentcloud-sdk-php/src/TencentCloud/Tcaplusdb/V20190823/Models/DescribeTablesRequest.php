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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTables请求参数结构体
 *
 * @method string getClusterId() 获取待查询表格所属集群ID
 * @method void setClusterId(string $ClusterId) 设置待查询表格所属集群ID
 * @method array getTableGroupIds() 获取待查询表格所属表格组ID列表
 * @method void setTableGroupIds(array $TableGroupIds) 设置待查询表格所属表格组ID列表
 * @method array getSelectedTables() 获取待查询表格信息列表
 * @method void setSelectedTables(array $SelectedTables) 设置待查询表格信息列表
 * @method array getFilters() 获取过滤条件，本接口支持：TableName，TableInstanceId
 * @method void setFilters(array $Filters) 设置过滤条件，本接口支持：TableName，TableInstanceId
 * @method integer getOffset() 获取查询结果偏移量
 * @method void setOffset(integer $Offset) 设置查询结果偏移量
 * @method integer getLimit() 获取查询结果返回记录数量
 * @method void setLimit(integer $Limit) 设置查询结果返回记录数量
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string 待查询表格所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 待查询表格所属表格组ID列表
     */
    public $TableGroupIds;

    /**
     * @var array 待查询表格信息列表
     */
    public $SelectedTables;

    /**
     * @var array 过滤条件，本接口支持：TableName，TableInstanceId
     */
    public $Filters;

    /**
     * @var integer 查询结果偏移量
     */
    public $Offset;

    /**
     * @var integer 查询结果返回记录数量
     */
    public $Limit;

    /**
     * @param string $ClusterId 待查询表格所属集群ID
     * @param array $TableGroupIds 待查询表格所属表格组ID列表
     * @param array $SelectedTables 待查询表格信息列表
     * @param array $Filters 过滤条件，本接口支持：TableName，TableInstanceId
     * @param integer $Offset 查询结果偏移量
     * @param integer $Limit 查询结果返回记录数量
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupIds",$param) and $param["TableGroupIds"] !== null) {
            $this->TableGroupIds = $param["TableGroupIds"];
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

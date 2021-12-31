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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroups请求参数结构体
 *
 * @method string getSearchWord() 获取搜索字段
 * @method void setSearchWord(string $SearchWord) 设置搜索字段
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method integer getOrderType() 获取排序方式
 * @method void setOrderType(integer $OrderType) 设置排序方式
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页个数
 * @method void setLimit(integer $Limit) 设置分页个数
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getGroupResourceTypeList() 获取部署组资源类型列表
 * @method void setGroupResourceTypeList(array $GroupResourceTypeList) 设置部署组资源类型列表
 * @method string getStatus() 获取部署组状态过滤字段
 * @method void setStatus(string $Status) 设置部署组状态过滤字段
 */
class DescribeGroupsRequest extends AbstractModel
{
    /**
     * @var string 搜索字段
     */
    public $SearchWord;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var integer 排序方式
     */
    public $OrderType;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 分页个数
     */
    public $Limit;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 部署组资源类型列表
     */
    public $GroupResourceTypeList;

    /**
     * @var string 部署组状态过滤字段
     */
    public $Status;

    /**
     * @param string $SearchWord 搜索字段
     * @param string $ApplicationId 应用ID
     * @param string $OrderBy 排序字段
     * @param integer $OrderType 排序方式
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页个数
     * @param string $NamespaceId 命名空间ID
     * @param string $ClusterId 集群ID
     * @param array $GroupResourceTypeList 部署组资源类型列表
     * @param string $Status 部署组状态过滤字段
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupResourceTypeList",$param) and $param["GroupResourceTypeList"] !== null) {
            $this->GroupResourceTypeList = $param["GroupResourceTypeList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

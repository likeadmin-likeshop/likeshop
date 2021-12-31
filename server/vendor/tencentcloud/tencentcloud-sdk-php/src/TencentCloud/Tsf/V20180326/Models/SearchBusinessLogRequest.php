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
 * SearchBusinessLog请求参数结构体
 *
 * @method string getConfigId() 获取日志配置项ID
 * @method void setConfigId(string $ConfigId) 设置日志配置项ID
 * @method array getInstanceIds() 获取机器实例ID，不传表示全部实例
 * @method void setInstanceIds(array $InstanceIds) 设置机器实例ID，不传表示全部实例
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取请求偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置请求偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 200]，默认值为50
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 200]，默认值为50
 * @method string getOrderBy() 获取排序规则，默认值"time"
 * @method void setOrderBy(string $OrderBy) 设置排序规则，默认值"time"
 * @method string getOrderType() 获取排序方式，取值"asc"或"desc"，默认值"desc"
 * @method void setOrderType(string $OrderType) 设置排序方式，取值"asc"或"desc"，默认值"desc"
 * @method array getSearchWords() 获取检索关键词
 * @method void setSearchWords(array $SearchWords) 设置检索关键词
 * @method array getGroupIds() 获取部署组ID列表，不传表示全部部署组
 * @method void setGroupIds(array $GroupIds) 设置部署组ID列表，不传表示全部部署组
 * @method string getSearchWordType() 获取检索类型，取值"LUCENE", "REGEXP", "NORMAL"
 * @method void setSearchWordType(string $SearchWordType) 设置检索类型，取值"LUCENE", "REGEXP", "NORMAL"
 * @method string getBatchType() 获取批量请求类型，取值"page"或"scroll"
 * @method void setBatchType(string $BatchType) 设置批量请求类型，取值"page"或"scroll"
 * @method string getScrollId() 获取游标ID
 * @method void setScrollId(string $ScrollId) 设置游标ID
 */
class SearchBusinessLogRequest extends AbstractModel
{
    /**
     * @var string 日志配置项ID
     */
    public $ConfigId;

    /**
     * @var array 机器实例ID，不传表示全部实例
     */
    public $InstanceIds;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 请求偏移量，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 200]，默认值为50
     */
    public $Limit;

    /**
     * @var string 排序规则，默认值"time"
     */
    public $OrderBy;

    /**
     * @var string 排序方式，取值"asc"或"desc"，默认值"desc"
     */
    public $OrderType;

    /**
     * @var array 检索关键词
     */
    public $SearchWords;

    /**
     * @var array 部署组ID列表，不传表示全部部署组
     */
    public $GroupIds;

    /**
     * @var string 检索类型，取值"LUCENE", "REGEXP", "NORMAL"
     */
    public $SearchWordType;

    /**
     * @var string 批量请求类型，取值"page"或"scroll"
     */
    public $BatchType;

    /**
     * @var string 游标ID
     */
    public $ScrollId;

    /**
     * @param string $ConfigId 日志配置项ID
     * @param array $InstanceIds 机器实例ID，不传表示全部实例
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 请求偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 200]，默认值为50
     * @param string $OrderBy 排序规则，默认值"time"
     * @param string $OrderType 排序方式，取值"asc"或"desc"，默认值"desc"
     * @param array $SearchWords 检索关键词
     * @param array $GroupIds 部署组ID列表，不传表示全部部署组
     * @param string $SearchWordType 检索类型，取值"LUCENE", "REGEXP", "NORMAL"
     * @param string $BatchType 批量请求类型，取值"page"或"scroll"
     * @param string $ScrollId 游标ID
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("SearchWordType",$param) and $param["SearchWordType"] !== null) {
            $this->SearchWordType = $param["SearchWordType"];
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }
    }
}

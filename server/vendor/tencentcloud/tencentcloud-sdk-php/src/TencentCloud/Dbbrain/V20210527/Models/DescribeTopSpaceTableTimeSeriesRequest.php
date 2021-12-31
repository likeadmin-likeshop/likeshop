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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopSpaceTableTimeSeries请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method integer getLimit() 获取返回的Top表数量，最大值为100，默认为20。
 * @method void setLimit(integer $Limit) 设置返回的Top表数量，最大值为100，默认为20。
 * @method string getSortBy() 获取筛选Top表所用的排序字段，可选字段包含DataLength、IndexLength、TotalLength、DataFree、FragRatio、TableRows、PhysicalFileSize，默认为 PhysicalFileSize。
 * @method void setSortBy(string $SortBy) 设置筛选Top表所用的排序字段，可选字段包含DataLength、IndexLength、TotalLength、DataFree、FragRatio、TableRows、PhysicalFileSize，默认为 PhysicalFileSize。
 * @method string getStartDate() 获取开始日期，如“2021-01-01”，最早为当日的前第29天，默认为截止日期的前第6天。
 * @method void setStartDate(string $StartDate) 设置开始日期，如“2021-01-01”，最早为当日的前第29天，默认为截止日期的前第6天。
 * @method string getEndDate() 获取截止日期，如“2021-01-01”，最早为当日的前第29天，默认为当日。
 * @method void setEndDate(string $EndDate) 设置截止日期，如“2021-01-01”，最早为当日的前第29天，默认为当日。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 */
class DescribeTopSpaceTableTimeSeriesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var integer 返回的Top表数量，最大值为100，默认为20。
     */
    public $Limit;

    /**
     * @var string 筛选Top表所用的排序字段，可选字段包含DataLength、IndexLength、TotalLength、DataFree、FragRatio、TableRows、PhysicalFileSize，默认为 PhysicalFileSize。
     */
    public $SortBy;

    /**
     * @var string 开始日期，如“2021-01-01”，最早为当日的前第29天，默认为截止日期的前第6天。
     */
    public $StartDate;

    /**
     * @var string 截止日期，如“2021-01-01”，最早为当日的前第29天，默认为当日。
     */
    public $EndDate;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param integer $Limit 返回的Top表数量，最大值为100，默认为20。
     * @param string $SortBy 筛选Top表所用的排序字段，可选字段包含DataLength、IndexLength、TotalLength、DataFree、FragRatio、TableRows、PhysicalFileSize，默认为 PhysicalFileSize。
     * @param string $StartDate 开始日期，如“2021-01-01”，最早为当日的前第29天，默认为截止日期的前第6天。
     * @param string $EndDate 截止日期，如“2021-01-01”，最早为当日的前第29天，默认为当日。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}

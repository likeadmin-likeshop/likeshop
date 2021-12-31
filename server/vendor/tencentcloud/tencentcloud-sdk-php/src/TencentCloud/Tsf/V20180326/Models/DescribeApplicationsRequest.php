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
 * DescribeApplications请求参数结构体
 *
 * @method string getSearchWord() 获取搜索字段
 * @method void setSearchWord(string $SearchWord) 设置搜索字段
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method integer getOrderType() 获取排序类型
 * @method void setOrderType(integer $OrderType) 设置排序类型
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页个数
 * @method void setLimit(integer $Limit) 设置分页个数
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method string getMicroserviceType() 获取应用的微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用的微服务类型
 * @method array getApplicationResourceTypeList() 获取应用资源类型数组
 * @method void setApplicationResourceTypeList(array $ApplicationResourceTypeList) 设置应用资源类型数组
 * @method array getApplicationIdList() 获取IdList
 * @method void setApplicationIdList(array $ApplicationIdList) 设置IdList
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string 搜索字段
     */
    public $SearchWord;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var integer 排序类型
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
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var string 应用的微服务类型
     */
    public $MicroserviceType;

    /**
     * @var array 应用资源类型数组
     */
    public $ApplicationResourceTypeList;

    /**
     * @var array IdList
     */
    public $ApplicationIdList;

    /**
     * @param string $SearchWord 搜索字段
     * @param string $OrderBy 排序字段
     * @param integer $OrderType 排序类型
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页个数
     * @param string $ApplicationType 应用类型
     * @param string $MicroserviceType 应用的微服务类型
     * @param array $ApplicationResourceTypeList 应用资源类型数组
     * @param array $ApplicationIdList IdList
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

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationResourceTypeList",$param) and $param["ApplicationResourceTypeList"] !== null) {
            $this->ApplicationResourceTypeList = $param["ApplicationResourceTypeList"];
        }

        if (array_key_exists("ApplicationIdList",$param) and $param["ApplicationIdList"] !== null) {
            $this->ApplicationIdList = $param["ApplicationIdList"];
        }
    }
}

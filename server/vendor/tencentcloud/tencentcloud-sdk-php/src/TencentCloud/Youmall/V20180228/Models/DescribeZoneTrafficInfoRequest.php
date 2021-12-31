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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneTrafficInfo请求参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取店铺ID
 * @method void setShopId(integer $ShopId) 设置店铺ID
 * @method string getStartDate() 获取开始日期，格式yyyy-MM-dd
 * @method void setStartDate(string $StartDate) 设置开始日期，格式yyyy-MM-dd
 * @method string getEndDate() 获取结束日期，格式yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置结束日期，格式yyyy-MM-dd
 * @method integer getOffset() 获取偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method void setOffset(integer $Offset) 设置偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method integer getLimit() 获取Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method void setLimit(integer $Limit) 设置Limit:每页的数据项，最大100，超过100会被强制指定为100
 */
class DescribeZoneTrafficInfoRequest extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 店铺ID
     */
    public $ShopId;

    /**
     * @var string 开始日期，格式yyyy-MM-dd
     */
    public $StartDate;

    /**
     * @var string 结束日期，格式yyyy-MM-dd
     */
    public $EndDate;

    /**
     * @var integer 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     */
    public $Offset;

    /**
     * @var integer Limit:每页的数据项，最大100，超过100会被强制指定为100
     */
    public $Limit;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 店铺ID
     * @param string $StartDate 开始日期，格式yyyy-MM-dd
     * @param string $EndDate 结束日期，格式yyyy-MM-dd
     * @param integer $Offset 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     * @param integer $Limit Limit:每页的数据项，最大100，超过100会被强制指定为100
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

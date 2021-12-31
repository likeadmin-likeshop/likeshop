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
 * DescribeTrajectoryData请求参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method integer getShopId() 获取店铺ID
 * @method void setShopId(integer $ShopId) 设置店铺ID
 * @method string getStartDate() 获取开始日期，格式yyyy-MM-dd
 * @method void setStartDate(string $StartDate) 设置开始日期，格式yyyy-MM-dd
 * @method string getEndDate() 获取结束日期，格式yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置结束日期，格式yyyy-MM-dd
 * @method integer getLimit() 获取限制返回数据的最大条数，最大 400（负数代为 400）
 * @method void setLimit(integer $Limit) 设置限制返回数据的最大条数，最大 400（负数代为 400）
 * @method integer getGender() 获取顾客性别顾虑，0是男，1是女，其它代表不分性别
 * @method void setGender(integer $Gender) 设置顾客性别顾虑，0是男，1是女，其它代表不分性别
 */
class DescribeTrajectoryDataRequest extends AbstractModel
{
    /**
     * @var string 集团ID
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
     * @var integer 限制返回数据的最大条数，最大 400（负数代为 400）
     */
    public $Limit;

    /**
     * @var integer 顾客性别顾虑，0是男，1是女，其它代表不分性别
     */
    public $Gender;

    /**
     * @param string $CompanyId 集团ID
     * @param integer $ShopId 店铺ID
     * @param string $StartDate 开始日期，格式yyyy-MM-dd
     * @param string $EndDate 结束日期，格式yyyy-MM-dd
     * @param integer $Limit 限制返回数据的最大条数，最大 400（负数代为 400）
     * @param integer $Gender 顾客性别顾虑，0是男，1是女，其它代表不分性别
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }
    }
}

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
 * DescribePersonVisitInfo请求参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getOffset() 获取偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method void setOffset(integer $Offset) 设置偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method integer getLimit() 获取Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method void setLimit(integer $Limit) 设置Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method string getStartDate() 获取开始日期，格式yyyy-MM-dd，已废弃，请使用StartDateTime
 * @method void setStartDate(string $StartDate) 设置开始日期，格式yyyy-MM-dd，已废弃，请使用StartDateTime
 * @method string getEndDate() 获取结束日期，格式yyyy-MM-dd，已废弃，请使用EndDateTime
 * @method void setEndDate(string $EndDate) 设置结束日期，格式yyyy-MM-dd，已废弃，请使用EndDateTime
 * @method integer getPictureExpires() 获取图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 * @method void setPictureExpires(integer $PictureExpires) 设置图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 * @method string getStartDateTime() 获取开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setStartDateTime(string $StartDateTime) 设置开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getEndDateTime() 获取结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setEndDateTime(string $EndDateTime) 设置结束时间，格式yyyy-MM-dd HH:mm:ss
 */
class DescribePersonVisitInfoRequest extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 门店ID
     */
    public $ShopId;

    /**
     * @var integer 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     */
    public $Offset;

    /**
     * @var integer Limit:每页的数据项，最大100，超过100会被强制指定为100
     */
    public $Limit;

    /**
     * @var string 开始日期，格式yyyy-MM-dd，已废弃，请使用StartDateTime
     */
    public $StartDate;

    /**
     * @var string 结束日期，格式yyyy-MM-dd，已废弃，请使用EndDateTime
     */
    public $EndDate;

    /**
     * @var integer 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
     */
    public $PictureExpires;

    /**
     * @var string 开始时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $StartDateTime;

    /**
     * @var string 结束时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $EndDateTime;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param integer $Offset 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     * @param integer $Limit Limit:每页的数据项，最大100，超过100会被强制指定为100
     * @param string $StartDate 开始日期，格式yyyy-MM-dd，已废弃，请使用StartDateTime
     * @param string $EndDate 结束日期，格式yyyy-MM-dd，已废弃，请使用EndDateTime
     * @param integer $PictureExpires 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
     * @param string $StartDateTime 开始时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $EndDateTime 结束时间，格式yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("PictureExpires",$param) and $param["PictureExpires"] !== null) {
            $this->PictureExpires = $param["PictureExpires"];
        }

        if (array_key_exists("StartDateTime",$param) and $param["StartDateTime"] !== null) {
            $this->StartDateTime = $param["StartDateTime"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }
    }
}

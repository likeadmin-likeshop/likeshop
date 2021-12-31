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
 * DescribePersonInfo请求参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getStartPersonId() 获取起始ID，第一次拉取时StartPersonId传0，后续送入的值为上一页最后一条数据项的PersonId
 * @method void setStartPersonId(integer $StartPersonId) 设置起始ID，第一次拉取时StartPersonId传0，后续送入的值为上一页最后一条数据项的PersonId
 * @method integer getOffset() 获取偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method void setOffset(integer $Offset) 设置偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method integer getLimit() 获取Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method void setLimit(integer $Limit) 设置Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method integer getPictureExpires() 获取图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 * @method void setPictureExpires(integer $PictureExpires) 设置图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 * @method integer getPersonType() 获取身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
 * @method void setPersonType(integer $PersonType) 设置身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
 */
class DescribePersonInfoRequest extends AbstractModel
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
     * @var integer 起始ID，第一次拉取时StartPersonId传0，后续送入的值为上一页最后一条数据项的PersonId
     */
    public $StartPersonId;

    /**
     * @var integer 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     */
    public $Offset;

    /**
     * @var integer Limit:每页的数据项，最大100，超过100会被强制指定为100
     */
    public $Limit;

    /**
     * @var integer 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
     */
    public $PictureExpires;

    /**
     * @var integer 身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
     */
    public $PersonType;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param integer $StartPersonId 起始ID，第一次拉取时StartPersonId传0，后续送入的值为上一页最后一条数据项的PersonId
     * @param integer $Offset 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     * @param integer $Limit Limit:每页的数据项，最大100，超过100会被强制指定为100
     * @param integer $PictureExpires 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
     * @param integer $PersonType 身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
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

        if (array_key_exists("StartPersonId",$param) and $param["StartPersonId"] !== null) {
            $this->StartPersonId = $param["StartPersonId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PictureExpires",$param) and $param["PictureExpires"] !== null) {
            $this->PictureExpires = $param["PictureExpires"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }
    }
}

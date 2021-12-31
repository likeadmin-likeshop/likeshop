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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐折扣详情（仅用于控制台调用询价相关接口返回）。
 *
 * @method integer getTimeSpan() 获取计费时长。
 * @method void setTimeSpan(integer $TimeSpan) 设置计费时长。
 * @method string getTimeUnit() 获取计费单元。
 * @method void setTimeUnit(string $TimeUnit) 设置计费单元。
 * @method float getTotalCost() 获取总价。
 * @method void setTotalCost(float $TotalCost) 设置总价。
 * @method float getRealTotalCost() 获取折后总价。
 * @method void setRealTotalCost(float $RealTotalCost) 设置折后总价。
 * @method integer getDiscount() 获取折扣。
 * @method void setDiscount(integer $Discount) 设置折扣。
 * @method PolicyDetail getPolicyDetail() 获取具体折扣详情。
 * @method void setPolicyDetail(PolicyDetail $PolicyDetail) 设置具体折扣详情。
 */
class DiscountDetail extends AbstractModel
{
    /**
     * @var integer 计费时长。
     */
    public $TimeSpan;

    /**
     * @var string 计费单元。
     */
    public $TimeUnit;

    /**
     * @var float 总价。
     */
    public $TotalCost;

    /**
     * @var float 折后总价。
     */
    public $RealTotalCost;

    /**
     * @var integer 折扣。
     */
    public $Discount;

    /**
     * @var PolicyDetail 具体折扣详情。
     */
    public $PolicyDetail;

    /**
     * @param integer $TimeSpan 计费时长。
     * @param string $TimeUnit 计费单元。
     * @param float $TotalCost 总价。
     * @param float $RealTotalCost 折后总价。
     * @param integer $Discount 折扣。
     * @param PolicyDetail $PolicyDetail 具体折扣详情。
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("PolicyDetail",$param) and $param["PolicyDetail"] !== null) {
            $this->PolicyDetail = new PolicyDetail();
            $this->PolicyDetail->deserialize($param["PolicyDetail"]);
        }
    }
}

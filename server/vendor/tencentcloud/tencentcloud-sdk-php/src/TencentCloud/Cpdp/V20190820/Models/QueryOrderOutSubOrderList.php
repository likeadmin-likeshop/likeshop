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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子订单列表
 *
 * @method integer getAmt() 获取子订单支付金额
 * @method void setAmt(integer $Amt) 设置子订单支付金额
 * @method integer getSubMchIncome() 获取子订单结算应收金额，单位：分
 * @method void setSubMchIncome(integer $SubMchIncome) 设置子订单结算应收金额，单位：分
 * @method string getMetadata() 获取发货标识，由业务在调用Midas下单接口的时候下发。
 * @method void setMetadata(string $Metadata) 设置发货标识，由业务在调用Midas下单接口的时候下发。
 * @method integer getOriginalAmt() 获取子订单原始金额
 * @method void setOriginalAmt(integer $OriginalAmt) 设置子订单原始金额
 * @method integer getPlatformIncome() 获取子订单平台应收金额，单位：分
 * @method void setPlatformIncome(integer $PlatformIncome) 设置子订单平台应收金额，单位：分
 * @method string getProductDetail() 获取子订单商品详情
 * @method void setProductDetail(string $ProductDetail) 设置子订单商品详情
 * @method string getProductName() 获取子订单商品名称
 * @method void setProductName(string $ProductName) 设置子订单商品名称
 * @method integer getSettleCheck() 获取核销状态，1表示核销，0表示未核销
 * @method void setSettleCheck(integer $SettleCheck) 设置核销状态，1表示核销，0表示未核销
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getSubOutTradeNo() 获取子订单号
 * @method void setSubOutTradeNo(string $SubOutTradeNo) 设置子订单号
 */
class QueryOrderOutSubOrderList extends AbstractModel
{
    /**
     * @var integer 子订单支付金额
     */
    public $Amt;

    /**
     * @var integer 子订单结算应收金额，单位：分
     */
    public $SubMchIncome;

    /**
     * @var string 发货标识，由业务在调用Midas下单接口的时候下发。
     */
    public $Metadata;

    /**
     * @var integer 子订单原始金额
     */
    public $OriginalAmt;

    /**
     * @var integer 子订单平台应收金额，单位：分
     */
    public $PlatformIncome;

    /**
     * @var string 子订单商品详情
     */
    public $ProductDetail;

    /**
     * @var string 子订单商品名称
     */
    public $ProductName;

    /**
     * @var integer 核销状态，1表示核销，0表示未核销
     */
    public $SettleCheck;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 子订单号
     */
    public $SubOutTradeNo;

    /**
     * @param integer $Amt 子订单支付金额
     * @param integer $SubMchIncome 子订单结算应收金额，单位：分
     * @param string $Metadata 发货标识，由业务在调用Midas下单接口的时候下发。
     * @param integer $OriginalAmt 子订单原始金额
     * @param integer $PlatformIncome 子订单平台应收金额，单位：分
     * @param string $ProductDetail 子订单商品详情
     * @param string $ProductName 子订单商品名称
     * @param integer $SettleCheck 核销状态，1表示核销，0表示未核销
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $SubOutTradeNo 子订单号
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
        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("SubMchIncome",$param) and $param["SubMchIncome"] !== null) {
            $this->SubMchIncome = $param["SubMchIncome"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("OriginalAmt",$param) and $param["OriginalAmt"] !== null) {
            $this->OriginalAmt = $param["OriginalAmt"];
        }

        if (array_key_exists("PlatformIncome",$param) and $param["PlatformIncome"] !== null) {
            $this->PlatformIncome = $param["PlatformIncome"];
        }

        if (array_key_exists("ProductDetail",$param) and $param["ProductDetail"] !== null) {
            $this->ProductDetail = $param["ProductDetail"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SettleCheck",$param) and $param["SettleCheck"] !== null) {
            $this->SettleCheck = $param["SettleCheck"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubOutTradeNo",$param) and $param["SubOutTradeNo"] !== null) {
            $this->SubOutTradeNo = $param["SubOutTradeNo"];
        }
    }
}

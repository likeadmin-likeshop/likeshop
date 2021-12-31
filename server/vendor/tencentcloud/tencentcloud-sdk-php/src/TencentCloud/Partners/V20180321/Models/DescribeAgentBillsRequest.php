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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentBills请求参数结构体
 *
 * @method string getSettleMonth() 获取支付月份，如2018-02
 * @method void setSettleMonth(string $SettleMonth) 设置支付月份，如2018-02
 * @method string getClientUin() 获取客户账号ID
 * @method void setClientUin(string $ClientUin) 设置客户账号ID
 * @method string getPayMode() 获取支付方式，prepay/postpay
 * @method void setPayMode(string $PayMode) 设置支付方式，prepay/postpay
 * @method string getOrderId() 获取预付费订单号
 * @method void setOrderId(string $OrderId) 设置预付费订单号
 * @method string getClientRemark() 获取客户备注名称
 * @method void setClientRemark(string $ClientRemark) 设置客户备注名称
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 */
class DescribeAgentBillsRequest extends AbstractModel
{
    /**
     * @var string 支付月份，如2018-02
     */
    public $SettleMonth;

    /**
     * @var string 客户账号ID
     */
    public $ClientUin;

    /**
     * @var string 支付方式，prepay/postpay
     */
    public $PayMode;

    /**
     * @var string 预付费订单号
     */
    public $OrderId;

    /**
     * @var string 客户备注名称
     */
    public $ClientRemark;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @param string $SettleMonth 支付月份，如2018-02
     * @param string $ClientUin 客户账号ID
     * @param string $PayMode 支付方式，prepay/postpay
     * @param string $OrderId 预付费订单号
     * @param string $ClientRemark 客户备注名称
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
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
        if (array_key_exists("SettleMonth",$param) and $param["SettleMonth"] !== null) {
            $this->SettleMonth = $param["SettleMonth"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

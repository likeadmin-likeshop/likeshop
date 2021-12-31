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
 * 创建红票明细
 *
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getCallbackUrl() 获取发票结果回传地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置发票结果回传地址
 * @method string getOrderSn() 获取业务开票号
 * @method void setOrderSn(string $OrderSn) 设置业务开票号
 * @method string getRedSerialNo() 获取红字信息表编码
 * @method void setRedSerialNo(string $RedSerialNo) 设置红字信息表编码
 * @method string getStoreNo() 获取门店编号
 * @method void setStoreNo(string $StoreNo) 设置门店编号
 */
class CreateRedInvoiceItem extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 发票结果回传地址
     */
    public $CallbackUrl;

    /**
     * @var string 业务开票号
     */
    public $OrderSn;

    /**
     * @var string 红字信息表编码
     */
    public $RedSerialNo;

    /**
     * @var string 门店编号
     */
    public $StoreNo;

    /**
     * @param string $OrderId 订单号
     * @param string $CallbackUrl 发票结果回传地址
     * @param string $OrderSn 业务开票号
     * @param string $RedSerialNo 红字信息表编码
     * @param string $StoreNo 门店编号
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("OrderSn",$param) and $param["OrderSn"] !== null) {
            $this->OrderSn = $param["OrderSn"];
        }

        if (array_key_exists("RedSerialNo",$param) and $param["RedSerialNo"] !== null) {
            $this->RedSerialNo = $param["RedSerialNo"];
        }

        if (array_key_exists("StoreNo",$param) and $param["StoreNo"] !== null) {
            $this->StoreNo = $param["StoreNo"];
        }
    }
}

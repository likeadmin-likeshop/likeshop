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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PayDeals请求参数结构体
 *
 * @method array getOrderIds() 获取需要支付的一个或者多个子订单号，与BigDealIds字段两者必须且仅传一个参数
 * @method void setOrderIds(array $OrderIds) 设置需要支付的一个或者多个子订单号，与BigDealIds字段两者必须且仅传一个参数
 * @method integer getAutoVoucher() 获取是否自动使用代金券,1:是,0否,默认0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券,1:是,0否,默认0
 * @method array getVoucherIds() 获取代金券ID列表,目前仅支持指定一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表,目前仅支持指定一张代金券
 * @method array getBigDealIds() 获取需要支付的一个或者多个大订单号，与OrderIds字段两者必须且仅传一个参数
 * @method void setBigDealIds(array $BigDealIds) 设置需要支付的一个或者多个大订单号，与OrderIds字段两者必须且仅传一个参数
 */
class PayDealsRequest extends AbstractModel
{
    /**
     * @var array 需要支付的一个或者多个子订单号，与BigDealIds字段两者必须且仅传一个参数
     */
    public $OrderIds;

    /**
     * @var integer 是否自动使用代金券,1:是,0否,默认0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表,目前仅支持指定一张代金券
     */
    public $VoucherIds;

    /**
     * @var array 需要支付的一个或者多个大订单号，与OrderIds字段两者必须且仅传一个参数
     */
    public $BigDealIds;

    /**
     * @param array $OrderIds 需要支付的一个或者多个子订单号，与BigDealIds字段两者必须且仅传一个参数
     * @param integer $AutoVoucher 是否自动使用代金券,1:是,0否,默认0
     * @param array $VoucherIds 代金券ID列表,目前仅支持指定一张代金券
     * @param array $BigDealIds 需要支付的一个或者多个大订单号，与OrderIds字段两者必须且仅传一个参数
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
        if (array_key_exists("OrderIds",$param) and $param["OrderIds"] !== null) {
            $this->OrderIds = $param["OrderIds"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }
    }
}

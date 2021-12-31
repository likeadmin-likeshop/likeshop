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
 * CreateRedInvoiceV2请求参数结构体
 *
 * @method integer getInvoicePlatformId() 获取开票平台ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getProfile() 获取接入环境。沙箱环境填 sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填 sandbox。
 * @method integer getInvoiceChannel() 获取开票渠道。0：线上渠道，1：线下渠道。不填默认为线上渠道
 * @method void setInvoiceChannel(integer $InvoiceChannel) 设置开票渠道。0：线上渠道，1：线下渠道。不填默认为线上渠道
 */
class CreateRedInvoiceV2Request extends AbstractModel
{
    /**
     * @var integer 开票平台ID
     */
    public $InvoicePlatformId;

    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。
     */
    public $Profile;

    /**
     * @var integer 开票渠道。0：线上渠道，1：线下渠道。不填默认为线上渠道
     */
    public $InvoiceChannel;

    /**
     * @param integer $InvoicePlatformId 开票平台ID
     * @param string $OrderId 订单号
     * @param string $Profile 接入环境。沙箱环境填 sandbox。
     * @param integer $InvoiceChannel 开票渠道。0：线上渠道，1：线下渠道。不填默认为线上渠道
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
        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("InvoiceChannel",$param) and $param["InvoiceChannel"] !== null) {
            $this->InvoiceChannel = $param["InvoiceChannel"];
        }
    }
}

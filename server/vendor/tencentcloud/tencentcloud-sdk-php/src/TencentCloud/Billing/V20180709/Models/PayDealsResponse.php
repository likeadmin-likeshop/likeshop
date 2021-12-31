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
 * PayDeals返回参数结构体
 *
 * @method array getOrderIds() 获取此次操作支付成功的子订单号数组
 * @method void setOrderIds(array $OrderIds) 设置此次操作支付成功的子订单号数组
 * @method array getResourceIds() 获取此次操作支付成功的资源Id数组
 * @method void setResourceIds(array $ResourceIds) 设置此次操作支付成功的资源Id数组
 * @method array getBigDealIds() 获取此次操作支付成功的大订单号数组
 * @method void setBigDealIds(array $BigDealIds) 设置此次操作支付成功的大订单号数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PayDealsResponse extends AbstractModel
{
    /**
     * @var array 此次操作支付成功的子订单号数组
     */
    public $OrderIds;

    /**
     * @var array 此次操作支付成功的资源Id数组
     */
    public $ResourceIds;

    /**
     * @var array 此次操作支付成功的大订单号数组
     */
    public $BigDealIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $OrderIds 此次操作支付成功的子订单号数组
     * @param array $ResourceIds 此次操作支付成功的资源Id数组
     * @param array $BigDealIds 此次操作支付成功的大订单号数组
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

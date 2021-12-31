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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceDeal返回参数结构体
 *
 * @method integer getStatus() 获取订单状态，1：未支付，2：已支付，3：发货中，4：发货成功，5：发货失败，6：退款，7：订单关闭，8：超时未支付关闭。
 * @method void setStatus(integer $Status) 设置订单状态，1：未支付，2：已支付，3：发货中，4：发货成功，5：发货失败，6：退款，7：订单关闭，8：超时未支付关闭。
 * @method float getOriginalPrice() 获取订单原价。
 * @method void setOriginalPrice(float $OriginalPrice) 设置订单原价。
 * @method float getDiscountPrice() 获取订单折扣价格。
 * @method void setDiscountPrice(float $DiscountPrice) 设置订单折扣价格。
 * @method string getAction() 获取订单行为，purchase：新购，renew：续费，upgrade：升配，downgrade：降配，refund：退货退款。
 * @method void setAction(string $Action) 设置订单行为，purchase：新购，renew：续费，upgrade：升配，downgrade：降配，refund：退货退款。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceDealResponse extends AbstractModel
{
    /**
     * @var integer 订单状态，1：未支付，2：已支付，3：发货中，4：发货成功，5：发货失败，6：退款，7：订单关闭，8：超时未支付关闭。
     */
    public $Status;

    /**
     * @var float 订单原价。
     */
    public $OriginalPrice;

    /**
     * @var float 订单折扣价格。
     */
    public $DiscountPrice;

    /**
     * @var string 订单行为，purchase：新购，renew：续费，upgrade：升配，downgrade：降配，refund：退货退款。
     */
    public $Action;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 订单状态，1：未支付，2：已支付，3：发货中，4：发货成功，5：发货失败，6：退款，7：订单关闭，8：超时未支付关闭。
     * @param float $OriginalPrice 订单原价。
     * @param float $DiscountPrice 订单折扣价格。
     * @param string $Action 订单行为，purchase：新购，renew：续费，upgrade：升配，downgrade：降配，refund：退货退款。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

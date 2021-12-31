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
 * DescribeAgentPayDeals请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getCreatTimeRangeStart() 获取下单时间范围起始点(不传时会默认查15天内订单，传值时需要传15天内的起始时间)
 * @method void setCreatTimeRangeStart(string $CreatTimeRangeStart) 设置下单时间范围起始点(不传时会默认查15天内订单，传值时需要传15天内的起始时间)
 * @method string getCreatTimeRangeEnd() 获取下单时间范围终止点
 * @method void setCreatTimeRangeEnd(string $CreatTimeRangeEnd) 设置下单时间范围终止点
 * @method integer getOrder() 获取0:下单时间降序；其他：下单时间升序
 * @method void setOrder(integer $Order) 设置0:下单时间降序；其他：下单时间升序
 * @method integer getStatus() 获取订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
 * @method void setStatus(integer $Status) 设置订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
 * @method array getOwnerUins() 获取下单人账号ID列表
 * @method void setOwnerUins(array $OwnerUins) 设置下单人账号ID列表
 * @method array getDealNames() 获取订单号列表
 * @method void setDealNames(array $DealNames) 设置订单号列表
 */
class DescribeAgentPayDealsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 下单时间范围起始点(不传时会默认查15天内订单，传值时需要传15天内的起始时间)
     */
    public $CreatTimeRangeStart;

    /**
     * @var string 下单时间范围终止点
     */
    public $CreatTimeRangeEnd;

    /**
     * @var integer 0:下单时间降序；其他：下单时间升序
     */
    public $Order;

    /**
     * @var integer 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
     */
    public $Status;

    /**
     * @var array 下单人账号ID列表
     */
    public $OwnerUins;

    /**
     * @var array 订单号列表
     */
    public $DealNames;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $CreatTimeRangeStart 下单时间范围起始点(不传时会默认查15天内订单，传值时需要传15天内的起始时间)
     * @param string $CreatTimeRangeEnd 下单时间范围终止点
     * @param integer $Order 0:下单时间降序；其他：下单时间升序
     * @param integer $Status 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
     * @param array $OwnerUins 下单人账号ID列表
     * @param array $DealNames 订单号列表
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreatTimeRangeStart",$param) and $param["CreatTimeRangeStart"] !== null) {
            $this->CreatTimeRangeStart = $param["CreatTimeRangeStart"];
        }

        if (array_key_exists("CreatTimeRangeEnd",$param) and $param["CreatTimeRangeEnd"] !== null) {
            $this->CreatTimeRangeEnd = $param["CreatTimeRangeEnd"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}

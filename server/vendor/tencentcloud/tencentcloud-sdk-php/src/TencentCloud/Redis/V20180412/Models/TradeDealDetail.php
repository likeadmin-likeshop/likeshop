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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单交易信息
 *
 * @method string getDealId() 获取订单号ID，调用云API时使用此ID
 * @method void setDealId(string $DealId) 设置订单号ID，调用云API时使用此ID
 * @method string getDealName() 获取长订单ID，反馈订单问题给官方客服使用此ID
 * @method void setDealName(string $DealName) 设置长订单ID，反馈订单问题给官方客服使用此ID
 * @method integer getZoneId() 获取可用区id
 * @method void setZoneId(integer $ZoneId) 设置可用区id
 * @method integer getGoodsNum() 获取订单关联的实例数
 * @method void setGoodsNum(integer $GoodsNum) 设置订单关联的实例数
 * @method string getCreater() 获取创建用户uin
 * @method void setCreater(string $Creater) 设置创建用户uin
 * @method string getCreatTime() 获取订单创建时间
 * @method void setCreatTime(string $CreatTime) 设置订单创建时间
 * @method string getOverdueTime() 获取订单超时时间
 * @method void setOverdueTime(string $OverdueTime) 设置订单超时时间
 * @method string getEndTime() 获取订单完成时间
 * @method void setEndTime(string $EndTime) 设置订单完成时间
 * @method integer getStatus() 获取订单状态 1：未支付 2:已支付，未发货 3:发货中 4:发货成功 5:发货失败 6:已退款 7:已关闭订单 8:订单过期 9:订单已失效 10:产品已失效 11:代付拒绝 12:支付中
 * @method void setStatus(integer $Status) 设置订单状态 1：未支付 2:已支付，未发货 3:发货中 4:发货成功 5:发货失败 6:已退款 7:已关闭订单 8:订单过期 9:订单已失效 10:产品已失效 11:代付拒绝 12:支付中
 * @method string getDescription() 获取订单状态描述
 * @method void setDescription(string $Description) 设置订单状态描述
 * @method integer getPrice() 获取订单实际总价，单位：分
 * @method void setPrice(integer $Price) 设置订单实际总价，单位：分
 * @method array getInstanceIds() 获取实例ID
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID
 */
class TradeDealDetail extends AbstractModel
{
    /**
     * @var string 订单号ID，调用云API时使用此ID
     */
    public $DealId;

    /**
     * @var string 长订单ID，反馈订单问题给官方客服使用此ID
     */
    public $DealName;

    /**
     * @var integer 可用区id
     */
    public $ZoneId;

    /**
     * @var integer 订单关联的实例数
     */
    public $GoodsNum;

    /**
     * @var string 创建用户uin
     */
    public $Creater;

    /**
     * @var string 订单创建时间
     */
    public $CreatTime;

    /**
     * @var string 订单超时时间
     */
    public $OverdueTime;

    /**
     * @var string 订单完成时间
     */
    public $EndTime;

    /**
     * @var integer 订单状态 1：未支付 2:已支付，未发货 3:发货中 4:发货成功 5:发货失败 6:已退款 7:已关闭订单 8:订单过期 9:订单已失效 10:产品已失效 11:代付拒绝 12:支付中
     */
    public $Status;

    /**
     * @var string 订单状态描述
     */
    public $Description;

    /**
     * @var integer 订单实际总价，单位：分
     */
    public $Price;

    /**
     * @var array 实例ID
     */
    public $InstanceIds;

    /**
     * @param string $DealId 订单号ID，调用云API时使用此ID
     * @param string $DealName 长订单ID，反馈订单问题给官方客服使用此ID
     * @param integer $ZoneId 可用区id
     * @param integer $GoodsNum 订单关联的实例数
     * @param string $Creater 创建用户uin
     * @param string $CreatTime 订单创建时间
     * @param string $OverdueTime 订单超时时间
     * @param string $EndTime 订单完成时间
     * @param integer $Status 订单状态 1：未支付 2:已支付，未发货 3:发货中 4:发货成功 5:发货失败 6:已退款 7:已关闭订单 8:订单过期 9:订单已失效 10:产品已失效 11:代付拒绝 12:支付中
     * @param string $Description 订单状态描述
     * @param integer $Price 订单实际总价，单位：分
     * @param array $InstanceIds 实例ID
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("OverdueTime",$param) and $param["OverdueTime"] !== null) {
            $this->OverdueTime = $param["OverdueTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}

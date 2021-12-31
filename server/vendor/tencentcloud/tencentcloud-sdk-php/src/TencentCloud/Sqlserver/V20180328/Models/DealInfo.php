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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单信息
 *
 * @method string getDealName() 获取订单名
 * @method void setDealName(string $DealName) 设置订单名
 * @method integer getCount() 获取商品数量
 * @method void setCount(integer $Count) 设置商品数量
 * @method integer getFlowId() 获取关联的流程 ID，可用于查询流程执行状态
 * @method void setFlowId(integer $FlowId) 设置关联的流程 ID，可用于查询流程执行状态
 * @method array getInstanceIdSet() 获取只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
 * @method string getOwnerUin() 获取所属账号
 * @method void setOwnerUin(string $OwnerUin) 设置所属账号
 * @method string getInstanceChargeType() 获取实例付费类型
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例付费类型
 */
class DealInfo extends AbstractModel
{
    /**
     * @var string 订单名
     */
    public $DealName;

    /**
     * @var integer 商品数量
     */
    public $Count;

    /**
     * @var integer 关联的流程 ID，可用于查询流程执行状态
     */
    public $FlowId;

    /**
     * @var array 只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
     */
    public $InstanceIdSet;

    /**
     * @var string 所属账号
     */
    public $OwnerUin;

    /**
     * @var string 实例付费类型
     */
    public $InstanceChargeType;

    /**
     * @param string $DealName 订单名
     * @param integer $Count 商品数量
     * @param integer $FlowId 关联的流程 ID，可用于查询流程执行状态
     * @param array $InstanceIdSet 只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
     * @param string $OwnerUin 所属账号
     * @param string $InstanceChargeType 实例付费类型
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}

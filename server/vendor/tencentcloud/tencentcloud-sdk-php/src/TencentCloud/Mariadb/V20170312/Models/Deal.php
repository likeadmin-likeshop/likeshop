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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单信息
 *
 * @method string getDealName() 获取订单号
 * @method void setDealName(string $DealName) 设置订单号
 * @method string getOwnerUin() 获取所属账号
 * @method void setOwnerUin(string $OwnerUin) 设置所属账号
 * @method integer getCount() 获取商品数量
 * @method void setCount(integer $Count) 设置商品数量
 * @method integer getFlowId() 获取关联的流程 Id，可用于查询流程执行状态
 * @method void setFlowId(integer $FlowId) 设置关联的流程 Id，可用于查询流程执行状态
 * @method array getInstanceIds() 获取只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIds(array $InstanceIds) 设置只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取付费模式，0后付费/1预付费
 * @method void setPayMode(integer $PayMode) 设置付费模式，0后付费/1预付费
 */
class Deal extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $DealName;

    /**
     * @var string 所属账号
     */
    public $OwnerUin;

    /**
     * @var integer 商品数量
     */
    public $Count;

    /**
     * @var integer 关联的流程 Id，可用于查询流程执行状态
     */
    public $FlowId;

    /**
     * @var array 只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIds;

    /**
     * @var integer 付费模式，0后付费/1预付费
     */
    public $PayMode;

    /**
     * @param string $DealName 订单号
     * @param string $OwnerUin 所属账号
     * @param integer $Count 商品数量
     * @param integer $FlowId 关联的流程 Id，可用于查询流程执行状态
     * @param array $InstanceIds 只有创建实例的订单会填充该字段，表示该订单创建的实例的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 付费模式，0后付费/1预付费
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}

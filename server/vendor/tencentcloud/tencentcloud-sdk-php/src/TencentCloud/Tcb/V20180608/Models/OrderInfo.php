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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单信息
 *
 * @method string getTranId() 获取订单号
 * @method void setTranId(string $TranId) 设置订单号
 * @method string getPackageId() 获取订单要切换的套餐ID
 * @method void setPackageId(string $PackageId) 设置订单要切换的套餐ID
 * @method string getTranType() 获取订单类型
<li>1 购买</li>
<li>2 续费</li>
<li>3 变配</li>
 * @method void setTranType(string $TranType) 设置订单类型
<li>1 购买</li>
<li>2 续费</li>
<li>3 变配</li>
 * @method string getTranStatus() 获取订单状态。
<li>1未支付</li>
<li>2 支付中</li>
<li>3 发货中</li>
<li>4 发货成功</li>
<li>5 发货失败</li>
<li>6 已退款</li>
<li>7 已取消</li>
<li>100 已删除</li>
 * @method void setTranStatus(string $TranStatus) 设置订单状态。
<li>1未支付</li>
<li>2 支付中</li>
<li>3 发货中</li>
<li>4 发货成功</li>
<li>5 发货失败</li>
<li>6 已退款</li>
<li>7 已取消</li>
<li>100 已删除</li>
 * @method string getUpdateTime() 获取订单更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置订单更新时间
 * @method string getCreateTime() 获取订单创建时间
 * @method void setCreateTime(string $CreateTime) 设置订单创建时间
 * @method string getPayMode() 获取付费模式.
<li>prepayment 预付费</li>
<li>postpaid 后付费</li>
 * @method void setPayMode(string $PayMode) 设置付费模式.
<li>prepayment 预付费</li>
<li>postpaid 后付费</li>
 * @method string getExtensionId() 获取订单绑定的扩展ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensionId(string $ExtensionId) 设置订单绑定的扩展ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceReady() 获取资源初始化结果(仅当ExtensionId不为空时有效): successful(初始化成功), failed(初始化失败), doing(初始化进行中), init(准备初始化)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceReady(string $ResourceReady) 设置资源初始化结果(仅当ExtensionId不为空时有效): successful(初始化成功), failed(初始化失败), doing(初始化进行中), init(准备初始化)
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrderInfo extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $TranId;

    /**
     * @var string 订单要切换的套餐ID
     */
    public $PackageId;

    /**
     * @var string 订单类型
<li>1 购买</li>
<li>2 续费</li>
<li>3 变配</li>
     */
    public $TranType;

    /**
     * @var string 订单状态。
<li>1未支付</li>
<li>2 支付中</li>
<li>3 发货中</li>
<li>4 发货成功</li>
<li>5 发货失败</li>
<li>6 已退款</li>
<li>7 已取消</li>
<li>100 已删除</li>
     */
    public $TranStatus;

    /**
     * @var string 订单更新时间
     */
    public $UpdateTime;

    /**
     * @var string 订单创建时间
     */
    public $CreateTime;

    /**
     * @var string 付费模式.
<li>prepayment 预付费</li>
<li>postpaid 后付费</li>
     */
    public $PayMode;

    /**
     * @var string 订单绑定的扩展ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtensionId;

    /**
     * @var string 资源初始化结果(仅当ExtensionId不为空时有效): successful(初始化成功), failed(初始化失败), doing(初始化进行中), init(准备初始化)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceReady;

    /**
     * @param string $TranId 订单号
     * @param string $PackageId 订单要切换的套餐ID
     * @param string $TranType 订单类型
<li>1 购买</li>
<li>2 续费</li>
<li>3 变配</li>
     * @param string $TranStatus 订单状态。
<li>1未支付</li>
<li>2 支付中</li>
<li>3 发货中</li>
<li>4 发货成功</li>
<li>5 发货失败</li>
<li>6 已退款</li>
<li>7 已取消</li>
<li>100 已删除</li>
     * @param string $UpdateTime 订单更新时间
     * @param string $CreateTime 订单创建时间
     * @param string $PayMode 付费模式.
<li>prepayment 预付费</li>
<li>postpaid 后付费</li>
     * @param string $ExtensionId 订单绑定的扩展ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceReady 资源初始化结果(仅当ExtensionId不为空时有效): successful(初始化成功), failed(初始化失败), doing(初始化进行中), init(准备初始化)
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("TranType",$param) and $param["TranType"] !== null) {
            $this->TranType = $param["TranType"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ResourceReady",$param) and $param["ResourceReady"] !== null) {
            $this->ResourceReady = $param["ResourceReady"];
        }
    }
}

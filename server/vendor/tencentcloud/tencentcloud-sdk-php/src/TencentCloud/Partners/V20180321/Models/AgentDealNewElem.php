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
 * 描述代理商代付的订单信息
 *
 * @method string getDealId() 获取订单自增 ID
 * @method void setDealId(string $DealId) 设置订单自增 ID
 * @method string getDealName() 获取订单号
 * @method void setDealName(string $DealName) 设置订单号
 * @method string getGoodsCategoryId() 获取商品类型 ID
 * @method void setGoodsCategoryId(string $GoodsCategoryId) 设置商品类型 ID
 * @method string getOwnerUin() 获取订单所有者
 * @method void setOwnerUin(string $OwnerUin) 设置订单所有者
 * @method string getAppId() 获取订单所有者对应 appId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置订单所有者对应 appId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGoodsNum() 获取商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsNum(string $GoodsNum) 设置商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method DealGoodsPriceNewElem getGoodsPrice() 获取价格详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsPrice(DealGoodsPriceNewElem $GoodsPrice) 设置价格详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取下单人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置下单人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatTime() 获取下单时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatTime(string $CreatTime) 设置下单时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayEndTime() 获取支付结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayEndTime(string $PayEndTime) 设置支付结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillId() 获取扣费流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillId(string $BillId) 设置扣费流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayer() 获取支付人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayer(string $Payer) 设置支付人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealStatus() 获取订单状态，中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealStatus(string $DealStatus) 设置订单状态，中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGoodsName() 获取产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsName(string $GoodsName) 设置产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientRemark() 获取客户备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientRemark(string $ClientRemark) 设置客户备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取订单操作类型，purchase（新购），renew（续费），modify（配置变更）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置订单操作类型，purchase（新购），renew（续费），modify（配置变更）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoucherDecline() 获取代金券抵扣金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoucherDecline(string $VoucherDecline) 设置代金券抵扣金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBigDealId() 获取大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealId(string $BigDealId) 设置大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientType() 获取客户类型（new：新拓；old：存量；assign：指派）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientType(string $ClientType) 设置客户类型（new：新拓；old：存量；assign：指派）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectType() 获取项目类型（self：自拓；repeat：直销；platform：官网合作）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectType(string $ProjectType) 设置项目类型（self：自拓；repeat：直销；platform：官网合作）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSalesUin() 获取业务员账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesUin(string $SalesUin) 设置业务员账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerMode() 获取支付方式，0：自付；1：代付
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayerMode(string $PayerMode) 设置支付方式，0：自付；1：代付
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityId() 获取活动ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(string $ActivityId) 设置活动ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOverdueTime() 获取订单过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverdueTime(string $OverdueTime) 设置订单过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductInfo() 获取产品详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductInfo(array $ProductInfo) 设置产品详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentDealNewElem extends AbstractModel
{
    /**
     * @var string 订单自增 ID
     */
    public $DealId;

    /**
     * @var string 订单号
     */
    public $DealName;

    /**
     * @var string 商品类型 ID
     */
    public $GoodsCategoryId;

    /**
     * @var string 订单所有者
     */
    public $OwnerUin;

    /**
     * @var string 订单所有者对应 appId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsNum;

    /**
     * @var DealGoodsPriceNewElem 价格详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsPrice;

    /**
     * @var string 下单人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creater;

    /**
     * @var string 下单时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatTime;

    /**
     * @var string 支付结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayEndTime;

    /**
     * @var string 扣费流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillId;

    /**
     * @var string 支付人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Payer;

    /**
     * @var string 订单状态，中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealStatus;

    /**
     * @var string 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsName;

    /**
     * @var string 客户备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientRemark;

    /**
     * @var string 订单操作类型，purchase（新购），renew（续费），modify（配置变更）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var string 代金券抵扣金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoucherDecline;

    /**
     * @var string 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealId;

    /**
     * @var string 客户类型（new：新拓；old：存量；assign：指派）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientType;

    /**
     * @var string 项目类型（self：自拓；repeat：直销；platform：官网合作）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectType;

    /**
     * @var string 业务员账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesUin;

    /**
     * @var string 支付方式，0：自付；1：代付
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayerMode;

    /**
     * @var string 活动ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityId;

    /**
     * @var string 订单过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverdueTime;

    /**
     * @var array 产品详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductInfo;

    /**
     * @param string $DealId 订单自增 ID
     * @param string $DealName 订单号
     * @param string $GoodsCategoryId 商品类型 ID
     * @param string $OwnerUin 订单所有者
     * @param string $AppId 订单所有者对应 appId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GoodsNum 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param DealGoodsPriceNewElem $GoodsPrice 价格详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater 下单人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatTime 下单时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayEndTime 支付结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillId 扣费流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Payer 支付人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealStatus 订单状态，中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 订单的状态(1：未支付;2：已支付;3：发货中;4：已发货;5：发货失败;6：已退款;7：已关单;8：订单过期;9：订单已失效;10：产品已失效;11：代付拒绝;12：支付中)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GoodsName 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientRemark 客户备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType 订单操作类型，purchase（新购），renew（续费），modify（配置变更）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoucherDecline 代金券抵扣金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BigDealId 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientType 客户类型（new：新拓；old：存量；assign：指派）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectType 项目类型（self：自拓；repeat：直销；platform：官网合作）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SalesUin 业务员账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerMode 支付方式，0：自付；1：代付
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityId 活动ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OverdueTime 订单过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductInfo 产品详情
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("GoodsPrice",$param) and $param["GoodsPrice"] !== null) {
            $this->GoodsPrice = new DealGoodsPriceNewElem();
            $this->GoodsPrice->deserialize($param["GoodsPrice"]);
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("PayEndTime",$param) and $param["PayEndTime"] !== null) {
            $this->PayEndTime = $param["PayEndTime"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("DealStatus",$param) and $param["DealStatus"] !== null) {
            $this->DealStatus = $param["DealStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GoodsName",$param) and $param["GoodsName"] !== null) {
            $this->GoodsName = $param["GoodsName"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VoucherDecline",$param) and $param["VoucherDecline"] !== null) {
            $this->VoucherDecline = $param["VoucherDecline"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("PayerMode",$param) and $param["PayerMode"] !== null) {
            $this->PayerMode = $param["PayerMode"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("OverdueTime",$param) and $param["OverdueTime"] !== null) {
            $this->OverdueTime = $param["OverdueTime"];
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = [];
            foreach ($param["ProductInfo"] as $key => $value){
                $obj = new ProductInfoElem();
                $obj->deserialize($value);
                array_push($this->ProductInfo, $obj);
            }
        }
    }
}

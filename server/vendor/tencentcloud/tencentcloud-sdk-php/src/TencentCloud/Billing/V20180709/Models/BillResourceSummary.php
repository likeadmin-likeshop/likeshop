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
 * 账单资源汇总数据对象
 *
 * @method string getBusinessCodeName() 获取产品名称：云产品大类，如云服务器CVM、云数据库MySQL
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：云产品大类，如云服务器CVM、云数据库MySQL
 * @method string getProductCodeName() 获取子产品：云产品子类，如云服务器CVM-标准型S1， 当没有获取到子产品名称时，返回"-"
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品：云产品子类，如云服务器CVM-标准型S1， 当没有获取到子产品名称时，返回"-"
 * @method string getPayModeName() 获取计费模式：包年包月和按量计费
 * @method void setPayModeName(string $PayModeName) 设置计费模式：包年包月和按量计费
 * @method string getProjectName() 获取项目
 * @method void setProjectName(string $ProjectName) 设置项目
 * @method string getRegionName() 获取地域
 * @method void setRegionName(string $RegionName) 设置地域
 * @method string getZoneName() 获取可用区
 * @method void setZoneName(string $ZoneName) 设置可用区
 * @method string getResourceId() 获取资源实例ID
 * @method void setResourceId(string $ResourceId) 设置资源实例ID
 * @method string getResourceName() 获取资源实例名称
 * @method void setResourceName(string $ResourceName) 设置资源实例名称
 * @method string getActionTypeName() 获取交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getPayTime() 获取扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间
 * @method string getFeeBeginTime() 获取开始使用时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置开始使用时间
 * @method string getFeeEndTime() 获取结束使用时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置结束使用时间
 * @method string getConfigDesc() 获取配置描述
 * @method void setConfigDesc(string $ConfigDesc) 设置配置描述
 * @method string getExtendField1() 获取扩展字段1
 * @method void setExtendField1(string $ExtendField1) 设置扩展字段1
 * @method string getExtendField2() 获取扩展字段2
 * @method void setExtendField2(string $ExtendField2) 设置扩展字段2
 * @method string getTotalCost() 获取原价，单位为元
 * @method void setTotalCost(string $TotalCost) 设置原价，单位为元
 * @method string getDiscount() 获取折扣率
 * @method void setDiscount(string $Discount) 设置折扣率
 * @method string getReduceType() 获取优惠类型
 * @method void setReduceType(string $ReduceType) 设置优惠类型
 * @method string getRealTotalCost() 获取优惠后总价，单位为元
 * @method void setRealTotalCost(string $RealTotalCost) 设置优惠后总价，单位为元
 * @method string getVoucherPayAmount() 获取代金券支付金额，单位为元
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券支付金额，单位为元
 * @method string getCashPayAmount() 获取现金账户支付金额，单位为元
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支付金额，单位为元
 * @method string getIncentivePayAmount() 获取赠送账户支付金额，单位为元
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支付金额，单位为元
 * @method string getExtendField3() 获取扩展字段3
 * @method void setExtendField3(string $ExtendField3) 设置扩展字段3
 * @method string getExtendField4() 获取扩展字段4
 * @method void setExtendField4(string $ExtendField4) 设置扩展字段4
 * @method string getExtendField5() 获取扩展字段5
 * @method void setExtendField5(string $ExtendField5) 设置扩展字段5
 * @method array getTags() 获取Tag 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置Tag 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerUin() 获取付款方uin
 * @method void setPayerUin(string $PayerUin) 设置付款方uin
 * @method string getOwnerUin() 获取资源所有者uin,无值则返回"-"
 * @method void setOwnerUin(string $OwnerUin) 设置资源所有者uin,无值则返回"-"
 * @method string getOperateUin() 获取操作者uin,无值则返回"-"
 * @method void setOperateUin(string $OperateUin) 设置操作者uin,无值则返回"-"
 * @method string getBusinessCode() 获取商品名称代码
 * @method void setBusinessCode(string $BusinessCode) 设置商品名称代码
 * @method string getProductCode() 获取子商品名称代码
 * @method void setProductCode(string $ProductCode) 设置子商品名称代码
 * @method integer getRegionId() 获取区域ID
 * @method void setRegionId(integer $RegionId) 设置区域ID
 */
class BillResourceSummary extends AbstractModel
{
    /**
     * @var string 产品名称：云产品大类，如云服务器CVM、云数据库MySQL
     */
    public $BusinessCodeName;

    /**
     * @var string 子产品：云产品子类，如云服务器CVM-标准型S1， 当没有获取到子产品名称时，返回"-"
     */
    public $ProductCodeName;

    /**
     * @var string 计费模式：包年包月和按量计费
     */
    public $PayModeName;

    /**
     * @var string 项目
     */
    public $ProjectName;

    /**
     * @var string 地域
     */
    public $RegionName;

    /**
     * @var string 可用区
     */
    public $ZoneName;

    /**
     * @var string 资源实例ID
     */
    public $ResourceId;

    /**
     * @var string 资源实例名称
     */
    public $ResourceName;

    /**
     * @var string 交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
     */
    public $ActionTypeName;

    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 扣费时间
     */
    public $PayTime;

    /**
     * @var string 开始使用时间
     */
    public $FeeBeginTime;

    /**
     * @var string 结束使用时间
     */
    public $FeeEndTime;

    /**
     * @var string 配置描述
     */
    public $ConfigDesc;

    /**
     * @var string 扩展字段1
     */
    public $ExtendField1;

    /**
     * @var string 扩展字段2
     */
    public $ExtendField2;

    /**
     * @var string 原价，单位为元
     */
    public $TotalCost;

    /**
     * @var string 折扣率
     */
    public $Discount;

    /**
     * @var string 优惠类型
     */
    public $ReduceType;

    /**
     * @var string 优惠后总价，单位为元
     */
    public $RealTotalCost;

    /**
     * @var string 代金券支付金额，单位为元
     */
    public $VoucherPayAmount;

    /**
     * @var string 现金账户支付金额，单位为元
     */
    public $CashPayAmount;

    /**
     * @var string 赠送账户支付金额，单位为元
     */
    public $IncentivePayAmount;

    /**
     * @var string 扩展字段3
     */
    public $ExtendField3;

    /**
     * @var string 扩展字段4
     */
    public $ExtendField4;

    /**
     * @var string 扩展字段5
     */
    public $ExtendField5;

    /**
     * @var array Tag 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 付款方uin
     */
    public $PayerUin;

    /**
     * @var string 资源所有者uin,无值则返回"-"
     */
    public $OwnerUin;

    /**
     * @var string 操作者uin,无值则返回"-"
     */
    public $OperateUin;

    /**
     * @var string 商品名称代码
     */
    public $BusinessCode;

    /**
     * @var string 子商品名称代码
     */
    public $ProductCode;

    /**
     * @var integer 区域ID
     */
    public $RegionId;

    /**
     * @param string $BusinessCodeName 产品名称：云产品大类，如云服务器CVM、云数据库MySQL
     * @param string $ProductCodeName 子产品：云产品子类，如云服务器CVM-标准型S1， 当没有获取到子产品名称时，返回"-"
     * @param string $PayModeName 计费模式：包年包月和按量计费
     * @param string $ProjectName 项目
     * @param string $RegionName 地域
     * @param string $ZoneName 可用区
     * @param string $ResourceId 资源实例ID
     * @param string $ResourceName 资源实例名称
     * @param string $ActionTypeName 交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
     * @param string $OrderId 订单ID
     * @param string $PayTime 扣费时间
     * @param string $FeeBeginTime 开始使用时间
     * @param string $FeeEndTime 结束使用时间
     * @param string $ConfigDesc 配置描述
     * @param string $ExtendField1 扩展字段1
     * @param string $ExtendField2 扩展字段2
     * @param string $TotalCost 原价，单位为元
     * @param string $Discount 折扣率
     * @param string $ReduceType 优惠类型
     * @param string $RealTotalCost 优惠后总价，单位为元
     * @param string $VoucherPayAmount 代金券支付金额，单位为元
     * @param string $CashPayAmount 现金账户支付金额，单位为元
     * @param string $IncentivePayAmount 赠送账户支付金额，单位为元
     * @param string $ExtendField3 扩展字段3
     * @param string $ExtendField4 扩展字段4
     * @param string $ExtendField5 扩展字段5
     * @param array $Tags Tag 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerUin 付款方uin
     * @param string $OwnerUin 资源所有者uin,无值则返回"-"
     * @param string $OperateUin 操作者uin,无值则返回"-"
     * @param string $BusinessCode 商品名称代码
     * @param string $ProductCode 子商品名称代码
     * @param integer $RegionId 区域ID
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
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ConfigDesc",$param) and $param["ConfigDesc"] !== null) {
            $this->ConfigDesc = $param["ConfigDesc"];
        }

        if (array_key_exists("ExtendField1",$param) and $param["ExtendField1"] !== null) {
            $this->ExtendField1 = $param["ExtendField1"];
        }

        if (array_key_exists("ExtendField2",$param) and $param["ExtendField2"] !== null) {
            $this->ExtendField2 = $param["ExtendField2"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("ExtendField3",$param) and $param["ExtendField3"] !== null) {
            $this->ExtendField3 = $param["ExtendField3"];
        }

        if (array_key_exists("ExtendField4",$param) and $param["ExtendField4"] !== null) {
            $this->ExtendField4 = $param["ExtendField4"];
        }

        if (array_key_exists("ExtendField5",$param) and $param["ExtendField5"] !== null) {
            $this->ExtendField5 = $param["ExtendField5"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}

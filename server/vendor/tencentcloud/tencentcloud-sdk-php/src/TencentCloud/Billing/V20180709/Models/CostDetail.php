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
 * 消耗明细数据类型
 *
 * @method string getPayerUin() 获取支付者uin
 * @method void setPayerUin(string $PayerUin) 设置支付者uin
 * @method string getBusinessCodeName() 获取业务名称
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置业务名称
 * @method string getProductCodeName() 获取产品名称
 * @method void setProductCodeName(string $ProductCodeName) 设置产品名称
 * @method string getPayModeName() 获取计费模式名称
 * @method void setPayModeName(string $PayModeName) 设置计费模式名称
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getRegionName() 获取区域名称
 * @method void setRegionName(string $RegionName) 设置区域名称
 * @method string getZoneName() 获取地区名称
 * @method void setZoneName(string $ZoneName) 设置地区名称
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getActionTypeName() 获取类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionTypeName(string $ActionTypeName) 设置类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method string getBillId() 获取交易id
 * @method void setBillId(string $BillId) 设置交易id
 * @method string getFeeBeginTime() 获取费用开始时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置费用开始时间
 * @method string getFeeEndTime() 获取费用结束时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置费用结束时间
 * @method array getComponentSet() 获取组件明细
 * @method void setComponentSet(array $ComponentSet) 设置组件明细
 * @method string getProductCode() 获取产品代码
 * @method void setProductCode(string $ProductCode) 设置产品代码
 */
class CostDetail extends AbstractModel
{
    /**
     * @var string 支付者uin
     */
    public $PayerUin;

    /**
     * @var string 业务名称
     */
    public $BusinessCodeName;

    /**
     * @var string 产品名称
     */
    public $ProductCodeName;

    /**
     * @var string 计费模式名称
     */
    public $PayModeName;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 区域名称
     */
    public $RegionName;

    /**
     * @var string 地区名称
     */
    public $ZoneName;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionTypeName;

    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var string 交易id
     */
    public $BillId;

    /**
     * @var string 费用开始时间
     */
    public $FeeBeginTime;

    /**
     * @var string 费用结束时间
     */
    public $FeeEndTime;

    /**
     * @var array 组件明细
     */
    public $ComponentSet;

    /**
     * @var string 产品代码
     */
    public $ProductCode;

    /**
     * @param string $PayerUin 支付者uin
     * @param string $BusinessCodeName 业务名称
     * @param string $ProductCodeName 产品名称
     * @param string $PayModeName 计费模式名称
     * @param string $ProjectName 项目名称
     * @param string $RegionName 区域名称
     * @param string $ZoneName 地区名称
     * @param string $ResourceId 资源id
     * @param string $ResourceName 资源名称
     * @param string $ActionTypeName 类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单id
     * @param string $BillId 交易id
     * @param string $FeeBeginTime 费用开始时间
     * @param string $FeeEndTime 费用结束时间
     * @param array $ComponentSet 组件明细
     * @param string $ProductCode 产品代码
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
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

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new CostComponentSet();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }
    }
}

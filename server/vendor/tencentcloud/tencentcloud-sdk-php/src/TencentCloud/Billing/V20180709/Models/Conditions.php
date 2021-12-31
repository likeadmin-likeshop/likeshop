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
 * 账单筛选条件对象
 *
 * @method integer getTimeRange() 获取只支持6和12两个值
 * @method void setTimeRange(integer $TimeRange) 设置只支持6和12两个值
 * @method string getBusinessCode() 获取产品编码
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getPayMode() 获取付费模式，可选prePay和postPay
 * @method void setPayMode(string $PayMode) 设置付费模式，可选prePay和postPay
 * @method string getResourceKeyword() 获取资源关键字
 * @method void setResourceKeyword(string $ResourceKeyword) 设置资源关键字
 * @method array getBusinessCodes() 获取产品编码
 * @method void setBusinessCodes(array $BusinessCodes) 设置产品编码
 * @method array getProductCodes() 获取子产品编码
 * @method void setProductCodes(array $ProductCodes) 设置子产品编码
 * @method array getRegionIds() 获取地域ID
 * @method void setRegionIds(array $RegionIds) 设置地域ID
 * @method array getProjectIds() 获取项目ID
 * @method void setProjectIds(array $ProjectIds) 设置项目ID
 * @method array getPayModes() 获取付费模式，可选prePay和postPay
 * @method void setPayModes(array $PayModes) 设置付费模式，可选prePay和postPay
 * @method array getActionTypes() 获取交易类型
 * @method void setActionTypes(array $ActionTypes) 设置交易类型
 * @method integer getHideFreeCost() 获取是否隐藏0元流水
 * @method void setHideFreeCost(integer $HideFreeCost) 设置是否隐藏0元流水
 * @method string getOrderByCost() 获取排序规则，可选desc和asc
 * @method void setOrderByCost(string $OrderByCost) 设置排序规则，可选desc和asc
 * @method array getBillIds() 获取交易ID
 * @method void setBillIds(array $BillIds) 设置交易ID
 * @method array getComponentCodes() 获取组件编码
 * @method void setComponentCodes(array $ComponentCodes) 设置组件编码
 * @method array getFileIds() 获取文件ID
 * @method void setFileIds(array $FileIds) 设置文件ID
 * @method array getFileTypes() 获取文件类型
 * @method void setFileTypes(array $FileTypes) 设置文件类型
 * @method array getStatus() 获取状态
 * @method void setStatus(array $Status) 设置状态
 */
class Conditions extends AbstractModel
{
    /**
     * @var integer 只支持6和12两个值
     */
    public $TimeRange;

    /**
     * @var string 产品编码
     */
    public $BusinessCode;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 付费模式，可选prePay和postPay
     */
    public $PayMode;

    /**
     * @var string 资源关键字
     */
    public $ResourceKeyword;

    /**
     * @var array 产品编码
     */
    public $BusinessCodes;

    /**
     * @var array 子产品编码
     */
    public $ProductCodes;

    /**
     * @var array 地域ID
     */
    public $RegionIds;

    /**
     * @var array 项目ID
     */
    public $ProjectIds;

    /**
     * @var array 付费模式，可选prePay和postPay
     */
    public $PayModes;

    /**
     * @var array 交易类型
     */
    public $ActionTypes;

    /**
     * @var integer 是否隐藏0元流水
     */
    public $HideFreeCost;

    /**
     * @var string 排序规则，可选desc和asc
     */
    public $OrderByCost;

    /**
     * @var array 交易ID
     */
    public $BillIds;

    /**
     * @var array 组件编码
     */
    public $ComponentCodes;

    /**
     * @var array 文件ID
     */
    public $FileIds;

    /**
     * @var array 文件类型
     */
    public $FileTypes;

    /**
     * @var array 状态
     */
    public $Status;

    /**
     * @param integer $TimeRange 只支持6和12两个值
     * @param string $BusinessCode 产品编码
     * @param integer $ProjectId 项目ID
     * @param integer $RegionId 地域ID
     * @param string $PayMode 付费模式，可选prePay和postPay
     * @param string $ResourceKeyword 资源关键字
     * @param array $BusinessCodes 产品编码
     * @param array $ProductCodes 子产品编码
     * @param array $RegionIds 地域ID
     * @param array $ProjectIds 项目ID
     * @param array $PayModes 付费模式，可选prePay和postPay
     * @param array $ActionTypes 交易类型
     * @param integer $HideFreeCost 是否隐藏0元流水
     * @param string $OrderByCost 排序规则，可选desc和asc
     * @param array $BillIds 交易ID
     * @param array $ComponentCodes 组件编码
     * @param array $FileIds 文件ID
     * @param array $FileTypes 文件类型
     * @param array $Status 状态
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceKeyword",$param) and $param["ResourceKeyword"] !== null) {
            $this->ResourceKeyword = $param["ResourceKeyword"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("HideFreeCost",$param) and $param["HideFreeCost"] !== null) {
            $this->HideFreeCost = $param["HideFreeCost"];
        }

        if (array_key_exists("OrderByCost",$param) and $param["OrderByCost"] !== null) {
            $this->OrderByCost = $param["OrderByCost"];
        }

        if (array_key_exists("BillIds",$param) and $param["BillIds"] !== null) {
            $this->BillIds = $param["BillIds"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

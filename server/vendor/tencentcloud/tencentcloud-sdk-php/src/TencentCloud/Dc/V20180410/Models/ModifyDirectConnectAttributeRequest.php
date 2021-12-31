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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDirectConnectAttribute请求参数结构体
 *
 * @method string getDirectConnectId() 获取物理专线的ID。
 * @method void setDirectConnectId(string $DirectConnectId) 设置物理专线的ID。
 * @method string getDirectConnectName() 获取物理专线名称。
 * @method void setDirectConnectName(string $DirectConnectName) 设置物理专线名称。
 * @method string getCircuitCode() 获取运营商或者服务商为物理专线提供的电路编码。
 * @method void setCircuitCode(string $CircuitCode) 设置运营商或者服务商为物理专线提供的电路编码。
 * @method integer getVlan() 获取物理专线调试VLAN。
 * @method void setVlan(integer $Vlan) 设置物理专线调试VLAN。
 * @method string getTencentAddress() 获取物理专线调试腾讯侧互联 IP。
 * @method void setTencentAddress(string $TencentAddress) 设置物理专线调试腾讯侧互联 IP。
 * @method string getCustomerAddress() 获取物理专线调试用户侧互联 IP。
 * @method void setCustomerAddress(string $CustomerAddress) 设置物理专线调试用户侧互联 IP。
 * @method string getCustomerName() 获取物理专线申请者姓名。默认从账户体系获取。
 * @method void setCustomerName(string $CustomerName) 设置物理专线申请者姓名。默认从账户体系获取。
 * @method string getCustomerContactMail() 获取物理专线申请者联系邮箱。默认从账户体系获取。
 * @method void setCustomerContactMail(string $CustomerContactMail) 设置物理专线申请者联系邮箱。默认从账户体系获取。
 * @method string getCustomerContactNumber() 获取物理专线申请者联系号码。默认从账户体系获取。
 * @method void setCustomerContactNumber(string $CustomerContactNumber) 设置物理专线申请者联系号码。默认从账户体系获取。
 * @method string getFaultReportContactPerson() 获取报障联系人。
 * @method void setFaultReportContactPerson(string $FaultReportContactPerson) 设置报障联系人。
 * @method string getFaultReportContactNumber() 获取报障联系电话。
 * @method void setFaultReportContactNumber(string $FaultReportContactNumber) 设置报障联系电话。
 * @method boolean getSignLaw() 获取物理专线申请者补签用户使用协议
 * @method void setSignLaw(boolean $SignLaw) 设置物理专线申请者补签用户使用协议
 * @method integer getBandwidth() 获取物理专线带宽
 * @method void setBandwidth(integer $Bandwidth) 设置物理专线带宽
 */
class ModifyDirectConnectAttributeRequest extends AbstractModel
{
    /**
     * @var string 物理专线的ID。
     */
    public $DirectConnectId;

    /**
     * @var string 物理专线名称。
     */
    public $DirectConnectName;

    /**
     * @var string 运营商或者服务商为物理专线提供的电路编码。
     */
    public $CircuitCode;

    /**
     * @var integer 物理专线调试VLAN。
     */
    public $Vlan;

    /**
     * @var string 物理专线调试腾讯侧互联 IP。
     */
    public $TencentAddress;

    /**
     * @var string 物理专线调试用户侧互联 IP。
     */
    public $CustomerAddress;

    /**
     * @var string 物理专线申请者姓名。默认从账户体系获取。
     */
    public $CustomerName;

    /**
     * @var string 物理专线申请者联系邮箱。默认从账户体系获取。
     */
    public $CustomerContactMail;

    /**
     * @var string 物理专线申请者联系号码。默认从账户体系获取。
     */
    public $CustomerContactNumber;

    /**
     * @var string 报障联系人。
     */
    public $FaultReportContactPerson;

    /**
     * @var string 报障联系电话。
     */
    public $FaultReportContactNumber;

    /**
     * @var boolean 物理专线申请者补签用户使用协议
     */
    public $SignLaw;

    /**
     * @var integer 物理专线带宽
     */
    public $Bandwidth;

    /**
     * @param string $DirectConnectId 物理专线的ID。
     * @param string $DirectConnectName 物理专线名称。
     * @param string $CircuitCode 运营商或者服务商为物理专线提供的电路编码。
     * @param integer $Vlan 物理专线调试VLAN。
     * @param string $TencentAddress 物理专线调试腾讯侧互联 IP。
     * @param string $CustomerAddress 物理专线调试用户侧互联 IP。
     * @param string $CustomerName 物理专线申请者姓名。默认从账户体系获取。
     * @param string $CustomerContactMail 物理专线申请者联系邮箱。默认从账户体系获取。
     * @param string $CustomerContactNumber 物理专线申请者联系号码。默认从账户体系获取。
     * @param string $FaultReportContactPerson 报障联系人。
     * @param string $FaultReportContactNumber 报障联系电话。
     * @param boolean $SignLaw 物理专线申请者补签用户使用协议
     * @param integer $Bandwidth 物理专线带宽
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("CustomerContactMail",$param) and $param["CustomerContactMail"] !== null) {
            $this->CustomerContactMail = $param["CustomerContactMail"];
        }

        if (array_key_exists("CustomerContactNumber",$param) and $param["CustomerContactNumber"] !== null) {
            $this->CustomerContactNumber = $param["CustomerContactNumber"];
        }

        if (array_key_exists("FaultReportContactPerson",$param) and $param["FaultReportContactPerson"] !== null) {
            $this->FaultReportContactPerson = $param["FaultReportContactPerson"];
        }

        if (array_key_exists("FaultReportContactNumber",$param) and $param["FaultReportContactNumber"] !== null) {
            $this->FaultReportContactNumber = $param["FaultReportContactNumber"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}

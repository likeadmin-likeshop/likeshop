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
 * CreateDirectConnect请求参数结构体
 *
 * @method string getDirectConnectName() 获取物理专线的名称。
 * @method void setDirectConnectName(string $DirectConnectName) 设置物理专线的名称。
 * @method string getAccessPointId() 获取物理专线所在的接入点。
您可以通过调用 DescribeAccessPoints接口获取地域ID。所选择的接入点必须存在且处于可接入的状态。
 * @method void setAccessPointId(string $AccessPointId) 设置物理专线所在的接入点。
您可以通过调用 DescribeAccessPoints接口获取地域ID。所选择的接入点必须存在且处于可接入的状态。
 * @method string getLineOperator() 获取提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
 * @method void setLineOperator(string $LineOperator) 设置提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
 * @method string getPortType() 获取物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）。
 * @method void setPortType(string $PortType) 设置物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）。
 * @method string getCircuitCode() 获取运营商或者服务商为物理专线提供的电路编码。
 * @method void setCircuitCode(string $CircuitCode) 设置运营商或者服务商为物理专线提供的电路编码。
 * @method string getLocation() 获取本地数据中心的地理位置。
 * @method void setLocation(string $Location) 设置本地数据中心的地理位置。
 * @method integer getBandwidth() 获取物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。
 * @method void setBandwidth(integer $Bandwidth) 设置物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。
 * @method string getRedundantDirectConnectId() 获取冗余物理专线的ID。
 * @method void setRedundantDirectConnectId(string $RedundantDirectConnectId) 设置冗余物理专线的ID。
 * @method integer getVlan() 获取物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
 * @method void setVlan(integer $Vlan) 设置物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
 * @method string getTencentAddress() 获取物理专线调试腾讯侧互联 IP。默认自动分配。
 * @method void setTencentAddress(string $TencentAddress) 设置物理专线调试腾讯侧互联 IP。默认自动分配。
 * @method string getCustomerAddress() 获取物理专线调试用户侧互联 IP。默认自动分配。
 * @method void setCustomerAddress(string $CustomerAddress) 设置物理专线调试用户侧互联 IP。默认自动分配。
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
 * @method boolean getSignLaw() 获取物理专线申请者是否签署了用户使用协议。默认已签署
 * @method void setSignLaw(boolean $SignLaw) 设置物理专线申请者是否签署了用户使用协议。默认已签署
 */
class CreateDirectConnectRequest extends AbstractModel
{
    /**
     * @var string 物理专线的名称。
     */
    public $DirectConnectName;

    /**
     * @var string 物理专线所在的接入点。
您可以通过调用 DescribeAccessPoints接口获取地域ID。所选择的接入点必须存在且处于可接入的状态。
     */
    public $AccessPointId;

    /**
     * @var string 提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
     */
    public $LineOperator;

    /**
     * @var string 物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）。
     */
    public $PortType;

    /**
     * @var string 运营商或者服务商为物理专线提供的电路编码。
     */
    public $CircuitCode;

    /**
     * @var string 本地数据中心的地理位置。
     */
    public $Location;

    /**
     * @var integer 物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。
     */
    public $Bandwidth;

    /**
     * @var string 冗余物理专线的ID。
     */
    public $RedundantDirectConnectId;

    /**
     * @var integer 物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
     */
    public $Vlan;

    /**
     * @var string 物理专线调试腾讯侧互联 IP。默认自动分配。
     */
    public $TencentAddress;

    /**
     * @var string 物理专线调试用户侧互联 IP。默认自动分配。
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
     * @var boolean 物理专线申请者是否签署了用户使用协议。默认已签署
     */
    public $SignLaw;

    /**
     * @param string $DirectConnectName 物理专线的名称。
     * @param string $AccessPointId 物理专线所在的接入点。
您可以通过调用 DescribeAccessPoints接口获取地域ID。所选择的接入点必须存在且处于可接入的状态。
     * @param string $LineOperator 提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
     * @param string $PortType 物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）。
     * @param string $CircuitCode 运营商或者服务商为物理专线提供的电路编码。
     * @param string $Location 本地数据中心的地理位置。
     * @param integer $Bandwidth 物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。
     * @param string $RedundantDirectConnectId 冗余物理专线的ID。
     * @param integer $Vlan 物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
     * @param string $TencentAddress 物理专线调试腾讯侧互联 IP。默认自动分配。
     * @param string $CustomerAddress 物理专线调试用户侧互联 IP。默认自动分配。
     * @param string $CustomerName 物理专线申请者姓名。默认从账户体系获取。
     * @param string $CustomerContactMail 物理专线申请者联系邮箱。默认从账户体系获取。
     * @param string $CustomerContactNumber 物理专线申请者联系号码。默认从账户体系获取。
     * @param string $FaultReportContactPerson 报障联系人。
     * @param string $FaultReportContactNumber 报障联系电话。
     * @param boolean $SignLaw 物理专线申请者是否签署了用户使用协议。默认已签署
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
        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("RedundantDirectConnectId",$param) and $param["RedundantDirectConnectId"] !== null) {
            $this->RedundantDirectConnectId = $param["RedundantDirectConnectId"];
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
    }
}

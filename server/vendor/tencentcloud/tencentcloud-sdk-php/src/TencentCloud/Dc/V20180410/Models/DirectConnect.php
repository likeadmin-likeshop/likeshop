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
 * 物理专线信息列表
 *
 * @method string getDirectConnectId() 获取物理专线ID。
 * @method void setDirectConnectId(string $DirectConnectId) 设置物理专线ID。
 * @method string getDirectConnectName() 获取物理专线的名称。
 * @method void setDirectConnectName(string $DirectConnectName) 设置物理专线的名称。
 * @method string getAccessPointId() 获取物理专线的接入点ID。
 * @method void setAccessPointId(string $AccessPointId) 设置物理专线的接入点ID。
 * @method string getState() 获取物理专线的状态。
申请中：PENDING 
申请驳回：REJECTED   
待付款：TOPAY 
已付款：PAID 
建设中：ALLOCATED   
已开通：AVAILABLE  
删除中 ：DELETING
已删除：DELETED 。
 * @method void setState(string $State) 设置物理专线的状态。
申请中：PENDING 
申请驳回：REJECTED   
待付款：TOPAY 
已付款：PAID 
建设中：ALLOCATED   
已开通：AVAILABLE  
删除中 ：DELETING
已删除：DELETED 。
 * @method string getCreatedTime() 获取物理专线创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置物理专线创建时间。
 * @method string getEnabledTime() 获取物理专线的开通时间。
 * @method void setEnabledTime(string $EnabledTime) 设置物理专线的开通时间。
 * @method string getLineOperator() 获取提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
 * @method void setLineOperator(string $LineOperator) 设置提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
 * @method string getLocation() 获取本地数据中心的地理位置。
 * @method void setLocation(string $Location) 设置本地数据中心的地理位置。
 * @method integer getBandwidth() 获取物理专线接入接口带宽，单位为Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置物理专线接入接口带宽，单位为Mbps。
 * @method string getPortType() 获取用户侧物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）
 * @method void setPortType(string $PortType) 设置用户侧物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）
 * @method string getCircuitCode() 获取运营商或者服务商为物理专线提供的电路编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCircuitCode(string $CircuitCode) 设置运营商或者服务商为物理专线提供的电路编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedundantDirectConnectId() 获取冗余物理专线的ID。
 * @method void setRedundantDirectConnectId(string $RedundantDirectConnectId) 设置冗余物理专线的ID。
 * @method integer getVlan() 获取物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVlan(integer $Vlan) 设置物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTencentAddress() 获取物理专线调试腾讯侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTencentAddress(string $TencentAddress) 设置物理专线调试腾讯侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerAddress() 获取物理专线调试用户侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerAddress(string $CustomerAddress) 设置物理专线调试用户侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerName() 获取物理专线申请者姓名。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerName(string $CustomerName) 设置物理专线申请者姓名。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerContactMail() 获取物理专线申请者联系邮箱。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerContactMail(string $CustomerContactMail) 设置物理专线申请者联系邮箱。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerContactNumber() 获取物理专线申请者联系号码。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerContactNumber(string $CustomerContactNumber) 设置物理专线申请者联系号码。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取物理专线的过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置物理专线的过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取物理专线计费类型。 NON_RECURRING_CHARGE：一次性接入费用；PREPAID_BY_YEAR：按年预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置物理专线计费类型。 NON_RECURRING_CHARGE：一次性接入费用；PREPAID_BY_YEAR：按年预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaultReportContactPerson() 获取报障联系人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaultReportContactPerson(string $FaultReportContactPerson) 设置报障联系人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaultReportContactNumber() 获取报障联系电话。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaultReportContactNumber(string $FaultReportContactNumber) 设置报障联系电话。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessPointType() 获取物理专线的接入点类型。
 * @method void setAccessPointType(string $AccessPointType) 设置物理专线的接入点类型。
 * @method string getIdcCity() 获取IDC所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdcCity(string $IdcCity) 设置IDC所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeState() 获取计费状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeState(string $ChargeState) 设置计费状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取物理专线开通时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置物理专线开通时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSignLaw() 获取物理专线是否已签署用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignLaw(boolean $SignLaw) 设置物理专线是否已签署用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLocalZone() 获取物理专线是否为LocalZone
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalZone(boolean $LocalZone) 设置物理专线是否为LocalZone
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVlanZeroDirectConnectTunnelCount() 获取该物理专线下vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVlanZeroDirectConnectTunnelCount(integer $VlanZeroDirectConnectTunnelCount) 设置该物理专线下vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOtherVlanDirectConnectTunnelCount() 获取该物理专线下非vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherVlanDirectConnectTunnelCount(integer $OtherVlanDirectConnectTunnelCount) 设置该物理专线下非vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinBandwidth() 获取物理专线最小带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinBandwidth(integer $MinBandwidth) 设置物理专线最小带宽
注意：此字段可能返回 null，表示取不到有效值。
 */
class DirectConnect extends AbstractModel
{
    /**
     * @var string 物理专线ID。
     */
    public $DirectConnectId;

    /**
     * @var string 物理专线的名称。
     */
    public $DirectConnectName;

    /**
     * @var string 物理专线的接入点ID。
     */
    public $AccessPointId;

    /**
     * @var string 物理专线的状态。
申请中：PENDING 
申请驳回：REJECTED   
待付款：TOPAY 
已付款：PAID 
建设中：ALLOCATED   
已开通：AVAILABLE  
删除中 ：DELETING
已删除：DELETED 。
     */
    public $State;

    /**
     * @var string 物理专线创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 物理专线的开通时间。
     */
    public $EnabledTime;

    /**
     * @var string 提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
     */
    public $LineOperator;

    /**
     * @var string 本地数据中心的地理位置。
     */
    public $Location;

    /**
     * @var integer 物理专线接入接口带宽，单位为Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 用户侧物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）
     */
    public $PortType;

    /**
     * @var string 运营商或者服务商为物理专线提供的电路编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CircuitCode;

    /**
     * @var string 冗余物理专线的ID。
     */
    public $RedundantDirectConnectId;

    /**
     * @var integer 物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vlan;

    /**
     * @var string 物理专线调试腾讯侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TencentAddress;

    /**
     * @var string 物理专线调试用户侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerAddress;

    /**
     * @var string 物理专线申请者姓名。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerName;

    /**
     * @var string 物理专线申请者联系邮箱。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerContactMail;

    /**
     * @var string 物理专线申请者联系号码。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerContactNumber;

    /**
     * @var string 物理专线的过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 物理专线计费类型。 NON_RECURRING_CHARGE：一次性接入费用；PREPAID_BY_YEAR：按年预付费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 报障联系人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaultReportContactPerson;

    /**
     * @var string 报障联系电话。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaultReportContactNumber;

    /**
     * @var array 标签键值对
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 物理专线的接入点类型。
     */
    public $AccessPointType;

    /**
     * @var string IDC所在城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdcCity;

    /**
     * @var string 计费状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeState;

    /**
     * @var string 物理专线开通时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var boolean 物理专线是否已签署用户协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignLaw;

    /**
     * @var boolean 物理专线是否为LocalZone
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalZone;

    /**
     * @var integer 该物理专线下vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VlanZeroDirectConnectTunnelCount;

    /**
     * @var integer 该物理专线下非vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherVlanDirectConnectTunnelCount;

    /**
     * @var integer 物理专线最小带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinBandwidth;

    /**
     * @param string $DirectConnectId 物理专线ID。
     * @param string $DirectConnectName 物理专线的名称。
     * @param string $AccessPointId 物理专线的接入点ID。
     * @param string $State 物理专线的状态。
申请中：PENDING 
申请驳回：REJECTED   
待付款：TOPAY 
已付款：PAID 
建设中：ALLOCATED   
已开通：AVAILABLE  
删除中 ：DELETING
已删除：DELETED 。
     * @param string $CreatedTime 物理专线创建时间。
     * @param string $EnabledTime 物理专线的开通时间。
     * @param string $LineOperator 提供接入物理专线的运营商。ChinaTelecom：中国电信， ChinaMobile：中国移动，ChinaUnicom：中国联通， In-houseWiring：楼内线，ChinaOther：中国其他， InternationalOperator：境外其他。
     * @param string $Location 本地数据中心的地理位置。
     * @param integer $Bandwidth 物理专线接入接口带宽，单位为Mbps。
     * @param string $PortType 用户侧物理专线接入端口类型,取值：100Base-T：百兆电口,1000Base-T（默认值）：千兆电口,1000Base-LX：千兆单模光口（10千米）,10GBase-T：万兆电口10GBase-LR：万兆单模光口（10千米），默认值，千兆单模光口（10千米）
     * @param string $CircuitCode 运营商或者服务商为物理专线提供的电路编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedundantDirectConnectId 冗余物理专线的ID。
     * @param integer $Vlan 物理专线调试VLAN。默认开启VLAN，自动分配VLAN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TencentAddress 物理专线调试腾讯侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerAddress 物理专线调试用户侧互联IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerName 物理专线申请者姓名。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerContactMail 物理专线申请者联系邮箱。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerContactNumber 物理专线申请者联系号码。默认从账户体系获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 物理专线的过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 物理专线计费类型。 NON_RECURRING_CHARGE：一次性接入费用；PREPAID_BY_YEAR：按年预付费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaultReportContactPerson 报障联系人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaultReportContactNumber 报障联系电话。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签键值对
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessPointType 物理专线的接入点类型。
     * @param string $IdcCity IDC所在城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeState 计费状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 物理专线开通时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SignLaw 物理专线是否已签署用户协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LocalZone 物理专线是否为LocalZone
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VlanZeroDirectConnectTunnelCount 该物理专线下vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OtherVlanDirectConnectTunnelCount 该物理专线下非vlan 0的专用通道数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinBandwidth 物理专线最小带宽
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EnabledTime",$param) and $param["EnabledTime"] !== null) {
            $this->EnabledTime = $param["EnabledTime"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
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

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("FaultReportContactPerson",$param) and $param["FaultReportContactPerson"] !== null) {
            $this->FaultReportContactPerson = $param["FaultReportContactPerson"];
        }

        if (array_key_exists("FaultReportContactNumber",$param) and $param["FaultReportContactNumber"] !== null) {
            $this->FaultReportContactNumber = $param["FaultReportContactNumber"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AccessPointType",$param) and $param["AccessPointType"] !== null) {
            $this->AccessPointType = $param["AccessPointType"];
        }

        if (array_key_exists("IdcCity",$param) and $param["IdcCity"] !== null) {
            $this->IdcCity = $param["IdcCity"];
        }

        if (array_key_exists("ChargeState",$param) and $param["ChargeState"] !== null) {
            $this->ChargeState = $param["ChargeState"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("VlanZeroDirectConnectTunnelCount",$param) and $param["VlanZeroDirectConnectTunnelCount"] !== null) {
            $this->VlanZeroDirectConnectTunnelCount = $param["VlanZeroDirectConnectTunnelCount"];
        }

        if (array_key_exists("OtherVlanDirectConnectTunnelCount",$param) and $param["OtherVlanDirectConnectTunnelCount"] !== null) {
            $this->OtherVlanDirectConnectTunnelCount = $param["OtherVlanDirectConnectTunnelCount"];
        }

        if (array_key_exists("MinBandwidth",$param) and $param["MinBandwidth"] !== null) {
            $this->MinBandwidth = $param["MinBandwidth"];
        }
    }
}

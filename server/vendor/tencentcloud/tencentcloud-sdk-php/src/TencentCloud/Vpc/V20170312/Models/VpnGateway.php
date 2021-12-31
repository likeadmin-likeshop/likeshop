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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN网关对象。
 *
 * @method string getVpnGatewayId() 获取网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置网关实例ID。
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getVpnGatewayName() 获取网关实例名称。
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置网关实例名称。
 * @method string getType() 获取网关实例类型：'IPSEC', 'SSL','CCN'。
 * @method void setType(string $Type) 设置网关实例类型：'IPSEC', 'SSL','CCN'。
 * @method string getState() 获取网关实例状态， 'PENDING'：生产中，'DELETING'：删除中，'AVAILABLE'：运行中。
 * @method void setState(string $State) 设置网关实例状态， 'PENDING'：生产中，'DELETING'：删除中，'AVAILABLE'：运行中。
 * @method string getPublicIpAddress() 获取网关公网IP。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置网关公网IP。
 * @method string getRenewFlag() 获取网关续费类型：'NOTIFY_AND_MANUAL_RENEW'：手动续费，'NOTIFY_AND_AUTO_RENEW'：自动续费，'NOT_NOTIFY_AND_NOT_RENEW'：到期不续费。
 * @method void setRenewFlag(string $RenewFlag) 设置网关续费类型：'NOTIFY_AND_MANUAL_RENEW'：手动续费，'NOTIFY_AND_AUTO_RENEW'：自动续费，'NOT_NOTIFY_AND_NOT_RENEW'：到期不续费。
 * @method string getInstanceChargeType() 获取网关付费类型：POSTPAID_BY_HOUR：按小时后付费，PREPAID：包年包月预付费，
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置网关付费类型：POSTPAID_BY_HOUR：按小时后付费，PREPAID：包年包月预付费，
 * @method integer getInternetMaxBandwidthOut() 获取网关出带宽。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置网关出带宽。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getExpiredTime() 获取预付费网关过期时间。
 * @method void setExpiredTime(string $ExpiredTime) 设置预付费网关过期时间。
 * @method boolean getIsAddressBlocked() 获取公网IP是否被封堵。
 * @method void setIsAddressBlocked(boolean $IsAddressBlocked) 设置公网IP是否被封堵。
 * @method string getNewPurchasePlan() 获取计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。
 * @method void setNewPurchasePlan(string $NewPurchasePlan) 设置计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。
 * @method string getRestrictState() 获取网关计费装，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。
 * @method void setRestrictState(string $RestrictState) 设置网关计费装，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。
 * @method string getZone() 获取可用区，如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置可用区，如：ap-guangzhou-2
 * @method array getVpnGatewayQuotaSet() 获取网关带宽配额信息
 * @method void setVpnGatewayQuotaSet(array $VpnGatewayQuotaSet) 设置网关带宽配额信息
 * @method string getVersion() 获取网关实例版本信息
 * @method void setVersion(string $Version) 设置网关实例版本信息
 * @method string getNetworkInstanceId() 获取Type值为CCN时，该值表示云联网实例ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置Type值为CCN时，该值表示云联网实例ID
 */
class VpnGateway extends AbstractModel
{
    /**
     * @var string 网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 网关实例名称。
     */
    public $VpnGatewayName;

    /**
     * @var string 网关实例类型：'IPSEC', 'SSL','CCN'。
     */
    public $Type;

    /**
     * @var string 网关实例状态， 'PENDING'：生产中，'DELETING'：删除中，'AVAILABLE'：运行中。
     */
    public $State;

    /**
     * @var string 网关公网IP。
     */
    public $PublicIpAddress;

    /**
     * @var string 网关续费类型：'NOTIFY_AND_MANUAL_RENEW'：手动续费，'NOTIFY_AND_AUTO_RENEW'：自动续费，'NOT_NOTIFY_AND_NOT_RENEW'：到期不续费。
     */
    public $RenewFlag;

    /**
     * @var string 网关付费类型：POSTPAID_BY_HOUR：按小时后付费，PREPAID：包年包月预付费，
     */
    public $InstanceChargeType;

    /**
     * @var integer 网关出带宽。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 预付费网关过期时间。
     */
    public $ExpiredTime;

    /**
     * @var boolean 公网IP是否被封堵。
     */
    public $IsAddressBlocked;

    /**
     * @var string 计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。
     */
    public $NewPurchasePlan;

    /**
     * @var string 网关计费装，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。
     */
    public $RestrictState;

    /**
     * @var string 可用区，如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var array 网关带宽配额信息
     */
    public $VpnGatewayQuotaSet;

    /**
     * @var string 网关实例版本信息
     */
    public $Version;

    /**
     * @var string Type值为CCN时，该值表示云联网实例ID
     */
    public $NetworkInstanceId;

    /**
     * @param string $VpnGatewayId 网关实例ID。
     * @param string $VpcId VPC实例ID。
     * @param string $VpnGatewayName 网关实例名称。
     * @param string $Type 网关实例类型：'IPSEC', 'SSL','CCN'。
     * @param string $State 网关实例状态， 'PENDING'：生产中，'DELETING'：删除中，'AVAILABLE'：运行中。
     * @param string $PublicIpAddress 网关公网IP。
     * @param string $RenewFlag 网关续费类型：'NOTIFY_AND_MANUAL_RENEW'：手动续费，'NOTIFY_AND_AUTO_RENEW'：自动续费，'NOT_NOTIFY_AND_NOT_RENEW'：到期不续费。
     * @param string $InstanceChargeType 网关付费类型：POSTPAID_BY_HOUR：按小时后付费，PREPAID：包年包月预付费，
     * @param integer $InternetMaxBandwidthOut 网关出带宽。
     * @param string $CreatedTime 创建时间。
     * @param string $ExpiredTime 预付费网关过期时间。
     * @param boolean $IsAddressBlocked 公网IP是否被封堵。
     * @param string $NewPurchasePlan 计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。
     * @param string $RestrictState 网关计费装，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。
     * @param string $Zone 可用区，如：ap-guangzhou-2
     * @param array $VpnGatewayQuotaSet 网关带宽配额信息
     * @param string $Version 网关实例版本信息
     * @param string $NetworkInstanceId Type值为CCN时，该值表示云联网实例ID
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsAddressBlocked",$param) and $param["IsAddressBlocked"] !== null) {
            $this->IsAddressBlocked = $param["IsAddressBlocked"];
        }

        if (array_key_exists("NewPurchasePlan",$param) and $param["NewPurchasePlan"] !== null) {
            $this->NewPurchasePlan = $param["NewPurchasePlan"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpnGatewayQuotaSet",$param) and $param["VpnGatewayQuotaSet"] !== null) {
            $this->VpnGatewayQuotaSet = [];
            foreach ($param["VpnGatewayQuotaSet"] as $key => $value){
                $obj = new VpnGatewayQuota();
                $obj->deserialize($value);
                array_push($this->VpnGatewayQuotaSet, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }
    }
}

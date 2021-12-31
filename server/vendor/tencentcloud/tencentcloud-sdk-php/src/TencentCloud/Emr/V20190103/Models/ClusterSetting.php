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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群配置。
 *
 * @method string getInstanceChargeType() 获取付费方式。
PREPAID 包年包月。
POSTPAID_BY_HOUR 按量计费，默认方式。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费方式。
PREPAID 包年包月。
POSTPAID_BY_HOUR 按量计费，默认方式。
 * @method boolean getSupportHA() 获取是否为HA集群。
 * @method void setSupportHA(boolean $SupportHA) 设置是否为HA集群。
 * @method array getSecurityGroupIds() 获取集群所使用的安全组，目前仅支持一个。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置集群所使用的安全组，目前仅支持一个。
 * @method Placement getPlacement() 获取实例位置。
 * @method void setPlacement(Placement $Placement) 设置实例位置。
 * @method VPCSettings getVPCSettings() 获取实例所在VPC。
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置实例所在VPC。
 * @method LoginSettings getLoginSettings() 获取实例登录配置。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录配置。
 * @method array getTagSpecification() 获取实例标签。
 * @method void setTagSpecification(array $TagSpecification) 设置实例标签。
 * @method MetaDbInfo getMetaDB() 获取元数据库配置。
 * @method void setMetaDB(MetaDbInfo $MetaDB) 设置元数据库配置。
 * @method JobFlowResourceSpec getResourceSpec() 获取实例硬件配置。
 * @method void setResourceSpec(JobFlowResourceSpec $ResourceSpec) 设置实例硬件配置。
 * @method boolean getPublicIpAssigned() 获取是否申请公网IP，默认为false。
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) 设置是否申请公网IP，默认为false。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取包年包月配置，只对包年包月集群生效。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置包年包月配置，只对包年包月集群生效。
 * @method string getDisasterRecoverGroupIds() 获取集群置放群组。
 * @method void setDisasterRecoverGroupIds(string $DisasterRecoverGroupIds) 设置集群置放群组。
 * @method boolean getCbsEncryptFlag() 获取是否使用cbs加密。
 * @method void setCbsEncryptFlag(boolean $CbsEncryptFlag) 设置是否使用cbs加密。
 * @method boolean getRemoteTcpDefaultPort() 获取是否使用远程登录，默认为false。
 * @method void setRemoteTcpDefaultPort(boolean $RemoteTcpDefaultPort) 设置是否使用远程登录，默认为false。
 */
class ClusterSetting extends AbstractModel
{
    /**
     * @var string 付费方式。
PREPAID 包年包月。
POSTPAID_BY_HOUR 按量计费，默认方式。
     */
    public $InstanceChargeType;

    /**
     * @var boolean 是否为HA集群。
     */
    public $SupportHA;

    /**
     * @var array 集群所使用的安全组，目前仅支持一个。
     */
    public $SecurityGroupIds;

    /**
     * @var Placement 实例位置。
     */
    public $Placement;

    /**
     * @var VPCSettings 实例所在VPC。
     */
    public $VPCSettings;

    /**
     * @var LoginSettings 实例登录配置。
     */
    public $LoginSettings;

    /**
     * @var array 实例标签。
     */
    public $TagSpecification;

    /**
     * @var MetaDbInfo 元数据库配置。
     */
    public $MetaDB;

    /**
     * @var JobFlowResourceSpec 实例硬件配置。
     */
    public $ResourceSpec;

    /**
     * @var boolean 是否申请公网IP，默认为false。
     */
    public $PublicIpAssigned;

    /**
     * @var InstanceChargePrepaid 包年包月配置，只对包年包月集群生效。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 集群置放群组。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean 是否使用cbs加密。
     */
    public $CbsEncryptFlag;

    /**
     * @var boolean 是否使用远程登录，默认为false。
     */
    public $RemoteTcpDefaultPort;

    /**
     * @param string $InstanceChargeType 付费方式。
PREPAID 包年包月。
POSTPAID_BY_HOUR 按量计费，默认方式。
     * @param boolean $SupportHA 是否为HA集群。
     * @param array $SecurityGroupIds 集群所使用的安全组，目前仅支持一个。
     * @param Placement $Placement 实例位置。
     * @param VPCSettings $VPCSettings 实例所在VPC。
     * @param LoginSettings $LoginSettings 实例登录配置。
     * @param array $TagSpecification 实例标签。
     * @param MetaDbInfo $MetaDB 元数据库配置。
     * @param JobFlowResourceSpec $ResourceSpec 实例硬件配置。
     * @param boolean $PublicIpAssigned 是否申请公网IP，默认为false。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 包年包月配置，只对包年包月集群生效。
     * @param string $DisasterRecoverGroupIds 集群置放群组。
     * @param boolean $CbsEncryptFlag 是否使用cbs加密。
     * @param boolean $RemoteTcpDefaultPort 是否使用远程登录，默认为false。
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = $param["TagSpecification"];
        }

        if (array_key_exists("MetaDB",$param) and $param["MetaDB"] !== null) {
            $this->MetaDB = new MetaDbInfo();
            $this->MetaDB->deserialize($param["MetaDB"]);
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new JobFlowResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("PublicIpAssigned",$param) and $param["PublicIpAssigned"] !== null) {
            $this->PublicIpAssigned = $param["PublicIpAssigned"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("CbsEncryptFlag",$param) and $param["CbsEncryptFlag"] !== null) {
            $this->CbsEncryptFlag = $param["CbsEncryptFlag"];
        }

        if (array_key_exists("RemoteTcpDefaultPort",$param) and $param["RemoteTcpDefaultPort"] !== null) {
            $this->RemoteTcpDefaultPort = $param["RemoteTcpDefaultPort"];
        }
    }
}

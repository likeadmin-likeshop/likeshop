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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePaiInstance请求参数结构体
 *
 * @method string getDomainName() 获取PAI实例的域名。
 * @method void setDomainName(string $DomainName) 设置PAI实例的域名。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。
 * @method string getInitScript() 获取启动脚本的base64编码字符串。
 * @method void setInitScript(string $InitScript) 设置启动脚本的base64编码字符串。
 * @method array getZones() 获取可用区列表。
 * @method void setZones(array $Zones) 设置可用区列表。
 * @method string getVpcId() 获取VPC ID。
 * @method void setVpcId(string $VpcId) 设置VPC ID。
 * @method array getSubnetIds() 获取子网列表。
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表。
 * @method string getInstanceName() 获取实例显示名称。
 * @method void setInstanceName(string $InstanceName) 设置实例显示名称。
 * @method array getInstanceTypes() 获取实例机型列表。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例机型列表。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。
 * @method string getInstanceChargeType() 获取实例计费类型。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 */
class CreatePaiInstanceRequest extends AbstractModel
{
    /**
     * @var string PAI实例的域名。
     */
    public $DomainName;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。
     */
    public $InternetAccessible;

    /**
     * @var string 启动脚本的base64编码字符串。
     */
    public $InitScript;

    /**
     * @var array 可用区列表。
     */
    public $Zones;

    /**
     * @var string VPC ID。
     */
    public $VpcId;

    /**
     * @var array 子网列表。
     */
    public $SubnetIds;

    /**
     * @var string 实例显示名称。
     */
    public $InstanceName;

    /**
     * @var array 实例机型列表。
     */
    public $InstanceTypes;

    /**
     * @var LoginSettings 实例登录设置。
     */
    public $LoginSettings;

    /**
     * @var string 实例计费类型。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @param string $DomainName PAI实例的域名。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。
     * @param string $InitScript 启动脚本的base64编码字符串。
     * @param array $Zones 可用区列表。
     * @param string $VpcId VPC ID。
     * @param array $SubnetIds 子网列表。
     * @param string $InstanceName 实例显示名称。
     * @param array $InstanceTypes 实例机型列表。
     * @param LoginSettings $LoginSettings 实例登录设置。
     * @param string $InstanceChargeType 实例计费类型。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InitScript",$param) and $param["InitScript"] !== null) {
            $this->InitScript = $param["InitScript"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}

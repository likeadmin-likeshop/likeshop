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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算环境数据
 *
 * @method string getInstanceType() 获取CVM实例类型，不能与InstanceTypes和InstanceTypeOptions同时出现。
 * @method void setInstanceType(string $InstanceType) 设置CVM实例类型，不能与InstanceTypes和InstanceTypeOptions同时出现。
 * @method string getImageId() 获取CVM镜像ID
 * @method void setImageId(string $ImageId) 设置CVM镜像ID
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息
 * @method array getDataDisks() 获取实例数据盘配置信息
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘配置信息
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置，与Zones和VirtualPrivateClouds不能同时指定。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置，与Zones和VirtualPrivateClouds不能同时指定。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置
 * @method string getInstanceName() 获取CVM实例显示名称
 * @method void setInstanceName(string $InstanceName) 设置CVM实例显示名称
 * @method LoginSettings getLoginSettings() 获取实例登录设置
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置
 * @method array getSecurityGroupIds() 获取实例所属安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组
 * @method EnhancedService getEnhancedService() 获取增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method string getInstanceChargeType() 获取CVM实例计费类型<br><li>POSTPAID_BY_HOUR：按小时后付费<br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置CVM实例计费类型<br><li>POSTPAID_BY_HOUR：按小时后付费<br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数
 * @method array getInstanceTypes() 获取CVM实例类型列表，不能与InstanceType和InstanceTypeOptions同时出现。指定该字段后，计算节点按照机型先后顺序依次尝试创建，直到实例创建成功，结束遍历过程。最多支持10个机型。
 * @method void setInstanceTypes(array $InstanceTypes) 设置CVM实例类型列表，不能与InstanceType和InstanceTypeOptions同时出现。指定该字段后，计算节点按照机型先后顺序依次尝试创建，直到实例创建成功，结束遍历过程。最多支持10个机型。
 * @method InstanceTypeOptions getInstanceTypeOptions() 获取CVM实例机型配置。不能与InstanceType和InstanceTypes同时出现。
 * @method void setInstanceTypeOptions(InstanceTypeOptions $InstanceTypeOptions) 设置CVM实例机型配置。不能与InstanceType和InstanceTypes同时出现。
 * @method array getZones() 获取可用区列表，支持跨可用区创建CVM实例。与VirtualPrivateCloud和VirtualPrivateClouds不能同时指定。
 * @method void setZones(array $Zones) 设置可用区列表，支持跨可用区创建CVM实例。与VirtualPrivateCloud和VirtualPrivateClouds不能同时指定。
 * @method array getVirtualPrivateClouds() 获取私有网络列表，支持跨私有网络创建CVM实例。与VirtualPrivateCloud和Zones不能同时指定。
 * @method void setVirtualPrivateClouds(array $VirtualPrivateClouds) 设置私有网络列表，支持跨私有网络创建CVM实例。与VirtualPrivateCloud和Zones不能同时指定。
 */
class EnvData extends AbstractModel
{
    /**
     * @var string CVM实例类型，不能与InstanceTypes和InstanceTypeOptions同时出现。
     */
    public $InstanceType;

    /**
     * @var string CVM镜像ID
     */
    public $ImageId;

    /**
     * @var SystemDisk 实例系统盘配置信息
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘配置信息
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置，与Zones和VirtualPrivateClouds不能同时指定。
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible 公网带宽相关信息设置
     */
    public $InternetAccessible;

    /**
     * @var string CVM实例显示名称
     */
    public $InstanceName;

    /**
     * @var LoginSettings 实例登录设置
     */
    public $LoginSettings;

    /**
     * @var array 实例所属安全组
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     */
    public $EnhancedService;

    /**
     * @var string CVM实例计费类型<br><li>POSTPAID_BY_HOUR：按小时后付费<br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数
     */
    public $InstanceMarketOptions;

    /**
     * @var array CVM实例类型列表，不能与InstanceType和InstanceTypeOptions同时出现。指定该字段后，计算节点按照机型先后顺序依次尝试创建，直到实例创建成功，结束遍历过程。最多支持10个机型。
     */
    public $InstanceTypes;

    /**
     * @var InstanceTypeOptions CVM实例机型配置。不能与InstanceType和InstanceTypes同时出现。
     */
    public $InstanceTypeOptions;

    /**
     * @var array 可用区列表，支持跨可用区创建CVM实例。与VirtualPrivateCloud和VirtualPrivateClouds不能同时指定。
     */
    public $Zones;

    /**
     * @var array 私有网络列表，支持跨私有网络创建CVM实例。与VirtualPrivateCloud和Zones不能同时指定。
     */
    public $VirtualPrivateClouds;

    /**
     * @param string $InstanceType CVM实例类型，不能与InstanceTypes和InstanceTypeOptions同时出现。
     * @param string $ImageId CVM镜像ID
     * @param SystemDisk $SystemDisk 实例系统盘配置信息
     * @param array $DataDisks 实例数据盘配置信息
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置，与Zones和VirtualPrivateClouds不能同时指定。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置
     * @param string $InstanceName CVM实例显示名称
     * @param LoginSettings $LoginSettings 实例登录设置
     * @param array $SecurityGroupIds 实例所属安全组
     * @param EnhancedService $EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     * @param string $InstanceChargeType CVM实例计费类型<br><li>POSTPAID_BY_HOUR：按小时后付费<br><li>SPOTPAID：竞价付费<br>默认值：POSTPAID_BY_HOUR。
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数
     * @param array $InstanceTypes CVM实例类型列表，不能与InstanceType和InstanceTypeOptions同时出现。指定该字段后，计算节点按照机型先后顺序依次尝试创建，直到实例创建成功，结束遍历过程。最多支持10个机型。
     * @param InstanceTypeOptions $InstanceTypeOptions CVM实例机型配置。不能与InstanceType和InstanceTypes同时出现。
     * @param array $Zones 可用区列表，支持跨可用区创建CVM实例。与VirtualPrivateCloud和VirtualPrivateClouds不能同时指定。
     * @param array $VirtualPrivateClouds 私有网络列表，支持跨私有网络创建CVM实例。与VirtualPrivateCloud和Zones不能同时指定。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("InstanceTypeOptions",$param) and $param["InstanceTypeOptions"] !== null) {
            $this->InstanceTypeOptions = new InstanceTypeOptions();
            $this->InstanceTypeOptions->deserialize($param["InstanceTypeOptions"]);
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("VirtualPrivateClouds",$param) and $param["VirtualPrivateClouds"] !== null) {
            $this->VirtualPrivateClouds = [];
            foreach ($param["VirtualPrivateClouds"] as $key => $value){
                $obj = new VirtualPrivateCloud();
                $obj->deserialize($value);
                array_push($this->VirtualPrivateClouds, $obj);
            }
        }
    }
}

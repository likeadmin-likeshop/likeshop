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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFleet请求参数结构体
 *
 * @method string getAssetId() 获取生成包 Id
 * @method void setAssetId(string $AssetId) 设置生成包 Id
 * @method string getDescription() 获取描述，最小长度0，最大长度100
 * @method void setDescription(string $Description) 设置描述，最小长度0，最大长度100
 * @method array getInboundPermissions() 获取网络配置
 * @method void setInboundPermissions(array $InboundPermissions) 设置网络配置
 * @method string getInstanceType() 获取服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method void setInstanceType(string $InstanceType) 设置服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method string getFleetType() 获取服务器舰队类型，目前只支持ON_DEMAND类型
 * @method void setFleetType(string $FleetType) 设置服务器舰队类型，目前只支持ON_DEMAND类型
 * @method string getName() 获取服务器舰队名称，最小长度1，最大长度50
 * @method void setName(string $Name) 设置服务器舰队名称，最小长度1，最大长度50
 * @method string getNewGameServerSessionProtectionPolicy() 获取保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
 * @method void setNewGameServerSessionProtectionPolicy(string $NewGameServerSessionProtectionPolicy) 设置保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
 * @method string getPeerVpcId() 获取VPC 网络 Id，对等连接已不再使用
 * @method void setPeerVpcId(string $PeerVpcId) 设置VPC 网络 Id，对等连接已不再使用
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() 获取资源创建限制策略
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) 设置资源创建限制策略
 * @method RuntimeConfiguration getRuntimeConfiguration() 获取进程配置
 * @method void setRuntimeConfiguration(RuntimeConfiguration $RuntimeConfiguration) 设置进程配置
 * @method string getSubNetId() 获取VPC 子网，对等连接已不再使用
 * @method void setSubNetId(string $SubNetId) 设置VPC 子网，对等连接已不再使用
 * @method integer getGameServerSessionProtectionTimeLimit() 获取时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) 设置时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
 * @method array getTags() 获取标签列表，最大长度50组
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
 * @method DiskInfo getSystemDiskInfo() 获取系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
 * @method void setSystemDiskInfo(DiskInfo $SystemDiskInfo) 设置系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
 * @method array getDataDiskInfo() 获取数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
 * @method void setDataDiskInfo(array $DataDiskInfo) 设置数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
 * @method array getCcnInfos() 获取云联网信息，包含对应的账号信息及所属id
 * @method void setCcnInfos(array $CcnInfos) 设置云联网信息，包含对应的账号信息及所属id
 * @method integer getInternetMaxBandwidthOut() 获取fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
 */
class CreateFleetRequest extends AbstractModel
{
    /**
     * @var string 生成包 Id
     */
    public $AssetId;

    /**
     * @var string 描述，最小长度0，最大长度100
     */
    public $Description;

    /**
     * @var array 网络配置
     */
    public $InboundPermissions;

    /**
     * @var string 服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     */
    public $InstanceType;

    /**
     * @var string 服务器舰队类型，目前只支持ON_DEMAND类型
     */
    public $FleetType;

    /**
     * @var string 服务器舰队名称，最小长度1，最大长度50
     */
    public $Name;

    /**
     * @var string 保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
     */
    public $NewGameServerSessionProtectionPolicy;

    /**
     * @var string VPC 网络 Id，对等连接已不再使用
     */
    public $PeerVpcId;

    /**
     * @var ResourceCreationLimitPolicy 资源创建限制策略
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var RuntimeConfiguration 进程配置
     */
    public $RuntimeConfiguration;

    /**
     * @var string VPC 子网，对等连接已不再使用
     */
    public $SubNetId;

    /**
     * @var integer 时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @var array 标签列表，最大长度50组
     */
    public $Tags;

    /**
     * @var DiskInfo 系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
     */
    public $SystemDiskInfo;

    /**
     * @var array 数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
     */
    public $DataDiskInfo;

    /**
     * @var array 云联网信息，包含对应的账号信息及所属id
     */
    public $CcnInfos;

    /**
     * @var integer fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $AssetId 生成包 Id
     * @param string $Description 描述，最小长度0，最大长度100
     * @param array $InboundPermissions 网络配置
     * @param string $InstanceType 服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     * @param string $FleetType 服务器舰队类型，目前只支持ON_DEMAND类型
     * @param string $Name 服务器舰队名称，最小长度1，最大长度50
     * @param string $NewGameServerSessionProtectionPolicy 保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
     * @param string $PeerVpcId VPC 网络 Id，对等连接已不再使用
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy 资源创建限制策略
     * @param RuntimeConfiguration $RuntimeConfiguration 进程配置
     * @param string $SubNetId VPC 子网，对等连接已不再使用
     * @param integer $GameServerSessionProtectionTimeLimit 时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
     * @param array $Tags 标签列表，最大长度50组
     * @param DiskInfo $SystemDiskInfo 系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
     * @param array $DataDiskInfo 数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
     * @param array $CcnInfos 云联网信息，包含对应的账号信息及所属id
     * @param integer $InternetMaxBandwidthOut fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InboundPermissions",$param) and $param["InboundPermissions"] !== null) {
            $this->InboundPermissions = [];
            foreach ($param["InboundPermissions"] as $key => $value){
                $obj = new InboundPermission();
                $obj->deserialize($value);
                array_push($this->InboundPermissions, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("FleetType",$param) and $param["FleetType"] !== null) {
            $this->FleetType = $param["FleetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameServerSessionProtectionPolicy",$param) and $param["NewGameServerSessionProtectionPolicy"] !== null) {
            $this->NewGameServerSessionProtectionPolicy = $param["NewGameServerSessionProtectionPolicy"];
        }

        if (array_key_exists("PeerVpcId",$param) and $param["PeerVpcId"] !== null) {
            $this->PeerVpcId = $param["PeerVpcId"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("RuntimeConfiguration",$param) and $param["RuntimeConfiguration"] !== null) {
            $this->RuntimeConfiguration = new RuntimeConfiguration();
            $this->RuntimeConfiguration->deserialize($param["RuntimeConfiguration"]);
        }

        if (array_key_exists("SubNetId",$param) and $param["SubNetId"] !== null) {
            $this->SubNetId = $param["SubNetId"];
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SystemDiskInfo",$param) and $param["SystemDiskInfo"] !== null) {
            $this->SystemDiskInfo = new DiskInfo();
            $this->SystemDiskInfo->deserialize($param["SystemDiskInfo"]);
        }

        if (array_key_exists("DataDiskInfo",$param) and $param["DataDiskInfo"] !== null) {
            $this->DataDiskInfo = [];
            foreach ($param["DataDiskInfo"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDiskInfo, $obj);
            }
        }

        if (array_key_exists("CcnInfos",$param) and $param["CcnInfos"] !== null) {
            $this->CcnInfos = [];
            foreach ($param["CcnInfos"] as $key => $value){
                $obj = new CcnInfo();
                $obj->deserialize($value);
                array_push($this->CcnInfos, $obj);
            }
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}

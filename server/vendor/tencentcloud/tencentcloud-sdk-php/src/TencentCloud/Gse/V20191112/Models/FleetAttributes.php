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
 * 服务部署属性
 *
 * @method string getAssetId() 获取生成包 Id
 * @method void setAssetId(string $AssetId) 设置生成包 Id
 * @method string getCreationTime() 获取创建服务器舰队时间
 * @method void setCreationTime(string $CreationTime) 设置创建服务器舰队时间
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetArn() 获取服务器舰队资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetArn(string $FleetArn) 设置服务器舰队资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetId() 获取服务器舰队 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置服务器舰队 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetType() 获取服务器舰队类型，目前只支持ON_DEMAND
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetType(string $FleetType) 设置服务器舰队类型，目前只支持ON_DEMAND
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取服务器类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置服务器类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务器舰队名称
 * @method void setName(string $Name) 设置服务器舰队名称
 * @method string getNewGameServerSessionProtectionPolicy() 获取游戏会话保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewGameServerSessionProtectionPolicy(string $NewGameServerSessionProtectionPolicy) 设置游戏会话保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatingSystem() 获取操作系统类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatingSystem(string $OperatingSystem) 设置操作系统类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() 获取资源创建限制策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) 设置资源创建限制策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态：新建、下载中、验证中、生成中、激活中、活跃、异常、删除中、结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态：新建、下载中、验证中、生成中、激活中、活跃、异常、删除中、结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStoppedActions() 获取服务器舰队停止状态，为空时表示自动扩缩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppedActions(array $StoppedActions) 设置服务器舰队停止状态，为空时表示自动扩缩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerminationTime() 获取服务器舰队终止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminationTime(string $TerminationTime) 设置服务器舰队终止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGameServerSessionProtectionTimeLimit() 获取时限保护超时时间，默认60分钟，最小值5，最大值1440
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) 设置时限保护超时时间，默认60分钟，最小值5，最大值1440
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingStatus() 获取计费状态：未开通、已开通、异常、欠费隔离、销毁、解冻
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingStatus(string $BillingStatus) 设置计费状态：未开通、已开通、异常、欠费隔离、销毁、解冻
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDiskInfo() 获取数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDiskInfo(array $DataDiskInfo) 设置数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskInfo getSystemDiskInfo() 获取系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDiskInfo(DiskInfo $SystemDiskInfo) 设置系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedCcnInfos() 获取云联网相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedCcnInfos(array $RelatedCcnInfos) 设置云联网相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
注意：此字段可能返回 null，表示取不到有效值。
 */
class FleetAttributes extends AbstractModel
{
    /**
     * @var string 生成包 Id
     */
    public $AssetId;

    /**
     * @var string 创建服务器舰队时间
     */
    public $CreationTime;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 服务器舰队资源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetArn;

    /**
     * @var string 服务器舰队 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 服务器舰队类型，目前只支持ON_DEMAND
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetType;

    /**
     * @var string 服务器类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 服务器舰队名称
     */
    public $Name;

    /**
     * @var string 游戏会话保护策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewGameServerSessionProtectionPolicy;

    /**
     * @var string 操作系统类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatingSystem;

    /**
     * @var ResourceCreationLimitPolicy 资源创建限制策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var string 状态：新建、下载中、验证中、生成中、激活中、活跃、异常、删除中、结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 服务器舰队停止状态，为空时表示自动扩缩容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppedActions;

    /**
     * @var string 服务器舰队终止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminationTime;

    /**
     * @var integer 时限保护超时时间，默认60分钟，最小值5，最大值1440
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @var string 计费状态：未开通、已开通、异常、欠费隔离、销毁、解冻
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingStatus;

    /**
     * @var array 标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDiskInfo;

    /**
     * @var DiskInfo 系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDiskInfo;

    /**
     * @var array 云联网相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedCcnInfos;

    /**
     * @var integer fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $AssetId 生成包 Id
     * @param string $CreationTime 创建服务器舰队时间
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetArn 服务器舰队资源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetId 服务器舰队 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetType 服务器舰队类型，目前只支持ON_DEMAND
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 服务器类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务器舰队名称
     * @param string $NewGameServerSessionProtectionPolicy 游戏会话保护策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatingSystem 操作系统类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy 资源创建限制策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态：新建、下载中、验证中、生成中、激活中、活跃、异常、删除中、结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StoppedActions 服务器舰队停止状态，为空时表示自动扩缩容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TerminationTime 服务器舰队终止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GameServerSessionProtectionTimeLimit 时限保护超时时间，默认60分钟，最小值5，最大值1440
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingStatus 计费状态：未开通、已开通、异常、欠费隔离、销毁、解冻
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDiskInfo 数据盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-32000GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，10-32000GB；容量以10为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskInfo $SystemDiskInfo 系统盘，储存类型为 SSD 云硬盘（CLOUD_SSD）时，100-500GB；储存类型为高性能云硬盘（CLOUD_PREMIUM）时，50-500GB；容量以1为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedCcnInfos 云联网相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut fleet公网出带宽最大值，默认100Mbps，范围1-200Mbps
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FleetArn",$param) and $param["FleetArn"] !== null) {
            $this->FleetArn = $param["FleetArn"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("FleetType",$param) and $param["FleetType"] !== null) {
            $this->FleetType = $param["FleetType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameServerSessionProtectionPolicy",$param) and $param["NewGameServerSessionProtectionPolicy"] !== null) {
            $this->NewGameServerSessionProtectionPolicy = $param["NewGameServerSessionProtectionPolicy"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StoppedActions",$param) and $param["StoppedActions"] !== null) {
            $this->StoppedActions = $param["StoppedActions"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }

        if (array_key_exists("BillingStatus",$param) and $param["BillingStatus"] !== null) {
            $this->BillingStatus = $param["BillingStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DataDiskInfo",$param) and $param["DataDiskInfo"] !== null) {
            $this->DataDiskInfo = [];
            foreach ($param["DataDiskInfo"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDiskInfo, $obj);
            }
        }

        if (array_key_exists("SystemDiskInfo",$param) and $param["SystemDiskInfo"] !== null) {
            $this->SystemDiskInfo = new DiskInfo();
            $this->SystemDiskInfo->deserialize($param["SystemDiskInfo"]);
        }

        if (array_key_exists("RelatedCcnInfos",$param) and $param["RelatedCcnInfos"] !== null) {
            $this->RelatedCcnInfos = [];
            foreach ($param["RelatedCcnInfos"] as $key => $value){
                $obj = new RelatedCcnInfo();
                $obj->deserialize($value);
                array_push($this->RelatedCcnInfos, $obj);
            }
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}

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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getEsVersion() 获取实例版本（支持"5.6.4"、"6.4.3"、"6.8.2"、"7.5.1"）
 * @method void setEsVersion(string $EsVersion) 设置实例版本（支持"5.6.4"、"6.4.3"、"6.8.2"、"7.5.1"）
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getPassword() 获取访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method void setPassword(string $Password) 设置访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method string getInstanceName() 获取实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method void setInstanceName(string $InstanceName) 设置实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method integer getNodeNum() 获取已废弃请使用NodeInfoList
节点数量（2-50个）
 * @method void setNodeNum(integer $NodeNum) 设置已废弃请使用NodeInfoList
节点数量（2-50个）
 * @method string getChargeType() 获取计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
 * @method void setChargeType(string $ChargeType) 设置计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
 * @method integer getChargePeriod() 获取包年包月购买时长（单位由参数TimeUnit决定）
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长（单位由参数TimeUnit决定）
 * @method string getRenewFlag() 获取自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
 * @method string getNodeType() 获取已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method string getDiskType() 获取已废弃请使用NodeInfoList
节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
 * @method void setDiskType(string $DiskType) 设置已废弃请使用NodeInfoList
节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
 * @method integer getDiskSize() 获取已废弃请使用NodeInfoList
节点磁盘容量（单位GB）
 * @method void setDiskSize(integer $DiskSize) 设置已废弃请使用NodeInfoList
节点磁盘容量（单位GB）
 * @method string getTimeUnit() 获取计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
 * @method void setTimeUnit(string $TimeUnit) 设置计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
 * @method integer getAutoVoucher() 获取是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method array getVoucherIds() 获取代金券ID列表（目前仅支持指定一张代金券）
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表（目前仅支持指定一张代金券）
 * @method boolean getEnableDedicatedMaster() 获取已废弃请使用NodeInfoList
是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) 设置已废弃请使用NodeInfoList
是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false
 * @method integer getMasterNodeNum() 获取已废弃请使用NodeInfoList
专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置已废弃请使用NodeInfoList
专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）
 * @method string getMasterNodeType() 获取已废弃请使用NodeInfoList
专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) 设置已废弃请使用NodeInfoList
专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeDiskSize() 获取已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）
 * @method string getClusterNameInConf() 获取集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
 * @method void setClusterNameInConf(string $ClusterNameInConf) 设置集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
 * @method integer getDeployMode() 获取集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署</li>默认为0
 * @method void setDeployMode(integer $DeployMode) 设置集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署</li>默认为0
 * @method array getMultiZoneInfo() 获取多可用区部署时可用区的详细信息(DeployMode为1时必传)
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置多可用区部署时可用区的详细信息(DeployMode为1时必传)
 * @method string getLicenseType() 获取License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method void setLicenseType(string $LicenseType) 设置License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method array getNodeInfoList() 获取节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等
 * @method void setNodeInfoList(array $NodeInfoList) 设置节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等
 * @method array getTagList() 获取节点标签信息列表
 * @method void setTagList(array $TagList) 设置节点标签信息列表
 * @method integer getBasicSecurityType() 获取6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
 * @method integer getSceneType() 获取场景化模板类型 0：不启用 1：通用 2：日志 3：搜索
 * @method void setSceneType(integer $SceneType) 设置场景化模板类型 0：不启用 1：通用 2：日志 3：搜索
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 实例版本（支持"5.6.4"、"6.4.3"、"6.8.2"、"7.5.1"）
     */
    public $EsVersion;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     */
    public $Password;

    /**
     * @var string 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     */
    public $InstanceName;

    /**
     * @var integer 已废弃请使用NodeInfoList
节点数量（2-50个）
     */
    public $NodeNum;

    /**
     * @var string 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长（单位由参数TimeUnit决定）
     */
    public $ChargePeriod;

    /**
     * @var string 自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
     */
    public $RenewFlag;

    /**
     * @var string 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var string 已废弃请使用NodeInfoList
节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
     */
    public $DiskType;

    /**
     * @var integer 已废弃请使用NodeInfoList
节点磁盘容量（单位GB）
     */
    public $DiskSize;

    /**
     * @var string 计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
     */
    public $TimeUnit;

    /**
     * @var integer 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表（目前仅支持指定一张代金券）
     */
    public $VoucherIds;

    /**
     * @var boolean 已废弃请使用NodeInfoList
是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false
     */
    public $EnableDedicatedMaster;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）
     */
    public $MasterNodeNum;

    /**
     * @var string 已废弃请使用NodeInfoList
专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $MasterNodeType;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）
     */
    public $MasterNodeDiskSize;

    /**
     * @var string 集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
     */
    public $ClusterNameInConf;

    /**
     * @var integer 集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署</li>默认为0
     */
    public $DeployMode;

    /**
     * @var array 多可用区部署时可用区的详细信息(DeployMode为1时必传)
     */
    public $MultiZoneInfo;

    /**
     * @var string License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     */
    public $LicenseType;

    /**
     * @var array 节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等
     */
    public $NodeInfoList;

    /**
     * @var array 节点标签信息列表
     */
    public $TagList;

    /**
     * @var integer 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
     */
    public $BasicSecurityType;

    /**
     * @var integer 场景化模板类型 0：不启用 1：通用 2：日志 3：搜索
     */
    public $SceneType;

    /**
     * @param string $Zone 可用区
     * @param string $EsVersion 实例版本（支持"5.6.4"、"6.4.3"、"6.8.2"、"7.5.1"）
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $Password 访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     * @param string $InstanceName 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     * @param integer $NodeNum 已废弃请使用NodeInfoList
节点数量（2-50个）
     * @param string $ChargeType 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
     * @param integer $ChargePeriod 包年包月购买时长（单位由参数TimeUnit决定）
     * @param string $RenewFlag 自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
     * @param string $NodeType 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param string $DiskType 已废弃请使用NodeInfoList
节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
     * @param integer $DiskSize 已废弃请使用NodeInfoList
节点磁盘容量（单位GB）
     * @param string $TimeUnit 计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
     * @param integer $AutoVoucher 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     * @param array $VoucherIds 代金券ID列表（目前仅支持指定一张代金券）
     * @param boolean $EnableDedicatedMaster 已废弃请使用NodeInfoList
是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false
     * @param integer $MasterNodeNum 已废弃请使用NodeInfoList
专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）
     * @param string $MasterNodeType 已废弃请使用NodeInfoList
专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeDiskSize 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）
     * @param string $ClusterNameInConf 集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
     * @param integer $DeployMode 集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署</li>默认为0
     * @param array $MultiZoneInfo 多可用区部署时可用区的详细信息(DeployMode为1时必传)
     * @param string $LicenseType License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     * @param array $NodeInfoList 节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等
     * @param array $TagList 节点标签信息列表
     * @param integer $BasicSecurityType 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
     * @param integer $SceneType 场景化模板类型 0：不启用 1：通用 2：日志 3：搜索
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ClusterNameInConf",$param) and $param["ClusterNameInConf"] !== null) {
            $this->ClusterNameInConf = $param["ClusterNameInConf"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }
    }
}

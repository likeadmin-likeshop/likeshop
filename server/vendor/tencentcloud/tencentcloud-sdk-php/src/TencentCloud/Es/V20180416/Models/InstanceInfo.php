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
 * 实例详细信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getUin() 获取用户UIN
 * @method void setUin(string $Uin) 设置用户UIN
 * @method string getVpcUid() 获取实例所属VPC的UID
 * @method void setVpcUid(string $VpcUid) 设置实例所属VPC的UID
 * @method string getSubnetUid() 获取实例所属子网的UID
 * @method void setSubnetUid(string $SubnetUid) 设置实例所属子网的UID
 * @method integer getStatus() 获取实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
 * @method void setStatus(integer $Status) 设置实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
 * @method string getChargeType() 获取实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
 * @method void setChargeType(string $ChargeType) 设置实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
 * @method integer getChargePeriod() 获取包年包月购买时长,单位:月
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长,单位:月
 * @method string getRenewFlag() 获取自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
 * @method string getNodeType() 获取节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getNodeNum() 获取节点个数
 * @method void setNodeNum(integer $NodeNum) 设置节点个数
 * @method integer getCpuNum() 获取节点CPU核数
 * @method void setCpuNum(integer $CpuNum) 设置节点CPU核数
 * @method integer getMemSize() 获取节点内存大小，单位GB
 * @method void setMemSize(integer $MemSize) 设置节点内存大小，单位GB
 * @method string getDiskType() 获取节点磁盘类型
 * @method void setDiskType(string $DiskType) 设置节点磁盘类型
 * @method integer getDiskSize() 获取节点磁盘大小，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置节点磁盘大小，单位GB
 * @method string getEsDomain() 获取ES域名
 * @method void setEsDomain(string $EsDomain) 设置ES域名
 * @method string getEsVip() 获取ES VIP
 * @method void setEsVip(string $EsVip) 设置ES VIP
 * @method integer getEsPort() 获取ES端口
 * @method void setEsPort(integer $EsPort) 设置ES端口
 * @method string getKibanaUrl() 获取Kibana访问url
 * @method void setKibanaUrl(string $KibanaUrl) 设置Kibana访问url
 * @method string getEsVersion() 获取ES版本号
 * @method void setEsVersion(string $EsVersion) 设置ES版本号
 * @method string getEsConfig() 获取ES配置项
 * @method void setEsConfig(string $EsConfig) 设置ES配置项
 * @method EsAcl getEsAcl() 获取Kibana访问控制配置
 * @method void setEsAcl(EsAcl $EsAcl) 设置Kibana访问控制配置
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getUpdateTime() 获取实例最后修改操作时间
 * @method void setUpdateTime(string $UpdateTime) 设置实例最后修改操作时间
 * @method string getDeadline() 获取实例到期时间
 * @method void setDeadline(string $Deadline) 设置实例到期时间
 * @method integer getInstanceType() 获取实例类型（实例类型标识，当前只有1,2两种）
 * @method void setInstanceType(integer $InstanceType) 设置实例类型（实例类型标识，当前只有1,2两种）
 * @method EsDictionaryInfo getIkConfig() 获取Ik分词器配置
 * @method void setIkConfig(EsDictionaryInfo $IkConfig) 设置Ik分词器配置
 * @method MasterNodeInfo getMasterNodeInfo() 获取专用主节点配置
 * @method void setMasterNodeInfo(MasterNodeInfo $MasterNodeInfo) 设置专用主节点配置
 * @method CosBackup getCosBackup() 获取cos自动备份配置
 * @method void setCosBackup(CosBackup $CosBackup) 设置cos自动备份配置
 * @method boolean getAllowCosBackup() 获取是否允许cos自动备份
 * @method void setAllowCosBackup(boolean $AllowCosBackup) 设置是否允许cos自动备份
 * @method array getTagList() 获取实例拥有的标签列表
 * @method void setTagList(array $TagList) 设置实例拥有的标签列表
 * @method string getLicenseType() 获取License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method void setLicenseType(string $LicenseType) 设置License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method boolean getEnableHotWarmMode() 获取是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableHotWarmMode(boolean $EnableHotWarmMode) 设置是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarmNodeType() 获取冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmNodeType(string $WarmNodeType) 设置冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmNodeNum() 获取冷节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmNodeNum(integer $WarmNodeNum) 设置冷节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmCpuNum() 获取冷节点CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmCpuNum(integer $WarmCpuNum) 设置冷节点CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmMemSize() 获取冷节点内存内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmMemSize(integer $WarmMemSize) 设置冷节点内存内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarmDiskType() 获取冷节点磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmDiskType(string $WarmDiskType) 设置冷节点磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmDiskSize() 获取冷节点磁盘大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmDiskSize(integer $WarmDiskSize) 设置冷节点磁盘大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfoList() 获取集群节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfoList(array $NodeInfoList) 设置集群节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsPublicUrl() 获取Es公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsPublicUrl(string $EsPublicUrl) 设置Es公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiZoneInfo() 获取多可用区网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置多可用区网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeployMode() 获取部署模式<li>0：单可用区</li><li>1：多可用区</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployMode(integer $DeployMode) 设置部署模式<li>0：单可用区</li><li>1：多可用区</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAccess() 获取ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccess(string $PublicAccess) 设置ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsAcl getEsPublicAcl() 获取ES公网访问控制配置
 * @method void setEsPublicAcl(EsAcl $EsPublicAcl) 设置ES公网访问控制配置
 * @method string getKibanaPrivateUrl() 获取Kibana内网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) 设置Kibana内网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPublicAccess() 获取Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateAccess() 获取Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSecurityType() 获取6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityType(integer $SecurityType) 设置6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSceneType() 获取场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneType(integer $SceneType) 设置场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaConfig() 获取Kibana配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaConfig(string $KibanaConfig) 设置Kibana配置项
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 用户UIN
     */
    public $Uin;

    /**
     * @var string 实例所属VPC的UID
     */
    public $VpcUid;

    /**
     * @var string 实例所属子网的UID
     */
    public $SubnetUid;

    /**
     * @var integer 实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
     */
    public $Status;

    /**
     * @var string 实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长,单位:月
     */
    public $ChargePeriod;

    /**
     * @var string 自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
     */
    public $RenewFlag;

    /**
     * @var string 节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var integer 节点个数
     */
    public $NodeNum;

    /**
     * @var integer 节点CPU核数
     */
    public $CpuNum;

    /**
     * @var integer 节点内存大小，单位GB
     */
    public $MemSize;

    /**
     * @var string 节点磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 节点磁盘大小，单位GB
     */
    public $DiskSize;

    /**
     * @var string ES域名
     */
    public $EsDomain;

    /**
     * @var string ES VIP
     */
    public $EsVip;

    /**
     * @var integer ES端口
     */
    public $EsPort;

    /**
     * @var string Kibana访问url
     */
    public $KibanaUrl;

    /**
     * @var string ES版本号
     */
    public $EsVersion;

    /**
     * @var string ES配置项
     */
    public $EsConfig;

    /**
     * @var EsAcl Kibana访问控制配置
     */
    public $EsAcl;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例最后修改操作时间
     */
    public $UpdateTime;

    /**
     * @var string 实例到期时间
     */
    public $Deadline;

    /**
     * @var integer 实例类型（实例类型标识，当前只有1,2两种）
     */
    public $InstanceType;

    /**
     * @var EsDictionaryInfo Ik分词器配置
     */
    public $IkConfig;

    /**
     * @var MasterNodeInfo 专用主节点配置
     */
    public $MasterNodeInfo;

    /**
     * @var CosBackup cos自动备份配置
     */
    public $CosBackup;

    /**
     * @var boolean 是否允许cos自动备份
     */
    public $AllowCosBackup;

    /**
     * @var array 实例拥有的标签列表
     */
    public $TagList;

    /**
     * @var string License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     */
    public $LicenseType;

    /**
     * @var boolean 是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableHotWarmMode;

    /**
     * @var string 冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmNodeType;

    /**
     * @var integer 冷节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmNodeNum;

    /**
     * @var integer 冷节点CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmCpuNum;

    /**
     * @var integer 冷节点内存内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmMemSize;

    /**
     * @var string 冷节点磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmDiskType;

    /**
     * @var integer 冷节点磁盘大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmDiskSize;

    /**
     * @var array 集群节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfoList;

    /**
     * @var string Es公网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsPublicUrl;

    /**
     * @var array 多可用区网络信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiZoneInfo;

    /**
     * @var integer 部署模式<li>0：单可用区</li><li>1：多可用区</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployMode;

    /**
     * @var string ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccess;

    /**
     * @var EsAcl ES公网访问控制配置
     */
    public $EsPublicAcl;

    /**
     * @var string Kibana内网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateUrl;

    /**
     * @var string Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPublicAccess;

    /**
     * @var string Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityType;

    /**
     * @var integer 场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneType;

    /**
     * @var string Kibana配置项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaConfig;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $AppId 用户ID
     * @param string $Uin 用户UIN
     * @param string $VpcUid 实例所属VPC的UID
     * @param string $SubnetUid 实例所属子网的UID
     * @param integer $Status 实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
     * @param string $ChargeType 实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
     * @param integer $ChargePeriod 包年包月购买时长,单位:月
     * @param string $RenewFlag 自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
     * @param string $NodeType 节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $NodeNum 节点个数
     * @param integer $CpuNum 节点CPU核数
     * @param integer $MemSize 节点内存大小，单位GB
     * @param string $DiskType 节点磁盘类型
     * @param integer $DiskSize 节点磁盘大小，单位GB
     * @param string $EsDomain ES域名
     * @param string $EsVip ES VIP
     * @param integer $EsPort ES端口
     * @param string $KibanaUrl Kibana访问url
     * @param string $EsVersion ES版本号
     * @param string $EsConfig ES配置项
     * @param EsAcl $EsAcl Kibana访问控制配置
     * @param string $CreateTime 实例创建时间
     * @param string $UpdateTime 实例最后修改操作时间
     * @param string $Deadline 实例到期时间
     * @param integer $InstanceType 实例类型（实例类型标识，当前只有1,2两种）
     * @param EsDictionaryInfo $IkConfig Ik分词器配置
     * @param MasterNodeInfo $MasterNodeInfo 专用主节点配置
     * @param CosBackup $CosBackup cos自动备份配置
     * @param boolean $AllowCosBackup 是否允许cos自动备份
     * @param array $TagList 实例拥有的标签列表
     * @param string $LicenseType License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     * @param boolean $EnableHotWarmMode 是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarmNodeType 冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmNodeNum 冷节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmCpuNum 冷节点CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmMemSize 冷节点内存内存大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarmDiskType 冷节点磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmDiskSize 冷节点磁盘大小，单位GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfoList 集群节点信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsPublicUrl Es公网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiZoneInfo 多可用区网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeployMode 部署模式<li>0：单可用区</li><li>1：多可用区</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAccess ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsAcl $EsPublicAcl ES公网访问控制配置
     * @param string $KibanaPrivateUrl Kibana内网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPublicAccess Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateAccess Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SecurityType 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SceneType 场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaConfig Kibana配置项
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VpcUid",$param) and $param["VpcUid"] !== null) {
            $this->VpcUid = $param["VpcUid"];
        }

        if (array_key_exists("SubnetUid",$param) and $param["SubnetUid"] !== null) {
            $this->SubnetUid = $param["SubnetUid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("EsDomain",$param) and $param["EsDomain"] !== null) {
            $this->EsDomain = $param["EsDomain"];
        }

        if (array_key_exists("EsVip",$param) and $param["EsVip"] !== null) {
            $this->EsVip = $param["EsVip"];
        }

        if (array_key_exists("EsPort",$param) and $param["EsPort"] !== null) {
            $this->EsPort = $param["EsPort"];
        }

        if (array_key_exists("KibanaUrl",$param) and $param["KibanaUrl"] !== null) {
            $this->KibanaUrl = $param["KibanaUrl"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IkConfig",$param) and $param["IkConfig"] !== null) {
            $this->IkConfig = new EsDictionaryInfo();
            $this->IkConfig->deserialize($param["IkConfig"]);
        }

        if (array_key_exists("MasterNodeInfo",$param) and $param["MasterNodeInfo"] !== null) {
            $this->MasterNodeInfo = new MasterNodeInfo();
            $this->MasterNodeInfo->deserialize($param["MasterNodeInfo"]);
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("AllowCosBackup",$param) and $param["AllowCosBackup"] !== null) {
            $this->AllowCosBackup = $param["AllowCosBackup"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("EnableHotWarmMode",$param) and $param["EnableHotWarmMode"] !== null) {
            $this->EnableHotWarmMode = $param["EnableHotWarmMode"];
        }

        if (array_key_exists("WarmNodeType",$param) and $param["WarmNodeType"] !== null) {
            $this->WarmNodeType = $param["WarmNodeType"];
        }

        if (array_key_exists("WarmNodeNum",$param) and $param["WarmNodeNum"] !== null) {
            $this->WarmNodeNum = $param["WarmNodeNum"];
        }

        if (array_key_exists("WarmCpuNum",$param) and $param["WarmCpuNum"] !== null) {
            $this->WarmCpuNum = $param["WarmCpuNum"];
        }

        if (array_key_exists("WarmMemSize",$param) and $param["WarmMemSize"] !== null) {
            $this->WarmMemSize = $param["WarmMemSize"];
        }

        if (array_key_exists("WarmDiskType",$param) and $param["WarmDiskType"] !== null) {
            $this->WarmDiskType = $param["WarmDiskType"];
        }

        if (array_key_exists("WarmDiskSize",$param) and $param["WarmDiskSize"] !== null) {
            $this->WarmDiskSize = $param["WarmDiskSize"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("EsPublicUrl",$param) and $param["EsPublicUrl"] !== null) {
            $this->EsPublicUrl = $param["EsPublicUrl"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPrivateUrl",$param) and $param["KibanaPrivateUrl"] !== null) {
            $this->KibanaPrivateUrl = $param["KibanaPrivateUrl"];
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }
    }
}

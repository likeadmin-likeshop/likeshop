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
 * UpdateInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method void setInstanceName(string $InstanceName) 设置实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method integer getNodeNum() 获取已废弃请使用NodeInfoList
节点个数（2-50个）
 * @method void setNodeNum(integer $NodeNum) 设置已废弃请使用NodeInfoList
节点个数（2-50个）
 * @method string getEsConfig() 获取ES配置项（JSON格式字符串）
 * @method void setEsConfig(string $EsConfig) 设置ES配置项（JSON格式字符串）
 * @method string getPassword() 获取默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method void setPassword(string $Password) 设置默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method EsAcl getEsAcl() 获取访问控制列表
 * @method void setEsAcl(EsAcl $EsAcl) 设置访问控制列表
 * @method integer getDiskSize() 获取已废弃请使用NodeInfoList
磁盘大小（单位GB）
 * @method void setDiskSize(integer $DiskSize) 设置已废弃请使用NodeInfoList
磁盘大小（单位GB）
 * @method string getNodeType() 获取已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeNum() 获取已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
 * @method string getMasterNodeType() 获取已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) 设置已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeDiskSize() 获取已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
 * @method boolean getForceRestart() 获取更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
 * @method void setForceRestart(boolean $ForceRestart) 设置更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
 * @method CosBackup getCosBackup() 获取COS自动备份信息
 * @method void setCosBackup(CosBackup $CosBackup) 设置COS自动备份信息
 * @method array getNodeInfoList() 获取节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method void setNodeInfoList(array $NodeInfoList) 设置节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method string getPublicAccess() 获取公网访问状态
 * @method void setPublicAccess(string $PublicAccess) 设置公网访问状态
 * @method EsPublicAcl getEsPublicAcl() 获取公网访问控制列表
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) 设置公网访问控制列表
 * @method string getKibanaPublicAccess() 获取Kibana公网访问状态
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置Kibana公网访问状态
 * @method string getKibanaPrivateAccess() 获取Kibana内网访问状态
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置Kibana内网访问状态
 * @method integer getBasicSecurityType() 获取ES 6.8及以上版本基础版开启或关闭用户认证
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置ES 6.8及以上版本基础版开启或关闭用户认证
 * @method integer getKibanaPrivatePort() 获取Kibana内网端口
 * @method void setKibanaPrivatePort(integer $KibanaPrivatePort) 设置Kibana内网端口
 * @method integer getScaleType() 获取0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method void setScaleType(integer $ScaleType) 设置0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method array getMultiZoneInfo() 获取多可用区部署
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置多可用区部署
 * @method integer getSceneType() 获取场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
 * @method void setSceneType(integer $SceneType) 设置场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
 * @method string getKibanaConfig() 获取Kibana配置项（JSON格式字符串）
 * @method void setKibanaConfig(string $KibanaConfig) 设置Kibana配置项（JSON格式字符串）
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     */
    public $InstanceName;

    /**
     * @var integer 已废弃请使用NodeInfoList
节点个数（2-50个）
     */
    public $NodeNum;

    /**
     * @var string ES配置项（JSON格式字符串）
     */
    public $EsConfig;

    /**
     * @var string 默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     */
    public $Password;

    /**
     * @var EsAcl 访问控制列表
     */
    public $EsAcl;

    /**
     * @var integer 已废弃请使用NodeInfoList
磁盘大小（单位GB）
     */
    public $DiskSize;

    /**
     * @var string 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
     */
    public $MasterNodeNum;

    /**
     * @var string 已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $MasterNodeType;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
     */
    public $MasterNodeDiskSize;

    /**
     * @var boolean 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
     */
    public $ForceRestart;

    /**
     * @var CosBackup COS自动备份信息
     */
    public $CosBackup;

    /**
     * @var array 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     */
    public $NodeInfoList;

    /**
     * @var string 公网访问状态
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl 公网访问控制列表
     */
    public $EsPublicAcl;

    /**
     * @var string Kibana公网访问状态
     */
    public $KibanaPublicAccess;

    /**
     * @var string Kibana内网访问状态
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer ES 6.8及以上版本基础版开启或关闭用户认证
     */
    public $BasicSecurityType;

    /**
     * @var integer Kibana内网端口
     */
    public $KibanaPrivatePort;

    /**
     * @var integer 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     */
    public $ScaleType;

    /**
     * @var array 多可用区部署
     */
    public $MultiZoneInfo;

    /**
     * @var integer 场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
     */
    public $SceneType;

    /**
     * @var string Kibana配置项（JSON格式字符串）
     */
    public $KibanaConfig;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     * @param integer $NodeNum 已废弃请使用NodeInfoList
节点个数（2-50个）
     * @param string $EsConfig ES配置项（JSON格式字符串）
     * @param string $Password 默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     * @param EsAcl $EsAcl 访问控制列表
     * @param integer $DiskSize 已废弃请使用NodeInfoList
磁盘大小（单位GB）
     * @param string $NodeType 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeNum 已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
     * @param string $MasterNodeType 已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeDiskSize 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
     * @param boolean $ForceRestart 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
     * @param CosBackup $CosBackup COS自动备份信息
     * @param array $NodeInfoList 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     * @param string $PublicAccess 公网访问状态
     * @param EsPublicAcl $EsPublicAcl 公网访问控制列表
     * @param string $KibanaPublicAccess Kibana公网访问状态
     * @param string $KibanaPrivateAccess Kibana内网访问状态
     * @param integer $BasicSecurityType ES 6.8及以上版本基础版开启或关闭用户认证
     * @param integer $KibanaPrivatePort Kibana内网端口
     * @param integer $ScaleType 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     * @param array $MultiZoneInfo 多可用区部署
     * @param integer $SceneType 场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
     * @param string $KibanaConfig Kibana配置项（JSON格式字符串）
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

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
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

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsPublicAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("KibanaPrivatePort",$param) and $param["KibanaPrivatePort"] !== null) {
            $this->KibanaPrivatePort = $param["KibanaPrivatePort"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }
    }
}

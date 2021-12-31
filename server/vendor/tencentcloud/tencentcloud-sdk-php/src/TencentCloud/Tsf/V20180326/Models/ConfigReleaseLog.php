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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置项发布日志
 *
 * @method string getConfigReleaseLogId() 获取配置项发布日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigReleaseLogId(string $ConfigReleaseLogId) 设置配置项发布日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigId() 获取配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersion() 获取配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseTime() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseTime(string $ReleaseTime) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseDesc() 获取发布描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseDesc(string $ReleaseDesc) 设置发布描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseStatus() 获取发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseStatus(string $ReleaseStatus) 设置发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastConfigId() 获取上次发布的配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastConfigId(string $LastConfigId) 设置上次发布的配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastConfigName() 获取上次发布的配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastConfigName(string $LastConfigName) 设置上次发布的配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastConfigVersion() 获取上次发布的配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastConfigVersion(string $LastConfigVersion) 设置上次发布的配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRollbackFlag() 获取回滚标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbackFlag(boolean $RollbackFlag) 设置回滚标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigReleaseLog extends AbstractModel
{
    /**
     * @var string 配置项发布日志ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigReleaseLogId;

    /**
     * @var string 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var string 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersion;

    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseTime;

    /**
     * @var string 发布描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseDesc;

    /**
     * @var string 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseStatus;

    /**
     * @var string 上次发布的配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastConfigId;

    /**
     * @var string 上次发布的配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastConfigName;

    /**
     * @var string 上次发布的配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastConfigVersion;

    /**
     * @var boolean 回滚标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollbackFlag;

    /**
     * @param string $ConfigReleaseLogId 配置项发布日志ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigId 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersion 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseTime 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseDesc 发布描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseStatus 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastConfigId 上次发布的配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastConfigName 上次发布的配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastConfigVersion 上次发布的配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RollbackFlag 回滚标识
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
        if (array_key_exists("ConfigReleaseLogId",$param) and $param["ConfigReleaseLogId"] !== null) {
            $this->ConfigReleaseLogId = $param["ConfigReleaseLogId"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("LastConfigId",$param) and $param["LastConfigId"] !== null) {
            $this->LastConfigId = $param["LastConfigId"];
        }

        if (array_key_exists("LastConfigName",$param) and $param["LastConfigName"] !== null) {
            $this->LastConfigName = $param["LastConfigName"];
        }

        if (array_key_exists("LastConfigVersion",$param) and $param["LastConfigVersion"] !== null) {
            $this->LastConfigVersion = $param["LastConfigVersion"];
        }

        if (array_key_exists("RollbackFlag",$param) and $param["RollbackFlag"] !== null) {
            $this->RollbackFlag = $param["RollbackFlag"];
        }
    }
}

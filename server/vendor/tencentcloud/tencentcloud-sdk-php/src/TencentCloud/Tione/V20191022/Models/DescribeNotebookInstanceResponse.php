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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookInstance返回参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
 * @method string getInstanceType() 获取Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleArn() 获取角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleArn(string $RoleArn) 设置角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirectInternetAccess() 获取外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectInternetAccess(string $DirectInternetAccess) 设置外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootAccess() 获取Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootAccess(string $RootAccess) 设置Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedTime() 获取Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogUrl() 获取Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogUrl(string $LogUrl) 设置Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookInstanceStatus() 获取Notebook实例状态

Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookInstanceStatus(string $NotebookInstanceStatus) 设置Notebook实例状态

Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifecycleScriptsName() 获取notebook生命周期脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleScriptsName(string $LifecycleScriptsName) 设置notebook生命周期脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCodeRepository() 获取默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCodeRepository(string $DefaultCodeRepository) 设置默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdditionalCodeRepositories() 获取其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalCodeRepositories(array $AdditionalCodeRepositories) 设置其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsAccess() 获取是否开启CLS日志服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsAccess(string $ClsAccess) 设置是否开启CLS日志服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrepay() 获取是否预付费实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepay(boolean $Prepay) 设置是否预付费实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadline() 获取实例运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadline(string $Deadline) 设置实例运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method StoppingCondition getStoppingCondition() 获取自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClsConfig getClsConfig() 获取Cls配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsConfig(ClsConfig $ClsConfig) 设置Cls配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookInstanceResponse extends AbstractModel
{
    /**
     * @var string Notebook实例名称
     */
    public $NotebookInstanceName;

    /**
     * @var string Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleArn;

    /**
     * @var string 外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectInternetAccess;

    /**
     * @var string Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootAccess;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var string 创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedTime;

    /**
     * @var string Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogUrl;

    /**
     * @var string Notebook实例状态

Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookInstanceStatus;

    /**
     * @var string Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string notebook生命周期脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleScriptsName;

    /**
     * @var string 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCodeRepository;

    /**
     * @var array 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalCodeRepositories;

    /**
     * @var string 是否开启CLS日志服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsAccess;

    /**
     * @var boolean 是否预付费实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prepay;

    /**
     * @var string 实例运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deadline;

    /**
     * @var StoppingCondition 自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingCondition;

    /**
     * @var ClsConfig Cls配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsConfig;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NotebookInstanceName Notebook实例名称
     * @param string $InstanceType Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleArn 角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DirectInternetAccess 外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootAccess Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedTime Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogUrl Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookInstanceStatus Notebook实例状态

Pending: 创建中
Inservice: 运行中
Stopping: 停止中
Stopped: 已停止
Failed: 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifecycleScriptsName notebook生命周期脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCodeRepository 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdditionalCodeRepositories 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsAccess 是否开启CLS日志服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Prepay 是否预付费实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Deadline 实例运行截止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param StoppingCondition $StoppingCondition 自动停止配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClsConfig $ClsConfig Cls配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("DirectInternetAccess",$param) and $param["DirectInternetAccess"] !== null) {
            $this->DirectInternetAccess = $param["DirectInternetAccess"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("NotebookInstanceStatus",$param) and $param["NotebookInstanceStatus"] !== null) {
            $this->NotebookInstanceStatus = $param["NotebookInstanceStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LifecycleScriptsName",$param) and $param["LifecycleScriptsName"] !== null) {
            $this->LifecycleScriptsName = $param["LifecycleScriptsName"];
        }

        if (array_key_exists("DefaultCodeRepository",$param) and $param["DefaultCodeRepository"] !== null) {
            $this->DefaultCodeRepository = $param["DefaultCodeRepository"];
        }

        if (array_key_exists("AdditionalCodeRepositories",$param) and $param["AdditionalCodeRepositories"] !== null) {
            $this->AdditionalCodeRepositories = $param["AdditionalCodeRepositories"];
        }

        if (array_key_exists("ClsAccess",$param) and $param["ClsAccess"] !== null) {
            $this->ClsAccess = $param["ClsAccess"];
        }

        if (array_key_exists("Prepay",$param) and $param["Prepay"] !== null) {
            $this->Prepay = $param["Prepay"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("ClsConfig",$param) and $param["ClsConfig"] !== null) {
            $this->ClsConfig = new ClsConfig();
            $this->ClsConfig->deserialize($param["ClsConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

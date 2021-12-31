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
 * RunJobFlow请求参数结构体
 *
 * @method string getName() 获取作业名称。
 * @method void setName(string $Name) 设置作业名称。
 * @method boolean getCreateCluster() 获取是否新创建集群。
true，新创建集群，则使用Instance中的参数进行集群创建。
false，使用已有集群，则通过InstanceId传入。
 * @method void setCreateCluster(boolean $CreateCluster) 设置是否新创建集群。
true，新创建集群，则使用Instance中的参数进行集群创建。
false，使用已有集群，则通过InstanceId传入。
 * @method array getSteps() 获取作业流程执行步骤。
 * @method void setSteps(array $Steps) 设置作业流程执行步骤。
 * @method string getInstancePolicy() 获取作业流程正常完成时，集群的处理方式，可选择:
Terminate 销毁集群。
Reserve 保留集群。
 * @method void setInstancePolicy(string $InstancePolicy) 设置作业流程正常完成时，集群的处理方式，可选择:
Terminate 销毁集群。
Reserve 保留集群。
 * @method string getProductVersion() 获取只有CreateCluster为true时生效，目前只支持EMR版本，例如EMR-2.2.0，不支持ClickHouse和Druid版本。
 * @method void setProductVersion(string $ProductVersion) 设置只有CreateCluster为true时生效，目前只支持EMR版本，例如EMR-2.2.0，不支持ClickHouse和Druid版本。
 * @method boolean getSecurityClusterFlag() 获取只在CreateCluster为true时生效。
true 表示安装kerberos，false表示不安装kerberos。
 * @method void setSecurityClusterFlag(boolean $SecurityClusterFlag) 设置只在CreateCluster为true时生效。
true 表示安装kerberos，false表示不安装kerberos。
 * @method array getSoftware() 获取只在CreateCluster为true时生效。
新建集群时，要安装的软件列表。
 * @method void setSoftware(array $Software) 设置只在CreateCluster为true时生效。
新建集群时，要安装的软件列表。
 * @method array getBootstrapActions() 获取引导脚本。
 * @method void setBootstrapActions(array $BootstrapActions) 设置引导脚本。
 * @method array getConfigurations() 获取指定配置创建集群。
 * @method void setConfigurations(array $Configurations) 设置指定配置创建集群。
 * @method string getLogUri() 获取作业日志保存地址。
 * @method void setLogUri(string $LogUri) 设置作业日志保存地址。
 * @method string getInstanceId() 获取只在CreateCluster为false时生效。
 * @method void setInstanceId(string $InstanceId) 设置只在CreateCluster为false时生效。
 * @method string getApplicationRole() 获取自定义应用角色，大数据应用访问外部服务时使用的角色，默认为"EME_QCSRole"。
 * @method void setApplicationRole(string $ApplicationRole) 设置自定义应用角色，大数据应用访问外部服务时使用的角色，默认为"EME_QCSRole"。
 * @method string getClientToken() 获取重入标签，用来可重入检查，防止在一段时间内，创建相同的流程作业。
 * @method void setClientToken(string $ClientToken) 设置重入标签，用来可重入检查，防止在一段时间内，创建相同的流程作业。
 * @method ClusterSetting getInstance() 获取只在CreateCluster为true时生效，使用该配置创建集群。
 * @method void setInstance(ClusterSetting $Instance) 设置只在CreateCluster为true时生效，使用该配置创建集群。
 */
class RunJobFlowRequest extends AbstractModel
{
    /**
     * @var string 作业名称。
     */
    public $Name;

    /**
     * @var boolean 是否新创建集群。
true，新创建集群，则使用Instance中的参数进行集群创建。
false，使用已有集群，则通过InstanceId传入。
     */
    public $CreateCluster;

    /**
     * @var array 作业流程执行步骤。
     */
    public $Steps;

    /**
     * @var string 作业流程正常完成时，集群的处理方式，可选择:
Terminate 销毁集群。
Reserve 保留集群。
     */
    public $InstancePolicy;

    /**
     * @var string 只有CreateCluster为true时生效，目前只支持EMR版本，例如EMR-2.2.0，不支持ClickHouse和Druid版本。
     */
    public $ProductVersion;

    /**
     * @var boolean 只在CreateCluster为true时生效。
true 表示安装kerberos，false表示不安装kerberos。
     */
    public $SecurityClusterFlag;

    /**
     * @var array 只在CreateCluster为true时生效。
新建集群时，要安装的软件列表。
     */
    public $Software;

    /**
     * @var array 引导脚本。
     */
    public $BootstrapActions;

    /**
     * @var array 指定配置创建集群。
     */
    public $Configurations;

    /**
     * @var string 作业日志保存地址。
     */
    public $LogUri;

    /**
     * @var string 只在CreateCluster为false时生效。
     */
    public $InstanceId;

    /**
     * @var string 自定义应用角色，大数据应用访问外部服务时使用的角色，默认为"EME_QCSRole"。
     */
    public $ApplicationRole;

    /**
     * @var string 重入标签，用来可重入检查，防止在一段时间内，创建相同的流程作业。
     */
    public $ClientToken;

    /**
     * @var ClusterSetting 只在CreateCluster为true时生效，使用该配置创建集群。
     */
    public $Instance;

    /**
     * @param string $Name 作业名称。
     * @param boolean $CreateCluster 是否新创建集群。
true，新创建集群，则使用Instance中的参数进行集群创建。
false，使用已有集群，则通过InstanceId传入。
     * @param array $Steps 作业流程执行步骤。
     * @param string $InstancePolicy 作业流程正常完成时，集群的处理方式，可选择:
Terminate 销毁集群。
Reserve 保留集群。
     * @param string $ProductVersion 只有CreateCluster为true时生效，目前只支持EMR版本，例如EMR-2.2.0，不支持ClickHouse和Druid版本。
     * @param boolean $SecurityClusterFlag 只在CreateCluster为true时生效。
true 表示安装kerberos，false表示不安装kerberos。
     * @param array $Software 只在CreateCluster为true时生效。
新建集群时，要安装的软件列表。
     * @param array $BootstrapActions 引导脚本。
     * @param array $Configurations 指定配置创建集群。
     * @param string $LogUri 作业日志保存地址。
     * @param string $InstanceId 只在CreateCluster为false时生效。
     * @param string $ApplicationRole 自定义应用角色，大数据应用访问外部服务时使用的角色，默认为"EME_QCSRole"。
     * @param string $ClientToken 重入标签，用来可重入检查，防止在一段时间内，创建相同的流程作业。
     * @param ClusterSetting $Instance 只在CreateCluster为true时生效，使用该配置创建集群。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateCluster",$param) and $param["CreateCluster"] !== null) {
            $this->CreateCluster = $param["CreateCluster"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new Step();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("InstancePolicy",$param) and $param["InstancePolicy"] !== null) {
            $this->InstancePolicy = $param["InstancePolicy"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("SecurityClusterFlag",$param) and $param["SecurityClusterFlag"] !== null) {
            $this->SecurityClusterFlag = $param["SecurityClusterFlag"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("BootstrapActions",$param) and $param["BootstrapActions"] !== null) {
            $this->BootstrapActions = [];
            foreach ($param["BootstrapActions"] as $key => $value){
                $obj = new BootstrapAction();
                $obj->deserialize($value);
                array_push($this->BootstrapActions, $obj);
            }
        }

        if (array_key_exists("Configurations",$param) and $param["Configurations"] !== null) {
            $this->Configurations = [];
            foreach ($param["Configurations"] as $key => $value){
                $obj = new Configuration();
                $obj->deserialize($value);
                array_push($this->Configurations, $obj);
            }
        }

        if (array_key_exists("LogUri",$param) and $param["LogUri"] !== null) {
            $this->LogUri = $param["LogUri"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApplicationRole",$param) and $param["ApplicationRole"] !== null) {
            $this->ApplicationRole = $param["ApplicationRole"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new ClusterSetting();
            $this->Instance->deserialize($param["Instance"]);
        }
    }
}

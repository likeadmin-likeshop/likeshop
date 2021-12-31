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
 * DeployGroup请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getPkgId() 获取程序包ID
 * @method void setPkgId(string $PkgId) 设置程序包ID
 * @method string getStartupParameters() 获取部署组启动参数
 * @method void setStartupParameters(string $StartupParameters) 设置部署组启动参数
 * @method string getDeployDesc() 获取部署应用描述信息
 * @method void setDeployDesc(string $DeployDesc) 设置部署应用描述信息
 * @method boolean getForceStart() 获取是否允许强制启动
 * @method void setForceStart(boolean $ForceStart) 设置是否允许强制启动
 * @method boolean getEnableHealthCheck() 获取是否开启健康检查
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否开启健康检查
 * @method HealthCheckSettings getHealthCheckSettings() 获取开启健康检查时，配置健康检查
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置开启健康检查时，配置健康检查
 * @method integer getUpdateType() 获取部署方式，0表示快速更新，1表示滚动更新
 * @method void setUpdateType(integer $UpdateType) 设置部署方式，0表示快速更新，1表示滚动更新
 * @method boolean getDeployBetaEnable() 获取是否启用beta批次
 * @method void setDeployBetaEnable(boolean $DeployBetaEnable) 设置是否启用beta批次
 * @method array getDeployBatch() 获取滚动发布每个批次参与的实例比率
 * @method void setDeployBatch(array $DeployBatch) 设置滚动发布每个批次参与的实例比率
 * @method string getDeployExeMode() 获取滚动发布的执行方式
 * @method void setDeployExeMode(string $DeployExeMode) 设置滚动发布的执行方式
 * @method integer getDeployWaitTime() 获取滚动发布每个批次的时间间隔
 * @method void setDeployWaitTime(integer $DeployWaitTime) 设置滚动发布每个批次的时间间隔
 * @method string getStartScript() 获取启动脚本 base64编码
 * @method void setStartScript(string $StartScript) 设置启动脚本 base64编码
 * @method string getStopScript() 获取停止脚本 base64编码
 * @method void setStopScript(string $StopScript) 设置停止脚本 base64编码
 */
class DeployGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 程序包ID
     */
    public $PkgId;

    /**
     * @var string 部署组启动参数
     */
    public $StartupParameters;

    /**
     * @var string 部署应用描述信息
     */
    public $DeployDesc;

    /**
     * @var boolean 是否允许强制启动
     */
    public $ForceStart;

    /**
     * @var boolean 是否开启健康检查
     */
    public $EnableHealthCheck;

    /**
     * @var HealthCheckSettings 开启健康检查时，配置健康检查
     */
    public $HealthCheckSettings;

    /**
     * @var integer 部署方式，0表示快速更新，1表示滚动更新
     */
    public $UpdateType;

    /**
     * @var boolean 是否启用beta批次
     */
    public $DeployBetaEnable;

    /**
     * @var array 滚动发布每个批次参与的实例比率
     */
    public $DeployBatch;

    /**
     * @var string 滚动发布的执行方式
     */
    public $DeployExeMode;

    /**
     * @var integer 滚动发布每个批次的时间间隔
     */
    public $DeployWaitTime;

    /**
     * @var string 启动脚本 base64编码
     */
    public $StartScript;

    /**
     * @var string 停止脚本 base64编码
     */
    public $StopScript;

    /**
     * @param string $GroupId 部署组ID
     * @param string $PkgId 程序包ID
     * @param string $StartupParameters 部署组启动参数
     * @param string $DeployDesc 部署应用描述信息
     * @param boolean $ForceStart 是否允许强制启动
     * @param boolean $EnableHealthCheck 是否开启健康检查
     * @param HealthCheckSettings $HealthCheckSettings 开启健康检查时，配置健康检查
     * @param integer $UpdateType 部署方式，0表示快速更新，1表示滚动更新
     * @param boolean $DeployBetaEnable 是否启用beta批次
     * @param array $DeployBatch 滚动发布每个批次参与的实例比率
     * @param string $DeployExeMode 滚动发布的执行方式
     * @param integer $DeployWaitTime 滚动发布每个批次的时间间隔
     * @param string $StartScript 启动脚本 base64编码
     * @param string $StopScript 停止脚本 base64编码
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }

        if (array_key_exists("DeployDesc",$param) and $param["DeployDesc"] !== null) {
            $this->DeployDesc = $param["DeployDesc"];
        }

        if (array_key_exists("ForceStart",$param) and $param["ForceStart"] !== null) {
            $this->ForceStart = $param["ForceStart"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("DeployBetaEnable",$param) and $param["DeployBetaEnable"] !== null) {
            $this->DeployBetaEnable = $param["DeployBetaEnable"];
        }

        if (array_key_exists("DeployBatch",$param) and $param["DeployBatch"] !== null) {
            $this->DeployBatch = $param["DeployBatch"];
        }

        if (array_key_exists("DeployExeMode",$param) and $param["DeployExeMode"] !== null) {
            $this->DeployExeMode = $param["DeployExeMode"];
        }

        if (array_key_exists("DeployWaitTime",$param) and $param["DeployWaitTime"] !== null) {
            $this->DeployWaitTime = $param["DeployWaitTime"];
        }

        if (array_key_exists("StartScript",$param) and $param["StartScript"] !== null) {
            $this->StartScript = $param["StartScript"];
        }

        if (array_key_exists("StopScript",$param) and $param["StopScript"] !== null) {
            $this->StopScript = $param["StopScript"];
        }
    }
}

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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterNodePool请求参数结构体
 *
 * @method string getClusterId() 获取cluster id
 * @method void setClusterId(string $ClusterId) 设置cluster id
 * @method string getAutoScalingGroupPara() 获取AutoScalingGroupPara AS组参数
 * @method void setAutoScalingGroupPara(string $AutoScalingGroupPara) 设置AutoScalingGroupPara AS组参数
 * @method string getLaunchConfigurePara() 获取LaunchConfigurePara 运行参数
 * @method void setLaunchConfigurePara(string $LaunchConfigurePara) 设置LaunchConfigurePara 运行参数
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取InstanceAdvancedSettings 示例参数
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置InstanceAdvancedSettings 示例参数
 * @method boolean getEnableAutoscale() 获取是否启用自动伸缩
 * @method void setEnableAutoscale(boolean $EnableAutoscale) 设置是否启用自动伸缩
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method array getLabels() 获取Labels标签
 * @method void setLabels(array $Labels) 设置Labels标签
 * @method array getTaints() 获取Taints互斥
 * @method void setTaints(array $Taints) 设置Taints互斥
 * @method string getNodePoolOs() 获取节点池os
 * @method void setNodePoolOs(string $NodePoolOs) 设置节点池os
 * @method string getOsCustomizeType() 获取容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 */
class CreateClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string cluster id
     */
    public $ClusterId;

    /**
     * @var string AutoScalingGroupPara AS组参数
     */
    public $AutoScalingGroupPara;

    /**
     * @var string LaunchConfigurePara 运行参数
     */
    public $LaunchConfigurePara;

    /**
     * @var InstanceAdvancedSettings InstanceAdvancedSettings 示例参数
     */
    public $InstanceAdvancedSettings;

    /**
     * @var boolean 是否启用自动伸缩
     */
    public $EnableAutoscale;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var array Labels标签
     */
    public $Labels;

    /**
     * @var array Taints互斥
     */
    public $Taints;

    /**
     * @var string 节点池os
     */
    public $NodePoolOs;

    /**
     * @var string 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     */
    public $OsCustomizeType;

    /**
     * @param string $ClusterId cluster id
     * @param string $AutoScalingGroupPara AutoScalingGroupPara AS组参数
     * @param string $LaunchConfigurePara LaunchConfigurePara 运行参数
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings InstanceAdvancedSettings 示例参数
     * @param boolean $EnableAutoscale 是否启用自动伸缩
     * @param string $Name 节点池名称
     * @param array $Labels Labels标签
     * @param array $Taints Taints互斥
     * @param string $NodePoolOs 节点池os
     * @param string $OsCustomizeType 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScalingGroupPara",$param) and $param["AutoScalingGroupPara"] !== null) {
            $this->AutoScalingGroupPara = $param["AutoScalingGroupPara"];
        }

        if (array_key_exists("LaunchConfigurePara",$param) and $param["LaunchConfigurePara"] !== null) {
            $this->LaunchConfigurePara = $param["LaunchConfigurePara"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }
    }
}

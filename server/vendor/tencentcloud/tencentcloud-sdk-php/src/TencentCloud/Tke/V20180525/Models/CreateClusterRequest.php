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
 * CreateCluster请求参数结构体
 *
 * @method ClusterCIDRSettings getClusterCIDRSettings() 获取集群容器网络配置信息
 * @method void setClusterCIDRSettings(ClusterCIDRSettings $ClusterCIDRSettings) 设置集群容器网络配置信息
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method array getRunInstancesForNode() 获取CVM创建透传参数，json化字符串格式，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。
 * @method void setRunInstancesForNode(array $RunInstancesForNode) 设置CVM创建透传参数，json化字符串格式，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。
 * @method ClusterBasicSettings getClusterBasicSettings() 获取集群的基本配置信息
 * @method void setClusterBasicSettings(ClusterBasicSettings $ClusterBasicSettings) 设置集群的基本配置信息
 * @method ClusterAdvancedSettings getClusterAdvancedSettings() 获取集群高级配置信息
 * @method void setClusterAdvancedSettings(ClusterAdvancedSettings $ClusterAdvancedSettings) 设置集群高级配置信息
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取节点高级配置信息
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置节点高级配置信息
 * @method array getExistedInstancesForNode() 获取已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过100。
 * @method void setExistedInstancesForNode(array $ExistedInstancesForNode) 设置已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过100。
 * @method array getInstanceDataDiskMountSettings() 获取CVM类型和其对应的数据盘挂载配置信息
 * @method void setInstanceDataDiskMountSettings(array $InstanceDataDiskMountSettings) 设置CVM类型和其对应的数据盘挂载配置信息
 * @method array getExtensionAddons() 获取需要安装的扩展组件信息
 * @method void setExtensionAddons(array $ExtensionAddons) 设置需要安装的扩展组件信息
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var ClusterCIDRSettings 集群容器网络配置信息
     */
    public $ClusterCIDRSettings;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     */
    public $ClusterType;

    /**
     * @var array CVM创建透传参数，json化字符串格式，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。
     */
    public $RunInstancesForNode;

    /**
     * @var ClusterBasicSettings 集群的基本配置信息
     */
    public $ClusterBasicSettings;

    /**
     * @var ClusterAdvancedSettings 集群高级配置信息
     */
    public $ClusterAdvancedSettings;

    /**
     * @var InstanceAdvancedSettings 节点高级配置信息
     */
    public $InstanceAdvancedSettings;

    /**
     * @var array 已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过100。
     */
    public $ExistedInstancesForNode;

    /**
     * @var array CVM类型和其对应的数据盘挂载配置信息
     */
    public $InstanceDataDiskMountSettings;

    /**
     * @var array 需要安装的扩展组件信息
     */
    public $ExtensionAddons;

    /**
     * @param ClusterCIDRSettings $ClusterCIDRSettings 集群容器网络配置信息
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     * @param array $RunInstancesForNode CVM创建透传参数，json化字符串格式，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。
     * @param ClusterBasicSettings $ClusterBasicSettings 集群的基本配置信息
     * @param ClusterAdvancedSettings $ClusterAdvancedSettings 集群高级配置信息
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 节点高级配置信息
     * @param array $ExistedInstancesForNode 已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过100。
     * @param array $InstanceDataDiskMountSettings CVM类型和其对应的数据盘挂载配置信息
     * @param array $ExtensionAddons 需要安装的扩展组件信息
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
        if (array_key_exists("ClusterCIDRSettings",$param) and $param["ClusterCIDRSettings"] !== null) {
            $this->ClusterCIDRSettings = new ClusterCIDRSettings();
            $this->ClusterCIDRSettings->deserialize($param["ClusterCIDRSettings"]);
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("RunInstancesForNode",$param) and $param["RunInstancesForNode"] !== null) {
            $this->RunInstancesForNode = [];
            foreach ($param["RunInstancesForNode"] as $key => $value){
                $obj = new RunInstancesForNode();
                $obj->deserialize($value);
                array_push($this->RunInstancesForNode, $obj);
            }
        }

        if (array_key_exists("ClusterBasicSettings",$param) and $param["ClusterBasicSettings"] !== null) {
            $this->ClusterBasicSettings = new ClusterBasicSettings();
            $this->ClusterBasicSettings->deserialize($param["ClusterBasicSettings"]);
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new ClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("ExistedInstancesForNode",$param) and $param["ExistedInstancesForNode"] !== null) {
            $this->ExistedInstancesForNode = [];
            foreach ($param["ExistedInstancesForNode"] as $key => $value){
                $obj = new ExistedInstancesForNode();
                $obj->deserialize($value);
                array_push($this->ExistedInstancesForNode, $obj);
            }
        }

        if (array_key_exists("InstanceDataDiskMountSettings",$param) and $param["InstanceDataDiskMountSettings"] !== null) {
            $this->InstanceDataDiskMountSettings = [];
            foreach ($param["InstanceDataDiskMountSettings"] as $key => $value){
                $obj = new InstanceDataDiskMountSetting();
                $obj->deserialize($value);
                array_push($this->InstanceDataDiskMountSettings, $obj);
            }
        }

        if (array_key_exists("ExtensionAddons",$param) and $param["ExtensionAddons"] !== null) {
            $this->ExtensionAddons = [];
            foreach ($param["ExtensionAddons"] as $key => $value){
                $obj = new ExtensionAddon();
                $obj->deserialize($value);
                array_push($this->ExtensionAddons, $obj);
            }
        }
    }
}

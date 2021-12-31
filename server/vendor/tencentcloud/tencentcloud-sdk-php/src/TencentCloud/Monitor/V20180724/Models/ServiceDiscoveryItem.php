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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 服务发现信息
 *
 * @method string getName() 获取服务发现名称
 * @method void setName(string $Name) 设置服务发现名称
 * @method string getNamespace() 获取服务发现属于的 Namespace
 * @method void setNamespace(string $Namespace) 设置服务发现属于的 Namespace
 * @method string getKind() 获取服务发现类型: ServiceMonitor/PodMonitor
 * @method void setKind(string $Kind) 设置服务发现类型: ServiceMonitor/PodMonitor
 * @method string getNamespaceSelector() 获取Namespace 选取方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceSelector(string $NamespaceSelector) 设置Namespace 选取方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelector() 获取Label 选取方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelector(string $Selector) 设置Label 选取方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoints() 获取Endpoints 信息（PodMonitor 不含该参数）
 * @method void setEndpoints(string $Endpoints) 设置Endpoints 信息（PodMonitor 不含该参数）
 * @method string getYaml() 获取服务发现对应的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYaml(string $Yaml) 设置服务发现对应的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceDiscoveryItem extends AbstractModel
{
    /**
     * @var string 服务发现名称
     */
    public $Name;

    /**
     * @var string 服务发现属于的 Namespace
     */
    public $Namespace;

    /**
     * @var string 服务发现类型: ServiceMonitor/PodMonitor
     */
    public $Kind;

    /**
     * @var string Namespace 选取方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceSelector;

    /**
     * @var string Label 选取方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Selector;

    /**
     * @var string Endpoints 信息（PodMonitor 不含该参数）
     */
    public $Endpoints;

    /**
     * @var string 服务发现对应的配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Yaml;

    /**
     * @param string $Name 服务发现名称
     * @param string $Namespace 服务发现属于的 Namespace
     * @param string $Kind 服务发现类型: ServiceMonitor/PodMonitor
     * @param string $NamespaceSelector Namespace 选取方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Selector Label 选取方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoints Endpoints 信息（PodMonitor 不含该参数）
     * @param string $Yaml 服务发现对应的配置信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = $param["NamespaceSelector"];
        }

        if (array_key_exists("Selector",$param) and $param["Selector"] !== null) {
            $this->Selector = $param["Selector"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = $param["Endpoints"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}

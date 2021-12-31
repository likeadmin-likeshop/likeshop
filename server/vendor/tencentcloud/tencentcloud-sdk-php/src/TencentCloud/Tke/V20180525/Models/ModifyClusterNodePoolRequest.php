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
 * ModifyClusterNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNodePoolId() 获取节点池ID
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getMaxNodesNum() 获取最大节点数
 * @method void setMaxNodesNum(integer $MaxNodesNum) 设置最大节点数
 * @method integer getMinNodesNum() 获取最小节点数
 * @method void setMinNodesNum(integer $MinNodesNum) 设置最小节点数
 * @method array getLabels() 获取标签
 * @method void setLabels(array $Labels) 设置标签
 * @method array getTaints() 获取污点
 * @method void setTaints(array $Taints) 设置污点
 * @method boolean getEnableAutoscale() 获取是否开启伸缩
 * @method void setEnableAutoscale(boolean $EnableAutoscale) 设置是否开启伸缩
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method string getOsCustomizeType() 获取镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 */
class ModifyClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 节点池ID
     */
    public $NodePoolId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 最大节点数
     */
    public $MaxNodesNum;

    /**
     * @var integer 最小节点数
     */
    public $MinNodesNum;

    /**
     * @var array 标签
     */
    public $Labels;

    /**
     * @var array 污点
     */
    public $Taints;

    /**
     * @var boolean 是否开启伸缩
     */
    public $EnableAutoscale;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var string 镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     */
    public $OsCustomizeType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NodePoolId 节点池ID
     * @param string $Name 名称
     * @param integer $MaxNodesNum 最大节点数
     * @param integer $MinNodesNum 最小节点数
     * @param array $Labels 标签
     * @param array $Taints 污点
     * @param boolean $EnableAutoscale 是否开启伸缩
     * @param string $OsName 操作系统名称
     * @param string $OsCustomizeType 镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
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

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }
    }
}

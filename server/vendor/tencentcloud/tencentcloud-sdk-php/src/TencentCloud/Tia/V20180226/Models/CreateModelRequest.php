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
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModel请求参数结构体
 *
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getModel() 获取要部署的模型文件路径名
 * @method void setModel(string $Model) 设置要部署的模型文件路径名
 * @method string getDescription() 获取关于模型的描述
 * @method void setDescription(string $Description) 设置关于模型的描述
 * @method string getCluster() 获取部署目标集群的名称，`集群模式` 必填
 * @method void setCluster(string $Cluster) 设置部署目标集群的名称，`集群模式` 必填
 * @method string getRuntimeVersion() 获取运行环境镜像的标签，详见 [Serving 环境](https://cloud.tencent.com/document/product/851/17320#serving-.E7.8E.AF.E5.A2.83)
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行环境镜像的标签，详见 [Serving 环境](https://cloud.tencent.com/document/product/851/17320#serving-.E7.8E.AF.E5.A2.83)
 * @method integer getReplicas() 获取要部署的模型副本数目，`集群模式` 选填
 * @method void setReplicas(integer $Replicas) 设置要部署的模型副本数目，`集群模式` 选填
 * @method string getExpose() 获取暴露外网或内网，默认暴露外网，`集群模式` 选填
 * @method void setExpose(string $Expose) 设置暴露外网或内网，默认暴露外网，`集群模式` 选填
 * @method string getServType() 获取部署模式，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式` 下服务的运行规模，形如 `2U4G1P`，详见 [自定义的训练规模](https://cloud.tencent.com/document/product/851/17319#.E8.87.AA.E5.AE.9A.E4.B9.89.E7.9A.84.E8.AE.AD.E7.BB.83.E8.A7.84.E6.A8.A1)
 * @method void setServType(string $ServType) 设置部署模式，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式` 下服务的运行规模，形如 `2U4G1P`，详见 [自定义的训练规模](https://cloud.tencent.com/document/product/851/17319#.E8.87.AA.E5.AE.9A.E4.B9.89.E7.9A.84.E8.AE.AD.E7.BB.83.E8.A7.84.E6.A8.A1)
 * @method array getRuntimeConf() 获取`无服务器模式` 可选的其他配置信息，详见 [利用无服务器函数部署](https://cloud.tencent.com/document/product/851/17049#.E5.88.A9.E7.94.A8.E6.97.A0.E6.9C.8D.E5.8A.A1.E5.99.A8.E5.87.BD.E6.95.B0.E9.83.A8.E7.BD.B2)
 * @method void setRuntimeConf(array $RuntimeConf) 设置`无服务器模式` 可选的其他配置信息，详见 [利用无服务器函数部署](https://cloud.tencent.com/document/product/851/17049#.E5.88.A9.E7.94.A8.E6.97.A0.E6.9C.8D.E5.8A.A1.E5.99.A8.E5.87.BD.E6.95.B0.E9.83.A8.E7.BD.B2)
 */
class CreateModelRequest extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @var string 要部署的模型文件路径名
     */
    public $Model;

    /**
     * @var string 关于模型的描述
     */
    public $Description;

    /**
     * @var string 部署目标集群的名称，`集群模式` 必填
     */
    public $Cluster;

    /**
     * @var string 运行环境镜像的标签，详见 [Serving 环境](https://cloud.tencent.com/document/product/851/17320#serving-.E7.8E.AF.E5.A2.83)
     */
    public $RuntimeVersion;

    /**
     * @var integer 要部署的模型副本数目，`集群模式` 选填
     */
    public $Replicas;

    /**
     * @var string 暴露外网或内网，默认暴露外网，`集群模式` 选填
     */
    public $Expose;

    /**
     * @var string 部署模式，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式` 下服务的运行规模，形如 `2U4G1P`，详见 [自定义的训练规模](https://cloud.tencent.com/document/product/851/17319#.E8.87.AA.E5.AE.9A.E4.B9.89.E7.9A.84.E8.AE.AD.E7.BB.83.E8.A7.84.E6.A8.A1)
     */
    public $ServType;

    /**
     * @var array `无服务器模式` 可选的其他配置信息，详见 [利用无服务器函数部署](https://cloud.tencent.com/document/product/851/17049#.E5.88.A9.E7.94.A8.E6.97.A0.E6.9C.8D.E5.8A.A1.E5.99.A8.E5.87.BD.E6.95.B0.E9.83.A8.E7.BD.B2)
     */
    public $RuntimeConf;

    /**
     * @param string $Name 模型名称
     * @param string $Model 要部署的模型文件路径名
     * @param string $Description 关于模型的描述
     * @param string $Cluster 部署目标集群的名称，`集群模式` 必填
     * @param string $RuntimeVersion 运行环境镜像的标签，详见 [Serving 环境](https://cloud.tencent.com/document/product/851/17320#serving-.E7.8E.AF.E5.A2.83)
     * @param integer $Replicas 要部署的模型副本数目，`集群模式` 选填
     * @param string $Expose 暴露外网或内网，默认暴露外网，`集群模式` 选填
     * @param string $ServType 部署模式，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式` 下服务的运行规模，形如 `2U4G1P`，详见 [自定义的训练规模](https://cloud.tencent.com/document/product/851/17319#.E8.87.AA.E5.AE.9A.E4.B9.89.E7.9A.84.E8.AE.AD.E7.BB.83.E8.A7.84.E6.A8.A1)
     * @param array $RuntimeConf `无服务器模式` 可选的其他配置信息，详见 [利用无服务器函数部署](https://cloud.tencent.com/document/product/851/17049#.E5.88.A9.E7.94.A8.E6.97.A0.E6.9C.8D.E5.8A.A1.E5.99.A8.E5.87.BD.E6.95.B0.E9.83.A8.E7.BD.B2)
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

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Expose",$param) and $param["Expose"] !== null) {
            $this->Expose = $param["Expose"];
        }

        if (array_key_exists("ServType",$param) and $param["ServType"] !== null) {
            $this->ServType = $param["ServType"];
        }

        if (array_key_exists("RuntimeConf",$param) and $param["RuntimeConf"] !== null) {
            $this->RuntimeConf = $param["RuntimeConf"];
        }
    }
}

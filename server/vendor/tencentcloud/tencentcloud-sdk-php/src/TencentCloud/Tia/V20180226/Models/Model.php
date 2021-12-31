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
 * 用于描述模型的详细情况
        "Model": {
            "Name": "test-model",
            "Description": "test-model",
            "Cluster": "ap-beijing",
            "Model": "cos://test-1255502019.cos.ap-shanghai.myqcloud.com/example:/data/mnist",
            "RuntimeVersion": "tiaserv-1.6.0-cpu",
            "CreateTime": "2018-04-26 15:59:25 +0800 CST",
            "State": "Running",
            "ServingUrl": "140.143.51.230",
            "Message": "Deployment does not have minimum availability.",
            "AppId": 1255502019,
            "ServType": "1U2G0P"
        },
 *
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getDescription() 获取模型描述
 * @method void setDescription(string $Description) 设置模型描述
 * @method string getCluster() 获取集群名称
 * @method void setCluster(string $Cluster) 设置集群名称
 * @method string getModel() 获取模型地址
 * @method void setModel(string $Model) 设置模型地址
 * @method string getRuntimeVersion() 获取运行环境编号
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行环境编号
 * @method string getCreateTime() 获取模型创建时间
 * @method void setCreateTime(string $CreateTime) 设置模型创建时间
 * @method string getState() 获取模型运行状态
 * @method void setState(string $State) 设置模型运行状态
 * @method string getServingUrl() 获取提供服务的url
 * @method void setServingUrl(string $ServingUrl) 设置提供服务的url
 * @method string getMessage() 获取相关消息
 * @method void setMessage(string $Message) 设置相关消息
 * @method integer getAppId() 获取编号
 * @method void setAppId(integer $AppId) 设置编号
 * @method string getServType() 获取机型
 * @method void setServType(string $ServType) 设置机型
 * @method string getExpose() 获取模型暴露方式
 * @method void setExpose(string $Expose) 设置模型暴露方式
 * @method integer getReplicas() 获取部署副本数量
 * @method void setReplicas(integer $Replicas) 设置部署副本数量
 * @method string getId() 获取模型Id
 * @method void setId(string $Id) 设置模型Id
 * @method string getUin() 获取创建任务的Uin
 * @method void setUin(string $Uin) 设置创建任务的Uin
 * @method string getDelTime() 获取模型删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method void setDelTime(string $DelTime) 设置模型删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 */
class Model extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @var string 模型描述
     */
    public $Description;

    /**
     * @var string 集群名称
     */
    public $Cluster;

    /**
     * @var string 模型地址
     */
    public $Model;

    /**
     * @var string 运行环境编号
     */
    public $RuntimeVersion;

    /**
     * @var string 模型创建时间
     */
    public $CreateTime;

    /**
     * @var string 模型运行状态
     */
    public $State;

    /**
     * @var string 提供服务的url
     */
    public $ServingUrl;

    /**
     * @var string 相关消息
     */
    public $Message;

    /**
     * @var integer 编号
     */
    public $AppId;

    /**
     * @var string 机型
     */
    public $ServType;

    /**
     * @var string 模型暴露方式
     */
    public $Expose;

    /**
     * @var integer 部署副本数量
     */
    public $Replicas;

    /**
     * @var string 模型Id
     */
    public $Id;

    /**
     * @var string 创建任务的Uin
     */
    public $Uin;

    /**
     * @var string 模型删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     */
    public $DelTime;

    /**
     * @param string $Name 模型名称
     * @param string $Description 模型描述
     * @param string $Cluster 集群名称
     * @param string $Model 模型地址
     * @param string $RuntimeVersion 运行环境编号
     * @param string $CreateTime 模型创建时间
     * @param string $State 模型运行状态
     * @param string $ServingUrl 提供服务的url
     * @param string $Message 相关消息
     * @param integer $AppId 编号
     * @param string $ServType 机型
     * @param string $Expose 模型暴露方式
     * @param integer $Replicas 部署副本数量
     * @param string $Id 模型Id
     * @param string $Uin 创建任务的Uin
     * @param string $DelTime 模型删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ServingUrl",$param) and $param["ServingUrl"] !== null) {
            $this->ServingUrl = $param["ServingUrl"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ServType",$param) and $param["ServType"] !== null) {
            $this->ServType = $param["ServType"];
        }

        if (array_key_exists("Expose",$param) and $param["Expose"] !== null) {
            $this->Expose = $param["Expose"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DelTime",$param) and $param["DelTime"] !== null) {
            $this->DelTime = $param["DelTime"];
        }
    }
}

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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionConfiguration请求参数结构体
 *
 * @method string getFunctionName() 获取要修改的函数名称
 * @method void setFunctionName(string $FunctionName) 设置要修改的函数名称
 * @method string getDescription() 获取函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method void setDescription(string $Description) 设置函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method integer getMemorySize() 获取函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
 * @method void setMemorySize(integer $MemorySize) 设置函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
 * @method integer getTimeout() 获取函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
 * @method void setTimeout(integer $Timeout) 设置函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
 * @method string getRuntime() 获取函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，Nodejs8.9，Nodejs10.15，Nodejs12.16， PHP5， PHP7，Go1 ， Java8和CustomRuntime
 * @method void setRuntime(string $Runtime) 设置函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，Nodejs8.9，Nodejs10.15，Nodejs12.16， PHP5， PHP7，Go1 ， Java8和CustomRuntime
 * @method Environment getEnvironment() 获取函数的环境变量
 * @method void setEnvironment(Environment $Environment) 设置函数的环境变量
 * @method string getNamespace() 获取函数所属命名空间
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间
 * @method VpcConfig getVpcConfig() 获取函数的私有网络配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置函数的私有网络配置
 * @method string getRole() 获取函数绑定的角色
 * @method void setRole(string $Role) 设置函数绑定的角色
 * @method string getClsLogsetId() 获取日志投递到的cls日志集ID
 * @method void setClsLogsetId(string $ClsLogsetId) 设置日志投递到的cls日志集ID
 * @method string getClsTopicId() 获取日志投递到的cls Topic ID
 * @method void setClsTopicId(string $ClsTopicId) 设置日志投递到的cls Topic ID
 * @method string getPublish() 获取在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
 * @method void setPublish(string $Publish) 设置在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
 * @method string getL5Enable() 获取是否开启L5访问能力，TRUE 为开启，FALSE为关闭
 * @method void setL5Enable(string $L5Enable) 设置是否开启L5访问能力，TRUE 为开启，FALSE为关闭
 * @method array getLayers() 获取函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
 * @method void setLayers(array $Layers) 设置函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
 * @method DeadLetterConfig getDeadLetterConfig() 获取函数关联的死信队列信息
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) 设置函数关联的死信队列信息
 * @method PublicNetConfigIn getPublicNetConfig() 获取公网访问配置
 * @method void setPublicNetConfig(PublicNetConfigIn $PublicNetConfig) 设置公网访问配置
 * @method CfsConfig getCfsConfig() 获取文件系统配置入参，用于云函数绑定CFS文件系统
 * @method void setCfsConfig(CfsConfig $CfsConfig) 设置文件系统配置入参，用于云函数绑定CFS文件系统
 * @method integer getInitTimeout() 获取函数初始化执行超时时间，默认15秒
 * @method void setInitTimeout(integer $InitTimeout) 设置函数初始化执行超时时间，默认15秒
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string 要修改的函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     */
    public $Description;

    /**
     * @var integer 函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
     */
    public $MemorySize;

    /**
     * @var integer 函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
     */
    public $Timeout;

    /**
     * @var string 函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，Nodejs8.9，Nodejs10.15，Nodejs12.16， PHP5， PHP7，Go1 ， Java8和CustomRuntime
     */
    public $Runtime;

    /**
     * @var Environment 函数的环境变量
     */
    public $Environment;

    /**
     * @var string 函数所属命名空间
     */
    public $Namespace;

    /**
     * @var VpcConfig 函数的私有网络配置
     */
    public $VpcConfig;

    /**
     * @var string 函数绑定的角色
     */
    public $Role;

    /**
     * @var string 日志投递到的cls日志集ID
     */
    public $ClsLogsetId;

    /**
     * @var string 日志投递到的cls Topic ID
     */
    public $ClsTopicId;

    /**
     * @var string 在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
     */
    public $Publish;

    /**
     * @var string 是否开启L5访问能力，TRUE 为开启，FALSE为关闭
     */
    public $L5Enable;

    /**
     * @var array 函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
     */
    public $Layers;

    /**
     * @var DeadLetterConfig 函数关联的死信队列信息
     */
    public $DeadLetterConfig;

    /**
     * @var PublicNetConfigIn 公网访问配置
     */
    public $PublicNetConfig;

    /**
     * @var CfsConfig 文件系统配置入参，用于云函数绑定CFS文件系统
     */
    public $CfsConfig;

    /**
     * @var integer 函数初始化执行超时时间，默认15秒
     */
    public $InitTimeout;

    /**
     * @param string $FunctionName 要修改的函数名称
     * @param string $Description 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     * @param integer $MemorySize 函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
     * @param integer $Timeout 函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
     * @param string $Runtime 函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，Nodejs8.9，Nodejs10.15，Nodejs12.16， PHP5， PHP7，Go1 ， Java8和CustomRuntime
     * @param Environment $Environment 函数的环境变量
     * @param string $Namespace 函数所属命名空间
     * @param VpcConfig $VpcConfig 函数的私有网络配置
     * @param string $Role 函数绑定的角色
     * @param string $ClsLogsetId 日志投递到的cls日志集ID
     * @param string $ClsTopicId 日志投递到的cls Topic ID
     * @param string $Publish 在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
     * @param string $L5Enable 是否开启L5访问能力，TRUE 为开启，FALSE为关闭
     * @param array $Layers 函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
     * @param DeadLetterConfig $DeadLetterConfig 函数关联的死信队列信息
     * @param PublicNetConfigIn $PublicNetConfig 公网访问配置
     * @param CfsConfig $CfsConfig 文件系统配置入参，用于云函数绑定CFS文件系统
     * @param integer $InitTimeout 函数初始化执行超时时间，默认15秒
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("L5Enable",$param) and $param["L5Enable"] !== null) {
            $this->L5Enable = $param["L5Enable"];
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new LayerVersionSimple();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new PublicNetConfigIn();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("CfsConfig",$param) and $param["CfsConfig"] !== null) {
            $this->CfsConfig = new CfsConfig();
            $this->CfsConfig->deserialize($param["CfsConfig"]);
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }
    }
}

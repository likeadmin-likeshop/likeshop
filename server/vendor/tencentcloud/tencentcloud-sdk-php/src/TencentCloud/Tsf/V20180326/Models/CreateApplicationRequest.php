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
 * CreateApplication请求参数结构体
 *
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationType() 获取应用类型，V：虚拟机应用；C：容器应用；S：serverless应用
 * @method void setApplicationType(string $ApplicationType) 设置应用类型，V：虚拟机应用；C：容器应用；S：serverless应用
 * @method string getMicroserviceType() 获取应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用
 * @method string getApplicationDesc() 获取应用描述
 * @method void setApplicationDesc(string $ApplicationDesc) 设置应用描述
 * @method string getApplicationLogConfig() 获取应用日志配置项，废弃参数
 * @method void setApplicationLogConfig(string $ApplicationLogConfig) 设置应用日志配置项，废弃参数
 * @method string getApplicationResourceType() 获取应用资源类型，废弃参数
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置应用资源类型，废弃参数
 * @method string getApplicationRuntimeType() 获取应用runtime类型
 * @method void setApplicationRuntimeType(string $ApplicationRuntimeType) 设置应用runtime类型
 * @method string getProgramId() 获取需要绑定的数据集ID
 * @method void setProgramId(string $ProgramId) 设置需要绑定的数据集ID
 * @method array getServiceConfigList() 获取服务配置信息列表
 * @method void setServiceConfigList(array $ServiceConfigList) 设置服务配置信息列表
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用类型，V：虚拟机应用；C：容器应用；S：serverless应用
     */
    public $ApplicationType;

    /**
     * @var string 应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用
     */
    public $MicroserviceType;

    /**
     * @var string 应用描述
     */
    public $ApplicationDesc;

    /**
     * @var string 应用日志配置项，废弃参数
     */
    public $ApplicationLogConfig;

    /**
     * @var string 应用资源类型，废弃参数
     */
    public $ApplicationResourceType;

    /**
     * @var string 应用runtime类型
     */
    public $ApplicationRuntimeType;

    /**
     * @var string 需要绑定的数据集ID
     */
    public $ProgramId;

    /**
     * @var array 服务配置信息列表
     */
    public $ServiceConfigList;

    /**
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationType 应用类型，V：虚拟机应用；C：容器应用；S：serverless应用
     * @param string $MicroserviceType 应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用
     * @param string $ApplicationDesc 应用描述
     * @param string $ApplicationLogConfig 应用日志配置项，废弃参数
     * @param string $ApplicationResourceType 应用资源类型，废弃参数
     * @param string $ApplicationRuntimeType 应用runtime类型
     * @param string $ProgramId 需要绑定的数据集ID
     * @param array $ServiceConfigList 服务配置信息列表
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
        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationDesc",$param) and $param["ApplicationDesc"] !== null) {
            $this->ApplicationDesc = $param["ApplicationDesc"];
        }

        if (array_key_exists("ApplicationLogConfig",$param) and $param["ApplicationLogConfig"] !== null) {
            $this->ApplicationLogConfig = $param["ApplicationLogConfig"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("ApplicationRuntimeType",$param) and $param["ApplicationRuntimeType"] !== null) {
            $this->ApplicationRuntimeType = $param["ApplicationRuntimeType"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ServiceConfigList",$param) and $param["ServiceConfigList"] !== null) {
            $this->ServiceConfigList = [];
            foreach ($param["ServiceConfigList"] as $key => $value){
                $obj = new ServiceConfig();
                $obj->deserialize($value);
                array_push($this->ServiceConfigList, $obj);
            }
        }
    }
}

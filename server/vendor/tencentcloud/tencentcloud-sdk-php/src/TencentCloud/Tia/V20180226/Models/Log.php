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
 * 日志
 *
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getLog() 获取日志内容
 * @method void setLog(string $Log) 设置日志内容
 * @method string getNamespace() 获取空间名
 * @method void setNamespace(string $Namespace) 设置空间名
 * @method string getPodId() 获取Pod Id
 * @method void setPodId(string $PodId) 设置Pod Id
 * @method string getPodName() 获取Pod名
 * @method void setPodName(string $PodName) 设置Pod名
 * @method string getTime() 获取日志日期，格式为“2018-07-02T09:10:04.916553368Z”
 * @method void setTime(string $Time) 设置日志日期，格式为“2018-07-02T09:10:04.916553368Z”
 */
class Log extends AbstractModel
{
    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 日志内容
     */
    public $Log;

    /**
     * @var string 空间名
     */
    public $Namespace;

    /**
     * @var string Pod Id
     */
    public $PodId;

    /**
     * @var string Pod名
     */
    public $PodName;

    /**
     * @var string 日志日期，格式为“2018-07-02T09:10:04.916553368Z”
     */
    public $Time;

    /**
     * @param string $ContainerName 容器名
     * @param string $Log 日志内容
     * @param string $Namespace 空间名
     * @param string $PodId Pod Id
     * @param string $PodName Pod名
     * @param string $Time 日志日期，格式为“2018-07-02T09:10:04.916553368Z”
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
        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

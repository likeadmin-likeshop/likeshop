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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器日志
 *
 * @method string getName() 获取容器名称
 * @method void setName(string $Name) 设置容器名称
 * @method string getLog() 获取日志
 * @method void setLog(string $Log) 设置日志
 * @method string getTime() 获取日志记录时间
 * @method void setTime(string $Time) 设置日志记录时间
 */
class ContainerLog extends AbstractModel
{
    /**
     * @var string 容器名称
     */
    public $Name;

    /**
     * @var string 日志
     */
    public $Log;

    /**
     * @var string 日志记录时间
     */
    public $Time;

    /**
     * @param string $Name 容器名称
     * @param string $Log 日志
     * @param string $Time 日志记录时间
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

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

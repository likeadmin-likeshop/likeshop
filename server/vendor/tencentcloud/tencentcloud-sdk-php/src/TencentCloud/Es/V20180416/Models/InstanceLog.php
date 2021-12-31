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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES集群日志详细信息
 *
 * @method string getTime() 获取日志时间
 * @method void setTime(string $Time) 设置日志时间
 * @method string getLevel() 获取日志级别
 * @method void setLevel(string $Level) 设置日志级别
 * @method string getIp() 获取集群节点ip
 * @method void setIp(string $Ip) 设置集群节点ip
 * @method string getMessage() 获取日志内容
 * @method void setMessage(string $Message) 设置日志内容
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string 日志时间
     */
    public $Time;

    /**
     * @var string 日志级别
     */
    public $Level;

    /**
     * @var string 集群节点ip
     */
    public $Ip;

    /**
     * @var string 日志内容
     */
    public $Message;

    /**
     * @param string $Time 日志时间
     * @param string $Level 日志级别
     * @param string $Ip 集群节点ip
     * @param string $Message 日志内容
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

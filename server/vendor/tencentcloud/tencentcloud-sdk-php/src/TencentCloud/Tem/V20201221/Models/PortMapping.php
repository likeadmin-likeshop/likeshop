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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务端口映射
 *
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method integer getTargetPort() 获取映射端口
 * @method void setTargetPort(integer $TargetPort) 设置映射端口
 * @method string getProtocol() 获取协议栈 TCP/UDP
 * @method void setProtocol(string $Protocol) 设置协议栈 TCP/UDP
 */
class PortMapping extends AbstractModel
{
    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var integer 映射端口
     */
    public $TargetPort;

    /**
     * @var string 协议栈 TCP/UDP
     */
    public $Protocol;

    /**
     * @param integer $Port 端口
     * @param integer $TargetPort 映射端口
     * @param string $Protocol 协议栈 TCP/UDP
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}

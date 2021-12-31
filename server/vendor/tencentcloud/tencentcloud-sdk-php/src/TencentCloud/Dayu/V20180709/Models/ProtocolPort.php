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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protocol、Port参数
 *
 * @method string getProtocol() 获取协议（tcp；udp）
 * @method void setProtocol(string $Protocol) 设置协议（tcp；udp）
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 */
class ProtocolPort extends AbstractModel
{
    /**
     * @var string 协议（tcp；udp）
     */
    public $Protocol;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @param string $Protocol 协议（tcp；udp）
     * @param integer $Port 端口
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}

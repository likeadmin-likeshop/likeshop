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
 * IP 地址
 *
 * @method string getType() 获取Ip 地址的类型。可为 advertise, public 等
 * @method void setType(string $Type) 设置Ip 地址的类型。可为 advertise, public 等
 * @method string getIp() 获取Ip 地址
 * @method void setIp(string $Ip) 设置Ip 地址
 * @method integer getPort() 获取网络端口
 * @method void setPort(integer $Port) 设置网络端口
 */
class IPAddress extends AbstractModel
{
    /**
     * @var string Ip 地址的类型。可为 advertise, public 等
     */
    public $Type;

    /**
     * @var string Ip 地址
     */
    public $Ip;

    /**
     * @var integer 网络端口
     */
    public $Port;

    /**
     * @param string $Type Ip 地址的类型。可为 advertise, public 等
     * @param string $Ip Ip 地址
     * @param integer $Port 网络端口
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}

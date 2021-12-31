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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * eipacl规则
 *
 * @method string getIp() 获取源 IP
 * @method void setIp(string $Ip) 设置源 IP
 * @method string getPort() 获取目标端口
 * @method void setPort(string $Port) 设置目标端口
 * @method string getProtocol() 获取协议(TCP/UDP/ICMP/ANY)
 * @method void setProtocol(string $Protocol) 设置协议(TCP/UDP/ICMP/ANY)
 * @method string getAction() 获取策略（accept/drop）
 * @method void setAction(string $Action) 设置策略（accept/drop）
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class EipAclRule extends AbstractModel
{
    /**
     * @var string 源 IP
     */
    public $Ip;

    /**
     * @var string 目标端口
     */
    public $Port;

    /**
     * @var string 协议(TCP/UDP/ICMP/ANY)
     */
    public $Protocol;

    /**
     * @var string 策略（accept/drop）
     */
    public $Action;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $Ip 源 IP
     * @param string $Port 目标端口
     * @param string $Protocol 协议(TCP/UDP/ICMP/ANY)
     * @param string $Action 策略（accept/drop）
     * @param string $Description 备注
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPV6转换规则
 *
 * @method integer getVport6() 获取IPV6端口号，可在0~65535范围取值
 * @method void setVport6(integer $Vport6) 设置IPV6端口号，可在0~65535范围取值
 * @method string getProtocol() 获取协议类型，支持TCP/UDP
 * @method void setProtocol(string $Protocol) 设置协议类型，支持TCP/UDP
 * @method string getVip() 获取IPV4地址
 * @method void setVip(string $Vip) 设置IPV4地址
 * @method integer getVport() 获取IPV4端口号，可在0~65535范围取值
 * @method void setVport(integer $Vport) 设置IPV4端口号，可在0~65535范围取值
 */
class Ip6RuleInfo extends AbstractModel
{
    /**
     * @var integer IPV6端口号，可在0~65535范围取值
     */
    public $Vport6;

    /**
     * @var string 协议类型，支持TCP/UDP
     */
    public $Protocol;

    /**
     * @var string IPV4地址
     */
    public $Vip;

    /**
     * @var integer IPV4端口号，可在0~65535范围取值
     */
    public $Vport;

    /**
     * @param integer $Vport6 IPV6端口号，可在0~65535范围取值
     * @param string $Protocol 协议类型，支持TCP/UDP
     * @param string $Vip IPV4地址
     * @param integer $Vport IPV4端口号，可在0~65535范围取值
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
        if (array_key_exists("Vport6",$param) and $param["Vport6"] !== null) {
            $this->Vport6 = $param["Vport6"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}

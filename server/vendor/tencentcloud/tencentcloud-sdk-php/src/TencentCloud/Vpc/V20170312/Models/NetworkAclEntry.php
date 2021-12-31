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
 * 网络ACL规则。
 *
 * @method string getModifyTime() 获取修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
 * @method string getProtocol() 获取协议, 取值: TCP,UDP, ICMP, ALL。
 * @method void setProtocol(string $Protocol) 设置协议, 取值: TCP,UDP, ICMP, ALL。
 * @method string getPort() 获取端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method void setPort(string $Port) 设置端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method string getCidrBlock() 获取网段或IP(互斥)。
 * @method void setCidrBlock(string $CidrBlock) 设置网段或IP(互斥)。
 * @method string getIpv6CidrBlock() 获取网段或IPv6(互斥)。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置网段或IPv6(互斥)。
 * @method string getAction() 获取ACCEPT 或 DROP。
 * @method void setAction(string $Action) 设置ACCEPT 或 DROP。
 * @method string getDescription() 获取规则描述，最大长度100。
 * @method void setDescription(string $Description) 设置规则描述，最大长度100。
 */
class NetworkAclEntry extends AbstractModel
{
    /**
     * @var string 修改时间。
     */
    public $ModifyTime;

    /**
     * @var string 协议, 取值: TCP,UDP, ICMP, ALL。
     */
    public $Protocol;

    /**
     * @var string 端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     */
    public $Port;

    /**
     * @var string 网段或IP(互斥)。
     */
    public $CidrBlock;

    /**
     * @var string 网段或IPv6(互斥)。
     */
    public $Ipv6CidrBlock;

    /**
     * @var string ACCEPT 或 DROP。
     */
    public $Action;

    /**
     * @var string 规则描述，最大长度100。
     */
    public $Description;

    /**
     * @param string $ModifyTime 修改时间。
     * @param string $Protocol 协议, 取值: TCP,UDP, ICMP, ALL。
     * @param string $Port 端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     * @param string $CidrBlock 网段或IP(互斥)。
     * @param string $Ipv6CidrBlock 网段或IPv6(互斥)。
     * @param string $Action ACCEPT 或 DROP。
     * @param string $Description 规则描述，最大长度100。
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
        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

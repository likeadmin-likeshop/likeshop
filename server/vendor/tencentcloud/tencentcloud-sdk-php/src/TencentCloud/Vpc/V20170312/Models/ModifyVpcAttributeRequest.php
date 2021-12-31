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
 * ModifyVpcAttribute请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
 * @method string getVpcName() 获取私有网络名称，可任意命名，但不得超过60个字符。
 * @method void setVpcName(string $VpcName) 设置私有网络名称，可任意命名，但不得超过60个字符。
 * @method string getEnableMulticast() 获取是否开启组播。true: 开启, false: 关闭。
 * @method void setEnableMulticast(string $EnableMulticast) 设置是否开启组播。true: 开启, false: 关闭。
 * @method array getDnsServers() 获取DNS地址，最多支持4个，第1个默认为主，其余为备
 * @method void setDnsServers(array $DnsServers) 设置DNS地址，最多支持4个，第1个默认为主，其余为备
 * @method string getDomainName() 获取域名
 * @method void setDomainName(string $DomainName) 设置域名
 */
class ModifyVpcAttributeRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
     */
    public $VpcId;

    /**
     * @var string 私有网络名称，可任意命名，但不得超过60个字符。
     */
    public $VpcName;

    /**
     * @var string 是否开启组播。true: 开启, false: 关闭。
     */
    public $EnableMulticast;

    /**
     * @var array DNS地址，最多支持4个，第1个默认为主，其余为备
     */
    public $DnsServers;

    /**
     * @var string 域名
     */
    public $DomainName;

    /**
     * @param string $VpcId VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
     * @param string $VpcName 私有网络名称，可任意命名，但不得超过60个字符。
     * @param string $EnableMulticast 是否开启组播。true: 开启, false: 关闭。
     * @param array $DnsServers DNS地址，最多支持4个，第1个默认为主，其余为备
     * @param string $DomainName 域名
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = $param["DnsServers"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }
    }
}

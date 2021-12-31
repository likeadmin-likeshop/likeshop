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
 * Eks 自定义域名服务器 配置
 *
 * @method string getDomain() 获取域名。空字符串表示所有域名。
 * @method void setDomain(string $Domain) 设置域名。空字符串表示所有域名。
 * @method array getDnsServers() 获取dns 服务器地址列表。地址格式 ip:port
 * @method void setDnsServers(array $DnsServers) 设置dns 服务器地址列表。地址格式 ip:port
 */
class DnsServerConf extends AbstractModel
{
    /**
     * @var string 域名。空字符串表示所有域名。
     */
    public $Domain;

    /**
     * @var array dns 服务器地址列表。地址格式 ip:port
     */
    public $DnsServers;

    /**
     * @param string $Domain 域名。空字符串表示所有域名。
     * @param array $DnsServers dns 服务器地址列表。地址格式 ip:port
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = $param["DnsServers"];
        }
    }
}

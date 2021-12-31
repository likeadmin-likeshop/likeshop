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
 * DescribeIpGeolocationInfos请求参数结构体
 *
 * @method array getAddressIps() 获取查询IP地址列表，支持IPv4和IPv6。
 * @method void setAddressIps(array $AddressIps) 设置查询IP地址列表，支持IPv4和IPv6。
 * @method IpField getFields() 获取查询IP地址的字段信息，包括"Country","Province","City","Region","Isp","AsName","AsId"
 * @method void setFields(IpField $Fields) 设置查询IP地址的字段信息，包括"Country","Province","City","Region","Isp","AsName","AsId"
 */
class DescribeIpGeolocationInfosRequest extends AbstractModel
{
    /**
     * @var array 查询IP地址列表，支持IPv4和IPv6。
     */
    public $AddressIps;

    /**
     * @var IpField 查询IP地址的字段信息，包括"Country","Province","City","Region","Isp","AsName","AsId"
     */
    public $Fields;

    /**
     * @param array $AddressIps 查询IP地址列表，支持IPv4和IPv6。
     * @param IpField $Fields 查询IP地址的字段信息，包括"Country","Province","City","Region","Isp","AsName","AsId"
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
        if (array_key_exists("AddressIps",$param) and $param["AddressIps"] !== null) {
            $this->AddressIps = $param["AddressIps"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new IpField();
            $this->Fields->deserialize($param["Fields"]);
        }
    }
}

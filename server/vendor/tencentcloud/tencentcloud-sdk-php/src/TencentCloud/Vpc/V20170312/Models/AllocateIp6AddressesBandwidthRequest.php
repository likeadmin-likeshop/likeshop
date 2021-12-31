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
 * AllocateIp6AddressesBandwidth请求参数结构体
 *
 * @method array getIp6Addresses() 获取需要开通公网访问能力的IPV6地址
 * @method void setIp6Addresses(array $Ip6Addresses) 设置需要开通公网访问能力的IPV6地址
 * @method integer getInternetMaxBandwidthOut() 获取带宽，单位Mbps。默认是1Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽，单位Mbps。默认是1Mbps
 * @method string getInternetChargeType() 获取网络计费模式。IPV6当前对标准账户类型支持"TRAFFIC_POSTPAID_BY_HOUR"，对传统账户类型支持"BANDWIDTH_PACKAGE"。默认网络计费模式是"TRAFFIC_POSTPAID_BY_HOUR"。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费模式。IPV6当前对标准账户类型支持"TRAFFIC_POSTPAID_BY_HOUR"，对传统账户类型支持"BANDWIDTH_PACKAGE"。默认网络计费模式是"TRAFFIC_POSTPAID_BY_HOUR"。
 * @method string getBandwidthPackageId() 获取带宽包id，上移账号，申请带宽包计费模式的ipv6地址需要传入.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包id，上移账号，申请带宽包计费模式的ipv6地址需要传入.
 */
class AllocateIp6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array 需要开通公网访问能力的IPV6地址
     */
    public $Ip6Addresses;

    /**
     * @var integer 带宽，单位Mbps。默认是1Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 网络计费模式。IPV6当前对标准账户类型支持"TRAFFIC_POSTPAID_BY_HOUR"，对传统账户类型支持"BANDWIDTH_PACKAGE"。默认网络计费模式是"TRAFFIC_POSTPAID_BY_HOUR"。
     */
    public $InternetChargeType;

    /**
     * @var string 带宽包id，上移账号，申请带宽包计费模式的ipv6地址需要传入.
     */
    public $BandwidthPackageId;

    /**
     * @param array $Ip6Addresses 需要开通公网访问能力的IPV6地址
     * @param integer $InternetMaxBandwidthOut 带宽，单位Mbps。默认是1Mbps
     * @param string $InternetChargeType 网络计费模式。IPV6当前对标准账户类型支持"TRAFFIC_POSTPAID_BY_HOUR"，对传统账户类型支持"BANDWIDTH_PACKAGE"。默认网络计费模式是"TRAFFIC_POSTPAID_BY_HOUR"。
     * @param string $BandwidthPackageId 带宽包id，上移账号，申请带宽包计费模式的ipv6地址需要传入.
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
        if (array_key_exists("Ip6Addresses",$param) and $param["Ip6Addresses"] !== null) {
            $this->Ip6Addresses = $param["Ip6Addresses"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}

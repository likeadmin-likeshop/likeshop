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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInternetAddressQuota返回参数结构体
 *
 * @method integer getIpv6PrefixLen() 获取IPv6互联网公网允许的最小前缀长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6PrefixLen(integer $Ipv6PrefixLen) 设置IPv6互联网公网允许的最小前缀长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv4BgpQuota() 获取BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4BgpQuota(integer $Ipv4BgpQuota) 设置BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv4OtherQuota() 获取非BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4OtherQuota(integer $Ipv4OtherQuota) 设置非BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv4BgpNum() 获取BGP类型IPv4互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4BgpNum(integer $Ipv4BgpNum) 设置BGP类型IPv4互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv4OtherNum() 获取非BGP类型互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4OtherNum(integer $Ipv4OtherNum) 设置非BGP类型互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInternetAddressQuotaResponse extends AbstractModel
{
    /**
     * @var integer IPv6互联网公网允许的最小前缀长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6PrefixLen;

    /**
     * @var integer BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4BgpQuota;

    /**
     * @var integer 非BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4OtherQuota;

    /**
     * @var integer BGP类型IPv4互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4BgpNum;

    /**
     * @var integer 非BGP类型互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4OtherNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Ipv6PrefixLen IPv6互联网公网允许的最小前缀长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv4BgpQuota BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv4OtherQuota 非BGP类型IPv4互联网地址配额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv4BgpNum BGP类型IPv4互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv4OtherNum 非BGP类型互联网地址已使用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Ipv6PrefixLen",$param) and $param["Ipv6PrefixLen"] !== null) {
            $this->Ipv6PrefixLen = $param["Ipv6PrefixLen"];
        }

        if (array_key_exists("Ipv4BgpQuota",$param) and $param["Ipv4BgpQuota"] !== null) {
            $this->Ipv4BgpQuota = $param["Ipv4BgpQuota"];
        }

        if (array_key_exists("Ipv4OtherQuota",$param) and $param["Ipv4OtherQuota"] !== null) {
            $this->Ipv4OtherQuota = $param["Ipv4OtherQuota"];
        }

        if (array_key_exists("Ipv4BgpNum",$param) and $param["Ipv4BgpNum"] !== null) {
            $this->Ipv4BgpNum = $param["Ipv4BgpNum"];
        }

        if (array_key_exists("Ipv4OtherNum",$param) and $param["Ipv4OtherNum"] !== null) {
            $this->Ipv4OtherNum = $param["Ipv4OtherNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

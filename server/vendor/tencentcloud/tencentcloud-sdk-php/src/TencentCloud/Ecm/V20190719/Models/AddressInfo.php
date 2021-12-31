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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip地址相关信息结构体。
 *
 * @method PublicIPAddressInfo getPublicIPAddressInfo() 获取实例的外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIPAddressInfo(PublicIPAddressInfo $PublicIPAddressInfo) 设置实例的外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrivateIPAddressInfo getPrivateIPAddressInfo() 获取实例的内网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIPAddressInfo(PrivateIPAddressInfo $PrivateIPAddressInfo) 设置实例的内网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PublicIPAddressInfo getPublicIPv6AddressInfo() 获取实例的外网ipv6相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIPv6AddressInfo(PublicIPAddressInfo $PublicIPv6AddressInfo) 设置实例的外网ipv6相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var PublicIPAddressInfo 实例的外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIPAddressInfo;

    /**
     * @var PrivateIPAddressInfo 实例的内网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIPAddressInfo;

    /**
     * @var PublicIPAddressInfo 实例的外网ipv6相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIPv6AddressInfo;

    /**
     * @param PublicIPAddressInfo $PublicIPAddressInfo 实例的外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrivateIPAddressInfo $PrivateIPAddressInfo 实例的内网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PublicIPAddressInfo $PublicIPv6AddressInfo 实例的外网ipv6相关信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PublicIPAddressInfo",$param) and $param["PublicIPAddressInfo"] !== null) {
            $this->PublicIPAddressInfo = new PublicIPAddressInfo();
            $this->PublicIPAddressInfo->deserialize($param["PublicIPAddressInfo"]);
        }

        if (array_key_exists("PrivateIPAddressInfo",$param) and $param["PrivateIPAddressInfo"] !== null) {
            $this->PrivateIPAddressInfo = new PrivateIPAddressInfo();
            $this->PrivateIPAddressInfo->deserialize($param["PrivateIPAddressInfo"]);
        }

        if (array_key_exists("PublicIPv6AddressInfo",$param) and $param["PublicIPv6AddressInfo"] !== null) {
            $this->PublicIPv6AddressInfo = new PublicIPAddressInfo();
            $this->PublicIPv6AddressInfo->deserialize($param["PublicIPv6AddressInfo"]);
        }
    }
}

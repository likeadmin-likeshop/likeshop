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
 * 实例网卡ip网络信息数组
 *
 * @method array getAddressInfoSet() 获取实例内外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressInfoSet(array $AddressInfoSet) 设置实例内外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkInterfaceId() 获取网卡ID。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置网卡ID。
 * @method string getNetworkInterfaceName() 获取网卡名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置网卡名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrimary() 获取主网卡属性。true为主网卡，false为辅助网卡。
 * @method void setPrimary(boolean $Primary) 设置主网卡属性。true为主网卡，false为辅助网卡。
 */
class InstanceNetworkInfo extends AbstractModel
{
    /**
     * @var array 实例内外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressInfoSet;

    /**
     * @var string 网卡ID。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 网卡名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkInterfaceName;

    /**
     * @var boolean 主网卡属性。true为主网卡，false为辅助网卡。
     */
    public $Primary;

    /**
     * @param array $AddressInfoSet 实例内外网ip相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkInterfaceId 网卡ID。
     * @param string $NetworkInterfaceName 网卡名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Primary 主网卡属性。true为主网卡，false为辅助网卡。
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
        if (array_key_exists("AddressInfoSet",$param) and $param["AddressInfoSet"] !== null) {
            $this->AddressInfoSet = [];
            foreach ($param["AddressInfoSet"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->AddressInfoSet, $obj);
            }
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }
    }
}

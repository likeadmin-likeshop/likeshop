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
 * 实例的网络相关信息。
 *
 * @method array getPrivateIPAddressSet() 获取实例的内网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIPAddressSet(array $PrivateIPAddressSet) 设置实例的内网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicIPAddressSet() 获取实例的公网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIPAddressSet(array $PublicIPAddressSet) 设置实例的公网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceNetworkInfoSet() 获取实例网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNetworkInfoSet(array $InstanceNetworkInfoSet) 设置实例网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Internet extends AbstractModel
{
    /**
     * @var array 实例的内网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIPAddressSet;

    /**
     * @var array 实例的公网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIPAddressSet;

    /**
     * @var array 实例网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNetworkInfoSet;

    /**
     * @param array $PrivateIPAddressSet 实例的内网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicIPAddressSet 实例的公网相关信息列表。顺序为主网卡在前，辅助网卡按绑定先后顺序排列。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceNetworkInfoSet 实例网络相关信息。
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
        if (array_key_exists("PrivateIPAddressSet",$param) and $param["PrivateIPAddressSet"] !== null) {
            $this->PrivateIPAddressSet = [];
            foreach ($param["PrivateIPAddressSet"] as $key => $value){
                $obj = new PrivateIPAddressInfo();
                $obj->deserialize($value);
                array_push($this->PrivateIPAddressSet, $obj);
            }
        }

        if (array_key_exists("PublicIPAddressSet",$param) and $param["PublicIPAddressSet"] !== null) {
            $this->PublicIPAddressSet = [];
            foreach ($param["PublicIPAddressSet"] as $key => $value){
                $obj = new PublicIPAddressInfo();
                $obj->deserialize($value);
                array_push($this->PublicIPAddressSet, $obj);
            }
        }

        if (array_key_exists("InstanceNetworkInfoSet",$param) and $param["InstanceNetworkInfoSet"] !== null) {
            $this->InstanceNetworkInfoSet = [];
            foreach ($param["InstanceNetworkInfoSet"] as $key => $value){
                $obj = new InstanceNetworkInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNetworkInfoSet, $obj);
            }
        }
    }
}

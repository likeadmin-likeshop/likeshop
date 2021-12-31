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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nat防火墙弹性公网ip列表
 *
 * @method string getEip() 获取弹性公网ip
 * @method void setEip(string $Eip) 设置弹性公网ip
 * @method string getNatGatewayId() 获取所属的Nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGatewayId(string $NatGatewayId) 设置所属的Nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatGatewayName() 获取Nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGatewayName(string $NatGatewayName) 设置Nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatFwEipsInfo extends AbstractModel
{
    /**
     * @var string 弹性公网ip
     */
    public $Eip;

    /**
     * @var string 所属的Nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGatewayId;

    /**
     * @var string Nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGatewayName;

    /**
     * @param string $Eip 弹性公网ip
     * @param string $NatGatewayId 所属的Nat网关Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatGatewayName Nat网关名称
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
        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }
    }
}

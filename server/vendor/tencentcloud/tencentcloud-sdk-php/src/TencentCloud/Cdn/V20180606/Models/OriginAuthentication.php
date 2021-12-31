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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源鉴权高级配置
 *
 * @method string getSwitch() 获取鉴权开关，on或off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置鉴权开关，on或off
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginAuthenticationTypeA getTypeA() 获取鉴权类型A配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeA(OriginAuthenticationTypeA $TypeA) 设置鉴权类型A配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginAuthentication extends AbstractModel
{
    /**
     * @var string 鉴权开关，on或off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var OriginAuthenticationTypeA 鉴权类型A配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeA;

    /**
     * @param string $Switch 鉴权开关，on或off
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginAuthenticationTypeA $TypeA 鉴权类型A配置
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("TypeA",$param) and $param["TypeA"] !== null) {
            $this->TypeA = new OriginAuthenticationTypeA();
            $this->TypeA->deserialize($param["TypeA"]);
        }
    }
}

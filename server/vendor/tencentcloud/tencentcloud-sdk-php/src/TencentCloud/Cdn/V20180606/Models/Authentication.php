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
 * 时间戳防盗链配置
 *
 * @method string getSwitch() 获取防盗链配置开关
on：开启
off：关闭
开启时必须且只配置一种模式，其余模式需要设置为 null
 * @method void setSwitch(string $Switch) 设置防盗链配置开关
on：开启
off：关闭
开启时必须且只配置一种模式，其余模式需要设置为 null
 * @method AuthenticationTypeA getTypeA() 获取时间戳防盗链模式 A 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeA(AuthenticationTypeA $TypeA) 设置时间戳防盗链模式 A 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AuthenticationTypeB getTypeB() 获取时间戳防盗链模式 B 配置（模式 B 后台升级中，暂时不支持配置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeB(AuthenticationTypeB $TypeB) 设置时间戳防盗链模式 B 配置（模式 B 后台升级中，暂时不支持配置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method AuthenticationTypeC getTypeC() 获取时间戳防盗链模式 C 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeC(AuthenticationTypeC $TypeC) 设置时间戳防盗链模式 C 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AuthenticationTypeD getTypeD() 获取时间戳防盗链模式 D 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeD(AuthenticationTypeD $TypeD) 设置时间戳防盗链模式 D 配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Authentication extends AbstractModel
{
    /**
     * @var string 防盗链配置开关
on：开启
off：关闭
开启时必须且只配置一种模式，其余模式需要设置为 null
     */
    public $Switch;

    /**
     * @var AuthenticationTypeA 时间戳防盗链模式 A 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeA;

    /**
     * @var AuthenticationTypeB 时间戳防盗链模式 B 配置（模式 B 后台升级中，暂时不支持配置）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeB;

    /**
     * @var AuthenticationTypeC 时间戳防盗链模式 C 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeC;

    /**
     * @var AuthenticationTypeD 时间戳防盗链模式 D 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeD;

    /**
     * @param string $Switch 防盗链配置开关
on：开启
off：关闭
开启时必须且只配置一种模式，其余模式需要设置为 null
     * @param AuthenticationTypeA $TypeA 时间戳防盗链模式 A 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AuthenticationTypeB $TypeB 时间戳防盗链模式 B 配置（模式 B 后台升级中，暂时不支持配置）
注意：此字段可能返回 null，表示取不到有效值。
     * @param AuthenticationTypeC $TypeC 时间戳防盗链模式 C 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AuthenticationTypeD $TypeD 时间戳防盗链模式 D 配置
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
            $this->TypeA = new AuthenticationTypeA();
            $this->TypeA->deserialize($param["TypeA"]);
        }

        if (array_key_exists("TypeB",$param) and $param["TypeB"] !== null) {
            $this->TypeB = new AuthenticationTypeB();
            $this->TypeB->deserialize($param["TypeB"]);
        }

        if (array_key_exists("TypeC",$param) and $param["TypeC"] !== null) {
            $this->TypeC = new AuthenticationTypeC();
            $this->TypeC->deserialize($param["TypeC"]);
        }

        if (array_key_exists("TypeD",$param) and $param["TypeD"] !== null) {
            $this->TypeD = new AuthenticationTypeD();
            $this->TypeD->deserialize($param["TypeD"]);
        }
    }
}

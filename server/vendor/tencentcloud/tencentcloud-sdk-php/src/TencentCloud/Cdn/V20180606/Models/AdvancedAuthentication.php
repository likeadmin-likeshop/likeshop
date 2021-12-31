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
 * 时间戳防盗链高级版配置，白名单功能
 *
 * @method string getSwitch() 获取防盗链配置开关，on或off，开启时必须且只能配置一种模式，其余模式为null。
 * @method void setSwitch(string $Switch) 设置防盗链配置开关，on或off，开启时必须且只能配置一种模式，其余模式为null。
 * @method AdvancedAuthenticationTypeA getTypeA() 获取时间戳防盗链高级版模式A配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeA(AdvancedAuthenticationTypeA $TypeA) 设置时间戳防盗链高级版模式A配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthenticationTypeB getTypeB() 获取时间戳防盗链高级版模式B配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeB(AdvancedAuthenticationTypeB $TypeB) 设置时间戳防盗链高级版模式B配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthenticationTypeC getTypeC() 获取时间戳防盗链高级版模式C配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeC(AdvancedAuthenticationTypeC $TypeC) 设置时间戳防盗链高级版模式C配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthenticationTypeD getTypeD() 获取时间戳防盗链高级版模式D配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeD(AdvancedAuthenticationTypeD $TypeD) 设置时间戳防盗链高级版模式D配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthenticationTypeE getTypeE() 获取时间戳防盗链高级版模式E配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeE(AdvancedAuthenticationTypeE $TypeE) 设置时间戳防盗链高级版模式E配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthenticationTypeF getTypeF() 获取时间戳防盗链高级版模式F配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeF(AdvancedAuthenticationTypeF $TypeF) 设置时间戳防盗链高级版模式F配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvancedAuthentication extends AbstractModel
{
    /**
     * @var string 防盗链配置开关，on或off，开启时必须且只能配置一种模式，其余模式为null。
     */
    public $Switch;

    /**
     * @var AdvancedAuthenticationTypeA 时间戳防盗链高级版模式A配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeA;

    /**
     * @var AdvancedAuthenticationTypeB 时间戳防盗链高级版模式B配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeB;

    /**
     * @var AdvancedAuthenticationTypeC 时间戳防盗链高级版模式C配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeC;

    /**
     * @var AdvancedAuthenticationTypeD 时间戳防盗链高级版模式D配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeD;

    /**
     * @var AdvancedAuthenticationTypeE 时间戳防盗链高级版模式E配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeE;

    /**
     * @var AdvancedAuthenticationTypeF 时间戳防盗链高级版模式F配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeF;

    /**
     * @param string $Switch 防盗链配置开关，on或off，开启时必须且只能配置一种模式，其余模式为null。
     * @param AdvancedAuthenticationTypeA $TypeA 时间戳防盗链高级版模式A配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthenticationTypeB $TypeB 时间戳防盗链高级版模式B配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthenticationTypeC $TypeC 时间戳防盗链高级版模式C配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthenticationTypeD $TypeD 时间戳防盗链高级版模式D配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthenticationTypeE $TypeE 时间戳防盗链高级版模式E配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthenticationTypeF $TypeF 时间戳防盗链高级版模式F配置。
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
            $this->TypeA = new AdvancedAuthenticationTypeA();
            $this->TypeA->deserialize($param["TypeA"]);
        }

        if (array_key_exists("TypeB",$param) and $param["TypeB"] !== null) {
            $this->TypeB = new AdvancedAuthenticationTypeB();
            $this->TypeB->deserialize($param["TypeB"]);
        }

        if (array_key_exists("TypeC",$param) and $param["TypeC"] !== null) {
            $this->TypeC = new AdvancedAuthenticationTypeC();
            $this->TypeC->deserialize($param["TypeC"]);
        }

        if (array_key_exists("TypeD",$param) and $param["TypeD"] !== null) {
            $this->TypeD = new AdvancedAuthenticationTypeD();
            $this->TypeD->deserialize($param["TypeD"]);
        }

        if (array_key_exists("TypeE",$param) and $param["TypeE"] !== null) {
            $this->TypeE = new AdvancedAuthenticationTypeE();
            $this->TypeE->deserialize($param["TypeE"]);
        }

        if (array_key_exists("TypeF",$param) and $param["TypeF"] !== null) {
            $this->TypeF = new AdvancedAuthenticationTypeF();
            $this->TypeF->deserialize($param["TypeF"]);
        }
    }
}

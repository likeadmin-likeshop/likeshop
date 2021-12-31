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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提供给前端控制按钮显示逻辑的字段
 *
 * @method string getDisabledReason() 获取不显示的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisabledReason(string $DisabledReason) 设置不显示的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取该按钮是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置该按钮是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupported() 获取是否显示该按钮
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupported(boolean $Supported) 设置是否显示该按钮
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperationInfoDetail extends AbstractModel
{
    /**
     * @var string 不显示的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisabledReason;

    /**
     * @var boolean 该按钮是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var boolean 是否显示该按钮
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Supported;

    /**
     * @param string $DisabledReason 不显示的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 该按钮是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Supported 是否显示该按钮
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
        if (array_key_exists("DisabledReason",$param) and $param["DisabledReason"] !== null) {
            $this->DisabledReason = $param["DisabledReason"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Supported",$param) and $param["Supported"] !== null) {
            $this->Supported = $param["Supported"];
        }
    }
}

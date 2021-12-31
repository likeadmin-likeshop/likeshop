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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量反欺诈-虚假TA识别
 *
 * @method integer getIsCheck() 获取是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCheck(integer $IsCheck) 设置是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsMatch() 获取是否符合[0：不符合；1：符合]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMatch(integer $IsMatch) 设置是否符合[0：不符合；1：符合]
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputTaValue extends AbstractModel
{
    /**
     * @var integer 是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCheck;

    /**
     * @var integer 是否符合[0：不符合；1：符合]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMatch;

    /**
     * @param integer $IsCheck 是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsMatch 是否符合[0：不符合；1：符合]
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
        if (array_key_exists("IsCheck",$param) and $param["IsCheck"] !== null) {
            $this->IsCheck = $param["IsCheck"];
        }

        if (array_key_exists("IsMatch",$param) and $param["IsMatch"] !== null) {
            $this->IsMatch = $param["IsMatch"];
        }
    }
}

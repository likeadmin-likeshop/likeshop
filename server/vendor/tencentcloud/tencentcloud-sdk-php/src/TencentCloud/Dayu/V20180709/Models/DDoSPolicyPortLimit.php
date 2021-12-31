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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS高级策略的禁用端口
 *
 * @method string getProtocol() 获取协议，取值范围[tcp,udp,all]
 * @method void setProtocol(string $Protocol) 设置协议，取值范围[tcp,udp,all]
 * @method integer getDPortStart() 获取开始目的端口，取值范围[0,65535]
 * @method void setDPortStart(integer $DPortStart) 设置开始目的端口，取值范围[0,65535]
 * @method integer getDPortEnd() 获取结束目的端口，取值范围[0,65535]，要求大于等于开始目的端口
 * @method void setDPortEnd(integer $DPortEnd) 设置结束目的端口，取值范围[0,65535]，要求大于等于开始目的端口
 * @method integer getSPortStart() 获取开始源端口，取值范围[0,65535]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSPortStart(integer $SPortStart) 设置开始源端口，取值范围[0,65535]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSPortEnd() 获取结束源端口，取值范围[0,65535]，要求大于等于开始源端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSPortEnd(integer $SPortEnd) 设置结束源端口，取值范围[0,65535]，要求大于等于开始源端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取执行动作，取值[drop(丢弃) ，transmit(转发)]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作，取值[drop(丢弃) ，transmit(转发)]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKind() 获取禁用端口类型，取值[0（目的端口范围禁用）， 1（源端口范围禁用）， 2（目的和源端口范围同时禁用）]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(integer $Kind) 设置禁用端口类型，取值[0（目的端口范围禁用）， 1（源端口范围禁用）， 2（目的和源端口范围同时禁用）]
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDoSPolicyPortLimit extends AbstractModel
{
    /**
     * @var string 协议，取值范围[tcp,udp,all]
     */
    public $Protocol;

    /**
     * @var integer 开始目的端口，取值范围[0,65535]
     */
    public $DPortStart;

    /**
     * @var integer 结束目的端口，取值范围[0,65535]，要求大于等于开始目的端口
     */
    public $DPortEnd;

    /**
     * @var integer 开始源端口，取值范围[0,65535]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SPortStart;

    /**
     * @var integer 结束源端口，取值范围[0,65535]，要求大于等于开始源端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SPortEnd;

    /**
     * @var string 执行动作，取值[drop(丢弃) ，transmit(转发)]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var integer 禁用端口类型，取值[0（目的端口范围禁用）， 1（源端口范围禁用）， 2（目的和源端口范围同时禁用）]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @param string $Protocol 协议，取值范围[tcp,udp,all]
     * @param integer $DPortStart 开始目的端口，取值范围[0,65535]
     * @param integer $DPortEnd 结束目的端口，取值范围[0,65535]，要求大于等于开始目的端口
     * @param integer $SPortStart 开始源端口，取值范围[0,65535]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SPortEnd 结束源端口，取值范围[0,65535]，要求大于等于开始源端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 执行动作，取值[drop(丢弃) ，transmit(转发)]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Kind 禁用端口类型，取值[0（目的端口范围禁用）， 1（源端口范围禁用）， 2（目的和源端口范围同时禁用）]
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DPortStart",$param) and $param["DPortStart"] !== null) {
            $this->DPortStart = $param["DPortStart"];
        }

        if (array_key_exists("DPortEnd",$param) and $param["DPortEnd"] !== null) {
            $this->DPortEnd = $param["DPortEnd"];
        }

        if (array_key_exists("SPortStart",$param) and $param["SPortStart"] !== null) {
            $this->SPortStart = $param["SPortStart"];
        }

        if (array_key_exists("SPortEnd",$param) and $param["SPortEnd"] !== null) {
            $this->SPortEnd = $param["SPortEnd"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}

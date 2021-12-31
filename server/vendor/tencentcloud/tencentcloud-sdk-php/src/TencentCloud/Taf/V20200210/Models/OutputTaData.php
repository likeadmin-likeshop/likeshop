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
 * @method integer getCode() 获取错误码[0:成功；非0：失败的错误码]
 * @method void setCode(integer $Code) 设置错误码[0:成功；非0：失败的错误码]
 * @method string getMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutputTaValue getValue() 获取结果数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(OutputTaValue $Value) 设置结果数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputTaData extends AbstractModel
{
    /**
     * @var integer 错误码[0:成功；非0：失败的错误码]
     */
    public $Code;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var OutputTaValue 结果数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Code 错误码[0:成功；非0：失败的错误码]
     * @param string $Message 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutputTaValue $Value 结果数据
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OutputTaValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}

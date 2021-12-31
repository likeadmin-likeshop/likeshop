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
 * CheckKol
 *
 * @method integer getCode() 获取错误码[0:成功；非0：失败的错误码]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置错误码[0:成功；非0：失败的错误码]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValue() 获取业务返回数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(array $Value) 设置业务返回数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputKolData extends AbstractModel
{
    /**
     * @var integer 错误码[0:成功；非0：失败的错误码]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array 业务返回数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Code 错误码[0:成功；非0：失败的错误码]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Value 业务返回数据
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
            $this->Value = [];
            foreach ($param["Value"] as $key => $value){
                $obj = new OutputKolValue();
                $obj->deserialize($value);
                array_push($this->Value, $obj);
            }
        }
    }
}

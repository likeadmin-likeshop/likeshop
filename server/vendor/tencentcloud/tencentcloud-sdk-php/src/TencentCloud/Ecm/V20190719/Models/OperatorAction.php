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
 * 操作Action
 *
 * @method string getAction() 获取可执行操作
 * @method void setAction(string $Action) 设置可执行操作
 * @method string getCode() 获取编码Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置编码Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取具体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置具体信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperatorAction extends AbstractModel
{
    /**
     * @var string 可执行操作
     */
    public $Action;

    /**
     * @var string 编码Code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 具体信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Action 可执行操作
     * @param string $Code 编码Code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 具体信息
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

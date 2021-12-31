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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发器触发结果
 *
 * @method integer getReturnCode() 获取请求TKE返回值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnCode(integer $ReturnCode) 设置请求TKE返回值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReturnMsg() 获取请求TKE返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnMsg(string $ReturnMsg) 设置请求TKE返回信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerInvokeResult extends AbstractModel
{
    /**
     * @var integer 请求TKE返回值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnCode;

    /**
     * @var string 请求TKE返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnMsg;

    /**
     * @param integer $ReturnCode 请求TKE返回值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReturnMsg 请求TKE返回信息
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }
    }
}

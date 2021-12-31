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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Get400Cdr返回参数结构体
 *
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getMsg() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOffset() 获取偏移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(string $Offset) 设置偏移
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCdr() 获取话单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdr(array $Cdr) 设置话单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class Get400CdrResponse extends AbstractModel
{
    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 偏移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var array 话单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cdr;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorCode 错误码
     * @param string $Msg 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Offset 偏移
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Cdr 话单列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Cdr",$param) and $param["Cdr"] !== null) {
            $this->Cdr = [];
            foreach ($param["Cdr"] as $key => $value){
                $obj = new VirturalNumCdr();
                $obj->deserialize($value);
                array_push($this->Cdr, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

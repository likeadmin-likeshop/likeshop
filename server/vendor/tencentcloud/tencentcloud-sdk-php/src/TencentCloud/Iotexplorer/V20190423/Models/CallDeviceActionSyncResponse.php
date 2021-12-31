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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallDeviceActionSync返回参数结构体
 *
 * @method string getClientToken() 获取调用Id
 * @method void setClientToken(string $ClientToken) 设置调用Id
 * @method string getOutputParams() 获取输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputParams(string $OutputParams) 设置输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取返回状态
 * @method void setStatus(string $Status) 设置返回状态
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CallDeviceActionSyncResponse extends AbstractModel
{
    /**
     * @var string 调用Id
     */
    public $ClientToken;

    /**
     * @var string 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputParams;

    /**
     * @var string 返回状态
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClientToken 调用Id
     * @param string $OutputParams 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 返回状态
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
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = $param["OutputParams"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

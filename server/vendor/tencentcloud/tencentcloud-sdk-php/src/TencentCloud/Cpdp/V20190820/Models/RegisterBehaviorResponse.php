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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterBehavior返回参数结构体
 *
 * @method string getReplenishSuccessFlag() 获取补录是否成功标志
功能标志为2时存在。
S：成功
F：失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplenishSuccessFlag(string $ReplenishSuccessFlag) 设置补录是否成功标志
功能标志为2时存在。
S：成功
F：失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegisterInfo getRegisterInfo() 获取签约信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterInfo(RegisterInfo $RegisterInfo) 设置签约信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RegisterBehaviorResponse extends AbstractModel
{
    /**
     * @var string 补录是否成功标志
功能标志为2时存在。
S：成功
F：失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplenishSuccessFlag;

    /**
     * @var RegisterInfo 签约信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReplenishSuccessFlag 补录是否成功标志
功能标志为2时存在。
S：成功
F：失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegisterInfo $RegisterInfo 签约信息
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
        if (array_key_exists("ReplenishSuccessFlag",$param) and $param["ReplenishSuccessFlag"] !== null) {
            $this->ReplenishSuccessFlag = $param["ReplenishSuccessFlag"];
        }

        if (array_key_exists("RegisterInfo",$param) and $param["RegisterInfo"] !== null) {
            $this->RegisterInfo = new RegisterInfo();
            $this->RegisterInfo->deserialize($param["RegisterInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

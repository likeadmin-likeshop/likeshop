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
namespace TencentCloud\Btoe\V20210303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAudioDeposit返回参数结构体
 *
 * @method string getBusinessId() 获取业务ID 透传 长度最大不超过64
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessId(string $BusinessId) 设置业务ID 透传 长度最大不超过64
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvidenceId() 获取请求成功，返回存证编码,用于查询存证后续业务数据
 * @method void setEvidenceId(string $EvidenceId) 设置请求成功，返回存证编码,用于查询存证后续业务数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAudioDepositResponse extends AbstractModel
{
    /**
     * @var string 业务ID 透传 长度最大不超过64
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessId;

    /**
     * @var string 请求成功，返回存证编码,用于查询存证后续业务数据
     */
    public $EvidenceId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BusinessId 业务ID 透传 长度最大不超过64
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvidenceId 请求成功，返回存证编码,用于查询存证后续业务数据
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
        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("EvidenceId",$param) and $param["EvidenceId"] !== null) {
            $this->EvidenceId = $param["EvidenceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

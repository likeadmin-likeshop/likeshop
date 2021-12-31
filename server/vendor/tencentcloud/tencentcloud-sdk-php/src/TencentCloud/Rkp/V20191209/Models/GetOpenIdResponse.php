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
namespace TencentCloud\Rkp\V20191209\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOpenId返回参数结构体
 *
 * @method string getOpenId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskInfo() 获取设备风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfo(array $RiskInfo) 设置设备风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetOpenIdResponse extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var array 设备风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OpenId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskInfo 设备风险
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("RiskInfo",$param) and $param["RiskInfo"] !== null) {
            $this->RiskInfo = [];
            foreach ($param["RiskInfo"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

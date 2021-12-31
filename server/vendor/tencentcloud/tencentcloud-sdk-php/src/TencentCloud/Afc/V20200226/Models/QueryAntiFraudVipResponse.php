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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAntiFraudVip返回参数结构体
 *
 * @method integer getFound() 获取表示该条记录能否查到：1为能查到，-1为查不到
 * @method void setFound(integer $Found) 设置表示该条记录能否查到：1为能查到，-1为查不到
 * @method integer getIdFound() 获取表示该条Id能否查到：1为能查到，-1为查不到
 * @method void setIdFound(integer $IdFound) 设置表示该条Id能否查到：1为能查到，-1为查不到
 * @method integer getRiskScore() 获取0~100;值越高 欺诈可能性越大
 * @method void setRiskScore(integer $RiskScore) 设置0~100;值越高 欺诈可能性越大
 * @method array getRiskInfo() 获取扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfo(array $RiskInfo) 设置扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeDesc() 获取业务侧错误码。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeDesc(string $CodeDesc) 设置业务侧错误码。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryAntiFraudVipResponse extends AbstractModel
{
    /**
     * @var integer 表示该条记录能否查到：1为能查到，-1为查不到
     */
    public $Found;

    /**
     * @var integer 表示该条Id能否查到：1为能查到，-1为查不到
     */
    public $IdFound;

    /**
     * @var integer 0~100;值越高 欺诈可能性越大
     */
    public $RiskScore;

    /**
     * @var array 扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfo;

    /**
     * @var string 业务侧错误码。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeDesc;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Found 表示该条记录能否查到：1为能查到，-1为查不到
     * @param integer $IdFound 表示该条Id能否查到：1为能查到，-1为查不到
     * @param integer $RiskScore 0~100;值越高 欺诈可能性越大
     * @param array $RiskInfo 扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeDesc 业务侧错误码。成功时返回Success，错误时返回具体业务错误原因。
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
        if (array_key_exists("Found",$param) and $param["Found"] !== null) {
            $this->Found = $param["Found"];
        }

        if (array_key_exists("IdFound",$param) and $param["IdFound"] !== null) {
            $this->IdFound = $param["IdFound"];
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }

        if (array_key_exists("RiskInfo",$param) and $param["RiskInfo"] !== null) {
            $this->RiskInfo = [];
            foreach ($param["RiskInfo"] as $key => $value){
                $obj = new RiskDetail();
                $obj->deserialize($value);
                array_push($this->RiskInfo, $obj);
            }
        }

        if (array_key_exists("CodeDesc",$param) and $param["CodeDesc"] !== null) {
            $this->CodeDesc = $param["CodeDesc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

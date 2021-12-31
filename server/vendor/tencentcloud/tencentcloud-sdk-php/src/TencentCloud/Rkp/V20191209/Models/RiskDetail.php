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
 * 风险详情
 *
 * @method integer getRiskCode() 获取风险码
 * @method void setRiskCode(integer $RiskCode) 设置风险码
 * @method string getRiskCodeValue() 获取风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCodeValue(string $RiskCodeValue) 设置风险详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskDetail extends AbstractModel
{
    /**
     * @var integer 风险码
     */
    public $RiskCode;

    /**
     * @var string 风险详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCodeValue;

    /**
     * @param integer $RiskCode 风险码
     * @param string $RiskCodeValue 风险详情
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
        if (array_key_exists("RiskCode",$param) and $param["RiskCode"] !== null) {
            $this->RiskCode = $param["RiskCode"];
        }

        if (array_key_exists("RiskCodeValue",$param) and $param["RiskCodeValue"] !== null) {
            $this->RiskCodeValue = $param["RiskCodeValue"];
        }
    }
}

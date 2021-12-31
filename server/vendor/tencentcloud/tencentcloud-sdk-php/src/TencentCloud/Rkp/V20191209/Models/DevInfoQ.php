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
 * 设备信息
 *
 * @method string getOpenId() 获取devid
 * @method void setOpenId(string $OpenId) 设置devid
 * @method integer getRiskScore() 获取风险值
 * @method void setRiskScore(integer $RiskScore) 设置风险值
 * @method array getRiskInfo() 获取风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfo(array $RiskInfo) 设置风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProbability() 获取概率值
 * @method void setProbability(float $Probability) 设置概率值
 */
class DevInfoQ extends AbstractModel
{
    /**
     * @var string devid
     */
    public $OpenId;

    /**
     * @var integer 风险值
     */
    public $RiskScore;

    /**
     * @var array 风险详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfo;

    /**
     * @var float 概率值
     */
    public $Probability;

    /**
     * @param string $OpenId devid
     * @param integer $RiskScore 风险值
     * @param array $RiskInfo 风险详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Probability 概率值
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

        if (array_key_exists("Probability",$param) and $param["Probability"] !== null) {
            $this->Probability = $param["Probability"];
        }
    }
}

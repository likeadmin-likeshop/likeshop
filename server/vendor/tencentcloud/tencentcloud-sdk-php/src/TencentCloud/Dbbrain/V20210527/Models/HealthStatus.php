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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例健康详情。
 *
 * @method integer getHealthScore() 获取健康分数，满分100。
 * @method void setHealthScore(integer $HealthScore) 设置健康分数，满分100。
 * @method string getHealthLevel() 获取健康等级，取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK"- 危险；"HIGH_RISK" - 高危。
 * @method void setHealthLevel(string $HealthLevel) 设置健康等级，取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK"- 危险；"HIGH_RISK" - 高危。
 * @method integer getScoreLost() 获取总扣分分数。
 * @method void setScoreLost(integer $ScoreLost) 设置总扣分分数。
 * @method array getScoreDetails() 获取扣分详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScoreDetails(array $ScoreDetails) 设置扣分详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HealthStatus extends AbstractModel
{
    /**
     * @var integer 健康分数，满分100。
     */
    public $HealthScore;

    /**
     * @var string 健康等级，取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK"- 危险；"HIGH_RISK" - 高危。
     */
    public $HealthLevel;

    /**
     * @var integer 总扣分分数。
     */
    public $ScoreLost;

    /**
     * @var array 扣分详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScoreDetails;

    /**
     * @param integer $HealthScore 健康分数，满分100。
     * @param string $HealthLevel 健康等级，取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK"- 危险；"HIGH_RISK" - 高危。
     * @param integer $ScoreLost 总扣分分数。
     * @param array $ScoreDetails 扣分详情。
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
        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("HealthLevel",$param) and $param["HealthLevel"] !== null) {
            $this->HealthLevel = $param["HealthLevel"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("ScoreDetails",$param) and $param["ScoreDetails"] !== null) {
            $this->ScoreDetails = [];
            foreach ($param["ScoreDetails"] as $key => $value){
                $obj = new ScoreDetail();
                $obj->deserialize($value);
                array_push($this->ScoreDetails, $obj);
            }
        }
    }
}

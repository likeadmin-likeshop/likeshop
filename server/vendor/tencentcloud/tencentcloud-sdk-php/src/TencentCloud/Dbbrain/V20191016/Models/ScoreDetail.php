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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扣分详情。
 *
 * @method string getIssueType() 获取扣分项分类，取值包括：可用性、可维护性、性能及可靠性。
 * @method void setIssueType(string $IssueType) 设置扣分项分类，取值包括：可用性、可维护性、性能及可靠性。
 * @method integer getScoreLost() 获取扣分总分。
 * @method void setScoreLost(integer $ScoreLost) 设置扣分总分。
 * @method integer getScoreLostMax() 获取扣分总分上限。
 * @method void setScoreLostMax(integer $ScoreLostMax) 设置扣分总分上限。
 * @method array getItems() 获取扣分项列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置扣分项列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScoreDetail extends AbstractModel
{
    /**
     * @var string 扣分项分类，取值包括：可用性、可维护性、性能及可靠性。
     */
    public $IssueType;

    /**
     * @var integer 扣分总分。
     */
    public $ScoreLost;

    /**
     * @var integer 扣分总分上限。
     */
    public $ScoreLostMax;

    /**
     * @var array 扣分项列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param string $IssueType 扣分项分类，取值包括：可用性、可维护性、性能及可靠性。
     * @param integer $ScoreLost 扣分总分。
     * @param integer $ScoreLostMax 扣分总分上限。
     * @param array $Items 扣分项列表。
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
        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("ScoreLostMax",$param) and $param["ScoreLostMax"] !== null) {
            $this->ScoreLostMax = $param["ScoreLostMax"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ScoreItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}

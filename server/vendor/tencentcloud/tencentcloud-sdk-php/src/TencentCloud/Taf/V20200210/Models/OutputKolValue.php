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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckKol
 *
 * @method string getId() 获取KOL账号ID[比如微信公众号ID]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置KOL账号ID[比如微信公众号ID]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCheck() 获取是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCheck(integer $IsCheck) 设置是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFraudPScore() 获取作弊的可能性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFraudPScore(integer $FraudPScore) 设置作弊的可能性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEvilPScore() 获取作弊的严重性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilPScore(integer $EvilPScore) 设置作弊的严重性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputKolValue extends AbstractModel
{
    /**
     * @var string KOL账号ID[比如微信公众号ID]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCheck;

    /**
     * @var integer 作弊的可能性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FraudPScore;

    /**
     * @var integer 作弊的严重性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilPScore;

    /**
     * @param string $Id KOL账号ID[比如微信公众号ID]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCheck 是否查得[0：未查得；1：查得]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FraudPScore 作弊的可能性[0～100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EvilPScore 作弊的严重性[0～100]
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsCheck",$param) and $param["IsCheck"] !== null) {
            $this->IsCheck = $param["IsCheck"];
        }

        if (array_key_exists("FraudPScore",$param) and $param["FraudPScore"] !== null) {
            $this->FraudPScore = $param["FraudPScore"];
        }

        if (array_key_exists("EvilPScore",$param) and $param["EvilPScore"] !== null) {
            $this->EvilPScore = $param["EvilPScore"];
        }
    }
}

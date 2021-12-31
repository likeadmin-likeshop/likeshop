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
 * 流量反欺诈-验准返回的查询分值
 *
 * @method integer getModelId() 获取模型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(integer $ModelId) 设置模型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsFound() 获取是否正常返回结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFound(integer $IsFound) 设置是否正常返回结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取返回分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置返回分值
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputRecognizeTargetAudienceValue extends AbstractModel
{
    /**
     * @var integer 模型ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var integer 是否正常返回结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFound;

    /**
     * @var float 返回分值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param integer $ModelId 模型ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsFound 是否正常返回结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Score 返回分值
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("IsFound",$param) and $param["IsFound"] !== null) {
            $this->IsFound = $param["IsFound"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}

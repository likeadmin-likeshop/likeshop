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
 * 业务出参
 *
 * @method string getLable() 获取返回标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLable(string $Lable) 设置返回标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取返回分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置返回分值
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputRecognizeEffectiveFlowValue extends AbstractModel
{
    /**
     * @var string 返回标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lable;

    /**
     * @var float 返回分值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param string $Lable 返回标签
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
        if (array_key_exists("Lable",$param) and $param["Lable"] !== null) {
            $this->Lable = $param["Lable"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}

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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 算法配置
 *
 * @method string getTrainingImageName() 获取镜像名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingImageName(string $TrainingImageName) 设置镜像名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingInputMode() 获取输入模式File|Pipe
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingInputMode(string $TrainingInputMode) 设置输入模式File|Pipe
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlgorithmName() 获取算法名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithmName(string $AlgorithmName) 设置算法名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlgorithmSpecification extends AbstractModel
{
    /**
     * @var string 镜像名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingImageName;

    /**
     * @var string 输入模式File|Pipe
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingInputMode;

    /**
     * @var string 算法名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgorithmName;

    /**
     * @param string $TrainingImageName 镜像名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingInputMode 输入模式File|Pipe
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlgorithmName 算法名字
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
        if (array_key_exists("TrainingImageName",$param) and $param["TrainingImageName"] !== null) {
            $this->TrainingImageName = $param["TrainingImageName"];
        }

        if (array_key_exists("TrainingInputMode",$param) and $param["TrainingInputMode"] !== null) {
            $this->TrainingInputMode = $param["TrainingInputMode"];
        }

        if (array_key_exists("AlgorithmName",$param) and $param["AlgorithmName"] !== null) {
            $this->AlgorithmName = $param["AlgorithmName"];
        }
    }
}

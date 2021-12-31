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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核身最佳帧信息
 *
 * @method string getBestFrame() 获取活体比对最佳帧。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrame(string $BestFrame) 设置活体比对最佳帧。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBestFrames() 获取自截帧。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrames(array $BestFrames) 设置自截帧。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectInfoBestFrame extends AbstractModel
{
    /**
     * @var string 活体比对最佳帧。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrame;

    /**
     * @var array 自截帧。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrames;

    /**
     * @param string $BestFrame 活体比对最佳帧。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BestFrames 自截帧。
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
        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = $param["BestFrame"];
        }

        if (array_key_exists("BestFrames",$param) and $param["BestFrames"] !== null) {
            $this->BestFrames = $param["BestFrames"];
        }
    }
}

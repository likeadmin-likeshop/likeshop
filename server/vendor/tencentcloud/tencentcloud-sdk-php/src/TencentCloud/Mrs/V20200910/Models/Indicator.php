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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验报告
 *
 * @method array getIndicators() 获取检验指标项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicators(array $Indicators) 设置检验指标项
注意：此字段可能返回 null，表示取不到有效值。
 */
class Indicator extends AbstractModel
{
    /**
     * @var array 检验指标项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indicators;

    /**
     * @param array $Indicators 检验指标项
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
        if (array_key_exists("Indicators",$param) and $param["Indicators"] !== null) {
            $this->Indicators = [];
            foreach ($param["Indicators"] as $key => $value){
                $obj = new IndicatorItem();
                $obj->deserialize($value);
                array_push($this->Indicators, $obj);
            }
        }
    }
}

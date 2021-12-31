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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual.StatType
 *
 * @method string getP5() 获取数据聚合方式，周期5秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP5(string $P5) 设置数据聚合方式，周期5秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP10() 获取数据聚合方式，周期10秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP10(string $P10) 设置数据聚合方式，周期10秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP60() 获取数据聚合方式，周期1分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP60(string $P60) 设置数据聚合方式，周期1分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP300() 获取数据聚合方式，周期5分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP300(string $P300) 设置数据聚合方式，周期5分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP600() 获取数据聚合方式，周期10分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP600(string $P600) 设置数据聚合方式，周期10分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP1800() 获取数据聚合方式，周期30分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP1800(string $P1800) 设置数据聚合方式，周期30分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP3600() 获取数据聚合方式，周期1小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP3600(string $P3600) 设置数据聚合方式，周期1小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getP86400() 获取数据聚合方式，周期1天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP86400(string $P86400) 设置数据聚合方式，周期1天
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyConditionListConfigManualStatType extends AbstractModel
{
    /**
     * @var string 数据聚合方式，周期5秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P5;

    /**
     * @var string 数据聚合方式，周期10秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P10;

    /**
     * @var string 数据聚合方式，周期1分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P60;

    /**
     * @var string 数据聚合方式，周期5分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P300;

    /**
     * @var string 数据聚合方式，周期10分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P600;

    /**
     * @var string 数据聚合方式，周期30分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P1800;

    /**
     * @var string 数据聚合方式，周期1小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P3600;

    /**
     * @var string 数据聚合方式，周期1天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P86400;

    /**
     * @param string $P5 数据聚合方式，周期5秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P10 数据聚合方式，周期10秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P60 数据聚合方式，周期1分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P300 数据聚合方式，周期5分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P600 数据聚合方式，周期10分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P1800 数据聚合方式，周期30分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P3600 数据聚合方式，周期1小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $P86400 数据聚合方式，周期1天
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
        if (array_key_exists("P5",$param) and $param["P5"] !== null) {
            $this->P5 = $param["P5"];
        }

        if (array_key_exists("P10",$param) and $param["P10"] !== null) {
            $this->P10 = $param["P10"];
        }

        if (array_key_exists("P60",$param) and $param["P60"] !== null) {
            $this->P60 = $param["P60"];
        }

        if (array_key_exists("P300",$param) and $param["P300"] !== null) {
            $this->P300 = $param["P300"];
        }

        if (array_key_exists("P600",$param) and $param["P600"] !== null) {
            $this->P600 = $param["P600"];
        }

        if (array_key_exists("P1800",$param) and $param["P1800"] !== null) {
            $this->P1800 = $param["P1800"];
        }

        if (array_key_exists("P3600",$param) and $param["P3600"] !== null) {
            $this->P3600 = $param["P3600"];
        }

        if (array_key_exists("P86400",$param) and $param["P86400"] !== null) {
            $this->P86400 = $param["P86400"];
        }
    }
}

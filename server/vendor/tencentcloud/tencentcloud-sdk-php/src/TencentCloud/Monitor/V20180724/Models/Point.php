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
 * 监控数据点
 *
 * @method integer getTimestamp() 获取该监控数据点生成的时间点
 * @method void setTimestamp(integer $Timestamp) 设置该监控数据点生成的时间点
 * @method float getValue() 获取监控数据点的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置监控数据点的值
注意：此字段可能返回 null，表示取不到有效值。
 */
class Point extends AbstractModel
{
    /**
     * @var integer 该监控数据点生成的时间点
     */
    public $Timestamp;

    /**
     * @var float 监控数据点的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Timestamp 该监控数据点生成的时间点
     * @param float $Value 监控数据点的值
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

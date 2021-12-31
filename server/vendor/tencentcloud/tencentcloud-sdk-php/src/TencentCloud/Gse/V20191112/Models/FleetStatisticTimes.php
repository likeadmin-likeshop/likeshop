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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 舰队统计总时长
 *
 * @method string getBeginTime() 获取统计开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置统计开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalUsedTimeSeconds() 获取统计总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedTimeSeconds(string $TotalUsedTimeSeconds) 设置统计总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class FleetStatisticTimes extends AbstractModel
{
    /**
     * @var string 统计开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 统计总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedTimeSeconds;

    /**
     * @param string $BeginTime 统计开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalUsedTimeSeconds 统计总时长，单位秒
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("TotalUsedTimeSeconds",$param) and $param["TotalUsedTimeSeconds"] !== null) {
            $this->TotalUsedTimeSeconds = $param["TotalUsedTimeSeconds"];
        }
    }
}

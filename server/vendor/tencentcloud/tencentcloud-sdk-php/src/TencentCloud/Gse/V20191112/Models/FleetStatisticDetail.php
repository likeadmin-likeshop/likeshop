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
 * 舰队统计详情
 *
 * @method string getFleetId() 获取舰队ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置舰队ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIP() 获取实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIP(string $InstanceIP) 设置实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalUsedTimeSeconds() 获取总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedTimeSeconds(string $TotalUsedTimeSeconds) 设置总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalUsedFlowMegaBytes() 获取总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedFlowMegaBytes(float $TotalUsedFlowMegaBytes) 设置总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 */
class FleetStatisticDetail extends AbstractModel
{
    /**
     * @var string 舰队ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIP;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedTimeSeconds;

    /**
     * @var float 总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedFlowMegaBytes;

    /**
     * @param string $FleetId 舰队ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIP 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalUsedTimeSeconds 总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalUsedFlowMegaBytes 总流量，单位MB
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIP",$param) and $param["InstanceIP"] !== null) {
            $this->InstanceIP = $param["InstanceIP"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TotalUsedTimeSeconds",$param) and $param["TotalUsedTimeSeconds"] !== null) {
            $this->TotalUsedTimeSeconds = $param["TotalUsedTimeSeconds"];
        }

        if (array_key_exists("TotalUsedFlowMegaBytes",$param) and $param["TotalUsedFlowMegaBytes"] !== null) {
            $this->TotalUsedFlowMegaBytes = $param["TotalUsedFlowMegaBytes"];
        }
    }
}

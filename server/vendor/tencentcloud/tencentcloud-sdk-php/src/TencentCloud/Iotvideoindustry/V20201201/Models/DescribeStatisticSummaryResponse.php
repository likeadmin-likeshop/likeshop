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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatisticSummary返回参数结构体
 *
 * @method integer getRecordingDevice() 获取录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordingDevice(integer $RecordingDevice) 设置录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNonRecordingDevice() 获取非录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonRecordingDevice(integer $NonRecordingDevice) 设置非录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWatchFlux() 获取观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWatchFlux(float $WatchFlux) 设置观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStorageUsage() 获取累计有效存储容量总数。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageUsage(float $StorageUsage) 设置累计有效存储容量总数。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStatisticSummaryResponse extends AbstractModel
{
    /**
     * @var integer 录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordingDevice;

    /**
     * @var integer 非录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonRecordingDevice;

    /**
     * @var float 观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WatchFlux;

    /**
     * @var float 累计有效存储容量总数。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageUsage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RecordingDevice 录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NonRecordingDevice 非录制设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $WatchFlux 观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $StorageUsage 累计有效存储容量总数。单位：GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RecordingDevice",$param) and $param["RecordingDevice"] !== null) {
            $this->RecordingDevice = $param["RecordingDevice"];
        }

        if (array_key_exists("NonRecordingDevice",$param) and $param["NonRecordingDevice"] !== null) {
            $this->NonRecordingDevice = $param["NonRecordingDevice"];
        }

        if (array_key_exists("WatchFlux",$param) and $param["WatchFlux"] !== null) {
            $this->WatchFlux = $param["WatchFlux"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

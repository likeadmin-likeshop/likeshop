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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 峰值网络数据
 *
 * @method string getRecordTime() 获取记录时间。
 * @method void setRecordTime(string $RecordTime) 设置记录时间。
 * @method string getPeakInNetwork() 获取入带宽数据。
 * @method void setPeakInNetwork(string $PeakInNetwork) 设置入带宽数据。
 * @method string getPeakOutNetwork() 获取出带宽数据。
 * @method void setPeakOutNetwork(string $PeakOutNetwork) 设置出带宽数据。
 * @method string getChargeNetwork() 获取计费带宽。单位bps
 * @method void setChargeNetwork(string $ChargeNetwork) 设置计费带宽。单位bps
 */
class PeakNetwork extends AbstractModel
{
    /**
     * @var string 记录时间。
     */
    public $RecordTime;

    /**
     * @var string 入带宽数据。
     */
    public $PeakInNetwork;

    /**
     * @var string 出带宽数据。
     */
    public $PeakOutNetwork;

    /**
     * @var string 计费带宽。单位bps
     */
    public $ChargeNetwork;

    /**
     * @param string $RecordTime 记录时间。
     * @param string $PeakInNetwork 入带宽数据。
     * @param string $PeakOutNetwork 出带宽数据。
     * @param string $ChargeNetwork 计费带宽。单位bps
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
        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }

        if (array_key_exists("PeakInNetwork",$param) and $param["PeakInNetwork"] !== null) {
            $this->PeakInNetwork = $param["PeakInNetwork"];
        }

        if (array_key_exists("PeakOutNetwork",$param) and $param["PeakOutNetwork"] !== null) {
            $this->PeakOutNetwork = $param["PeakOutNetwork"];
        }

        if (array_key_exists("ChargeNetwork",$param) and $param["ChargeNetwork"] !== null) {
            $this->ChargeNetwork = $param["ChargeNetwork"];
        }
    }
}

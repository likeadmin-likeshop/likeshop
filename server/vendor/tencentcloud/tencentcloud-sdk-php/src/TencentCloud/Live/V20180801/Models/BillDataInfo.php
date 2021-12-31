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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带宽和流量信息。
 *
 * @method string getTime() 获取时间点，格式: yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置时间点，格式: yyyy-mm-dd HH:MM:SS。
 * @method float getBandwidth() 获取带宽，单位是 Mbps。
 * @method void setBandwidth(float $Bandwidth) 设置带宽，单位是 Mbps。
 * @method float getFlux() 获取流量，单位是 MB。
 * @method void setFlux(float $Flux) 设置流量，单位是 MB。
 * @method string getPeakTime() 获取峰值时间点，格式: yyyy-mm-dd HH:MM:SS，原始数据为5分钟粒度，如果查询小时和天粒度数据，则返回对应粒度内的带宽峰值时间点。
 * @method void setPeakTime(string $PeakTime) 设置峰值时间点，格式: yyyy-mm-dd HH:MM:SS，原始数据为5分钟粒度，如果查询小时和天粒度数据，则返回对应粒度内的带宽峰值时间点。
 */
class BillDataInfo extends AbstractModel
{
    /**
     * @var string 时间点，格式: yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @var float 带宽，单位是 Mbps。
     */
    public $Bandwidth;

    /**
     * @var float 流量，单位是 MB。
     */
    public $Flux;

    /**
     * @var string 峰值时间点，格式: yyyy-mm-dd HH:MM:SS，原始数据为5分钟粒度，如果查询小时和天粒度数据，则返回对应粒度内的带宽峰值时间点。
     */
    public $PeakTime;

    /**
     * @param string $Time 时间点，格式: yyyy-mm-dd HH:MM:SS。
     * @param float $Bandwidth 带宽，单位是 Mbps。
     * @param float $Flux 流量，单位是 MB。
     * @param string $PeakTime 峰值时间点，格式: yyyy-mm-dd HH:MM:SS，原始数据为5分钟粒度，如果查询小时和天粒度数据，则返回对应粒度内的带宽峰值时间点。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("PeakTime",$param) and $param["PeakTime"] !== null) {
            $this->PeakTime = $param["PeakTime"];
        }
    }
}

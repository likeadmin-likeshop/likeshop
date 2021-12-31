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
namespace TencentCloud\Bizlive\V20190313\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流播放信息
 *
 * @method float getBandwidth() 获取带宽（单位Mbps）。
 * @method void setBandwidth(float $Bandwidth) 设置带宽（单位Mbps）。
 * @method float getFlux() 获取流量 （单位MB）。
 * @method void setFlux(float $Flux) 设置流量 （单位MB）。
 * @method integer getOnline() 获取在线人数。
 * @method void setOnline(integer $Online) 设置在线人数。
 * @method integer getRequest() 获取请求数。
 * @method void setRequest(integer $Request) 设置请求数。
 * @method string getTime() 获取数据时间点，格式：yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置数据时间点，格式：yyyy-mm-dd HH:MM:SS。
 */
class DayStreamPlayInfo extends AbstractModel
{
    /**
     * @var float 带宽（单位Mbps）。
     */
    public $Bandwidth;

    /**
     * @var float 流量 （单位MB）。
     */
    public $Flux;

    /**
     * @var integer 在线人数。
     */
    public $Online;

    /**
     * @var integer 请求数。
     */
    public $Request;

    /**
     * @var string 数据时间点，格式：yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @param float $Bandwidth 带宽（单位Mbps）。
     * @param float $Flux 流量 （单位MB）。
     * @param integer $Online 在线人数。
     * @param integer $Request 请求数。
     * @param string $Time 数据时间点，格式：yyyy-mm-dd HH:MM:SS。
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

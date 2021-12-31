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
 * 带宽信息
 *
 * @method string getTime() 获取返回格式：
yyyy-mm-dd HH:MM:SS
根据粒度会有不同程度的缩减。
 * @method void setTime(string $Time) 设置返回格式：
yyyy-mm-dd HH:MM:SS
根据粒度会有不同程度的缩减。
 * @method float getBandwidth() 获取带宽。
 * @method void setBandwidth(float $Bandwidth) 设置带宽。
 */
class BandwidthInfo extends AbstractModel
{
    /**
     * @var string 返回格式：
yyyy-mm-dd HH:MM:SS
根据粒度会有不同程度的缩减。
     */
    public $Time;

    /**
     * @var float 带宽。
     */
    public $Bandwidth;

    /**
     * @param string $Time 返回格式：
yyyy-mm-dd HH:MM:SS
根据粒度会有不同程度的缩减。
     * @param float $Bandwidth 带宽。
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
    }
}

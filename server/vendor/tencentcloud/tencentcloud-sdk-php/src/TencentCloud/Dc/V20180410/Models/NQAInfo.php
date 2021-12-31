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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * nqa配置信息
 *
 * @method integer getProbeFailedTimes() 获取健康检查次数
 * @method void setProbeFailedTimes(integer $ProbeFailedTimes) 设置健康检查次数
 * @method integer getInterval() 获取健康检查间隔
 * @method void setInterval(integer $Interval) 设置健康检查间隔
 * @method string getDestinationIp() 获取健康检查地址
 * @method void setDestinationIp(string $DestinationIp) 设置健康检查地址
 */
class NQAInfo extends AbstractModel
{
    /**
     * @var integer 健康检查次数
     */
    public $ProbeFailedTimes;

    /**
     * @var integer 健康检查间隔
     */
    public $Interval;

    /**
     * @var string 健康检查地址
     */
    public $DestinationIp;

    /**
     * @param integer $ProbeFailedTimes 健康检查次数
     * @param integer $Interval 健康检查间隔
     * @param string $DestinationIp 健康检查地址
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
        if (array_key_exists("ProbeFailedTimes",$param) and $param["ProbeFailedTimes"] !== null) {
            $this->ProbeFailedTimes = $param["ProbeFailedTimes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("DestinationIp",$param) and $param["DestinationIp"] !== null) {
            $this->DestinationIp = $param["DestinationIp"];
        }
    }
}

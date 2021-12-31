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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通道组加速地域列表，包括加速地域，以及该加速地域对应的带宽和并发配置。
 *
 * @method string getAccessRegion() 获取加速地域。
 * @method void setAccessRegion(string $AccessRegion) 设置加速地域。
 * @method integer getBandwidth() 获取通道带宽上限，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置通道带宽上限，单位：Mbps。
 * @method integer getConcurrent() 获取通道并发量上限，表示同时在线的连接数，单位：万。
 * @method void setConcurrent(integer $Concurrent) 设置通道并发量上限，表示同时在线的连接数，单位：万。
 */
class AccessConfiguration extends AbstractModel
{
    /**
     * @var string 加速地域。
     */
    public $AccessRegion;

    /**
     * @var integer 通道带宽上限，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 通道并发量上限，表示同时在线的连接数，单位：万。
     */
    public $Concurrent;

    /**
     * @param string $AccessRegion 加速地域。
     * @param integer $Bandwidth 通道带宽上限，单位：Mbps。
     * @param integer $Concurrent 通道并发量上限，表示同时在线的连接数，单位：万。
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
        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }
    }
}

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
 * PutMonitorData请求参数结构体
 *
 * @method array getMetrics() 获取一组指标和数据
 * @method void setMetrics(array $Metrics) 设置一组指标和数据
 * @method string getAnnounceIp() 获取上报时自行指定的 IP
 * @method void setAnnounceIp(string $AnnounceIp) 设置上报时自行指定的 IP
 * @method integer getAnnounceTimestamp() 获取上报时自行指定的时间戳
 * @method void setAnnounceTimestamp(integer $AnnounceTimestamp) 设置上报时自行指定的时间戳
 * @method string getAnnounceInstance() 获取上报时自行指定的 IP 或 产品实例ID
 * @method void setAnnounceInstance(string $AnnounceInstance) 设置上报时自行指定的 IP 或 产品实例ID
 */
class PutMonitorDataRequest extends AbstractModel
{
    /**
     * @var array 一组指标和数据
     */
    public $Metrics;

    /**
     * @var string 上报时自行指定的 IP
     */
    public $AnnounceIp;

    /**
     * @var integer 上报时自行指定的时间戳
     */
    public $AnnounceTimestamp;

    /**
     * @var string 上报时自行指定的 IP 或 产品实例ID
     */
    public $AnnounceInstance;

    /**
     * @param array $Metrics 一组指标和数据
     * @param string $AnnounceIp 上报时自行指定的 IP
     * @param integer $AnnounceTimestamp 上报时自行指定的时间戳
     * @param string $AnnounceInstance 上报时自行指定的 IP 或 产品实例ID
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
        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricDatum();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("AnnounceIp",$param) and $param["AnnounceIp"] !== null) {
            $this->AnnounceIp = $param["AnnounceIp"];
        }

        if (array_key_exists("AnnounceTimestamp",$param) and $param["AnnounceTimestamp"] !== null) {
            $this->AnnounceTimestamp = $param["AnnounceTimestamp"];
        }

        if (array_key_exists("AnnounceInstance",$param) and $param["AnnounceInstance"] !== null) {
            $this->AnnounceInstance = $param["AnnounceInstance"];
        }
    }
}

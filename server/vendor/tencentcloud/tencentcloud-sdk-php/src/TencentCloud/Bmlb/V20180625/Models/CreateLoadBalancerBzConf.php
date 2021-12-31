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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于创建负载均衡的个性化配置。
 *
 * @method string getBzPayMode() 获取按月/按小时计费。
 * @method void setBzPayMode(string $BzPayMode) 设置按月/按小时计费。
 * @method string getBzL4Metrics() 获取四层可选按带宽，连接数衡量。
 * @method void setBzL4Metrics(string $BzL4Metrics) 设置四层可选按带宽，连接数衡量。
 * @method string getBzL7Metrics() 获取七层可选按qps衡量。
 * @method void setBzL7Metrics(string $BzL7Metrics) 设置七层可选按qps衡量。
 */
class CreateLoadBalancerBzConf extends AbstractModel
{
    /**
     * @var string 按月/按小时计费。
     */
    public $BzPayMode;

    /**
     * @var string 四层可选按带宽，连接数衡量。
     */
    public $BzL4Metrics;

    /**
     * @var string 七层可选按qps衡量。
     */
    public $BzL7Metrics;

    /**
     * @param string $BzPayMode 按月/按小时计费。
     * @param string $BzL4Metrics 四层可选按带宽，连接数衡量。
     * @param string $BzL7Metrics 七层可选按qps衡量。
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
        if (array_key_exists("BzPayMode",$param) and $param["BzPayMode"] !== null) {
            $this->BzPayMode = $param["BzPayMode"];
        }

        if (array_key_exists("BzL4Metrics",$param) and $param["BzL4Metrics"] !== null) {
            $this->BzL4Metrics = $param["BzL4Metrics"];
        }

        if (array_key_exists("BzL7Metrics",$param) and $param["BzL7Metrics"] !== null) {
            $this->BzL7Metrics = $param["BzL7Metrics"];
        }
    }
}

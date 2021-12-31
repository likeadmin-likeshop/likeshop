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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 *  CPU负载
 *
 * @method array getRate() 获取实例CPU平均使用率
 * @method void setRate(array $Rate) 设置实例CPU平均使用率
 * @method array getLoad() 获取实例CPU监控数据
 * @method void setLoad(array $Load) 设置实例CPU监控数据
 */
class DeviceCpuInfo extends AbstractModel
{
    /**
     * @var array 实例CPU平均使用率
     */
    public $Rate;

    /**
     * @var array 实例CPU监控数据
     */
    public $Load;

    /**
     * @param array $Rate 实例CPU平均使用率
     * @param array $Load 实例CPU监控数据
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = [];
            foreach ($param["Rate"] as $key => $value){
                $obj = new DeviceCpuRateInfo();
                $obj->deserialize($value);
                array_push($this->Rate, $obj);
            }
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = $param["Load"];
        }
    }
}

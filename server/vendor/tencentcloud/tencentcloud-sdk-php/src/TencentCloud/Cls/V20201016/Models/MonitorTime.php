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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警策略中监控任务的执行时间点
 *
 * @method string getType() 获取可选值：
<br><li> Period - 周期执行
<br><li> Fixed - 定期执行
 * @method void setType(string $Type) 设置可选值：
<br><li> Period - 周期执行
<br><li> Fixed - 定期执行
 * @method integer getTime() 获取执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
 * @method void setTime(integer $Time) 设置执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
 */
class MonitorTime extends AbstractModel
{
    /**
     * @var string 可选值：
<br><li> Period - 周期执行
<br><li> Fixed - 定期执行
     */
    public $Type;

    /**
     * @var integer 执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
     */
    public $Time;

    /**
     * @param string $Type 可选值：
<br><li> Period - 周期执行
<br><li> Fixed - 定期执行
     * @param integer $Time 执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

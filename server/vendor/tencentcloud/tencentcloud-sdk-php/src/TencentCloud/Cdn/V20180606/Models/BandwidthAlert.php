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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带宽封顶配置，默认为关闭状态
 *
 * @method string getSwitch() 获取带宽封顶配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置带宽封顶配置开关
on：开启
off：关闭
 * @method integer getBpsThreshold() 获取带宽封顶阈值，单位为bps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBpsThreshold(integer $BpsThreshold) 设置带宽封顶阈值，单位为bps
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCounterMeasure() 获取达到阈值后的操作
RESOLVE_DNS_TO_ORIGIN：直接回源，仅自有源站域名支持
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounterMeasure(string $CounterMeasure) 设置达到阈值后的操作
RESOLVE_DNS_TO_ORIGIN：直接回源，仅自有源站域名支持
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTriggerTime() 获取上次触发带宽封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerTime(string $LastTriggerTime) 设置上次触发带宽封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BandwidthAlert extends AbstractModel
{
    /**
     * @var string 带宽封顶配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var integer 带宽封顶阈值，单位为bps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BpsThreshold;

    /**
     * @var string 达到阈值后的操作
RESOLVE_DNS_TO_ORIGIN：直接回源，仅自有源站域名支持
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CounterMeasure;

    /**
     * @var string 上次触发带宽封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerTime;

    /**
     * @param string $Switch 带宽封顶配置开关
on：开启
off：关闭
     * @param integer $BpsThreshold 带宽封顶阈值，单位为bps
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CounterMeasure 达到阈值后的操作
RESOLVE_DNS_TO_ORIGIN：直接回源，仅自有源站域名支持
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTriggerTime 上次触发带宽封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }
    }
}

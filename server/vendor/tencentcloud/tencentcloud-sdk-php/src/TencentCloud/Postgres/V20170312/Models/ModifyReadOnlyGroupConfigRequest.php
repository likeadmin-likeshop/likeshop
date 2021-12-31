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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReadOnlyGroupConfig请求参数结构体
 *
 * @method string getReadOnlyGroupId() 获取只读组ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID
 * @method string getReadOnlyGroupName() 获取只读组名称
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置只读组名称
 * @method integer getReplayLagEliminate() 获取延迟时间配置开关：0关、1开
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) 设置延迟时间配置开关：0关、1开
 * @method integer getReplayLatencyEliminate() 获取延迟日志大小配置开关：0关、1开
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) 设置延迟日志大小配置开关：0关、1开
 * @method integer getMaxReplayLatency() 获取延迟日志大小阈值，单位MB
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) 设置延迟日志大小阈值，单位MB
 * @method integer getMaxReplayLag() 获取延迟时间大小阈值，单位ms
 * @method void setMaxReplayLag(integer $MaxReplayLag) 设置延迟时间大小阈值，单位ms
 * @method integer getRebalance() 获取自动负载均衡开关：0关、1开
 * @method void setRebalance(integer $Rebalance) 设置自动负载均衡开关：0关、1开
 * @method integer getMinDelayEliminateReserve() 获取延迟剔除最小保留实例数
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) 设置延迟剔除最小保留实例数
 */
class ModifyReadOnlyGroupConfigRequest extends AbstractModel
{
    /**
     * @var string 只读组ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 只读组名称
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer 延迟时间配置开关：0关、1开
     */
    public $ReplayLagEliminate;

    /**
     * @var integer 延迟日志大小配置开关：0关、1开
     */
    public $ReplayLatencyEliminate;

    /**
     * @var integer 延迟日志大小阈值，单位MB
     */
    public $MaxReplayLatency;

    /**
     * @var integer 延迟时间大小阈值，单位ms
     */
    public $MaxReplayLag;

    /**
     * @var integer 自动负载均衡开关：0关、1开
     */
    public $Rebalance;

    /**
     * @var integer 延迟剔除最小保留实例数
     */
    public $MinDelayEliminateReserve;

    /**
     * @param string $ReadOnlyGroupId 只读组ID
     * @param string $ReadOnlyGroupName 只读组名称
     * @param integer $ReplayLagEliminate 延迟时间配置开关：0关、1开
     * @param integer $ReplayLatencyEliminate 延迟日志大小配置开关：0关、1开
     * @param integer $MaxReplayLatency 延迟日志大小阈值，单位MB
     * @param integer $MaxReplayLag 延迟时间大小阈值，单位ms
     * @param integer $Rebalance 自动负载均衡开关：0关、1开
     * @param integer $MinDelayEliminateReserve 延迟剔除最小保留实例数
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("Rebalance",$param) and $param["Rebalance"] !== null) {
            $this->Rebalance = $param["Rebalance"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }
    }
}

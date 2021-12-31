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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警触发策略。
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method string getAutoScalingPolicyId() 获取告警触发策略ID。
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) 设置告警触发策略ID。
 * @method string getScalingPolicyName() 获取告警触发策略名称。
 * @method void setScalingPolicyName(string $ScalingPolicyName) 设置告警触发策略名称。
 * @method string getAdjustmentType() 获取告警触发后，期望实例数修改方式。取值 ：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
 * @method void setAdjustmentType(string $AdjustmentType) 设置告警触发后，期望实例数修改方式。取值 ：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
 * @method integer getAdjustmentValue() 获取告警触发后，期望实例数的调整值。
 * @method void setAdjustmentValue(integer $AdjustmentValue) 设置告警触发后，期望实例数的调整值。
 * @method integer getCooldown() 获取冷却时间。
 * @method void setCooldown(integer $Cooldown) 设置冷却时间。
 * @method MetricAlarm getMetricAlarm() 获取告警监控指标。
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) 设置告警监控指标。
 * @method array getNotificationUserGroupIds() 获取通知组ID，即为用户组ID集合。
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) 设置通知组ID，即为用户组ID集合。
 */
class ScalingPolicy extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 告警触发策略ID。
     */
    public $AutoScalingPolicyId;

    /**
     * @var string 告警触发策略名称。
     */
    public $ScalingPolicyName;

    /**
     * @var string 告警触发后，期望实例数修改方式。取值 ：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
     */
    public $AdjustmentType;

    /**
     * @var integer 告警触发后，期望实例数的调整值。
     */
    public $AdjustmentValue;

    /**
     * @var integer 冷却时间。
     */
    public $Cooldown;

    /**
     * @var MetricAlarm 告警监控指标。
     */
    public $MetricAlarm;

    /**
     * @var array 通知组ID，即为用户组ID集合。
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param string $AutoScalingPolicyId 告警触发策略ID。
     * @param string $ScalingPolicyName 告警触发策略名称。
     * @param string $AdjustmentType 告警触发后，期望实例数修改方式。取值 ：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
     * @param integer $AdjustmentValue 告警触发后，期望实例数的调整值。
     * @param integer $Cooldown 冷却时间。
     * @param MetricAlarm $MetricAlarm 告警监控指标。
     * @param array $NotificationUserGroupIds 通知组ID，即为用户组ID集合。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingPolicyId",$param) and $param["AutoScalingPolicyId"] !== null) {
            $this->AutoScalingPolicyId = $param["AutoScalingPolicyId"];
        }

        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            $this->ScalingPolicyName = $param["ScalingPolicyName"];
        }

        if (array_key_exists("AdjustmentType",$param) and $param["AdjustmentType"] !== null) {
            $this->AdjustmentType = $param["AdjustmentType"];
        }

        if (array_key_exists("AdjustmentValue",$param) and $param["AdjustmentValue"] !== null) {
            $this->AdjustmentValue = $param["AdjustmentValue"];
        }

        if (array_key_exists("Cooldown",$param) and $param["Cooldown"] !== null) {
            $this->Cooldown = $param["Cooldown"];
        }

        if (array_key_exists("MetricAlarm",$param) and $param["MetricAlarm"] !== null) {
            $this->MetricAlarm = new MetricAlarm();
            $this->MetricAlarm->deserialize($param["MetricAlarm"]);
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }
    }
}

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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * amp告警渠道配置
 *
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method string getRepeatInterval() 获取收敛时间
 * @method void setRepeatInterval(string $RepeatInterval) 设置收敛时间
 * @method string getTimeRangeStart() 获取生效起始时间
 * @method void setTimeRangeStart(string $TimeRangeStart) 设置生效起始时间
 * @method string getTimeRangeEnd() 获取生效结束时间
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置生效结束时间
 * @method array getNotifyWay() 获取告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。
分别代表：短信、邮件、电话、微信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。
分别代表：短信、邮件、电话、微信
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverGroups() 获取告警接收组（用户组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverGroups(array $ReceiverGroups) 设置告警接收组（用户组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPhoneNotifyOrder() 获取电话告警顺序。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNotifyOrder(array $PhoneNotifyOrder) 设置电话告警顺序。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleTimes() 获取电话告警次数。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) 设置电话告警次数。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneInnerInterval() 获取电话告警轮内间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) 设置电话告警轮内间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleInterval() 获取电话告警轮外间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) 设置电话告警轮外间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPhoneArriveNotice() 获取电话告警触达通知
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneArriveNotice(boolean $PhoneArriveNotice) 设置电话告警触达通知
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取通道类型，默认为amp，支持以下
amp
webhook
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置通道类型，默认为amp，支持以下
amp
webhook
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebHook() 获取如果Type为webhook, 则该字段为必填项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebHook(string $WebHook) 设置如果Type为webhook, 则该字段为必填项
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusNotification extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var string 收敛时间
     */
    public $RepeatInterval;

    /**
     * @var string 生效起始时间
     */
    public $TimeRangeStart;

    /**
     * @var string 生效结束时间
     */
    public $TimeRangeEnd;

    /**
     * @var array 告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。
分别代表：短信、邮件、电话、微信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var array 告警接收组（用户组）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverGroups;

    /**
     * @var array 电话告警顺序。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNotifyOrder;

    /**
     * @var integer 电话告警次数。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleTimes;

    /**
     * @var integer 电话告警轮内间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneInnerInterval;

    /**
     * @var integer 电话告警轮外间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleInterval;

    /**
     * @var boolean 电话告警触达通知
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneArriveNotice;

    /**
     * @var string 通道类型，默认为amp，支持以下
amp
webhook
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 如果Type为webhook, 则该字段为必填项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebHook;

    /**
     * @param boolean $Enabled 是否启用
     * @param string $RepeatInterval 收敛时间
     * @param string $TimeRangeStart 生效起始时间
     * @param string $TimeRangeEnd 生效结束时间
     * @param array $NotifyWay 告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。
分别代表：短信、邮件、电话、微信
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverGroups 告警接收组（用户组）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PhoneNotifyOrder 电话告警顺序。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleTimes 电话告警次数。
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneInnerInterval 电话告警轮内间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleInterval 电话告警轮外间隔。单位：秒
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PhoneArriveNotice 电话告警触达通知
注：NotifyWay选择CALL，采用该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 通道类型，默认为amp，支持以下
amp
webhook
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebHook 如果Type为webhook, 则该字段为必填项
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PhoneNotifyOrder",$param) and $param["PhoneNotifyOrder"] !== null) {
            $this->PhoneNotifyOrder = $param["PhoneNotifyOrder"];
        }

        if (array_key_exists("PhoneCircleTimes",$param) and $param["PhoneCircleTimes"] !== null) {
            $this->PhoneCircleTimes = $param["PhoneCircleTimes"];
        }

        if (array_key_exists("PhoneInnerInterval",$param) and $param["PhoneInnerInterval"] !== null) {
            $this->PhoneInnerInterval = $param["PhoneInnerInterval"];
        }

        if (array_key_exists("PhoneCircleInterval",$param) and $param["PhoneCircleInterval"] !== null) {
            $this->PhoneCircleInterval = $param["PhoneCircleInterval"];
        }

        if (array_key_exists("PhoneArriveNotice",$param) and $param["PhoneArriveNotice"] !== null) {
            $this->PhoneArriveNotice = $param["PhoneArriveNotice"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebHook",$param) and $param["WebHook"] !== null) {
            $this->WebHook = $param["WebHook"];
        }
    }
}

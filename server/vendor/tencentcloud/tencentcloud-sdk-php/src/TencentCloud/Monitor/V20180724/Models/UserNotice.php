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
 * 云监控告警通知模板 - 用户通知详情
 *
 * @method string getReceiverType() 获取接收者类型 USER=用户 GROUP=用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverType(string $ReceiverType) 设置接收者类型 USER=用户 GROUP=用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取通知开始时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置通知开始时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取通知结束时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置通知结束时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeWay() 获取通知渠道列表 EMAIL=邮件 SMS=短信 CALL=电话 WECHAT=微信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeWay(array $NoticeWay) 设置通知渠道列表 EMAIL=邮件 SMS=短信 CALL=电话 WECHAT=微信
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserIds() 获取用户 uid 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserIds(array $UserIds) 设置用户 uid 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupIds() 获取用户组 group id 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupIds(array $GroupIds) 设置用户组 group id 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPhoneOrder() 获取电话轮询列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneOrder(array $PhoneOrder) 设置电话轮询列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleTimes() 获取电话轮询次数 （取值范围1-5）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) 设置电话轮询次数 （取值范围1-5）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneInnerInterval() 获取单次轮询内拨打间隔 秒数 （取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) 设置单次轮询内拨打间隔 秒数 （取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleInterval() 获取两次轮询间隔 秒数（取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) 设置两次轮询间隔 秒数（取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNeedPhoneArriveNotice() 获取是否需要触达通知 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedPhoneArriveNotice(integer $NeedPhoneArriveNotice) 设置是否需要触达通知 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserNotice extends AbstractModel
{
    /**
     * @var string 接收者类型 USER=用户 GROUP=用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverType;

    /**
     * @var integer 通知开始时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 通知结束时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 通知渠道列表 EMAIL=邮件 SMS=短信 CALL=电话 WECHAT=微信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeWay;

    /**
     * @var array 用户 uid 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserIds;

    /**
     * @var array 用户组 group id 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupIds;

    /**
     * @var array 电话轮询列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneOrder;

    /**
     * @var integer 电话轮询次数 （取值范围1-5）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleTimes;

    /**
     * @var integer 单次轮询内拨打间隔 秒数 （取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneInnerInterval;

    /**
     * @var integer 两次轮询间隔 秒数（取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleInterval;

    /**
     * @var integer 是否需要触达通知 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedPhoneArriveNotice;

    /**
     * @param string $ReceiverType 接收者类型 USER=用户 GROUP=用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 通知开始时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 通知结束时间 00:00:00 开始的秒数（取值范围0-86399）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeWay 通知渠道列表 EMAIL=邮件 SMS=短信 CALL=电话 WECHAT=微信
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserIds 用户 uid 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupIds 用户组 group id 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PhoneOrder 电话轮询列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleTimes 电话轮询次数 （取值范围1-5）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneInnerInterval 单次轮询内拨打间隔 秒数 （取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleInterval 两次轮询间隔 秒数（取值范围60-900）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NeedPhoneArriveNotice 是否需要触达通知 0=否 1=是
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NoticeWay",$param) and $param["NoticeWay"] !== null) {
            $this->NoticeWay = $param["NoticeWay"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("PhoneOrder",$param) and $param["PhoneOrder"] !== null) {
            $this->PhoneOrder = $param["PhoneOrder"];
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

        if (array_key_exists("NeedPhoneArriveNotice",$param) and $param["NeedPhoneArriveNotice"] !== null) {
            $this->NeedPhoneArriveNotice = $param["NeedPhoneArriveNotice"];
        }
    }
}

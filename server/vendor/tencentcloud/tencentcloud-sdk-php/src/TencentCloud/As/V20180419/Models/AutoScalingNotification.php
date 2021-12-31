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
 * 弹性伸缩事件通知
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method array getNotificationUserGroupIds() 获取用户组ID列表。
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) 设置用户组ID列表。
 * @method array getNotificationTypes() 获取通知事件列表。
 * @method void setNotificationTypes(array $NotificationTypes) 设置通知事件列表。
 * @method string getAutoScalingNotificationId() 获取事件通知ID。
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) 设置事件通知ID。
 */
class AutoScalingNotification extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 用户组ID列表。
     */
    public $NotificationUserGroupIds;

    /**
     * @var array 通知事件列表。
     */
    public $NotificationTypes;

    /**
     * @var string 事件通知ID。
     */
    public $AutoScalingNotificationId;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param array $NotificationUserGroupIds 用户组ID列表。
     * @param array $NotificationTypes 通知事件列表。
     * @param string $AutoScalingNotificationId 事件通知ID。
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

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("AutoScalingNotificationId",$param) and $param["AutoScalingNotificationId"] !== null) {
            $this->AutoScalingNotificationId = $param["AutoScalingNotificationId"];
        }
    }
}

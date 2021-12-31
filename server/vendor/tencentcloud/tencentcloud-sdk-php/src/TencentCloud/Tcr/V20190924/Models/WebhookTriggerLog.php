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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发器日志
 *
 * @method integer getId() 获取日志 Id
 * @method void setId(integer $Id) 设置日志 Id
 * @method integer getTriggerId() 获取触发器 Id
 * @method void setTriggerId(integer $TriggerId) 设置触发器 Id
 * @method string getEventType() 获取事件类型
 * @method void setEventType(string $EventType) 设置事件类型
 * @method string getNotifyType() 获取通知类型
 * @method void setNotifyType(string $NotifyType) 设置通知类型
 * @method string getDetail() 获取详情
 * @method void setDetail(string $Detail) 设置详情
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class WebhookTriggerLog extends AbstractModel
{
    /**
     * @var integer 日志 Id
     */
    public $Id;

    /**
     * @var integer 触发器 Id
     */
    public $TriggerId;

    /**
     * @var string 事件类型
     */
    public $EventType;

    /**
     * @var string 通知类型
     */
    public $NotifyType;

    /**
     * @var string 详情
     */
    public $Detail;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param integer $Id 日志 Id
     * @param integer $TriggerId 触发器 Id
     * @param string $EventType 事件类型
     * @param string $NotifyType 通知类型
     * @param string $Detail 详情
     * @param string $CreationTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Status 状态
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

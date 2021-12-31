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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件详情
 *
 * @method string getEventId() 获取事件ID
 * @method void setEventId(string $EventId) 设置事件ID
 * @method string getVersionId() 获取版本ID
 * @method void setVersionId(string $VersionId) 设置版本ID
 * @method string getStackId() 获取资源栈ID
 * @method void setStackId(string $StackId) 设置资源栈ID
 * @method string getType() 获取事件类型
 * @method void setType(string $Type) 设置事件类型
 * @method string getStatus() 获取版本状态
 * @method void setStatus(string $Status) 设置版本状态
 * @method string getMessage() 获取状态信息
 * @method void setMessage(string $Message) 设置状态信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class EventInfo extends AbstractModel
{
    /**
     * @var string 事件ID
     */
    public $EventId;

    /**
     * @var string 版本ID
     */
    public $VersionId;

    /**
     * @var string 资源栈ID
     */
    public $StackId;

    /**
     * @var string 事件类型
     */
    public $Type;

    /**
     * @var string 版本状态
     */
    public $Status;

    /**
     * @var string 状态信息
     */
    public $Message;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $EventId 事件ID
     * @param string $VersionId 版本ID
     * @param string $StackId 资源栈ID
     * @param string $Type 事件类型
     * @param string $Status 版本状态
     * @param string $Message 状态信息
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("StackId",$param) and $param["StackId"] !== null) {
            $this->StackId = $param["StackId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

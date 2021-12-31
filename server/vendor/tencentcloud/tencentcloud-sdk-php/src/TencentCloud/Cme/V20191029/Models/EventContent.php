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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调事件内容。
 *
 * @method string getEventType() 获取事件类型，可取值为：
<li>Storage.NewFileCreated：新文件产生；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更。</li>
 * @method void setEventType(string $EventType) 设置事件类型，可取值为：
<li>Storage.NewFileCreated：新文件产生；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更。</li>
 * @method StorageNewFileCreatedEvent getStorageNewFileCreatedEvent() 获取新文件产生事件信息。仅当 EventType 为 Storage.NewFileCreated 时有效。
 * @method void setStorageNewFileCreatedEvent(StorageNewFileCreatedEvent $StorageNewFileCreatedEvent) 设置新文件产生事件信息。仅当 EventType 为 Storage.NewFileCreated 时有效。
 * @method ProjectStreamConnectStatusChangedEvent getProjectStreamConnectStatusChangedEvent() 获取云转推项目状态变更事件信息。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
 * @method void setProjectStreamConnectStatusChangedEvent(ProjectStreamConnectStatusChangedEvent $ProjectStreamConnectStatusChangedEvent) 设置云转推项目状态变更事件信息。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
 */
class EventContent extends AbstractModel
{
    /**
     * @var string 事件类型，可取值为：
<li>Storage.NewFileCreated：新文件产生；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更。</li>
     */
    public $EventType;

    /**
     * @var StorageNewFileCreatedEvent 新文件产生事件信息。仅当 EventType 为 Storage.NewFileCreated 时有效。
     */
    public $StorageNewFileCreatedEvent;

    /**
     * @var ProjectStreamConnectStatusChangedEvent 云转推项目状态变更事件信息。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
     */
    public $ProjectStreamConnectStatusChangedEvent;

    /**
     * @param string $EventType 事件类型，可取值为：
<li>Storage.NewFileCreated：新文件产生；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更。</li>
     * @param StorageNewFileCreatedEvent $StorageNewFileCreatedEvent 新文件产生事件信息。仅当 EventType 为 Storage.NewFileCreated 时有效。
     * @param ProjectStreamConnectStatusChangedEvent $ProjectStreamConnectStatusChangedEvent 云转推项目状态变更事件信息。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("StorageNewFileCreatedEvent",$param) and $param["StorageNewFileCreatedEvent"] !== null) {
            $this->StorageNewFileCreatedEvent = new StorageNewFileCreatedEvent();
            $this->StorageNewFileCreatedEvent->deserialize($param["StorageNewFileCreatedEvent"]);
        }

        if (array_key_exists("ProjectStreamConnectStatusChangedEvent",$param) and $param["ProjectStreamConnectStatusChangedEvent"] !== null) {
            $this->ProjectStreamConnectStatusChangedEvent = new ProjectStreamConnectStatusChangedEvent();
            $this->ProjectStreamConnectStatusChangedEvent->deserialize($param["ProjectStreamConnectStatusChangedEvent"]);
        }
    }
}

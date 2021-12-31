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
 * 告警事件
 *
 * @method string getEventName() 获取事件名
 * @method void setEventName(string $EventName) 设置事件名
 * @method string getDescription() 获取展示的事件名
 * @method void setDescription(string $Description) 设置展示的事件名
 * @method string getNamespace() 获取告警策略类型
 * @method void setNamespace(string $Namespace) 设置告警策略类型
 */
class AlarmEvent extends AbstractModel
{
    /**
     * @var string 事件名
     */
    public $EventName;

    /**
     * @var string 展示的事件名
     */
    public $Description;

    /**
     * @var string 告警策略类型
     */
    public $Namespace;

    /**
     * @param string $EventName 事件名
     * @param string $Description 展示的事件名
     * @param string $Namespace 告警策略类型
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}

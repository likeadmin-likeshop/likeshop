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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器实例事件
 *
 * @method string getFirstSeen() 获取事件首次出现时间
 * @method void setFirstSeen(string $FirstSeen) 设置事件首次出现时间
 * @method string getLastSeen() 获取事件上次出现时间
 * @method void setLastSeen(string $LastSeen) 设置事件上次出现时间
 * @method string getLevel() 获取事件等级
 * @method void setLevel(string $Level) 设置事件等级
 * @method string getCount() 获取事件出现次数
 * @method void setCount(string $Count) 设置事件出现次数
 * @method string getReason() 获取事件出现原因
 * @method void setReason(string $Reason) 设置事件出现原因
 * @method string getMessage() 获取事件消息
 * @method void setMessage(string $Message) 设置事件消息
 */
class Event extends AbstractModel
{
    /**
     * @var string 事件首次出现时间
     */
    public $FirstSeen;

    /**
     * @var string 事件上次出现时间
     */
    public $LastSeen;

    /**
     * @var string 事件等级
     */
    public $Level;

    /**
     * @var string 事件出现次数
     */
    public $Count;

    /**
     * @var string 事件出现原因
     */
    public $Reason;

    /**
     * @var string 事件消息
     */
    public $Message;

    /**
     * @param string $FirstSeen 事件首次出现时间
     * @param string $LastSeen 事件上次出现时间
     * @param string $Level 事件等级
     * @param string $Count 事件出现次数
     * @param string $Reason 事件出现原因
     * @param string $Message 事件消息
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
        if (array_key_exists("FirstSeen",$param) and $param["FirstSeen"] !== null) {
            $this->FirstSeen = $param["FirstSeen"];
        }

        if (array_key_exists("LastSeen",$param) and $param["LastSeen"] !== null) {
            $this->LastSeen = $param["LastSeen"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

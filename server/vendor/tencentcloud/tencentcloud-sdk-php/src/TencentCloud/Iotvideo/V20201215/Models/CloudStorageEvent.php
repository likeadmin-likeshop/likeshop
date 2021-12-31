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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存事件
 *
 * @method integer getStartTime() 获取事件起始时间（Unix 时间戳，秒级
 * @method void setStartTime(integer $StartTime) 设置事件起始时间（Unix 时间戳，秒级
 * @method integer getEndTime() 获取事件结束时间（Unix 时间戳，秒级
 * @method void setEndTime(integer $EndTime) 设置事件结束时间（Unix 时间戳，秒级
 * @method string getThumbnail() 获取事件缩略图
 * @method void setThumbnail(string $Thumbnail) 设置事件缩略图
 * @method string getEventId() 获取事件ID
 * @method void setEventId(string $EventId) 设置事件ID
 */
class CloudStorageEvent extends AbstractModel
{
    /**
     * @var integer 事件起始时间（Unix 时间戳，秒级
     */
    public $StartTime;

    /**
     * @var integer 事件结束时间（Unix 时间戳，秒级
     */
    public $EndTime;

    /**
     * @var string 事件缩略图
     */
    public $Thumbnail;

    /**
     * @var string 事件ID
     */
    public $EventId;

    /**
     * @param integer $StartTime 事件起始时间（Unix 时间戳，秒级
     * @param integer $EndTime 事件结束时间（Unix 时间戳，秒级
     * @param string $Thumbnail 事件缩略图
     * @param string $EventId 事件ID
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}

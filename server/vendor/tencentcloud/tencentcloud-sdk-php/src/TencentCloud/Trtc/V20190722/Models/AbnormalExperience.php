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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户的异常体验及可能的原因
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getExperienceId() 获取异常体验ID
 * @method void setExperienceId(integer $ExperienceId) 设置异常体验ID
 * @method string getRoomId() 获取字符串房间号
 * @method void setRoomId(string $RoomId) 设置字符串房间号
 * @method array getAbnormalEventList() 获取异常事件数组
 * @method void setAbnormalEventList(array $AbnormalEventList) 设置异常事件数组
 * @method integer getEventTime() 获取异常事件的上报时间
 * @method void setEventTime(integer $EventTime) 设置异常事件的上报时间
 */
class AbnormalExperience extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 异常体验ID
     */
    public $ExperienceId;

    /**
     * @var string 字符串房间号
     */
    public $RoomId;

    /**
     * @var array 异常事件数组
     */
    public $AbnormalEventList;

    /**
     * @var integer 异常事件的上报时间
     */
    public $EventTime;

    /**
     * @param string $UserId 用户ID
     * @param integer $ExperienceId 异常体验ID
     * @param string $RoomId 字符串房间号
     * @param array $AbnormalEventList 异常事件数组
     * @param integer $EventTime 异常事件的上报时间
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ExperienceId",$param) and $param["ExperienceId"] !== null) {
            $this->ExperienceId = $param["ExperienceId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("AbnormalEventList",$param) and $param["AbnormalEventList"] !== null) {
            $this->AbnormalEventList = [];
            foreach ($param["AbnormalEventList"] as $key => $value){
                $obj = new AbnormalEvent();
                $obj->deserialize($value);
                array_push($this->AbnormalEventList, $obj);
            }
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }
    }
}

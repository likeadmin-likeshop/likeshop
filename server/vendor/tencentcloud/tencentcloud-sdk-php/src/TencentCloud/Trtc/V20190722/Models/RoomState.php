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
 * 房间信息列表
 *
 * @method string getCommId() 获取通话ID（唯一标识一次通话）
 * @method void setCommId(string $CommId) 设置通话ID（唯一标识一次通话）
 * @method string getRoomString() 获取房间号
 * @method void setRoomString(string $RoomString) 设置房间号
 * @method integer getCreateTime() 获取房间创建时间
 * @method void setCreateTime(integer $CreateTime) 设置房间创建时间
 * @method integer getDestroyTime() 获取房间销毁时间
 * @method void setDestroyTime(integer $DestroyTime) 设置房间销毁时间
 * @method boolean getIsFinished() 获取房间是否已经结束
 * @method void setIsFinished(boolean $IsFinished) 设置房间是否已经结束
 * @method string getUserId() 获取房间创建者Id
 * @method void setUserId(string $UserId) 设置房间创建者Id
 */
class RoomState extends AbstractModel
{
    /**
     * @var string 通话ID（唯一标识一次通话）
     */
    public $CommId;

    /**
     * @var string 房间号
     */
    public $RoomString;

    /**
     * @var integer 房间创建时间
     */
    public $CreateTime;

    /**
     * @var integer 房间销毁时间
     */
    public $DestroyTime;

    /**
     * @var boolean 房间是否已经结束
     */
    public $IsFinished;

    /**
     * @var string 房间创建者Id
     */
    public $UserId;

    /**
     * @param string $CommId 通话ID（唯一标识一次通话）
     * @param string $RoomString 房间号
     * @param integer $CreateTime 房间创建时间
     * @param integer $DestroyTime 房间销毁时间
     * @param boolean $IsFinished 房间是否已经结束
     * @param string $UserId 房间创建者Id
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
        if (array_key_exists("CommId",$param) and $param["CommId"] !== null) {
            $this->CommId = $param["CommId"];
        }

        if (array_key_exists("RoomString",$param) and $param["RoomString"] !== null) {
            $this->RoomString = $param["RoomString"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("IsFinished",$param) and $param["IsFinished"] !== null) {
            $this->IsFinished = $param["IsFinished"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}

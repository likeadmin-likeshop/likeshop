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
 * 历史规模信息
 *
 * @method integer getTime() 获取每天开始的时间
 * @method void setTime(integer $Time) 设置每天开始的时间
 * @method integer getUserNumber() 获取房间人数，用户重复进入同一个房间为1次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNumber(integer $UserNumber) 设置房间人数，用户重复进入同一个房间为1次
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserCount() 获取房间人次，用户每次进入房间为一次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserCount(integer $UserCount) 设置房间人次，用户每次进入房间为一次
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoomNumbers() 获取sdkappid下一天内的房间数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomNumbers(integer $RoomNumbers) 设置sdkappid下一天内的房间数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScaleInfomation extends AbstractModel
{
    /**
     * @var integer 每天开始的时间
     */
    public $Time;

    /**
     * @var integer 房间人数，用户重复进入同一个房间为1次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNumber;

    /**
     * @var integer 房间人次，用户每次进入房间为一次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserCount;

    /**
     * @var integer sdkappid下一天内的房间数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomNumbers;

    /**
     * @param integer $Time 每天开始的时间
     * @param integer $UserNumber 房间人数，用户重复进入同一个房间为1次
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserCount 房间人次，用户每次进入房间为一次
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoomNumbers sdkappid下一天内的房间数
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("UserNumber",$param) and $param["UserNumber"] !== null) {
            $this->UserNumber = $param["UserNumber"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("RoomNumbers",$param) and $param["RoomNumbers"] !== null) {
            $this->RoomNumbers = $param["RoomNumbers"];
        }
    }
}

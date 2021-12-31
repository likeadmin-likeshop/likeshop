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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PSTN 会话类型。
 *
 * @method string getSessionID() 获取会话 ID
 * @method void setSessionID(string $SessionID) 设置会话 ID
 * @method string getRoomID() 获取会话临时房间 ID
 * @method void setRoomID(string $RoomID) 设置会话临时房间 ID
 * @method string getCaller() 获取主叫
 * @method void setCaller(string $Caller) 设置主叫
 * @method string getCallee() 获取被叫
 * @method void setCallee(string $Callee) 设置被叫
 * @method integer getStartTimestamp() 获取开始时间，Unix 时间戳
 * @method void setStartTimestamp(integer $StartTimestamp) 设置开始时间，Unix 时间戳
 * @method integer getRingTimestamp() 获取振铃时间，Unix 时间戳
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间，Unix 时间戳
 * @method integer getAcceptTimestamp() 获取接听时间，Unix 时间戳
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间，Unix 时间戳
 * @method string getStaffEmail() 获取坐席邮箱
 * @method void setStaffEmail(string $StaffEmail) 设置坐席邮箱
 * @method string getStaffNumber() 获取坐席工号
 * @method void setStaffNumber(string $StaffNumber) 设置坐席工号
 * @method string getSessionStatus() 获取会话状态
ringing 振铃中
seatJoining  等待坐席接听
inProgress 进行中
finished 已完成
 * @method void setSessionStatus(string $SessionStatus) 设置会话状态
ringing 振铃中
seatJoining  等待坐席接听
inProgress 进行中
finished 已完成
 * @method integer getDirection() 获取会话呼叫方向， 0 呼入 | 1 - 呼出
 * @method void setDirection(integer $Direction) 设置会话呼叫方向， 0 呼入 | 1 - 呼出
 * @method string getOutBoundCaller() 获取转外线使用的号码（转外线主叫）
 * @method void setOutBoundCaller(string $OutBoundCaller) 设置转外线使用的号码（转外线主叫）
 * @method string getOutBoundCallee() 获取转外线被叫
 * @method void setOutBoundCallee(string $OutBoundCallee) 设置转外线被叫
 */
class PSTNSession extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $SessionID;

    /**
     * @var string 会话临时房间 ID
     */
    public $RoomID;

    /**
     * @var string 主叫
     */
    public $Caller;

    /**
     * @var string 被叫
     */
    public $Callee;

    /**
     * @var integer 开始时间，Unix 时间戳
     */
    public $StartTimestamp;

    /**
     * @var integer 振铃时间，Unix 时间戳
     */
    public $RingTimestamp;

    /**
     * @var integer 接听时间，Unix 时间戳
     */
    public $AcceptTimestamp;

    /**
     * @var string 坐席邮箱
     */
    public $StaffEmail;

    /**
     * @var string 坐席工号
     */
    public $StaffNumber;

    /**
     * @var string 会话状态
ringing 振铃中
seatJoining  等待坐席接听
inProgress 进行中
finished 已完成
     */
    public $SessionStatus;

    /**
     * @var integer 会话呼叫方向， 0 呼入 | 1 - 呼出
     */
    public $Direction;

    /**
     * @var string 转外线使用的号码（转外线主叫）
     */
    public $OutBoundCaller;

    /**
     * @var string 转外线被叫
     */
    public $OutBoundCallee;

    /**
     * @param string $SessionID 会话 ID
     * @param string $RoomID 会话临时房间 ID
     * @param string $Caller 主叫
     * @param string $Callee 被叫
     * @param integer $StartTimestamp 开始时间，Unix 时间戳
     * @param integer $RingTimestamp 振铃时间，Unix 时间戳
     * @param integer $AcceptTimestamp 接听时间，Unix 时间戳
     * @param string $StaffEmail 坐席邮箱
     * @param string $StaffNumber 坐席工号
     * @param string $SessionStatus 会话状态
ringing 振铃中
seatJoining  等待坐席接听
inProgress 进行中
finished 已完成
     * @param integer $Direction 会话呼叫方向， 0 呼入 | 1 - 呼出
     * @param string $OutBoundCaller 转外线使用的号码（转外线主叫）
     * @param string $OutBoundCallee 转外线被叫
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
        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("RoomID",$param) and $param["RoomID"] !== null) {
            $this->RoomID = $param["RoomID"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("SessionStatus",$param) and $param["SessionStatus"] !== null) {
            $this->SessionStatus = $param["SessionStatus"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("OutBoundCaller",$param) and $param["OutBoundCaller"] !== null) {
            $this->OutBoundCaller = $param["OutBoundCaller"];
        }

        if (array_key_exists("OutBoundCallee",$param) and $param["OutBoundCallee"] !== null) {
            $this->OutBoundCallee = $param["OutBoundCallee"];
        }
    }
}

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
 * 用户信息，包括用户进房时间，退房时间等
 *
 * @method string getRoomStr() 获取房间号
 * @method void setRoomStr(string $RoomStr) 设置房间号
 * @method string getUserId() 获取用户Id
 * @method void setUserId(string $UserId) 设置用户Id
 * @method integer getJoinTs() 获取用户进房时间
 * @method void setJoinTs(integer $JoinTs) 设置用户进房时间
 * @method integer getLeaveTs() 获取用户退房时间，用户没有退房则返回当前时间
 * @method void setLeaveTs(integer $LeaveTs) 设置用户退房时间，用户没有退房则返回当前时间
 * @method string getDeviceType() 获取终端类型
 * @method void setDeviceType(string $DeviceType) 设置终端类型
 * @method string getSdkVersion() 获取Sdk版本号
 * @method void setSdkVersion(string $SdkVersion) 设置Sdk版本号
 * @method string getClientIp() 获取客户端IP地址
 * @method void setClientIp(string $ClientIp) 设置客户端IP地址
 * @method boolean getFinished() 获取判断用户是否已经离开房间
 * @method void setFinished(boolean $Finished) 设置判断用户是否已经离开房间
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string 房间号
     */
    public $RoomStr;

    /**
     * @var string 用户Id
     */
    public $UserId;

    /**
     * @var integer 用户进房时间
     */
    public $JoinTs;

    /**
     * @var integer 用户退房时间，用户没有退房则返回当前时间
     */
    public $LeaveTs;

    /**
     * @var string 终端类型
     */
    public $DeviceType;

    /**
     * @var string Sdk版本号
     */
    public $SdkVersion;

    /**
     * @var string 客户端IP地址
     */
    public $ClientIp;

    /**
     * @var boolean 判断用户是否已经离开房间
     */
    public $Finished;

    /**
     * @param string $RoomStr 房间号
     * @param string $UserId 用户Id
     * @param integer $JoinTs 用户进房时间
     * @param integer $LeaveTs 用户退房时间，用户没有退房则返回当前时间
     * @param string $DeviceType 终端类型
     * @param string $SdkVersion Sdk版本号
     * @param string $ClientIp 客户端IP地址
     * @param boolean $Finished 判断用户是否已经离开房间
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
        if (array_key_exists("RoomStr",$param) and $param["RoomStr"] !== null) {
            $this->RoomStr = $param["RoomStr"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("JoinTs",$param) and $param["JoinTs"] !== null) {
            $this->JoinTs = $param["JoinTs"];
        }

        if (array_key_exists("LeaveTs",$param) and $param["LeaveTs"] !== null) {
            $this->LeaveTs = $param["LeaveTs"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Finished",$param) and $param["Finished"] !== null) {
            $this->Finished = $param["Finished"];
        }
    }
}

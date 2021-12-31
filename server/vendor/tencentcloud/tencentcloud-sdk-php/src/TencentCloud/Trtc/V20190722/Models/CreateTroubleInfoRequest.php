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
 * CreateTroubleInfo请求参数结构体
 *
 * @method string getSdkAppId() 获取应用的ID
 * @method void setSdkAppId(string $SdkAppId) 设置应用的ID
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 * @method string getTeacherUserId() 获取老师用户ID
 * @method void setTeacherUserId(string $TeacherUserId) 设置老师用户ID
 * @method string getStudentUserId() 获取学生用户ID
 * @method void setStudentUserId(string $StudentUserId) 设置学生用户ID
 * @method string getTroubleUserId() 获取体验异常端（老师或学生）的用户 ID。
 * @method void setTroubleUserId(string $TroubleUserId) 设置体验异常端（老师或学生）的用户 ID。
 * @method integer getTroubleType() 获取异常类型。
1. 仅视频异常
2. 仅声音异常
3. 音视频都异常
5. 进房异常
4. 切课
6. 求助
7. 问题反馈
8. 投诉
 * @method void setTroubleType(integer $TroubleType) 设置异常类型。
1. 仅视频异常
2. 仅声音异常
3. 音视频都异常
5. 进房异常
4. 切课
6. 求助
7. 问题反馈
8. 投诉
 * @method integer getTroubleTime() 获取异常发生的UNIX 时间戳，单位为秒。
 * @method void setTroubleTime(integer $TroubleTime) 设置异常发生的UNIX 时间戳，单位为秒。
 * @method string getTroubleMsg() 获取异常详情
 * @method void setTroubleMsg(string $TroubleMsg) 设置异常详情
 */
class CreateTroubleInfoRequest extends AbstractModel
{
    /**
     * @var string 应用的ID
     */
    public $SdkAppId;

    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @var string 老师用户ID
     */
    public $TeacherUserId;

    /**
     * @var string 学生用户ID
     */
    public $StudentUserId;

    /**
     * @var string 体验异常端（老师或学生）的用户 ID。
     */
    public $TroubleUserId;

    /**
     * @var integer 异常类型。
1. 仅视频异常
2. 仅声音异常
3. 音视频都异常
5. 进房异常
4. 切课
6. 求助
7. 问题反馈
8. 投诉
     */
    public $TroubleType;

    /**
     * @var integer 异常发生的UNIX 时间戳，单位为秒。
     */
    public $TroubleTime;

    /**
     * @var string 异常详情
     */
    public $TroubleMsg;

    /**
     * @param string $SdkAppId 应用的ID
     * @param string $RoomId 房间ID
     * @param string $TeacherUserId 老师用户ID
     * @param string $StudentUserId 学生用户ID
     * @param string $TroubleUserId 体验异常端（老师或学生）的用户 ID。
     * @param integer $TroubleType 异常类型。
1. 仅视频异常
2. 仅声音异常
3. 音视频都异常
5. 进房异常
4. 切课
6. 求助
7. 问题反馈
8. 投诉
     * @param integer $TroubleTime 异常发生的UNIX 时间戳，单位为秒。
     * @param string $TroubleMsg 异常详情
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("TeacherUserId",$param) and $param["TeacherUserId"] !== null) {
            $this->TeacherUserId = $param["TeacherUserId"];
        }

        if (array_key_exists("StudentUserId",$param) and $param["StudentUserId"] !== null) {
            $this->StudentUserId = $param["StudentUserId"];
        }

        if (array_key_exists("TroubleUserId",$param) and $param["TroubleUserId"] !== null) {
            $this->TroubleUserId = $param["TroubleUserId"];
        }

        if (array_key_exists("TroubleType",$param) and $param["TroubleType"] !== null) {
            $this->TroubleType = $param["TroubleType"];
        }

        if (array_key_exists("TroubleTime",$param) and $param["TroubleTime"] !== null) {
            $this->TroubleTime = $param["TroubleTime"];
        }

        if (array_key_exists("TroubleMsg",$param) and $param["TroubleMsg"] !== null) {
            $this->TroubleMsg = $param["TroubleMsg"];
        }
    }
}

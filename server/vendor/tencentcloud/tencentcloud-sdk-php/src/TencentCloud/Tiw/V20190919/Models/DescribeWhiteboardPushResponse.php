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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteboardPush返回参数结构体
 *
 * @method string getFinishReason() 获取推流结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止推流
- USER_CALL: 主动调用了停止推流接口
- EXCEPTION: 推流异常结束
 * @method void setFinishReason(string $FinishReason) 设置推流结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止推流
- USER_CALL: 主动调用了停止推流接口
- EXCEPTION: 推流异常结束
 * @method string getTaskId() 获取需要查询结果的白板推流任务Id
 * @method void setTaskId(string $TaskId) 设置需要查询结果的白板推流任务Id
 * @method string getStatus() 获取推流任务状态
- PREPARED: 表示推流正在准备中（进房/启动推流服务等操作）
- PUSHING: 表示推流已开始
- STOPPED: 表示推流已停止
 * @method void setStatus(string $Status) 设置推流任务状态
- PREPARED: 表示推流正在准备中（进房/启动推流服务等操作）
- PUSHING: 表示推流已开始
- STOPPED: 表示推流已停止
 * @method integer getRoomId() 获取房间号
 * @method void setRoomId(integer $RoomId) 设置房间号
 * @method string getGroupId() 获取白板的群组 Id
 * @method void setGroupId(string $GroupId) 设置白板的群组 Id
 * @method string getPushUserId() 获取推流用户Id
 * @method void setPushUserId(string $PushUserId) 设置推流用户Id
 * @method integer getPushStartTime() 获取实际开始推流时间，Unix 时间戳，单位秒
 * @method void setPushStartTime(integer $PushStartTime) 设置实际开始推流时间，Unix 时间戳，单位秒
 * @method integer getPushStopTime() 获取实际停止推流时间，Unix 时间戳，单位秒
 * @method void setPushStopTime(integer $PushStopTime) 设置实际停止推流时间，Unix 时间戳，单位秒
 * @method integer getExceptionCnt() 获取推流过程中出现异常的次数
 * @method void setExceptionCnt(integer $ExceptionCnt) 设置推流过程中出现异常的次数
 * @method integer getIMSyncTime() 获取白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
 * @method void setIMSyncTime(integer $IMSyncTime) 设置白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
 * @method string getBackup() 获取备份推流任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackup(string $Backup) 设置备份推流任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWhiteboardPushResponse extends AbstractModel
{
    /**
     * @var string 推流结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止推流
- USER_CALL: 主动调用了停止推流接口
- EXCEPTION: 推流异常结束
     */
    public $FinishReason;

    /**
     * @var string 需要查询结果的白板推流任务Id
     */
    public $TaskId;

    /**
     * @var string 推流任务状态
- PREPARED: 表示推流正在准备中（进房/启动推流服务等操作）
- PUSHING: 表示推流已开始
- STOPPED: 表示推流已停止
     */
    public $Status;

    /**
     * @var integer 房间号
     */
    public $RoomId;

    /**
     * @var string 白板的群组 Id
     */
    public $GroupId;

    /**
     * @var string 推流用户Id
     */
    public $PushUserId;

    /**
     * @var integer 实际开始推流时间，Unix 时间戳，单位秒
     */
    public $PushStartTime;

    /**
     * @var integer 实际停止推流时间，Unix 时间戳，单位秒
     */
    public $PushStopTime;

    /**
     * @var integer 推流过程中出现异常的次数
     */
    public $ExceptionCnt;

    /**
     * @var integer 白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
     */
    public $IMSyncTime;

    /**
     * @var string 备份推流任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Backup;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FinishReason 推流结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止推流
- USER_CALL: 主动调用了停止推流接口
- EXCEPTION: 推流异常结束
     * @param string $TaskId 需要查询结果的白板推流任务Id
     * @param string $Status 推流任务状态
- PREPARED: 表示推流正在准备中（进房/启动推流服务等操作）
- PUSHING: 表示推流已开始
- STOPPED: 表示推流已停止
     * @param integer $RoomId 房间号
     * @param string $GroupId 白板的群组 Id
     * @param string $PushUserId 推流用户Id
     * @param integer $PushStartTime 实际开始推流时间，Unix 时间戳，单位秒
     * @param integer $PushStopTime 实际停止推流时间，Unix 时间戳，单位秒
     * @param integer $ExceptionCnt 推流过程中出现异常的次数
     * @param integer $IMSyncTime 白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
     * @param string $Backup 备份推流任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PushUserId",$param) and $param["PushUserId"] !== null) {
            $this->PushUserId = $param["PushUserId"];
        }

        if (array_key_exists("PushStartTime",$param) and $param["PushStartTime"] !== null) {
            $this->PushStartTime = $param["PushStartTime"];
        }

        if (array_key_exists("PushStopTime",$param) and $param["PushStopTime"] !== null) {
            $this->PushStopTime = $param["PushStopTime"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("IMSyncTime",$param) and $param["IMSyncTime"] !== null) {
            $this->IMSyncTime = $param["IMSyncTime"];
        }

        if (array_key_exists("Backup",$param) and $param["Backup"] !== null) {
            $this->Backup = $param["Backup"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

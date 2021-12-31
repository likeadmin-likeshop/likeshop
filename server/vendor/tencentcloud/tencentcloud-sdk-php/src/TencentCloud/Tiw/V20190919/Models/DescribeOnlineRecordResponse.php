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
 * DescribeOnlineRecord返回参数结构体
 *
 * @method string getFinishReason() 获取录制结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止录制
- USER_CALL: 主动调用了停止录制接口
- EXCEPTION: 录制异常结束
- FORCE_STOP: 强制停止录制，一般是因为暂停超过90分钟或者录制总时长超过24小时。
 * @method void setFinishReason(string $FinishReason) 设置录制结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止录制
- USER_CALL: 主动调用了停止录制接口
- EXCEPTION: 录制异常结束
- FORCE_STOP: 强制停止录制，一般是因为暂停超过90分钟或者录制总时长超过24小时。
 * @method string getTaskId() 获取需要查询结果的录制任务Id
 * @method void setTaskId(string $TaskId) 设置需要查询结果的录制任务Id
 * @method string getStatus() 获取录制任务状态
- PREPARED: 表示录制正在准备中（进房/启动录制服务等操作）
- RECORDING: 表示录制已开始
- PAUSED: 表示录制已暂停
- STOPPED: 表示录制已停止，正在处理并上传视频
- FINISHED: 表示视频处理并上传完成，成功生成录制结果
 * @method void setStatus(string $Status) 设置录制任务状态
- PREPARED: 表示录制正在准备中（进房/启动录制服务等操作）
- RECORDING: 表示录制已开始
- PAUSED: 表示录制已暂停
- STOPPED: 表示录制已停止，正在处理并上传视频
- FINISHED: 表示视频处理并上传完成，成功生成录制结果
 * @method integer getRoomId() 获取房间号
 * @method void setRoomId(integer $RoomId) 设置房间号
 * @method string getGroupId() 获取白板的群组 Id
 * @method void setGroupId(string $GroupId) 设置白板的群组 Id
 * @method string getRecordUserId() 获取录制用户Id
 * @method void setRecordUserId(string $RecordUserId) 设置录制用户Id
 * @method integer getRecordStartTime() 获取实际开始录制时间，Unix 时间戳，单位秒
 * @method void setRecordStartTime(integer $RecordStartTime) 设置实际开始录制时间，Unix 时间戳，单位秒
 * @method integer getRecordStopTime() 获取实际停止录制时间，Unix 时间戳，单位秒
 * @method void setRecordStopTime(integer $RecordStopTime) 设置实际停止录制时间，Unix 时间戳，单位秒
 * @method integer getTotalTime() 获取回放视频总时长（单位：毫秒）
 * @method void setTotalTime(integer $TotalTime) 设置回放视频总时长（单位：毫秒）
 * @method integer getExceptionCnt() 获取录制过程中出现异常的次数
 * @method void setExceptionCnt(integer $ExceptionCnt) 设置录制过程中出现异常的次数
 * @method array getOmittedDurations() 获取拼接视频中被忽略的时间段，只有开启视频拼接功能的时候，这个参数才是有效的
 * @method void setOmittedDurations(array $OmittedDurations) 设置拼接视频中被忽略的时间段，只有开启视频拼接功能的时候，这个参数才是有效的
 * @method array getVideoInfos() 获取录制视频列表
 * @method void setVideoInfos(array $VideoInfos) 设置录制视频列表
 * @method string getReplayUrl() 获取回放URL，需配合信令播放器使用。此字段仅适用于`视频生成模式`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplayUrl(string $ReplayUrl) 设置回放URL，需配合信令播放器使用。此字段仅适用于`视频生成模式`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOnlineRecordResponse extends AbstractModel
{
    /**
     * @var string 录制结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止录制
- USER_CALL: 主动调用了停止录制接口
- EXCEPTION: 录制异常结束
- FORCE_STOP: 强制停止录制，一般是因为暂停超过90分钟或者录制总时长超过24小时。
     */
    public $FinishReason;

    /**
     * @var string 需要查询结果的录制任务Id
     */
    public $TaskId;

    /**
     * @var string 录制任务状态
- PREPARED: 表示录制正在准备中（进房/启动录制服务等操作）
- RECORDING: 表示录制已开始
- PAUSED: 表示录制已暂停
- STOPPED: 表示录制已停止，正在处理并上传视频
- FINISHED: 表示视频处理并上传完成，成功生成录制结果
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
     * @var string 录制用户Id
     */
    public $RecordUserId;

    /**
     * @var integer 实际开始录制时间，Unix 时间戳，单位秒
     */
    public $RecordStartTime;

    /**
     * @var integer 实际停止录制时间，Unix 时间戳，单位秒
     */
    public $RecordStopTime;

    /**
     * @var integer 回放视频总时长（单位：毫秒）
     */
    public $TotalTime;

    /**
     * @var integer 录制过程中出现异常的次数
     */
    public $ExceptionCnt;

    /**
     * @var array 拼接视频中被忽略的时间段，只有开启视频拼接功能的时候，这个参数才是有效的
     */
    public $OmittedDurations;

    /**
     * @var array 录制视频列表
     */
    public $VideoInfos;

    /**
     * @var string 回放URL，需配合信令播放器使用。此字段仅适用于`视频生成模式`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplayUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FinishReason 录制结束原因，
- AUTO: 房间内长时间没有音视频上行及白板操作导致自动停止录制
- USER_CALL: 主动调用了停止录制接口
- EXCEPTION: 录制异常结束
- FORCE_STOP: 强制停止录制，一般是因为暂停超过90分钟或者录制总时长超过24小时。
     * @param string $TaskId 需要查询结果的录制任务Id
     * @param string $Status 录制任务状态
- PREPARED: 表示录制正在准备中（进房/启动录制服务等操作）
- RECORDING: 表示录制已开始
- PAUSED: 表示录制已暂停
- STOPPED: 表示录制已停止，正在处理并上传视频
- FINISHED: 表示视频处理并上传完成，成功生成录制结果
     * @param integer $RoomId 房间号
     * @param string $GroupId 白板的群组 Id
     * @param string $RecordUserId 录制用户Id
     * @param integer $RecordStartTime 实际开始录制时间，Unix 时间戳，单位秒
     * @param integer $RecordStopTime 实际停止录制时间，Unix 时间戳，单位秒
     * @param integer $TotalTime 回放视频总时长（单位：毫秒）
     * @param integer $ExceptionCnt 录制过程中出现异常的次数
     * @param array $OmittedDurations 拼接视频中被忽略的时间段，只有开启视频拼接功能的时候，这个参数才是有效的
     * @param array $VideoInfos 录制视频列表
     * @param string $ReplayUrl 回放URL，需配合信令播放器使用。此字段仅适用于`视频生成模式`
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

        if (array_key_exists("RecordUserId",$param) and $param["RecordUserId"] !== null) {
            $this->RecordUserId = $param["RecordUserId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordStopTime",$param) and $param["RecordStopTime"] !== null) {
            $this->RecordStopTime = $param["RecordStopTime"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("OmittedDurations",$param) and $param["OmittedDurations"] !== null) {
            $this->OmittedDurations = [];
            foreach ($param["OmittedDurations"] as $key => $value){
                $obj = new OmittedDuration();
                $obj->deserialize($value);
                array_push($this->OmittedDurations, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new VideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("ReplayUrl",$param) and $param["ReplayUrl"] !== null) {
            $this->ReplayUrl = $param["ReplayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

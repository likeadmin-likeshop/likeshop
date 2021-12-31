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
 * DescribeVideoGenerationTask返回参数结构体
 *
 * @method string getGroupId() 获取任务对应的群组Id
 * @method void setGroupId(string $GroupId) 设置任务对应的群组Id
 * @method integer getRoomId() 获取任务对应的房间号
 * @method void setRoomId(integer $RoomId) 设置任务对应的房间号
 * @method string getTaskId() 获取任务的Id
 * @method void setTaskId(string $TaskId) 设置任务的Id
 * @method integer getProgress() 获取已废弃
 * @method void setProgress(integer $Progress) 设置已废弃
 * @method string getStatus() 获取录制视频生成任务状态
- QUEUED: 正在排队
- PROCESSING: 正在生成视频
- FINISHED: 生成视频结束（成功完成或失败结束，可以通过错误码和错误信息进一步判断）
 * @method void setStatus(string $Status) 设置录制视频生成任务状态
- QUEUED: 正在排队
- PROCESSING: 正在生成视频
- FINISHED: 生成视频结束（成功完成或失败结束，可以通过错误码和错误信息进一步判断）
 * @method integer getTotalTime() 获取回放视频总时长,单位：毫秒
 * @method void setTotalTime(integer $TotalTime) 设置回放视频总时长,单位：毫秒
 * @method VideoInfo getVideoInfos() 获取已废弃，请使用`VideoInfoList`参数
 * @method void setVideoInfos(VideoInfo $VideoInfos) 设置已废弃，请使用`VideoInfoList`参数
 * @method array getVideoInfoList() 获取录制视频生成视频列表
 * @method void setVideoInfoList(array $VideoInfoList) 设置录制视频生成视频列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoGenerationTaskResponse extends AbstractModel
{
    /**
     * @var string 任务对应的群组Id
     */
    public $GroupId;

    /**
     * @var integer 任务对应的房间号
     */
    public $RoomId;

    /**
     * @var string 任务的Id
     */
    public $TaskId;

    /**
     * @var integer 已废弃
     */
    public $Progress;

    /**
     * @var string 录制视频生成任务状态
- QUEUED: 正在排队
- PROCESSING: 正在生成视频
- FINISHED: 生成视频结束（成功完成或失败结束，可以通过错误码和错误信息进一步判断）
     */
    public $Status;

    /**
     * @var integer 回放视频总时长,单位：毫秒
     */
    public $TotalTime;

    /**
     * @var VideoInfo 已废弃，请使用`VideoInfoList`参数
     */
    public $VideoInfos;

    /**
     * @var array 录制视频生成视频列表
     */
    public $VideoInfoList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GroupId 任务对应的群组Id
     * @param integer $RoomId 任务对应的房间号
     * @param string $TaskId 任务的Id
     * @param integer $Progress 已废弃
     * @param string $Status 录制视频生成任务状态
- QUEUED: 正在排队
- PROCESSING: 正在生成视频
- FINISHED: 生成视频结束（成功完成或失败结束，可以通过错误码和错误信息进一步判断）
     * @param integer $TotalTime 回放视频总时长,单位：毫秒
     * @param VideoInfo $VideoInfos 已废弃，请使用`VideoInfoList`参数
     * @param array $VideoInfoList 录制视频生成视频列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = new VideoInfo();
            $this->VideoInfos->deserialize($param["VideoInfos"]);
        }

        if (array_key_exists("VideoInfoList",$param) and $param["VideoInfoList"] !== null) {
            $this->VideoInfoList = [];
            foreach ($param["VideoInfoList"] as $key => $value){
                $obj = new VideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

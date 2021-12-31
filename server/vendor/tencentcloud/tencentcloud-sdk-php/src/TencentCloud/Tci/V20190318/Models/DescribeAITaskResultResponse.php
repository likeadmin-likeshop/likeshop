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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAITaskResult返回参数结构体
 *
 * @method StandardAudioResult getAudioResult() 获取音频分析结果
 * @method void setAudioResult(StandardAudioResult $AudioResult) 设置音频分析结果
 * @method StandardImageResult getImageResult() 获取图像分析结果
 * @method void setImageResult(StandardImageResult $ImageResult) 设置图像分析结果
 * @method StandardVideoResult getVideoResult() 获取视频分析结果
 * @method void setVideoResult(StandardVideoResult $VideoResult) 设置视频分析结果
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getTaskId() 获取任务唯一id。在URL方式时提交请求后会返回一个jobid，后续查询该url的结果时使用这个jobid进行查询。
 * @method void setTaskId(integer $TaskId) 设置任务唯一id。在URL方式时提交请求后会返回一个jobid，后续查询该url的结果时使用这个jobid进行查询。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAITaskResultResponse extends AbstractModel
{
    /**
     * @var StandardAudioResult 音频分析结果
     */
    public $AudioResult;

    /**
     * @var StandardImageResult 图像分析结果
     */
    public $ImageResult;

    /**
     * @var StandardVideoResult 视频分析结果
     */
    public $VideoResult;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 任务唯一id。在URL方式时提交请求后会返回一个jobid，后续查询该url的结果时使用这个jobid进行查询。
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param StandardAudioResult $AudioResult 音频分析结果
     * @param StandardImageResult $ImageResult 图像分析结果
     * @param StandardVideoResult $VideoResult 视频分析结果
     * @param string $Status 任务状态
     * @param integer $TaskId 任务唯一id。在URL方式时提交请求后会返回一个jobid，后续查询该url的结果时使用这个jobid进行查询。
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
        if (array_key_exists("AudioResult",$param) and $param["AudioResult"] !== null) {
            $this->AudioResult = new StandardAudioResult();
            $this->AudioResult->deserialize($param["AudioResult"]);
        }

        if (array_key_exists("ImageResult",$param) and $param["ImageResult"] !== null) {
            $this->ImageResult = new StandardImageResult();
            $this->ImageResult->deserialize($param["ImageResult"]);
        }

        if (array_key_exists("VideoResult",$param) and $param["VideoResult"] !== null) {
            $this->VideoResult = new StandardVideoResult();
            $this->VideoResult->deserialize($param["VideoResult"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

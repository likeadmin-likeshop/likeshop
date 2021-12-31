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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getStatus() 获取任务状态，取值有：
<li>PROCESSING：处理中：</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值有：
<li>PROCESSING：处理中：</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
 * @method integer getProgress() 获取任务进度，取值为：0~100。
 * @method void setProgress(integer $Progress) 设置任务进度，取值为：0~100。
 * @method integer getErrCode() 获取错误码。
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码。
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getErrMsg() 获取错误信息。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息。
 * @method string getTaskType() 获取任务类型，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>
 * @method void setTaskType(string $TaskType) 设置任务类型，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>
 * @method VideoEditProjectOutput getVideoEditProjectOutput() 获取导出项目输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoEditProjectOutput(VideoEditProjectOutput $VideoEditProjectOutput) 设置导出项目输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，格式按照 ISO 8601 标准表示。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式按照 ISO 8601 标准表示。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 任务状态，取值有：
<li>PROCESSING：处理中：</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
     */
    public $Status;

    /**
     * @var integer 任务进度，取值为：0~100。
     */
    public $Progress;

    /**
     * @var integer 错误码。
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $ErrMsg;

    /**
     * @var string 任务类型，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>
     */
    public $TaskType;

    /**
     * @var VideoEditProjectOutput 导出项目输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoEditProjectOutput;

    /**
     * @var string 创建时间，格式按照 ISO 8601 标准表示。
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态，取值有：
<li>PROCESSING：处理中：</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
     * @param integer $Progress 任务进度，取值为：0~100。
     * @param integer $ErrCode 错误码。
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $ErrMsg 错误信息。
     * @param string $TaskType 任务类型，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>
     * @param VideoEditProjectOutput $VideoEditProjectOutput 导出项目输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，格式按照 ISO 8601 标准表示。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("VideoEditProjectOutput",$param) and $param["VideoEditProjectOutput"] !== null) {
            $this->VideoEditProjectOutput = new VideoEditProjectOutput();
            $this->VideoEditProjectOutput->deserialize($param["VideoEditProjectOutput"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

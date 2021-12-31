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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频拆条任务信息。
 *
 * @method SplitMediaTaskInput getInput() 获取视频拆条任务输入信息。
 * @method void setInput(SplitMediaTaskInput $Input) 设置视频拆条任务输入信息。
 * @method TaskOutputMediaInfo getOutput() 获取视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(TaskOutputMediaInfo $Output) 设置视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcedureTaskId() 获取若发起视频拆条任务时指定了视频处理流程，则该字段为流程任务 ID。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置若发起视频拆条任务时指定了视频处理流程，则该字段为流程任务 ID。
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput 视频拆条任务输入信息。
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo 视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 若发起视频拆条任务时指定了视频处理流程，则该字段为流程任务 ID。
     */
    public $ProcedureTaskId;

    /**
     * @param SplitMediaTaskInput $Input 视频拆条任务输入信息。
     * @param TaskOutputMediaInfo $Output 视频拆条任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcedureTaskId 若发起视频拆条任务时指定了视频处理流程，则该字段为流程任务 ID。
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SplitMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TaskOutputMediaInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }
    }
}

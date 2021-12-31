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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFaceMorphJob返回参数结构体
 *
 * @method string getJobStatus() 获取当前任务状态：排队中、处理中、处理失败或者处理完成
 * @method void setJobStatus(string $JobStatus) 设置当前任务状态：排队中、处理中、处理失败或者处理完成
 * @method FaceMorphOutput getFaceMorphOutput() 获取人像渐变输出的结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceMorphOutput(FaceMorphOutput $FaceMorphOutput) 设置人像渐变输出的结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryFaceMorphJobResponse extends AbstractModel
{
    /**
     * @var string 当前任务状态：排队中、处理中、处理失败或者处理完成
     */
    public $JobStatus;

    /**
     * @var FaceMorphOutput 人像渐变输出的结果信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceMorphOutput;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobStatus 当前任务状态：排队中、处理中、处理失败或者处理完成
     * @param FaceMorphOutput $FaceMorphOutput 人像渐变输出的结果信息
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
        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("FaceMorphOutput",$param) and $param["FaceMorphOutput"] !== null) {
            $this->FaceMorphOutput = new FaceMorphOutput();
            $this->FaceMorphOutput->deserialize($param["FaceMorphOutput"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

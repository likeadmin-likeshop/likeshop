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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTask返回参数结构体
 *
 * @method string getContent() 获取作文识别文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置作文识别文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method CorrectData getCorrectData() 获取整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrectData(CorrectData $CorrectData) 设置整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，“Progressing”: 处理中（此时无结果返回）、“Finished”: 处理完成
 * @method void setStatus(string $Status) 设置任务状态，“Progressing”: 处理中（此时无结果返回）、“Finished”: 处理完成
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskResponse extends AbstractModel
{
    /**
     * @var string 作文识别文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var CorrectData 整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorrectData;

    /**
     * @var string 任务状态，“Progressing”: 处理中（此时无结果返回）、“Finished”: 处理完成
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Content 作文识别文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param CorrectData $CorrectData 整体的批改结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，“Progressing”: 处理中（此时无结果返回）、“Finished”: 处理完成
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CorrectData",$param) and $param["CorrectData"] !== null) {
            $this->CorrectData = new CorrectData();
            $this->CorrectData->deserialize($param["CorrectData"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

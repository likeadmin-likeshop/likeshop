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
 * 图像识别批改接口返回的作文文本信息或批改信息
 *
 * @method string getContent() 获取作文内容
 * @method void setContent(string $Content) 设置作文内容
 * @method CorrectData getCorrectData() 获取批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrectData(CorrectData $CorrectData) 设置批改结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取图像识别唯一标识，一次识别一个 SessionId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置图像识别唯一标识，一次识别一个 SessionId
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompostionContext extends AbstractModel
{
    /**
     * @var string 作文内容
     */
    public $Content;

    /**
     * @var CorrectData 批改结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorrectData;

    /**
     * @var string 任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 图像识别唯一标识，一次识别一个 SessionId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @param string $Content 作文内容
     * @param CorrectData $CorrectData 批改结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务 id，用于查询接口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 图像识别唯一标识，一次识别一个 SessionId
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}

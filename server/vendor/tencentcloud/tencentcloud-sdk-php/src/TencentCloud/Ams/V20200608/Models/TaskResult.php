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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建任务时的返回结果
 *
 * @method string getDataId() 获取请求时传入的DataId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置请求时传入的DataId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取TaskId，任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置TaskId，任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取错误码。如果code为OK，则表示创建成功，其他则参考公共错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置错误码。如果code为OK，则表示创建成功，其他则参考公共错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取如果错误，该字段表示错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置如果错误，该字段表示错误详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string 请求时传入的DataId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string TaskId，任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 错误码。如果code为OK，则表示创建成功，其他则参考公共错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 如果错误，该字段表示错误详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $DataId 请求时传入的DataId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId TaskId，任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 错误码。如果code为OK，则表示创建成功，其他则参考公共错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 如果错误，该字段表示错误详情
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

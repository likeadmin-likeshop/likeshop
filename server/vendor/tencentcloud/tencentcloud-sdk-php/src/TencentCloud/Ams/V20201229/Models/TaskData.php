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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务数据
 *
 * @method string getDataId() 获取输入的数据ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置输入的数据ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getStatus() 获取状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 * @method void setStatus(string $Status) 设置状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 * @method string getName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取业务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置业务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取建议。可选：Pass，Block，Review
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置建议。可选：Pass，Block，Review
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInfo getMediaInfo() 获取输入信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置输入信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取任务违规标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置任务违规标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间（ iso 8601 格式）
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间（ iso 8601 格式）
 * @method string getUpdatedAt() 获取更新时间（ iso 8601 格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间（ iso 8601 格式）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskData extends AbstractModel
{
    /**
     * @var string 输入的数据ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
     */
    public $Status;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 业务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 建议。可选：Pass，Block，Review
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var MediaInfo 输入信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaInfo;

    /**
     * @var array 任务违规标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 创建时间（ iso 8601 格式）
     */
    public $CreatedAt;

    /**
     * @var string 更新时间（ iso 8601 格式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $DataId 输入的数据ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
     * @param string $Status 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
     * @param string $Name 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType 业务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 建议。可选：Pass，Block，Review
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInfo $MediaInfo 输入信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 任务违规标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间（ iso 8601 格式）
     * @param string $UpdatedAt 更新时间（ iso 8601 格式）
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}

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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能识别任务结果信息
 *
 * @method string getTaskId() 获取编辑任务 ID。
 * @method void setTaskId(string $TaskId) 设置编辑任务 ID。
 * @method integer getStatus() 获取编辑任务状态。 
1：执行中；2：已完成。
 * @method void setStatus(integer $Status) 设置编辑任务状态。 
1：执行中；2：已完成。
 * @method TagTaskResult getTagTaskResult() 获取视频标签识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagTaskResult(TagTaskResult $TagTaskResult) 设置视频标签识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassificationTaskResult getClassificationTaskResult() 获取视频分类识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationTaskResult(ClassificationTaskResult $ClassificationTaskResult) 设置视频分类识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StripTaskResult getStripTaskResult() 获取智能拆条结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStripTaskResult(StripTaskResult $StripTaskResult) 设置智能拆条结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HighlightsTaskResult getHighlightsTaskResult() 获取智能集锦结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlightsTaskResult(HighlightsTaskResult $HighlightsTaskResult) 设置智能集锦结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CoverTaskResult getCoverTaskResult() 获取智能封面结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverTaskResult(CoverTaskResult $CoverTaskResult) 设置智能封面结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OpeningEndingTaskResult getOpeningEndingTaskResult() 获取片头片尾识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpeningEndingTaskResult(OpeningEndingTaskResult $OpeningEndingTaskResult) 设置片头片尾识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EditingTaskResult extends AbstractModel
{
    /**
     * @var string 编辑任务 ID。
     */
    public $TaskId;

    /**
     * @var integer 编辑任务状态。 
1：执行中；2：已完成。
     */
    public $Status;

    /**
     * @var TagTaskResult 视频标签识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagTaskResult;

    /**
     * @var ClassificationTaskResult 视频分类识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationTaskResult;

    /**
     * @var StripTaskResult 智能拆条结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StripTaskResult;

    /**
     * @var HighlightsTaskResult 智能集锦结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighlightsTaskResult;

    /**
     * @var CoverTaskResult 智能封面结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverTaskResult;

    /**
     * @var OpeningEndingTaskResult 片头片尾识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpeningEndingTaskResult;

    /**
     * @param string $TaskId 编辑任务 ID。
     * @param integer $Status 编辑任务状态。 
1：执行中；2：已完成。
     * @param TagTaskResult $TagTaskResult 视频标签识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassificationTaskResult $ClassificationTaskResult 视频分类识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StripTaskResult $StripTaskResult 智能拆条结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HighlightsTaskResult $HighlightsTaskResult 智能集锦结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CoverTaskResult $CoverTaskResult 智能封面结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpeningEndingTaskResult $OpeningEndingTaskResult 片头片尾识别结果。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagTaskResult",$param) and $param["TagTaskResult"] !== null) {
            $this->TagTaskResult = new TagTaskResult();
            $this->TagTaskResult->deserialize($param["TagTaskResult"]);
        }

        if (array_key_exists("ClassificationTaskResult",$param) and $param["ClassificationTaskResult"] !== null) {
            $this->ClassificationTaskResult = new ClassificationTaskResult();
            $this->ClassificationTaskResult->deserialize($param["ClassificationTaskResult"]);
        }

        if (array_key_exists("StripTaskResult",$param) and $param["StripTaskResult"] !== null) {
            $this->StripTaskResult = new StripTaskResult();
            $this->StripTaskResult->deserialize($param["StripTaskResult"]);
        }

        if (array_key_exists("HighlightsTaskResult",$param) and $param["HighlightsTaskResult"] !== null) {
            $this->HighlightsTaskResult = new HighlightsTaskResult();
            $this->HighlightsTaskResult->deserialize($param["HighlightsTaskResult"]);
        }

        if (array_key_exists("CoverTaskResult",$param) and $param["CoverTaskResult"] !== null) {
            $this->CoverTaskResult = new CoverTaskResult();
            $this->CoverTaskResult->deserialize($param["CoverTaskResult"]);
        }

        if (array_key_exists("OpeningEndingTaskResult",$param) and $param["OpeningEndingTaskResult"] !== null) {
            $this->OpeningEndingTaskResult = new OpeningEndingTaskResult();
            $this->OpeningEndingTaskResult->deserialize($param["OpeningEndingTaskResult"]);
        }
    }
}

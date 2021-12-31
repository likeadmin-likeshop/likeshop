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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频处理任务信息
 *
 * @method string getTaskId() 获取视频处理任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频处理任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取已弃用，请使用各个具体任务的 ErrCode。
 * @method void setErrCode(integer $ErrCode) 设置已弃用，请使用各个具体任务的 ErrCode。
 * @method string getMessage() 获取已弃用，请使用各个具体任务的 Message。
 * @method void setMessage(string $Message) 设置已弃用，请使用各个具体任务的 Message。
 * @method MediaInputInfo getInputInfo() 获取视频处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置视频处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMediaProcessResultSet() 获取视频处理任务的执行状态与结果。
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) 设置视频处理任务的执行状态与结果。
 * @method array getAiContentReviewResultSet() 获取视频内容审核任务的执行状态与结果。
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) 设置视频内容审核任务的执行状态与结果。
 * @method array getAiAnalysisResultSet() 获取视频内容分析任务的执行状态与结果。
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) 设置视频内容分析任务的执行状态与结果。
 * @method array getAiRecognitionResultSet() 获取视频内容识别任务的执行状态与结果。
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) 设置视频内容识别任务的执行状态与结果。
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var string 视频处理任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 已弃用，请使用各个具体任务的 ErrCode。
     */
    public $ErrCode;

    /**
     * @var string 已弃用，请使用各个具体任务的 Message。
     */
    public $Message;

    /**
     * @var MediaInputInfo 视频处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var MediaMetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array 视频处理任务的执行状态与结果。
     */
    public $MediaProcessResultSet;

    /**
     * @var array 视频内容审核任务的执行状态与结果。
     */
    public $AiContentReviewResultSet;

    /**
     * @var array 视频内容分析任务的执行状态与结果。
     */
    public $AiAnalysisResultSet;

    /**
     * @var array 视频内容识别任务的执行状态与结果。
     */
    public $AiRecognitionResultSet;

    /**
     * @param string $TaskId 视频处理任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param integer $ErrCode 已弃用，请使用各个具体任务的 ErrCode。
     * @param string $Message 已弃用，请使用各个具体任务的 Message。
     * @param MediaInputInfo $InputInfo 视频处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MediaProcessResultSet 视频处理任务的执行状态与结果。
     * @param array $AiContentReviewResultSet 视频内容审核任务的执行状态与结果。
     * @param array $AiAnalysisResultSet 视频内容分析任务的执行状态与结果。
     * @param array $AiRecognitionResultSet 视频内容识别任务的执行状态与结果。
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new MediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("AiContentReviewResultSet",$param) and $param["AiContentReviewResultSet"] !== null) {
            $this->AiContentReviewResultSet = [];
            foreach ($param["AiContentReviewResultSet"] as $key => $value){
                $obj = new AiContentReviewResult();
                $obj->deserialize($value);
                array_push($this->AiContentReviewResultSet, $obj);
            }
        }

        if (array_key_exists("AiAnalysisResultSet",$param) and $param["AiAnalysisResultSet"] !== null) {
            $this->AiAnalysisResultSet = [];
            foreach ($param["AiAnalysisResultSet"] as $key => $value){
                $obj = new AiAnalysisResult();
                $obj->deserialize($value);
                array_push($this->AiAnalysisResultSet, $obj);
            }
        }

        if (array_key_exists("AiRecognitionResultSet",$param) and $param["AiRecognitionResultSet"] !== null) {
            $this->AiRecognitionResultSet = [];
            foreach ($param["AiRecognitionResultSet"] as $key => $value){
                $obj = new AiRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AiRecognitionResultSet, $obj);
            }
        }
    }
}

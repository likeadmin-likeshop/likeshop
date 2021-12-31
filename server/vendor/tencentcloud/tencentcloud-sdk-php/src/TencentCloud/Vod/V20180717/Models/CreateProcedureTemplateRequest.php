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
 * CreateProcedureTemplate请求参数结构体
 *
 * @method string getName() 获取任务流名字（支持中文，不超过20个字）。
 * @method void setName(string $Name) 设置任务流名字（支持中文，不超过20个字）。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method MediaProcessTaskInput getMediaProcessTask() 获取视频处理类型任务参数。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置视频处理类型任务参数。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取AI 智能内容审核类型任务参数。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置AI 智能内容审核类型任务参数。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取AI 智能内容分析类型任务参数。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置AI 智能内容分析类型任务参数。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取AI 内容识别类型任务参数。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置AI 内容识别类型任务参数。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class CreateProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string 任务流名字（支持中文，不超过20个字）。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput 视频处理类型任务参数。
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput AI 智能内容审核类型任务参数。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput AI 智能内容分析类型任务参数。
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput AI 内容识别类型任务参数。
     */
    public $AiRecognitionTask;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $Name 任务流名字（支持中文，不超过20个字）。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param MediaProcessTaskInput $MediaProcessTask 视频处理类型任务参数。
     * @param AiContentReviewTaskInput $AiContentReviewTask AI 智能内容审核类型任务参数。
     * @param AiAnalysisTaskInput $AiAnalysisTask AI 智能内容分析类型任务参数。
     * @param AiRecognitionTaskInput $AiRecognitionTask AI 内容识别类型任务参数。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

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
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoTask返回参数结构体
 *
 * @method string getStatus() 获取任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
 * @method void setStatus(string $Status) 设置任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
 * @method string getBeginProcessTime() 获取任务开始执行的时间，采用 ISO 日期格式。
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置任务开始执行的时间，采用 ISO 日期格式。
 * @method string getFinishTime() 获取任务执行完毕的时间，采用 ISO 日期格式。
 * @method void setFinishTime(string $FinishTime) 设置任务执行完毕的时间，采用 ISO 日期格式。
 * @method VodPornReviewResult getPornResult() 获取视频内容审核智能画面鉴黄任务的查询结果。
 * @method void setPornResult(VodPornReviewResult $PornResult) 设置视频内容审核智能画面鉴黄任务的查询结果。
 * @method VodTerrorismReviewResult getTerrorismResult() 获取视频内容审核智能画面鉴恐任务的查询结果。
 * @method void setTerrorismResult(VodTerrorismReviewResult $TerrorismResult) 设置视频内容审核智能画面鉴恐任务的查询结果。
 * @method VodPoliticalReviewResult getPoliticalResult() 获取视频内容审核智能画面鉴政任务的查询结果。
 * @method void setPoliticalResult(VodPoliticalReviewResult $PoliticalResult) 设置视频内容审核智能画面鉴政任务的查询结果。
 * @method VodPoliticalOcrReviewResult getPoliticalOcrResult() 获取视频内容审核 Ocr 文字鉴政任务的查询结果。
 * @method void setPoliticalOcrResult(VodPoliticalOcrReviewResult $PoliticalOcrResult) 设置视频内容审核 Ocr 文字鉴政任务的查询结果。
 * @method VodPornAsrReviewResult getPornAsrResult() 获取视频内容审核 Asr 文字鉴黄任务的查询结果。
 * @method void setPornAsrResult(VodPornAsrReviewResult $PornAsrResult) 设置视频内容审核 Asr 文字鉴黄任务的查询结果。
 * @method VodPoliticalAsrReviewResult getPoliticalAsrResult() 获取视频内容审核 Asr 文字鉴政任务的查询结果。
 * @method void setPoliticalAsrResult(VodPoliticalAsrReviewResult $PoliticalAsrResult) 设置视频内容审核 Asr 文字鉴政任务的查询结果。
 * @method VodPornOcrResult getPornOcrResult() 获取视频内容审核 Ocr 文字鉴黄任务的查询结果。
 * @method void setPornOcrResult(VodPornOcrResult $PornOcrResult) 设置视频内容审核 Ocr 文字鉴黄任务的查询结果。
 * @method VodMetaData getMetaData() 获取原始视频的元信息。
 * @method void setMetaData(VodMetaData $MetaData) 设置原始视频的元信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoTaskResponse extends AbstractModel
{
    /**
     * @var string 任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
     */
    public $Status;

    /**
     * @var string 任务开始执行的时间，采用 ISO 日期格式。
     */
    public $BeginProcessTime;

    /**
     * @var string 任务执行完毕的时间，采用 ISO 日期格式。
     */
    public $FinishTime;

    /**
     * @var VodPornReviewResult 视频内容审核智能画面鉴黄任务的查询结果。
     */
    public $PornResult;

    /**
     * @var VodTerrorismReviewResult 视频内容审核智能画面鉴恐任务的查询结果。
     */
    public $TerrorismResult;

    /**
     * @var VodPoliticalReviewResult 视频内容审核智能画面鉴政任务的查询结果。
     */
    public $PoliticalResult;

    /**
     * @var VodPoliticalOcrReviewResult 视频内容审核 Ocr 文字鉴政任务的查询结果。
     */
    public $PoliticalOcrResult;

    /**
     * @var VodPornAsrReviewResult 视频内容审核 Asr 文字鉴黄任务的查询结果。
     */
    public $PornAsrResult;

    /**
     * @var VodPoliticalAsrReviewResult 视频内容审核 Asr 文字鉴政任务的查询结果。
     */
    public $PoliticalAsrResult;

    /**
     * @var VodPornOcrResult 视频内容审核 Ocr 文字鉴黄任务的查询结果。
     */
    public $PornOcrResult;

    /**
     * @var VodMetaData 原始视频的元信息。
     */
    public $MetaData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
     * @param string $BeginProcessTime 任务开始执行的时间，采用 ISO 日期格式。
     * @param string $FinishTime 任务执行完毕的时间，采用 ISO 日期格式。
     * @param VodPornReviewResult $PornResult 视频内容审核智能画面鉴黄任务的查询结果。
     * @param VodTerrorismReviewResult $TerrorismResult 视频内容审核智能画面鉴恐任务的查询结果。
     * @param VodPoliticalReviewResult $PoliticalResult 视频内容审核智能画面鉴政任务的查询结果。
     * @param VodPoliticalOcrReviewResult $PoliticalOcrResult 视频内容审核 Ocr 文字鉴政任务的查询结果。
     * @param VodPornAsrReviewResult $PornAsrResult 视频内容审核 Asr 文字鉴黄任务的查询结果。
     * @param VodPoliticalAsrReviewResult $PoliticalAsrResult 视频内容审核 Asr 文字鉴政任务的查询结果。
     * @param VodPornOcrResult $PornOcrResult 视频内容审核 Ocr 文字鉴黄任务的查询结果。
     * @param VodMetaData $MetaData 原始视频的元信息。
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

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("PornResult",$param) and $param["PornResult"] !== null) {
            $this->PornResult = new VodPornReviewResult();
            $this->PornResult->deserialize($param["PornResult"]);
        }

        if (array_key_exists("TerrorismResult",$param) and $param["TerrorismResult"] !== null) {
            $this->TerrorismResult = new VodTerrorismReviewResult();
            $this->TerrorismResult->deserialize($param["TerrorismResult"]);
        }

        if (array_key_exists("PoliticalResult",$param) and $param["PoliticalResult"] !== null) {
            $this->PoliticalResult = new VodPoliticalReviewResult();
            $this->PoliticalResult->deserialize($param["PoliticalResult"]);
        }

        if (array_key_exists("PoliticalOcrResult",$param) and $param["PoliticalOcrResult"] !== null) {
            $this->PoliticalOcrResult = new VodPoliticalOcrReviewResult();
            $this->PoliticalOcrResult->deserialize($param["PoliticalOcrResult"]);
        }

        if (array_key_exists("PornAsrResult",$param) and $param["PornAsrResult"] !== null) {
            $this->PornAsrResult = new VodPornAsrReviewResult();
            $this->PornAsrResult->deserialize($param["PornAsrResult"]);
        }

        if (array_key_exists("PoliticalAsrResult",$param) and $param["PoliticalAsrResult"] !== null) {
            $this->PoliticalAsrResult = new VodPoliticalAsrReviewResult();
            $this->PoliticalAsrResult->deserialize($param["PoliticalAsrResult"]);
        }

        if (array_key_exists("PornOcrResult",$param) and $param["PornOcrResult"] !== null) {
            $this->PornOcrResult = new VodPornOcrResult();
            $this->PornOcrResult->deserialize($param["PornOcrResult"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new VodMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

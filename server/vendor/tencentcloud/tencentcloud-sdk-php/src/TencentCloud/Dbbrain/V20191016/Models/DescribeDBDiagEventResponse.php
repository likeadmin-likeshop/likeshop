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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagEvent返回参数结构体
 *
 * @method string getDiagItem() 获取诊断项。
 * @method void setDiagItem(string $DiagItem) 设置诊断项。
 * @method string getDiagType() 获取诊断类型。
 * @method void setDiagType(string $DiagType) 设置诊断类型。
 * @method integer getEventId() 获取事件 ID 。
 * @method void setEventId(integer $EventId) 设置事件 ID 。
 * @method string getExplanation() 获取事件详情。
 * @method void setExplanation(string $Explanation) 设置事件详情。
 * @method string getOutline() 获取概要。
 * @method void setOutline(string $Outline) 设置概要。
 * @method string getProblem() 获取诊断出的问题。
 * @method void setProblem(string $Problem) 设置诊断出的问题。
 * @method integer getSeverity() 获取严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method void setSeverity(integer $Severity) 设置严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getSuggestions() 获取建议。
 * @method void setSuggestions(string $Suggestions) 设置建议。
 * @method string getMetric() 获取保留字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetric(string $Metric) 设置保留字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBDiagEventResponse extends AbstractModel
{
    /**
     * @var string 诊断项。
     */
    public $DiagItem;

    /**
     * @var string 诊断类型。
     */
    public $DiagType;

    /**
     * @var integer 事件 ID 。
     */
    public $EventId;

    /**
     * @var string 事件详情。
     */
    public $Explanation;

    /**
     * @var string 概要。
     */
    public $Outline;

    /**
     * @var string 诊断出的问题。
     */
    public $Problem;

    /**
     * @var integer 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     */
    public $Severity;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 建议。
     */
    public $Suggestions;

    /**
     * @var string 保留字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metric;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DiagItem 诊断项。
     * @param string $DiagType 诊断类型。
     * @param integer $EventId 事件 ID 。
     * @param string $Explanation 事件详情。
     * @param string $Outline 概要。
     * @param string $Problem 诊断出的问题。
     * @param integer $Severity 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     * @param string $StartTime 开始时间
     * @param string $Suggestions 建议。
     * @param string $Metric 保留字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间。
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
        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Explanation",$param) and $param["Explanation"] !== null) {
            $this->Explanation = $param["Explanation"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("Problem",$param) and $param["Problem"] !== null) {
            $this->Problem = $param["Problem"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Suggestions",$param) and $param["Suggestions"] !== null) {
            $this->Suggestions = $param["Suggestions"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

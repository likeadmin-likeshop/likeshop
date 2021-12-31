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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStructCompareData返回参数结构体
 *
 * @method string getPolicyId() 获取保单号
 * @method void setPolicyId(string $PolicyId) 设置保单号
 * @method string getMainTaskId() 获取主任务号
 * @method void setMainTaskId(string $MainTaskId) 设置主任务号
 * @method string getCustomerId() 获取客户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerId(string $CustomerId) 设置客户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerName() 获取客户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReviewTime() 获取复核时间
 * @method void setReviewTime(string $ReviewTime) 设置复核时间
 * @method string getMachineResult() 获取算法识别结果
 * @method void setMachineResult(string $MachineResult) 设置算法识别结果
 * @method string getManualResult() 获取人工复核结果
 * @method void setManualResult(string $ManualResult) 设置人工复核结果
 * @method CompareMetricsData getMetrics() 获取结构化对比指标数据
 * @method void setMetrics(CompareMetricsData $Metrics) 设置结构化对比指标数据
 * @method string getNewItems() 获取新增项
 * @method void setNewItems(string $NewItems) 设置新增项
 * @method string getModifyItems() 获取修改项
 * @method void setModifyItems(string $ModifyItems) 设置修改项
 * @method string getSubTaskId() 获取子任务号
 * @method void setSubTaskId(string $SubTaskId) 设置子任务号
 * @method array getAllTasks() 获取所有的子任务
 * @method void setAllTasks(array $AllTasks) 设置所有的子任务
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStructCompareDataResponse extends AbstractModel
{
    /**
     * @var string 保单号
     */
    public $PolicyId;

    /**
     * @var string 主任务号
     */
    public $MainTaskId;

    /**
     * @var string 客户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerName;

    /**
     * @var string 复核时间
     */
    public $ReviewTime;

    /**
     * @var string 算法识别结果
     */
    public $MachineResult;

    /**
     * @var string 人工复核结果
     */
    public $ManualResult;

    /**
     * @var CompareMetricsData 结构化对比指标数据
     */
    public $Metrics;

    /**
     * @var string 新增项
     */
    public $NewItems;

    /**
     * @var string 修改项
     */
    public $ModifyItems;

    /**
     * @var string 子任务号
     */
    public $SubTaskId;

    /**
     * @var array 所有的子任务
     */
    public $AllTasks;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PolicyId 保单号
     * @param string $MainTaskId 主任务号
     * @param string $CustomerId 客户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerName 客户姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReviewTime 复核时间
     * @param string $MachineResult 算法识别结果
     * @param string $ManualResult 人工复核结果
     * @param CompareMetricsData $Metrics 结构化对比指标数据
     * @param string $NewItems 新增项
     * @param string $ModifyItems 修改项
     * @param string $SubTaskId 子任务号
     * @param array $AllTasks 所有的子任务
     * @param string $TaskType 任务类型
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("MainTaskId",$param) and $param["MainTaskId"] !== null) {
            $this->MainTaskId = $param["MainTaskId"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("ReviewTime",$param) and $param["ReviewTime"] !== null) {
            $this->ReviewTime = $param["ReviewTime"];
        }

        if (array_key_exists("MachineResult",$param) and $param["MachineResult"] !== null) {
            $this->MachineResult = $param["MachineResult"];
        }

        if (array_key_exists("ManualResult",$param) and $param["ManualResult"] !== null) {
            $this->ManualResult = $param["ManualResult"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new CompareMetricsData();
            $this->Metrics->deserialize($param["Metrics"]);
        }

        if (array_key_exists("NewItems",$param) and $param["NewItems"] !== null) {
            $this->NewItems = $param["NewItems"];
        }

        if (array_key_exists("ModifyItems",$param) and $param["ModifyItems"] !== null) {
            $this->ModifyItems = $param["ModifyItems"];
        }

        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("AllTasks",$param) and $param["AllTasks"] !== null) {
            $this->AllTasks = [];
            foreach ($param["AllTasks"] as $key => $value){
                $obj = new ReviewDataTaskInfo();
                $obj->deserialize($value);
                array_push($this->AllTasks, $obj);
            }
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

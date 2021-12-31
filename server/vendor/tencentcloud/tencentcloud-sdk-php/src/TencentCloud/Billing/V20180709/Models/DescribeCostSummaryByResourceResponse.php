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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostSummaryByResource返回参数结构体
 *
 * @method integer getReady() 获取数据是否准备好，0未准备好，1准备好
 * @method void setReady(integer $Ready) 设置数据是否准备好，0未准备好，1准备好
 * @method ConsumptionSummaryTotal getTotal() 获取消耗详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(ConsumptionSummaryTotal $Total) 设置消耗详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConsumptionResourceSummaryConditionValue getConditionValue() 获取过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionValue(ConsumptionResourceSummaryConditionValue $ConditionValue) 设置过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordNum() 获取记录数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordNum(integer $RecordNum) 设置记录数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取资源消耗详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置资源消耗详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCostSummaryByResourceResponse extends AbstractModel
{
    /**
     * @var integer 数据是否准备好，0未准备好，1准备好
     */
    public $Ready;

    /**
     * @var ConsumptionSummaryTotal 消耗详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var ConsumptionResourceSummaryConditionValue 过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionValue;

    /**
     * @var integer 记录数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordNum;

    /**
     * @var array 资源消耗详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Ready 数据是否准备好，0未准备好，1准备好
     * @param ConsumptionSummaryTotal $Total 消耗详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConsumptionResourceSummaryConditionValue $ConditionValue 过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordNum 记录数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 资源消耗详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = new ConsumptionSummaryTotal();
            $this->Total->deserialize($param["Total"]);
        }

        if (array_key_exists("ConditionValue",$param) and $param["ConditionValue"] !== null) {
            $this->ConditionValue = new ConsumptionResourceSummaryConditionValue();
            $this->ConditionValue->deserialize($param["ConditionValue"]);
        }

        if (array_key_exists("RecordNum",$param) and $param["RecordNum"] !== null) {
            $this->RecordNum = $param["RecordNum"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ConsumptionResourceSummaryDataItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

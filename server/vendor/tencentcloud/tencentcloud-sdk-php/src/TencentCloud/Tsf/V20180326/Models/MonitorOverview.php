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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控概览对象
 *
 * @method string getInvocationCountOfDay() 获取近24小时调用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationCountOfDay(string $InvocationCountOfDay) 设置近24小时调用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvocationCount() 获取总调用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationCount(string $InvocationCount) 设置总调用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCountOfDay() 获取近24小时调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCountOfDay(string $ErrorCountOfDay) 设置近24小时调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCount() 获取总调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCount(string $ErrorCount) 设置总调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuccessRatioOfDay() 获取近24小时调用成功率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessRatioOfDay(string $SuccessRatioOfDay) 设置近24小时调用成功率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuccessRatio() 获取总调用成功率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessRatio(string $SuccessRatio) 设置总调用成功率
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorOverview extends AbstractModel
{
    /**
     * @var string 近24小时调用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationCountOfDay;

    /**
     * @var string 总调用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationCount;

    /**
     * @var string 近24小时调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCountOfDay;

    /**
     * @var string 总调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCount;

    /**
     * @var string 近24小时调用成功率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessRatioOfDay;

    /**
     * @var string 总调用成功率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessRatio;

    /**
     * @param string $InvocationCountOfDay 近24小时调用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvocationCount 总调用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCountOfDay 近24小时调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCount 总调用错误数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuccessRatioOfDay 近24小时调用成功率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuccessRatio 总调用成功率
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
        if (array_key_exists("InvocationCountOfDay",$param) and $param["InvocationCountOfDay"] !== null) {
            $this->InvocationCountOfDay = $param["InvocationCountOfDay"];
        }

        if (array_key_exists("InvocationCount",$param) and $param["InvocationCount"] !== null) {
            $this->InvocationCount = $param["InvocationCount"];
        }

        if (array_key_exists("ErrorCountOfDay",$param) and $param["ErrorCountOfDay"] !== null) {
            $this->ErrorCountOfDay = $param["ErrorCountOfDay"];
        }

        if (array_key_exists("ErrorCount",$param) and $param["ErrorCount"] !== null) {
            $this->ErrorCount = $param["ErrorCount"];
        }

        if (array_key_exists("SuccessRatioOfDay",$param) and $param["SuccessRatioOfDay"] !== null) {
            $this->SuccessRatioOfDay = $param["SuccessRatioOfDay"];
        }

        if (array_key_exists("SuccessRatio",$param) and $param["SuccessRatio"] !== null) {
            $this->SuccessRatio = $param["SuccessRatio"];
        }
    }
}

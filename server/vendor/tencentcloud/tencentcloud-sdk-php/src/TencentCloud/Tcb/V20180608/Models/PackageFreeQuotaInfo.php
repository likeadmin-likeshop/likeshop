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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费免费额度
 *
 * @method string getResourceType() 获取资源类型
<li>COS</li>
<li>CDN</li>
<li>FLEXDB</li>
<li>SCF</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
<li>COS</li>
<li>CDN</li>
<li>FLEXDB</li>
<li>SCF</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceMetric() 获取资源指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceMetric(string $ResourceMetric) 设置资源指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFreeQuota() 获取资源指标免费量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeQuota(integer $FreeQuota) 设置资源指标免费量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricUnit() 获取指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricUnit(string $MetricUnit) 设置指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeductType() 获取免费量抵扣周期
<li>sum-month:以月为单位抵扣</li>
<li>sum-day:以天为单位抵扣</li>
<li>totalize:总容量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeductType(string $DeductType) 设置免费量抵扣周期
<li>sum-month:以月为单位抵扣</li>
<li>sum-day:以天为单位抵扣</li>
<li>totalize:总容量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFreeQuotaType() 获取免费量类型
<li>basic:通用量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeQuotaType(string $FreeQuotaType) 设置免费量类型
<li>basic:通用量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PackageFreeQuotaInfo extends AbstractModel
{
    /**
     * @var string 资源类型
<li>COS</li>
<li>CDN</li>
<li>FLEXDB</li>
<li>SCF</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 资源指标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceMetric;

    /**
     * @var integer 资源指标免费量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeQuota;

    /**
     * @var string 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricUnit;

    /**
     * @var string 免费量抵扣周期
<li>sum-month:以月为单位抵扣</li>
<li>sum-day:以天为单位抵扣</li>
<li>totalize:总容量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeductType;

    /**
     * @var string 免费量类型
<li>basic:通用量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeQuotaType;

    /**
     * @param string $ResourceType 资源类型
<li>COS</li>
<li>CDN</li>
<li>FLEXDB</li>
<li>SCF</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceMetric 资源指标名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FreeQuota 资源指标免费量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricUnit 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeductType 免费量抵扣周期
<li>sum-month:以月为单位抵扣</li>
<li>sum-day:以天为单位抵扣</li>
<li>totalize:总容量抵扣</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FreeQuotaType 免费量类型
<li>basic:通用量抵扣</li>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceMetric",$param) and $param["ResourceMetric"] !== null) {
            $this->ResourceMetric = $param["ResourceMetric"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("MetricUnit",$param) and $param["MetricUnit"] !== null) {
            $this->MetricUnit = $param["MetricUnit"];
        }

        if (array_key_exists("DeductType",$param) and $param["DeductType"] !== null) {
            $this->DeductType = $param["DeductType"];
        }

        if (array_key_exists("FreeQuotaType",$param) and $param["FreeQuotaType"] !== null) {
            $this->FreeQuotaType = $param["FreeQuotaType"];
        }
    }
}

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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList策略条件
 *
 * @method string getPolicyViewName() 获取策略视图名称
 * @method void setPolicyViewName(string $PolicyViewName) 设置策略视图名称
 * @method array getEventMetrics() 获取事件告警条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventMetrics(array $EventMetrics) 设置事件告警条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportMultiRegion() 获取是否支持多地域
 * @method void setIsSupportMultiRegion(boolean $IsSupportMultiRegion) 设置是否支持多地域
 * @method array getMetrics() 获取指标告警条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetrics(array $Metrics) 设置指标告警条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取策略类型名称
 * @method void setName(string $Name) 设置策略类型名称
 * @method integer getSortId() 获取排序id
 * @method void setSortId(integer $SortId) 设置排序id
 * @method boolean getSupportDefault() 获取是否支持默认策略
 * @method void setSupportDefault(boolean $SupportDefault) 设置是否支持默认策略
 * @method array getSupportRegions() 获取支持该策略类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRegions(array $SupportRegions) 设置支持该策略类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyConditionListCondition extends AbstractModel
{
    /**
     * @var string 策略视图名称
     */
    public $PolicyViewName;

    /**
     * @var array 事件告警条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventMetrics;

    /**
     * @var boolean 是否支持多地域
     */
    public $IsSupportMultiRegion;

    /**
     * @var array 指标告警条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metrics;

    /**
     * @var string 策略类型名称
     */
    public $Name;

    /**
     * @var integer 排序id
     */
    public $SortId;

    /**
     * @var boolean 是否支持默认策略
     */
    public $SupportDefault;

    /**
     * @var array 支持该策略类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRegions;

    /**
     * @param string $PolicyViewName 策略视图名称
     * @param array $EventMetrics 事件告警条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportMultiRegion 是否支持多地域
     * @param array $Metrics 指标告警条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 策略类型名称
     * @param integer $SortId 排序id
     * @param boolean $SupportDefault 是否支持默认策略
     * @param array $SupportRegions 支持该策略类型的地域列表
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
        if (array_key_exists("PolicyViewName",$param) and $param["PolicyViewName"] !== null) {
            $this->PolicyViewName = $param["PolicyViewName"];
        }

        if (array_key_exists("EventMetrics",$param) and $param["EventMetrics"] !== null) {
            $this->EventMetrics = [];
            foreach ($param["EventMetrics"] as $key => $value){
                $obj = new DescribePolicyConditionListEventMetric();
                $obj->deserialize($value);
                array_push($this->EventMetrics, $obj);
            }
        }

        if (array_key_exists("IsSupportMultiRegion",$param) and $param["IsSupportMultiRegion"] !== null) {
            $this->IsSupportMultiRegion = $param["IsSupportMultiRegion"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new DescribePolicyConditionListMetric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("SupportDefault",$param) and $param["SupportDefault"] !== null) {
            $this->SupportDefault = $param["SupportDefault"];
        }

        if (array_key_exists("SupportRegions",$param) and $param["SupportRegions"] !== null) {
            $this->SupportRegions = $param["SupportRegions"];
        }
    }
}

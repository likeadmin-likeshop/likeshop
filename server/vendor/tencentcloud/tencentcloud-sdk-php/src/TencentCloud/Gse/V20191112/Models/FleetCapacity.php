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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务部署组容量配置
 *
 * @method string getFleetId() 获取服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取服务器类型，如S3.LARGE8,S2.LARGE8,S5.LARGE8等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置服务器类型，如S3.LARGE8,S2.LARGE8,S5.LARGE8等
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceCounts getInstanceCounts() 获取服务器实例统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCounts(InstanceCounts $InstanceCounts) 设置服务器实例统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingInterval() 获取服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingInterval(integer $ScalingInterval) 设置服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
注意：此字段可能返回 null，表示取不到有效值。
 */
class FleetCapacity extends AbstractModel
{
    /**
     * @var string 服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 服务器类型，如S3.LARGE8,S2.LARGE8,S5.LARGE8等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var InstanceCounts 服务器实例统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCounts;

    /**
     * @var integer 服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingInterval;

    /**
     * @param string $FleetId 服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 服务器类型，如S3.LARGE8,S2.LARGE8,S5.LARGE8等
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceCounts $InstanceCounts 服务器实例统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingInterval 服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCounts",$param) and $param["InstanceCounts"] !== null) {
            $this->InstanceCounts = new InstanceCounts();
            $this->InstanceCounts->deserialize($param["InstanceCounts"]);
        }

        if (array_key_exists("ScalingInterval",$param) and $param["ScalingInterval"] !== null) {
            $this->ScalingInterval = $param["ScalingInterval"];
        }
    }
}

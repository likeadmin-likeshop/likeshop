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
 * DescribeBasicAlarmList返回的Alarms里的InstanceGroup
 *
 * @method integer getInstanceGroupId() 获取实例组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceGroupName() 获取实例组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupName(string $InstanceGroupName) 设置实例组名
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceGroup extends AbstractModel
{
    /**
     * @var integer 实例组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupId;

    /**
     * @var string 实例组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupName;

    /**
     * @param integer $InstanceGroupId 实例组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceGroupName 实例组名
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceGroupName",$param) and $param["InstanceGroupName"] !== null) {
            $this->InstanceGroupName = $param["InstanceGroupName"];
        }
    }
}

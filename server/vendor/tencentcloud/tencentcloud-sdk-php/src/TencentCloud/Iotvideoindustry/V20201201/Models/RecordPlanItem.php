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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制计划详情
 *
 * @method string getPlanId() 获取计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取计划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置计划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeTemplateId() 获取时间模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeTemplateId(string $TimeTemplateId) 设置时间模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeTemplateName() 获取时间模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeTemplateName(string $TimeTemplateName) 设置时间模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventId() 获取录制类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(integer $EventId) 设置录制类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDevices() 获取绑定的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevices(array $Devices) 设置绑定的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordPlanItem extends AbstractModel
{
    /**
     * @var string 计划ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string 计划名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 时间模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeTemplateId;

    /**
     * @var string 时间模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeTemplateName;

    /**
     * @var integer 录制类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var array 绑定的设备列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Devices;

    /**
     * @param string $PlanId 计划ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 计划名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeTemplateId 时间模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeTemplateName 时间模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventId 录制类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Devices 绑定的设备列表
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TimeTemplateId",$param) and $param["TimeTemplateId"] !== null) {
            $this->TimeTemplateId = $param["TimeTemplateId"];
        }

        if (array_key_exists("TimeTemplateName",$param) and $param["TimeTemplateName"] !== null) {
            $this->TimeTemplateName = $param["TimeTemplateName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = [];
            foreach ($param["Devices"] as $key => $value){
                $obj = new DeviceItem();
                $obj->deserialize($value);
                array_push($this->Devices, $obj);
            }
        }
    }
}

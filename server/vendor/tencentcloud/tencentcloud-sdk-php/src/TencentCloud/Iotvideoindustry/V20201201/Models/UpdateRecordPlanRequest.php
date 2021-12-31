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
 * UpdateRecordPlan请求参数结构体
 *
 * @method string getPlanId() 获取录制计划ID
 * @method void setPlanId(string $PlanId) 设置录制计划ID
 * @method string getName() 获取计划名称
 * @method void setName(string $Name) 设置计划名称
 * @method string getTimeTemplateId() 获取时间模板ID
 * @method void setTimeTemplateId(string $TimeTemplateId) 设置时间模板ID
 * @method integer getEventId() 获取触发录制的事件 1：全部
 * @method void setEventId(integer $EventId) 设置触发录制的事件 1：全部
 * @method array getDevices() 获取录制设备列表
 * @method void setDevices(array $Devices) 设置录制设备列表
 * @method integer getIsModifyDevices() 获取是否更新绑定此录制计划的设备列表
0 - 不更新
1 - 更新，如果Devices参数为空则清空设备列表，Devices不为空则全量更新设备列表
 * @method void setIsModifyDevices(integer $IsModifyDevices) 设置是否更新绑定此录制计划的设备列表
0 - 不更新
1 - 更新，如果Devices参数为空则清空设备列表，Devices不为空则全量更新设备列表
 */
class UpdateRecordPlanRequest extends AbstractModel
{
    /**
     * @var string 录制计划ID
     */
    public $PlanId;

    /**
     * @var string 计划名称
     */
    public $Name;

    /**
     * @var string 时间模板ID
     */
    public $TimeTemplateId;

    /**
     * @var integer 触发录制的事件 1：全部
     */
    public $EventId;

    /**
     * @var array 录制设备列表
     */
    public $Devices;

    /**
     * @var integer 是否更新绑定此录制计划的设备列表
0 - 不更新
1 - 更新，如果Devices参数为空则清空设备列表，Devices不为空则全量更新设备列表
     */
    public $IsModifyDevices;

    /**
     * @param string $PlanId 录制计划ID
     * @param string $Name 计划名称
     * @param string $TimeTemplateId 时间模板ID
     * @param integer $EventId 触发录制的事件 1：全部
     * @param array $Devices 录制设备列表
     * @param integer $IsModifyDevices 是否更新绑定此录制计划的设备列表
0 - 不更新
1 - 更新，如果Devices参数为空则清空设备列表，Devices不为空则全量更新设备列表
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

        if (array_key_exists("IsModifyDevices",$param) and $param["IsModifyDevices"] !== null) {
            $this->IsModifyDevices = $param["IsModifyDevices"];
        }
    }
}

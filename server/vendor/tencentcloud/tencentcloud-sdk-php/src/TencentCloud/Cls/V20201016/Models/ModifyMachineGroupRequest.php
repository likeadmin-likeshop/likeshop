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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMachineGroup请求参数结构体
 *
 * @method string getGroupId() 获取机器组ID
 * @method void setGroupId(string $GroupId) 设置机器组ID
 * @method string getGroupName() 获取机器组名称
 * @method void setGroupName(string $GroupName) 设置机器组名称
 * @method MachineGroupTypeInfo getMachineGroupType() 获取机器组类型
 * @method void setMachineGroupType(MachineGroupTypeInfo $MachineGroupType) 设置机器组类型
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method boolean getAutoUpdate() 获取是否开启机器组自动更新
 * @method void setAutoUpdate(boolean $AutoUpdate) 设置是否开启机器组自动更新
 * @method string getUpdateStartTime() 获取升级开始时间，建议业务低峰期升级LogListener
 * @method void setUpdateStartTime(string $UpdateStartTime) 设置升级开始时间，建议业务低峰期升级LogListener
 * @method string getUpdateEndTime() 获取升级结束时间，建议业务低峰期升级LogListener
 * @method void setUpdateEndTime(string $UpdateEndTime) 设置升级结束时间，建议业务低峰期升级LogListener
 * @method boolean getServiceLogging() 获取是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
 * @method void setServiceLogging(boolean $ServiceLogging) 设置是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
 */
class ModifyMachineGroupRequest extends AbstractModel
{
    /**
     * @var string 机器组ID
     */
    public $GroupId;

    /**
     * @var string 机器组名称
     */
    public $GroupName;

    /**
     * @var MachineGroupTypeInfo 机器组类型
     */
    public $MachineGroupType;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var boolean 是否开启机器组自动更新
     */
    public $AutoUpdate;

    /**
     * @var string 升级开始时间，建议业务低峰期升级LogListener
     */
    public $UpdateStartTime;

    /**
     * @var string 升级结束时间，建议业务低峰期升级LogListener
     */
    public $UpdateEndTime;

    /**
     * @var boolean 是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
     */
    public $ServiceLogging;

    /**
     * @param string $GroupId 机器组ID
     * @param string $GroupName 机器组名称
     * @param MachineGroupTypeInfo $MachineGroupType 机器组类型
     * @param array $Tags 标签列表
     * @param boolean $AutoUpdate 是否开启机器组自动更新
     * @param string $UpdateStartTime 升级开始时间，建议业务低峰期升级LogListener
     * @param string $UpdateEndTime 升级结束时间，建议业务低峰期升级LogListener
     * @param boolean $ServiceLogging 是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("MachineGroupType",$param) and $param["MachineGroupType"] !== null) {
            $this->MachineGroupType = new MachineGroupTypeInfo();
            $this->MachineGroupType->deserialize($param["MachineGroupType"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("UpdateStartTime",$param) and $param["UpdateStartTime"] !== null) {
            $this->UpdateStartTime = $param["UpdateStartTime"];
        }

        if (array_key_exists("UpdateEndTime",$param) and $param["UpdateEndTime"] !== null) {
            $this->UpdateEndTime = $param["UpdateEndTime"];
        }

        if (array_key_exists("ServiceLogging",$param) and $param["ServiceLogging"] !== null) {
            $this->ServiceLogging = $param["ServiceLogging"];
        }
    }
}

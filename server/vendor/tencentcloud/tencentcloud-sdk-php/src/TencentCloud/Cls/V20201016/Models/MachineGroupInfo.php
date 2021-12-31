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
 * 机器组信息
 *
 * @method string getGroupId() 获取机器组ID
 * @method void setGroupId(string $GroupId) 设置机器组ID
 * @method string getGroupName() 获取机器组名称
 * @method void setGroupName(string $GroupName) 设置机器组名称
 * @method MachineGroupTypeInfo getMachineGroupType() 获取机器组类型
 * @method void setMachineGroupType(MachineGroupTypeInfo $MachineGroupType) 设置机器组类型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getTags() 获取机器组绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置机器组绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoUpdate() 获取是否开启机器组自动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoUpdate(string $AutoUpdate) 设置是否开启机器组自动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateStartTime() 获取升级开始时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateStartTime(string $UpdateStartTime) 设置升级开始时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateEndTime() 获取升级结束时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateEndTime(string $UpdateEndTime) 设置升级结束时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getServiceLogging() 获取是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceLogging(boolean $ServiceLogging) 设置是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
注意：此字段可能返回 null，表示取不到有效值。
 */
class MachineGroupInfo extends AbstractModel
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
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 机器组绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 是否开启机器组自动更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoUpdate;

    /**
     * @var string 升级开始时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateStartTime;

    /**
     * @var string 升级结束时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateEndTime;

    /**
     * @var boolean 是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceLogging;

    /**
     * @param string $GroupId 机器组ID
     * @param string $GroupName 机器组名称
     * @param MachineGroupTypeInfo $MachineGroupType 机器组类型
     * @param string $CreateTime 创建时间
     * @param array $Tags 机器组绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoUpdate 是否开启机器组自动更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateStartTime 升级开始时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateEndTime 升级结束时间，建议业务低峰期升级LogListener
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ServiceLogging 是否开启服务日志，用于记录因Loglistener 服务自身产生的log，开启后，会创建内部日志集cls_service_logging和日志主题loglistener_status,loglistener_alarm,loglistener_business，不产生计费
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

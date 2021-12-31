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
 * 告警通知模板类型
 *
 * @method string getName() 获取告警通知模板名称。
 * @method void setName(string $Name) 设置告警通知模板名称。
 * @method string getType() 获取告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
 * @method void setType(string $Type) 设置告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
 * @method array getNoticeReceivers() 获取告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWebCallbacks() 获取告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebCallbacks(array $WebCallbacks) 设置告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmNoticeId() 获取告警通知模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置告警通知模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string 告警通知模板名称。
     */
    public $Name;

    /**
     * @var string 告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
     */
    public $Type;

    /**
     * @var array 告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeReceivers;

    /**
     * @var array 告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebCallbacks;

    /**
     * @var string 告警通知模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmNoticeId;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Name 告警通知模板名称。
     * @param string $Type 告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
     * @param array $NoticeReceivers 告警通知模板接收者信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WebCallbacks 告警通知模板回调信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmNoticeId 告警通知模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近更新时间。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

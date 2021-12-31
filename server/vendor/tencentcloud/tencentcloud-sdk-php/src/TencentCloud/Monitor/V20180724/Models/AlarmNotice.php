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
 * 告警通知模板详情
 *
 * @method string getId() 获取告警通知模板 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置告警通知模板 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取告警通知模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置告警通知模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedBy() 获取上次修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedBy(string $UpdatedBy) 设置上次修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNoticeType() 获取告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeType(string $NoticeType) 设置告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserNotices() 获取用户通知列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNotices(array $UserNotices) 设置用户通知列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getURLNotices() 获取回调通知列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLNotices(array $URLNotices) 设置回调通知列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPreset() 获取是否是系统预设通知模板 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPreset(integer $IsPreset) 设置是否是系统预设通知模板 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNoticeLanguage() 获取通知语言 zh-CN=中文 en-US=英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeLanguage(string $NoticeLanguage) 设置通知语言 zh-CN=中文 en-US=英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicyIds() 获取告警通知模板绑定的告警策略ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyIds(array $PolicyIds) 设置告警通知模板绑定的告警策略ID列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string 告警通知模板 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 告警通知模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 上次修改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedBy;

    /**
     * @var string 告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeType;

    /**
     * @var array 用户通知列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNotices;

    /**
     * @var array 回调通知列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLNotices;

    /**
     * @var integer 是否是系统预设通知模板 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPreset;

    /**
     * @var string 通知语言 zh-CN=中文 en-US=英文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeLanguage;

    /**
     * @var array 告警通知模板绑定的告警策略ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyIds;

    /**
     * @param string $Id 告警通知模板 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 告警通知模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedBy 上次修改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NoticeType 告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserNotices 用户通知列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $URLNotices 回调通知列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPreset 是否是系统预设通知模板 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NoticeLanguage 通知语言 zh-CN=中文 en-US=英文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicyIds 告警通知模板绑定的告警策略ID列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
            $this->UpdatedBy = $param["UpdatedBy"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
        }

        if (array_key_exists("UserNotices",$param) and $param["UserNotices"] !== null) {
            $this->UserNotices = [];
            foreach ($param["UserNotices"] as $key => $value){
                $obj = new UserNotice();
                $obj->deserialize($value);
                array_push($this->UserNotices, $obj);
            }
        }

        if (array_key_exists("URLNotices",$param) and $param["URLNotices"] !== null) {
            $this->URLNotices = [];
            foreach ($param["URLNotices"] as $key => $value){
                $obj = new URLNotice();
                $obj->deserialize($value);
                array_push($this->URLNotices, $obj);
            }
        }

        if (array_key_exists("IsPreset",$param) and $param["IsPreset"] !== null) {
            $this->IsPreset = $param["IsPreset"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}

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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动详情
 *
 * @method string getTemplateId() 获取活动使用模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置活动使用模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityTitle() 获取活动标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityTitle(string $ActivityTitle) 设置活动标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityDesc() 获取活动描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityDesc(string $ActivityDesc) 设置活动描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityCover() 获取活动封面地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityCover(string $ActivityCover) 设置活动封面地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityType() 获取活动类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityType(string $ActivityType) 设置活动类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityId() 获取活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(string $ActivityId) 设置活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonalConfig() 获取活动模板自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalConfig(string $PersonalConfig) 设置活动模板自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityInfo extends AbstractModel
{
    /**
     * @var string 活动使用模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 活动标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityTitle;

    /**
     * @var string 活动描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityDesc;

    /**
     * @var string 活动封面地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityCover;

    /**
     * @var string 活动类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityType;

    /**
     * @var string 活动id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityId;

    /**
     * @var string 活动模板自定义配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalConfig;

    /**
     * @param string $TemplateId 活动使用模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityTitle 活动标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityDesc 活动描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityCover 活动封面地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityType 活动类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityId 活动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonalConfig 活动模板自定义配置
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ActivityTitle",$param) and $param["ActivityTitle"] !== null) {
            $this->ActivityTitle = $param["ActivityTitle"];
        }

        if (array_key_exists("ActivityDesc",$param) and $param["ActivityDesc"] !== null) {
            $this->ActivityDesc = $param["ActivityDesc"];
        }

        if (array_key_exists("ActivityCover",$param) and $param["ActivityCover"] !== null) {
            $this->ActivityCover = $param["ActivityCover"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("PersonalConfig",$param) and $param["PersonalConfig"] !== null) {
            $this->PersonalConfig = $param["PersonalConfig"];
        }
    }
}

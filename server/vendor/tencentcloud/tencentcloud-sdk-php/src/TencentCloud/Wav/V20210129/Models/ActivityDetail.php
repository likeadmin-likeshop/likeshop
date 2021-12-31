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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动详情
 *
 * @method integer getActivityId() 获取活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(integer $ActivityId) 设置活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityName() 获取活动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityName(string $ActivityName) 设置活动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivityState() 获取活动状态，10:未开始状态、20:已开始（进行中）状态、30:已结束状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityState(integer $ActivityState) 设置活动状态，10:未开始状态、20:已开始（进行中）状态、30:已结束状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivityType() 获取活动类型，100:留资活动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityType(integer $ActivityType) 设置活动类型，100:留资活动
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取活动开始时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置活动开始时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取活动结束时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置活动结束时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainPhoto() 获取活动主图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainPhoto(string $MainPhoto) 设置活动主图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivacyAgreementId() 获取协议编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivacyAgreementId(string $PrivacyAgreementId) 设置协议编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取活动更新时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置活动更新时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityDataList() 获取活动数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityDataList(string $ActivityDataList) 设置活动数据列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityDetail extends AbstractModel
{
    /**
     * @var integer 活动id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityId;

    /**
     * @var string 活动名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityName;

    /**
     * @var integer 活动状态，10:未开始状态、20:已开始（进行中）状态、30:已结束状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityState;

    /**
     * @var integer 活动类型，100:留资活动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityType;

    /**
     * @var integer 活动开始时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 活动结束时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 活动主图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainPhoto;

    /**
     * @var string 协议编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivacyAgreementId;

    /**
     * @var integer 活动更新时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 活动数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityDataList;

    /**
     * @param integer $ActivityId 活动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityName 活动名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivityState 活动状态，10:未开始状态、20:已开始（进行中）状态、30:已结束状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivityType 活动类型，100:留资活动
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 活动开始时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 活动结束时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainPhoto 活动主图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivacyAgreementId 协议编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 活动更新时间，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityDataList 活动数据列表
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityName",$param) and $param["ActivityName"] !== null) {
            $this->ActivityName = $param["ActivityName"];
        }

        if (array_key_exists("ActivityState",$param) and $param["ActivityState"] !== null) {
            $this->ActivityState = $param["ActivityState"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MainPhoto",$param) and $param["MainPhoto"] !== null) {
            $this->MainPhoto = $param["MainPhoto"];
        }

        if (array_key_exists("PrivacyAgreementId",$param) and $param["PrivacyAgreementId"] !== null) {
            $this->PrivacyAgreementId = $param["PrivacyAgreementId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActivityDataList",$param) and $param["ActivityDataList"] !== null) {
            $this->ActivityDataList = $param["ActivityDataList"];
        }
    }
}

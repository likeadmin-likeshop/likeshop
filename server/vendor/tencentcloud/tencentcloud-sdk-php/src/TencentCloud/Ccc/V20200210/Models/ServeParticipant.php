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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参与者信息
 *
 * @method string getMail() 获取坐席邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMail(string $Mail) 设置坐席邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取坐席电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置坐席电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRingTimestamp() 获取振铃时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAcceptTimestamp() 获取接听时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndedTimestamp() 获取结束时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置结束时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取录音 ID，能够索引到坐席侧的录音
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置录音 ID，能够索引到坐席侧的录音
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferFrom() 获取转接来源坐席信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferFrom(string $TransferFrom) 设置转接来源坐席信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferTo() 获取转接去向坐席信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferTo(string $TransferTo) 设置转接去向坐席信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferToType() 获取转接去向参与者类型，取值与 Type 一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferToType(string $TransferToType) 设置转接去向参与者类型，取值与 Type 一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSkillGroupId() 获取技能组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndStatusString() 获取结束状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndStatusString(string $EndStatusString) 设置结束状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordURL() 获取录音 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordURL(string $RecordURL) 设置录音 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSequence() 获取参与者序号，从 0 开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSequence(integer $Sequence) 设置参与者序号，从 0 开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTimestamp() 获取开始时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置开始时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkillGroupName() 获取技能组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServeParticipant extends AbstractModel
{
    /**
     * @var string 坐席邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mail;

    /**
     * @var string 坐席电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var integer 振铃时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RingTimestamp;

    /**
     * @var integer 接听时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcceptTimestamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndedTimestamp;

    /**
     * @var string 录音 ID，能够索引到坐席侧的录音
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var string 参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 转接来源坐席信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferFrom;

    /**
     * @var string 转接去向坐席信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferTo;

    /**
     * @var string 转接去向参与者类型，取值与 Type 一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferToType;

    /**
     * @var integer 技能组 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillGroupId;

    /**
     * @var string 结束状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndStatusString;

    /**
     * @var string 录音 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordURL;

    /**
     * @var integer 参与者序号，从 0 开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sequence;

    /**
     * @var integer 开始时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTimestamp;

    /**
     * @var string 技能组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillGroupName;

    /**
     * @param string $Mail 坐席邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 坐席电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RingTimestamp 振铃时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AcceptTimestamp 接听时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndedTimestamp 结束时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId 录音 ID，能够索引到坐席侧的录音
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferFrom 转接来源坐席信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferTo 转接去向坐席信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferToType 转接去向参与者类型，取值与 Type 一致
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SkillGroupId 技能组 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndStatusString 结束状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordURL 录音 URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Sequence 参与者序号，从 0 开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTimestamp 开始时间戳，Unix 秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkillGroupName 技能组名称
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
        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("EndedTimestamp",$param) and $param["EndedTimestamp"] !== null) {
            $this->EndedTimestamp = $param["EndedTimestamp"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TransferFrom",$param) and $param["TransferFrom"] !== null) {
            $this->TransferFrom = $param["TransferFrom"];
        }

        if (array_key_exists("TransferTo",$param) and $param["TransferTo"] !== null) {
            $this->TransferTo = $param["TransferTo"];
        }

        if (array_key_exists("TransferToType",$param) and $param["TransferToType"] !== null) {
            $this->TransferToType = $param["TransferToType"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("EndStatusString",$param) and $param["EndStatusString"] !== null) {
            $this->EndStatusString = $param["EndStatusString"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }
    }
}

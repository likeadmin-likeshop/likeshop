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
 * 活动参与详情
 *
 * @method integer getActivityId() 获取活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(integer $ActivityId) 设置活动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityName() 获取活动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityName(string $ActivityName) 设置活动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSalesName() 获取销售姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesName(string $SalesName) 设置销售姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSalesPhone() 获取销售电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesPhone(string $SalesPhone) 设置销售电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinId() 获取参与id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinId(integer $JoinId) 设置参与id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveCodeId() 获取活码id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveCodeId(integer $LiveCodeId) 设置活码id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserPhone() 获取用户电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserPhone(string $UserPhone) 设置用户电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityData() 获取活动数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityData(string $ActivityData) 设置活动数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLeadId() 获取线索id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeadId(integer $LeadId) 设置线索id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinTime() 获取参与时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinTime(integer $JoinTime) 设置参与时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuplicate() 获取线索是否是重复创建， 0 ：新建、 1：合并、 2：重复， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuplicate(integer $Duplicate) 设置线索是否是重复创建， 0 ：新建、 1：合并、 2：重复， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuplicateLeadId() 获取重复线索id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuplicateLeadId(integer $DuplicateLeadId) 设置重复线索id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinState() 获取是否为参与多次活动， 1：参与一次、2、参与多次，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinState(integer $JoinState) 设置是否为参与多次活动， 1：参与一次、2、参与多次，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityJoinDetail extends AbstractModel
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
     * @var string 销售姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesName;

    /**
     * @var string 销售电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesPhone;

    /**
     * @var integer 参与id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinId;

    /**
     * @var integer 活码id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveCodeId;

    /**
     * @var string 用户电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserPhone;

    /**
     * @var string 用户姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 活动数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityData;

    /**
     * @var integer 线索id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeadId;

    /**
     * @var integer 参与时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinTime;

    /**
     * @var integer 线索是否是重复创建， 0 ：新建、 1：合并、 2：重复， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duplicate;

    /**
     * @var integer 重复线索id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DuplicateLeadId;

    /**
     * @var integer 是否为参与多次活动， 1：参与一次、2、参与多次，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinState;

    /**
     * @var integer 创建时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $ActivityId 活动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityName 活动名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SalesName 销售姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SalesPhone 销售电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinId 参与id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveCodeId 活码id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserPhone 用户电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityData 活动数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LeadId 线索id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinTime 参与时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duplicate 线索是否是重复创建， 0 ：新建、 1：合并、 2：重复， 默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DuplicateLeadId 重复线索id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinState 是否为参与多次活动， 1：参与一次、2、参与多次，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间戳，单位：秒
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

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("SalesPhone",$param) and $param["SalesPhone"] !== null) {
            $this->SalesPhone = $param["SalesPhone"];
        }

        if (array_key_exists("JoinId",$param) and $param["JoinId"] !== null) {
            $this->JoinId = $param["JoinId"];
        }

        if (array_key_exists("LiveCodeId",$param) and $param["LiveCodeId"] !== null) {
            $this->LiveCodeId = $param["LiveCodeId"];
        }

        if (array_key_exists("UserPhone",$param) and $param["UserPhone"] !== null) {
            $this->UserPhone = $param["UserPhone"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ActivityData",$param) and $param["ActivityData"] !== null) {
            $this->ActivityData = $param["ActivityData"];
        }

        if (array_key_exists("LeadId",$param) and $param["LeadId"] !== null) {
            $this->LeadId = $param["LeadId"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }

        if (array_key_exists("Duplicate",$param) and $param["Duplicate"] !== null) {
            $this->Duplicate = $param["Duplicate"];
        }

        if (array_key_exists("DuplicateLeadId",$param) and $param["DuplicateLeadId"] !== null) {
            $this->DuplicateLeadId = $param["DuplicateLeadId"];
        }

        if (array_key_exists("JoinState",$param) and $param["JoinState"] !== null) {
            $this->JoinState = $param["JoinState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

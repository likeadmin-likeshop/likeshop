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
 * 分组信息
 *
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupPath() 获取分组路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupPath(string $GroupPath) 设置分组路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupDescribe() 获取分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupDescribe(string $GroupDescribe) 设置分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceNum() 获取分组绑定设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceNum(integer $DeviceNum) 设置分组绑定设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubGroupNum() 获取子分组数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubGroupNum(integer $SubGroupNum) 设置子分组数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInformation() 获取分组附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInformation(string $ExtraInformation) 设置分组附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupType() 获取分组类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置分组类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupStatus() 获取分组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupStatus(integer $GroupStatus) 设置分组状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupItem extends AbstractModel
{
    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 父分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupPath;

    /**
     * @var string 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupDescribe;

    /**
     * @var integer 分组绑定设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceNum;

    /**
     * @var integer 子分组数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubGroupNum;

    /**
     * @var string 分组附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInformation;

    /**
     * @var string 分组类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 分组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupStatus;

    /**
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupPath 分组路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupDescribe 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceNum 分组绑定设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubGroupNum 子分组数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInformation 分组附加信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupType 分组类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupStatus 分组状态
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupPath",$param) and $param["GroupPath"] !== null) {
            $this->GroupPath = $param["GroupPath"];
        }

        if (array_key_exists("GroupDescribe",$param) and $param["GroupDescribe"] !== null) {
            $this->GroupDescribe = $param["GroupDescribe"];
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }

        if (array_key_exists("SubGroupNum",$param) and $param["SubGroupNum"] !== null) {
            $this->SubGroupNum = $param["SubGroupNum"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }
    }
}

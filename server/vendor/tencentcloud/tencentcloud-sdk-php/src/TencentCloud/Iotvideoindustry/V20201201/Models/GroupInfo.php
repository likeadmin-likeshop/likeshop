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
 * 分组信息详情
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getGroupType() 获取分组类型
 * @method void setGroupType(string $GroupType) 设置分组类型
 * @method string getGroupPath() 获取分组路径
 * @method void setGroupPath(string $GroupPath) 设置分组路径
 * @method string getParentId() 获取父分组ID
 * @method void setParentId(string $ParentId) 设置父分组ID
 * @method string getGroupDescribe() 获取分组描述
 * @method void setGroupDescribe(string $GroupDescribe) 设置分组描述
 * @method string getExtraInformation() 获取扩展信息
 * @method void setExtraInformation(string $ExtraInformation) 设置扩展信息
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getGroupStatus() 获取分组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupStatus(integer $GroupStatus) 设置分组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取设备不存在时产生的错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(string $Error) 设置设备不存在时产生的错误
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 分组类型
     */
    public $GroupType;

    /**
     * @var string 分组路径
     */
    public $GroupPath;

    /**
     * @var string 父分组ID
     */
    public $ParentId;

    /**
     * @var string 分组描述
     */
    public $GroupDescribe;

    /**
     * @var string 扩展信息
     */
    public $ExtraInformation;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 分组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupStatus;

    /**
     * @var string 设备不存在时产生的错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param string $GroupId 分组ID
     * @param string $GroupName 分组名称
     * @param string $GroupType 分组类型
     * @param string $GroupPath 分组路径
     * @param string $ParentId 父分组ID
     * @param string $GroupDescribe 分组描述
     * @param string $ExtraInformation 扩展信息
     * @param integer $CreateTime 创建时间
     * @param integer $GroupStatus 分组状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 设备不存在时产生的错误
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

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupPath",$param) and $param["GroupPath"] !== null) {
            $this->GroupPath = $param["GroupPath"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("GroupDescribe",$param) and $param["GroupDescribe"] !== null) {
            $this->GroupDescribe = $param["GroupDescribe"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}

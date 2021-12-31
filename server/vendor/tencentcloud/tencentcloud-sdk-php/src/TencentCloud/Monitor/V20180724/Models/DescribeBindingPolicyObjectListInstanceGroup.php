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
 * DescribeBindingPolicyObjectList返回的是实例分组信息
 *
 * @method integer getInstanceGroupId() 获取实例分组id
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组id
 * @method string getViewName() 获取告警策略类型名称
 * @method void setViewName(string $ViewName) 设置告警策略类型名称
 * @method string getLastEditUin() 获取最后编辑uin
 * @method void setLastEditUin(string $LastEditUin) 设置最后编辑uin
 * @method string getGroupName() 获取实例分组名称
 * @method void setGroupName(string $GroupName) 设置实例分组名称
 * @method integer getInstanceSum() 获取实例数量
 * @method void setInstanceSum(integer $InstanceSum) 设置实例数量
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method integer getInsertTime() 获取创建时间
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
 * @method array getRegions() 获取实例所在的地域集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegions(array $Regions) 设置实例所在的地域集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBindingPolicyObjectListInstanceGroup extends AbstractModel
{
    /**
     * @var integer 实例分组id
     */
    public $InstanceGroupId;

    /**
     * @var string 告警策略类型名称
     */
    public $ViewName;

    /**
     * @var string 最后编辑uin
     */
    public $LastEditUin;

    /**
     * @var string 实例分组名称
     */
    public $GroupName;

    /**
     * @var integer 实例数量
     */
    public $InstanceSum;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间
     */
    public $InsertTime;

    /**
     * @var array 实例所在的地域集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regions;

    /**
     * @param integer $InstanceGroupId 实例分组id
     * @param string $ViewName 告警策略类型名称
     * @param string $LastEditUin 最后编辑uin
     * @param string $GroupName 实例分组名称
     * @param integer $InstanceSum 实例数量
     * @param integer $UpdateTime 更新时间
     * @param integer $InsertTime 创建时间
     * @param array $Regions 实例所在的地域集合
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}

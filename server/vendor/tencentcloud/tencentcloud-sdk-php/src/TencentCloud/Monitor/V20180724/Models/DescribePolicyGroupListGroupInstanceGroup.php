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
 * DescribePolicyGroupList接口策略组绑定的实例分组信息
 *
 * @method integer getInstanceGroupId() 获取实例分组名称id
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组名称id
 * @method string getViewName() 获取策略类型视图名称
 * @method void setViewName(string $ViewName) 设置策略类型视图名称
 * @method string getLastEditUin() 获取最近编辑的用户uin
 * @method void setLastEditUin(string $LastEditUin) 设置最近编辑的用户uin
 * @method string getGroupName() 获取实例分组名称
 * @method void setGroupName(string $GroupName) 设置实例分组名称
 * @method integer getInstanceSum() 获取实例数量
 * @method void setInstanceSum(integer $InstanceSum) 设置实例数量
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method integer getInsertTime() 获取创建时间
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
 */
class DescribePolicyGroupListGroupInstanceGroup extends AbstractModel
{
    /**
     * @var integer 实例分组名称id
     */
    public $InstanceGroupId;

    /**
     * @var string 策略类型视图名称
     */
    public $ViewName;

    /**
     * @var string 最近编辑的用户uin
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
     * @param integer $InstanceGroupId 实例分组名称id
     * @param string $ViewName 策略类型视图名称
     * @param string $LastEditUin 最近编辑的用户uin
     * @param string $GroupName 实例分组名称
     * @param integer $InstanceSum 实例数量
     * @param integer $UpdateTime 更新时间
     * @param integer $InsertTime 创建时间
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
    }
}

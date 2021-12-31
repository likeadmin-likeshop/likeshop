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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoScalingGroupFromInstance请求参数结构体
 *
 * @method string getAutoScalingGroupName() 获取伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getMinSize() 获取最小实例数，取值范围为0-2000。
 * @method void setMinSize(integer $MinSize) 设置最小实例数，取值范围为0-2000。
 * @method integer getMaxSize() 获取最大实例数，取值范围为0-2000。
 * @method void setMaxSize(integer $MaxSize) 设置最大实例数，取值范围为0-2000。
 * @method integer getDesiredCapacity() 获取期望实例数，大小介于最小实例数和最大实例数之间。
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置期望实例数，大小介于最小实例数和最大实例数之间。
 * @method boolean getInheritInstanceTag() 获取是否继承实例标签，默认值为False
 * @method void setInheritInstanceTag(boolean $InheritInstanceTag) 设置是否继承实例标签，默认值为False
 */
class CreateAutoScalingGroupFromInstanceRequest extends AbstractModel
{
    /**
     * @var string 伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
     */
    public $AutoScalingGroupName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 最小实例数，取值范围为0-2000。
     */
    public $MinSize;

    /**
     * @var integer 最大实例数，取值范围为0-2000。
     */
    public $MaxSize;

    /**
     * @var integer 期望实例数，大小介于最小实例数和最大实例数之间。
     */
    public $DesiredCapacity;

    /**
     * @var boolean 是否继承实例标签，默认值为False
     */
    public $InheritInstanceTag;

    /**
     * @param string $AutoScalingGroupName 伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
     * @param string $InstanceId 实例ID
     * @param integer $MinSize 最小实例数，取值范围为0-2000。
     * @param integer $MaxSize 最大实例数，取值范围为0-2000。
     * @param integer $DesiredCapacity 期望实例数，大小介于最小实例数和最大实例数之间。
     * @param boolean $InheritInstanceTag 是否继承实例标签，默认值为False
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
        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("InheritInstanceTag",$param) and $param["InheritInstanceTag"] !== null) {
            $this->InheritInstanceTag = $param["InheritInstanceTag"];
        }
    }
}

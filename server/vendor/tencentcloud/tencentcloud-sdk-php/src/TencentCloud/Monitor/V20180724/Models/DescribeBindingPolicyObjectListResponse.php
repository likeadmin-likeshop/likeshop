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
 * DescribeBindingPolicyObjectList返回参数结构体
 *
 * @method array getList() 获取绑定的对象实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置绑定的对象实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取绑定的对象实例总数
 * @method void setTotal(integer $Total) 设置绑定的对象实例总数
 * @method integer getNoShieldedSum() 获取未屏蔽的对象实例数
 * @method void setNoShieldedSum(integer $NoShieldedSum) 设置未屏蔽的对象实例数
 * @method DescribeBindingPolicyObjectListInstanceGroup getInstanceGroup() 获取绑定的实例分组信息，没有绑定实例分组则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroup(DescribeBindingPolicyObjectListInstanceGroup $InstanceGroup) 设置绑定的实例分组信息，没有绑定实例分组则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBindingPolicyObjectListResponse extends AbstractModel
{
    /**
     * @var array 绑定的对象实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var integer 绑定的对象实例总数
     */
    public $Total;

    /**
     * @var integer 未屏蔽的对象实例数
     */
    public $NoShieldedSum;

    /**
     * @var DescribeBindingPolicyObjectListInstanceGroup 绑定的实例分组信息，没有绑定实例分组则为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroup;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $List 绑定的对象实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 绑定的对象实例总数
     * @param integer $NoShieldedSum 未屏蔽的对象实例数
     * @param DescribeBindingPolicyObjectListInstanceGroup $InstanceGroup 绑定的实例分组信息，没有绑定实例分组则为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListInstance();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("NoShieldedSum",$param) and $param["NoShieldedSum"] !== null) {
            $this->NoShieldedSum = $param["NoShieldedSum"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = new DescribeBindingPolicyObjectListInstanceGroup();
            $this->InstanceGroup->deserialize($param["InstanceGroup"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

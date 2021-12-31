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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群关联的伸缩组信息
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getStatus() 获取伸缩组状态(开启 enabled 开启中 enabling 关闭 disabled 关闭中 disabling 更新中 updating 删除中 deleting 开启缩容中 scaleDownEnabling 关闭缩容中 scaleDownDisabling)
 * @method void setStatus(string $Status) 设置伸缩组状态(开启 enabled 开启中 enabling 关闭 disabled 关闭中 disabling 更新中 updating 删除中 deleting 开启缩容中 scaleDownEnabling 关闭缩容中 scaleDownDisabling)
 * @method boolean getIsUnschedulable() 获取节点是否设置成不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnschedulable(boolean $IsUnschedulable) 设置节点是否设置成不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取伸缩组的label列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置伸缩组的label列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 */
class ClusterAsGroup extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string 伸缩组状态(开启 enabled 开启中 enabling 关闭 disabled 关闭中 disabling 更新中 updating 删除中 deleting 开启缩容中 scaleDownEnabling 关闭缩容中 scaleDownDisabling)
     */
    public $Status;

    /**
     * @var boolean 节点是否设置成不可调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnschedulable;

    /**
     * @var array 伸缩组的label列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $Status 伸缩组状态(开启 enabled 开启中 enabling 关闭 disabled 关闭中 disabling 更新中 updating 删除中 deleting 开启缩容中 scaleDownEnabling 关闭缩容中 scaleDownDisabling)
     * @param boolean $IsUnschedulable 节点是否设置成不可调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 伸缩组的label列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsUnschedulable",$param) and $param["IsUnschedulable"] !== null) {
            $this->IsUnschedulable = $param["IsUnschedulable"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}

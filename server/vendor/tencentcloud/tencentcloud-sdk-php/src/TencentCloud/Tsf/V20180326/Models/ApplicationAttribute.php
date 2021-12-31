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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用列表其它字段
 *
 * @method integer getInstanceCount() 获取总实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置总实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取运行实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置运行实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupCount() 获取应用下部署组个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupCount(integer $GroupCount) 设置应用下部署组个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationAttribute extends AbstractModel
{
    /**
     * @var integer 总实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 运行实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var integer 应用下部署组个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupCount;

    /**
     * @param integer $InstanceCount 总实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount 运行实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupCount 应用下部署组个数
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
        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }
    }
}

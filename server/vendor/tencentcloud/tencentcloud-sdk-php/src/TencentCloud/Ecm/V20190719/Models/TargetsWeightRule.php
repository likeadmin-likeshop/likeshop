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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标和权重的描述信息
 *
 * @method string getListenerId() 获取负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargets() 获取要修改权重的后端机器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置要修改权重的后端机器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取后端服务新的转发权重，取值范围：0~100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置后端服务新的转发权重，取值范围：0~100。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetsWeightRule extends AbstractModel
{
    /**
     * @var string 负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var array 要修改权重的后端机器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @var integer 后端服务新的转发权重，取值范围：0~100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param string $ListenerId 负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Targets 要修改权重的后端机器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 后端服务新的转发权重，取值范围：0~100。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}

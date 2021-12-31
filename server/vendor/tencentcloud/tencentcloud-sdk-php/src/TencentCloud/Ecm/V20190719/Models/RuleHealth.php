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
 * 转发规则及健康状态列表
 *
 * @method array getTargets() 获取本规则上绑定的后端的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置本规则上绑定的后端的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleHealth extends AbstractModel
{
    /**
     * @var array 本规则上绑定的后端的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @param array $Targets 本规则上绑定的后端的健康检查状态
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
        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetHealth();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}

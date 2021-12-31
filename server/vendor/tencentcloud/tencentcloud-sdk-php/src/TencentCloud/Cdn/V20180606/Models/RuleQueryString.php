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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路径保留参数配置
 *
 * @method string getSwitch() 获取on | off CacheKey是否由QueryString组成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置on | off CacheKey是否由QueryString组成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取includeCustom 包含部分url参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置includeCustom 包含部分url参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleQueryString extends AbstractModel
{
    /**
     * @var string on | off CacheKey是否由QueryString组成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string includeCustom 包含部分url参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Switch on | off CacheKey是否由QueryString组成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action includeCustom 包含部分url参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 使用/排除的url参数数组，';' 分割
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

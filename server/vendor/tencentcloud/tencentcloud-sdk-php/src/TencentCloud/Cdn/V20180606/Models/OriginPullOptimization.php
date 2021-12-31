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
 * 跨国回源优化配置，默认为关闭状态（功能灰度中，尚未全量）
 *
 * @method string getSwitch() 获取跨国回源优化配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置跨国回源优化配置开关
on：开启
off：关闭
 * @method string getOptimizationType() 获取跨国类型
OVToCN：境外回源境内
CNToOV：境内回源境外
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptimizationType(string $OptimizationType) 设置跨国类型
OVToCN：境外回源境内
CNToOV：境内回源境外
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginPullOptimization extends AbstractModel
{
    /**
     * @var string 跨国回源优化配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var string 跨国类型
OVToCN：境外回源境内
CNToOV：境内回源境外
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptimizationType;

    /**
     * @param string $Switch 跨国回源优化配置开关
on：开启
off：关闭
     * @param string $OptimizationType 跨国类型
OVToCN：境外回源境内
CNToOV：境内回源境外
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

        if (array_key_exists("OptimizationType",$param) and $param["OptimizationType"] !== null) {
            $this->OptimizationType = $param["OptimizationType"];
        }
    }
}

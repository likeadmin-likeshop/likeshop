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
 * 节点缓存过期时间配置，分为以下两种：
+ 基础版缓存过期规则配置
+ 高级版缓存过期规则配置
 *
 * @method SimpleCache getSimpleCache() 获取基础缓存过期时间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimpleCache(SimpleCache $SimpleCache) 设置基础缓存过期时间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedCache getAdvancedCache() 获取高级缓存过期时间配置（功能灰度中，尚未全量）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedCache(AdvancedCache $AdvancedCache) 设置高级缓存过期时间配置（功能灰度中，尚未全量）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleCache() 获取高级路径缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCache(array $RuleCache) 设置高级路径缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cache extends AbstractModel
{
    /**
     * @var SimpleCache 基础缓存过期时间配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimpleCache;

    /**
     * @var AdvancedCache 高级缓存过期时间配置（功能灰度中，尚未全量）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedCache;

    /**
     * @var array 高级路径缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCache;

    /**
     * @param SimpleCache $SimpleCache 基础缓存过期时间配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedCache $AdvancedCache 高级缓存过期时间配置（功能灰度中，尚未全量）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleCache 高级路径缓存配置
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
        if (array_key_exists("SimpleCache",$param) and $param["SimpleCache"] !== null) {
            $this->SimpleCache = new SimpleCache();
            $this->SimpleCache->deserialize($param["SimpleCache"]);
        }

        if (array_key_exists("AdvancedCache",$param) and $param["AdvancedCache"] !== null) {
            $this->AdvancedCache = new AdvancedCache();
            $this->AdvancedCache->deserialize($param["AdvancedCache"]);
        }

        if (array_key_exists("RuleCache",$param) and $param["RuleCache"] !== null) {
            $this->RuleCache = [];
            foreach ($param["RuleCache"] as $key => $value){
                $obj = new RuleCache();
                $obj->deserialize($value);
                array_push($this->RuleCache, $obj);
            }
        }
    }
}

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
 * 状态码缓存过期配置，默认情况下会对 404 状态码缓存 10 秒
 *
 * @method string getSwitch() 获取状态码缓存过期配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置状态码缓存过期配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCacheRules() 获取状态码缓存过期规则明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheRules(array $CacheRules) 设置状态码缓存过期规则明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatusCodeCache extends AbstractModel
{
    /**
     * @var string 状态码缓存过期配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var array 状态码缓存过期规则明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheRules;

    /**
     * @param string $Switch 状态码缓存过期配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CacheRules 状态码缓存过期规则明细
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

        if (array_key_exists("CacheRules",$param) and $param["CacheRules"] !== null) {
            $this->CacheRules = [];
            foreach ($param["CacheRules"] as $key => $value){
                $obj = new StatusCodeCacheRule();
                $obj->deserialize($value);
                array_push($this->CacheRules, $obj);
            }
        }
    }
}

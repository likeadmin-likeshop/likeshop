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
 * Referer 黑白名单配置，默认为关闭状态
 *
 * @method string getSwitch() 获取referer 黑白名单配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置referer 黑白名单配置开关
on：开启
off：关闭
 * @method array getRefererRules() 获取referer 黑白名单配置规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefererRules(array $RefererRules) 设置referer 黑白名单配置规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class Referer extends AbstractModel
{
    /**
     * @var string referer 黑白名单配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array referer 黑白名单配置规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefererRules;

    /**
     * @param string $Switch referer 黑白名单配置开关
on：开启
off：关闭
     * @param array $RefererRules referer 黑白名单配置规则
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

        if (array_key_exists("RefererRules",$param) and $param["RefererRules"] !== null) {
            $this->RefererRules = [];
            foreach ($param["RefererRules"] as $key => $value){
                $obj = new RefererRule();
                $obj->deserialize($value);
                array_push($this->RefererRules, $obj);
            }
        }
    }
}

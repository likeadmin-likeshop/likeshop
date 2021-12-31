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
 * URL重定向配置
 *
 * @method string getSwitch() 获取URL重定向配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置URL重定向配置开关
on：开启
off：关闭
 * @method array getPathRules() 获取URL重定向规则，当Switch为on时必填，规则数量最大为10个。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathRules(array $PathRules) 设置URL重定向规则，当Switch为on时必填，规则数量最大为10个。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UrlRedirect extends AbstractModel
{
    /**
     * @var string URL重定向配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array URL重定向规则，当Switch为on时必填，规则数量最大为10个。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathRules;

    /**
     * @param string $Switch URL重定向配置开关
on：开启
off：关闭
     * @param array $PathRules URL重定向规则，当Switch为on时必填，规则数量最大为10个。
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

        if (array_key_exists("PathRules",$param) and $param["PathRules"] !== null) {
            $this->PathRules = [];
            foreach ($param["PathRules"] as $key => $value){
                $obj = new UrlRedirectRule();
                $obj->deserialize($value);
                array_push($this->PathRules, $obj);
            }
        }
    }
}

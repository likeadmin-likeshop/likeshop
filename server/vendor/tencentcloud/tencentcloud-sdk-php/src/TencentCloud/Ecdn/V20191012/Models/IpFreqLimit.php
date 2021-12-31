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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP限频配置。
 *
 * @method string getSwitch() 获取IP限频配置开关，on或off。
 * @method void setSwitch(string $Switch) 设置IP限频配置开关，on或off。
 * @method integer getQps() 获取每秒请求数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQps(integer $Qps) 设置每秒请求数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpFreqLimit extends AbstractModel
{
    /**
     * @var string IP限频配置开关，on或off。
     */
    public $Switch;

    /**
     * @var integer 每秒请求数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qps;

    /**
     * @param string $Switch IP限频配置开关，on或off。
     * @param integer $Qps 每秒请求数。
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

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }
    }
}

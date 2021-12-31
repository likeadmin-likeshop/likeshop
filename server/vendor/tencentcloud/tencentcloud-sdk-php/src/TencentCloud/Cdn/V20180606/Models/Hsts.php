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
 * HSTS 配置。
 *
 * @method string getSwitch() 获取是否开启，on或off。
 * @method void setSwitch(string $Switch) 设置是否开启，on或off。
 * @method integer getMaxAge() 获取MaxAge数值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(integer $MaxAge) 设置MaxAge数值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeSubDomains() 获取是否包含子域名，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeSubDomains(string $IncludeSubDomains) 设置是否包含子域名，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Hsts extends AbstractModel
{
    /**
     * @var string 是否开启，on或off。
     */
    public $Switch;

    /**
     * @var integer MaxAge数值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var string 是否包含子域名，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeSubDomains;

    /**
     * @param string $Switch 是否开启，on或off。
     * @param integer $MaxAge MaxAge数值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeSubDomains 是否包含子域名，on或off。
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

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }
    }
}

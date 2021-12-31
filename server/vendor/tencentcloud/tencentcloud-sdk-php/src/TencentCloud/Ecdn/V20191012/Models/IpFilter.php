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
 * IP黑白名单。
 *
 * @method string getSwitch() 获取IP黑白名单开关，on或off。
 * @method void setSwitch(string $Switch) 设置IP黑白名单开关，on或off。
 * @method string getFilterType() 获取IP黑白名单类型，whitelist或blacklist。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterType(string $FilterType) 设置IP黑白名单类型，whitelist或blacklist。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilters() 获取IP黑白名单列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilters(array $Filters) 设置IP黑白名单列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string IP黑白名单开关，on或off。
     */
    public $Switch;

    /**
     * @var string IP黑白名单类型，whitelist或blacklist。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterType;

    /**
     * @var array IP黑白名单列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filters;

    /**
     * @param string $Switch IP黑白名单开关，on或off。
     * @param string $FilterType IP黑白名单类型，whitelist或blacklist。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Filters IP黑白名单列表。
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

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}

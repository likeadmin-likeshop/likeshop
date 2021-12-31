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
 * Waf子规则开关状态
 *
 * @method string getSwitch() 获取子规则状态，on|off
 * @method void setSwitch(string $Switch) 设置子规则状态，on|off
 * @method array getSubIds() 获取规则id列表
 * @method void setSubIds(array $SubIds) 设置规则id列表
 */
class WafSubRuleStatus extends AbstractModel
{
    /**
     * @var string 子规则状态，on|off
     */
    public $Switch;

    /**
     * @var array 规则id列表
     */
    public $SubIds;

    /**
     * @param string $Switch 子规则状态，on|off
     * @param array $SubIds 规则id列表
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

        if (array_key_exists("SubIds",$param) and $param["SubIds"] !== null) {
            $this->SubIds = $param["SubIds"];
        }
    }
}

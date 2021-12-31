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
 * Scdn饼图数据，waf仅有
 *
 * @method string getAttackType() 获取攻击类型
 * @method void setAttackType(string $AttackType) 设置攻击类型
 * @method integer getValue() 获取攻击值
 * @method void setValue(integer $Value) 设置攻击值
 */
class ScdnTypeData extends AbstractModel
{
    /**
     * @var string 攻击类型
     */
    public $AttackType;

    /**
     * @var integer 攻击值
     */
    public $Value;

    /**
     * @param string $AttackType 攻击类型
     * @param integer $Value 攻击值
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
        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

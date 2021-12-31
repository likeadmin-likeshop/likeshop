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
namespace TencentCloud\Smpn\V20190822\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 号码恶意标记等级
 *
 * @method integer getDisturbLevel() 获取骚扰电话恶意标记等级
 * @method void setDisturbLevel(integer $DisturbLevel) 设置骚扰电话恶意标记等级
 * @method integer getHouseAgentLevel() 获取房产中介恶意标记等级
 * @method void setHouseAgentLevel(integer $HouseAgentLevel) 设置房产中介恶意标记等级
 * @method integer getInsuranceLevel() 获取保险理财恶意标记等级
 * @method void setInsuranceLevel(integer $InsuranceLevel) 设置保险理财恶意标记等级
 * @method integer getSalesLevel() 获取广告推销恶意标记等级
 * @method void setSalesLevel(integer $SalesLevel) 设置广告推销恶意标记等级
 * @method integer getCheatLevel() 获取诈骗电话恶意标记等级
 * @method void setCheatLevel(integer $CheatLevel) 设置诈骗电话恶意标记等级
 */
class MRLResponse extends AbstractModel
{
    /**
     * @var integer 骚扰电话恶意标记等级
     */
    public $DisturbLevel;

    /**
     * @var integer 房产中介恶意标记等级
     */
    public $HouseAgentLevel;

    /**
     * @var integer 保险理财恶意标记等级
     */
    public $InsuranceLevel;

    /**
     * @var integer 广告推销恶意标记等级
     */
    public $SalesLevel;

    /**
     * @var integer 诈骗电话恶意标记等级
     */
    public $CheatLevel;

    /**
     * @param integer $DisturbLevel 骚扰电话恶意标记等级
     * @param integer $HouseAgentLevel 房产中介恶意标记等级
     * @param integer $InsuranceLevel 保险理财恶意标记等级
     * @param integer $SalesLevel 广告推销恶意标记等级
     * @param integer $CheatLevel 诈骗电话恶意标记等级
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
        if (array_key_exists("DisturbLevel",$param) and $param["DisturbLevel"] !== null) {
            $this->DisturbLevel = $param["DisturbLevel"];
        }

        if (array_key_exists("HouseAgentLevel",$param) and $param["HouseAgentLevel"] !== null) {
            $this->HouseAgentLevel = $param["HouseAgentLevel"];
        }

        if (array_key_exists("InsuranceLevel",$param) and $param["InsuranceLevel"] !== null) {
            $this->InsuranceLevel = $param["InsuranceLevel"];
        }

        if (array_key_exists("SalesLevel",$param) and $param["SalesLevel"] !== null) {
            $this->SalesLevel = $param["SalesLevel"];
        }

        if (array_key_exists("CheatLevel",$param) and $param["CheatLevel"] !== null) {
            $this->CheatLevel = $param["CheatLevel"];
        }
    }
}

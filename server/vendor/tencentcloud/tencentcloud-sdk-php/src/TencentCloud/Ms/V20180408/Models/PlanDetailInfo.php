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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加固策略具体信息
 *
 * @method integer getIsDefault() 获取默认策略，1为默认，0为非默认
 * @method void setIsDefault(integer $IsDefault) 设置默认策略，1为默认，0为非默认
 * @method integer getPlanId() 获取策略id
 * @method void setPlanId(integer $PlanId) 设置策略id
 * @method string getPlanName() 获取策略名称
 * @method void setPlanName(string $PlanName) 设置策略名称
 * @method PlanInfo getPlanInfo() 获取策略信息
 * @method void setPlanInfo(PlanInfo $PlanInfo) 设置策略信息
 */
class PlanDetailInfo extends AbstractModel
{
    /**
     * @var integer 默认策略，1为默认，0为非默认
     */
    public $IsDefault;

    /**
     * @var integer 策略id
     */
    public $PlanId;

    /**
     * @var string 策略名称
     */
    public $PlanName;

    /**
     * @var PlanInfo 策略信息
     */
    public $PlanInfo;

    /**
     * @param integer $IsDefault 默认策略，1为默认，0为非默认
     * @param integer $PlanId 策略id
     * @param string $PlanName 策略名称
     * @param PlanInfo $PlanInfo 策略信息
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
        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("PlanInfo",$param) and $param["PlanInfo"] !== null) {
            $this->PlanInfo = new PlanInfo();
            $this->PlanInfo->deserialize($param["PlanInfo"]);
        }
    }
}

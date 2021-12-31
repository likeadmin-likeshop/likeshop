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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 7层CC自定义规则
 *
 * @method integer getPeriod() 获取统计周期，单位秒，取值[10, 30, 60]
 * @method void setPeriod(integer $Period) 设置统计周期，单位秒，取值[10, 30, 60]
 * @method integer getReqNumber() 获取访问次数，取值[1-10000]
 * @method void setReqNumber(integer $ReqNumber) 设置访问次数，取值[1-10000]
 * @method string getAction() 获取执行动作，取值["alg"（人机识别）, "drop"（拦截）]
 * @method void setAction(string $Action) 设置执行动作，取值["alg"（人机识别）, "drop"（拦截）]
 * @method integer getExeDuration() 获取执行时间，单位秒，取值[1-900]
 * @method void setExeDuration(integer $ExeDuration) 设置执行时间，单位秒，取值[1-900]
 */
class CCRuleConfig extends AbstractModel
{
    /**
     * @var integer 统计周期，单位秒，取值[10, 30, 60]
     */
    public $Period;

    /**
     * @var integer 访问次数，取值[1-10000]
     */
    public $ReqNumber;

    /**
     * @var string 执行动作，取值["alg"（人机识别）, "drop"（拦截）]
     */
    public $Action;

    /**
     * @var integer 执行时间，单位秒，取值[1-900]
     */
    public $ExeDuration;

    /**
     * @param integer $Period 统计周期，单位秒，取值[10, 30, 60]
     * @param integer $ReqNumber 访问次数，取值[1-10000]
     * @param string $Action 执行动作，取值["alg"（人机识别）, "drop"（拦截）]
     * @param integer $ExeDuration 执行时间，单位秒，取值[1-900]
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ReqNumber",$param) and $param["ReqNumber"] !== null) {
            $this->ReqNumber = $param["ReqNumber"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ExeDuration",$param) and $param["ExeDuration"] !== null) {
            $this->ExeDuration = $param["ExeDuration"];
        }
    }
}

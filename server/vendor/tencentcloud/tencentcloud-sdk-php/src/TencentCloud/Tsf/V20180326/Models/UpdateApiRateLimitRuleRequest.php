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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiRateLimitRule请求参数结构体
 *
 * @method string getRuleId() 获取限流规则ID
 * @method void setRuleId(string $RuleId) 设置限流规则ID
 * @method string getUsableStatus() 获取开启/禁用，enabled/disabled
 * @method void setUsableStatus(string $UsableStatus) 设置开启/禁用，enabled/disabled
 * @method integer getMaxQps() 获取qps值，开启限流规则时，必填
 * @method void setMaxQps(integer $MaxQps) 设置qps值，开启限流规则时，必填
 */
class UpdateApiRateLimitRuleRequest extends AbstractModel
{
    /**
     * @var string 限流规则ID
     */
    public $RuleId;

    /**
     * @var string 开启/禁用，enabled/disabled
     */
    public $UsableStatus;

    /**
     * @var integer qps值，开启限流规则时，必填
     */
    public $MaxQps;

    /**
     * @param string $RuleId 限流规则ID
     * @param string $UsableStatus 开启/禁用，enabled/disabled
     * @param integer $MaxQps qps值，开启限流规则时，必填
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }
    }
}

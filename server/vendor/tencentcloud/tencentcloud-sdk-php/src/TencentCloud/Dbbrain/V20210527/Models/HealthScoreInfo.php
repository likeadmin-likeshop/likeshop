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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取健康得分返回的详情。
 *
 * @method array getIssueTypes() 获取异常详情。
 * @method void setIssueTypes(array $IssueTypes) 设置异常详情。
 * @method integer getEventsTotalCount() 获取异常事件总数。
 * @method void setEventsTotalCount(integer $EventsTotalCount) 设置异常事件总数。
 * @method integer getHealthScore() 获取健康得分。
 * @method void setHealthScore(integer $HealthScore) 设置健康得分。
 * @method string getHealthLevel() 获取健康等级, 如："HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"。
 * @method void setHealthLevel(string $HealthLevel) 设置健康等级, 如："HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"。
 */
class HealthScoreInfo extends AbstractModel
{
    /**
     * @var array 异常详情。
     */
    public $IssueTypes;

    /**
     * @var integer 异常事件总数。
     */
    public $EventsTotalCount;

    /**
     * @var integer 健康得分。
     */
    public $HealthScore;

    /**
     * @var string 健康等级, 如："HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"。
     */
    public $HealthLevel;

    /**
     * @param array $IssueTypes 异常详情。
     * @param integer $EventsTotalCount 异常事件总数。
     * @param integer $HealthScore 健康得分。
     * @param string $HealthLevel 健康等级, 如："HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"。
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
        if (array_key_exists("IssueTypes",$param) and $param["IssueTypes"] !== null) {
            $this->IssueTypes = [];
            foreach ($param["IssueTypes"] as $key => $value){
                $obj = new IssueTypeInfo();
                $obj->deserialize($value);
                array_push($this->IssueTypes, $obj);
            }
        }

        if (array_key_exists("EventsTotalCount",$param) and $param["EventsTotalCount"] !== null) {
            $this->EventsTotalCount = $param["EventsTotalCount"];
        }

        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("HealthLevel",$param) and $param["HealthLevel"] !== null) {
            $this->HealthLevel = $param["HealthLevel"];
        }
    }
}

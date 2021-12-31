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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaDivulgeDataQueryPub请求参数结构体
 *
 * @method string getQueryKey() 获取模糊查询字段
 * @method void setQueryKey(string $QueryKey) 设置模糊查询字段
 * @method string getEventName() 获取安全事件名称
 * @method void setEventName(string $EventName) 设置安全事件名称
 * @method string getDivulgeSoure() 获取监控源
 * @method void setDivulgeSoure(string $DivulgeSoure) 设置监控源
 * @method string getAsset() 获取受影响资产
 * @method void setAsset(string $Asset) 设置受影响资产
 * @method string getRuleName() 获取命中主题集下的规则topic名称
 * @method void setRuleName(string $RuleName) 设置命中主题集下的规则topic名称
 * @method string getRuleId() 获取命中主题集下的规则topic唯一id
 * @method void setRuleId(string $RuleId) 设置命中主题集下的规则topic唯一id
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getStatus() 获取安全事件状态
 * @method void setStatus(string $Status) 设置安全事件状态
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getOffset() 获取查询起始地址
 * @method void setOffset(string $Offset) 设置查询起始地址
 * @method string getLimit() 获取查询个数
 * @method void setLimit(string $Limit) 设置查询个数
 */
class SaDivulgeDataQueryPubRequest extends AbstractModel
{
    /**
     * @var string 模糊查询字段
     */
    public $QueryKey;

    /**
     * @var string 安全事件名称
     */
    public $EventName;

    /**
     * @var string 监控源
     */
    public $DivulgeSoure;

    /**
     * @var string 受影响资产
     */
    public $Asset;

    /**
     * @var string 命中主题集下的规则topic名称
     */
    public $RuleName;

    /**
     * @var string 命中主题集下的规则topic唯一id
     */
    public $RuleId;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string 安全事件状态
     */
    public $Status;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 查询起始地址
     */
    public $Offset;

    /**
     * @var string 查询个数
     */
    public $Limit;

    /**
     * @param string $QueryKey 模糊查询字段
     * @param string $EventName 安全事件名称
     * @param string $DivulgeSoure 监控源
     * @param string $Asset 受影响资产
     * @param string $RuleName 命中主题集下的规则topic名称
     * @param string $RuleId 命中主题集下的规则topic唯一id
     * @param string $Level 风险等级
     * @param string $Status 安全事件状态
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param string $Offset 查询起始地址
     * @param string $Limit 查询个数
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
        if (array_key_exists("QueryKey",$param) and $param["QueryKey"] !== null) {
            $this->QueryKey = $param["QueryKey"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("DivulgeSoure",$param) and $param["DivulgeSoure"] !== null) {
            $this->DivulgeSoure = $param["DivulgeSoure"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

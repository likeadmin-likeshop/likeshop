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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealServerStatistics请求参数结构体
 *
 * @method string getRealServerId() 获取源站ID
 * @method void setRealServerId(string $RealServerId) 设置源站ID
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getRuleId() 获取L7层规则ID
 * @method void setRuleId(string $RuleId) 设置L7层规则ID
 * @method integer getWithinTime() 获取统计时长，单位：小时。仅支持最近1,3,6,12,24小时的统计查询
 * @method void setWithinTime(integer $WithinTime) 设置统计时长，单位：小时。仅支持最近1,3,6,12,24小时的统计查询
 * @method string getStartTime() 获取统计开始时间(2020-08-19 00:00:00)
 * @method void setStartTime(string $StartTime) 设置统计开始时间(2020-08-19 00:00:00)
 * @method string getEndTime() 获取统计结束时间(2020-08-19 23:59:59)
 * @method void setEndTime(string $EndTime) 设置统计结束时间(2020-08-19 23:59:59)
 * @method integer getGranularity() 获取统计的数据粒度，单位：秒，仅支持1分钟-60和5分钟-300粒度
 * @method void setGranularity(integer $Granularity) 设置统计的数据粒度，单位：秒，仅支持1分钟-60和5分钟-300粒度
 */
class DescribeRealServerStatisticsRequest extends AbstractModel
{
    /**
     * @var string 源站ID
     */
    public $RealServerId;

    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string L7层规则ID
     */
    public $RuleId;

    /**
     * @var integer 统计时长，单位：小时。仅支持最近1,3,6,12,24小时的统计查询
     */
    public $WithinTime;

    /**
     * @var string 统计开始时间(2020-08-19 00:00:00)
     */
    public $StartTime;

    /**
     * @var string 统计结束时间(2020-08-19 23:59:59)
     */
    public $EndTime;

    /**
     * @var integer 统计的数据粒度，单位：秒，仅支持1分钟-60和5分钟-300粒度
     */
    public $Granularity;

    /**
     * @param string $RealServerId 源站ID
     * @param string $ListenerId 监听器ID
     * @param string $RuleId L7层规则ID
     * @param integer $WithinTime 统计时长，单位：小时。仅支持最近1,3,6,12,24小时的统计查询
     * @param string $StartTime 统计开始时间(2020-08-19 00:00:00)
     * @param string $EndTime 统计结束时间(2020-08-19 23:59:59)
     * @param integer $Granularity 统计的数据粒度，单位：秒，仅支持1分钟-60和5分钟-300粒度
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("WithinTime",$param) and $param["WithinTime"] !== null) {
            $this->WithinTime = $param["WithinTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}

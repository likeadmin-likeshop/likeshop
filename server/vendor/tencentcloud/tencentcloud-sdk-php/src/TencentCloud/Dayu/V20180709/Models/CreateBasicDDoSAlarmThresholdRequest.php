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
 * CreateBasicDDoSAlarmThreshold请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（basic表示DDoS基础防护）
 * @method string getMethod() 获取=get表示读取告警阈值；=set表示设置告警阈值；
 * @method void setMethod(string $Method) 设置=get表示读取告警阈值；=set表示设置告警阈值；
 * @method integer getAlarmType() 获取可选，告警阈值类型，1-入流量，2-清洗流量；当Method为set时必须填写；
 * @method void setAlarmType(integer $AlarmType) 设置可选，告警阈值类型，1-入流量，2-清洗流量；当Method为set时必须填写；
 * @method integer getAlarmThreshold() 获取可选，告警阈值，当Method为set时必须填写；当设置阈值为0时表示清除告警阈值配置；
 * @method void setAlarmThreshold(integer $AlarmThreshold) 设置可选，告警阈值，当Method为set时必须填写；当设置阈值为0时表示清除告警阈值配置；
 */
class CreateBasicDDoSAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var string =get表示读取告警阈值；=set表示设置告警阈值；
     */
    public $Method;

    /**
     * @var integer 可选，告警阈值类型，1-入流量，2-清洗流量；当Method为set时必须填写；
     */
    public $AlarmType;

    /**
     * @var integer 可选，告警阈值，当Method为set时必须填写；当设置阈值为0时表示清除告警阈值配置；
     */
    public $AlarmThreshold;

    /**
     * @param string $Business 大禹子产品代号（basic表示DDoS基础防护）
     * @param string $Method =get表示读取告警阈值；=set表示设置告警阈值；
     * @param integer $AlarmType 可选，告警阈值类型，1-入流量，2-清洗流量；当Method为set时必须填写；
     * @param integer $AlarmThreshold 可选，告警阈值，当Method为set时必须填写；当设置阈值为0时表示清除告警阈值配置；
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }
    }
}

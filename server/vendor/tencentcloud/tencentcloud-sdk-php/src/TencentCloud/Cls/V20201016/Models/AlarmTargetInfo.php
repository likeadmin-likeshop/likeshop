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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志告警监控对线
 *
 * @method string getLogsetId() 获取日志集ID。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID。
 * @method string getLogsetName() 获取日志集名称。
 * @method void setLogsetName(string $LogsetName) 设置日志集名称。
 * @method string getTopicId() 获取日志主题ID。
 * @method void setTopicId(string $TopicId) 设置日志主题ID。
 * @method string getTopicName() 获取日志主题名称。
 * @method void setTopicName(string $TopicName) 设置日志主题名称。
 * @method string getQuery() 获取查询语句。
 * @method void setQuery(string $Query) 设置查询语句。
 * @method integer getNumber() 获取告警对象序号。
 * @method void setNumber(integer $Number) 设置告警对象序号。
 * @method integer getStartTimeOffset() 获取查询范围起始时间相对当前的历史时间，取值为非正，最大值为0，最小值为-1440。
 * @method void setStartTimeOffset(integer $StartTimeOffset) 设置查询范围起始时间相对当前的历史时间，取值为非正，最大值为0，最小值为-1440。
 * @method integer getEndTimeOffset() 获取查询范围终止时间相对当前的历史时间，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
 * @method void setEndTimeOffset(integer $EndTimeOffset) 设置查询范围终止时间相对当前的历史时间，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
 */
class AlarmTargetInfo extends AbstractModel
{
    /**
     * @var string 日志集ID。
     */
    public $LogsetId;

    /**
     * @var string 日志集名称。
     */
    public $LogsetName;

    /**
     * @var string 日志主题ID。
     */
    public $TopicId;

    /**
     * @var string 日志主题名称。
     */
    public $TopicName;

    /**
     * @var string 查询语句。
     */
    public $Query;

    /**
     * @var integer 告警对象序号。
     */
    public $Number;

    /**
     * @var integer 查询范围起始时间相对当前的历史时间，取值为非正，最大值为0，最小值为-1440。
     */
    public $StartTimeOffset;

    /**
     * @var integer 查询范围终止时间相对当前的历史时间，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
     */
    public $EndTimeOffset;

    /**
     * @param string $LogsetId 日志集ID。
     * @param string $LogsetName 日志集名称。
     * @param string $TopicId 日志主题ID。
     * @param string $TopicName 日志主题名称。
     * @param string $Query 查询语句。
     * @param integer $Number 告警对象序号。
     * @param integer $StartTimeOffset 查询范围起始时间相对当前的历史时间，取值为非正，最大值为0，最小值为-1440。
     * @param integer $EndTimeOffset 查询范围终止时间相对当前的历史时间，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}

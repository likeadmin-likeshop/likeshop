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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallbackRecordsList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过1天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过1天。
 * @method string getStreamName() 获取流名称，精确匹配。
 * @method void setStreamName(string $StreamName) 设置流名称，精确匹配。
 * @method integer getPageNum() 获取页码
 * @method void setPageNum(integer $PageNum) 设置页码
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method integer getEventType() 获取事件类型。
0: "断流",
1: "推流",
100: "录制"
 * @method void setEventType(integer $EventType) 设置事件类型。
0: "断流",
1: "推流",
100: "录制"
 * @method integer getResultCode() 获取回调结果。0为成功，其他为失败
 * @method void setResultCode(integer $ResultCode) 设置回调结果。0为成功，其他为失败
 */
class DescribeCallbackRecordsListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过1天。
     */
    public $EndTime;

    /**
     * @var string 流名称，精确匹配。
     */
    public $StreamName;

    /**
     * @var integer 页码
     */
    public $PageNum;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var integer 事件类型。
0: "断流",
1: "推流",
100: "录制"
     */
    public $EventType;

    /**
     * @var integer 回调结果。0为成功，其他为失败
     */
    public $ResultCode;

    /**
     * @param string $StartTime 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过1天。
     * @param string $StreamName 流名称，精确匹配。
     * @param integer $PageNum 页码
     * @param integer $PageSize 每页条数
     * @param integer $EventType 事件类型。
0: "断流",
1: "推流",
100: "录制"
     * @param integer $ResultCode 回调结果。0为成功，其他为失败
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }
    }
}

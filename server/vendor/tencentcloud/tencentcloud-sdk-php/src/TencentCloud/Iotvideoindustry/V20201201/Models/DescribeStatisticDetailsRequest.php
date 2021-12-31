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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatisticDetails请求参数结构体
 *
 * @method string getStartDate() 获取开始日期，格式【YYYY-MM-DD】
 * @method void setStartDate(string $StartDate) 设置开始日期，格式【YYYY-MM-DD】
 * @method string getEndDate() 获取结束日期，格式【YYYY-MM-DD】
 * @method void setEndDate(string $EndDate) 设置结束日期，格式【YYYY-MM-DD】
 * @method string getStatisticField() 获取统计项。取值范围：
1.录制设备数：RecordingDevice
2.非录制设备数：NonRecordingDevice
3.观看流量总数：WatchFlux
4.已用存储容量总数：StorageUsage
 * @method void setStatisticField(string $StatisticField) 设置统计项。取值范围：
1.录制设备数：RecordingDevice
2.非录制设备数：NonRecordingDevice
3.观看流量总数：WatchFlux
4.已用存储容量总数：StorageUsage
 */
class DescribeStatisticDetailsRequest extends AbstractModel
{
    /**
     * @var string 开始日期，格式【YYYY-MM-DD】
     */
    public $StartDate;

    /**
     * @var string 结束日期，格式【YYYY-MM-DD】
     */
    public $EndDate;

    /**
     * @var string 统计项。取值范围：
1.录制设备数：RecordingDevice
2.非录制设备数：NonRecordingDevice
3.观看流量总数：WatchFlux
4.已用存储容量总数：StorageUsage
     */
    public $StatisticField;

    /**
     * @param string $StartDate 开始日期，格式【YYYY-MM-DD】
     * @param string $EndDate 结束日期，格式【YYYY-MM-DD】
     * @param string $StatisticField 统计项。取值范围：
1.录制设备数：RecordingDevice
2.非录制设备数：NonRecordingDevice
3.观看流量总数：WatchFlux
4.已用存储容量总数：StorageUsage
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("StatisticField",$param) and $param["StatisticField"] !== null) {
            $this->StatisticField = $param["StatisticField"];
        }
    }
}

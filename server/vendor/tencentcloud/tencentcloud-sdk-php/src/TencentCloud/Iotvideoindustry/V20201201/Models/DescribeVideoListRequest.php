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
 * DescribeVideoList请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间戳，秒级
 * @method void setStartTime(integer $StartTime) 设置开始时间戳，秒级
 * @method integer getEndTime() 获取结束时间戳，秒级
 * @method void setEndTime(integer $EndTime) 设置结束时间戳，秒级
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 */
class DescribeVideoListRequest extends AbstractModel
{
    /**
     * @var integer 开始时间戳，秒级
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳，秒级
     */
    public $EndTime;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @param integer $StartTime 开始时间戳，秒级
     * @param integer $EndTime 结束时间戳，秒级
     * @param integer $Offset 偏移
     * @param integer $Limit 限制
     * @param string $DeviceId 设备Id
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}

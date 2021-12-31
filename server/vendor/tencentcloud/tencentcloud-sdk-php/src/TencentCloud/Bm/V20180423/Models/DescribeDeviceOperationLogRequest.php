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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceOperationLog请求参数结构体
 *
 * @method string getInstanceId() 获取设备实例ID
 * @method void setInstanceId(string $InstanceId) 设置设备实例ID
 * @method string getStartTime() 获取查询开始日期
 * @method void setStartTime(string $StartTime) 设置查询开始日期
 * @method string getEndTime() 获取查询结束日期
 * @method void setEndTime(string $EndTime) 设置查询结束日期
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 */
class DescribeDeviceOperationLogRequest extends AbstractModel
{
    /**
     * @var string 设备实例ID
     */
    public $InstanceId;

    /**
     * @var string 查询开始日期
     */
    public $StartTime;

    /**
     * @var string 查询结束日期
     */
    public $EndTime;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @param string $InstanceId 设备实例ID
     * @param string $StartTime 查询开始日期
     * @param string $EndTime 查询结束日期
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

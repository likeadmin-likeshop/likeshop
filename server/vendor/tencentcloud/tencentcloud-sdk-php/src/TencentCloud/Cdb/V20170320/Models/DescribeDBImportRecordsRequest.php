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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBImportRecords请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getStartTime() 获取开始时间，时间格式如：2016-01-01 00:00:01。
 * @method void setStartTime(string $StartTime) 设置开始时间，时间格式如：2016-01-01 00:00:01。
 * @method string getEndTime() 获取结束时间，时间格式如：2016-01-01 23:59:59。
 * @method void setEndTime(string $EndTime) 设置结束时间，时间格式如：2016-01-01 23:59:59。
 * @method integer getOffset() 获取分页参数，偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页参数，偏移量，默认值为0。
 * @method integer getLimit() 获取分页参数，单次请求返回的数量，默认值为20，最小值为1，最大值为100。
 * @method void setLimit(integer $Limit) 设置分页参数，单次请求返回的数量，默认值为20，最小值为1，最大值为100。
 */
class DescribeDBImportRecordsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，时间格式如：2016-01-01 00:00:01。
     */
    public $StartTime;

    /**
     * @var string 结束时间，时间格式如：2016-01-01 23:59:59。
     */
    public $EndTime;

    /**
     * @var integer 分页参数，偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页参数，单次请求返回的数量，默认值为20，最小值为1，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $StartTime 开始时间，时间格式如：2016-01-01 00:00:01。
     * @param string $EndTime 结束时间，时间格式如：2016-01-01 23:59:59。
     * @param integer $Offset 分页参数，偏移量，默认值为0。
     * @param integer $Limit 分页参数，单次请求返回的数量，默认值为20，最小值为1，最大值为100。
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

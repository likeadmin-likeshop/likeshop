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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceOperations请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method string getStartTime() 获取起始时间, e.g. "2019-03-07 16:30:39"
 * @method void setStartTime(string $StartTime) 设置起始时间, e.g. "2019-03-07 16:30:39"
 * @method string getEndTime() 获取结束时间, e.g. "2019-03-30 20:18:03"
 * @method void setEndTime(string $EndTime) 设置结束时间, e.g. "2019-03-30 20:18:03"
 * @method integer getOffset() 获取分页起始值
 * @method void setOffset(integer $Offset) 设置分页起始值
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 */
class DescribeInstanceOperationsRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var string 起始时间, e.g. "2019-03-07 16:30:39"
     */
    public $StartTime;

    /**
     * @var string 结束时间, e.g. "2019-03-30 20:18:03"
     */
    public $EndTime;

    /**
     * @var integer 分页起始值
     */
    public $Offset;

    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群实例ID
     * @param string $StartTime 起始时间, e.g. "2019-03-07 16:30:39"
     * @param string $EndTime 结束时间, e.g. "2019-03-30 20:18:03"
     * @param integer $Offset 分页起始值
     * @param integer $Limit 分页大小
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

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
 * DescribeRollbackTaskDetail请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
 * @method string getAsyncRequestId() 获取异步任务 ID。
 * @method void setAsyncRequestId(string $AsyncRequestId) 设置异步任务 ID。
 * @method integer getLimit() 获取分页参数，每次请求返回的记录数。默认值为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置分页参数，每次请求返回的记录数。默认值为 20，最大值为 100。
 * @method integer getOffset() 获取分页偏移量。默认为 0。
 * @method void setOffset(integer $Offset) 设置分页偏移量。默认为 0。
 */
class DescribeRollbackTaskDetailRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
     */
    public $InstanceId;

    /**
     * @var string 异步任务 ID。
     */
    public $AsyncRequestId;

    /**
     * @var integer 分页参数，每次请求返回的记录数。默认值为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。默认为 0。
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例 ID。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
     * @param string $AsyncRequestId 异步任务 ID。
     * @param integer $Limit 分页参数，每次请求返回的记录数。默认值为 20，最大值为 100。
     * @param integer $Offset 分页偏移量。默认为 0。
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

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

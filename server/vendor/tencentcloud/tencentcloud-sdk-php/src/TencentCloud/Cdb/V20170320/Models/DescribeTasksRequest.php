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
 * DescribeTasks请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method string getAsyncRequestId() 获取异步任务请求 ID，执行云数据库相关操作返回的 AsyncRequestId。
 * @method void setAsyncRequestId(string $AsyncRequestId) 设置异步任务请求 ID，执行云数据库相关操作返回的 AsyncRequestId。
 * @method array getTaskTypes() 获取任务类型，不传值则查询所有任务类型，支持的值包括：
1 - 数据库回档；
2 - SQL操作；
3 - 数据导入；
5 - 参数设置；
6 - 初始化云数据库实例；
7 - 重启云数据库实例；
8 - 开启云数据库实例GTID；
9 - 只读实例升级；
10 - 数据库批量回档；
11 - 主实例升级；
12 - 删除云数据库库表；
13 - 灾备实例提升为主。
 * @method void setTaskTypes(array $TaskTypes) 设置任务类型，不传值则查询所有任务类型，支持的值包括：
1 - 数据库回档；
2 - SQL操作；
3 - 数据导入；
5 - 参数设置；
6 - 初始化云数据库实例；
7 - 重启云数据库实例；
8 - 开启云数据库实例GTID；
9 - 只读实例升级；
10 - 数据库批量回档；
11 - 主实例升级；
12 - 删除云数据库库表；
13 - 灾备实例提升为主。
 * @method array getTaskStatus() 获取任务状态，不传值则查询所有任务状态，支持的值包括：
-1 - 未定义；
0 - 初始化；
1 - 运行中；
2 - 执行成功；
3 - 执行失败；
4 - 已终止；
5 - 已删除；
6 - 已暂停。
 * @method void setTaskStatus(array $TaskStatus) 设置任务状态，不传值则查询所有任务状态，支持的值包括：
-1 - 未定义；
0 - 初始化；
1 - 运行中；
2 - 执行成功；
3 - 执行失败；
4 - 已终止；
5 - 已删除；
6 - 已暂停。
 * @method string getStartTimeBegin() 获取第一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
 * @method void setStartTimeBegin(string $StartTimeBegin) 设置第一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
 * @method string getStartTimeEnd() 获取最后一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
 * @method void setStartTimeEnd(string $StartTimeEnd) 设置最后一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
 * @method integer getOffset() 获取记录偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20，最大值为100。
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     */
    public $InstanceId;

    /**
     * @var string 异步任务请求 ID，执行云数据库相关操作返回的 AsyncRequestId。
     */
    public $AsyncRequestId;

    /**
     * @var array 任务类型，不传值则查询所有任务类型，支持的值包括：
1 - 数据库回档；
2 - SQL操作；
3 - 数据导入；
5 - 参数设置；
6 - 初始化云数据库实例；
7 - 重启云数据库实例；
8 - 开启云数据库实例GTID；
9 - 只读实例升级；
10 - 数据库批量回档；
11 - 主实例升级；
12 - 删除云数据库库表；
13 - 灾备实例提升为主。
     */
    public $TaskTypes;

    /**
     * @var array 任务状态，不传值则查询所有任务状态，支持的值包括：
-1 - 未定义；
0 - 初始化；
1 - 运行中；
2 - 执行成功；
3 - 执行失败；
4 - 已终止；
5 - 已删除；
6 - 已暂停。
     */
    public $TaskStatus;

    /**
     * @var string 第一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
     */
    public $StartTimeBegin;

    /**
     * @var string 最后一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
     */
    public $StartTimeEnd;

    /**
     * @var integer 记录偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     * @param string $AsyncRequestId 异步任务请求 ID，执行云数据库相关操作返回的 AsyncRequestId。
     * @param array $TaskTypes 任务类型，不传值则查询所有任务类型，支持的值包括：
1 - 数据库回档；
2 - SQL操作；
3 - 数据导入；
5 - 参数设置；
6 - 初始化云数据库实例；
7 - 重启云数据库实例；
8 - 开启云数据库实例GTID；
9 - 只读实例升级；
10 - 数据库批量回档；
11 - 主实例升级；
12 - 删除云数据库库表；
13 - 灾备实例提升为主。
     * @param array $TaskStatus 任务状态，不传值则查询所有任务状态，支持的值包括：
-1 - 未定义；
0 - 初始化；
1 - 运行中；
2 - 执行成功；
3 - 执行失败；
4 - 已终止；
5 - 已删除；
6 - 已暂停。
     * @param string $StartTimeBegin 第一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
     * @param string $StartTimeEnd 最后一个任务的开始时间，用于范围查询，时间格式如：2017-12-31 10:40:01。
     * @param integer $Offset 记录偏移量，默认值为0。
     * @param integer $Limit 单次请求返回的数量，默认值为20，最大值为100。
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

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("StartTimeBegin",$param) and $param["StartTimeBegin"] !== null) {
            $this->StartTimeBegin = $param["StartTimeBegin"];
        }

        if (array_key_exists("StartTimeEnd",$param) and $param["StartTimeEnd"] !== null) {
            $this->StartTimeEnd = $param["StartTimeEnd"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

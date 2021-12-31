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
 * DescribeLivePullStreamTasks请求参数结构体
 *
 * @method string getTaskId() 获取任务 ID。 
来源：调用 CreateLivePullStreamTask 接口时返回。
不填默认查询所有任务，按更新时间倒序排序。
 * @method void setTaskId(string $TaskId) 设置任务 ID。 
来源：调用 CreateLivePullStreamTask 接口时返回。
不填默认查询所有任务，按更新时间倒序排序。
 * @method integer getPageNum() 获取取得第几页，默认值：1。
 * @method void setPageNum(integer $PageNum) 设置取得第几页，默认值：1。
 * @method integer getPageSize() 获取分页大小，默认值：10。
取值范围：1~20 之前的任意整数。
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认值：10。
取值范围：1~20 之前的任意整数。
 */
class DescribeLivePullStreamTasksRequest extends AbstractModel
{
    /**
     * @var string 任务 ID。 
来源：调用 CreateLivePullStreamTask 接口时返回。
不填默认查询所有任务，按更新时间倒序排序。
     */
    public $TaskId;

    /**
     * @var integer 取得第几页，默认值：1。
     */
    public $PageNum;

    /**
     * @var integer 分页大小，默认值：10。
取值范围：1~20 之前的任意整数。
     */
    public $PageSize;

    /**
     * @param string $TaskId 任务 ID。 
来源：调用 CreateLivePullStreamTask 接口时返回。
不填默认查询所有任务，按更新时间倒序排序。
     * @param integer $PageNum 取得第几页，默认值：1。
     * @param integer $PageSize 分页大小，默认值：10。
取值范围：1~20 之前的任意整数。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}

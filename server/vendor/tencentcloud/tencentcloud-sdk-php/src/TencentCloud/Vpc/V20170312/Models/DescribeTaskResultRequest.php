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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResult请求参数结构体
 *
 * @method integer getTaskId() 获取异步任务ID。TaskId和DealName必填一个参数
 * @method void setTaskId(integer $TaskId) 设置异步任务ID。TaskId和DealName必填一个参数
 * @method string getDealName() 获取计费订单号。TaskId和DealName必填一个参数
 * @method void setDealName(string $DealName) 设置计费订单号。TaskId和DealName必填一个参数
 */
class DescribeTaskResultRequest extends AbstractModel
{
    /**
     * @var integer 异步任务ID。TaskId和DealName必填一个参数
     */
    public $TaskId;

    /**
     * @var string 计费订单号。TaskId和DealName必填一个参数
     */
    public $DealName;

    /**
     * @param integer $TaskId 异步任务ID。TaskId和DealName必填一个参数
     * @param string $DealName 计费订单号。TaskId和DealName必填一个参数
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

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}

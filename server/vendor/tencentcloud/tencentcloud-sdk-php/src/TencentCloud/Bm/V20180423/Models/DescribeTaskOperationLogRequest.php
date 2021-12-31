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
 * DescribeTaskOperationLog请求参数结构体
 *
 * @method string getTaskId() 获取维修任务ID
 * @method void setTaskId(string $TaskId) 设置维修任务ID
 * @method string getOrderField() 获取排序字段，目前支持：OperationTime
 * @method void setOrderField(string $OrderField) 设置排序字段，目前支持：OperationTime
 * @method integer getOrder() 获取排序方式 0:递增(默认) 1:递减
 * @method void setOrder(integer $Order) 设置排序方式 0:递增(默认) 1:递减
 */
class DescribeTaskOperationLogRequest extends AbstractModel
{
    /**
     * @var string 维修任务ID
     */
    public $TaskId;

    /**
     * @var string 排序字段，目前支持：OperationTime
     */
    public $OrderField;

    /**
     * @var integer 排序方式 0:递增(默认) 1:递减
     */
    public $Order;

    /**
     * @param string $TaskId 维修任务ID
     * @param string $OrderField 排序字段，目前支持：OperationTime
     * @param integer $Order 排序方式 0:递增(默认) 1:递减
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

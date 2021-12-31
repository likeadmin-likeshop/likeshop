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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrateJobs请求参数结构体
 *
 * @method string getJobId() 获取数据迁移任务ID
 * @method void setJobId(string $JobId) 设置数据迁移任务ID
 * @method string getJobName() 获取数据迁移任务名称
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
 * @method string getOrder() 获取排序字段，可以取值为JobId、Status、JobName、MigrateType、RunMode、CreateTime
 * @method void setOrder(string $Order) 设置排序字段，可以取值为JobId、Status、JobName、MigrateType、RunMode、CreateTime
 * @method string getOrderSeq() 获取排序方式，升序为ASC，降序为DESC
 * @method void setOrderSeq(string $OrderSeq) 设置排序方式，升序为ASC，降序为DESC
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回实例数量，默认20，有效区间[1,100]
 * @method void setLimit(integer $Limit) 设置返回实例数量，默认20，有效区间[1,100]
 */
class DescribeMigrateJobsRequest extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID
     */
    public $JobId;

    /**
     * @var string 数据迁移任务名称
     */
    public $JobName;

    /**
     * @var string 排序字段，可以取值为JobId、Status、JobName、MigrateType、RunMode、CreateTime
     */
    public $Order;

    /**
     * @var string 排序方式，升序为ASC，降序为DESC
     */
    public $OrderSeq;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回实例数量，默认20，有效区间[1,100]
     */
    public $Limit;

    /**
     * @param string $JobId 数据迁移任务ID
     * @param string $JobName 数据迁移任务名称
     * @param string $Order 排序字段，可以取值为JobId、Status、JobName、MigrateType、RunMode、CreateTime
     * @param string $OrderSeq 排序方式，升序为ASC，降序为DESC
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回实例数量，默认20，有效区间[1,100]
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

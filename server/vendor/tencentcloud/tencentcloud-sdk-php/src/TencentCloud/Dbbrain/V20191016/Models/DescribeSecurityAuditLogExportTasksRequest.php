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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityAuditLogExportTasks请求参数结构体
 *
 * @method string getSecAuditGroupId() 获取安全审计组Id。
 * @method void setSecAuditGroupId(string $SecAuditGroupId) 设置安全审计组Id。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL。
 * @method array getAsyncRequestIds() 获取日志导出任务Id列表。
 * @method void setAsyncRequestIds(array $AsyncRequestIds) 设置日志导出任务Id列表。
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认20。
 */
class DescribeSecurityAuditLogExportTasksRequest extends AbstractModel
{
    /**
     * @var string 安全审计组Id。
     */
    public $SecAuditGroupId;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL。
     */
    public $Product;

    /**
     * @var array 日志导出任务Id列表。
     */
    public $AsyncRequestIds;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20。
     */
    public $Limit;

    /**
     * @param string $SecAuditGroupId 安全审计组Id。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL。
     * @param array $AsyncRequestIds 日志导出任务Id列表。
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认20。
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
        if (array_key_exists("SecAuditGroupId",$param) and $param["SecAuditGroupId"] !== null) {
            $this->SecAuditGroupId = $param["SecAuditGroupId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

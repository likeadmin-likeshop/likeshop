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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecurityAuditLogExportTasks请求参数结构体
 *
 * @method string getSecAuditGroupId() 获取安全审计组Id。
 * @method void setSecAuditGroupId(string $SecAuditGroupId) 设置安全审计组Id。
 * @method array getAsyncRequestIds() 获取日志导出任务Id列表，接口会忽略不存在或已删除的任务Id。
 * @method void setAsyncRequestIds(array $AsyncRequestIds) 设置日志导出任务Id列表，接口会忽略不存在或已删除的任务Id。
 * @method string getProduct() 获取服务产品类型，支持值： "mysql" - 云数据库 MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值： "mysql" - 云数据库 MySQL。
 */
class DeleteSecurityAuditLogExportTasksRequest extends AbstractModel
{
    /**
     * @var string 安全审计组Id。
     */
    public $SecAuditGroupId;

    /**
     * @var array 日志导出任务Id列表，接口会忽略不存在或已删除的任务Id。
     */
    public $AsyncRequestIds;

    /**
     * @var string 服务产品类型，支持值： "mysql" - 云数据库 MySQL。
     */
    public $Product;

    /**
     * @param string $SecAuditGroupId 安全审计组Id。
     * @param array $AsyncRequestIds 日志导出任务Id列表，接口会忽略不存在或已删除的任务Id。
     * @param string $Product 服务产品类型，支持值： "mysql" - 云数据库 MySQL。
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

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}

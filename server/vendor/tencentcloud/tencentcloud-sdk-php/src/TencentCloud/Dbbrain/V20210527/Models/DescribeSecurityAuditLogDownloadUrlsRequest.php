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
 * DescribeSecurityAuditLogDownloadUrls请求参数结构体
 *
 * @method string getSecAuditGroupId() 获取安全审计组Id。
 * @method void setSecAuditGroupId(string $SecAuditGroupId) 设置安全审计组Id。
 * @method integer getAsyncRequestId() 获取异步任务Id。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务Id。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL。
 */
class DescribeSecurityAuditLogDownloadUrlsRequest extends AbstractModel
{
    /**
     * @var string 安全审计组Id。
     */
    public $SecAuditGroupId;

    /**
     * @var integer 异步任务Id。
     */
    public $AsyncRequestId;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL。
     */
    public $Product;

    /**
     * @param string $SecAuditGroupId 安全审计组Id。
     * @param integer $AsyncRequestId 异步任务Id。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL。
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

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}

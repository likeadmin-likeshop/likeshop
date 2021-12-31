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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tsf类型入参
 *
 * @method string getClusterId() 获取微服务集群。
 * @method void setClusterId(string $ClusterId) 设置微服务集群。
 * @method string getNamespaceId() 获取微服务命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置微服务命名空间。
 * @method string getMicroServiceName() 获取微服务名称。
 * @method void setMicroServiceName(string $MicroServiceName) 设置微服务名称。
 */
class MicroServiceReq extends AbstractModel
{
    /**
     * @var string 微服务集群。
     */
    public $ClusterId;

    /**
     * @var string 微服务命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 微服务名称。
     */
    public $MicroServiceName;

    /**
     * @param string $ClusterId 微服务集群。
     * @param string $NamespaceId 微服务命名空间。
     * @param string $MicroServiceName 微服务名称。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("MicroServiceName",$param) and $param["MicroServiceName"] !== null) {
            $this->MicroServiceName = $param["MicroServiceName"];
        }
    }
}

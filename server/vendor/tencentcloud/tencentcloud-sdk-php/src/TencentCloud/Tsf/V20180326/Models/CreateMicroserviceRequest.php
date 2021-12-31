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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMicroservice请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getMicroserviceName() 获取微服务名称
 * @method void setMicroserviceName(string $MicroserviceName) 设置微服务名称
 * @method string getMicroserviceDesc() 获取微服务描述信息
 * @method void setMicroserviceDesc(string $MicroserviceDesc) 设置微服务描述信息
 */
class CreateMicroserviceRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 微服务名称
     */
    public $MicroserviceName;

    /**
     * @var string 微服务描述信息
     */
    public $MicroserviceDesc;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $MicroserviceName 微服务名称
     * @param string $MicroserviceDesc 微服务描述信息
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("MicroserviceDesc",$param) and $param["MicroserviceDesc"] !== null) {
            $this->MicroserviceDesc = $param["MicroserviceDesc"];
        }
    }
}

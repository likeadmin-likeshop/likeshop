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
 * DescribeServiceSubDomainMappings请求参数结构体
 *
 * @method string getServiceId() 获取服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一 ID。
 * @method string getSubDomain() 获取服务绑定的自定义域名。
 * @method void setSubDomain(string $SubDomain) 设置服务绑定的自定义域名。
 */
class DescribeServiceSubDomainMappingsRequest extends AbstractModel
{
    /**
     * @var string 服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 服务绑定的自定义域名。
     */
    public $SubDomain;

    /**
     * @param string $ServiceId 服务唯一 ID。
     * @param string $SubDomain 服务绑定的自定义域名。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }
    }
}

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
 * ModifyService请求参数结构体
 *
 * @method string getServiceId() 获取待修改服务的唯一 Id。
 * @method void setServiceId(string $ServiceId) 设置待修改服务的唯一 Id。
 * @method string getServiceName() 获取修改后的服务名称。
 * @method void setServiceName(string $ServiceName) 设置修改后的服务名称。
 * @method string getServiceDesc() 获取修改后的服务描述。
 * @method void setServiceDesc(string $ServiceDesc) 设置修改后的服务描述。
 * @method string getProtocol() 获取修改后的服务前端请求类型，如 http、https和 http&https。
 * @method void setProtocol(string $Protocol) 设置修改后的服务前端请求类型，如 http、https和 http&https。
 * @method array getNetTypes() 获取网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
 * @method void setNetTypes(array $NetTypes) 设置网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
 */
class ModifyServiceRequest extends AbstractModel
{
    /**
     * @var string 待修改服务的唯一 Id。
     */
    public $ServiceId;

    /**
     * @var string 修改后的服务名称。
     */
    public $ServiceName;

    /**
     * @var string 修改后的服务描述。
     */
    public $ServiceDesc;

    /**
     * @var string 修改后的服务前端请求类型，如 http、https和 http&https。
     */
    public $Protocol;

    /**
     * @var array 网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
     */
    public $NetTypes;

    /**
     * @param string $ServiceId 待修改服务的唯一 Id。
     * @param string $ServiceName 修改后的服务名称。
     * @param string $ServiceDesc 修改后的服务描述。
     * @param string $Protocol 修改后的服务前端请求类型，如 http、https和 http&https。
     * @param array $NetTypes 网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }
    }
}

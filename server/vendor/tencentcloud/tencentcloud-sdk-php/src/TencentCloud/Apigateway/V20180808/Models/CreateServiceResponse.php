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
 * CreateService返回参数结构体
 *
 * @method string getServiceId() 获取服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
 * @method string getServiceName() 获取用户自定义服务名称。
 * @method void setServiceName(string $ServiceName) 设置用户自定义服务名称。
 * @method string getServiceDesc() 获取用户自定义服务描述。
 * @method void setServiceDesc(string $ServiceDesc) 设置用户自定义服务描述。
 * @method string getOuterSubDomain() 获取外网默认域名。
 * @method void setOuterSubDomain(string $OuterSubDomain) 设置外网默认域名。
 * @method string getInnerSubDomain() 获取vpc内网默认域名。
 * @method void setInnerSubDomain(string $InnerSubDomain) 设置vpc内网默认域名。
 * @method string getCreatedTime() 获取服务创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置服务创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method array getNetTypes() 获取网络类型列表，INNER为内网访问，OUTER为外网访问。
 * @method void setNetTypes(array $NetTypes) 设置网络类型列表，INNER为内网访问，OUTER为外网访问。
 * @method string getIpVersion() 获取IP版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpVersion(string $IpVersion) 设置IP版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateServiceResponse extends AbstractModel
{
    /**
     * @var string 服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var string 用户自定义服务名称。
     */
    public $ServiceName;

    /**
     * @var string 用户自定义服务描述。
     */
    public $ServiceDesc;

    /**
     * @var string 外网默认域名。
     */
    public $OuterSubDomain;

    /**
     * @var string vpc内网默认域名。
     */
    public $InnerSubDomain;

    /**
     * @var string 服务创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @var array 网络类型列表，INNER为内网访问，OUTER为外网访问。
     */
    public $NetTypes;

    /**
     * @var string IP版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServiceId 服务唯一ID。
     * @param string $ServiceName 用户自定义服务名称。
     * @param string $ServiceDesc 用户自定义服务描述。
     * @param string $OuterSubDomain 外网默认域名。
     * @param string $InnerSubDomain vpc内网默认域名。
     * @param string $CreatedTime 服务创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param array $NetTypes 网络类型列表，INNER为内网访问，OUTER为外网访问。
     * @param string $IpVersion IP版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("InnerSubDomain",$param) and $param["InnerSubDomain"] !== null) {
            $this->InnerSubDomain = $param["InnerSubDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

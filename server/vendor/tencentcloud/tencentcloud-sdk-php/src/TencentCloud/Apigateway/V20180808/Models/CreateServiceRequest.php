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
 * CreateService请求参数结构体
 *
 * @method string getServiceName() 获取用户自定义的服务名称。
 * @method void setServiceName(string $ServiceName) 设置用户自定义的服务名称。
 * @method string getProtocol() 获取服务的前端请求类型。如 http、https、http&https。
 * @method void setProtocol(string $Protocol) 设置服务的前端请求类型。如 http、https、http&https。
 * @method string getServiceDesc() 获取用户自定义的服务描述。
 * @method void setServiceDesc(string $ServiceDesc) 设置用户自定义的服务描述。
 * @method string getExclusiveSetName() 获取独立集群名称，用于指定创建服务所在的独立集群。
 * @method void setExclusiveSetName(string $ExclusiveSetName) 设置独立集群名称，用于指定创建服务所在的独立集群。
 * @method array getNetTypes() 获取网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
 * @method void setNetTypes(array $NetTypes) 设置网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
 * @method string getIpVersion() 获取IP版本号，支持IPv4和IPv6，默认为IPv4。
 * @method void setIpVersion(string $IpVersion) 设置IP版本号，支持IPv4和IPv6，默认为IPv4。
 * @method string getSetServerName() 获取集群名称。保留字段，tsf serverlss类型使用。
 * @method void setSetServerName(string $SetServerName) 设置集群名称。保留字段，tsf serverlss类型使用。
 * @method string getAppIdType() 获取用户类型。保留类型，serverless用户使用。
 * @method void setAppIdType(string $AppIdType) 设置用户类型。保留类型，serverless用户使用。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getInstanceId() 获取独享实例id
 * @method void setInstanceId(string $InstanceId) 设置独享实例id
 */
class CreateServiceRequest extends AbstractModel
{
    /**
     * @var string 用户自定义的服务名称。
     */
    public $ServiceName;

    /**
     * @var string 服务的前端请求类型。如 http、https、http&https。
     */
    public $Protocol;

    /**
     * @var string 用户自定义的服务描述。
     */
    public $ServiceDesc;

    /**
     * @var string 独立集群名称，用于指定创建服务所在的独立集群。
     */
    public $ExclusiveSetName;

    /**
     * @var array 网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
     */
    public $NetTypes;

    /**
     * @var string IP版本号，支持IPv4和IPv6，默认为IPv4。
     */
    public $IpVersion;

    /**
     * @var string 集群名称。保留字段，tsf serverlss类型使用。
     */
    public $SetServerName;

    /**
     * @var string 用户类型。保留类型，serverless用户使用。
     */
    public $AppIdType;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 独享实例id
     */
    public $InstanceId;

    /**
     * @param string $ServiceName 用户自定义的服务名称。
     * @param string $Protocol 服务的前端请求类型。如 http、https、http&https。
     * @param string $ServiceDesc 用户自定义的服务描述。
     * @param string $ExclusiveSetName 独立集群名称，用于指定创建服务所在的独立集群。
     * @param array $NetTypes 网络类型列表，用于指定支持的访问类型，INNER为内网访问，OUTER为外网访问。默认为OUTER。
     * @param string $IpVersion IP版本号，支持IPv4和IPv6，默认为IPv4。
     * @param string $SetServerName 集群名称。保留字段，tsf serverlss类型使用。
     * @param string $AppIdType 用户类型。保留类型，serverless用户使用。
     * @param array $Tags 标签。
     * @param string $InstanceId 独享实例id
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ExclusiveSetName",$param) and $param["ExclusiveSetName"] !== null) {
            $this->ExclusiveSetName = $param["ExclusiveSetName"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SetServerName",$param) and $param["SetServerName"] !== null) {
            $this->SetServerName = $param["SetServerName"];
        }

        if (array_key_exists("AppIdType",$param) and $param["AppIdType"] !== null) {
            $this->AppIdType = $param["AppIdType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}

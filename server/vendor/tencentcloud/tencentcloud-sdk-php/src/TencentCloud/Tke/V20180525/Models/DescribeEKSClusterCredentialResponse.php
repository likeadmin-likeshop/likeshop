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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEKSClusterCredential返回参数结构体
 *
 * @method array getAddresses() 获取集群的接入地址信息
 * @method void setAddresses(array $Addresses) 设置集群的接入地址信息
 * @method ClusterCredential getCredential() 获取集群的认证信息
 * @method void setCredential(ClusterCredential $Credential) 设置集群的认证信息
 * @method ClusterPublicLB getPublicLB() 获取集群的公网访问信息
 * @method void setPublicLB(ClusterPublicLB $PublicLB) 设置集群的公网访问信息
 * @method ClusterInternalLB getInternalLB() 获取集群的内网访问信息
 * @method void setInternalLB(ClusterInternalLB $InternalLB) 设置集群的内网访问信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEKSClusterCredentialResponse extends AbstractModel
{
    /**
     * @var array 集群的接入地址信息
     */
    public $Addresses;

    /**
     * @var ClusterCredential 集群的认证信息
     */
    public $Credential;

    /**
     * @var ClusterPublicLB 集群的公网访问信息
     */
    public $PublicLB;

    /**
     * @var ClusterInternalLB 集群的内网访问信息
     */
    public $InternalLB;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Addresses 集群的接入地址信息
     * @param ClusterCredential $Credential 集群的认证信息
     * @param ClusterPublicLB $PublicLB 集群的公网访问信息
     * @param ClusterInternalLB $InternalLB 集群的内网访问信息
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
        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = [];
            foreach ($param["Addresses"] as $key => $value){
                $obj = new IPAddress();
                $obj->deserialize($value);
                array_push($this->Addresses, $obj);
            }
        }

        if (array_key_exists("Credential",$param) and $param["Credential"] !== null) {
            $this->Credential = new ClusterCredential();
            $this->Credential->deserialize($param["Credential"]);
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new ClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("InternalLB",$param) and $param["InternalLB"] !== null) {
            $this->InternalLB = new ClusterInternalLB();
            $this->InternalLB->deserialize($param["InternalLB"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

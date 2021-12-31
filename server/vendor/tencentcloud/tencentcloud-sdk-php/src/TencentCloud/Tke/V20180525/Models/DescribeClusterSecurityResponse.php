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
 * DescribeClusterSecurity返回参数结构体
 *
 * @method string getUserName() 获取集群的账号名称
 * @method void setUserName(string $UserName) 设置集群的账号名称
 * @method string getPassword() 获取集群的访问密码
 * @method void setPassword(string $Password) 设置集群的访问密码
 * @method string getCertificationAuthority() 获取集群访问CA证书
 * @method void setCertificationAuthority(string $CertificationAuthority) 设置集群访问CA证书
 * @method string getClusterExternalEndpoint() 获取集群访问的地址
 * @method void setClusterExternalEndpoint(string $ClusterExternalEndpoint) 设置集群访问的地址
 * @method string getDomain() 获取集群访问的域名
 * @method void setDomain(string $Domain) 设置集群访问的域名
 * @method string getPgwEndpoint() 获取集群Endpoint地址
 * @method void setPgwEndpoint(string $PgwEndpoint) 设置集群Endpoint地址
 * @method array getSecurityPolicy() 获取集群访问策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityPolicy(array $SecurityPolicy) 设置集群访问策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKubeconfig() 获取集群Kubeconfig文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeconfig(string $Kubeconfig) 设置集群Kubeconfig文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJnsGwEndpoint() 获取集群JnsGw的访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJnsGwEndpoint(string $JnsGwEndpoint) 设置集群JnsGw的访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterSecurityResponse extends AbstractModel
{
    /**
     * @var string 集群的账号名称
     */
    public $UserName;

    /**
     * @var string 集群的访问密码
     */
    public $Password;

    /**
     * @var string 集群访问CA证书
     */
    public $CertificationAuthority;

    /**
     * @var string 集群访问的地址
     */
    public $ClusterExternalEndpoint;

    /**
     * @var string 集群访问的域名
     */
    public $Domain;

    /**
     * @var string 集群Endpoint地址
     */
    public $PgwEndpoint;

    /**
     * @var array 集群访问策略组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityPolicy;

    /**
     * @var string 集群Kubeconfig文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kubeconfig;

    /**
     * @var string 集群JnsGw的访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JnsGwEndpoint;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UserName 集群的账号名称
     * @param string $Password 集群的访问密码
     * @param string $CertificationAuthority 集群访问CA证书
     * @param string $ClusterExternalEndpoint 集群访问的地址
     * @param string $Domain 集群访问的域名
     * @param string $PgwEndpoint 集群Endpoint地址
     * @param array $SecurityPolicy 集群访问策略组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kubeconfig 集群Kubeconfig文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JnsGwEndpoint 集群JnsGw的访问地址
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CertificationAuthority",$param) and $param["CertificationAuthority"] !== null) {
            $this->CertificationAuthority = $param["CertificationAuthority"];
        }

        if (array_key_exists("ClusterExternalEndpoint",$param) and $param["ClusterExternalEndpoint"] !== null) {
            $this->ClusterExternalEndpoint = $param["ClusterExternalEndpoint"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PgwEndpoint",$param) and $param["PgwEndpoint"] !== null) {
            $this->PgwEndpoint = $param["PgwEndpoint"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = $param["SecurityPolicy"];
        }

        if (array_key_exists("Kubeconfig",$param) and $param["Kubeconfig"] !== null) {
            $this->Kubeconfig = $param["Kubeconfig"];
        }

        if (array_key_exists("JnsGwEndpoint",$param) and $param["JnsGwEndpoint"] !== null) {
            $this->JnsGwEndpoint = $param["JnsGwEndpoint"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

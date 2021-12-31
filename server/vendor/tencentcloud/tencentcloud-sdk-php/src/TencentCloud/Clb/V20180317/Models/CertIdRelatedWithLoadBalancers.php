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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书ID，以及与该证书ID关联的负载均衡实例列表
 *
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method array getLoadBalancers() 获取与证书关联的负载均衡实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancers(array $LoadBalancers) 设置与证书关联的负载均衡实例列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CertIdRelatedWithLoadBalancers extends AbstractModel
{
    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var array 与证书关联的负载均衡实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancers;

    /**
     * @param string $CertId 证书ID
     * @param array $LoadBalancers 与证书关联的负载均衡实例列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("LoadBalancers",$param) and $param["LoadBalancers"] !== null) {
            $this->LoadBalancers = [];
            foreach ($param["LoadBalancers"] as $key => $value){
                $obj = new LoadBalancer();
                $obj->deserialize($value);
                array_push($this->LoadBalancers, $obj);
            }
        }
    }
}

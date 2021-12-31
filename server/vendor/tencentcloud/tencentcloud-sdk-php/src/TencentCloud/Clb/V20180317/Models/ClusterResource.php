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
 * 集群内资源类型
 *
 * @method string getClusterId() 获取集群唯一ID，如tgw-12345678。
 * @method void setClusterId(string $ClusterId) 设置集群唯一ID，如tgw-12345678。
 * @method string getVip() 获取ip地址。
 * @method void setVip(string $Vip) 设置ip地址。
 * @method string getLoadBalancerId() 获取负载均衡唯一ID，如lb-12345678。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡唯一ID，如lb-12345678。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdle() 获取资源是否闲置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdle(string $Idle) 设置资源是否闲置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 */
class ClusterResource extends AbstractModel
{
    /**
     * @var string 集群唯一ID，如tgw-12345678。
     */
    public $ClusterId;

    /**
     * @var string ip地址。
     */
    public $Vip;

    /**
     * @var string 负载均衡唯一ID，如lb-12345678。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerId;

    /**
     * @var string 资源是否闲置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Idle;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @param string $ClusterId 集群唯一ID，如tgw-12345678。
     * @param string $Vip ip地址。
     * @param string $LoadBalancerId 负载均衡唯一ID，如lb-12345678。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Idle 资源是否闲置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称。
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Idle",$param) and $param["Idle"] !== null) {
            $this->Idle = $param["Idle"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}

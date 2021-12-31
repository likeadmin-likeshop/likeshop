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
 * DescribeLoadBalancerTraffic返回参数结构体
 *
 * @method array getLoadBalancerTraffic() 获取按出带宽从高到低排序后的负载均衡信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerTraffic(array $LoadBalancerTraffic) 设置按出带宽从高到低排序后的负载均衡信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLoadBalancerTrafficResponse extends AbstractModel
{
    /**
     * @var array 按出带宽从高到低排序后的负载均衡信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerTraffic;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LoadBalancerTraffic 按出带宽从高到低排序后的负载均衡信息。
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
        if (array_key_exists("LoadBalancerTraffic",$param) and $param["LoadBalancerTraffic"] !== null) {
            $this->LoadBalancerTraffic = [];
            foreach ($param["LoadBalancerTraffic"] as $key => $value){
                $obj = new LoadBalancerTraffic();
                $obj->deserialize($value);
                array_push($this->LoadBalancerTraffic, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

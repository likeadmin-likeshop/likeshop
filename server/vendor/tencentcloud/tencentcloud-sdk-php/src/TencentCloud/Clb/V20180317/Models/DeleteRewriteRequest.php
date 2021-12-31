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
 * DeleteRewrite请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getSourceListenerId() 获取源监听器ID。
 * @method void setSourceListenerId(string $SourceListenerId) 设置源监听器ID。
 * @method string getTargetListenerId() 获取目标监听器ID。
 * @method void setTargetListenerId(string $TargetListenerId) 设置目标监听器ID。
 * @method array getRewriteInfos() 获取转发规则之间的重定向关系。
 * @method void setRewriteInfos(array $RewriteInfos) 设置转发规则之间的重定向关系。
 */
class DeleteRewriteRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 源监听器ID。
     */
    public $SourceListenerId;

    /**
     * @var string 目标监听器ID。
     */
    public $TargetListenerId;

    /**
     * @var array 转发规则之间的重定向关系。
     */
    public $RewriteInfos;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $SourceListenerId 源监听器ID。
     * @param string $TargetListenerId 目标监听器ID。
     * @param array $RewriteInfos 转发规则之间的重定向关系。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("SourceListenerId",$param) and $param["SourceListenerId"] !== null) {
            $this->SourceListenerId = $param["SourceListenerId"];
        }

        if (array_key_exists("TargetListenerId",$param) and $param["TargetListenerId"] !== null) {
            $this->TargetListenerId = $param["TargetListenerId"];
        }

        if (array_key_exists("RewriteInfos",$param) and $param["RewriteInfos"] !== null) {
            $this->RewriteInfos = [];
            foreach ($param["RewriteInfos"] as $key => $value){
                $obj = new RewriteLocationMap();
                $obj->deserialize($value);
                array_push($this->RewriteInfos, $obj);
            }
        }
    }
}

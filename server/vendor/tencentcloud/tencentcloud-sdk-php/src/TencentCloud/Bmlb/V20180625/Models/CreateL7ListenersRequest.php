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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateL7Listeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID
 * @method array getListenerSet() 获取七层监听器信息数组，可以创建多个七层监听器。目前一个负载均衡下面最多允许创建50个七层监听器。
 * @method void setListenerSet(array $ListenerSet) 设置七层监听器信息数组，可以创建多个七层监听器。目前一个负载均衡下面最多允许创建50个七层监听器。
 */
class CreateL7ListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID
     */
    public $LoadBalancerId;

    /**
     * @var array 七层监听器信息数组，可以创建多个七层监听器。目前一个负载均衡下面最多允许创建50个七层监听器。
     */
    public $ListenerSet;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID
     * @param array $ListenerSet 七层监听器信息数组，可以创建多个七层监听器。目前一个负载均衡下面最多允许创建50个七层监听器。
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

        if (array_key_exists("ListenerSet",$param) and $param["ListenerSet"] !== null) {
            $this->ListenerSet = [];
            foreach ($param["ListenerSet"] as $key => $value){
                $obj = new CreateL7Listener();
                $obj->deserialize($value);
                array_push($this->ListenerSet, $obj);
            }
        }
    }
}

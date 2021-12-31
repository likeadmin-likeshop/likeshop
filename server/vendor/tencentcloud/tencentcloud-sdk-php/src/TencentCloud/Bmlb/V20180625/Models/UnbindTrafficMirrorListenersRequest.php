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
 * UnbindTrafficMirrorListeners请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID。
 * @method array getListenerIds() 获取七层监听器实例ID数组，可通过接口DescribeL7Listeners查询。
 * @method void setListenerIds(array $ListenerIds) 设置七层监听器实例ID数组，可通过接口DescribeL7Listeners查询。
 */
class UnbindTrafficMirrorListenersRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID。
     */
    public $TrafficMirrorId;

    /**
     * @var array 七层监听器实例ID数组，可通过接口DescribeL7Listeners查询。
     */
    public $ListenerIds;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID。
     * @param array $ListenerIds 七层监听器实例ID数组，可通过接口DescribeL7Listeners查询。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }
    }
}

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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHTTPListenerAttribute请求参数结构体
 *
 * @method string getListenerId() 获取需要修改的监听器ID
 * @method void setListenerId(string $ListenerId) 设置需要修改的监听器ID
 * @method string getListenerName() 获取新的监听器名称
 * @method void setListenerName(string $ListenerName) 设置新的监听器名称
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 */
class ModifyHTTPListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string 需要修改的监听器ID
     */
    public $ListenerId;

    /**
     * @var string 新的监听器名称
     */
    public $ListenerName;

    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @param string $ListenerId 需要修改的监听器ID
     * @param string $ListenerName 新的监听器名称
     * @param string $ProxyId 通道ID
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}

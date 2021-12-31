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
 * CreateHTTPListener请求参数结构体
 *
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method void setPort(integer $Port) 设置监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method string getProxyId() 获取通道ID，与GroupId不能同时设置，对应为通道创建监听器
 * @method void setProxyId(string $ProxyId) 设置通道ID，与GroupId不能同时设置，对应为通道创建监听器
 * @method string getGroupId() 获取通道组ID，与ProxyId不能同时设置，对应为通道组创建监听器
 * @method void setGroupId(string $GroupId) 设置通道组ID，与ProxyId不能同时设置，对应为通道组创建监听器
 */
class CreateHTTPListenerRequest extends AbstractModel
{
    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     */
    public $Port;

    /**
     * @var string 通道ID，与GroupId不能同时设置，对应为通道创建监听器
     */
    public $ProxyId;

    /**
     * @var string 通道组ID，与ProxyId不能同时设置，对应为通道组创建监听器
     */
    public $GroupId;

    /**
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     * @param string $ProxyId 通道ID，与GroupId不能同时设置，对应为通道创建监听器
     * @param string $GroupId 通道组ID，与ProxyId不能同时设置，对应为通道组创建监听器
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}

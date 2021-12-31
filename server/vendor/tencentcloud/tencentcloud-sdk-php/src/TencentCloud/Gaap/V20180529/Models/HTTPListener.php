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
 * HTTP类型监听器信息
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method integer getCreateTime() 获取监听器创建时间，Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置监听器创建时间，Unix时间戳
 * @method string getProtocol() 获取监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTP
 * @method void setProtocol(string $Protocol) 设置监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTP
 * @method integer getListenerStatus() 获取监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 * @method void setListenerStatus(integer $ListenerStatus) 设置监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 */
class HTTPListener extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口
     */
    public $Port;

    /**
     * @var integer 监听器创建时间，Unix时间戳
     */
    public $CreateTime;

    /**
     * @var string 监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTP
     */
    public $Protocol;

    /**
     * @var integer 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     */
    public $ListenerStatus;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口
     * @param integer $CreateTime 监听器创建时间，Unix时间戳
     * @param string $Protocol 监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTP
     * @param integer $ListenerStatus 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }
    }
}

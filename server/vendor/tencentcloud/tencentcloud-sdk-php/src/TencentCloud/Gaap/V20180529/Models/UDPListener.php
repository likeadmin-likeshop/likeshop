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
 * UDP类型监听器信息
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method integer getRealServerPort() 获取监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerPort(integer $RealServerPort) 设置监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealServerType() 获取监听器绑定源站类型
 * @method void setRealServerType(string $RealServerType) 设置监听器绑定源站类型
 * @method string getProtocol() 获取监听器协议， UDP
 * @method void setProtocol(string $Protocol) 设置监听器协议， UDP
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
 * @method string getScheduler() 获取监听器源站访问策略
 * @method void setScheduler(string $Scheduler) 设置监听器源站访问策略
 * @method integer getBindStatus() 获取监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
 * @method void setBindStatus(integer $BindStatus) 设置监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
 * @method array getRealServerSet() 获取监听器绑定的源站信息
 * @method void setRealServerSet(array $RealServerSet) 设置监听器绑定的源站信息
 * @method integer getCreateTime() 获取监听器创建时间，Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置监听器创建时间，Unix时间戳
 */
class UDPListener extends AbstractModel
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
     * @var integer 监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerPort;

    /**
     * @var string 监听器绑定源站类型
     */
    public $RealServerType;

    /**
     * @var string 监听器协议， UDP
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
     * @var string 监听器源站访问策略
     */
    public $Scheduler;

    /**
     * @var integer 监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
     */
    public $BindStatus;

    /**
     * @var array 监听器绑定的源站信息
     */
    public $RealServerSet;

    /**
     * @var integer 监听器创建时间，Unix时间戳
     */
    public $CreateTime;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口
     * @param integer $RealServerPort 监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealServerType 监听器绑定源站类型
     * @param string $Protocol 监听器协议， UDP
     * @param integer $ListenerStatus 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     * @param string $Scheduler 监听器源站访问策略
     * @param integer $BindStatus 监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
     * @param array $RealServerSet 监听器绑定的源站信息
     * @param integer $CreateTime 监听器创建时间，Unix时间戳
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

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

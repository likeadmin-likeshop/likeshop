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
 * 查询绑定了某主机的四层监听器时返回的四层监听器信息。

 *
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getListenerName() 获取用户自定义的监听器名称。
 * @method void setListenerName(string $ListenerName) 设置用户自定义的监听器名称。
 * @method string getProtocol() 获取负载均衡实例监听器协议类型，可选值tcp，udp。
 * @method void setProtocol(string $Protocol) 设置负载均衡实例监听器协议类型，可选值tcp，udp。
 * @method integer getLoadBalancerPort() 获取负载均衡监听器的监听接口，可选值1~65535。
 * @method void setLoadBalancerPort(integer $LoadBalancerPort) 设置负载均衡监听器的监听接口，可选值1~65535。
 * @method integer getBandwidth() 获取用于计费模式为固定带宽计费，指定监听器最大带宽值，可选值：0-1000，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置用于计费模式为固定带宽计费，指定监听器最大带宽值，可选值：0-1000，单位：Mbps。
 * @method string getListenerType() 获取监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
 * @method void setListenerType(string $ListenerType) 设置监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
 * @method integer getSessionExpire() 获取会话保持时间。单位：秒
 * @method void setSessionExpire(integer $SessionExpire) 设置会话保持时间。单位：秒
 * @method integer getHealthSwitch() 获取是否开启了检查：1（开启）、0（关闭）。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开启了检查：1（开启）、0（关闭）。
 * @method integer getTimeOut() 获取响应超时时间，单位：秒。
 * @method void setTimeOut(integer $TimeOut) 设置响应超时时间，单位：秒。
 * @method integer getIntervalTime() 获取检查间隔，单位：秒。
 * @method void setIntervalTime(integer $IntervalTime) 设置检查间隔，单位：秒。
 * @method integer getHealthNum() 获取负载均衡监听器健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method void setHealthNum(integer $HealthNum) 设置负载均衡监听器健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method integer getUnhealthNum() 获取负载均衡监听器不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置负载均衡监听器不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method integer getStatus() 获取监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method void setStatus(integer $Status) 设置监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method string getAddTimestamp() 获取创建时间戳。
 * @method void setAddTimestamp(string $AddTimestamp) 设置创建时间戳。
 * @method integer getCustomHealthSwitch() 获取是否开启自定义健康检查：1（开启）、0（关闭）。默认值0，表示关闭。（该字段在健康检查开启的情况下才生效）
 * @method void setCustomHealthSwitch(integer $CustomHealthSwitch) 设置是否开启自定义健康检查：1（开启）、0（关闭）。默认值0，表示关闭。（该字段在健康检查开启的情况下才生效）
 * @method string getInputType() 获取自定义健康探测内容类型，可选值：text（文本）、hexadecimal（十六进制）。
 * @method void setInputType(string $InputType) 设置自定义健康探测内容类型，可选值：text（文本）、hexadecimal（十六进制）。
 * @method integer getLineSeparatorType() 获取探测内容类型为文本方式时，针对请求文本中换行替换方式。可选值：1（替换为LF）、2（替换为CR）、3（替换为LF+CR）。
 * @method void setLineSeparatorType(integer $LineSeparatorType) 设置探测内容类型为文本方式时，针对请求文本中换行替换方式。可选值：1（替换为LF）、2（替换为CR）、3（替换为LF+CR）。
 * @method string getHealthRequest() 获取自定义探测请求内容。
 * @method void setHealthRequest(string $HealthRequest) 设置自定义探测请求内容。
 * @method string getHealthResponse() 获取自定义探测返回内容。
 * @method void setHealthResponse(string $HealthResponse) 设置自定义探测返回内容。
 * @method integer getToaFlag() 获取是否开启toa：1（开启）、0（关闭）。
 * @method void setToaFlag(integer $ToaFlag) 设置是否开启toa：1（开启）、0（关闭）。
 * @method string getBalanceMode() 获取转发后端服务器调度类型。
 * @method void setBalanceMode(string $BalanceMode) 设置转发后端服务器调度类型。
 */
class L4ListenerInfo extends AbstractModel
{
    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 用户自定义的监听器名称。
     */
    public $ListenerName;

    /**
     * @var string 负载均衡实例监听器协议类型，可选值tcp，udp。
     */
    public $Protocol;

    /**
     * @var integer 负载均衡监听器的监听接口，可选值1~65535。
     */
    public $LoadBalancerPort;

    /**
     * @var integer 用于计费模式为固定带宽计费，指定监听器最大带宽值，可选值：0-1000，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
     */
    public $ListenerType;

    /**
     * @var integer 会话保持时间。单位：秒
     */
    public $SessionExpire;

    /**
     * @var integer 是否开启了检查：1（开启）、0（关闭）。
     */
    public $HealthSwitch;

    /**
     * @var integer 响应超时时间，单位：秒。
     */
    public $TimeOut;

    /**
     * @var integer 检查间隔，单位：秒。
     */
    public $IntervalTime;

    /**
     * @var integer 负载均衡监听器健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     */
    public $HealthNum;

    /**
     * @var integer 负载均衡监听器不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
     */
    public $UnhealthNum;

    /**
     * @var integer 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     */
    public $Status;

    /**
     * @var string 创建时间戳。
     */
    public $AddTimestamp;

    /**
     * @var integer 是否开启自定义健康检查：1（开启）、0（关闭）。默认值0，表示关闭。（该字段在健康检查开启的情况下才生效）
     */
    public $CustomHealthSwitch;

    /**
     * @var string 自定义健康探测内容类型，可选值：text（文本）、hexadecimal（十六进制）。
     */
    public $InputType;

    /**
     * @var integer 探测内容类型为文本方式时，针对请求文本中换行替换方式。可选值：1（替换为LF）、2（替换为CR）、3（替换为LF+CR）。
     */
    public $LineSeparatorType;

    /**
     * @var string 自定义探测请求内容。
     */
    public $HealthRequest;

    /**
     * @var string 自定义探测返回内容。
     */
    public $HealthResponse;

    /**
     * @var integer 是否开启toa：1（开启）、0（关闭）。
     */
    public $ToaFlag;

    /**
     * @var string 转发后端服务器调度类型。
     */
    public $BalanceMode;

    /**
     * @param string $ListenerId 监听器ID。
     * @param string $ListenerName 用户自定义的监听器名称。
     * @param string $Protocol 负载均衡实例监听器协议类型，可选值tcp，udp。
     * @param integer $LoadBalancerPort 负载均衡监听器的监听接口，可选值1~65535。
     * @param integer $Bandwidth 用于计费模式为固定带宽计费，指定监听器最大带宽值，可选值：0-1000，单位：Mbps。
     * @param string $ListenerType 监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
     * @param integer $SessionExpire 会话保持时间。单位：秒
     * @param integer $HealthSwitch 是否开启了检查：1（开启）、0（关闭）。
     * @param integer $TimeOut 响应超时时间，单位：秒。
     * @param integer $IntervalTime 检查间隔，单位：秒。
     * @param integer $HealthNum 负载均衡监听器健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     * @param integer $UnhealthNum 负载均衡监听器不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
     * @param integer $Status 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     * @param string $AddTimestamp 创建时间戳。
     * @param integer $CustomHealthSwitch 是否开启自定义健康检查：1（开启）、0（关闭）。默认值0，表示关闭。（该字段在健康检查开启的情况下才生效）
     * @param string $InputType 自定义健康探测内容类型，可选值：text（文本）、hexadecimal（十六进制）。
     * @param integer $LineSeparatorType 探测内容类型为文本方式时，针对请求文本中换行替换方式。可选值：1（替换为LF）、2（替换为CR）、3（替换为LF+CR）。
     * @param string $HealthRequest 自定义探测请求内容。
     * @param string $HealthResponse 自定义探测返回内容。
     * @param integer $ToaFlag 是否开启toa：1（开启）、0（关闭）。
     * @param string $BalanceMode 转发后端服务器调度类型。
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("LoadBalancerPort",$param) and $param["LoadBalancerPort"] !== null) {
            $this->LoadBalancerPort = $param["LoadBalancerPort"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ListenerType",$param) and $param["ListenerType"] !== null) {
            $this->ListenerType = $param["ListenerType"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTimestamp",$param) and $param["AddTimestamp"] !== null) {
            $this->AddTimestamp = $param["AddTimestamp"];
        }

        if (array_key_exists("CustomHealthSwitch",$param) and $param["CustomHealthSwitch"] !== null) {
            $this->CustomHealthSwitch = $param["CustomHealthSwitch"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("LineSeparatorType",$param) and $param["LineSeparatorType"] !== null) {
            $this->LineSeparatorType = $param["LineSeparatorType"];
        }

        if (array_key_exists("HealthRequest",$param) and $param["HealthRequest"] !== null) {
            $this->HealthRequest = $param["HealthRequest"];
        }

        if (array_key_exists("HealthResponse",$param) and $param["HealthResponse"] !== null) {
            $this->HealthResponse = $param["HealthResponse"];
        }

        if (array_key_exists("ToaFlag",$param) and $param["ToaFlag"] !== null) {
            $this->ToaFlag = $param["ToaFlag"];
        }

        if (array_key_exists("BalanceMode",$param) and $param["BalanceMode"] !== null) {
            $this->BalanceMode = $param["BalanceMode"];
        }
    }
}

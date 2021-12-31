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
 * ModifyL4Listener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getListenerId() 获取四层监听器ID。可通过接口DescribeL4Listeners查询。
 * @method void setListenerId(string $ListenerId) 设置四层监听器ID。可通过接口DescribeL4Listeners查询。
 * @method string getListenerName() 获取四层监听器名称。
 * @method void setListenerName(string $ListenerName) 设置四层监听器名称。
 * @method integer getSessionExpire() 获取会话保持时间，单位：秒。可选值：900~3600。
 * @method void setSessionExpire(integer $SessionExpire) 设置会话保持时间，单位：秒。可选值：900~3600。
 * @method integer getHealthSwitch() 获取是否开启健康检查：1（开启）、0（关闭）。默认值0，表示关闭。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开启健康检查：1（开启）、0（关闭）。默认值0，表示关闭。
 * @method integer getTimeOut() 获取健康检查的响应超时时间，可选值：2-60，默认值：2，单位:秒。<br><font color="red">响应超时时间要小于检查间隔时间。</font>
 * @method void setTimeOut(integer $TimeOut) 设置健康检查的响应超时时间，可选值：2-60，默认值：2，单位:秒。<br><font color="red">响应超时时间要小于检查间隔时间。</font>
 * @method integer getIntervalTime() 获取健康检查间隔，默认值：5，可选值：5-300，单位：秒。
 * @method void setIntervalTime(integer $IntervalTime) 设置健康检查间隔，默认值：5，可选值：5-300，单位：秒。
 * @method integer getHealthNum() 获取健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method void setHealthNum(integer $HealthNum) 设置健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method integer getUnhealthNum() 获取不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method integer getBandwidth() 获取监听器最大带宽值，用于计费模式为固定带宽计费。可选值：0-1000，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置监听器最大带宽值，用于计费模式为固定带宽计费。可选值：0-1000，单位：Mbps。
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
 * @method integer getToaFlag() 获取是否开启toa。可选值：0（关闭）、1（开启），默认关闭。（该字段在负载均衡为fullnat类型下才生效）
 * @method void setToaFlag(integer $ToaFlag) 设置是否开启toa。可选值：0（关闭）、1（开启），默认关闭。（该字段在负载均衡为fullnat类型下才生效）
 * @method string getBalanceMode() 获取四层调度方式。wrr，wlc。
 * @method void setBalanceMode(string $BalanceMode) 设置四层调度方式。wrr，wlc。
 */
class ModifyL4ListenerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 四层监听器ID。可通过接口DescribeL4Listeners查询。
     */
    public $ListenerId;

    /**
     * @var string 四层监听器名称。
     */
    public $ListenerName;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：900~3600。
     */
    public $SessionExpire;

    /**
     * @var integer 是否开启健康检查：1（开启）、0（关闭）。默认值0，表示关闭。
     */
    public $HealthSwitch;

    /**
     * @var integer 健康检查的响应超时时间，可选值：2-60，默认值：2，单位:秒。<br><font color="red">响应超时时间要小于检查间隔时间。</font>
     */
    public $TimeOut;

    /**
     * @var integer 健康检查间隔，默认值：5，可选值：5-300，单位：秒。
     */
    public $IntervalTime;

    /**
     * @var integer 健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     */
    public $HealthNum;

    /**
     * @var integer 不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
     */
    public $UnhealthNum;

    /**
     * @var integer 监听器最大带宽值，用于计费模式为固定带宽计费。可选值：0-1000，单位：Mbps。
     */
    public $Bandwidth;

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
     * @var integer 是否开启toa。可选值：0（关闭）、1（开启），默认关闭。（该字段在负载均衡为fullnat类型下才生效）
     */
    public $ToaFlag;

    /**
     * @var string 四层调度方式。wrr，wlc。
     */
    public $BalanceMode;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $ListenerId 四层监听器ID。可通过接口DescribeL4Listeners查询。
     * @param string $ListenerName 四层监听器名称。
     * @param integer $SessionExpire 会话保持时间，单位：秒。可选值：900~3600。
     * @param integer $HealthSwitch 是否开启健康检查：1（开启）、0（关闭）。默认值0，表示关闭。
     * @param integer $TimeOut 健康检查的响应超时时间，可选值：2-60，默认值：2，单位:秒。<br><font color="red">响应超时时间要小于检查间隔时间。</font>
     * @param integer $IntervalTime 健康检查间隔，默认值：5，可选值：5-300，单位：秒。
     * @param integer $HealthNum 健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     * @param integer $UnhealthNum 不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发不正常，可选值：2-10，单位：次。
     * @param integer $Bandwidth 监听器最大带宽值，用于计费模式为固定带宽计费。可选值：0-1000，单位：Mbps。
     * @param integer $CustomHealthSwitch 是否开启自定义健康检查：1（开启）、0（关闭）。默认值0，表示关闭。（该字段在健康检查开启的情况下才生效）
     * @param string $InputType 自定义健康探测内容类型，可选值：text（文本）、hexadecimal（十六进制）。
     * @param integer $LineSeparatorType 探测内容类型为文本方式时，针对请求文本中换行替换方式。可选值：1（替换为LF）、2（替换为CR）、3（替换为LF+CR）。
     * @param string $HealthRequest 自定义探测请求内容。
     * @param string $HealthResponse 自定义探测返回内容。
     * @param integer $ToaFlag 是否开启toa。可选值：0（关闭）、1（开启），默认关闭。（该字段在负载均衡为fullnat类型下才生效）
     * @param string $BalanceMode 四层调度方式。wrr，wlc。
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
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

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
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

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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流名称列表。
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getStreamStartTime() 获取推流开始时间。
UTC格式时间，例如：2019-01-07T12:00:00Z。
 * @method void setStreamStartTime(string $StreamStartTime) 设置推流开始时间。
UTC格式时间，例如：2019-01-07T12:00:00Z。
 * @method string getStreamEndTime() 获取推流结束时间。
UTC格式时间，例如：2019-01-07T15:00:00Z。
 * @method void setStreamEndTime(string $StreamEndTime) 设置推流结束时间。
UTC格式时间，例如：2019-01-07T15:00:00Z。
 * @method string getStopReason() 获取停止原因。
 * @method void setStopReason(string $StopReason) 设置停止原因。
 * @method integer getDuration() 获取推流持续时长，单位：秒。
 * @method void setDuration(integer $Duration) 设置推流持续时长，单位：秒。
 * @method string getClientIp() 获取主播 IP。
 * @method void setClientIp(string $ClientIp) 设置主播 IP。
 * @method string getResolution() 获取分辨率。
 * @method void setResolution(string $Resolution) 设置分辨率。
 */
class StreamName extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流开始时间。
UTC格式时间，例如：2019-01-07T12:00:00Z。
     */
    public $StreamStartTime;

    /**
     * @var string 推流结束时间。
UTC格式时间，例如：2019-01-07T15:00:00Z。
     */
    public $StreamEndTime;

    /**
     * @var string 停止原因。
     */
    public $StopReason;

    /**
     * @var integer 推流持续时长，单位：秒。
     */
    public $Duration;

    /**
     * @var string 主播 IP。
     */
    public $ClientIp;

    /**
     * @var string 分辨率。
     */
    public $Resolution;

    /**
     * @param string $StreamName 流名称。
     * @param string $AppName 应用名称。
     * @param string $DomainName 推流域名。
     * @param string $StreamStartTime 推流开始时间。
UTC格式时间，例如：2019-01-07T12:00:00Z。
     * @param string $StreamEndTime 推流结束时间。
UTC格式时间，例如：2019-01-07T15:00:00Z。
     * @param string $StopReason 停止原因。
     * @param integer $Duration 推流持续时长，单位：秒。
     * @param string $ClientIp 主播 IP。
     * @param string $Resolution 分辨率。
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamStartTime",$param) and $param["StreamStartTime"] !== null) {
            $this->StreamStartTime = $param["StreamStartTime"];
        }

        if (array_key_exists("StreamEndTime",$param) and $param["StreamEndTime"] !== null) {
            $this->StreamEndTime = $param["StreamEndTime"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}

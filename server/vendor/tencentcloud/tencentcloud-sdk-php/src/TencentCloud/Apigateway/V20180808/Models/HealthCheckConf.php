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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查配置，包括TsfHealthCheckConf和TargetServicesHealthCheckConf
 *
 * @method boolean getIsHealthCheck() 获取是否开启健康检查。
 * @method void setIsHealthCheck(boolean $IsHealthCheck) 设置是否开启健康检查。
 * @method integer getRequestVolumeThreshold() 获取健康检查阈值。
 * @method void setRequestVolumeThreshold(integer $RequestVolumeThreshold) 设置健康检查阈值。
 * @method integer getSleepWindowInMilliseconds() 获取窗口大小。
 * @method void setSleepWindowInMilliseconds(integer $SleepWindowInMilliseconds) 设置窗口大小。
 * @method integer getErrorThresholdPercentage() 获取阈值百分比。
 * @method void setErrorThresholdPercentage(integer $ErrorThresholdPercentage) 设置阈值百分比。
 */
class HealthCheckConf extends AbstractModel
{
    /**
     * @var boolean 是否开启健康检查。
     */
    public $IsHealthCheck;

    /**
     * @var integer 健康检查阈值。
     */
    public $RequestVolumeThreshold;

    /**
     * @var integer 窗口大小。
     */
    public $SleepWindowInMilliseconds;

    /**
     * @var integer 阈值百分比。
     */
    public $ErrorThresholdPercentage;

    /**
     * @param boolean $IsHealthCheck 是否开启健康检查。
     * @param integer $RequestVolumeThreshold 健康检查阈值。
     * @param integer $SleepWindowInMilliseconds 窗口大小。
     * @param integer $ErrorThresholdPercentage 阈值百分比。
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
        if (array_key_exists("IsHealthCheck",$param) and $param["IsHealthCheck"] !== null) {
            $this->IsHealthCheck = $param["IsHealthCheck"];
        }

        if (array_key_exists("RequestVolumeThreshold",$param) and $param["RequestVolumeThreshold"] !== null) {
            $this->RequestVolumeThreshold = $param["RequestVolumeThreshold"];
        }

        if (array_key_exists("SleepWindowInMilliseconds",$param) and $param["SleepWindowInMilliseconds"] !== null) {
            $this->SleepWindowInMilliseconds = $param["SleepWindowInMilliseconds"];
        }

        if (array_key_exists("ErrorThresholdPercentage",$param) and $param["ErrorThresholdPercentage"] !== null) {
            $this->ErrorThresholdPercentage = $param["ErrorThresholdPercentage"];
        }
    }
}

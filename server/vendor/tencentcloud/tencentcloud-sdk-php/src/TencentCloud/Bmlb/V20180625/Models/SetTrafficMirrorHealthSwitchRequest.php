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
 * SetTrafficMirrorHealthSwitch请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID。
 * @method integer getHealthSwitch() 获取健康检查开关，0：关闭，1：打开
 * @method void setHealthSwitch(integer $HealthSwitch) 设置健康检查开关，0：关闭，1：打开
 * @method integer getHealthNum() 获取健康检查判断健康的次数，最小值2，最大值10。
 * @method void setHealthNum(integer $HealthNum) 设置健康检查判断健康的次数，最小值2，最大值10。
 * @method integer getUnhealthNum() 获取健康检查判断不健康的次数，最小值2，最大值10。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置健康检查判断不健康的次数，最小值2，最大值10。
 * @method integer getIntervalTime() 获取健康检查间隔，单位：秒，最小值5，最大值300。
 * @method void setIntervalTime(integer $IntervalTime) 设置健康检查间隔，单位：秒，最小值5，最大值300。
 * @method string getHttpCheckDomain() 获取检查的域名配置。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置检查的域名配置。
 * @method string getHttpCheckPath() 获取检查的路径配置。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置检查的路径配置。
 * @method array getHttpCodes() 获取健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 * @method void setHttpCodes(array $HttpCodes) 设置健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 */
class SetTrafficMirrorHealthSwitchRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID。
     */
    public $TrafficMirrorId;

    /**
     * @var integer 健康检查开关，0：关闭，1：打开
     */
    public $HealthSwitch;

    /**
     * @var integer 健康检查判断健康的次数，最小值2，最大值10。
     */
    public $HealthNum;

    /**
     * @var integer 健康检查判断不健康的次数，最小值2，最大值10。
     */
    public $UnhealthNum;

    /**
     * @var integer 健康检查间隔，单位：秒，最小值5，最大值300。
     */
    public $IntervalTime;

    /**
     * @var string 检查的域名配置。
     */
    public $HttpCheckDomain;

    /**
     * @var string 检查的路径配置。
     */
    public $HttpCheckPath;

    /**
     * @var array 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
     */
    public $HttpCodes;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID。
     * @param integer $HealthSwitch 健康检查开关，0：关闭，1：打开
     * @param integer $HealthNum 健康检查判断健康的次数，最小值2，最大值10。
     * @param integer $UnhealthNum 健康检查判断不健康的次数，最小值2，最大值10。
     * @param integer $IntervalTime 健康检查间隔，单位：秒，最小值5，最大值300。
     * @param string $HttpCheckDomain 检查的域名配置。
     * @param string $HttpCheckPath 检查的路径配置。
     * @param array $HttpCodes 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
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

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCodes",$param) and $param["HttpCodes"] !== null) {
            $this->HttpCodes = $param["HttpCodes"];
        }
    }
}

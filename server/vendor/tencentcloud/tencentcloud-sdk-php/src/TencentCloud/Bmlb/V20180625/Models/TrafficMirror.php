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
 * 获取流量镜像实例的列表信息时返回的流量镜像信息。
 *
 * @method string getTrafficMirrorId() 获取流量镜像ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像ID。
 * @method string getAlias() 获取流量镜像名称。
 * @method void setAlias(string $Alias) 设置流量镜像名称。
 * @method string getVpcId() 获取流量镜像所在的私有网络ID。
 * @method void setVpcId(string $VpcId) 设置流量镜像所在的私有网络ID。
 * @method string getLoadBalancerType() 获取接收机负载均衡方式。wrr，ip_hash，wlc。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置接收机负载均衡方式。wrr，ip_hash，wlc。
 * @method integer getHealthSwitch() 获取是否开始对接收机的健康检查。0：关闭，非0：开启。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开始对接收机的健康检查。0：关闭，非0：开启。
 * @method integer getHealthNum() 获取健康阈值。
 * @method void setHealthNum(integer $HealthNum) 设置健康阈值。
 * @method integer getUnhealthNum() 获取不健康阈值。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置不健康阈值。
 * @method integer getIntervalTime() 获取检查间隔。
 * @method void setIntervalTime(integer $IntervalTime) 设置检查间隔。
 * @method string getHttpCheckDomain() 获取检查域名。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置检查域名。
 * @method string getHttpCheckPath() 获取检查目录。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置检查目录。
 * @method array getHttpCodes() 获取健康检查返回码。 1：1xx，2：2xx，3：3xx，4：4xx，5：5xx。
 * @method void setHttpCodes(array $HttpCodes) 设置健康检查返回码。 1：1xx，2：2xx，3：3xx，4：4xx，5：5xx。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getVpcCidrBlock() 获取流量镜像所在私有网络的Cidr。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置流量镜像所在私有网络的Cidr。
 * @method string getVpcName() 获取流量镜像所在私有网络的名称。
 * @method void setVpcName(string $VpcName) 设置流量镜像所在私有网络的名称。
 */
class TrafficMirror extends AbstractModel
{
    /**
     * @var string 流量镜像ID。
     */
    public $TrafficMirrorId;

    /**
     * @var string 流量镜像名称。
     */
    public $Alias;

    /**
     * @var string 流量镜像所在的私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 接收机负载均衡方式。wrr，ip_hash，wlc。
     */
    public $LoadBalancerType;

    /**
     * @var integer 是否开始对接收机的健康检查。0：关闭，非0：开启。
     */
    public $HealthSwitch;

    /**
     * @var integer 健康阈值。
     */
    public $HealthNum;

    /**
     * @var integer 不健康阈值。
     */
    public $UnhealthNum;

    /**
     * @var integer 检查间隔。
     */
    public $IntervalTime;

    /**
     * @var string 检查域名。
     */
    public $HttpCheckDomain;

    /**
     * @var string 检查目录。
     */
    public $HttpCheckPath;

    /**
     * @var array 健康检查返回码。 1：1xx，2：2xx，3：3xx，4：4xx，5：5xx。
     */
    public $HttpCodes;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 流量镜像所在私有网络的Cidr。
     */
    public $VpcCidrBlock;

    /**
     * @var string 流量镜像所在私有网络的名称。
     */
    public $VpcName;

    /**
     * @param string $TrafficMirrorId 流量镜像ID。
     * @param string $Alias 流量镜像名称。
     * @param string $VpcId 流量镜像所在的私有网络ID。
     * @param string $LoadBalancerType 接收机负载均衡方式。wrr，ip_hash，wlc。
     * @param integer $HealthSwitch 是否开始对接收机的健康检查。0：关闭，非0：开启。
     * @param integer $HealthNum 健康阈值。
     * @param integer $UnhealthNum 不健康阈值。
     * @param integer $IntervalTime 检查间隔。
     * @param string $HttpCheckDomain 检查域名。
     * @param string $HttpCheckPath 检查目录。
     * @param array $HttpCodes 健康检查返回码。 1：1xx，2：2xx，3：3xx，4：4xx，5：5xx。
     * @param string $CreateTime 创建时间。
     * @param string $VpcCidrBlock 流量镜像所在私有网络的Cidr。
     * @param string $VpcName 流量镜像所在私有网络的名称。
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}

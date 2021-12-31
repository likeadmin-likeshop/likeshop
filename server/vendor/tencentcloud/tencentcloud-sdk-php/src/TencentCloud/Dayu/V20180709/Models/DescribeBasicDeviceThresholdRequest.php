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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDeviceThreshold请求参数结构体
 *
 * @method string getBasicIp() 获取查询的IP地址，取值如：1.1.1.1
 * @method void setBasicIp(string $BasicIp) 设置查询的IP地址，取值如：1.1.1.1
 * @method string getBasicRegion() 获取查询IP所属地域，取值如：gz、bj、sh、hk等地域缩写
 * @method void setBasicRegion(string $BasicRegion) 设置查询IP所属地域，取值如：gz、bj、sh、hk等地域缩写
 * @method string getBasicBizType() 获取专区类型，取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
 * @method void setBasicBizType(string $BasicBizType) 设置专区类型，取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
 * @method string getBasicDeviceType() 获取设备类型，取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
 * @method void setBasicDeviceType(string $BasicDeviceType) 设置设备类型，取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
 * @method integer getBasicCheckFlag() 获取有效性检查，取值为1
 * @method void setBasicCheckFlag(integer $BasicCheckFlag) 设置有效性检查，取值为1
 * @method string getBasicIpInstance() 获取可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
 * @method void setBasicIpInstance(string $BasicIpInstance) 设置可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
 * @method integer getBasicIspCode() 获取可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
 * @method void setBasicIspCode(integer $BasicIspCode) 设置可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
 */
class DescribeBasicDeviceThresholdRequest extends AbstractModel
{
    /**
     * @var string 查询的IP地址，取值如：1.1.1.1
     */
    public $BasicIp;

    /**
     * @var string 查询IP所属地域，取值如：gz、bj、sh、hk等地域缩写
     */
    public $BasicRegion;

    /**
     * @var string 专区类型，取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
     */
    public $BasicBizType;

    /**
     * @var string 设备类型，取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
     */
    public $BasicDeviceType;

    /**
     * @var integer 有效性检查，取值为1
     */
    public $BasicCheckFlag;

    /**
     * @var string 可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
     */
    public $BasicIpInstance;

    /**
     * @var integer 可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
     */
    public $BasicIspCode;

    /**
     * @param string $BasicIp 查询的IP地址，取值如：1.1.1.1
     * @param string $BasicRegion 查询IP所属地域，取值如：gz、bj、sh、hk等地域缩写
     * @param string $BasicBizType 专区类型，取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
     * @param string $BasicDeviceType 设备类型，取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
     * @param integer $BasicCheckFlag 有效性检查，取值为1
     * @param string $BasicIpInstance 可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
     * @param integer $BasicIspCode 可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
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
        if (array_key_exists("BasicIp",$param) and $param["BasicIp"] !== null) {
            $this->BasicIp = $param["BasicIp"];
        }

        if (array_key_exists("BasicRegion",$param) and $param["BasicRegion"] !== null) {
            $this->BasicRegion = $param["BasicRegion"];
        }

        if (array_key_exists("BasicBizType",$param) and $param["BasicBizType"] !== null) {
            $this->BasicBizType = $param["BasicBizType"];
        }

        if (array_key_exists("BasicDeviceType",$param) and $param["BasicDeviceType"] !== null) {
            $this->BasicDeviceType = $param["BasicDeviceType"];
        }

        if (array_key_exists("BasicCheckFlag",$param) and $param["BasicCheckFlag"] !== null) {
            $this->BasicCheckFlag = $param["BasicCheckFlag"];
        }

        if (array_key_exists("BasicIpInstance",$param) and $param["BasicIpInstance"] !== null) {
            $this->BasicIpInstance = $param["BasicIpInstance"];
        }

        if (array_key_exists("BasicIspCode",$param) and $param["BasicIspCode"] !== null) {
            $this->BasicIspCode = $param["BasicIspCode"];
        }
    }
}

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
 * ModifyCCThreshold请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示基础防护）
 * @method integer getThreshold() 获取CC防护阈值，取值(0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
当Business为高防IP、高防IP专业版时，其CC防护最大阈值跟资源的保底防护带宽有关，对应关系如下：
  保底带宽: 最大C防护阈值
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
 * @method void setThreshold(integer $Threshold) 设置CC防护阈值，取值(0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
当Business为高防IP、高防IP专业版时，其CC防护最大阈值跟资源的保底防护带宽有关，对应关系如下：
  保底带宽: 最大C防护阈值
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getProtocol() 获取可选字段，代表CC防护类型，取值[http（HTTP协议的CC防护），https（HTTPS协议的CC防护）]；当不填时，默认为HTTP协议的CC防护；当填写https时还需要填写RuleId字段；
 * @method void setProtocol(string $Protocol) 设置可选字段，代表CC防护类型，取值[http（HTTP协议的CC防护），https（HTTPS协议的CC防护）]；当不填时，默认为HTTP协议的CC防护；当填写https时还需要填写RuleId字段；
 * @method string getRuleId() 获取可选字段，表示HTTPS协议的7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）；
当Protocol=https时必须填写；
 * @method void setRuleId(string $RuleId) 设置可选字段，表示HTTPS协议的7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）；
当Protocol=https时必须填写；
 * @method string getBasicIp() 获取查询的IP地址（仅基础防护提供），取值如：1.1.1.1
 * @method void setBasicIp(string $BasicIp) 设置查询的IP地址（仅基础防护提供），取值如：1.1.1.1
 * @method string getBasicRegion() 获取查询IP所属地域（仅基础防护提供），取值如：gz、bj、sh、hk等地域缩写
 * @method void setBasicRegion(string $BasicRegion) 设置查询IP所属地域（仅基础防护提供），取值如：gz、bj、sh、hk等地域缩写
 * @method string getBasicBizType() 获取专区类型（仅基础防护提供），取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
 * @method void setBasicBizType(string $BasicBizType) 设置专区类型（仅基础防护提供），取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
 * @method string getBasicDeviceType() 获取设备类型（仅基础防护提供），取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
 * @method void setBasicDeviceType(string $BasicDeviceType) 设置设备类型（仅基础防护提供），取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
 * @method string getBasicIpInstance() 获取仅基础防护提供。可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
 * @method void setBasicIpInstance(string $BasicIpInstance) 设置仅基础防护提供。可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
 * @method integer getBasicIspCode() 获取仅基础防护提供。可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
 * @method void setBasicIspCode(integer $BasicIspCode) 设置仅基础防护提供。可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
 * @method string getDomain() 获取可选字段，当协议取值HTTPS时，必填
 * @method void setDomain(string $Domain) 设置可选字段，当协议取值HTTPS时，必填
 */
class ModifyCCThresholdRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示基础防护）
     */
    public $Business;

    /**
     * @var integer CC防护阈值，取值(0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
当Business为高防IP、高防IP专业版时，其CC防护最大阈值跟资源的保底防护带宽有关，对应关系如下：
  保底带宽: 最大C防护阈值
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
     */
    public $Threshold;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 可选字段，代表CC防护类型，取值[http（HTTP协议的CC防护），https（HTTPS协议的CC防护）]；当不填时，默认为HTTP协议的CC防护；当填写https时还需要填写RuleId字段；
     */
    public $Protocol;

    /**
     * @var string 可选字段，表示HTTPS协议的7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）；
当Protocol=https时必须填写；
     */
    public $RuleId;

    /**
     * @var string 查询的IP地址（仅基础防护提供），取值如：1.1.1.1
     */
    public $BasicIp;

    /**
     * @var string 查询IP所属地域（仅基础防护提供），取值如：gz、bj、sh、hk等地域缩写
     */
    public $BasicRegion;

    /**
     * @var string 专区类型（仅基础防护提供），取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
     */
    public $BasicBizType;

    /**
     * @var string 设备类型（仅基础防护提供），取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
     */
    public $BasicDeviceType;

    /**
     * @var string 仅基础防护提供。可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
     */
    public $BasicIpInstance;

    /**
     * @var integer 仅基础防护提供。可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
     */
    public $BasicIspCode;

    /**
     * @var string 可选字段，当协议取值HTTPS时，必填
     */
    public $Domain;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示基础防护）
     * @param integer $Threshold CC防护阈值，取值(0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
当Business为高防IP、高防IP专业版时，其CC防护最大阈值跟资源的保底防护带宽有关，对应关系如下：
  保底带宽: 最大C防护阈值
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
     * @param string $Id 资源ID
     * @param string $Protocol 可选字段，代表CC防护类型，取值[http（HTTP协议的CC防护），https（HTTPS协议的CC防护）]；当不填时，默认为HTTP协议的CC防护；当填写https时还需要填写RuleId字段；
     * @param string $RuleId 可选字段，表示HTTPS协议的7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）；
当Protocol=https时必须填写；
     * @param string $BasicIp 查询的IP地址（仅基础防护提供），取值如：1.1.1.1
     * @param string $BasicRegion 查询IP所属地域（仅基础防护提供），取值如：gz、bj、sh、hk等地域缩写
     * @param string $BasicBizType 专区类型（仅基础防护提供），取值如：公有云专区：public，黑石专区：bm, NAT服务器专区：nat，互联网通道：channel。
     * @param string $BasicDeviceType 设备类型（仅基础防护提供），取值如：服务器：cvm，公有云负载均衡：clb，黑石负载均衡：lb，NAT服务器：nat，互联网通道：channel.
     * @param string $BasicIpInstance 仅基础防护提供。可选，IPInstance Nat 网关（如果查询的设备类型是NAT服务器，需要传此参数，通过nat资源查询接口获取）
     * @param integer $BasicIspCode 仅基础防护提供。可选，运营商线路（如果查询的设备类型是NAT服务器，需要传此参数为5）
     * @param string $Domain 可选字段，当协议取值HTTPS时，必填
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("BasicIpInstance",$param) and $param["BasicIpInstance"] !== null) {
            $this->BasicIpInstance = $param["BasicIpInstance"];
        }

        if (array_key_exists("BasicIspCode",$param) and $param["BasicIspCode"] !== null) {
            $this->BasicIspCode = $param["BasicIspCode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}

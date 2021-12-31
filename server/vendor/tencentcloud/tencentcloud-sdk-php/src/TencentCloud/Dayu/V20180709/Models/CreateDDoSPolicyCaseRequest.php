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
 * CreateDDoSPolicyCase请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getCaseName() 获取策略场景名，字符串长度小于64
 * @method void setCaseName(string $CaseName) 设置策略场景名，字符串长度小于64
 * @method array getPlatformTypes() 获取开发平台，取值[PC（PC客户端）， MOBILE（移动端）， TV（电视端）， SERVER（主机）]
 * @method void setPlatformTypes(array $PlatformTypes) 设置开发平台，取值[PC（PC客户端）， MOBILE（移动端）， TV（电视端）， SERVER（主机）]
 * @method string getAppType() 获取细分品类，取值[WEB（网站）， GAME（游戏）， APP（应用）， OTHER（其他）]
 * @method void setAppType(string $AppType) 设置细分品类，取值[WEB（网站）， GAME（游戏）， APP（应用）， OTHER（其他）]
 * @method array getAppProtocols() 获取应用协议，取值[tcp（TCP协议），udp（UDP协议），icmp（ICMP协议），all（其他协议）]
 * @method void setAppProtocols(array $AppProtocols) 设置应用协议，取值[tcp（TCP协议），udp（UDP协议），icmp（ICMP协议），all（其他协议）]
 * @method string getTcpSportStart() 获取TCP业务起始端口，取值(0, 65535]
 * @method void setTcpSportStart(string $TcpSportStart) 设置TCP业务起始端口，取值(0, 65535]
 * @method string getTcpSportEnd() 获取TCP业务结束端口，取值(0, 65535]，必须大于等于TCP业务起始端口
 * @method void setTcpSportEnd(string $TcpSportEnd) 设置TCP业务结束端口，取值(0, 65535]，必须大于等于TCP业务起始端口
 * @method string getUdpSportStart() 获取UDP业务起始端口，取值范围(0, 65535]
 * @method void setUdpSportStart(string $UdpSportStart) 设置UDP业务起始端口，取值范围(0, 65535]
 * @method string getUdpSportEnd() 获取UDP业务结束端口，取值范围(0, 65535)，必须大于等于UDP业务起始端口
 * @method void setUdpSportEnd(string $UdpSportEnd) 设置UDP业务结束端口，取值范围(0, 65535)，必须大于等于UDP业务起始端口
 * @method string getHasAbroad() 获取是否有海外客户，取值[no（没有）, yes（有）]
 * @method void setHasAbroad(string $HasAbroad) 设置是否有海外客户，取值[no（没有）, yes（有）]
 * @method string getHasInitiateTcp() 获取是否会主动对外发起TCP请求，取值[no（不会）, yes（会）]
 * @method void setHasInitiateTcp(string $HasInitiateTcp) 设置是否会主动对外发起TCP请求，取值[no（不会）, yes（会）]
 * @method string getHasInitiateUdp() 获取是否会主动对外发起UDP业务请求，取值[no（不会）, yes（会）]
 * @method void setHasInitiateUdp(string $HasInitiateUdp) 设置是否会主动对外发起UDP业务请求，取值[no（不会）, yes（会）]
 * @method string getPeerTcpPort() 获取主动发起TCP请求的端口，取值范围(0, 65535]
 * @method void setPeerTcpPort(string $PeerTcpPort) 设置主动发起TCP请求的端口，取值范围(0, 65535]
 * @method string getPeerUdpPort() 获取主动发起UDP请求的端口，取值范围(0, 65535]
 * @method void setPeerUdpPort(string $PeerUdpPort) 设置主动发起UDP请求的端口，取值范围(0, 65535]
 * @method string getTcpFootprint() 获取TCP载荷的固定特征码，字符串长度小于512
 * @method void setTcpFootprint(string $TcpFootprint) 设置TCP载荷的固定特征码，字符串长度小于512
 * @method string getUdpFootprint() 获取UDP载荷的固定特征码，字符串长度小于512
 * @method void setUdpFootprint(string $UdpFootprint) 设置UDP载荷的固定特征码，字符串长度小于512
 * @method array getWebApiUrl() 获取Web业务的API的URL
 * @method void setWebApiUrl(array $WebApiUrl) 设置Web业务的API的URL
 * @method string getMinTcpPackageLen() 获取TCP业务报文长度最小值，取值范围(0, 1500)
 * @method void setMinTcpPackageLen(string $MinTcpPackageLen) 设置TCP业务报文长度最小值，取值范围(0, 1500)
 * @method string getMaxTcpPackageLen() 获取TCP业务报文长度最大值，取值范围(0, 1500)，必须大于等于TCP业务报文长度最小值
 * @method void setMaxTcpPackageLen(string $MaxTcpPackageLen) 设置TCP业务报文长度最大值，取值范围(0, 1500)，必须大于等于TCP业务报文长度最小值
 * @method string getMinUdpPackageLen() 获取UDP业务报文长度最小值，取值范围(0, 1500)
 * @method void setMinUdpPackageLen(string $MinUdpPackageLen) 设置UDP业务报文长度最小值，取值范围(0, 1500)
 * @method string getMaxUdpPackageLen() 获取UDP业务报文长度最大值，取值范围(0, 1500)，必须大于等于UDP业务报文长度最小值
 * @method void setMaxUdpPackageLen(string $MaxUdpPackageLen) 设置UDP业务报文长度最大值，取值范围(0, 1500)，必须大于等于UDP业务报文长度最小值
 * @method string getHasVPN() 获取是否有VPN业务，取值[no（没有）, yes（有）]
 * @method void setHasVPN(string $HasVPN) 设置是否有VPN业务，取值[no（没有）, yes（有）]
 * @method string getTcpPortList() 获取TCP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
 * @method void setTcpPortList(string $TcpPortList) 设置TCP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
 * @method string getUdpPortList() 获取UDP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
 * @method void setUdpPortList(string $UdpPortList) 设置UDP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
 */
class CreateDDoSPolicyCaseRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 策略场景名，字符串长度小于64
     */
    public $CaseName;

    /**
     * @var array 开发平台，取值[PC（PC客户端）， MOBILE（移动端）， TV（电视端）， SERVER（主机）]
     */
    public $PlatformTypes;

    /**
     * @var string 细分品类，取值[WEB（网站）， GAME（游戏）， APP（应用）， OTHER（其他）]
     */
    public $AppType;

    /**
     * @var array 应用协议，取值[tcp（TCP协议），udp（UDP协议），icmp（ICMP协议），all（其他协议）]
     */
    public $AppProtocols;

    /**
     * @var string TCP业务起始端口，取值(0, 65535]
     */
    public $TcpSportStart;

    /**
     * @var string TCP业务结束端口，取值(0, 65535]，必须大于等于TCP业务起始端口
     */
    public $TcpSportEnd;

    /**
     * @var string UDP业务起始端口，取值范围(0, 65535]
     */
    public $UdpSportStart;

    /**
     * @var string UDP业务结束端口，取值范围(0, 65535)，必须大于等于UDP业务起始端口
     */
    public $UdpSportEnd;

    /**
     * @var string 是否有海外客户，取值[no（没有）, yes（有）]
     */
    public $HasAbroad;

    /**
     * @var string 是否会主动对外发起TCP请求，取值[no（不会）, yes（会）]
     */
    public $HasInitiateTcp;

    /**
     * @var string 是否会主动对外发起UDP业务请求，取值[no（不会）, yes（会）]
     */
    public $HasInitiateUdp;

    /**
     * @var string 主动发起TCP请求的端口，取值范围(0, 65535]
     */
    public $PeerTcpPort;

    /**
     * @var string 主动发起UDP请求的端口，取值范围(0, 65535]
     */
    public $PeerUdpPort;

    /**
     * @var string TCP载荷的固定特征码，字符串长度小于512
     */
    public $TcpFootprint;

    /**
     * @var string UDP载荷的固定特征码，字符串长度小于512
     */
    public $UdpFootprint;

    /**
     * @var array Web业务的API的URL
     */
    public $WebApiUrl;

    /**
     * @var string TCP业务报文长度最小值，取值范围(0, 1500)
     */
    public $MinTcpPackageLen;

    /**
     * @var string TCP业务报文长度最大值，取值范围(0, 1500)，必须大于等于TCP业务报文长度最小值
     */
    public $MaxTcpPackageLen;

    /**
     * @var string UDP业务报文长度最小值，取值范围(0, 1500)
     */
    public $MinUdpPackageLen;

    /**
     * @var string UDP业务报文长度最大值，取值范围(0, 1500)，必须大于等于UDP业务报文长度最小值
     */
    public $MaxUdpPackageLen;

    /**
     * @var string 是否有VPN业务，取值[no（没有）, yes（有）]
     */
    public $HasVPN;

    /**
     * @var string TCP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
     */
    public $TcpPortList;

    /**
     * @var string UDP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
     */
    public $UdpPortList;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $CaseName 策略场景名，字符串长度小于64
     * @param array $PlatformTypes 开发平台，取值[PC（PC客户端）， MOBILE（移动端）， TV（电视端）， SERVER（主机）]
     * @param string $AppType 细分品类，取值[WEB（网站）， GAME（游戏）， APP（应用）， OTHER（其他）]
     * @param array $AppProtocols 应用协议，取值[tcp（TCP协议），udp（UDP协议），icmp（ICMP协议），all（其他协议）]
     * @param string $TcpSportStart TCP业务起始端口，取值(0, 65535]
     * @param string $TcpSportEnd TCP业务结束端口，取值(0, 65535]，必须大于等于TCP业务起始端口
     * @param string $UdpSportStart UDP业务起始端口，取值范围(0, 65535]
     * @param string $UdpSportEnd UDP业务结束端口，取值范围(0, 65535)，必须大于等于UDP业务起始端口
     * @param string $HasAbroad 是否有海外客户，取值[no（没有）, yes（有）]
     * @param string $HasInitiateTcp 是否会主动对外发起TCP请求，取值[no（不会）, yes（会）]
     * @param string $HasInitiateUdp 是否会主动对外发起UDP业务请求，取值[no（不会）, yes（会）]
     * @param string $PeerTcpPort 主动发起TCP请求的端口，取值范围(0, 65535]
     * @param string $PeerUdpPort 主动发起UDP请求的端口，取值范围(0, 65535]
     * @param string $TcpFootprint TCP载荷的固定特征码，字符串长度小于512
     * @param string $UdpFootprint UDP载荷的固定特征码，字符串长度小于512
     * @param array $WebApiUrl Web业务的API的URL
     * @param string $MinTcpPackageLen TCP业务报文长度最小值，取值范围(0, 1500)
     * @param string $MaxTcpPackageLen TCP业务报文长度最大值，取值范围(0, 1500)，必须大于等于TCP业务报文长度最小值
     * @param string $MinUdpPackageLen UDP业务报文长度最小值，取值范围(0, 1500)
     * @param string $MaxUdpPackageLen UDP业务报文长度最大值，取值范围(0, 1500)，必须大于等于UDP业务报文长度最小值
     * @param string $HasVPN 是否有VPN业务，取值[no（没有）, yes（有）]
     * @param string $TcpPortList TCP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
     * @param string $UdpPortList UDP业务端口列表，同时支持单个端口和端口段，字符串格式，例如：80,443,700-800,53,1000-3000
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

        if (array_key_exists("CaseName",$param) and $param["CaseName"] !== null) {
            $this->CaseName = $param["CaseName"];
        }

        if (array_key_exists("PlatformTypes",$param) and $param["PlatformTypes"] !== null) {
            $this->PlatformTypes = $param["PlatformTypes"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppProtocols",$param) and $param["AppProtocols"] !== null) {
            $this->AppProtocols = $param["AppProtocols"];
        }

        if (array_key_exists("TcpSportStart",$param) and $param["TcpSportStart"] !== null) {
            $this->TcpSportStart = $param["TcpSportStart"];
        }

        if (array_key_exists("TcpSportEnd",$param) and $param["TcpSportEnd"] !== null) {
            $this->TcpSportEnd = $param["TcpSportEnd"];
        }

        if (array_key_exists("UdpSportStart",$param) and $param["UdpSportStart"] !== null) {
            $this->UdpSportStart = $param["UdpSportStart"];
        }

        if (array_key_exists("UdpSportEnd",$param) and $param["UdpSportEnd"] !== null) {
            $this->UdpSportEnd = $param["UdpSportEnd"];
        }

        if (array_key_exists("HasAbroad",$param) and $param["HasAbroad"] !== null) {
            $this->HasAbroad = $param["HasAbroad"];
        }

        if (array_key_exists("HasInitiateTcp",$param) and $param["HasInitiateTcp"] !== null) {
            $this->HasInitiateTcp = $param["HasInitiateTcp"];
        }

        if (array_key_exists("HasInitiateUdp",$param) and $param["HasInitiateUdp"] !== null) {
            $this->HasInitiateUdp = $param["HasInitiateUdp"];
        }

        if (array_key_exists("PeerTcpPort",$param) and $param["PeerTcpPort"] !== null) {
            $this->PeerTcpPort = $param["PeerTcpPort"];
        }

        if (array_key_exists("PeerUdpPort",$param) and $param["PeerUdpPort"] !== null) {
            $this->PeerUdpPort = $param["PeerUdpPort"];
        }

        if (array_key_exists("TcpFootprint",$param) and $param["TcpFootprint"] !== null) {
            $this->TcpFootprint = $param["TcpFootprint"];
        }

        if (array_key_exists("UdpFootprint",$param) and $param["UdpFootprint"] !== null) {
            $this->UdpFootprint = $param["UdpFootprint"];
        }

        if (array_key_exists("WebApiUrl",$param) and $param["WebApiUrl"] !== null) {
            $this->WebApiUrl = $param["WebApiUrl"];
        }

        if (array_key_exists("MinTcpPackageLen",$param) and $param["MinTcpPackageLen"] !== null) {
            $this->MinTcpPackageLen = $param["MinTcpPackageLen"];
        }

        if (array_key_exists("MaxTcpPackageLen",$param) and $param["MaxTcpPackageLen"] !== null) {
            $this->MaxTcpPackageLen = $param["MaxTcpPackageLen"];
        }

        if (array_key_exists("MinUdpPackageLen",$param) and $param["MinUdpPackageLen"] !== null) {
            $this->MinUdpPackageLen = $param["MinUdpPackageLen"];
        }

        if (array_key_exists("MaxUdpPackageLen",$param) and $param["MaxUdpPackageLen"] !== null) {
            $this->MaxUdpPackageLen = $param["MaxUdpPackageLen"];
        }

        if (array_key_exists("HasVPN",$param) and $param["HasVPN"] !== null) {
            $this->HasVPN = $param["HasVPN"];
        }

        if (array_key_exists("TcpPortList",$param) and $param["TcpPortList"] !== null) {
            $this->TcpPortList = $param["TcpPortList"];
        }

        if (array_key_exists("UdpPortList",$param) and $param["UdpPortList"] !== null) {
            $this->UdpPortList = $param["UdpPortList"];
        }
    }
}

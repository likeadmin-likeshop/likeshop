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
 * DescribeDDoSNetEvInfo返回参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（net表示高防IP专业版）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getStartTime() 获取攻击开始时间
 * @method void setStartTime(string $StartTime) 设置攻击开始时间
 * @method string getEndTime() 获取攻击结束时间
 * @method void setEndTime(string $EndTime) 设置攻击结束时间
 * @method integer getTcpPacketSum() 获取TCP报文攻击包数
 * @method void setTcpPacketSum(integer $TcpPacketSum) 设置TCP报文攻击包数
 * @method integer getTcpKBSum() 获取TCP报文攻击流量，单位KB
 * @method void setTcpKBSum(integer $TcpKBSum) 设置TCP报文攻击流量，单位KB
 * @method integer getUdpPacketSum() 获取UDP报文攻击包数
 * @method void setUdpPacketSum(integer $UdpPacketSum) 设置UDP报文攻击包数
 * @method integer getUdpKBSum() 获取UDP报文攻击流量，单位KB
 * @method void setUdpKBSum(integer $UdpKBSum) 设置UDP报文攻击流量，单位KB
 * @method integer getIcmpPacketSum() 获取ICMP报文攻击包数
 * @method void setIcmpPacketSum(integer $IcmpPacketSum) 设置ICMP报文攻击包数
 * @method integer getIcmpKBSum() 获取ICMP报文攻击流量，单位KB
 * @method void setIcmpKBSum(integer $IcmpKBSum) 设置ICMP报文攻击流量，单位KB
 * @method integer getOtherPacketSum() 获取其他报文攻击包数
 * @method void setOtherPacketSum(integer $OtherPacketSum) 设置其他报文攻击包数
 * @method integer getOtherKBSum() 获取其他报文攻击流量，单位KB
 * @method void setOtherKBSum(integer $OtherKBSum) 设置其他报文攻击流量，单位KB
 * @method integer getTotalTraffic() 获取累计攻击流量，单位KB
 * @method void setTotalTraffic(integer $TotalTraffic) 设置累计攻击流量，单位KB
 * @method integer getMbps() 获取攻击流量带宽峰值
 * @method void setMbps(integer $Mbps) 设置攻击流量带宽峰值
 * @method integer getPps() 获取攻击包速率峰值
 * @method void setPps(integer $Pps) 设置攻击包速率峰值
 * @method array getPcapUrl() 获取PCAP文件下载链接
 * @method void setPcapUrl(array $PcapUrl) 设置PCAP文件下载链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDDoSNetEvInfoResponse extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 攻击开始时间
     */
    public $StartTime;

    /**
     * @var string 攻击结束时间
     */
    public $EndTime;

    /**
     * @var integer TCP报文攻击包数
     */
    public $TcpPacketSum;

    /**
     * @var integer TCP报文攻击流量，单位KB
     */
    public $TcpKBSum;

    /**
     * @var integer UDP报文攻击包数
     */
    public $UdpPacketSum;

    /**
     * @var integer UDP报文攻击流量，单位KB
     */
    public $UdpKBSum;

    /**
     * @var integer ICMP报文攻击包数
     */
    public $IcmpPacketSum;

    /**
     * @var integer ICMP报文攻击流量，单位KB
     */
    public $IcmpKBSum;

    /**
     * @var integer 其他报文攻击包数
     */
    public $OtherPacketSum;

    /**
     * @var integer 其他报文攻击流量，单位KB
     */
    public $OtherKBSum;

    /**
     * @var integer 累计攻击流量，单位KB
     */
    public $TotalTraffic;

    /**
     * @var integer 攻击流量带宽峰值
     */
    public $Mbps;

    /**
     * @var integer 攻击包速率峰值
     */
    public $Pps;

    /**
     * @var array PCAP文件下载链接
     */
    public $PcapUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Business 大禹子产品代号（net表示高防IP专业版）
     * @param string $Id 资源ID
     * @param string $StartTime 攻击开始时间
     * @param string $EndTime 攻击结束时间
     * @param integer $TcpPacketSum TCP报文攻击包数
     * @param integer $TcpKBSum TCP报文攻击流量，单位KB
     * @param integer $UdpPacketSum UDP报文攻击包数
     * @param integer $UdpKBSum UDP报文攻击流量，单位KB
     * @param integer $IcmpPacketSum ICMP报文攻击包数
     * @param integer $IcmpKBSum ICMP报文攻击流量，单位KB
     * @param integer $OtherPacketSum 其他报文攻击包数
     * @param integer $OtherKBSum 其他报文攻击流量，单位KB
     * @param integer $TotalTraffic 累计攻击流量，单位KB
     * @param integer $Mbps 攻击流量带宽峰值
     * @param integer $Pps 攻击包速率峰值
     * @param array $PcapUrl PCAP文件下载链接
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TcpPacketSum",$param) and $param["TcpPacketSum"] !== null) {
            $this->TcpPacketSum = $param["TcpPacketSum"];
        }

        if (array_key_exists("TcpKBSum",$param) and $param["TcpKBSum"] !== null) {
            $this->TcpKBSum = $param["TcpKBSum"];
        }

        if (array_key_exists("UdpPacketSum",$param) and $param["UdpPacketSum"] !== null) {
            $this->UdpPacketSum = $param["UdpPacketSum"];
        }

        if (array_key_exists("UdpKBSum",$param) and $param["UdpKBSum"] !== null) {
            $this->UdpKBSum = $param["UdpKBSum"];
        }

        if (array_key_exists("IcmpPacketSum",$param) and $param["IcmpPacketSum"] !== null) {
            $this->IcmpPacketSum = $param["IcmpPacketSum"];
        }

        if (array_key_exists("IcmpKBSum",$param) and $param["IcmpKBSum"] !== null) {
            $this->IcmpKBSum = $param["IcmpKBSum"];
        }

        if (array_key_exists("OtherPacketSum",$param) and $param["OtherPacketSum"] !== null) {
            $this->OtherPacketSum = $param["OtherPacketSum"];
        }

        if (array_key_exists("OtherKBSum",$param) and $param["OtherKBSum"] !== null) {
            $this->OtherKBSum = $param["OtherKBSum"];
        }

        if (array_key_exists("TotalTraffic",$param) and $param["TotalTraffic"] !== null) {
            $this->TotalTraffic = $param["TotalTraffic"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("PcapUrl",$param) and $param["PcapUrl"] !== null) {
            $this->PcapUrl = $param["PcapUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

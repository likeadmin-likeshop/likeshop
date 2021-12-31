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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地区运营商明细数据
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议类型
 * @method void setProtocol(string $Protocol) 设置协议类型
 * @method string getIpProtocol() 获取IP协议类型
 * @method void setIpProtocol(string $IpProtocol) 设置IP协议类型
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getInterval() 获取时间间隔，单位为分钟
 * @method void setInterval(integer $Interval) 设置时间间隔，单位为分钟
 * @method string getMetric() 获取指标名称
 * @method void setMetric(string $Metric) 设置指标名称
 * @method integer getDistrict() 获取地区ID
 * @method void setDistrict(integer $District) 设置地区ID
 * @method integer getIsp() 获取运营商ID
 * @method void setIsp(integer $Isp) 设置运营商ID
 * @method array getDataPoints() 获取指标数据点
 * @method void setDataPoints(array $DataPoints) 设置指标数据点
 * @method string getDistrictName() 获取地区名称
 * @method void setDistrictName(string $DistrictName) 设置地区名称
 * @method string getIspName() 获取运营商名称
 * @method void setIspName(string $IspName) 设置运营商名称
 */
class DistrictIspInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议类型
     */
    public $Protocol;

    /**
     * @var string IP协议类型
     */
    public $IpProtocol;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 时间间隔，单位为分钟
     */
    public $Interval;

    /**
     * @var string 指标名称
     */
    public $Metric;

    /**
     * @var integer 地区ID
     */
    public $District;

    /**
     * @var integer 运营商ID
     */
    public $Isp;

    /**
     * @var array 指标数据点
     */
    public $DataPoints;

    /**
     * @var string 地区名称
     */
    public $DistrictName;

    /**
     * @var string 运营商名称
     */
    public $IspName;

    /**
     * @param string $Domain 域名
     * @param string $Protocol 协议类型
     * @param string $IpProtocol IP协议类型
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param integer $Interval 时间间隔，单位为分钟
     * @param string $Metric 指标名称
     * @param integer $District 地区ID
     * @param integer $Isp 运营商ID
     * @param array $DataPoints 指标数据点
     * @param string $DistrictName 地区名称
     * @param string $IspName 运营商名称
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = $param["DataPoints"];
        }

        if (array_key_exists("DistrictName",$param) and $param["DistrictName"] !== null) {
            $this->DistrictName = $param["DistrictName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }
    }
}

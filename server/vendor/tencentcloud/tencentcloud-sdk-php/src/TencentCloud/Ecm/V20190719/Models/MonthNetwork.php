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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户对应月份的带宽信息
 *
 * @method ZoneInfo getZoneInfo() 获取节点zone信息
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) 设置节点zone信息
 * @method string getMonth() 获取带宽月份 示例"202103"
 * @method void setMonth(string $Month) 设置带宽月份 示例"202103"
 * @method string getBandwidthPkgId() 获取带宽包id 格式如"bwp-xxxxxxxx"
 * @method void setBandwidthPkgId(string $BandwidthPkgId) 设置带宽包id 格式如"bwp-xxxxxxxx"
 * @method string getIsp() 获取运营商简称 取值范围"CUCC;CTCC;CMCC"
 * @method void setIsp(string $Isp) 设置运营商简称 取值范围"CUCC;CTCC;CMCC"
 * @method float getTrafficMaxIn() 获取入网带宽包峰值,取值范围0.0-xxx.xxx
 * @method void setTrafficMaxIn(float $TrafficMaxIn) 设置入网带宽包峰值,取值范围0.0-xxx.xxx
 * @method float getTrafficMaxOut() 获取出网带宽包峰值,取值范围0.0-xxx.xxx
 * @method void setTrafficMaxOut(float $TrafficMaxOut) 设置出网带宽包峰值,取值范围0.0-xxx.xxx
 * @method float getFeeTraffic() 获取计费带宽,取值范围0.0-xxx.xxx
 * @method void setFeeTraffic(float $FeeTraffic) 设置计费带宽,取值范围0.0-xxx.xxx
 * @method string getStartTime() 获取月计费带宽起始时间 格式"yyyy-mm-dd HH:mm:ss"
 * @method void setStartTime(string $StartTime) 设置月计费带宽起始时间 格式"yyyy-mm-dd HH:mm:ss"
 * @method string getEndTime() 获取月计费带宽结束时间 格式"yyyy-mm-dd HH:mm:ss"
 * @method void setEndTime(string $EndTime) 设置月计费带宽结束时间 格式"yyyy-mm-dd HH:mm:ss"
 * @method integer getEffectiveDays() 获取月计费带宽实际有效天数 整形必须大于等于0
 * @method void setEffectiveDays(integer $EffectiveDays) 设置月计费带宽实际有效天数 整形必须大于等于0
 * @method integer getMonthDays() 获取指定月份的实际天数 实例 30
 * @method void setMonthDays(integer $MonthDays) 设置指定月份的实际天数 实例 30
 * @method float getEffectiveDaysRate() 获取有效天占比 保留小数点后四位0.2134
 * @method void setEffectiveDaysRate(float $EffectiveDaysRate) 设置有效天占比 保留小数点后四位0.2134
 * @method string getBandwidthPkgType() 获取计费带宽包类型 实例"Address","LoadBalance","AddressIpv6"
 * @method void setBandwidthPkgType(string $BandwidthPkgType) 设置计费带宽包类型 实例"Address","LoadBalance","AddressIpv6"
 */
class MonthNetwork extends AbstractModel
{
    /**
     * @var ZoneInfo 节点zone信息
     */
    public $ZoneInfo;

    /**
     * @var string 带宽月份 示例"202103"
     */
    public $Month;

    /**
     * @var string 带宽包id 格式如"bwp-xxxxxxxx"
     */
    public $BandwidthPkgId;

    /**
     * @var string 运营商简称 取值范围"CUCC;CTCC;CMCC"
     */
    public $Isp;

    /**
     * @var float 入网带宽包峰值,取值范围0.0-xxx.xxx
     */
    public $TrafficMaxIn;

    /**
     * @var float 出网带宽包峰值,取值范围0.0-xxx.xxx
     */
    public $TrafficMaxOut;

    /**
     * @var float 计费带宽,取值范围0.0-xxx.xxx
     */
    public $FeeTraffic;

    /**
     * @var string 月计费带宽起始时间 格式"yyyy-mm-dd HH:mm:ss"
     */
    public $StartTime;

    /**
     * @var string 月计费带宽结束时间 格式"yyyy-mm-dd HH:mm:ss"
     */
    public $EndTime;

    /**
     * @var integer 月计费带宽实际有效天数 整形必须大于等于0
     */
    public $EffectiveDays;

    /**
     * @var integer 指定月份的实际天数 实例 30
     */
    public $MonthDays;

    /**
     * @var float 有效天占比 保留小数点后四位0.2134
     */
    public $EffectiveDaysRate;

    /**
     * @var string 计费带宽包类型 实例"Address","LoadBalance","AddressIpv6"
     */
    public $BandwidthPkgType;

    /**
     * @param ZoneInfo $ZoneInfo 节点zone信息
     * @param string $Month 带宽月份 示例"202103"
     * @param string $BandwidthPkgId 带宽包id 格式如"bwp-xxxxxxxx"
     * @param string $Isp 运营商简称 取值范围"CUCC;CTCC;CMCC"
     * @param float $TrafficMaxIn 入网带宽包峰值,取值范围0.0-xxx.xxx
     * @param float $TrafficMaxOut 出网带宽包峰值,取值范围0.0-xxx.xxx
     * @param float $FeeTraffic 计费带宽,取值范围0.0-xxx.xxx
     * @param string $StartTime 月计费带宽起始时间 格式"yyyy-mm-dd HH:mm:ss"
     * @param string $EndTime 月计费带宽结束时间 格式"yyyy-mm-dd HH:mm:ss"
     * @param integer $EffectiveDays 月计费带宽实际有效天数 整形必须大于等于0
     * @param integer $MonthDays 指定月份的实际天数 实例 30
     * @param float $EffectiveDaysRate 有效天占比 保留小数点后四位0.2134
     * @param string $BandwidthPkgType 计费带宽包类型 实例"Address","LoadBalance","AddressIpv6"
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
        if (array_key_exists("ZoneInfo",$param) and $param["ZoneInfo"] !== null) {
            $this->ZoneInfo = new ZoneInfo();
            $this->ZoneInfo->deserialize($param["ZoneInfo"]);
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("BandwidthPkgId",$param) and $param["BandwidthPkgId"] !== null) {
            $this->BandwidthPkgId = $param["BandwidthPkgId"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("TrafficMaxIn",$param) and $param["TrafficMaxIn"] !== null) {
            $this->TrafficMaxIn = $param["TrafficMaxIn"];
        }

        if (array_key_exists("TrafficMaxOut",$param) and $param["TrafficMaxOut"] !== null) {
            $this->TrafficMaxOut = $param["TrafficMaxOut"];
        }

        if (array_key_exists("FeeTraffic",$param) and $param["FeeTraffic"] !== null) {
            $this->FeeTraffic = $param["FeeTraffic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EffectiveDays",$param) and $param["EffectiveDays"] !== null) {
            $this->EffectiveDays = $param["EffectiveDays"];
        }

        if (array_key_exists("MonthDays",$param) and $param["MonthDays"] !== null) {
            $this->MonthDays = $param["MonthDays"];
        }

        if (array_key_exists("EffectiveDaysRate",$param) and $param["EffectiveDaysRate"] !== null) {
            $this->EffectiveDaysRate = $param["EffectiveDaysRate"];
        }

        if (array_key_exists("BandwidthPkgType",$param) and $param["BandwidthPkgType"] !== null) {
            $this->BandwidthPkgType = $param["BandwidthPkgType"];
        }
    }
}

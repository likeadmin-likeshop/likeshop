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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则输入对象
 *
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getSourceIp() 获取访问源
 * @method void setSourceIp(string $SourceIp) 设置访问源
 * @method string getTargetIp() 获取访问目的
 * @method void setTargetIp(string $TargetIp) 设置访问目的
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getStrategy() 获取策略
 * @method void setStrategy(string $Strategy) 设置策略
 * @method integer getSourceType() 获取访问源类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
 * @method void setSourceType(integer $SourceType) 设置访问源类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
 * @method integer getDirection() 获取方向，0：出站，1：入站
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method integer getTargetType() 获取访问目的类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
 * @method void setTargetType(integer $TargetType) 设置访问目的类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method integer getId() 获取id值
 * @method void setId(integer $Id) 设置id值
 * @method string getLogId() 获取日志id，从告警处创建必传，其它为空
 * @method void setLogId(string $LogId) 设置日志id，从告警处创建必传，其它为空
 * @method integer getCity() 获取城市Code
 * @method void setCity(integer $City) 设置城市Code
 * @method integer getCountry() 获取国家Code
 * @method void setCountry(integer $Country) 设置国家Code
 * @method string getCloudCode() 获取云厂商，支持多个，以逗号分隔， 1:腾讯云（仅中国香港及海外）,2:阿里云,3:亚马逊云,4:华为云,5:微软云
 * @method void setCloudCode(string $CloudCode) 设置云厂商，支持多个，以逗号分隔， 1:腾讯云（仅中国香港及海外）,2:阿里云,3:亚马逊云,4:华为云,5:微软云
 * @method integer getIsRegion() 获取是否为地域
 * @method void setIsRegion(integer $IsRegion) 设置是否为地域
 * @method string getCityName() 获取城市名
 * @method void setCityName(string $CityName) 设置城市名
 * @method string getCountryName() 获取国家名
 * @method void setCountryName(string $CountryName) 设置国家名
 */
class RuleInfoData extends AbstractModel
{
    /**
     * @var integer 执行顺序
     */
    public $OrderIndex;

    /**
     * @var string 访问源
     */
    public $SourceIp;

    /**
     * @var string 访问目的
     */
    public $TargetIp;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 策略
     */
    public $Strategy;

    /**
     * @var integer 访问源类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
     */
    public $SourceType;

    /**
     * @var integer 方向，0：出站，1：入站
     */
    public $Direction;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var integer 访问目的类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
     */
    public $TargetType;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var integer id值
     */
    public $Id;

    /**
     * @var string 日志id，从告警处创建必传，其它为空
     */
    public $LogId;

    /**
     * @var integer 城市Code
     */
    public $City;

    /**
     * @var integer 国家Code
     */
    public $Country;

    /**
     * @var string 云厂商，支持多个，以逗号分隔， 1:腾讯云（仅中国香港及海外）,2:阿里云,3:亚马逊云,4:华为云,5:微软云
     */
    public $CloudCode;

    /**
     * @var integer 是否为地域
     */
    public $IsRegion;

    /**
     * @var string 城市名
     */
    public $CityName;

    /**
     * @var string 国家名
     */
    public $CountryName;

    /**
     * @param integer $OrderIndex 执行顺序
     * @param string $SourceIp 访问源
     * @param string $TargetIp 访问目的
     * @param string $Protocol 协议
     * @param string $Strategy 策略
     * @param integer $SourceType 访问源类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
     * @param integer $Direction 方向，0：出站，1：入站
     * @param string $Detail 描述
     * @param integer $TargetType 访问目的类型，1是IP，3是域名，4是IP地址模版，5是域名地址模版
     * @param string $Port 端口
     * @param integer $Id id值
     * @param string $LogId 日志id，从告警处创建必传，其它为空
     * @param integer $City 城市Code
     * @param integer $Country 国家Code
     * @param string $CloudCode 云厂商，支持多个，以逗号分隔， 1:腾讯云（仅中国香港及海外）,2:阿里云,3:亚马逊云,4:华为云,5:微软云
     * @param integer $IsRegion 是否为地域
     * @param string $CityName 城市名
     * @param string $CountryName 国家名
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }
    }
}

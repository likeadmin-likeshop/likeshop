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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量反欺诈-虚假TA识别
 *
 * @method integer getSeq() 获取请求序列号
 * @method void setSeq(integer $Seq) 设置请求序列号
 * @method string getOsType() 获取操作系统类型[0：未知；1：android；2：ios；3：windows]
 * @method void setOsType(string $OsType) 设置操作系统类型[0：未知；1：android；2：ios；3：windows]
 * @method integer getAgeFloor() 获取年龄下限
 * @method void setAgeFloor(integer $AgeFloor) 设置年龄下限
 * @method integer getAgeCeil() 获取年龄上限
 * @method void setAgeCeil(integer $AgeCeil) 设置年龄上限
 * @method integer getGender() 获取性别[1：男；2：女]
 * @method void setGender(integer $Gender) 设置性别[1：男；2：女]
 * @method integer getUserTime() 获取用户操作时间
 * @method void setUserTime(integer $UserTime) 设置用户操作时间
 * @method string getImei() 获取Imei [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method void setImei(string $Imei) 设置Imei [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method string getImeiMd5() 获取Imei小写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method void setImeiMd5(string $ImeiMd5) 设置Imei小写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method string getIdfa() 获取Idfa [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method void setIdfa(string $Idfa) 设置Idfa [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method string getIdfaMd5() 获取Idfa大写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method void setIdfaMd5(string $IdfaMd5) 设置Idfa大写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
 * @method string getUserIp() 获取用户IP
 * @method void setUserIp(string $UserIp) 设置用户IP
 * @method string getMac() 获取MAC地址[建议提供]
 * @method void setMac(string $Mac) 设置MAC地址[建议提供]
 * @method string getPhoneNum() 获取手机号码[中国大陆]
 * @method void setPhoneNum(string $PhoneNum) 设置手机号码[中国大陆]
 * @method string getUserAgent() 获取浏览器
 * @method void setUserAgent(string $UserAgent) 设置浏览器
 * @method string getApp() 获取APP名称
 * @method void setApp(string $App) 设置APP名称
 * @method string getPackage() 获取应用安装包名称
 * @method void setPackage(string $Package) 设置应用安装包名称
 * @method string getDeviceMaker() 获取设备制造商
 * @method void setDeviceMaker(string $DeviceMaker) 设置设备制造商
 * @method string getDeviceModule() 获取设备型号
 * @method void setDeviceModule(string $DeviceModule) 设置设备型号
 * @method string getAccessMode() 获取入网方式[1：WIFI；2：4G；3：3G；4：2G；5：其它]
 * @method void setAccessMode(string $AccessMode) 设置入网方式[1：WIFI；2：4G；3：3G；4：2G；5：其它]
 * @method string getSp() 获取运营商[1：移动；2：联通；3：电信；4：其它]
 * @method void setSp(string $Sp) 设置运营商[1：移动；2：联通；3：电信；4：其它]
 * @method string getUrl() 获取网址
 * @method void setUrl(string $Url) 设置网址
 * @method string getLocation() 获取用户地址
 * @method void setLocation(string $Location) 设置用户地址
 * @method string getLatitude() 获取纬度
 * @method void setLatitude(string $Latitude) 设置纬度
 * @method string getLongitude() 获取精度
 * @method void setLongitude(string $Longitude) 设置精度
 * @method string getContext() 获取辅助区分信息
 * @method void setContext(string $Context) 设置辅助区分信息
 */
class InputTaBspData extends AbstractModel
{
    /**
     * @var integer 请求序列号
     */
    public $Seq;

    /**
     * @var string 操作系统类型[0：未知；1：android；2：ios；3：windows]
     */
    public $OsType;

    /**
     * @var integer 年龄下限
     */
    public $AgeFloor;

    /**
     * @var integer 年龄上限
     */
    public $AgeCeil;

    /**
     * @var integer 性别[1：男；2：女]
     */
    public $Gender;

    /**
     * @var integer 用户操作时间
     */
    public $UserTime;

    /**
     * @var string Imei [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     */
    public $Imei;

    /**
     * @var string Imei小写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     */
    public $ImeiMd5;

    /**
     * @var string Idfa [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     */
    public $Idfa;

    /**
     * @var string Idfa大写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     */
    public $IdfaMd5;

    /**
     * @var string 用户IP
     */
    public $UserIp;

    /**
     * @var string MAC地址[建议提供]
     */
    public $Mac;

    /**
     * @var string 手机号码[中国大陆]
     */
    public $PhoneNum;

    /**
     * @var string 浏览器
     */
    public $UserAgent;

    /**
     * @var string APP名称
     */
    public $App;

    /**
     * @var string 应用安装包名称
     */
    public $Package;

    /**
     * @var string 设备制造商
     */
    public $DeviceMaker;

    /**
     * @var string 设备型号
     */
    public $DeviceModule;

    /**
     * @var string 入网方式[1：WIFI；2：4G；3：3G；4：2G；5：其它]
     */
    public $AccessMode;

    /**
     * @var string 运营商[1：移动；2：联通；3：电信；4：其它]
     */
    public $Sp;

    /**
     * @var string 网址
     */
    public $Url;

    /**
     * @var string 用户地址
     */
    public $Location;

    /**
     * @var string 纬度
     */
    public $Latitude;

    /**
     * @var string 精度
     */
    public $Longitude;

    /**
     * @var string 辅助区分信息
     */
    public $Context;

    /**
     * @param integer $Seq 请求序列号
     * @param string $OsType 操作系统类型[0：未知；1：android；2：ios；3：windows]
     * @param integer $AgeFloor 年龄下限
     * @param integer $AgeCeil 年龄上限
     * @param integer $Gender 性别[1：男；2：女]
     * @param integer $UserTime 用户操作时间
     * @param string $Imei Imei [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     * @param string $ImeiMd5 Imei小写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     * @param string $Idfa Idfa [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     * @param string $IdfaMd5 Idfa大写后加密Md5 [在(Imei|ImeiMd5|Idfa|IdfaMd5)里面4选1]
     * @param string $UserIp 用户IP
     * @param string $Mac MAC地址[建议提供]
     * @param string $PhoneNum 手机号码[中国大陆]
     * @param string $UserAgent 浏览器
     * @param string $App APP名称
     * @param string $Package 应用安装包名称
     * @param string $DeviceMaker 设备制造商
     * @param string $DeviceModule 设备型号
     * @param string $AccessMode 入网方式[1：WIFI；2：4G；3：3G；4：2G；5：其它]
     * @param string $Sp 运营商[1：移动；2：联通；3：电信；4：其它]
     * @param string $Url 网址
     * @param string $Location 用户地址
     * @param string $Latitude 纬度
     * @param string $Longitude 精度
     * @param string $Context 辅助区分信息
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
        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AgeFloor",$param) and $param["AgeFloor"] !== null) {
            $this->AgeFloor = $param["AgeFloor"];
        }

        if (array_key_exists("AgeCeil",$param) and $param["AgeCeil"] !== null) {
            $this->AgeCeil = $param["AgeCeil"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("UserTime",$param) and $param["UserTime"] !== null) {
            $this->UserTime = $param["UserTime"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("ImeiMd5",$param) and $param["ImeiMd5"] !== null) {
            $this->ImeiMd5 = $param["ImeiMd5"];
        }

        if (array_key_exists("Idfa",$param) and $param["Idfa"] !== null) {
            $this->Idfa = $param["Idfa"];
        }

        if (array_key_exists("IdfaMd5",$param) and $param["IdfaMd5"] !== null) {
            $this->IdfaMd5 = $param["IdfaMd5"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DeviceMaker",$param) and $param["DeviceMaker"] !== null) {
            $this->DeviceMaker = $param["DeviceMaker"];
        }

        if (array_key_exists("DeviceModule",$param) and $param["DeviceModule"] !== null) {
            $this->DeviceModule = $param["DeviceModule"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("Sp",$param) and $param["Sp"] !== null) {
            $this->Sp = $param["Sp"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}

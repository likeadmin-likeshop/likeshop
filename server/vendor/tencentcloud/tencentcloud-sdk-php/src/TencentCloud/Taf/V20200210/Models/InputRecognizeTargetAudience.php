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
 * 流量反欺诈-验准入参
 *
 * @method string getUid() 获取设备ID，AccountType指定的类型
 * @method void setUid(string $Uid) 设置设备ID，AccountType指定的类型
 * @method integer getAccountType() 获取设备号类型，1.imei 2.imeiMd5（小写后转MD5转小写）3.idfa， 4.idfaMd5（大写后转MD5转小写），5.手机号,256.其它
 * @method void setAccountType(integer $AccountType) 设置设备号类型，1.imei 2.imeiMd5（小写后转MD5转小写）3.idfa， 4.idfaMd5（大写后转MD5转小写），5.手机号,256.其它
 * @method array getModelIdList() 获取模型ID列表
 * @method void setModelIdList(array $ModelIdList) 设置模型ID列表
 * @method string getIp() 获取用户IP
 * @method void setIp(string $Ip) 设置用户IP
 * @method string getOs() 获取操作系统类型(unknown，android，ios，windows)
 * @method void setOs(string $Os) 设置操作系统类型(unknown，android，ios，windows)
 * @method string getOsv() 获取操作系统版本
 * @method void setOsv(string $Osv) 设置操作系统版本
 * @method string getLat() 获取纬度
 * @method void setLat(string $Lat) 设置纬度
 * @method string getLon() 获取经度
 * @method void setLon(string $Lon) 设置经度
 * @method string getDeviceModel() 获取设备型号(MI 6)
 * @method void setDeviceModel(string $DeviceModel) 设置设备型号(MI 6)
 * @method integer getBidFloor() 获取竞价底价
 * @method void setBidFloor(integer $BidFloor) 设置竞价底价
 * @method integer getAge() 获取年龄
 * @method void setAge(integer $Age) 设置年龄
 * @method integer getGender() 获取性别(1.MALE 2.FEMALE)
 * @method void setGender(integer $Gender) 设置性别(1.MALE 2.FEMALE)
 * @method string getLocation() 获取用户地址
 * @method void setLocation(string $Location) 设置用户地址
 * @method integer getDeliveryMode() 获取投放模式（0=PDB，1=PD，2=RTB，10=其他）
 * @method void setDeliveryMode(integer $DeliveryMode) 设置投放模式（0=PDB，1=PD，2=RTB，10=其他）
 * @method integer getAdvertisingType() 获取广告位类型<br />（0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
 * @method void setAdvertisingType(integer $AdvertisingType) 设置广告位类型<br />（0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
 * @method string getMac() 获取mac地址，建议提供
 * @method void setMac(string $Mac) 设置mac地址，建议提供
 * @method string getPhone() 获取电话号码
 * @method void setPhone(string $Phone) 设置电话号码
 * @method string getUa() 获取浏览器类型
 * @method void setUa(string $Ua) 设置浏览器类型
 * @method string getApp() 获取客户端应用
 * @method void setApp(string $App) 设置客户端应用
 * @method string getPackage() 获取应用包名
 * @method void setPackage(string $Package) 设置应用包名
 * @method string getMaker() 获取设备制造商
 * @method void setMaker(string $Maker) 设置设备制造商
 * @method string getDeviceType() 获取设备类型（PHONE,TABLET）
 * @method void setDeviceType(string $DeviceType) 设置设备类型（PHONE,TABLET）
 * @method string getAccessMode() 获取入网方式(wifi,4g,3g,2g)
 * @method void setAccessMode(string $AccessMode) 设置入网方式(wifi,4g,3g,2g)
 * @method integer getSp() 获取运营商(1.移动 2.联通 3.电信等)
 * @method void setSp(integer $Sp) 设置运营商(1.移动 2.联通 3.电信等)
 * @method integer getDeviceW() 获取设备屏幕分辨率宽度像素数
 * @method void setDeviceW(integer $DeviceW) 设置设备屏幕分辨率宽度像素数
 * @method integer getDeviceH() 获取设备屏幕分辨率高度像素数
 * @method void setDeviceH(integer $DeviceH) 设置设备屏幕分辨率高度像素数
 * @method integer getFullScreen() 获取是否全屏插广告(0-否，1-是)
 * @method void setFullScreen(integer $FullScreen) 设置是否全屏插广告(0-否，1-是)
 * @method integer getImpBannerW() 获取广告位宽度
 * @method void setImpBannerW(integer $ImpBannerW) 设置广告位宽度
 * @method integer getImpBannerH() 获取广告位高度
 * @method void setImpBannerH(integer $ImpBannerH) 设置广告位高度
 * @method string getUrl() 获取网址
 * @method void setUrl(string $Url) 设置网址
 * @method string getContext() 获取上下文信息
 * @method void setContext(string $Context) 设置上下文信息
 * @method string getChannel() 获取渠道
 * @method void setChannel(string $Channel) 设置渠道
 * @method string getReqId() 获取请求ID
 * @method void setReqId(string $ReqId) 设置请求ID
 * @method string getReqMd5() 获取请求ID的md5值
 * @method void setReqMd5(string $ReqMd5) 设置请求ID的md5值
 * @method integer getAdType() 获取ad_type
 * @method void setAdType(integer $AdType) 设置ad_type
 * @method string getAppName() 获取app name
 * @method void setAppName(string $AppName) 设置app name
 * @method string getAppVer() 获取appVer
 * @method void setAppVer(string $AppVer) 设置appVer
 * @method integer getReqType() 获取竞价模式1：rtb 2:pd
 * @method void setReqType(integer $ReqType) 设置竞价模式1：rtb 2:pd
 */
class InputRecognizeTargetAudience extends AbstractModel
{
    /**
     * @var string 设备ID，AccountType指定的类型
     */
    public $Uid;

    /**
     * @var integer 设备号类型，1.imei 2.imeiMd5（小写后转MD5转小写）3.idfa， 4.idfaMd5（大写后转MD5转小写），5.手机号,256.其它
     */
    public $AccountType;

    /**
     * @var array 模型ID列表
     */
    public $ModelIdList;

    /**
     * @var string 用户IP
     */
    public $Ip;

    /**
     * @var string 操作系统类型(unknown，android，ios，windows)
     */
    public $Os;

    /**
     * @var string 操作系统版本
     */
    public $Osv;

    /**
     * @var string 纬度
     */
    public $Lat;

    /**
     * @var string 经度
     */
    public $Lon;

    /**
     * @var string 设备型号(MI 6)
     */
    public $DeviceModel;

    /**
     * @var integer 竞价底价
     */
    public $BidFloor;

    /**
     * @var integer 年龄
     */
    public $Age;

    /**
     * @var integer 性别(1.MALE 2.FEMALE)
     */
    public $Gender;

    /**
     * @var string 用户地址
     */
    public $Location;

    /**
     * @var integer 投放模式（0=PDB，1=PD，2=RTB，10=其他）
     */
    public $DeliveryMode;

    /**
     * @var integer 广告位类型<br />（0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
     */
    public $AdvertisingType;

    /**
     * @var string mac地址，建议提供
     */
    public $Mac;

    /**
     * @var string 电话号码
     */
    public $Phone;

    /**
     * @var string 浏览器类型
     */
    public $Ua;

    /**
     * @var string 客户端应用
     */
    public $App;

    /**
     * @var string 应用包名
     */
    public $Package;

    /**
     * @var string 设备制造商
     */
    public $Maker;

    /**
     * @var string 设备类型（PHONE,TABLET）
     */
    public $DeviceType;

    /**
     * @var string 入网方式(wifi,4g,3g,2g)
     */
    public $AccessMode;

    /**
     * @var integer 运营商(1.移动 2.联通 3.电信等)
     */
    public $Sp;

    /**
     * @var integer 设备屏幕分辨率宽度像素数
     */
    public $DeviceW;

    /**
     * @var integer 设备屏幕分辨率高度像素数
     */
    public $DeviceH;

    /**
     * @var integer 是否全屏插广告(0-否，1-是)
     */
    public $FullScreen;

    /**
     * @var integer 广告位宽度
     */
    public $ImpBannerW;

    /**
     * @var integer 广告位高度
     */
    public $ImpBannerH;

    /**
     * @var string 网址
     */
    public $Url;

    /**
     * @var string 上下文信息
     */
    public $Context;

    /**
     * @var string 渠道
     */
    public $Channel;

    /**
     * @var string 请求ID
     */
    public $ReqId;

    /**
     * @var string 请求ID的md5值
     */
    public $ReqMd5;

    /**
     * @var integer ad_type
     */
    public $AdType;

    /**
     * @var string app name
     */
    public $AppName;

    /**
     * @var string appVer
     */
    public $AppVer;

    /**
     * @var integer 竞价模式1：rtb 2:pd
     */
    public $ReqType;

    /**
     * @param string $Uid 设备ID，AccountType指定的类型
     * @param integer $AccountType 设备号类型，1.imei 2.imeiMd5（小写后转MD5转小写）3.idfa， 4.idfaMd5（大写后转MD5转小写），5.手机号,256.其它
     * @param array $ModelIdList 模型ID列表
     * @param string $Ip 用户IP
     * @param string $Os 操作系统类型(unknown，android，ios，windows)
     * @param string $Osv 操作系统版本
     * @param string $Lat 纬度
     * @param string $Lon 经度
     * @param string $DeviceModel 设备型号(MI 6)
     * @param integer $BidFloor 竞价底价
     * @param integer $Age 年龄
     * @param integer $Gender 性别(1.MALE 2.FEMALE)
     * @param string $Location 用户地址
     * @param integer $DeliveryMode 投放模式（0=PDB，1=PD，2=RTB，10=其他）
     * @param integer $AdvertisingType 广告位类型<br />（0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
     * @param string $Mac mac地址，建议提供
     * @param string $Phone 电话号码
     * @param string $Ua 浏览器类型
     * @param string $App 客户端应用
     * @param string $Package 应用包名
     * @param string $Maker 设备制造商
     * @param string $DeviceType 设备类型（PHONE,TABLET）
     * @param string $AccessMode 入网方式(wifi,4g,3g,2g)
     * @param integer $Sp 运营商(1.移动 2.联通 3.电信等)
     * @param integer $DeviceW 设备屏幕分辨率宽度像素数
     * @param integer $DeviceH 设备屏幕分辨率高度像素数
     * @param integer $FullScreen 是否全屏插广告(0-否，1-是)
     * @param integer $ImpBannerW 广告位宽度
     * @param integer $ImpBannerH 广告位高度
     * @param string $Url 网址
     * @param string $Context 上下文信息
     * @param string $Channel 渠道
     * @param string $ReqId 请求ID
     * @param string $ReqMd5 请求ID的md5值
     * @param integer $AdType ad_type
     * @param string $AppName app name
     * @param string $AppVer appVer
     * @param integer $ReqType 竞价模式1：rtb 2:pd
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("ModelIdList",$param) and $param["ModelIdList"] !== null) {
            $this->ModelIdList = $param["ModelIdList"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Osv",$param) and $param["Osv"] !== null) {
            $this->Osv = $param["Osv"];
        }

        if (array_key_exists("Lat",$param) and $param["Lat"] !== null) {
            $this->Lat = $param["Lat"];
        }

        if (array_key_exists("Lon",$param) and $param["Lon"] !== null) {
            $this->Lon = $param["Lon"];
        }

        if (array_key_exists("DeviceModel",$param) and $param["DeviceModel"] !== null) {
            $this->DeviceModel = $param["DeviceModel"];
        }

        if (array_key_exists("BidFloor",$param) and $param["BidFloor"] !== null) {
            $this->BidFloor = $param["BidFloor"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("DeliveryMode",$param) and $param["DeliveryMode"] !== null) {
            $this->DeliveryMode = $param["DeliveryMode"];
        }

        if (array_key_exists("AdvertisingType",$param) and $param["AdvertisingType"] !== null) {
            $this->AdvertisingType = $param["AdvertisingType"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("Maker",$param) and $param["Maker"] !== null) {
            $this->Maker = $param["Maker"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("Sp",$param) and $param["Sp"] !== null) {
            $this->Sp = $param["Sp"];
        }

        if (array_key_exists("DeviceW",$param) and $param["DeviceW"] !== null) {
            $this->DeviceW = $param["DeviceW"];
        }

        if (array_key_exists("DeviceH",$param) and $param["DeviceH"] !== null) {
            $this->DeviceH = $param["DeviceH"];
        }

        if (array_key_exists("FullScreen",$param) and $param["FullScreen"] !== null) {
            $this->FullScreen = $param["FullScreen"];
        }

        if (array_key_exists("ImpBannerW",$param) and $param["ImpBannerW"] !== null) {
            $this->ImpBannerW = $param["ImpBannerW"];
        }

        if (array_key_exists("ImpBannerH",$param) and $param["ImpBannerH"] !== null) {
            $this->ImpBannerH = $param["ImpBannerH"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }

        if (array_key_exists("ReqMd5",$param) and $param["ReqMd5"] !== null) {
            $this->ReqMd5 = $param["ReqMd5"];
        }

        if (array_key_exists("AdType",$param) and $param["AdType"] !== null) {
            $this->AdType = $param["AdType"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVer",$param) and $param["AppVer"] !== null) {
            $this->AppVer = $param["AppVer"];
        }

        if (array_key_exists("ReqType",$param) and $param["ReqType"] !== null) {
            $this->ReqType = $param["ReqType"];
        }
    }
}

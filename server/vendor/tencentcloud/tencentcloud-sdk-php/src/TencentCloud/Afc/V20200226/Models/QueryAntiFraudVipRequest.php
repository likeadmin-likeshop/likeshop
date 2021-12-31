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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAntiFraudVip请求参数结构体
 *
 * @method string getPhoneNumber() 获取电话号码(五选二)
 * @method void setPhoneNumber(string $PhoneNumber) 设置电话号码(五选二)
 * @method string getIdNumber() 获取Id号(五选二)
 * @method void setIdNumber(string $IdNumber) 设置Id号(五选二)
 * @method string getBankCardNumber() 获取银行卡号(五选二)
 * @method void setBankCardNumber(string $BankCardNumber) 设置银行卡号(五选二)
 * @method string getUserIp() 获取用户请求来源 IP(五选二)
 * @method void setUserIp(string $UserIp) 设置用户请求来源 IP(五选二)
 * @method string getImei() 获取国际移动设备识别码(五选二)
 * @method void setImei(string $Imei) 设置国际移动设备识别码(五选二)
 * @method string getIdfa() 获取ios 系统广告标示符(五选二)
 * @method void setIdfa(string $Idfa) 设置ios 系统广告标示符(五选二)
 * @method string getScene() 获取业务场景 ID，需要找技术对接
 * @method void setScene(string $Scene) 设置业务场景 ID，需要找技术对接
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getEmailAddress() 获取用户邮箱地址
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址
 * @method string getAddress() 获取用户住址
 * @method void setAddress(string $Address) 设置用户住址
 * @method string getAccountType() 获取关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
 * @method void setAccountType(string $AccountType) 设置关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
 * @method string getUid() 获取可选的 QQ 或微信 openid
 * @method void setUid(string $Uid) 设置可选的 QQ 或微信 openid
 * @method string getAppIdU() 获取qq 或微信分配给网站或应用的 appid，用来
唯一标识网站或应用
 * @method void setAppIdU(string $AppIdU) 设置qq 或微信分配给网站或应用的 appid，用来
唯一标识网站或应用
 * @method string getWifiMac() 获取WIFI MAC
 * @method void setWifiMac(string $WifiMac) 设置WIFI MAC
 * @method string getWifiSSID() 获取WIFI 服务集标识
 * @method void setWifiSSID(string $WifiSSID) 设置WIFI 服务集标识
 * @method string getWifiBSSID() 获取WIFI-BSSID
 * @method void setWifiBSSID(string $WifiBSSID) 设置WIFI-BSSID
 * @method string getBusinessId() 获取业务 ID，在多个业务中使用此服务，通过此
ID 区分统计数据
 * @method void setBusinessId(string $BusinessId) 设置业务 ID，在多个业务中使用此服务，通过此
ID 区分统计数据
 * @method string getIdCryptoType() 获取Id加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
 * @method void setIdCryptoType(string $IdCryptoType) 设置Id加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
 * @method string getPhoneCryptoType() 获取手机号加密类型
0：不加密（默认值）
1：md5, 2：sha256
3：SM3
 * @method void setPhoneCryptoType(string $PhoneCryptoType) 设置手机号加密类型
0：不加密（默认值）
1：md5, 2：sha256
3：SM3
 * @method string getMac() 获取MAC 地址
 * @method void setMac(string $Mac) 设置MAC 地址
 * @method string getImsi() 获取国际移动用户识别码
 * @method void setImsi(string $Imsi) 设置国际移动用户识别码
 * @method string getNameCryptoType() 获取姓名加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
 * @method void setNameCryptoType(string $NameCryptoType) 设置姓名加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
 */
class QueryAntiFraudVipRequest extends AbstractModel
{
    /**
     * @var string 电话号码(五选二)
     */
    public $PhoneNumber;

    /**
     * @var string Id号(五选二)
     */
    public $IdNumber;

    /**
     * @var string 银行卡号(五选二)
     */
    public $BankCardNumber;

    /**
     * @var string 用户请求来源 IP(五选二)
     */
    public $UserIp;

    /**
     * @var string 国际移动设备识别码(五选二)
     */
    public $Imei;

    /**
     * @var string ios 系统广告标示符(五选二)
     */
    public $Idfa;

    /**
     * @var string 业务场景 ID，需要找技术对接
     */
    public $Scene;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 用户邮箱地址
     */
    public $EmailAddress;

    /**
     * @var string 用户住址
     */
    public $Address;

    /**
     * @var string 关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
     */
    public $AccountType;

    /**
     * @var string 可选的 QQ 或微信 openid
     */
    public $Uid;

    /**
     * @var string qq 或微信分配给网站或应用的 appid，用来
唯一标识网站或应用
     */
    public $AppIdU;

    /**
     * @var string WIFI MAC
     */
    public $WifiMac;

    /**
     * @var string WIFI 服务集标识
     */
    public $WifiSSID;

    /**
     * @var string WIFI-BSSID
     */
    public $WifiBSSID;

    /**
     * @var string 业务 ID，在多个业务中使用此服务，通过此
ID 区分统计数据
     */
    public $BusinessId;

    /**
     * @var string Id加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
     */
    public $IdCryptoType;

    /**
     * @var string 手机号加密类型
0：不加密（默认值）
1：md5, 2：sha256
3：SM3
     */
    public $PhoneCryptoType;

    /**
     * @var string MAC 地址
     */
    public $Mac;

    /**
     * @var string 国际移动用户识别码
     */
    public $Imsi;

    /**
     * @var string 姓名加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
     */
    public $NameCryptoType;

    /**
     * @param string $PhoneNumber 电话号码(五选二)
     * @param string $IdNumber Id号(五选二)
     * @param string $BankCardNumber 银行卡号(五选二)
     * @param string $UserIp 用户请求来源 IP(五选二)
     * @param string $Imei 国际移动设备识别码(五选二)
     * @param string $Idfa ios 系统广告标示符(五选二)
     * @param string $Scene 业务场景 ID，需要找技术对接
     * @param string $Name 姓名
     * @param string $EmailAddress 用户邮箱地址
     * @param string $Address 用户住址
     * @param string $AccountType 关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
     * @param string $Uid 可选的 QQ 或微信 openid
     * @param string $AppIdU qq 或微信分配给网站或应用的 appid，用来
唯一标识网站或应用
     * @param string $WifiMac WIFI MAC
     * @param string $WifiSSID WIFI 服务集标识
     * @param string $WifiBSSID WIFI-BSSID
     * @param string $BusinessId 业务 ID，在多个业务中使用此服务，通过此
ID 区分统计数据
     * @param string $IdCryptoType Id加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
     * @param string $PhoneCryptoType 手机号加密类型
0：不加密（默认值）
1：md5, 2：sha256
3：SM3
     * @param string $Mac MAC 地址
     * @param string $Imsi 国际移动用户识别码
     * @param string $NameCryptoType 姓名加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
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
        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("IdNumber",$param) and $param["IdNumber"] !== null) {
            $this->IdNumber = $param["IdNumber"];
        }

        if (array_key_exists("BankCardNumber",$param) and $param["BankCardNumber"] !== null) {
            $this->BankCardNumber = $param["BankCardNumber"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Idfa",$param) and $param["Idfa"] !== null) {
            $this->Idfa = $param["Idfa"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("AppIdU",$param) and $param["AppIdU"] !== null) {
            $this->AppIdU = $param["AppIdU"];
        }

        if (array_key_exists("WifiMac",$param) and $param["WifiMac"] !== null) {
            $this->WifiMac = $param["WifiMac"];
        }

        if (array_key_exists("WifiSSID",$param) and $param["WifiSSID"] !== null) {
            $this->WifiSSID = $param["WifiSSID"];
        }

        if (array_key_exists("WifiBSSID",$param) and $param["WifiBSSID"] !== null) {
            $this->WifiBSSID = $param["WifiBSSID"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("IdCryptoType",$param) and $param["IdCryptoType"] !== null) {
            $this->IdCryptoType = $param["IdCryptoType"];
        }

        if (array_key_exists("PhoneCryptoType",$param) and $param["PhoneCryptoType"] !== null) {
            $this->PhoneCryptoType = $param["PhoneCryptoType"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Imsi",$param) and $param["Imsi"] !== null) {
            $this->Imsi = $param["Imsi"];
        }

        if (array_key_exists("NameCryptoType",$param) and $param["NameCryptoType"] !== null) {
            $this->NameCryptoType = $param["NameCryptoType"];
        }
    }
}

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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全栈式风控引擎入参
 *
 * @method AccountInfo getAccount() 获取账号信息。
 * @method void setAccount(AccountInfo $Account) 设置账号信息。
 * @method string getSceneCode() 获取场景类型：场景SceneCode, 控制台上新建对应的场景并获取对应的值；
例如：e_register_protection_1521184361
控制台链接：https://console.cloud.tencent.com/rce/risk/sceneroot；
 * @method void setSceneCode(string $SceneCode) 设置场景类型：场景SceneCode, 控制台上新建对应的场景并获取对应的值；
例如：e_register_protection_1521184361
控制台链接：https://console.cloud.tencent.com/rce/risk/sceneroot；
 * @method string getUserIp() 获取登录来源的外网IP
 * @method void setUserIp(string $UserIp) 设置登录来源的外网IP
 * @method integer getPostTime() 获取用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
 * @method void setPostTime(integer $PostTime) 设置用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
 * @method string getUserId() 获取用户唯一标识。
 * @method void setUserId(string $UserId) 设置用户唯一标识。
 * @method string getDeviceToken() 获取设备指纹token。
 * @method void setDeviceToken(string $DeviceToken) 设置设备指纹token。
 * @method integer getDeviceBusinessId() 获取设备指纹BusinessId
 * @method void setDeviceBusinessId(integer $DeviceBusinessId) 设置设备指纹BusinessId
 * @method integer getBusinessId() 获取业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method void setBusinessId(integer $BusinessId) 设置业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method string getNickname() 获取昵称，UTF-8 编码。
 * @method void setNickname(string $Nickname) 设置昵称，UTF-8 编码。
 * @method string getEmailAddress() 获取用户邮箱地址（非系统自动生成）。
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址（非系统自动生成）。
 * @method integer getCheckDevice() 获取是否识别设备异常：
0：不识别。
1：识别。
 * @method void setCheckDevice(integer $CheckDevice) 设置是否识别设备异常：
0：不识别。
1：识别。
 * @method string getCookieHash() 获取用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method void setCookieHash(string $CookieHash) 设置用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method string getReferer() 获取用户HTTP请求的Referer值。
 * @method void setReferer(string $Referer) 设置用户HTTP请求的Referer值。
 * @method string getUserAgent() 获取用户HTTP请求的User-Agent值。
 * @method void setUserAgent(string $UserAgent) 设置用户HTTP请求的User-Agent值。
 * @method string getXForwardedFor() 获取用户HTTP请求的X-Forwarded-For值。
 * @method void setXForwardedFor(string $XForwardedFor) 设置用户HTTP请求的X-Forwarded-For值。
 * @method string getMacAddress() 获取MAC地址或设备唯一标识。
 * @method void setMacAddress(string $MacAddress) 设置MAC地址或设备唯一标识。
 * @method string getVendorId() 获取手机制造商ID，如果手机注册，请带上此信息。
 * @method void setVendorId(string $VendorId) 设置手机制造商ID，如果手机注册，请带上此信息。
 * @method integer getDeviceType() 获取设备类型：
1：Android
2：IOS
 * @method void setDeviceType(integer $DeviceType) 设置设备类型：
1：Android
2：IOS
 * @method array getDetails() 获取详细信息
FieldName 清单
Android serial_number String 否 设备序列号
Android carrier String 否 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
Android mcc_mnc String 否 netOperator MCC+MNC
Android model String 否 手机型号
Android os_system String 否 操作系统
Android vendor_id String 否 设备品牌 “华为”“oppo”“小米”
Android device_version String 否 设备版本
Android android_api_level String 否 安卓API等级
Android phone_chip_info String 否 手机芯片信息
Android resolution_w String 否 屏幕分辨率宽，保留整数
Android resolution_h String 否 屏幕分辨率高，保留整数
Android brightness String 否 屏幕亮度
Android bluetooth_address String 否 蓝牙地址
Android baseband_version String 否 基带版本
Android kernel_version String 否 kernel 版本
Android cpu_core String 否 CPU 核数
Android cpu_model String 否 CPU 型号
Android memory String 否 内存容量，单位转换为 GB
Android storage String 否 存储容量，单位转换为 GB
Android volume String 否 手机音量
Android battery_power String 否 电池电量
Android language String 否 语言
Android package_name String 否 软件包名
Android App_version String 否 App 版本号
Android App_name String 否 App 显示名称
Android is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
Android is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
Android is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
Android charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
Android network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
Android wifi_mac String 否 WiFi MAC地址
IOS model String 否 机器型号 iPhone11
IOS memory String 否 内存容量，单位转换为 GB
IOS os_system String 否 操作系统
IOS device_version String 否 设备版本
IOS phone_chip_info String 否 手机芯片信息
IOS device_name String 否 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS uptime String 否 开机时间
IOS language String 否 系统语言
IOS carrier String 否 运营商
IOS cpu_model String 否 CPU 型号
IOS cpu_core String 否 CPU 个数
IOS volume String 否 手机音量
IOS battery_power String 否 电池电量
IOS resolution_w String 否 屏幕分辨率宽，保留整数
IOS resolution_h String 否 屏幕分辨率高，保留整数
IOS package_name String 否 App 包名
IOS App_version String 否 App 版本号
IOS App_name String 否 App 显示名称
IOS is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
IOS is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
IOS is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
IOS is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
IOS charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
IOS network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
IOS wifi_mac String 否 WiFi MAC地址
其他 os_system String 否 操作系统
其他 browser String 否 浏览器信息
其他 from_url String 否 来源链接
 * @method void setDetails(array $Details) 设置详细信息
FieldName 清单
Android serial_number String 否 设备序列号
Android carrier String 否 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
Android mcc_mnc String 否 netOperator MCC+MNC
Android model String 否 手机型号
Android os_system String 否 操作系统
Android vendor_id String 否 设备品牌 “华为”“oppo”“小米”
Android device_version String 否 设备版本
Android android_api_level String 否 安卓API等级
Android phone_chip_info String 否 手机芯片信息
Android resolution_w String 否 屏幕分辨率宽，保留整数
Android resolution_h String 否 屏幕分辨率高，保留整数
Android brightness String 否 屏幕亮度
Android bluetooth_address String 否 蓝牙地址
Android baseband_version String 否 基带版本
Android kernel_version String 否 kernel 版本
Android cpu_core String 否 CPU 核数
Android cpu_model String 否 CPU 型号
Android memory String 否 内存容量，单位转换为 GB
Android storage String 否 存储容量，单位转换为 GB
Android volume String 否 手机音量
Android battery_power String 否 电池电量
Android language String 否 语言
Android package_name String 否 软件包名
Android App_version String 否 App 版本号
Android App_name String 否 App 显示名称
Android is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
Android is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
Android is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
Android charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
Android network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
Android wifi_mac String 否 WiFi MAC地址
IOS model String 否 机器型号 iPhone11
IOS memory String 否 内存容量，单位转换为 GB
IOS os_system String 否 操作系统
IOS device_version String 否 设备版本
IOS phone_chip_info String 否 手机芯片信息
IOS device_name String 否 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS uptime String 否 开机时间
IOS language String 否 系统语言
IOS carrier String 否 运营商
IOS cpu_model String 否 CPU 型号
IOS cpu_core String 否 CPU 个数
IOS volume String 否 手机音量
IOS battery_power String 否 电池电量
IOS resolution_w String 否 屏幕分辨率宽，保留整数
IOS resolution_h String 否 屏幕分辨率高，保留整数
IOS package_name String 否 App 包名
IOS App_version String 否 App 版本号
IOS App_name String 否 App 显示名称
IOS is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
IOS is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
IOS is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
IOS is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
IOS charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
IOS network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
IOS wifi_mac String 否 WiFi MAC地址
其他 os_system String 否 操作系统
其他 browser String 否 浏览器信息
其他 from_url String 否 来源链接
 * @method SponsorInfo getSponsor() 获取可选填写。详情请跳转至SponsorInfo查看。
 * @method void setSponsor(SponsorInfo $Sponsor) 设置可选填写。详情请跳转至SponsorInfo查看。
 * @method OnlineScamInfo getOnlineScam() 获取可选填写。详情请跳转至OnlineScamInfo查看。
 * @method void setOnlineScam(OnlineScamInfo $OnlineScam) 设置可选填写。详情请跳转至OnlineScamInfo查看。
 */
class InputManageMarketingRisk extends AbstractModel
{
    /**
     * @var AccountInfo 账号信息。
     */
    public $Account;

    /**
     * @var string 场景类型：场景SceneCode, 控制台上新建对应的场景并获取对应的值；
例如：e_register_protection_1521184361
控制台链接：https://console.cloud.tencent.com/rce/risk/sceneroot；
     */
    public $SceneCode;

    /**
     * @var string 登录来源的外网IP
     */
    public $UserIp;

    /**
     * @var integer 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
     */
    public $PostTime;

    /**
     * @var string 用户唯一标识。
     */
    public $UserId;

    /**
     * @var string 设备指纹token。
     */
    public $DeviceToken;

    /**
     * @var integer 设备指纹BusinessId
     */
    public $DeviceBusinessId;

    /**
     * @var integer 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     */
    public $BusinessId;

    /**
     * @var string 昵称，UTF-8 编码。
     */
    public $Nickname;

    /**
     * @var string 用户邮箱地址（非系统自动生成）。
     */
    public $EmailAddress;

    /**
     * @var integer 是否识别设备异常：
0：不识别。
1：识别。
     */
    public $CheckDevice;

    /**
     * @var string 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     */
    public $CookieHash;

    /**
     * @var string 用户HTTP请求的Referer值。
     */
    public $Referer;

    /**
     * @var string 用户HTTP请求的User-Agent值。
     */
    public $UserAgent;

    /**
     * @var string 用户HTTP请求的X-Forwarded-For值。
     */
    public $XForwardedFor;

    /**
     * @var string MAC地址或设备唯一标识。
     */
    public $MacAddress;

    /**
     * @var string 手机制造商ID，如果手机注册，请带上此信息。
     */
    public $VendorId;

    /**
     * @var integer 设备类型：
1：Android
2：IOS
     */
    public $DeviceType;

    /**
     * @var array 详细信息
FieldName 清单
Android serial_number String 否 设备序列号
Android carrier String 否 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
Android mcc_mnc String 否 netOperator MCC+MNC
Android model String 否 手机型号
Android os_system String 否 操作系统
Android vendor_id String 否 设备品牌 “华为”“oppo”“小米”
Android device_version String 否 设备版本
Android android_api_level String 否 安卓API等级
Android phone_chip_info String 否 手机芯片信息
Android resolution_w String 否 屏幕分辨率宽，保留整数
Android resolution_h String 否 屏幕分辨率高，保留整数
Android brightness String 否 屏幕亮度
Android bluetooth_address String 否 蓝牙地址
Android baseband_version String 否 基带版本
Android kernel_version String 否 kernel 版本
Android cpu_core String 否 CPU 核数
Android cpu_model String 否 CPU 型号
Android memory String 否 内存容量，单位转换为 GB
Android storage String 否 存储容量，单位转换为 GB
Android volume String 否 手机音量
Android battery_power String 否 电池电量
Android language String 否 语言
Android package_name String 否 软件包名
Android App_version String 否 App 版本号
Android App_name String 否 App 显示名称
Android is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
Android is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
Android is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
Android charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
Android network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
Android wifi_mac String 否 WiFi MAC地址
IOS model String 否 机器型号 iPhone11
IOS memory String 否 内存容量，单位转换为 GB
IOS os_system String 否 操作系统
IOS device_version String 否 设备版本
IOS phone_chip_info String 否 手机芯片信息
IOS device_name String 否 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS uptime String 否 开机时间
IOS language String 否 系统语言
IOS carrier String 否 运营商
IOS cpu_model String 否 CPU 型号
IOS cpu_core String 否 CPU 个数
IOS volume String 否 手机音量
IOS battery_power String 否 电池电量
IOS resolution_w String 否 屏幕分辨率宽，保留整数
IOS resolution_h String 否 屏幕分辨率高，保留整数
IOS package_name String 否 App 包名
IOS App_version String 否 App 版本号
IOS App_name String 否 App 显示名称
IOS is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
IOS is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
IOS is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
IOS is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
IOS charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
IOS network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
IOS wifi_mac String 否 WiFi MAC地址
其他 os_system String 否 操作系统
其他 browser String 否 浏览器信息
其他 from_url String 否 来源链接
     */
    public $Details;

    /**
     * @var SponsorInfo 可选填写。详情请跳转至SponsorInfo查看。
     */
    public $Sponsor;

    /**
     * @var OnlineScamInfo 可选填写。详情请跳转至OnlineScamInfo查看。
     */
    public $OnlineScam;

    /**
     * @param AccountInfo $Account 账号信息。
     * @param string $SceneCode 场景类型：场景SceneCode, 控制台上新建对应的场景并获取对应的值；
例如：e_register_protection_1521184361
控制台链接：https://console.cloud.tencent.com/rce/risk/sceneroot；
     * @param string $UserIp 登录来源的外网IP
     * @param integer $PostTime 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
     * @param string $UserId 用户唯一标识。
     * @param string $DeviceToken 设备指纹token。
     * @param integer $DeviceBusinessId 设备指纹BusinessId
     * @param integer $BusinessId 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     * @param string $Nickname 昵称，UTF-8 编码。
     * @param string $EmailAddress 用户邮箱地址（非系统自动生成）。
     * @param integer $CheckDevice 是否识别设备异常：
0：不识别。
1：识别。
     * @param string $CookieHash 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     * @param string $Referer 用户HTTP请求的Referer值。
     * @param string $UserAgent 用户HTTP请求的User-Agent值。
     * @param string $XForwardedFor 用户HTTP请求的X-Forwarded-For值。
     * @param string $MacAddress MAC地址或设备唯一标识。
     * @param string $VendorId 手机制造商ID，如果手机注册，请带上此信息。
     * @param integer $DeviceType 设备类型：
1：Android
2：IOS
     * @param array $Details 详细信息
FieldName 清单
Android serial_number String 否 设备序列号
Android carrier String 否 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
Android mcc_mnc String 否 netOperator MCC+MNC
Android model String 否 手机型号
Android os_system String 否 操作系统
Android vendor_id String 否 设备品牌 “华为”“oppo”“小米”
Android device_version String 否 设备版本
Android android_api_level String 否 安卓API等级
Android phone_chip_info String 否 手机芯片信息
Android resolution_w String 否 屏幕分辨率宽，保留整数
Android resolution_h String 否 屏幕分辨率高，保留整数
Android brightness String 否 屏幕亮度
Android bluetooth_address String 否 蓝牙地址
Android baseband_version String 否 基带版本
Android kernel_version String 否 kernel 版本
Android cpu_core String 否 CPU 核数
Android cpu_model String 否 CPU 型号
Android memory String 否 内存容量，单位转换为 GB
Android storage String 否 存储容量，单位转换为 GB
Android volume String 否 手机音量
Android battery_power String 否 电池电量
Android language String 否 语言
Android package_name String 否 软件包名
Android App_version String 否 App 版本号
Android App_name String 否 App 显示名称
Android is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
Android is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
Android is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
Android charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
Android network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
Android wifi_mac String 否 WiFi MAC地址
IOS model String 否 机器型号 iPhone11
IOS memory String 否 内存容量，单位转换为 GB
IOS os_system String 否 操作系统
IOS device_version String 否 设备版本
IOS phone_chip_info String 否 手机芯片信息
IOS device_name String 否 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS uptime String 否 开机时间
IOS language String 否 系统语言
IOS carrier String 否 运营商
IOS cpu_model String 否 CPU 型号
IOS cpu_core String 否 CPU 个数
IOS volume String 否 手机音量
IOS battery_power String 否 电池电量
IOS resolution_w String 否 屏幕分辨率宽，保留整数
IOS resolution_h String 否 屏幕分辨率高，保留整数
IOS package_name String 否 App 包名
IOS App_version String 否 App 版本号
IOS App_name String 否 App 显示名称
IOS is_debug String 否 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
IOS is_root String 否 是否越狱；0 为正常，1 为越狱；其他值无效
IOS is_proxy String 否 是否启动代理；0 为未开启，1 为开启；其他值无效
IOS is_emulator String 否 是否模拟器；0 为未开启，1 为开启；其他值无效
IOS charge_status String 否 充电状态；1-不在充电，2-USB充电，3-电源充电
IOS network_type String 否 网络类型：2G/3G/4G/5G/WiFi/WWAN/other
IOS wifi_mac String 否 WiFi MAC地址
其他 os_system String 否 操作系统
其他 browser String 否 浏览器信息
其他 from_url String 否 来源链接
     * @param SponsorInfo $Sponsor 可选填写。详情请跳转至SponsorInfo查看。
     * @param OnlineScamInfo $OnlineScam 可选填写。详情请跳转至OnlineScamInfo查看。
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("DeviceBusinessId",$param) and $param["DeviceBusinessId"] !== null) {
            $this->DeviceBusinessId = $param["DeviceBusinessId"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("CheckDevice",$param) and $param["CheckDevice"] !== null) {
            $this->CheckDevice = $param["CheckDevice"];
        }

        if (array_key_exists("CookieHash",$param) and $param["CookieHash"] !== null) {
            $this->CookieHash = $param["CookieHash"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("XForwardedFor",$param) and $param["XForwardedFor"] !== null) {
            $this->XForwardedFor = $param["XForwardedFor"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("VendorId",$param) and $param["VendorId"] !== null) {
            $this->VendorId = $param["VendorId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new InputDetails();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("Sponsor",$param) and $param["Sponsor"] !== null) {
            $this->Sponsor = new SponsorInfo();
            $this->Sponsor->deserialize($param["Sponsor"]);
        }

        if (array_key_exists("OnlineScam",$param) and $param["OnlineScam"] !== null) {
            $this->OnlineScam = new OnlineScamInfo();
            $this->OnlineScam->deserialize($param["OnlineScam"]);
        }
    }
}

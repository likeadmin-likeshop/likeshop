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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备信息结构体
 *
 * @method integer getVendor() 获取运营商
1：移动 
2：电信
3：联通
4：广电
99：其他
 * @method void setVendor(integer $Vendor) 设置运营商
1：移动 
2：电信
3：联通
4：广电
99：其他
 * @method integer getOS() 获取设备操作系统：
1：Android
2： IOS
99：其他
 * @method void setOS(integer $OS) 设置设备操作系统：
1：Android
2： IOS
99：其他
 * @method string getDeviceId() 获取设备唯一标识
IOS 填写 IDFV
Android 填写 IMEI
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
IOS 填写 IDFV
Android 填写 IMEI
 * @method string getPhoneNum() 获取用户手机号码
 * @method void setPhoneNum(string $PhoneNum) 设置用户手机号码
 * @method integer getWireless() 获取无线信息
1：4G
2：5G
3：WIFI
99：其他
 * @method void setWireless(integer $Wireless) 设置无线信息
1：4G
2：5G
3：WIFI
99：其他
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var integer 运营商
1：移动 
2：电信
3：联通
4：广电
99：其他
     */
    public $Vendor;

    /**
     * @var integer 设备操作系统：
1：Android
2： IOS
99：其他
     */
    public $OS;

    /**
     * @var string 设备唯一标识
IOS 填写 IDFV
Android 填写 IMEI
     */
    public $DeviceId;

    /**
     * @var string 用户手机号码
     */
    public $PhoneNum;

    /**
     * @var integer 无线信息
1：4G
2：5G
3：WIFI
99：其他
     */
    public $Wireless;

    /**
     * @param integer $Vendor 运营商
1：移动 
2：电信
3：联通
4：广电
99：其他
     * @param integer $OS 设备操作系统：
1：Android
2： IOS
99：其他
     * @param string $DeviceId 设备唯一标识
IOS 填写 IDFV
Android 填写 IMEI
     * @param string $PhoneNum 用户手机号码
     * @param integer $Wireless 无线信息
1：4G
2：5G
3：WIFI
99：其他
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Wireless",$param) and $param["Wireless"] !== null) {
            $this->Wireless = $param["Wireless"];
        }
    }
}

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
namespace TencentCloud\Tms\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备信息
 *
 * @method string getIP() 获取用户IP
 * @method void setIP(string $IP) 设置用户IP
 * @method string getMac() 获取Mac地址
 * @method void setMac(string $Mac) 设置Mac地址
 * @method string getTokenId() 获取设备指纹Token
 * @method void setTokenId(string $TokenId) 设置设备指纹Token
 * @method string getDeviceId() 获取设备指纹ID
 * @method void setDeviceId(string $DeviceId) 设置设备指纹ID
 * @method string getIMEI() 获取设备序列号
 * @method void setIMEI(string $IMEI) 设置设备序列号
 * @method string getIDFA() 获取IOS设备，Identifier For Advertising（广告标识符）
 * @method void setIDFA(string $IDFA) 设置IOS设备，Identifier For Advertising（广告标识符）
 * @method string getIDFV() 获取IOS设备，IDFV - Identifier For Vendor（应用开发商标识符）
 * @method void setIDFV(string $IDFV) 设置IOS设备，IDFV - Identifier For Vendor（应用开发商标识符）
 */
class Device extends AbstractModel
{
    /**
     * @var string 用户IP
     */
    public $IP;

    /**
     * @var string Mac地址
     */
    public $Mac;

    /**
     * @var string 设备指纹Token
     */
    public $TokenId;

    /**
     * @var string 设备指纹ID
     */
    public $DeviceId;

    /**
     * @var string 设备序列号
     */
    public $IMEI;

    /**
     * @var string IOS设备，Identifier For Advertising（广告标识符）
     */
    public $IDFA;

    /**
     * @var string IOS设备，IDFV - Identifier For Vendor（应用开发商标识符）
     */
    public $IDFV;

    /**
     * @param string $IP 用户IP
     * @param string $Mac Mac地址
     * @param string $TokenId 设备指纹Token
     * @param string $DeviceId 设备指纹ID
     * @param string $IMEI 设备序列号
     * @param string $IDFA IOS设备，Identifier For Advertising（广告标识符）
     * @param string $IDFV IOS设备，IDFV - Identifier For Vendor（应用开发商标识符）
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("IMEI",$param) and $param["IMEI"] !== null) {
            $this->IMEI = $param["IMEI"];
        }

        if (array_key_exists("IDFA",$param) and $param["IDFA"] !== null) {
            $this->IDFA = $param["IDFA"];
        }

        if (array_key_exists("IDFV",$param) and $param["IDFV"] !== null) {
            $this->IDFV = $param["IDFV"];
        }
    }
}

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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统生成的TID和密钥信息
 *
 * @method string getTid() 获取TID号码
 * @method void setTid(string $Tid) 设置TID号码
 * @method string getPublicKey() 获取公钥
 * @method void setPublicKey(string $PublicKey) 设置公钥
 * @method string getPrivateKey() 获取私钥
 * @method void setPrivateKey(string $PrivateKey) 设置私钥
 * @method string getPsk() 获取共享密钥
 * @method void setPsk(string $Psk) 设置共享密钥
 * @method string getDownloadUrl() 获取软加固白盒密钥下载地址
 * @method void setDownloadUrl(string $DownloadUrl) 设置软加固白盒密钥下载地址
 * @method string getDeviceCode() 获取软加固设备标识码
 * @method void setDeviceCode(string $DeviceCode) 设置软加固设备标识码
 */
class TidKeysInfo extends AbstractModel
{
    /**
     * @var string TID号码
     */
    public $Tid;

    /**
     * @var string 公钥
     */
    public $PublicKey;

    /**
     * @var string 私钥
     */
    public $PrivateKey;

    /**
     * @var string 共享密钥
     */
    public $Psk;

    /**
     * @var string 软加固白盒密钥下载地址
     */
    public $DownloadUrl;

    /**
     * @var string 软加固设备标识码
     */
    public $DeviceCode;

    /**
     * @param string $Tid TID号码
     * @param string $PublicKey 公钥
     * @param string $PrivateKey 私钥
     * @param string $Psk 共享密钥
     * @param string $DownloadUrl 软加固白盒密钥下载地址
     * @param string $DeviceCode 软加固设备标识码
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("Psk",$param) and $param["Psk"] !== null) {
            $this->Psk = $param["Psk"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }
    }
}

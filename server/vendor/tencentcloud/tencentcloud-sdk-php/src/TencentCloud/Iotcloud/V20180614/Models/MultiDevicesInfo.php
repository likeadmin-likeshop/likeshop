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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建设备时返回的设备信息
 *
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getDevicePsk() 获取对称加密密钥，base64 编码，采用对称加密时返回该参数
 * @method void setDevicePsk(string $DevicePsk) 设置对称加密密钥，base64 编码，采用对称加密时返回该参数
 * @method string getDeviceCert() 获取设备证书，采用非对称加密时返回该参数
 * @method void setDeviceCert(string $DeviceCert) 设置设备证书，采用非对称加密时返回该参数
 * @method string getDevicePrivateKey() 获取设备私钥，采用非对称加密时返回该参数，腾讯云为用户缓存起来，其生命周期与任务生命周期一致
 * @method void setDevicePrivateKey(string $DevicePrivateKey) 设置设备私钥，采用非对称加密时返回该参数，腾讯云为用户缓存起来，其生命周期与任务生命周期一致
 * @method integer getResult() 获取错误码
 * @method void setResult(integer $Result) 设置错误码
 * @method string getErrMsg() 获取错误信息
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
 */
class MultiDevicesInfo extends AbstractModel
{
    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 对称加密密钥，base64 编码，采用对称加密时返回该参数
     */
    public $DevicePsk;

    /**
     * @var string 设备证书，采用非对称加密时返回该参数
     */
    public $DeviceCert;

    /**
     * @var string 设备私钥，采用非对称加密时返回该参数，腾讯云为用户缓存起来，其生命周期与任务生命周期一致
     */
    public $DevicePrivateKey;

    /**
     * @var integer 错误码
     */
    public $Result;

    /**
     * @var string 错误信息
     */
    public $ErrMsg;

    /**
     * @param string $DeviceName 设备名
     * @param string $DevicePsk 对称加密密钥，base64 编码，采用对称加密时返回该参数
     * @param string $DeviceCert 设备证书，采用非对称加密时返回该参数
     * @param string $DevicePrivateKey 设备私钥，采用非对称加密时返回该参数，腾讯云为用户缓存起来，其生命周期与任务生命周期一致
     * @param integer $Result 错误码
     * @param string $ErrMsg 错误信息
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePrivateKey",$param) and $param["DevicePrivateKey"] !== null) {
            $this->DevicePrivateKey = $param["DevicePrivateKey"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}

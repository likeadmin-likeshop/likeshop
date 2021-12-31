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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备证书及密钥
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getCertificate() 获取设备初始证书信息，base64编码
 * @method void setCertificate(string $Certificate) 设置设备初始证书信息，base64编码
 * @method string getWhiteBoxSoUrl() 获取设备私钥下载地址
 * @method void setWhiteBoxSoUrl(string $WhiteBoxSoUrl) 设置设备私钥下载地址
 */
class DeviceCertificate extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 设备初始证书信息，base64编码
     */
    public $Certificate;

    /**
     * @var string 设备私钥下载地址
     */
    public $WhiteBoxSoUrl;

    /**
     * @param string $Tid 设备TID
     * @param string $Certificate 设备初始证书信息，base64编码
     * @param string $WhiteBoxSoUrl 设备私钥下载地址
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

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("WhiteBoxSoUrl",$param) and $param["WhiteBoxSoUrl"] !== null) {
            $this->WhiteBoxSoUrl = $param["WhiteBoxSoUrl"];
        }
    }
}

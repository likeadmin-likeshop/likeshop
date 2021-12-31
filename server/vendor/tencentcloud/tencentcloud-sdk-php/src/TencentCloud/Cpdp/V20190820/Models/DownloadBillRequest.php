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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadBill请求参数结构体
 *
 * @method string getStateDate() 获取请求下载对账单日期
 * @method void setStateDate(string $StateDate) 设置请求下载对账单日期
 * @method string getMidasAppId() 获取聚鑫分配的MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的MidasAppId
 * @method string getMidasSecretId() 获取聚鑫分配的SecretId
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的SecretId
 * @method string getMidasSignature() 获取使用聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置使用聚鑫安全密钥计算的签名
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class DownloadBillRequest extends AbstractModel
{
    /**
     * @var string 请求下载对账单日期
     */
    public $StateDate;

    /**
     * @var string 聚鑫分配的MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 聚鑫分配的SecretId
     */
    public $MidasSecretId;

    /**
     * @var string 使用聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param string $StateDate 请求下载对账单日期
     * @param string $MidasAppId 聚鑫分配的MidasAppId
     * @param string $MidasSecretId 聚鑫分配的SecretId
     * @param string $MidasSignature 使用聚鑫安全密钥计算的签名
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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
        if (array_key_exists("StateDate",$param) and $param["StateDate"] !== null) {
            $this->StateDate = $param["StateDate"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}

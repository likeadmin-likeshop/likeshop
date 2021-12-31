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
 * ApplyReWithdrawal请求参数结构体
 *
 * @method integer getBusinessType() 获取聚鑫业务类型
 * @method void setBusinessType(integer $BusinessType) 设置聚鑫业务类型
 * @method string getMidasSecretId() 获取由平台客服提供的计费密钥Id
 * @method void setMidasSecretId(string $MidasSecretId) 设置由平台客服提供的计费密钥Id
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method WithdrawBill getBody() 获取提现信息
 * @method void setBody(WithdrawBill $Body) 设置提现信息
 * @method string getMidasAppId() 获取聚鑫业务ID
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫业务ID
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
class ApplyReWithdrawalRequest extends AbstractModel
{
    /**
     * @var integer 聚鑫业务类型
     */
    public $BusinessType;

    /**
     * @var string 由平台客服提供的计费密钥Id
     */
    public $MidasSecretId;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var WithdrawBill 提现信息
     */
    public $Body;

    /**
     * @var string 聚鑫业务ID
     */
    public $MidasAppId;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param integer $BusinessType 聚鑫业务类型
     * @param string $MidasSecretId 由平台客服提供的计费密钥Id
     * @param string $MidasSignature 计费签名
     * @param WithdrawBill $Body 提现信息
     * @param string $MidasAppId 聚鑫业务ID
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = new WithdrawBill();
            $this->Body->deserialize($param["Body"]);
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
